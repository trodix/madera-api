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

    public function load(ObjectManager $manager)
    {
        $module = new Module();
        $module
            ->setName("Mur intérieur - Placo - Laine de roche")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_1_REFERENCE, $module);


        $module = new Module();
        $module
            ->setName("Mur intérieur - Placo - Laine de verre")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_2_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur - Placo - Polystyrène")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_3_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur - Placo - Mousse expansive")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_1_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_4_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur - Placo - Coton")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_2_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_5_REFERENCE, $module);

        $module = new Module();
        $module
            ->setName("Mur intérieur - Placo - Paille")
            ->setUsageUnit("mm")
            ->setModuleRange($this->getReference(RangeFixtures::RANGE_2_REFERENCE))
        ;
        $manager->persist($module);
        $this->addReference(self::MODULE_MUR_INTERIEUR_6_REFERENCE, $module);


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
