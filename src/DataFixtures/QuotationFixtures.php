<?php

namespace App\DataFixtures;

use App\Entity\Quotation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class QuotationFixtures extends Fixture
{
    public const QUOTATION_1_REFERENCE = 'quotation-1';

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $quotation = new Quotation();
        $quotation
            ->state("WAITING")
            ->setProject($this->getReference(ProjetFixtures::PROJECT_1_REFERENCE))
        ;
        
        $manager->persist($quotation);
        $manager->flush();
        $this->addReference(self::QUOTATION_1_REFERENCE, $quotation);
    }
}
