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

    public function load(ObjectManager $manager)
    {
        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur - Placo - Laine de roche")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE, $templateModule);


        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur - Placo - Laine de verre")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur - Placo - Polystyrène")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur - Placo - Mousse expansive")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur - Placo - Coton")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_2_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE, $templateModule);

        $templateModule = new TemplateModule();
        $templateModule
            ->setName("Mur intérieur - Placo - Paille")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_2_REFERENCE))
        ;
        $manager->persist($templateModule);
        $this->addReference(self::TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE, $templateModule);


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
