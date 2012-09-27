<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Vendor;

class VendorAstonMartin extends AbstractFixture implements OrderedFixtureInterface{

    public function load(ObjectManager $manager) {
        $vnd = new Vendor();
        $vnd->setName('Aston Martin');
        $vnd->setLogo('/bundles/trigsimpleshop/img/am/aston-martin-logo.jpg');
        $desc = <<< DESC
Aston Martin Lagonda Limited is a British manufacturer of luxury sports
cars, based in Gaydon, Warwickshire, England. The company name is
derived from the name of one of the company's founders, Lionel Martin,
and from the Aston Clinton Hillclimb near Aston Clinton in Buckinghamshire.
It also designs and engineers cars which are manufactured by Magna Steyr
in Austria.From 1994 until 2007, Aston Martin was part of the Ford Motor
Company, becoming part of the company's Premier Automotive Group in 2000.
On 12 March 2007, it was purchased for £479 million by a joint venture company,
headed by David Richards, John Singers, an American investment banker;
and two Kuwaiti investment companies, Investment Dar and Adeem Investment.
Ford retained a US$77 million (or 12.1%) stake in Aston Martin, valuing
the company at $925 million
DESC;
        $vnd->setDescription($desc);
        $vnd->setAddress('Gaydon, Warwickshire, United Kingdom');
        $manager->persist($vnd);
        $manager->flush();
        $this->addReference('am_vnd', $vnd);
    }

    public function getOrder() {
        return 3;
    }

}

?>
