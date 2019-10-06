<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use App\DataFixtures\ProjectFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CustomerFixtures extends Fixture
{
    public const CUSTOMER_1_REFERENCE = 'customer-1';

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $customer = new Customer();
        $customer
            ->setReference("C000001")
            ->setLastName("Dupont")
            ->setFirstName("Francis")
            ->setPhone("0669696969")
            ->setEmail("f.dupont@gmail.com")
            ->setAddress("4 rue de la poupée qui tousse")
            ->setCity("Dijon")
            ->setCountry("France")
            ->setZipcode("21000")
            ->addProject($this->getReference(ProjectFixtures::PROJECT_1_REFERENCE))
        ;
        $manager->persist($customer);
        $manager->flush();
        $this->addReference(self::CUSTOMER_1_REFERENCE, $customer);
    }
}
