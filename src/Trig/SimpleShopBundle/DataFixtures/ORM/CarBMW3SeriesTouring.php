<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarBMW3SeriesTouring extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName('BMW 3 Series (touring)');
        $car->setPrice('90 000');
        $car->setImage("/bundles/trigsimpleshop/img/bmw/minimized/mnmz_3touring.jpg");
        $lDesc = <<< LDESC
 The E91 station wagon is known as the 3 Series Touring or Sports Wagon. It 
     features an optional panoramic sunroof, which stretches far enough for 
     passengers in the rear to enjoy.Unlike the alternative body styles, there
     was no high-performance M3 variant of the E91. Trim levels otherwise followed
     the E90 sedan closely. These included the next highest-performance trim, 
     the 335i, with its turbocharged petrol I6 engine. Other powertrains used 
     a range of petrol and diesel I6 and I4 engines, paired with RWD and/or 
     xDrive AWD. Markets such as the United States and Canada, however,
     offered but a small subset of their already limited E90 trims. In these 
     two markets, only the 325xi with AWD was available prior to 2007, and
     only the 328i in RWD and xDrive AWD forms was offered from 2007 onwards.  
LDESC;
        $sDesc = <<< SDESC
The BMW E90 series is the fifth generation of the BMW 3 Series range of compact
    executive cars. The car is also available as a touring (designated as E91),
    coupe (E92) and coupe cabriolet (E93). A high-performance BMW M3 version of
    the E90, E92, and E93 is also available. It is the successor to the E46 model,
    and was launched in March 2005.   
SDESC;
        $urls = <<< URLS
 <li id="cite_note-0"><span class="mw-cite-backlink"><b><a href="#cite_ref-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.bag-eg.com/">"Bavarian Auto Group"</a>. Bag-eg.com. 2010-04-09<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.bag-eg.com/">http://www.bag-eg.com/</a></span><span class="reference-accessdate">. Retrieved 2010-06-13</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Bavarian+Auto+Group&amp;rft.atitle=&amp;rft.date=2010-04-09&amp;rft.pub=Bag-eg.com&amp;rft_id=http%3A%2F%2Fwww.bag-eg.com%2F&amp;rfr_id=info:sid/en.wikipedia.org:BMW_3_Series_(E90)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-1"><span class="mw-cite-backlink"><b><a href="#cite_ref-1">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.avtotor.ru/bmw/">"Группа компаний Автотор&#160;:: Автомобили BMW"</a>. Avtotor.ru<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.avtotor.ru/bmw/">http://www.avtotor.ru/bmw/</a></span><span class="reference-accessdate">. Retrieved 2010-06-13</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=%D0%93%D1%80%D1%83%D0%BF%D0%BF%D0%B0+%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D0%B9+%D0%90%D0%B2%D1%82%D0%BE%D1%82%D0%BE%D1%80+%3A%3A+%D0%90%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B8+BMW&amp;rft.atitle=&amp;rft.pub=Avtotor.ru&amp;rft_id=http%3A%2F%2Fwww.avtotor.ru%2Fbmw%2F&amp;rfr_id=info:sid/en.wikipedia.org:BMW_3_Series_(E90)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.brillianceauto.com/brands/bmw.html">"Brilliance Auto"</a>. Brilliance Auto<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.brillianceauto.com/brands/bmw.html">http://www.brillianceauto.com/brands/bmw.html</a></span><span class="reference-accessdate">. Retrieved 2010-06-13</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Brilliance+Auto&amp;rft.atitle=&amp;rft.pub=Brilliance+Auto&amp;rft_id=http%3A%2F%2Fwww.brillianceauto.com%2Fbrands%2Fbmw.html&amp;rfr_id=info:sid/en.wikipedia.org:BMW_3_Series_(E90)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-3"><span class="mw-cite-backlink"><b><a href="#cite_ref-3">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external free" href="http://www.bmw.in/in/en/_teaserpool/download/insights/pdf/BMW_India_Company_Profile.pdf">http://www.bmw.in/in/en/_teaserpool/download/insights/pdf/BMW_India_Company_Profile.pdf</a></span></li>
