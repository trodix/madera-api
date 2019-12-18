<?php

namespace App\DataFixtures;

use App\Entity\ModuleComponent;
use App\DataFixtures\ModuleFixtures;
use App\DataFixtures\ComponentFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ModuleComponentFixtures extends Fixture implements DependentFixtureInterface
{

    public const MODULE_COMPONENT_1_REFERENCE = 'module-component-1';
    public const MODULE_COMPONENT_2_REFERENCE = 'module-component-2';
    public const MODULE_COMPONENT_3_REFERENCE = 'module-component-3';
    public const MODULE_COMPONENT_4_REFERENCE = 'module-component-4';

    public function load(ObjectManager $manager)
    {
        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
            ->setQuantity("4")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_1_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_2_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
            ->setQuantity("8")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_2_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_3_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
            ->setQuantity("12")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_3_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_4_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
            ->setQuantity("16")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_4_REFERENCE, $moduleComponent);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ComponentFixtures::class,
            ModuleFixtures::class
        ];
    }
}
