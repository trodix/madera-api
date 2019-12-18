<?php

namespace App\DataFixtures;

use App\Entity\Range;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class RangeFixtures extends Fixture
{
    public const RANGE_1_REFERENCE = 'range-1';
    public const RANGE_2_REFERENCE = 'range-2';

    public function load(ObjectManager $manager)
    {
        $range = new Range();
        $range
            ->setName("Standard")
        ;
        $manager->persist($range);
        $this->addReference(self::RANGE_1_REFERENCE, $range);
        

        $range = new Range();
        $range
            ->setName("Premium")
        ;
        $manager->persist($range);
        $this->addReference(self::RANGE_2_REFERENCE, $range);


        /////////////////////////////////////////
        $manager->flush();
    }
}
