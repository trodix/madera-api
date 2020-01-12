<?php

namespace App\DataFixtures;

use App\Entity\TemplateModule;
use App\DataFixtures\RangeFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class TemplateModuleFixtures extends Fixture implements DependentFixtureInterface
{

    public const TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE = 'template-module-1';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE = 'template-module-2';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE = 'template-module-3';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE = 'template-module-4';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE = 'template-module-5';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE = 'template-module-6';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_7_REFERENCE = 'template-module-7';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_8_REFERENCE = 'template-module-8';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_9_REFERENCE = 'template-module-9';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_10_REFERENCE = 'template-module-10';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_11_REFERENCE = 'template-module-11';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_12_REFERENCE = 'template-module-12';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_13_REFERENCE = 'template-module-13';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_14_REFERENCE = 'template-module-14';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_15_REFERENCE = 'template-module-15';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_16_REFERENCE = 'template-module-16';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_17_REFERENCE = 'template-module-17';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_18_REFERENCE = 'template-module-18';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_19_REFERENCE = 'template-module-19';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_20_REFERENCE = 'template-module-20';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_21_REFERENCE = 'template-module-21';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_22_REFERENCE = 'template-module-22';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_23_REFERENCE = 'template-module-23';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_24_REFERENCE = 'template-module-24';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_25_REFERENCE = 'template-module-25';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_26_REFERENCE = 'template-module-26';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_27_REFERENCE = 'template-module-27';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_28_REFERENCE = 'template-module-28';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_29_REFERENCE = 'template-module-29';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_30_REFERENCE = 'template-module-30';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_31_REFERENCE = 'template-module-31';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_32_REFERENCE = 'template-module-32';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_33_REFERENCE = 'template-module-33';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_34_REFERENCE = 'template-module-34';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_35_REFERENCE = 'template-module-35';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_36_REFERENCE = 'template-module-36';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_37_REFERENCE = 'template-module-37';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_38_REFERENCE = 'template-module-38';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_39_REFERENCE = 'template-module-39';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_40_REFERENCE = 'template-module-40';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_41_REFERENCE = 'template-module-41';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_42_REFERENCE = 'template-module-42';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_43_REFERENCE = 'template-module-43';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_44_REFERENCE = 'template-module-44';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_45_REFERENCE = 'template-module-45';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_46_REFERENCE = 'template-module-46';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_47_REFERENCE = 'template-module-47';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_48_REFERENCE = 'template-module-48';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_49_REFERENCE = 'template-module-49';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_50_REFERENCE = 'template-module-50';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_51_REFERENCE = 'template-module-51';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_52_REFERENCE = 'template-module-52';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_53_REFERENCE = 'template-module-53';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_54_REFERENCE = 'template-module-54';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_55_REFERENCE = 'template-module-55';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_56_REFERENCE = 'template-module-56';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_57_REFERENCE = 'template-module-57';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_58_REFERENCE = 'template-module-58';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_59_REFERENCE = 'template-module-59';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_60_REFERENCE = 'template-module-60';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_61_REFERENCE = 'template-module-61';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_62_REFERENCE = 'template-module-62';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_63_REFERENCE = 'template-module-63';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_64_REFERENCE = 'template-module-64';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_65_REFERENCE = 'template-module-65';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_66_REFERENCE = 'template-module-66';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_67_REFERENCE = 'template-module-67';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_68_REFERENCE = 'template-module-68';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_69_REFERENCE = 'template-module-69';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_70_REFERENCE = 'template-module-70';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_71_REFERENCE = 'template-module-71';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_72_REFERENCE = 'template-module-72';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_73_REFERENCE = 'template-module-73';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_74_REFERENCE = 'template-module-74';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_75_REFERENCE = 'template-module-75';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_76_REFERENCE = 'template-module-76';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_77_REFERENCE = 'template-module-77';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_78_REFERENCE = 'template-module-78';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_79_REFERENCE = 'template-module-79';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_80_REFERENCE = 'template-module-80';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_81_REFERENCE = 'template-module-81';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_82_REFERENCE = 'template-module-82';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_83_REFERENCE = 'template-module-83';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_84_REFERENCE = 'template-module-84';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_85_REFERENCE = 'template-module-85';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_86_REFERENCE = 'template-module-86';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_87_REFERENCE = 'template-module-87';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_88_REFERENCE = 'template-module-88';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_89_REFERENCE = 'template-module-89';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_90_REFERENCE = 'template-module-90';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_91_REFERENCE = 'template-module-91';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_92_REFERENCE = 'template-module-92';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_93_REFERENCE = 'template-module-93';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_94_REFERENCE = 'template-module-94';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_95_REFERENCE = 'template-module-95';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_96_REFERENCE = 'template-module-96';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_97_REFERENCE = 'template-module-97';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_98_REFERENCE = 'template-module-98';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_99_REFERENCE = 'template-module-99';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_100_REFERENCE = 'template-module-100';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_101_REFERENCE = 'template-module-101';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_102_REFERENCE = 'template-module-102';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_103_REFERENCE = 'template-module-103';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_104_REFERENCE = 'template-module-1O4';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_105_REFERENCE = 'template-module-105';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_106_REFERENCE = 'template-module-106';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_107_REFERENCE = 'template-module-107';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_108_REFERENCE = 'template-module-108';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_109_REFERENCE = 'template-module-109';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_110_REFERENCE = 'template-module-110';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_111_REFERENCE = 'template-module-111';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_112_REFERENCE = 'template-module-112';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_113_REFERENCE = 'template-module-113';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_114_REFERENCE = 'template-module-114';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_115_REFERENCE = 'template-module-115';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_116_REFERENCE = 'template-module-116';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_117_REFERENCE = 'template-module-117';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_118_REFERENCE = 'template-module-118';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_119_REFERENCE = 'template-module-119';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_120_REFERENCE = 'template-module-120';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_121_REFERENCE = 'template-module-121';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_122_REFERENCE = 'template-module-122';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_123_REFERENCE = 'template-module-123';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_124_REFERENCE = 'template-module-124';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_125_REFERENCE = 'template-module-125';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_126_REFERENCE = 'template-module-126';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_127_REFERENCE = 'template-module-127';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_128_REFERENCE = 'template-module-128';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_129_REFERENCE = 'template-module-129';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_130_REFERENCE = 'template-module-130';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_131_REFERENCE = 'template-module-131';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_132_REFERENCE = 'template-module-132';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_133_REFERENCE = 'template-module-133';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_134_REFERENCE = 'template-module-134';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_135_REFERENCE = 'template-module-135';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_136_REFERENCE = 'template-module-136';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_137_REFERENCE = 'template-module-137';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_138_REFERENCE = 'template-module-138';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_139_REFERENCE = 'template-module-139';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_140_REFERENCE = 'template-module-140';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_141_REFERENCE = 'template-module-141';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_142_REFERENCE = 'template-module-142';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_143_REFERENCE = 'template-module-143';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_144_REFERENCE = 'template-module-144';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_145_REFERENCE = 'template-module-145';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_146_REFERENCE = 'template-module-146';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_147_REFERENCE = 'template-module-147';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_148_REFERENCE = 'template-module-148';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_149_REFERENCE = 'template-module-149';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_150_REFERENCE = 'template-module-150';
    public const TEMPLATE_MODULE_MUR_INTERIEUR_151_REFERENCE = 'template-module-151';


    public function load(ObjectManager $manager)
    {
        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salon Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salon Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salon Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salon Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salle Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salle Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salle Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_7_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salle Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_8_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Cuisine Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_9_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Cuisine Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_10_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Cuisine Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_11_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Cuisine Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_12_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salle de bain Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_13_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salle de bain Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_14_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salle de bain Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_15_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salle de bain Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_16_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salle de bain Deux Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_17_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salle de bain Deux Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_18_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salle de bain Deux Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_19_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Salle de bain Deux Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_20_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Toilette Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_21_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Toilette Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_22_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Toilette Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_23_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Toilette Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_24_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Toilette Deux Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_25_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Toilette Deux Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_26_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Toilette Deux Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_27_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Toilette Deux Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_28_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Principal Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_29_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Principal Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_30_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Principal Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_31_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Principal Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_32_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Deux Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_33_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Deux Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_34_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Deux Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_35_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Deux Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_36_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Trois Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_37_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Trois Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_38_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Trois Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_39_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Trois Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_40_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Quatre Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_41_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Quatre Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_42_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Quatre Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_43_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Quatre Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_44_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Cinq Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_45_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Cinq Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_46_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Cinq Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_47_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Cinq Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_48_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Six Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_49_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Six Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_50_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Six Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_51_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Six Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_52_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Sept Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_53_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Sept Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_54_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Sept Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_55_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Chambre Sept Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_56_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Divers Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_57_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Divers Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_58_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Bureau Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_59_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Bureau Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_60_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Bureau Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_61_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Bureau Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_62_REFERENCE, $templateModule);
        
        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Buanderie Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_63_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Buanderie Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_64_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Buanderie Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_65_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Buanderie Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_66_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Dressing Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_67_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Dressing Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_68_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Dressing Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_69_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Dressing Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_70_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Garage Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_71_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Garage Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_72_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Garage Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_73_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur Garage Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_74_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salon Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_75_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salon Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_76_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salon Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_77_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salon Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_78_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salle Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_79_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salle Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_80_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salle Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_81_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salle Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_82_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Cuisine Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_83_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Cuisine Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_84_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Cuisine Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_85_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Cuisine Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_86_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salle de bain Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_87_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salle de bain Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_88_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salle de bain Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_89_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salle de bain Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_90_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salle de bain Deux Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_91_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salle de bain Deux Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_92_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salle de bain Deux Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_93_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Salle de bain Deux Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_94_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Toilette Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_95_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Toilette Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_96_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Toilette Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_97_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Toilette Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_98_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Toilette Deux Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_99_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Toilette Deux Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_100_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Toilette Deux Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_101_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Toilette Deux Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_102_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Principal Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_2_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_103_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Principal Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_2_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_104_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Principal Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_2_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_105_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Principal Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_2_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_106_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Deux Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_107_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Deux Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_108_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Deux Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_109_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Deux Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_110_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Trois Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_111_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Trois Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_112_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Trois Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_113_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Trois Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_114_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Quatre Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_115_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Quatre Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_116_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Quatre Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_117_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Quatre Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_118_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Cinq Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_119_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Cinq Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_120_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Cinq Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_121_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Cinq Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_122_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Six Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_123_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Six Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_124_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Six Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_125_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Six Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_126_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Sept Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_127_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Sept Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_128_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Sept Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_129_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Chambre Sept Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_130_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Divers Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_131_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Divers Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_132_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Bureau Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_133_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Bureau Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_134_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Bureau Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_135_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Bureau Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_136_REFERENCE, $templateModule);
        
        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Buanderie Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_137_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Buanderie Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_138_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Buanderie Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_139_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Buanderie Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_140_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Dressing Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_141_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Dressing Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_142_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Dressing Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_143_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Dressing Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_144_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Garage Est")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_145_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Garage Ouest")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_146_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Garage Nord")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_147_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur Extérieur Garage Sud")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_148_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Toit plat")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_149_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Toit classique")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_150_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("PLafond")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_151_REFERENCE, $templateModule);



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
