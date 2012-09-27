<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarBmwSeriesGranCoupe extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName('BMW F12/F13 Gran coupe');
        $car->setPrice('90000');
        $car->setImage("/bundles/trigsimpleshop/img/bmw/minimized/mnmz_m3coupe.jpg");
        $lDesc = <<< LDESC
  BMW launched the 6 Series Gran Coupe at the 2012 Geneva Motor Show. The Gran Coupe is the fruition of the BMW CS Concept, a vehicle that was intended to slot at the top of BMW's lineup alongside the 7-Series flagship sedan. The CS Concept never made it to production due to the worsening economy in 2008, which also saw the retirement of BMW M development executive Gerhard Richter.[6] Pricing for the BMW 640i Gran Coupe is slightly more than the BMW 740i.[7] The Gran Coupe competes with the Audi A7 and Mercedes-Benz CLS-Class in the four-door executive coupe market.[8] However, the Gran Coupe is larger and more expensive than the CLS and A7 and is priced close to the Porsche Panamera.[9]
Before the Gran Coupe, the closest rivals to the Audi A7 and Mercedes-Benz CLS in BMW's current lineup were the BMW X6 (2009–present) and the BMW 5 Series Gran Turismo (F07) (2010–present), both of which combine four doors with coupe-like features such as frame-less doors and a sloping rear roof.[10] The 5 Series GT, positioned more for utility with its bi-modal trunk/hatchback, was criticized for its aesthetics in comparison to its sleeker rivals and did not sell as well as BMW executives had expected.[11] The X6 is intended for limited offroad capacity due to its raised suspension compared to the standard 5 Series.[9][10][12]
The Gran Coupe shares the front and rear fascias with the other 6 Series body styles. Compared to the two door 6 Series coupe, the Gran Coupe's wheelbase is longer by stretched 4.5 inches while the body is 4.4 inches longer. This makes the Gran Coupe longer (by 4.0 inches) and wider (by 1.3 inches) than the BMW 5 Series sedan (F10).[13] The extra length, compared to the two-door 6 Series, gives the Gran Coupe a 4+1 seating arrangement, as the rear has two fullsize outboard seats and a middle seat for occasional passengers. The Gran Coupe has a different center console though its dashboard is shared with the Coupe and Cabriolet.[11]
BMW’s 6 Series Gran Coupe and the Paranal Observatory[14]
BMW 6 Gran Coupe at Motorshow Geneva 2012
Scheduled to be released for the 2013 model year are the 640i, 640d, 650i and 650i xDrive, featuring the same powertrain configurations as the two-door 6 Series Coupe.[15][16] The 650i will be powered by an updated variant of the N63 twin-turbo 4.4-liter V8 that adds Valvetronic, giving it an output of 445 hp and 480 lb-ft, gains of 45 hp and 30 lb-ft over the same engine in other 6 Series. [13] 
LDESC;
        $sDesc = <<< SDESC
  The BMW F12/F13 6 Series is a grand tourer/executive coupe automobile manufactured 
      by BMW.[1] BMW unveiled information and pictures in September 2010 of the 
      Concept 6 Series, which was introduced at the 2010 Paris Motor Show.[2] 
      The third generation BMW F12 (convertible) and F13 (coupe) were released 
      for the 2012 model year at the 2011 Shanghai Auto Show and New York Auto
      Show.[3] A four-door coupe-like sedan called the 6 Series Gran Coupe will
      enter production in 2012 for the 2013 model year.
