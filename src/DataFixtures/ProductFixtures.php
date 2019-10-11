<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{

    public const PRODUCT_1_REFERENCE = 'product-1';
    public const PRODUCT_2_REFERENCE = 'product-2';
    public const PRODUCT_3_REFERENCE = 'product-3';

    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product
            ->setReference("P20190601")
            ->setName("Vinteau")
        ;

        $manager->persist($product);
        $this->addReference(self::PRODUCT_1_REFERENCE, $product);



        $product = new Product();
        $product
            ->setReference("P20190806")
            ->setName("Chatelet")
        ;

        $manager->persist($product);
        $this->addReference(self::PRODUCT_2_REFERENCE, $product);



        $product = new Product();
        $product
            ->setReference("P20191002")
            ->setName("Poudlard")
        ;

        $manager->persist($product);
        $this->addReference(self::PRODUCT_3_REFERENCE, $product);




        ///////////////////////////////////////////////////
        $manager->flush();
    }
}
