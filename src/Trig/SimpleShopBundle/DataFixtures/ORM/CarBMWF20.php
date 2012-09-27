<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarBMWF20 extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName('BMW F20');
        $car->setPrice('80 000');
        $car->setImage("/bundles/trigsimpleshop/img/bmw/minimized/mnmz_1x5.jpg");
        $lDesc = <<< LDESC
 BMW claims to have improved cabin materials from the last 1 series. All models
     on includes engine start-stop and air conditioning as standard. Higher trims 
     will include a 8.8-inch (220 mm) flatscreen monitor and Bluetooth hands-free
     with USB connectivity. BMW’s Drive Performance Control is standard on all 
     models. Drive Performance Control allows the driver to select one of four 
     modes. These include Comfort, Sport, Sport+, and ECO PRO. ECO PRO aims to
     save fuel by adjusting throttle response to encourage slower acceleration
     and by limiting the use of accessories like air-conditioning, heated mirrors
     and seats. The increases in fuel economy are displayed to the driver, 
     showing how far extra the car can travel as a result. To differentiate 
     the sub-models, BMW offers Sport Line and Urban Line models which differ 
     by alloy wheels, kidney grille and other appearance-related features  
LDESC;
        $sDesc = <<< SDESC
The BMW F20 (introduced in 2011) is the second generation of the five door 
    compact hatchback variant of the BMW 1 Series. Like its predecessor, the 
    new car still features rear-wheel drive ( However, the M135i is available 
    in an all wheel drive model),[1] a longitudinally-mounted engine and an 
    advanced aluminum multilink suspension   
SDESC;
        $urls = <<< URLS
  <li id="cite_note-0"><span class="mw-cite-backlink"><b><a href="#cite_ref-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="https://www.press.bmwgroup.com/pressclub/p/pcgl/pressDetail.html?outputChannelId=6&amp;id=T0110674EN&amp;left_menu_item=node__2224">"BMW Group PressClub Global"</a>. Press.bmwgroup.com<span class="printonly">. <a rel="nofollow" class="external free" href="https://www.press.bmwgroup.com/pressclub/p/pcgl/pressDetail.html?outputChannelId=6&amp;id=T0110674EN&amp;left_menu_item=node__2224">https://www.press.bmwgroup.com/pressclub/p/pcgl/pressDetail.html?outputChannelId=6&amp;id=T0110674EN&amp;left_menu_item=node__2224</a></span><span class="reference-accessdate">. Retrieved 2011-10-15</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=BMW+Group+PressClub+Global&amp;rft.atitle=&amp;rft.pub=Press.bmwgroup.com&amp;rft_id=https%3A%2F%2Fwww.press.bmwgroup.com%2Fpressclub%2Fp%2Fpcgl%2FpressDetail.html%3FoutputChannelId%3D6%26id%3DT0110674EN%26left_menu_item%3Dnode__2224&amp;rfr_id=info:sid/en.wikipedia.org:BMW_1_Series_(F20)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-1"><span class="mw-cite-backlink"><b><a href="#cite_ref-1">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external text" href="https://www.press.bmwgroup.com/pressclub/p/pcgl/pressDetail.html?title=bmw-model-update-programme-as-from-july&amp;outputChannelId=6&amp;id=T0126686EN&amp;left_menu_item=node__2224">BMW model update programme as from July.</a></span></li>
<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.carbuyer.co.uk/reviews/bmw/series-1/hatchback/review">"BMW 1 Series hatchback review"</a>. CarBuyer. 2011-07-18<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.carbuyer.co.uk/reviews/bmw/series-1/hatchback/review">http://www.carbuyer.co.uk/reviews/bmw/series-1/hatchback/review</a></span><span class="reference-accessdate">. Retrieved 2011-10-15</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=BMW+1+Series+hatchback+review&amp;rft.atitle=&amp;rft.date=2011-07-18&amp;rft.pub=CarBuyer&amp;rft_id=http%3A%2F%2Fwww.carbuyer.co.uk%2Freviews%2Fbmw%2Fseries-1%2Fhatchback%2Freview&amp;rfr_id=info:sid/en.wikipedia.org:BMW_1_Series_(F20)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-3"><span class="mw-cite-backlink"><b><a href="#cite_ref-3">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.autoexpress.co.uk/carreviews/firstdrives/270067/bmw_1_series.html#ixzz1SZ8bJd9b">"BMW 1 Series | First Drives"</a>. Auto Express<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.autoexpress.co.uk/carreviews/firstdrives/270067/bmw_1_series.html#ixzz1SZ8bJd9b">http://www.autoexpress.co.uk/carreviews/firstdrives/270067/bmw_1_series.html#ixzz1SZ8bJd9b</a></span><span class="reference-accessdate">. Retrieved 2011-10-15</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=BMW+1+Series+%26%23124%3B+First+Drives&amp;rft.atitle=&amp;rft.pub=Auto+Express&amp;rft_id=http%3A%2F%2Fwww.autoexpress.co.uk%2Fcarreviews%2Ffirstdrives%2F270067%2Fbmw_1_series.html%23ixzz1SZ8bJd9b&amp;rfr_id=info:sid/en.wikipedia.org:BMW_1_Series_(F20)"><span style="display: none;">&#160;</span></span></span></li> 
URLS;
        $car->setLongDescription($lDesc);
        $car->setShortDescription($sDesc);
        $car->setUrls($urls);
        $car->setVendor($manager->merge($this->getReference('bmw_vnd')));
        $manager->persist($car);
        $manager->flush();
    }
    
    public function getOrder() {
        return 52;
    }
}

?>
