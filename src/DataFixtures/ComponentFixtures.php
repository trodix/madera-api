<?php

namespace App\DataFixtures;

use App\Entity\Component;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ComponentFixtures extends Fixture
{
    public const COMPONENT_1_REFERENCE = 'component-1';
    public const COMPONENT_2_REFERENCE = 'component-2';
    public const COMPONENT_3_REFERENCE = 'component-3';
    public const COMPONENT_4_REFERENCE = 'component-4';
    public const COMPONENT_5_REFERENCE = 'component-5';
    public const COMPONENT_6_REFERENCE = 'component-6';
    public const COMPONENT_7_REFERENCE = 'component-7';
    public const COMPONENT_8_REFERENCE = 'component-8';
    public const COMPONENT_9_REFERENCE = 'component-9';
    public const COMPONENT_10_REFERENCE = 'component-10';
    public const COMPONENT_11_REFERENCE = 'component-11';
    public const COMPONENT_12_REFERENCE = 'component-12';
    public const COMPONENT_13_REFERENCE = 'component-13';
    public const COMPONENT_14_REFERENCE = 'component-14';
    public const COMPONENT_15_REFERENCE = 'component-15';
    public const COMPONENT_16_REFERENCE = 'component-16';
    public const COMPONENT_17_REFERENCE = 'component-17';
    public const COMPONENT_18_REFERENCE = 'component-18';
    public const COMPONENT_19_REFERENCE = 'component-19';
    public const COMPONENT_20_REFERENCE = 'component-20';
    public const COMPONENT_21_REFERENCE = 'component-21';
    public const COMPONENT_22_REFERENCE = 'component-22';
    public const COMPONENT_23_REFERENCE = 'component-23';
    public const COMPONENT_24_REFERENCE = 'component-24';
    public const COMPONENT_25_REFERENCE = 'component-25';
    public const COMPONENT_26_REFERENCE = 'component-26';
    public const COMPONENT_27_REFERENCE = 'component-27';
    public const COMPONENT_28_REFERENCE = 'component-28';
    public const COMPONENT_29_REFERENCE = 'component-29';
    public const COMPONENT_30_REFERENCE = 'component-30';
    public const COMPONENT_31_REFERENCE = 'component-31';
    public const COMPONENT_32_REFERENCE = 'component-32';
    public const COMPONENT_33_REFERENCE = 'component-33';
    public const COMPONENT_34_REFERENCE = 'component-34';
    public const COMPONENT_35_REFERENCE = 'component-35';
    public const COMPONENT_36_REFERENCE = 'component-36';
    public const COMPONENT_37_REFERENCE = 'component-37';
    public const COMPONENT_38_REFERENCE = 'component-38';
    public const COMPONENT_39_REFERENCE = 'component-39';

    public function load(ObjectManager $manager)
    {
        $component = new Component();
        $component
            ->setName("Laine de verre")
            ->setUnitPrice(15.15)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_1_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Laine de roche")
            ->setUnitPrice(17.15)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_2_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Laine de coton")
            ->setUnitPrice(33.44)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_3_REFERENCE, $component);
        
        $component = new Component();
        $component
            ->setName("Bloc de paille")
            ->setUnitPrice(25.57)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_4_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Mousse expansive 1,5L")
            ->setUnitPrice(22.98)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_5_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Plaque de platre")
            ->setUnitPrice(11.89)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_6_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Plaque de platre hydrofuge")
            ->setUnitPrice(18.68)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_7_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Plaque de platre acoustique")
            ->setUnitPrice(23.43)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_8_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Plaque de platre avec polystyrène")
            ->setUnitPrice(30.28)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_9_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Rail x 2")
            ->setUnitPrice(7.08)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_10_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Montant x 3")
            ->setUnitPrice(6.64)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_11_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Tasseau chêne x ")
            ->setUnitPrice(30.28)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_12_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Vis placo inox 5x35 x20")
            ->setUnitPrice(5.32)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_13_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Vis placo inox 5x55 x20")
            ->setUnitPrice(7.64)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_14_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Clou 7x55 inox x 50")
            ->setUnitPrice(6.03)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_15_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Clou 7x75 inox x 50")
            ->setUnitPrice(8.43)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_16_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Rouleau papier peint blanc")
            ->setUnitPrice(5.43)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_17_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Rouleau papier peint blanc et or")
            ->setUnitPrice(12.23)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_18_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Colle papier peint")
            ->setUnitPrice(5.23)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_19_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Colle papier peint Supérieur")
            ->setUnitPrice(8.67)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_20_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Sac enduit à bande 250g")
            ->setUnitPrice(8.67)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_21_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Bande à placo")
            ->setUnitPrice(0.67)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_22_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Bande à placo armée")
            ->setUnitPrice(13.77)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_23_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Peinture blanc MAT")
            ->setUnitPrice(21.57)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_24_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Peinture blanc Brillant")
            ->setUnitPrice(33.32)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_25_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Peinture blanc Hydrofuge")
            ->setUnitPrice(43.32)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_26_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Sous-couche blanc")
            ->setUnitPrice(33.32)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_27_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Sous-couche blanc hydrofuge")
            ->setUnitPrice(53.32)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_28_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Scotch pare-vapeur 5m")
            ->setUnitPrice(23.32)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_29_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Mur extérieur chêne")
            ->setUnitPrice(543.52)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_30_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Mur extérieur sapin")
            ->setUnitPrice(385.93)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_31_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Poignée de porte alu")
            ->setUnitPrice(25.13)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_32_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Poignée de porte alu chromé")
            ->setUnitPrice(42.98)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_33_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Poignée de porte alu")
            ->setUnitPrice(25.13)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_34_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Poutre de jonction sapin 16x16x250")
            ->setUnitPrice(135.64)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_35_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Poutre de jonction chêne 16x16x250")
            ->setUnitPrice(255.54)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_36_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Toit plat")
            ->setUnitPrice(155.24)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_37_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Toit classique")
            ->setUnitPrice(252.78)
            ->setFinish("Premium");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_38_REFERENCE, $component);

        $component = new Component();
        $component
            ->setName("Plafond")
            ->setUnitPrice(118.04)
            ->setFinish("Standard");

        $manager->persist($component);
        $this->addReference(self::COMPONENT_39_REFERENCE, $component);

        $manager->flush();
    }
}
