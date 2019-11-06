<?php

namespace App\DataFixtures;

use App\Entity\Project;
use App\DataFixtures\UserFixtures;
use App\DataFixtures\ProductFixtures;
use App\DataFixtures\CustomerFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProjectFixtures extends Fixture implements DependentFixtureInterface
{

    public const PROJECT_1_REFERENCE = 'project-1';
    public const PROJECT_2_REFERENCE = 'project-2';
    public const PROJECT_3_REFERENCE = 'project-3';

    public function load(ObjectManager $manager)
    {
        $project = new Project();
        $project
            ->setName("Cabane normande")
            // ->setReference("H000001") // Auto-generated bu uniqid
            ->setCustomer($this->getReference(CustomerFixtures::CUSTOMER_1_REFERENCE))
            ->addProduct($this->getReference(ProductFixtures::PRODUCT_1_REFERENCE))
            ->addUser($this->getReference(UserFixtures::USER_COMMERCIAL_REFERENCE))
        ;

        $manager->persist($project);
        $this->addReference(self::PROJECT_1_REFERENCE, $project);


        $project = new Project();
        $project
            ->setName("Bureaux boisés de campagne")
            // ->setReference("H000002") // Auto-generated bu uniqid
            ->setCustomer($this->getReference(CustomerFixtures::CUSTOMER_1_REFERENCE))
            ->addProduct($this->getReference(ProductFixtures::PRODUCT_2_REFERENCE))
            ->addUser($this->getReference(UserFixtures::USER_COMMERCIAL_REFERENCE))
        ;
        
        $manager->persist($project);
        $this->addReference(self::PROJECT_2_REFERENCE, $project);


        $project = new Project();
        $project
            ->setName("Le domaine de Hagrid")
            // ->setReference("H000003") // Auto-generated bu uniqid
            ->setCustomer($this->getReference(CustomerFixtures::CUSTOMER_2_REFERENCE))
            ->addProduct($this->getReference(ProductFixtures::PRODUCT_3_REFERENCE))
            ->addProduct($this->getReference(ProductFixtures::PRODUCT_2_REFERENCE))
            ->addUser($this->getReference(UserFixtures::USER_COMMERCIAL_REFERENCE))
        ;
        
        $manager->persist($project);
        $this->addReference(self::PROJECT_3_REFERENCE, $project);



        //////////////////////////////////////////////
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CustomerFixtures::class,
            ProductFixtures::class,
            UserFixtures::class
        ];
    }
}