BMW revealed the 6-Series Convertible on November 18, 2010. The vehicle offers
two petrol engines - a 6 cylinder twin power turbo engine which will produce 320 
hp (239 kW) at 5800 rpm and a V8 twin turbo engine producing 407 hp (303 kW) in
5500 rpm for the 650i. The folding top is still cloth as compared to the E93 3
Series convertible which is equipped with a metal roof. On March 13, 2011, BMW 
released pictures and details about the Coupe.[4] Four months later BMW introduced 
the 640d, the successor to 635d E63 model, with a new diesel engine that produces 
313 hp from new 3.0L straight six. Also, for the first time in the 6 series, xDrive 
all-wheel drive is available for the coupe and gran coupe.
SDESC;
        $urls = <<< URLS
   <li id="cite_note-0"><span class="mw-cite-backlink"><b><a href="#cite_ref-0">^</a></b></span> <span class="reference-text"><span class="citation news"><a href="/wiki/Dan_Neil" title="Dan Neil">Neil, Dan</a> (November 26, 2011). "BMW 640i: for the All-Business Person in a Hurry". <i><a href="/wiki/The_Wall_Street_Journal" title="The Wall Street Journal">The Wall Street Journal</a></i>: p.&#160;D12.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.atitle=BMW+640i%3A+for+the+All-Business+Person+in+a+Hurry&amp;rft.jtitle=%5B%5BThe+Wall+Street+Journal%5D%5D&amp;rft.aulast=Neil&amp;rft.aufirst=Dan&amp;rft.au=Neil%2C%26%2332%3BDan&amp;rft.date=November+26%2C+2011&amp;rft.pages=p.%26nbsp%3BD12&amp;rfr_id=info:sid/en.wikipedia.org:BMW_F12/F13"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-1"><span class="mw-cite-backlink"><b><a href="#cite_ref-1">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.motorthusiast.com/559/2012-bmw-concept-6-series-coupe-officially-revealed/">"2012 BMW Concept 6 Series Coupe officially revealed"</a>. Motorthusiast. 2010-20-19<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.motorthusiast.com/559/2012-bmw-concept-6-series-coupe-officially-revealed/">http://www.motorthusiast.com/559/2012-bmw-concept-6-series-coupe-officially-revealed/</a></span><span class="reference-accessdate">. Retrieved 2010-20-19</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2012+BMW+Concept+6+Series+Coup%C3%A9+officially+revealed&amp;rft.atitle=&amp;rft.date=2010-20-19&amp;rft.pub=Motorthusiast&amp;rft_id=http%3A%2F%2Fwww.motorthusiast.com%2F559%2F2012-bmw-concept-6-series-coupe-officially-revealed%2F&amp;rfr_id=info:sid/en.wikipedia.org:BMW_F12/F13"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.bmwblog.com/2011/03/24/bmw-to-unveil-new-6-series-coupe-at-shanghai-and-new-york-auto-shows/">"BMW to unveil new 6 Series Coupe at Shanghai and New York Auto Shows"</a>. Bmwblog.com<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.bmwblog.com/2011/03/24/bmw-to-unveil-new-6-series-coupe-at-shanghai-and-new-york-auto-shows/">http://www.bmwblog.com/2011/03/24/bmw-to-unveil-new-6-series-coupe-at-shanghai-and-new-york-auto-shows/</a></span><span class="reference-accessdate">. Retrieved 2011-07-16</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=BMW+to+unveil+new+6+Series+Coupe+at+Shanghai+and+New+York+Auto+Shows&amp;rft.atitle=&amp;rft.pub=Bmwblog.com&amp;rft_id=http%3A%2F%2Fwww.bmwblog.com%2F2011%2F03%2F24%2Fbmw-to-unveil-new-6-series-coupe-at-shanghai-and-new-york-auto-shows%2F&amp;rfr_id=info:sid/en.wikipedia.org:BMW_F12/F13"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-3"><span class="mw-cite-backlink"><b><a href="#cite_ref-3">^</a></b></span> <span class="reference-text"><span class="citation pressrelease"><a rel="nofollow" class="external text" href="https://www.press.bmwgroup.com/pressclub/p/pcgl/pressDetail.html?outputChannelId=6&amp;id=T0098874EN&amp;left_menu_item=node__2239">"Inspired by a passion for aesthetics and dynamics: The new BMW 6 Series Coupe"</a> (Press release). <a href="/wiki/BMW" title="BMW">BMW</a>. 13 March 2011<span class="printonly">. <a rel="nofollow" class="external free" href="https://www.press.bmwgroup.com/pressclub/p/pcgl/pressDetail.html?outputChannelId=6&amp;id=T0098874EN&amp;left_menu_item=node__2239">https://www.press.bmwgroup.com/pressclub/p/pcgl/pressDetail.html?outputChannelId=6&amp;id=T0098874EN&amp;left_menu_item=node__2239</a></span><span class="reference-accessdate">. Retrieved 11 December 2011</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Inspired+by+a+passion+for+aesthetics+and+dynamics%3A+The+new+BMW+6+Series+Coupe&amp;rft.atitle=&amp;rft.date=13+March+2011&amp;rft.pub=%5B%5BBMW%5D%5D&amp;rft_id=https%3A%2F%2Fwww.press.bmwgroup.com%2Fpressclub%2Fp%2Fpcgl%2FpressDetail.html%3FoutputChannelId%3D6%26id%3DT0098874EN%26left_menu_item%3Dnode__2239&amp;rfr_id=info:sid/en.wikipedia.org:BMW_F12/F13"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-4"><span class="mw-cite-backlink"><b><a href="#cite_ref-4">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.motortrend.com/roadtests/convertibles/1208_bmw_650i_mercedes_benz_sl550_porsche_911_carrera_s/">"2012 BMW 650I Convertible vs. 2013 Mercedes-Benz Sl550 Roadster vs. 2013 Porsche 911 Carrera S Cabriolet Luxury Convertible Comparison"</a>. Motor Trend. 2012-06-18<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.motortrend.com/roadtests/convertibles/1208_bmw_650i_mercedes_benz_sl550_porsche_911_carrera_s/">http://www.motortrend.com/roadtests/convertibles/1208_bmw_650i_mercedes_benz_sl550_porsche_911_carrera_s/</a></span><span class="reference-accessdate">. Retrieved 2012-08-17</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2012+BMW+650I+Convertible+vs.+2013+Mercedes-Benz+Sl550+Roadster+vs.+2013+Porsche+911+Carrera+S+Cabriolet+Luxury+Convertible+Comparison&amp;rft.atitle=&amp;rft.date=2012-06-18&amp;rft.pub=Motor+Trend&amp;rft_id=http%3A%2F%2Fwww.motortrend.com%2Froadtests%2Fconvertibles%2F1208_bmw_650i_mercedes_benz_sl550_porsche_911_carrera_s%2F&amp;rfr_id=info:sid/en.wikipedia.org:BMW_F12/F13"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-5"><span class="mw-cite-backlink"><b><a href="#cite_ref-5">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.caranddriver.com/news/2013-bmw-6-series-gran-coupe-spy-photos-news">"2013 BMW 6-series Gran Coupe Spy Photos – News – Car and Driver"</a>. Caranddriver.com. 2012-08-12<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.caranddriver.com/news/2013-bmw-6-series-gran-coupe-spy-photos-news">http://www.caranddriver.com/news/2013-bmw-6-series-gran-coupe-spy-photos-news</a></span><span class="reference-accessdate">. Retrieved 2012-08-17</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2013+BMW+6-series+Gran+Coup%C3%A9+Spy+Photos+%E2%80%93+News+%E2%80%93+Car+and+Driver&amp;rft.atitle=&amp;rft.date=2012-08-12&amp;rft.pub=Caranddriver.com&amp;rft_id=http%3A%2F%2Fwww.caranddriver.com%2Fnews%2F2013-bmw-6-series-gran-coupe-spy-photos-news&amp;rfr_id=info:sid/en.wikipedia.org:BMW_F12/F13"><span style="display: none;">&#160;</span></span></span></li>
URLS;
        $car->setLongDescription($lDesc);
        $car->setShortDescription($sDesc);
        $car->setUrls($urls);
        $car->setVendor($manager->merge($this->getReference('bmw_vnd')));
        $manager->persist($car);
        $manager->flush();
    }
    
    public function getOrder() {
        return 56;
    }
}

?>
