<?php

namespace App\DataFixtures;

use App\Entity\Site;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SiteFixtures extends Fixture
{
    public const SITE_1_REFERENCE = 'site-1';
    public const SITE_2_REFERENCE = 'site-2';
    public const SITE_3_REFERENCE = 'site-3';
    public const SITE_4_REFERENCE = 'site-4';
    public const SITE_5_REFERENCE = 'site-5';

    public function load(ObjectManager $manager)
    {
        $site = new Site();
        $site
            ->setName("Magasin de Mâcon")
            ->setAddress("Boulevard Edwige")
            ->setZipcode("71000")
            ->setCity("Mâcon")
            ->setCountry("France")
            ->setLabor(359.99)
        ;

        $manager->persist($site);
        $this->addReference(self::SITE_1_REFERENCE, $site);

        $site = new Site();
        $site
            ->setName("Magasin de Brest")
            ->setAddress("Avenue de Poudlard")
            ->setZipcode("29200")
            ->setCity("Brest")
            ->setCountry("France")
            ->setLabor(399.99)
        ;

        $manager->persist($site);
        $this->addReference(self::SITE_2_REFERENCE, $site);

        $site = new Site();
        $site
            ->setName("Dépôt d'Annecy")
            ->setAddress("Rue Ollivander")
            ->setZipcode("74000")
            ->setCity("Annecy")
            ->setCountry("France")
            ->setLabor(319.99)
        ;

        $manager->persist($site);
        $this->addReference(self::SITE_3_REFERENCE, $site);

        $site = new Site();
        $site
            ->setName("Dépôt de Lille")
            ->setAddress("Chemin de traverse")
            ->setZipcode("59000")
            ->setCity("Lille")
            ->setCountry("France")
            ->setLabor(359.99)
        ;

        $manager->persist($site);
        $this->addReference(self::SITE_4_REFERENCE, $site);

        $site = new Site();
        $site
            ->setName("Dépôt de Dax")
            ->setAddress("ZA d'expelliarmus")
            ->setZipcode("40100")
            ->setCity("Mâcon")
            ->setCountry("France")
            ->setLabor(349.99)
        ;

        $manager->persist($site);
        $this->addReference(self::SITE_5_REFERENCE, $site);

        $manager->flush();
    }
}
