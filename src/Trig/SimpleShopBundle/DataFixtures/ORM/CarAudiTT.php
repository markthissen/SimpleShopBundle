<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarAudiTT extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName('Audi TT');
        $car->setPrice('60000');
        $car->setImage("/bundles/trigsimpleshop/img/audi/minimized/mnmz_audi-tt.jpg");
        $lDesc = <<< LDESC
   In 2005, Audi released the Coupé-only limited edition (800 sold in the UK, not the 1000 originally planned) Audi TT quattro Sport[11] (known as the Audi TT Club Sport in Europe). Built by AUDI AG high-performance specialist subsidiary quattro GmbH, it had increased power from its 1.8-litre turbocharged engine - rising to 240 PS (177 kW; 237 hp) and 320 newton metres (236 lbf·ft) of torque - and a reduction in weight of 75 kilograms (165 lb) to 1,390 kilograms (3,064 lb),[11] which allowed for a 0 to 100 kilometres per hour (0 to 62.1 mph) time of 5.9 seconds, and an electronically limited top speed of 250 kilometres per hour (155.3 mph).[11]
This weight loss was achieved by deleting the spare wheel, rear counterweight, rear parcel shelf and rear seats, and the standard fitment air conditioning.[11] The main battery was also relocated to the rear of the vehicle in order to maintain weight distribution as much as possible. Lightweight fixed-back Recaro bucket seats graced the interior.[11] Distinguishable from other TT Coupés by its two-tone paint scheme (Phantom Black pearl painted roof, pillars and mirror housings, in combination with either Avus Silver, Phantom Black, Mauritius Blue or Misano Red body colour)[11] and unique 18" 15-spoke cast aluminium alloy wheels, plus the same body kit as fitted to the TT 3.2 V6, the TT quattro Sport also featured black exhaust tailpipes and uprated suspension settings and new wheels, ½" wider at the rear for improved handling. The brochure stated V6-spec brakes were to be fitted, however models delivered in the UK came with the standard 225 spec brake callipers which were red-painted.
LDESC;
        $sDesc = <<< SDESC
   The Audi TT is a two-door sports car manufactured by the German automaker and Volkswagen Group subsidiary Audi since 1998.
