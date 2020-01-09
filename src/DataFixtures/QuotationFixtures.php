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
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_6_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_8_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_9_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_10_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_11_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_13_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_14_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_15_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_16_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_21_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_22_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_23_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_24_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_29_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_30_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_31_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_32_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_33_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_34_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_35_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_36_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_37_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_38_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_39_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_40_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_57_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_63_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_64_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_65_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_66_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_71_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_72_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_73_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_74_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_76_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_77_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_80_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_82_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_85_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_89_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_98_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_106_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_107_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_110_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_111_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_145_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_146_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_147_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_148_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_149_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_151_REFERENCE))
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
