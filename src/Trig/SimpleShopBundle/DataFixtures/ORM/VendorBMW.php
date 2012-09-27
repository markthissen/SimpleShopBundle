<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Vendor;

class VendorBMW extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $vnd = new Vendor();
        $vnd->setName('BMW');
        $vnd->setLogo('/bundles/trigsimpleshop/img/bmw/BMW_logo.png');
        $vnd->setAddress('Munich, Germany');
        $desc = <<< DESC
Bayerische Motoren Werke AG is a German automobile, motorcycle and engine manufacturing
company founded in 1917. BMW is headquartered in Munich, Bavaria, Germany.
It also owns and produces the Mini marque, and is the parent company of
Rolls-Royce Motor Cars. BMW produces motorcycles under BMW Motorrad and
Husqvarna brands. In 2010, the BMW group produced 1,481,253 automobiles
and 112,271 motorcycles across all its brands.
DESC;
        $vnd->setDescription($desc);
        $manager->persist($vnd);
        $manager->flush();
        $this->setReference('bmw_vnd', $vnd);
    }

    public function getOrder() {
        return 2;
    }

}

?>
