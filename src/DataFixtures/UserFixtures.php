<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{

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
        ;
        $manager->persist($user);


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
        ;
        $manager->persist($user);





        ///////////////////////////////////////////

        $manager->flush();
    }
}
