<?php

namespace App\DataFixtures;

use App\Entity\Specification;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SpecificationFixtures extends Fixture
{
    public const SPECIFICATION_1_REFERENCE = 'specification-1';
    public const SPECIFICATION_2_REFERENCE = 'specification-2';
    public const SPECIFICATION_3_REFERENCE = 'specification-3';
    public const SPECIFICATION_4_REFERENCE = 'specification-4';
    public const SPECIFICATION_5_REFERENCE = 'specification-5';
    public const SPECIFICATION_6_REFERENCE = 'specification-6';
    public const SPECIFICATION_7_REFERENCE = 'specification-7';
    public const SPECIFICATION_8_REFERENCE = 'specification-8';
    public const SPECIFICATION_9_REFERENCE = 'specification-9';

    public function load(ObjectManager $manager)
    {
        $specification = new Specification();
        $specification
            ->setType("Cloison Interne")
        ;

        $manager->persist($specification);
        $this->addReference(self::SPECIFICATION_1_REFERENCE, $specification);


        $specification = new Specification();
        $specification
            ->setType("Isolantion intérieur")
        ;

        $manager->persist($specification);
        $this->addReference(self::SPECIFICATION_2_REFERENCE, $specification);


        $specification = new Specification();
        $specification
            ->setType("Armature")
        ;

        $manager->persist($specification);
        $this->addReference(self::SPECIFICATION_3_REFERENCE, $specification);


        $specification = new Specification();
        $specification
            ->setType("Finition")
        ;

        $manager->persist($specification);
        $this->addReference(self::SPECIFICATION_4_REFERENCE, $specification);


        $specification = new Specification();
        $specification
            ->setType("Viserie")
        ;

        $manager->persist($specification);
        $this->addReference(self::SPECIFICATION_5_REFERENCE, $specification);


        $specification = new Specification();
        $specification
            ->setType("Divers")
        ;

        $manager->persist($specification);
        $this->addReference(self::SPECIFICATION_6_REFERENCE, $specification);

        $specification = new Specification();
        $specification
            ->setType("Mur extérieur")
        ;

        $manager->persist($specification);
        $this->addReference(self::SPECIFICATION_7_REFERENCE, $specification);

        $specification = new Specification();
        $specification
            ->setType("Jonction")
        ;

        $manager->persist($specification);
        $this->addReference(self::SPECIFICATION_8_REFERENCE, $specification);

        $specification = new Specification();
        $specification
            ->setType("Porte")
        ;

        $manager->persist($specification);
        $this->addReference(self::SPECIFICATION_9_REFERENCE, $specification);
        

        ////////////////////////////////////
        $manager->flush();
    }
}
