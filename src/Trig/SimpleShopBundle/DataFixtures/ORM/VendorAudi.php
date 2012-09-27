<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Vendor;

class VendorAudi extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $vnd = new Vendor();
        $vnd->setName('Audi');
        $desc = <<< DESC
AUDI Aktiengesellschaft and its subsidiaries design, 
engineer, manufacture and distribute automobiles and motorcycles under the 
Audi, Ducati and Lamborghini brands. Audi oversees worldwide operations from 
its headquarters in Ingolstadt, Bavaria, Germany. Audi-branded vehicles are 
produced in seven production facilities worldwide; Ducati and Lamborghini 
each have one production facility located in Italy.
AUDI AG has been a majority owned (99.55%) subsidiary of Volkswagen AG since 1966,
following a phased purchase of AUDI AG's predecessor, Auto Union, from Daimler-Benz.
Volkswagen relaunched the Audi brand with the 1965 introduction of the Audi F103 series.
The company name is based on the surname of the founder, August Horch. "Horch",
meaning "listen", becomes "Audi" when translated into Latin. The four rings of 
the Audi logo each represent one of four car companies that banded together to 
create the company. Audi's slogan is Vorsprung durch Technik, meaning 
"Advancement through Technology". Recently in the United States, Audi has 
updated the slogan to "Truth in Engineering".
DESC;
        $vnd->setAddress('Ingolstadt, Germany');
        $vnd->setLogo('/bundles/trigsimpleshop/img/audi/audi_logo.jpg');
        $vnd->setDescription($desc);
        $manager->persist($vnd);
        $manager->flush();
        $this->setReference('audi_vnd', $vnd);
    }

    public function getOrder() {
        return 1;
    }

}

?>
