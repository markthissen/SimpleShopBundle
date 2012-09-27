<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarAudiS8 extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName('Audi S8');
        $car->setPrice('65000');
        $car->setImage("/bundles/trigsimpleshop/img/audi/minimized/mnmz_images.jpg");
        $lDesc = <<< LDESC
   There are two generations of the S8 and each has been based on the A8 luxury sedan from the same time period. Building on the A8's lightweight aluminum-frame chassis, the S8 adds a more powerful engine, a sport-tuned suspension, more powerful brakes and a slightly more aggressive look. Despite being Audi's largest sedan, its combination of a relatively light curb weight, muscular power and the tenacious grip of the car's standard Quattro all-wheel-drive system makes it surprisingly quick and agile. Audi's Quattro system is a key advantage over the S8's competitors as it provides more traction, especially in inclement weather conditions.
Audi made sure that luxury amenities were not sacrificed for the sake of outright speed. A premium leather-trimmed interior, real wood accents and exemplary fit and finish complement both S8 models, as do a full bevy of safety features. If there is a fault to the S8, it's probably that it doesn't quite match the performance potential of some competing sedans. Our editors described it as an impressive luxury sedan first and a performance sedan second. But for those needing AWD security or simply desiring a fast, stealthy and relatively rare luxury sedan, either S8 generation will do nicely.
LDESC;
        $sDesc = <<< SDESC
   The Audi S8 is this German automaker's flagship performance sedan, but it has only been sold sporadically. Debuting at the start of the new millennium, it was the third vehicle for the North American market to bear an "S" badge. Used to showcase Audi's performance engineering, S- and RS-badged vehicles compete directly against other automakers' performance models from divisions like BMW's M and Mercedes-Benz's AMG. As a high-luxury, high-performance and high-tech platform, the S8 is the standard-bearer in Audi's arsenal.
SDESC;
        $urls = <<< URLS
   
URLS;
        $car->setLongDescription($lDesc);
        $car->setShortDescription($sDesc);
        $car->setUrls($urls);
        $car->setVendor($manager->merge($this->getReference('audi_vnd')));
        $manager->persist($car);
        $manager->flush();
    }
    
    public function getOrder() {
        return 66;
    }
}

?>
