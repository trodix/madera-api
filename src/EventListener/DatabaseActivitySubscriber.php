<?php

namespace App\EventListener;

use Doctrine\ORM\Events;
use Symfony\Bridge\Monolog\Logger;
use Doctrine\Common\EventSubscriber;
use Symfony\Component\Security\Core\Security;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class DatabaseActivitySubscriber implements EventSubscriber
{

    public function __construct(Logger $logger, Security $security)
    {
        // Avoid calling getUser() in the constructor: auth may not
        // be complete yet. Instead, store the entire Security object.
        $this->security = $security;

        $this->logger = $logger;
    }

    // this method can only return the event names; you cannot define a
    // custom method name to execute when each event triggers
    public function getSubscribedEvents()
    {
        return [
            Events::postPersist,
            Events::postRemove,
            Events::postUpdate,
        ];
    }

    // callback methods must be called exactly like the events they listen to;
    // they receive an argument of type LifecycleEventArgs, which gives you access
    // to both the entity object of the event and the entity manager itself
    public function postPersist(LifecycleEventArgs $args)
    {
        $this->logActivity('persist', $args);
    }

    public function postRemove(LifecycleEventArgs $args)
    {
        $this->logActivity('remove', $args);
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        $this->logActivity('update', $args);
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
}