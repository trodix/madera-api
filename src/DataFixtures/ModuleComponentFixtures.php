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
    public const MODULE_COMPONENT_5_REFERENCE = 'module-component-5';
    public const MODULE_COMPONENT_6_REFERENCE = 'module-component-6';
    public const MODULE_COMPONENT_7_REFERENCE = 'module-component-7';
    public const MODULE_COMPONENT_8_REFERENCE = 'module-component-8';
    public const MODULE_COMPONENT_9_REFERENCE = 'module-component-9';
    public const MODULE_COMPONENT_10_REFERENCE = 'module-component-10';
    public const MODULE_COMPONENT_11_REFERENCE = 'module-component-11';
    public const MODULE_COMPONENT_12_REFERENCE = 'module-component-12';

    public function load(ObjectManager $manager)
    {
        ///////////////////////////// MODULE_MUR_INTERIEUR_1_REFERENCE

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_2_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
            ->setQuantity("4")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_1_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
            ->setQuantity("4")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_2_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
            ->setQuantity("8")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_3_REFERENCE, $moduleComponent);

        ///////////////////////////// MODULE_MUR_INTERIEUR_2_REFERENCE

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
            ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_4_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
            ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_5_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
            ->setQuantity("6")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_6_REFERENCE, $moduleComponent);

        ///////////////////////////// MODULE_MUR_INTERIEUR_3_REFERENCE

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_9_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
            ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_7_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
            ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_8_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
            ->setQuantity("12")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_9_REFERENCE, $moduleComponent);




        ///////////////////////////////

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_2_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
            ->setQuantity("8")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_10_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_3_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
            ->setQuantity("12")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_11_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_4_REFERENCE))
            ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
            ->setQuantity("16")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_12_REFERENCE, $moduleComponent);


        ////////////////////////////////
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
