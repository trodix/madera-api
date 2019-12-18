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
    public const QUOTATION_2_REFERENCE = 'quotation-2';
    public const QUOTATION_3_REFERENCE = 'quotation-3';

    public function load(ObjectManager $manager)
    {
        $quotation = new Quotation();
        $quotation
            ->setState("WAITING")
            ->setProject($this->getReference(ProjectFixtures::PROJECT_1_REFERENCE))
        ;
        
        $manager->persist($quotation);
        $this->addReference(self::QUOTATION_1_REFERENCE, $quotation);


        $quotation = new Quotation();
        $quotation
            ->setState("WAITING")
            ->setProject($this->getReference(ProjectFixtures::PROJECT_2_REFERENCE))
        ;
        
        $manager->persist($quotation);
        $this->addReference(self::QUOTATION_2_REFERENCE, $quotation);


        $quotation = new Quotation();
        $quotation
            ->setState("WAITING")
            ->setProject($this->getReference(ProjectFixtures::PROJECT_3_REFERENCE))
        ;
        
        $manager->persist($quotation);
        $this->addReference(self::QUOTATION_3_REFERENCE, $quotation);


        ///////////////////////////////
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ProjectFixtures::class
        ];
    }
}
