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
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_5_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_6_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_7_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_8_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_9_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_10_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_11_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_12_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_13_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_14_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_15_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_16_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_17_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_18_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_19_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_20_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_21_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_22_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_23_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_24_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_25_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_26_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_27_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_28_REFERENCE))
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
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_41_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_42_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_43_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_44_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_45_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_46_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_47_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_48_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_49_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_50_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_51_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_52_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_53_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_54_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_55_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_56_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_57_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_58_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_59_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_60_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_61_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_62_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_63_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_64_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_65_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_66_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_67_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_68_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_69_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_70_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_71_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_72_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_73_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_74_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_75_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_76_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_77_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_78_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_79_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_80_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_81_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_82_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_83_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_84_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_85_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_86_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_87_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_88_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_89_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_90_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_91_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_92_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_93_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_94_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_95_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_96_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_97_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_98_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_99_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_100_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_101_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_102_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_103_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_104_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_105_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_106_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_107_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_108_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_109_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_110_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_111_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_112_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_113_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_114_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_115_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_116_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_117_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_118_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_131_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_132_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_133_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_134_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_135_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_136_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_137_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_138_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_139_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_140_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_141_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_142_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_143_REFERENCE))
            ->addModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_144_REFERENCE))
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
