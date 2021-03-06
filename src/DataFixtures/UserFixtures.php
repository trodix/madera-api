<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\DataFixtures\SiteFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture implements DependentFixtureInterface
{

    public const USER_ADMIN_REFERENCE = 'user-admin';
    public const USER_COMMERCIAL_REFERENCE = 'user-commercial';

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {

        /**
         * Create multiple ressources
         */
        // $this->createMany(10, 'main_users', function($i) {
        //     $user->setPassword($this->passwordEncoder->encodePassword(
        //         $user,
        //         'engage'
        //     ));
        // });

        /**
         * Create a SUPER_ADMIN user
         */
        $user = new User();
        $user
            ->setEmail("admin@madera.com")
            ->setPassword($this->passwordEncoder->encodePassword(
                $user,
                'madera2019'
            ))
            ->setRoles([
                "ROLE_SUPER_ADMIN"
            ])
            ->addSite($this->getReference(SiteFixtures::SITE_1_REFERENCE))
        ;
        $manager->persist($user);
        $this->addReference(self::USER_ADMIN_REFERENCE, $user);


        /**
         * Create an powerless user
         */
        $user = new User();
        $user
            ->setLastname("Doe")
            ->setFirstname("John")
            ->setEmail("john.doe@madera.com")
            ->setPassword($this->passwordEncoder->encodePassword(
                $user,
                'madera2019'
            ))
            ->setRoles([
                "ROLE_COMMERCIAL"
            ])
            ->addSite($this->getReference(SiteFixtures::SITE_1_REFERENCE))
        ;
        $manager->persist($user);
        $this->addReference(self::USER_COMMERCIAL_REFERENCE, $user);





        ///////////////////////////////////////////

        $manager->flush();
    }


    public function getDependencies()
    {
        return [
            SiteFixtures::class
        ];
    }


}
