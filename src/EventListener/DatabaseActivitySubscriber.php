<?php

namespace App\EventListener;

use App\Entity\Module;
use App\Service\Mailing;
use Doctrine\ORM\Events;
use App\Entity\Quotation;
use Symfony\Bridge\Monolog\Logger;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\PreFlushEventArgs;
use Symfony\Component\Security\Core\Security;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class DatabaseActivitySubscriber implements EventSubscriber
{

    protected $mailing;

    public function __construct(Logger $logger, Security $security, Mailing $mailing)
    {
        // Avoid calling getUser() in the constructor: auth may not
        // be complete yet. Instead, store the entire Security object.
        $this->security = $security;

        $this->logger = $logger;

        $this->mailing = $mailing;

    }

    // this method can only return the event names; you cannot define a
    // custom method name to execute when each event triggers
    public function getSubscribedEvents()
    {
        return [
            Events::postPersist,
            Events::postRemove,
            Events::postUpdate,
            EVents::preFlush
        ];
    }

    // callback methods must be called exactly like the events they listen to;
    // they receive an argument of type LifecycleEventArgs, which gives you access
    // to both the entity object of the event and the entity manager itself
    public function postPersist(LifecycleEventArgs $args)
    {
        $this->logActivity('persist', $args);
        $this->sendEmailActivity($args);
    }

    public function postRemove(LifecycleEventArgs $args)
    {
        $this->logActivity('remove', $args);
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        $this->logActivity('update', $args);
        $this->removeUnusedModule($args);
    }


    /**
     * SoftDelete the entity by adding deletedAt date
     */
    public function preFlush(PreFlushEventArgs $event)
    {
        $em = $event->getEntityManager();
        foreach ($em->getUnitOfWork()->getScheduledEntityDeletions() as $object) {
            if(method_exists($object, "getDeletedAt")) {
                if ($object->getDeletedAt() instanceof \Datetime) {
                    continue; // hard remove the entity is it's already archived
                } else {
                    $object->setDeletedAt(new \DateTime());
                    $em->merge($object);
                    $em->persist($object);
                }
            }
        }
    }

    
    private function logActivity(string $action, LifecycleEventArgs $args)
    {
        $entity = $args->getObject();
        $entityName = get_class($entity);
        $user = $this->security->getUser();
        $userId = $user !== null ? $user->getId() : "anonymous";

        // if this subscriber only applies to certain entity types,
        // add some code to check the entity type as early as possible

        // if (!$entity instanceof MyClass) {
        //     return;
        // }

        $this->logger->info("User {$userId} {$action} the entity {$entityName} with ID {$entity->getId()}");

    }

    /**
     * Send the specified quotation to the customer
     */
    public function sendEmailActivity(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if (!$entity instanceof Quotation) {
            return;
        }

        $this->mailing->sendQuotationEmail($entity);
    }

    public function removeUnusedModule($args)
    {
        $entity = $args->getObject();

        if (!$entity instanceof Module) {
            return;
        }

        $em = $args->getEntityManager();

        if($entity->getQuotation() === null) {
            $moduleComponents = $entity->getModuleComponents();
            foreach($moduleComponents as $moduleComponent) {
                $em->remove($moduleComponent);
            }
            $em->flush();
            $em->remove($entity);
            $em->flush();
        }
    }

}
