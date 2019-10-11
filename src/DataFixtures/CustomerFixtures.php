<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CustomerFixtures extends Fixture
{
    public const CUSTOMER_1_REFERENCE = 'customer-1';
    public const CUSTOMER_2_REFERENCE = 'customer-2';

    public function load(ObjectManager $manager)
    {
        $customer = new Customer();
        $customer
            // ->setReference("C000001") // Auto-generated bu uniqid
            ->setLastName("Dupont")
            ->setFirstName("Francis")
            ->setPhone("0669696969")
            ->setEmail("f.dupont@gmail.com")
            ->setAddress("4 Rue de la poupée qui tousse")
            ->setCity("Dijon")
            ->setCountry("France")
            ->setZipcode("21000")
        ;

        $manager->persist($customer);
        $this->addReference(self::CUSTOMER_1_REFERENCE, $customer);



        $customer = new Customer();
        $customer
            // ->setReference("C000002") // Auto-generated bu uniqid
            ->setLastName("Molotov")
            ->setFirstName("Dimitri")
            ->setPhone("0645253296")
            ->setEmail("dimitri.molotov@gmail.com")
            ->setAddress("4 Place du Soulié troué")
            ->setCity("Auxerre")
            ->setCountry("France")
            ->setZipcode("89000")
        ;
        
        $manager->persist($customer);
        $this->addReference(self::CUSTOMER_2_REFERENCE, $customer);



        /////////////////////////////////////////////
        $manager->flush();
    }
}