The Audi TT has been produced in two generations. Both generations have been available in two car body styles; as a 2+2 Coupé, or two-seater Roadster. They have been built on consecutive generations of the Volkswagen Group A platform, starting with the A4 (PQ34). As a result of this platform-sharing, the Audi TT has identical powertrain and suspension layouts as its related platform-mates; this includes a front-mounted transversely oriented engine, front-wheel drive or quattro four-wheel drive system, and fully independent front suspension using MacPherson struts.
Both generations of TT are assembled by the Audi subsidiary Audi Hungaria Motor Kft. in Győr, Hungary, using bodyshells manufactured and painted at Audi's Ingolstadt plant.
SDESC;
        $urls = <<< URLS
 <li id="cite_note-audi-gyoer-0"><span class="mw-cite-backlink"><b><a href="#cite_ref-audi-gyoer_0-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.audi.com/com/brand/en/company/production_plants/gyoer.html">"Györ production plant overview"</a>. <i>www.audi.com</i>. <a href="/wiki/Audi" title="Audi">Audi</a><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.audi.com/com/brand/en/company/production_plants/gyoer.html">http://www.audi.com/com/brand/en/company/production_plants/gyoer.html</a></span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Gy%C3%B6r+production+plant+overview&amp;rft.atitle=www.audi.com&amp;rft.pub=%5B%5BAudi%5D%5D&amp;rft_id=http%3A%2F%2Fwww.audi.com%2Fcom%2Fbrand%2Fen%2Fcompany%2Fproduction_plants%2Fgyoer.html&amp;rfr_id=info:sid/en.wikipedia.org:Audi_TT"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-metro-thomas-1"><span class="mw-cite-backlink">^ <a href="#cite_ref-metro-thomas_1-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-metro-thomas_1-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><span class="citation Journal">Patton, Phil (May 2001). <a rel="nofollow" class="external text" href="http://www.metropolismag.com/html/content_0501/tho/index.html">"Would you buy a Concept Car from this man?"</a>. <i>Metropolis Magazine</i> (Bellerophon Publications)<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.metropolismag.com/html/content_0501/tho/index.html">http://www.metropolismag.com/html/content_0501/tho/index.html</a></span><span class="reference-accessdate">. Retrieved 4 January 2010</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.atitle=Would+you+buy+a+Concept+Car+from+this+man%3F&amp;rft.jtitle=Metropolis+Magazine&amp;rft.aulast=Patton&amp;rft.aufirst=Phil&amp;rft.au=Patton%2C%26%2332%3BPhil&amp;rft.date=May+2001&amp;rft.pub=Bellerophon+Publications&amp;rft_id=http%3A%2F%2Fwww.metropolismag.com%2Fhtml%2Fcontent_0501%2Ftho%2Findex.html&amp;rfr_id=info:sid/en.wikipedia.org:Audi_TT"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-CAP-2"><span class="mw-cite-backlink">^ <a href="#cite_ref-CAP_2-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-CAP_2-1"><sup><i><b>b</b></i></sup></a> <a href="#cite_ref-CAP_2-2"><sup><i><b>c</b></i></sup></a></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.carautoportal.com/audi/audi-tt.php">"Audi TT"</a>. <i>CarAutoPortal.com</i>. Car Auto Portal, Inc.. <a rel="nofollow" class="external text" href="http://web.archive.org/web/20091213030727/http://www.carautoportal.com/audi/audi-tt.php">Archived</a> from the original on 13 December 2009<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.carautoportal.com/audi/audi-tt.php">http://www.carautoportal.com/audi/audi-tt.php</a></span><span class="reference-accessdate">. Retrieved 4 January 2010</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Audi+TT&amp;rft.atitle=CarAutoPortal.com&amp;rft.pub=Car+Auto+Portal%2C+Inc.&amp;rft_id=http%3A%2F%2Fwww.carautoportal.com%2Faudi%2Faudi-tt.php&amp;rfr_id=info:sid/en.wikipedia.org:Audi_TT"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-ams-3"><span class="mw-cite-backlink"><b><a href="#cite_ref-ams_3-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.auto-motor-und-sport.de/news/portaet-peter-schreyer-kia-chefdesigner-und-kuenstler-1250367.html">"Porträt Peter Schreyer: Kia-Chefdesigner und Künstler"</a>. <i>Auto, Motor und Sport</i>. 9 May 2009<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.auto-motor-und-sport.de/news/portaet-peter-schreyer-kia-chefdesigner-und-kuenstler-1250367.html">http://www.auto-motor-und-sport.de/news/portaet-peter-schreyer-kia-chefdesigner-und-kuenstler-1250367.html</a></span>. "Zu den wichtigsten Entwürfen, die in seiner Zeit als Audi-Designchef entstanden, zählt er den Audi TT und den A2 ."</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Portr%C3%A4t+Peter+Schreyer%3A+Kia-Chefdesigner+und+K%C3%BCnstler&amp;rft.atitle=Auto%2C+Motor+und+Sport&amp;rft.date=9+May+2009&amp;rft_id=http%3A%2F%2Fwww.auto-motor-und-sport.de%2Fnews%2Fportaet-peter-schreyer-kia-chefdesigner-und-kuenstler-1250367.html&amp;rfr_id=info:sid/en.wikipedia.org:Audi_TT"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-4"><span class="mw-cite-backlink"><b><a href="#cite_ref-4">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.cardesignnews.com/site/home/new_cars/display/store4/item59094/">"Who's Where: Martin Smith joins Ford Europe design team"</a>. <i>Car Design News</i>. Ultima Media. 26 February 2004<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.cardesignnews.com/site/home/new_cars/display/store4/item59094/">http://www.cardesignnews.com/site/home/new_cars/display/store4/item59094/</a></span><span class="reference-accessdate">. Retrieved 4 January 2010</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Who%27s+Where%3A+Martin+Smith+joins+Ford+Europe+design+team&amp;rft.atitle=Car+Design+News&amp;rft.date=26+February+2004&amp;rft.pub=Ultima+Media&amp;rft_id=http%3A%2F%2Fwww.cardesignnews.com%2Fsite%2Fhome%2Fnew_cars%2Fdisplay%2Fstore4%2Fitem59094%2F&amp;rfr_id=info:sid/en.wikipedia.org:Audi_TT"><span style="display: none;">&#160;</span></span></span></li>  
URLS;
        $car->setLongDescription($lDesc);
        $car->setShortDescription($sDesc);
        $car->setUrls($urls);
        $car->setVendor($manager->merge($this->getReference('audi_vnd')));
        $manager->persist($car);
        $manager->flush();
    }
    
    public function getOrder() {
        return 64;
    }
}

?>
