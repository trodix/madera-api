<?php

namespace App\DataFixtures;

use App\Entity\Quotation;
use App\DataFixtures\ProjectFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class QuotationFixtures extends Fixture implements DependentFixtureInterface
{
    public const QUOTATION_1_REFERENCE = 'quotation-1';

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $quotation = new Quotation();
        $quotation
            ->setState("WAITING")
            ->setProject($this->getReference(ProjectFixtures::PROJECT_1_REFERENCE))
        ;
        
        $manager->persist($quotation);
        $manager->flush();
        $this->addReference(self::QUOTATION_1_REFERENCE, $quotation);
    }

    public function getDependencies()
    {
        return [
            ProjectFixtures::class
        ];
    }
}
