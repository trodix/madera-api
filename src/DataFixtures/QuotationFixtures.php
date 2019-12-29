<?php

namespace App\DataFixtures;

use App\Entity\Quotation;
use App\DataFixtures\ModuleFixtures;
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
            // ->setTravelCost(139.95)
            // ->setVat(20.00)
        ;
        
        $manager->persist($quotation);
        $this->addReference(self::QUOTATION_1_REFERENCE, $quotation);


        $quotation = new Quotation();
        $quotation
            ->setState("WAITING")
            ->setProject($this->getReference(ProjectFixtures::PROJECT_2_REFERENCE))
            ->setTravelCost(25.99)
            ->setVat(0.00)
        ;
        
        $manager->persist($quotation);
        $this->addReference(self::QUOTATION_2_REFERENCE, $quotation);


        $quotation = new Quotation();
        $quotation
            ->setState("WAITING")
            ->setProject($this->getReference(ProjectFixtures::PROJECT_3_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
            ->setTravelCost(139.95)
            ->setVat(20.00)
        ;
        
        $manager->persist($quotation);
        $this->addReference(self::QUOTATION_3_REFERENCE, $quotation);


        ///////////////////////////////
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ProjectFixtures::class,
            ModuleFixtures::class
        ];
    }
}
