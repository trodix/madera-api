<?php

namespace App\DataFixtures;

use App\Entity\Project;
use App\DataFixtures\CustomerFixtures;
use App\DataFixtures\QuotationFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ProjectFixtures extends Fixture implements DependentFixtureInterface
{

    public const PROJECT_1_REFERENCE = 'project-1';

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $project = new Project();
        $project
            ->setName("DSK")
            ->setreference("H000001")
            ->setCustomer($this->getReference(CustomerFixtures::CUSTOMER_1_REFERENCE))
            // ->addQuotation($this->getReference(QuotationFixtures::QUOTATION_1_REFERENCE))
        ;
        $manager->persist($project);
        $manager->flush();
        $this->addReference(self::PROJECT_1_REFERENCE, $project);
    }

    public function getDependencies()
    {
        return [
            CustomerFixtures::class,
            // QuotationFixtures::class
        ];
    }
}