<li id="cite_note-4"><span class="mw-cite-backlink"><b><a href="#cite_ref-4">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://media.ford.com/plant_display.cfm?plant_id=50">"Facilities | Ford Motor Company Newsroom"</a>. Media.ford.com<span class="printonly">. <a rel="nofollow" class="external free" href="http://media.ford.com/plant_display.cfm?plant_id=50">http://media.ford.com/plant_display.cfm?plant_id=50</a></span><span class="reference-accessdate">. Retrieved 2010-09-13</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Facilities+%26%23124%3B+Ford+Motor+Company+Newsroom&amp;rft.atitle=&amp;rft.pub=Media.ford.com&amp;rft_id=http%3A%2F%2Fmedia.ford.com%2Fplant_display.cfm%3Fplant_id%3D50&amp;rfr_id=info:sid/en.wikipedia.org:BMW_3_Series_(E90)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-5"><span class="mw-cite-backlink"><b><a href="#cite_ref-5">^</a></b></span> <span class="reference-text"><span class="citation web">Interone Worldwide GmbH (2008-06-17). <a rel="nofollow" class="external text" href="http://www.bmw.com.my/com/en/newvehicles/3series/sedan/2008/introduction.html">"BMW 3 Series Sedan&#160;: Introduction"</a>. Bmw.com.my<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.bmw.com.my/com/en/newvehicles/3series/sedan/2008/introduction.html">http://www.bmw.com.my/com/en/newvehicles/3series/sedan/2008/introduction.html</a></span><span class="reference-accessdate">. Retrieved 2010-09-13</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=BMW+3+Series+Sedan+%3A+Introduction&amp;rft.atitle=&amp;rft.aulast=Interone+Worldwide+GmbH&amp;rft.au=Interone+Worldwide+GmbH&amp;rft.date=2008-06-17&amp;rft.pub=Bmw.com.my&amp;rft_id=http%3A%2F%2Fwww.bmw.com.my%2Fcom%2Fen%2Fnewvehicles%2F3series%2Fsedan%2F2008%2Fintroduction.html&amp;rfr_id=info:sid/en.wikipedia.org:BMW_3_Series_(E90)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-6"><span class="mw-cite-backlink"><b><a href="#cite_ref-6">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external text" href="http://www.businessweek.com/magazine/content/06_42/b4005075.htm">A Role Model For The Team Player</a> BusinessWeek – October 16, 2006</span></li>
<li id="cite_note-eMarketing.40bmwgroup.com-7"><span class="mw-cite-backlink">^ <a href="#cite_ref-eMarketing.40bmwgroup.com_7-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-eMarketing.40bmwgroup.com_7-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><span class="citation web">eMarketing@bmwgroup.com. <a rel="nofollow" class="external text" href="http://www.bmwgroup.com/">"BMW Group, annual report 2005 (accessed 11 Oct 06)"</a>. Bmwgroup.com<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.bmwgroup.com/">http://www.bmwgroup.com/</a></span><span class="reference-accessdate">. Retrieved 2010-10-03</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=BMW+Group%2C+annual+report+2005+%28accessed+11+Oct+06%29&amp;rft.atitle=&amp;rft.aulast=eMarketing%40bmwgroup.com&amp;rft.au=eMarketing%40bmwgroup.com&amp;rft.pub=Bmwgroup.com&amp;rft_id=http%3A%2F%2Fwww.bmwgroup.com%2F&amp;rfr_id=info:sid/en.wikipedia.org:BMW_3_Series_(E90)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-Good-8"><span class="mw-cite-backlink">^ <a href="#cite_ref-Good_8-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-Good_8-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><span class="citation web">Good, The (2010-01-25). <a rel="nofollow" class="external text" href="http://www.goodcarbadcar.net/2010/01/best-selling-luxury-car-canada-2009.html">"2009'S YEAR END COMPARISON OF ENTRY-LUXURY CAR SALES IN CANADA"</a>. Good Car Bad Car<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.goodcarbadcar.net/2010/01/best-selling-luxury-car-canada-2009.html">http://www.goodcarbadcar.net/2010/01/best-selling-luxury-car-canada-2009.html</a></span><span class="reference-accessdate">. Retrieved 2010-09-13</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2009%27S+YEAR+END+COMPARISON+OF+ENTRY-LUXURY+CAR+SALES+IN+CANADA&amp;rft.atitle=&amp;rft.aulast=Good&amp;rft.aufirst=The&amp;rft.au=Good%2C%26%2332%3BThe&amp;rft.date=2010-01-25&amp;rft.pub=Good+Car+Bad+Car&amp;rft_id=http%3A%2F%2Fwww.goodcarbadcar.net%2F2010%2F01%2Fbest-selling-luxury-car-canada-2009.html&amp;rfr_id=info:sid/en.wikipedia.org:BMW_3_Series_(E90)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-goodcarbadcar.net-9"><span class="mw-cite-backlink">^ <a href="#cite_ref-goodcarbadcar.net_9-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-goodcarbadcar.net_9-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><span class="citation web">Good, The (2010-01-12). <a rel="nofollow" class="external text" href="http://www.goodcarbadcar.net/2010/01/2009-sales-small-luxury-cars-bmw-audi.html">"2009'S YEAR END COMPARISON OF SALES OF ENTRY-LUXURY CARS IN THE USA"</a>. Good Car Bad Car<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.goodcarbadcar.net/2010/01/2009-sales-small-luxury-cars-bmw-audi.html">http://www.goodcarbadcar.net/2010/01/2009-sales-small-luxury-cars-bmw-audi.html</a></span><span class="reference-accessdate">. Retrieved 2010-09-13</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2009%27S+YEAR+END+COMPARISON+OF+SALES+OF+ENTRY-LUXURY+CARS+IN+THE+USA&amp;rft.atitle=&amp;rft.aulast=Good&amp;rft.aufirst=The&amp;rft.au=Good%2C%26%2332%3BThe&amp;rft.date=2010-01-12&amp;rft.pub=Good+Car+Bad+Car&amp;rft_id=http%3A%2F%2Fwww.goodcarbadcar.net%2F2010%2F01%2F2009-sales-small-luxury-cars-bmw-audi.html&amp;rfr_id=info:sid/en.wikipedia.org:BMW_3_Series_(E90)"><span style="display: none;">&#160;</span></span></span></li>  
URLS;
        $car->setLongDescription($lDesc);
        $car->setShortDescription($sDesc);
        $car->setUrls($urls);
        $car->setVendor($manager->merge($this->getReference('bmw_vnd')));
        $manager->persist($car);
        $manager->flush();
    }
    
    public function getOrder() {
        return 55;
    }
}

?>
