<?php

namespace App\DataFixtures;

use App\Entity\Component;
use App\Entity\Specification;
use App\Entity\ComponentSpecification;
use App\DataFixtures\ComponentFixtures;
use App\DataFixtures\SpecificationFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ComponentSpecificationFixtures extends Fixture implements DependentFixtureInterface
{
    public const COMPONENT_SPECIFICATION_1_REFERENCE = 'component-specification-1';
    public const COMPONENT_SPECIFICATION_2_REFERENCE = 'component-specification-2';
    public const COMPONENT_SPECIFICATION_3_REFERENCE = 'component-specification-3';
    public const COMPONENT_SPECIFICATION_4_REFERENCE = 'component-specification-4';
    public const COMPONENT_SPECIFICATION_5_REFERENCE = 'component-specification-5';
    public const COMPONENT_SPECIFICATION_6_REFERENCE = 'component-specification-6';
    public const COMPONENT_SPECIFICATION_7_REFERENCE = 'component-specification-7';
    public const COMPONENT_SPECIFICATION_8_REFERENCE = 'component-specification-8';
    public const COMPONENT_SPECIFICATION_9_REFERENCE = 'component-specification-9';
    public const COMPONENT_SPECIFICATION_10_REFERENCE = 'component-specification-10';
    public const COMPONENT_SPECIFICATION_11_REFERENCE = 'component-specification-11';
    public const COMPONENT_SPECIFICATION_12_REFERENCE = 'component-specification-12';
    public const COMPONENT_SPECIFICATION_13_REFERENCE = 'component-specification-13';
    public const COMPONENT_SPECIFICATION_14_REFERENCE = 'component-specification-14';
    public const COMPONENT_SPECIFICATION_15_REFERENCE = 'component-specification-15';
    public const COMPONENT_SPECIFICATION_16_REFERENCE = 'component-specification-16';
    public const COMPONENT_SPECIFICATION_17_REFERENCE = 'component-specification-17';
    public const COMPONENT_SPECIFICATION_18_REFERENCE = 'component-specification-18';
    public const COMPONENT_SPECIFICATION_19_REFERENCE = 'component-specification-19';
    public const COMPONENT_SPECIFICATION_20_REFERENCE = 'component-specification-20';
    public const COMPONENT_SPECIFICATION_21_REFERENCE = 'component-specification-21';
    public const COMPONENT_SPECIFICATION_22_REFERENCE = 'component-specification-22';
    public const COMPONENT_SPECIFICATION_23_REFERENCE = 'component-specification-23';
    public const COMPONENT_SPECIFICATION_24_REFERENCE = 'component-specification-24';
    public const COMPONENT_SPECIFICATION_25_REFERENCE = 'component-specification-25';
    public const COMPONENT_SPECIFICATION_26_REFERENCE = 'component-specification-26';
    public const COMPONENT_SPECIFICATION_27_REFERENCE = 'component-specification-27';
    public const COMPONENT_SPECIFICATION_28_REFERENCE = 'component-specification-28';
    public const COMPONENT_SPECIFICATION_29_REFERENCE = 'component-specification-29';
    public const COMPONENT_SPECIFICATION_30_REFERENCE = 'component-specification-30';
    public const COMPONENT_SPECIFICATION_31_REFERENCE = 'component-specification-31';
    public const COMPONENT_SPECIFICATION_32_REFERENCE = 'component-specification-32';
    public const COMPONENT_SPECIFICATION_33_REFERENCE = 'component-specification-33';
    public const COMPONENT_SPECIFICATION_34_REFERENCE = 'component-specification-34';
    public const COMPONENT_SPECIFICATION_35_REFERENCE = 'component-specification-35';
    public const COMPONENT_SPECIFICATION_36_REFERENCE = 'component-specification-36';
    public const COMPONENT_SPECIFICATION_37_REFERENCE = 'component-specification-37';
    public const COMPONENT_SPECIFICATION_38_REFERENCE = 'component-specification-38';
    public const COMPONENT_SPECIFICATION_39_REFERENCE = 'component-specification-39';
    public const COMPONENT_SPECIFICATION_40_REFERENCE = 'component-specification-40';
    public const COMPONENT_SPECIFICATION_41_REFERENCE = 'component-specification-41';
    public const COMPONENT_SPECIFICATION_42_REFERENCE = 'component-specification-42';
    public const COMPONENT_SPECIFICATION_43_REFERENCE = 'component-specification-43';

    public function load(ObjectManager $manager)
    {
        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("120")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_1_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_1_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("120")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_2_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_2_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_2_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("120")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_3_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_3_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_3_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("120")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_4_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_4_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_4_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m")
            ->setMeasureValue("240")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_5_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_5_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_5_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("120")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_6_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_6_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("120")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_7_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_7_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_7_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("120")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_8_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_8_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_8_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("120")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_9_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_9_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_9_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("240")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_1_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_10_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("250")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_2_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_11_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("250")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_12_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_2_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_12_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("120")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_3_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_13_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_14_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_4_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_14_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_15_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_5_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_15_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_16_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_6_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_16_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("480")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_7_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_17_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("480")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_18_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_8_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_18_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m2")
            ->setMeasureValue("200")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_9_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_19_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m2")
            ->setMeasureValue("200")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_20_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_2_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_20_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m2")
            ->setMeasureValue("70")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_1_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_21_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m")
            ->setMeasureValue("50")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_2_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_22_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m")
            ->setMeasureValue("50")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_23_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_3_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_23_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m2")
            ->setMeasureValue("70")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_4_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_24_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m2")
            ->setMeasureValue("70")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_25_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_5_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_25_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m2")
            ->setMeasureValue("70")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_26_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_6_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_26_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m2")
            ->setMeasureValue("70")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_27_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_7_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_27_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m2")
            ->setMeasureValue("70")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_28_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_8_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_28_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m")
            ->setMeasureValue("50")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_9_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_29_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("120")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_30_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_3_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_30_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("120")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_1_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_31_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_32_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_2_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_32_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_33_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_3_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_33_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_34_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_4_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_34_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("16")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_5_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_35_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("cm")
            ->setMeasureValue("16")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_36_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_6_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_36_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("")
            ->setMeasureValue("16")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_37_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_6_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_37_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("")
            ->setMeasureValue("16")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_38_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_6_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_38_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("")
            ->setMeasureValue("16")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_39_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_6_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_39_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("")
            ->setMeasureValue("16")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_40_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_6_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_40_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m2")
            ->setMeasureValue("16")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_41_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_6_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_41_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m2")
            ->setMeasureValue("16")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_42_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_6_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_42_REFERENCE, $componentSpecification);

        $componentSpecification = new ComponentSpecification();
        $componentSpecification
            ->setMeasureUnit("m2")
            ->setMeasureValue("16")
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_43_REFERENCE))
            ->setSpecification($this->getReference(SpecificationFixtures::SPECIFICATION_6_REFERENCE))
        ;

        $manager->persist($componentSpecification);
        $this->addReference(self::COMPONENT_SPECIFICATION_43_REFERENCE, $componentSpecification);

        /////////////////////////////////
        $manager->flush();
    }


    public function getDependencies()
    {
        return [
            ComponentFixtures::class,
            SpecificationFixtures::class
        ];
    }
}
