<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarAudiR8GT3 extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName(' Audi R8 GT3');
        $car->setPrice('50 000');
        $car->setImage("/bundles/trigsimpleshop/img/audi/minimized/mnmz_audi-r8.jpg");
        $lDesc = <<< LDESC
   Homoglamated production race cars such as the 2010 Audi R8 GT3 are an exciting consumer perk required by the rules of some race series. In the past, the rule set which calls the R8 GT3 into production has brought us such cars as the BMW M3 CSL, Mercedes-Benz 190 Evolution II and the Porsche 911 GT3 Cup. Mechanically speaking, the 2010 R8 GT3 features several changes from the production car. 
As per GT3 regulations, Audi ditches the Quattro AWD system characteristic of the R8 in favor of a RWD setup. Rest assured the team at Audi Sport is putting significant attention into the RWD system used in the R8 GT3. The Le Mans racing series Audi R10 has proven, with its unprecedented record in endurance racing over the past couple of years, that Audi is committed to its motorsport division. 
Rounding out known info for the performance upgrades on the 2010 Audi R8 GT3 are a menacing track-ready aerodynamics kit promising greatly increased downforce and handling prowess, a 6 speed sequential manual transmission, and a gasoline motor promising more than 500 horsepower. 
Which brings us to the next question. Will the 2010 Audi R8 GT3, or Audi R16 if you prefer, be street legal? Audi has not released the official word on this yet, saying only that the R8 GT3 "will offer customers a racing sports car equipped with high-calibre technology and the typical Audi qualities, but which is nevertheless easy to handle." 
Below is the first info direct from Audi AG, reprinted in full. More details on the 2010 Audi R8 GT3 will be posted as they arise. 
LDESC;
        $sDesc = <<< SDESC
  The R8 is the first production Audi bearing the name and genes of a successful racing sportscar and is therefore an excellent base from which to build up our first big customer sport programme," explains Head of Audi Motorsport Dr Wolfgang Ullrich. "Ever since the R8 was unveiled we've been inundated with enquiries about a race version. With the Audi R8 we will offer customers a racing sportscar equipped with high-calibre technology and the typical Audi qualities, but which is nevertheless easy to handle." 
 
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
        return 61;
    }
}

?>
