<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarAudiA8 extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName('Audi A8');
        $car->setPrice('55 000');
        $car->setImage("/bundles/trigsimpleshop/img/audi/minimized/mnmz_2010-audi-a8_100225939_m.jpg");
        $lDesc = <<< LDESC
The first two generations employed the Volkswagen Group D platform, with the 
    current generation deriving the MLB platform. After the original model's 1994
    release, Audi released the second generation in 2002, and the third and 
    current iteration in 2009. Notable for being the first mass-market car with
    an aluminium chassis, all A8 models have utilised this construction method 
    co-developed with Alcoa and marketed as the Audi Space Frame.
A mechanically-upgraded, high-performance version of the A8 debuted in 1996 as
the Audi S8. Produced exclusively at Audi's Neckarsulm plant, unlike the donor 
A8 model, the S8 has only been available in short-wheelbase form and is fitted 
standard with Audi's quattro all-wheel drive system.Originally appeared in 2010 
Geneva motor show, the concept vehicle includes 2.0 TFSI engine rated 211 PS 
(155 kW; 208 bhp) and 350 N·m (258.15 lbf·ft)@1500–4200 rpm, a disc-shaped electric
motor rated 45 PS (33 kW; 44 bhp) and 211 N·m (155.63 lbf·ft), lithium-ion 
battery.[26]Production version included electric motor rated 40 kW (54 PS) and
210 N·m (155 lbf·ft), 1.3 kW (1.7 hp) lithium-ion battery. Pure electric mode
is available for 3 kilometres (2 mi) at top speed of 100 km/h (62 mph). It went
on sale in 2012.[27]   
LDESC;
        $sDesc = <<< SDESC
The Audi A8 is a four-door, full-size, luxury sedan car manufactured and marketed
    by the German automaker Audi since 1994. Succeeding the Audi V8, and now in
    its third generation, the A8 has been offered with both front- or permanent 
    all-wheel drive—and in short- and long-wheelbase variants.   
SDESC;
        $urls = <<< URLS
 <li id="cite_note-nytalcoa-0"><span class="mw-cite-backlink"><b><a href="#cite_ref-nytalcoa_0-0">^</a></b></span> <span class="reference-text"><span class="citation news">Lawrence Ulrich (12 November 2010). <a rel="nofollow" class="external text" href="http://www.nytimes.com/2010/11/14/automobiles/autoreviews/14audi-a8.html?_r=1&amp;hp">"Speaking of Understatements"</a>. <i>The New York Times</i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.nytimes.com/2010/11/14/automobiles/autoreviews/14audi-a8.html?_r=1&amp;hp">http://www.nytimes.com/2010/11/14/automobiles/autoreviews/14audi-a8.html?_r=1&amp;hp</a></span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.atitle=Speaking+of+Understatements&amp;rft.jtitle=The+New+York+Times&amp;rft.aulast=Lawrence+Ulrich&amp;rft.au=Lawrence+Ulrich&amp;rft.date=12+November+2010&amp;rft_id=http%3A%2F%2Fwww.nytimes.com%2F2010%2F11%2F14%2Fautomobiles%2Fautoreviews%2F14audi-a8.html%3F_r%3D1%26hp&amp;rfr_id=info:sid/en.wikipedia.org:Audi_A8"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-ETKA-1"><span class="mw-cite-backlink">^ <a href="#cite_ref-ETKA_1-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-ETKA_1-1"><sup><i><b>b</b></i></sup></a> <a href="#cite_ref-ETKA_1-2"><sup><i><b>c</b></i></sup></a> <a href="#cite_ref-ETKA_1-3"><sup><i><b>d</b></i></sup></a> <a href="#cite_ref-ETKA_1-4"><sup><i><b>e</b></i></sup></a> <a href="#cite_ref-ETKA_1-5"><sup><i><b>f</b></i></sup></a></span> <span class="reference-text"><a href="/wiki/ETKA" title="ETKA">ETKA</a> official factory data<sup class="noprint Inline-Template" style="white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Please_clarify" title="Wikipedia:Please clarify"><span title="This is not a proper reference citation.Use {{[[Template:Cite web|Cite web&lt;/a&gt;}} or similar to provide source details. from April 2010">clarification needed</span>]]]</a></i></sup></span></li>
