<?php

namespace App\DataFixtures;

use App\DataFixtures\ComponentFixtures;
use App\Entity\TemplateModuleComponent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\DataFixtures\TemplateModuleFixtures;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class TemplateModuleComponentFixtures extends Fixture implements DependentFixtureInterface
{

    public const TEMPLATE_MODULE_COMPONENT_1_REFERENCE = 'template-module-component-1';
    public const TEMPLATE_MODULE_COMPONENT_2_REFERENCE = 'template-module-component-2';
    public const TEMPLATE_MODULE_COMPONENT_3_REFERENCE = 'template-module-component-3';
    public const TEMPLATE_MODULE_COMPONENT_4_REFERENCE = 'template-module-component-4';
    public const TEMPLATE_MODULE_COMPONENT_5_REFERENCE = 'template-module-component-5';
    public const TEMPLATE_MODULE_COMPONENT_6_REFERENCE = 'template-module-component-6';
    public const TEMPLATE_MODULE_COMPONENT_7_REFERENCE = 'template-module-component-7';
    public const TEMPLATE_MODULE_COMPONENT_8_REFERENCE = 'template-module-component-8';
    public const TEMPLATE_MODULE_COMPONENT_9_REFERENCE = 'template-module-component-9';
    public const TEMPLATE_MODULE_COMPONENT_10_REFERENCE = 'template-module-component-10';
    public const TEMPLATE_MODULE_COMPONENT_11_REFERENCE = 'template-module-component-11';
    public const TEMPLATE_MODULE_COMPONENT_12_REFERENCE = 'template-module-component-12';

    public function load(ObjectManager $manager)
    {
        ///////////////////////////// TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_2_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE))
            ->setQuantity("4")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_1_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE))
            ->setQuantity("4")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_2_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE))
            ->setQuantity("8")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_3_REFERENCE, $moduleComponent);

        ///////////////////////////// TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
            ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_4_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
            ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_5_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
            ->setQuantity("6")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_6_REFERENCE, $moduleComponent);

        ///////////////////////////// TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_9_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
            ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_7_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
            ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_8_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
            ->setQuantity("12")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_9_REFERENCE, $moduleComponent);




        ///////////////////////////////

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_2_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
            ->setQuantity("8")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_10_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_3_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
            ->setQuantity("12")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_11_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_4_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
            ->setQuantity("16")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_12_REFERENCE, $moduleComponent);


        ////////////////////////////////
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ComponentFixtures::class,
            TemplateModuleFixtures::class
        ];
    }
}
