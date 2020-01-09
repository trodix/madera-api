<?php

namespace App\DataFixtures;

use App\Entity\Module;
use App\DataFixtures\RangeFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ModuleFixtures extends Fixture implements DependentFixtureInterface
{

    public const MODULE_MUR_INTERIEUR_1_REFERENCE = 'module-1';
    public const MODULE_MUR_INTERIEUR_2_REFERENCE = 'module-2';
    public const MODULE_MUR_INTERIEUR_3_REFERENCE = 'module-3';
    public const MODULE_MUR_INTERIEUR_4_REFERENCE = 'module-4';
    public const MODULE_MUR_INTERIEUR_5_REFERENCE = 'module-5';
    public const MODULE_MUR_INTERIEUR_6_REFERENCE = 'module-6';
    public const MODULE_MUR_INTERIEUR_7_REFERENCE = 'module-7';
    public const MODULE_MUR_INTERIEUR_8_REFERENCE = 'module-8';
    public const MODULE_MUR_INTERIEUR_9_REFERENCE = 'module-9';
    public const MODULE_MUR_INTERIEUR_10_REFERENCE = 'module-10';
    public const MODULE_MUR_INTERIEUR_11_REFERENCE = 'module-11';
    public const MODULE_MUR_INTERIEUR_12_REFERENCE = 'module-12';
    public const MODULE_MUR_INTERIEUR_13_REFERENCE = 'module-13';
    public const MODULE_MUR_INTERIEUR_14_REFERENCE = 'module-14';
    public const MODULE_MUR_INTERIEUR_15_REFERENCE = 'module-15';
    public const MODULE_MUR_INTERIEUR_16_REFERENCE = 'module-16';
    public const MODULE_MUR_INTERIEUR_17_REFERENCE = 'module-17';
    public const MODULE_MUR_INTERIEUR_18_REFERENCE = 'module-18';
    public const MODULE_MUR_INTERIEUR_19_REFERENCE = 'module-19';
    public const MODULE_MUR_INTERIEUR_20_REFERENCE = 'module-20';
    public const MODULE_MUR_INTERIEUR_21_REFERENCE = 'module-21';
    public const MODULE_MUR_INTERIEUR_22_REFERENCE = 'module-22';
    public const MODULE_MUR_INTERIEUR_23_REFERENCE = 'module-23';
    public const MODULE_MUR_INTERIEUR_24_REFERENCE = 'module-24';
    public const MODULE_MUR_INTERIEUR_25_REFERENCE = 'module-25';
    public const MODULE_MUR_INTERIEUR_26_REFERENCE = 'module-26';
    public const MODULE_MUR_INTERIEUR_27_REFERENCE = 'module-27';
    public const MODULE_MUR_INTERIEUR_28_REFERENCE = 'module-28';
    public const MODULE_MUR_INTERIEUR_29_REFERENCE = 'module-29';
    public const MODULE_MUR_INTERIEUR_30_REFERENCE = 'module-30';
    public const MODULE_MUR_INTERIEUR_31_REFERENCE = 'module-31';
    public const MODULE_MUR_INTERIEUR_32_REFERENCE = 'module-32';
    public const MODULE_MUR_INTERIEUR_33_REFERENCE = 'module-33';
    public const MODULE_MUR_INTERIEUR_34_REFERENCE = 'module-34';
    public const MODULE_MUR_INTERIEUR_35_REFERENCE = 'module-35';
    public const MODULE_MUR_INTERIEUR_36_REFERENCE = 'module-36';
    public const MODULE_MUR_INTERIEUR_37_REFERENCE = 'module-37';
    public const MODULE_MUR_INTERIEUR_38_REFERENCE = 'module-38';
    public const MODULE_MUR_INTERIEUR_39_REFERENCE = 'module-39';
    public const MODULE_MUR_INTERIEUR_40_REFERENCE = 'module-40';
    public const MODULE_MUR_INTERIEUR_41_REFERENCE = 'module-41';
    public const MODULE_MUR_INTERIEUR_42_REFERENCE = 'module-42';
    public const MODULE_MUR_INTERIEUR_43_REFERENCE = 'module-43';
    public const MODULE_MUR_INTERIEUR_44_REFERENCE = 'module-44';
    public const MODULE_MUR_INTERIEUR_45_REFERENCE = 'module-45';
    public const MODULE_MUR_INTERIEUR_46_REFERENCE = 'module-46';
    public const MODULE_MUR_INTERIEUR_47_REFERENCE = 'module-47';
    public const MODULE_MUR_INTERIEUR_48_REFERENCE = 'module-48';
    public const MODULE_MUR_INTERIEUR_49_REFERENCE = 'module-49';
    public const MODULE_MUR_INTERIEUR_50_REFERENCE = 'module-50';
    public const MODULE_MUR_INTERIEUR_51_REFERENCE = 'module-51';
    public const MODULE_MUR_INTERIEUR_52_REFERENCE = 'module-52';
    public const MODULE_MUR_INTERIEUR_53_REFERENCE = 'module-53';
    public const MODULE_MUR_INTERIEUR_54_REFERENCE = 'module-54';
    public const MODULE_MUR_INTERIEUR_55_REFERENCE = 'module-55';
    public const MODULE_MUR_INTERIEUR_56_REFERENCE = 'module-56';
    public const MODULE_MUR_INTERIEUR_57_REFERENCE = 'module-57';
    public const MODULE_MUR_INTERIEUR_58_REFERENCE = 'module-58';
    public const MODULE_MUR_INTERIEUR_59_REFERENCE = 'module-59';
    public const MODULE_MUR_INTERIEUR_60_REFERENCE = 'module-60';
    public const MODULE_MUR_INTERIEUR_61_REFERENCE = 'module-61';
    public const MODULE_MUR_INTERIEUR_62_REFERENCE = 'module-62';
    public const MODULE_MUR_INTERIEUR_63_REFERENCE = 'module-63';
    public const MODULE_MUR_INTERIEUR_64_REFERENCE = 'module-64';
    public const MODULE_MUR_INTERIEUR_65_REFERENCE = 'module-65';
    public const MODULE_MUR_INTERIEUR_66_REFERENCE = 'module-66';
    public const MODULE_MUR_INTERIEUR_67_REFERENCE = 'module-67';
    public const MODULE_MUR_INTERIEUR_68_REFERENCE = 'module-68';
    public const MODULE_MUR_INTERIEUR_69_REFERENCE = 'module-69';
    public const MODULE_MUR_INTERIEUR_70_REFERENCE = 'module-70';
    public const MODULE_MUR_INTERIEUR_71_REFERENCE = 'module-71';
    public const MODULE_MUR_INTERIEUR_72_REFERENCE = 'module-72';
    public const MODULE_MUR_INTERIEUR_73_REFERENCE = 'module-73';
    public const MODULE_MUR_INTERIEUR_74_REFERENCE = 'module-74';
    public const MODULE_MUR_INTERIEUR_75_REFERENCE = 'module-75';
    public const MODULE_MUR_INTERIEUR_76_REFERENCE = 'module-76';
    public const MODULE_MUR_INTERIEUR_77_REFERENCE = 'module-77';
    public const MODULE_MUR_INTERIEUR_78_REFERENCE = 'module-78';
    public const MODULE_MUR_INTERIEUR_79_REFERENCE = 'module-79';
    public const MODULE_MUR_INTERIEUR_80_REFERENCE = 'module-80';
    public const MODULE_MUR_INTERIEUR_81_REFERENCE = 'module-81';
    public const MODULE_MUR_INTERIEUR_82_REFERENCE = 'module-82';
    public const MODULE_MUR_INTERIEUR_83_REFERENCE = 'module-83';
    public const MODULE_MUR_INTERIEUR_84_REFERENCE = 'module-84';
    public const MODULE_MUR_INTERIEUR_85_REFERENCE = 'module-85';
    public const MODULE_MUR_INTERIEUR_86_REFERENCE = 'module-86';
    public const MODULE_MUR_INTERIEUR_87_REFERENCE = 'module-87';
    public const MODULE_MUR_INTERIEUR_88_REFERENCE = 'module-88';
    public const MODULE_MUR_INTERIEUR_89_REFERENCE = 'module-89';
    public const MODULE_MUR_INTERIEUR_90_REFERENCE = 'module-90';
    public const MODULE_MUR_INTERIEUR_91_REFERENCE = 'module-91';
    public const MODULE_MUR_INTERIEUR_92_REFERENCE = 'module-92';
    public const MODULE_MUR_INTERIEUR_93_REFERENCE = 'module-93';
    public const MODULE_MUR_INTERIEUR_94_REFERENCE = 'module-94';
    public const MODULE_MUR_INTERIEUR_95_REFERENCE = 'module-95';
    public const MODULE_MUR_INTERIEUR_96_REFERENCE = 'module-96';
    public const MODULE_MUR_INTERIEUR_97_REFERENCE = 'module-97';
    public const MODULE_MUR_INTERIEUR_98_REFERENCE = 'module-98';
    public const MODULE_MUR_INTERIEUR_99_REFERENCE = 'module-99';
    public const MODULE_MUR_INTERIEUR_100_REFERENCE = 'module-100';
    public const MODULE_MUR_INTERIEUR_101_REFERENCE = 'module-101';
    public const MODULE_MUR_INTERIEUR_102_REFERENCE = 'module-102';
    public const MODULE_MUR_INTERIEUR_103_REFERENCE = 'module-103';
    public const MODULE_MUR_INTERIEUR_104_REFERENCE = 'module-1O4';
    public const MODULE_MUR_INTERIEUR_105_REFERENCE = 'module-105';
    public const MODULE_MUR_INTERIEUR_106_REFERENCE = 'module-106';
    public const MODULE_MUR_INTERIEUR_107_REFERENCE = 'module-107';
    public const MODULE_MUR_INTERIEUR_108_REFERENCE = 'module-108';
    public const MODULE_MUR_INTERIEUR_109_REFERENCE = 'module-109';
    public const MODULE_MUR_INTERIEUR_110_REFERENCE = 'module-110';
    public const MODULE_MUR_INTERIEUR_111_REFERENCE = 'module-111';
    public const MODULE_MUR_INTERIEUR_112_REFERENCE = 'module-112';
    public const MODULE_MUR_INTERIEUR_113_REFERENCE = 'module-113';
    public const MODULE_MUR_INTERIEUR_114_REFERENCE = 'module-114';
    public const MODULE_MUR_INTERIEUR_115_REFERENCE = 'module-115';
    public const MODULE_MUR_INTERIEUR_116_REFERENCE = 'module-116';
    public const MODULE_MUR_INTERIEUR_117_REFERENCE = 'module-117';
    public const MODULE_MUR_INTERIEUR_118_REFERENCE = 'module-118';
    public const MODULE_MUR_INTERIEUR_119_REFERENCE = 'module-119';
    public const MODULE_MUR_INTERIEUR_120_REFERENCE = 'module-120';
    public const MODULE_MUR_INTERIEUR_121_REFERENCE = 'module-121';
    public const MODULE_MUR_INTERIEUR_122_REFERENCE = 'module-122';
    public const MODULE_MUR_INTERIEUR_123_REFERENCE = 'module-123';
    public const MODULE_MUR_INTERIEUR_124_REFERENCE = 'module-124';
    public const MODULE_MUR_INTERIEUR_125_REFERENCE = 'module-125';
    public const MODULE_MUR_INTERIEUR_126_REFERENCE = 'module-126';
    public const MODULE_MUR_INTERIEUR_127_REFERENCE = 'module-127';
    public const MODULE_MUR_INTERIEUR_128_REFERENCE = 'module-128';
    public const MODULE_MUR_INTERIEUR_129_REFERENCE = 'module-129';
    public const MODULE_MUR_INTERIEUR_130_REFERENCE = 'module-130';
    public const MODULE_MUR_INTERIEUR_131_REFERENCE = 'module-131';
    public const MODULE_MUR_INTERIEUR_132_REFERENCE = 'module-132';
    public const MODULE_MUR_INTERIEUR_133_REFERENCE = 'module-133';
    public const MODULE_MUR_INTERIEUR_134_REFERENCE = 'module-134';
    public const MODULE_MUR_INTERIEUR_135_REFERENCE = 'module-135';
    public const MODULE_MUR_INTERIEUR_136_REFERENCE = 'module-136';
    public const MODULE_MUR_INTERIEUR_137_REFERENCE = 'module-137';
    public const MODULE_MUR_INTERIEUR_138_REFERENCE = 'module-138';
    public const MODULE_MUR_INTERIEUR_139_REFERENCE = 'module-139';
    public const MODULE_MUR_INTERIEUR_140_REFERENCE = 'module-140';
    public const MODULE_MUR_INTERIEUR_141_REFERENCE = 'module-141';
    public const MODULE_MUR_INTERIEUR_142_REFERENCE = 'module-142';
    public const MODULE_MUR_INTERIEUR_143_REFERENCE = 'module-143';
    public const MODULE_MUR_INTERIEUR_144_REFERENCE = 'module-144';
    public const MODULE_MUR_INTERIEUR_145_REFERENCE = 'module-145';
    public const MODULE_MUR_INTERIEUR_146_REFERENCE = 'module-146';
    public const MODULE_MUR_INTERIEUR_147_REFERENCE = 'module-147';
    public const MODULE_MUR_INTERIEUR_148_REFERENCE = 'module-148';
    public const MODULE_MUR_INTERIEUR_149_REFERENCE = 'module-149';
    public const MODULE_MUR_INTERIEUR_150_REFERENCE = 'module-150';
    public const MODULE_MUR_INTERIEUR_151_REFERENCE = 'module-151';


    public function load(ObjectManager $manager)
    {
        $module = new Module();
        $module
            ->setName("Mur intérieur Salon Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_1_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salon Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_2_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salon Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_3_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salon Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_4_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salle Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_5_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salle Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_6_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salle Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_7_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salle Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_8_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Cuisine Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_9_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Cuisine Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_10_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Cuisine Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_11_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Cuisine Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_12_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salle de bain Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_13_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salle de bain Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_14_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salle de bain Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_15_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salle de bain Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_16_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salle de bain Deux Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_17_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salle de bain Deux Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_18_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salle de bain Deux Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_19_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Salle de bain Deux Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_20_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Toilette Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_21_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Toilette Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_22_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Toilette Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_23_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Toilette Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_24_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Toilette Deux Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_25_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Toilette Deux Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_26_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Toilette Deux Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_27_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Toilette Deux Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_28_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Principal Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_29_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Principal Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_30_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Principal Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_31_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Principal Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_32_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Deux Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_33_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Deux Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_34_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Deux Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_35_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Deux Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_36_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Trois Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_37_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Trois Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_38_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Trois Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_39_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Trois Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_40_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Quatre Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_41_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Quatre Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_42_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Quatre Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_43_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Quatre Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_44_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Cinq Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_45_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Cinq Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_46_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Cinq Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_47_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Cinq Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_48_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Six Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_49_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Six Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_50_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Six Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_51_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Six Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_52_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Sept Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_53_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Sept Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_54_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Sept Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_55_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Chambre Sept Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_56_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Toilette Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_57_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Toilette Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_58_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Bureau Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_59_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Bureau Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_60_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Bureau Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_61_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Bureau Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_62_REFERENCE, $module);
        
        $module = new Module();
        $module
            ->setName("Mur intérieur Buanderie Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_63_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Buanderie Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_64_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Buanderie Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_65_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Buanderie Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_66_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Dressing Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_67_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Dressing Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_68_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Dressing Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_69_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Dressing Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_70_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Garage Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_71_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Garage Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_72_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Garage Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_73_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur Garage Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_74_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salon Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_75_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salon Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_76_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salon Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_77_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salon Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_78_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salle Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_79_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salle Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_80_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salle Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_81_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salle Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_82_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Cuisine Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_83_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Cuisine Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_84_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Cuisine Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_85_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Cuisine Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_86_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salle de bain Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_87_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salle de bain Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_88_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salle de bain Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_89_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salle de bain Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_90_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salle de bain Deux Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_91_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salle de bain Deux Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_92_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salle de bain Deux Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_93_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Salle de bain Deux Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_94_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Toilette Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_95_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Toilette Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_96_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Toilette Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_97_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Toilette Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_98_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Toilette Deux Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_99_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Toilette Deux Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_100_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Toilette Deux Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_101_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Toilette Deux Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_102_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Principal Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_2_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_103_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Principal Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_2_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_104_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Principal Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_2_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_105_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Principal Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_2_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_106_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Deux Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_107_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Deux Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_108_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Deux Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_109_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Deux Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_110_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Trois Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_111_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Trois Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_112_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Trois Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_113_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Trois Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_114_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Quatre Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_115_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Quatre Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_116_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Quatre Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_117_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Quatre Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_118_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Cinq Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_119_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Cinq Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_120_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Cinq Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_121_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Cinq Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_122_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Six Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_123_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Six Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_124_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Six Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_125_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Six Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_126_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Sept Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_127_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Sept Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_128_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Sept Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_129_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Chambre Sept Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_130_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Toilette Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_131_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Toilette Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_132_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Bureau Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_133_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Bureau Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_134_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Bureau Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_135_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Bureau Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_136_REFERENCE, $module);
        
        $module = new Module();
        $module
            ->setName("Mur Extérieur Buanderie Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_137_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Buanderie Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_138_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Buanderie Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_139_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Buanderie Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_140_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Dressing Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_141_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Dressing Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_142_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Dressing Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_143_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Dressing Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_144_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Garage Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_145_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Garage Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_146_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Garage Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_147_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur Extérieur Garage Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_148_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Toit plat")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_149_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Toit classique")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_150_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("PLafond")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_151_REFERENCE, $module);



        ////////////////////////////
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            RangeFixtures::class
        ];
    }
}