<li id="cite_note-Audi-Motors.net-2"><span class="mw-cite-backlink">^ <a href="#cite_ref-Audi-Motors.net_2-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-Audi-Motors.net_2-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.audi-motors.net/audi13.html">"Audi A8 Design"</a>. <i>Audi-Motors.net</i>. 2006<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.audi-motors.net/audi13.html">http://www.audi-motors.net/audi13.html</a></span><span class="reference-accessdate">. Retrieved 4 March 2010</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Audi+A8+Design&amp;rft.atitle=Audi-Motors.net&amp;rft.date=2006&amp;rft_id=http%3A%2F%2Fwww.audi-motors.net%2Faudi13.html&amp;rfr_id=info:sid/en.wikipedia.org:Audi_A8"><span style="display: none;">&#160;</span></span><sup class="noprint Inline-Template" style="white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Identifying_reliable_sources" title="Wikipedia:Identifying reliable sources"><span title="The material in the vicinity of this tag may rely on an unreliable source from March 2010">unreliable source?</span></a></i>]</sup></span></li>
<li id="cite_note-newcartestdrive1-3"><span class="mw-cite-backlink">^ <a href="#cite_ref-newcartestdrive1_3-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-newcartestdrive1_3-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.newcartestdrive.com/review-intro.cfm?Vehicle=2005_Audi_A8&amp;ReviewID=2934">"2005 Audi A8 Review, Prices, Photos"</a>. <i>New Car Test Drive</i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.newcartestdrive.com/review-intro.cfm?Vehicle=2005_Audi_A8&amp;ReviewID=2934">http://www.newcartestdrive.com/review-intro.cfm?Vehicle=2005_Audi_A8&amp;ReviewID=2934</a></span><span class="reference-accessdate">. Retrieved 2010-10-03</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2005+Audi+A8+Review%2C+Prices%2C+Photos&amp;rft.atitle=New+Car+Test+Drive&amp;rft_id=http%3A%2F%2Fwww.newcartestdrive.com%2Freview-intro.cfm%3FVehicle%3D2005_Audi_A8%26ReviewID%3D2934&amp;rfr_id=info:sid/en.wikipedia.org:Audi_A8"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-4"><span class="mw-cite-backlink"><b><a href="#cite_ref-4">^</a></b></span> <span class="reference-text"><span class="citation book">(in German) <i>Preisliste A8 S8 A8 W12 (633/1512.80.00)</i>. Audi AG. October 2006. p.&#160;16.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Preisliste+A8+S8+A8+W12+%28633%2F1512.80.00%29&amp;rft.date=October+2006&amp;rft.pages=p.%26nbsp%3B16&amp;rft.pub=Audi+AG&amp;rfr_id=info:sid/en.wikipedia.org:Audi_A8"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-5"><span class="mw-cite-backlink"><b><a href="#cite_ref-5">^</a></b></span> <span class="reference-text"><span class="citation Journal">Homes, Jake (August 2007). <a rel="nofollow" class="external text" href="http://www.caranddriver.com/news/car/07q3/2008_audi_a8-auto_shows">"2008 Audi A8 – Auto Shows"</a>. <i><a href="/wiki/Car_and_Driver" title="Car and Driver">Car and Driver</a></i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.caranddriver.com/news/car/07q3/2008_audi_a8-auto_shows">http://www.caranddriver.com/news/car/07q3/2008_audi_a8-auto_shows</a></span><span class="reference-accessdate">. Retrieved 20 January 2010</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.atitle=2008+Audi+A8+%E2%80%93+Auto+Shows&amp;rft.jtitle=%5B%5BCar+and+Driver%5D%5D&amp;rft.aulast=Homes&amp;rft.aufirst=Jake&amp;rft.au=Homes%2C%26%2332%3BJake&amp;rft.date=August+2007&amp;rft_id=http%3A%2F%2Fwww.caranddriver.com%2Fnews%2Fcar%2F07q3%2F2008_audi_a8-auto_shows&amp;rfr_id=info:sid/en.wikipedia.org:Audi_A8"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-6"><span class="mw-cite-backlink"><b><a href="#cite_ref-6">^</a></b></span> <span class="reference-text"><span class="citation web">By&#160; Chris Shunk RSS feed (2007-03-05). <a rel="nofollow" class="external text" href="http://www.autoblog.com/2007/03/05/a-685k-audi-a8-that-will-blow-its-own-doors-off/">"A $685k Audi A8 that will blow its own doors off"</a>. Autoblog.com<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.autoblog.com/2007/03/05/a-685k-audi-a8-that-will-blow-its-own-doors-off/">http://www.autoblog.com/2007/03/05/a-685k-audi-a8-that-will-blow-its-own-doors-off/</a></span><span class="reference-accessdate">. Retrieved 2012-04-08</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=A+%24685k+Audi+A8+that+will+blow+its+own+doors+off&amp;rft.atitle=&amp;rft.aulast=By%26nbsp%3B+Chris+Shunk+RSS+feed&amp;rft.au=By%26nbsp%3B+Chris+Shunk+RSS+feed&amp;rft.date=2007-03-05&amp;rft.pub=Autoblog.com&amp;rft_id=http%3A%2F%2Fwww.autoblog.com%2F2007%2F03%2F05%2Fa-685k-audi-a8-that-will-blow-its-own-doors-off%2F&amp;rfr_id=info:sid/en.wikipedia.org:Audi_A8"><span style="display: none;">&#160;</span></span></span></li>  
URLS;
        $car->setLongDescription($lDesc);
        $car->setShortDescription($sDesc);
        $car->setUrls($urls);
        $car->setVendor($manager->merge($this->getReference('audi_vnd')));
        $manager->persist($car);
        $manager->flush();
    }
    
    public function getOrder() {
        return 54;
    }
}

?>
