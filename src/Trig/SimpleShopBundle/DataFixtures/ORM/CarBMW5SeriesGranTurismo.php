<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarBMW5SeriesGranTurismo extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName('BMW 5 Series Gran Turismo');
        $car->setPrice('80000');
        $car->setImage("/bundles/trigsimpleshop/img/bmw/minimized/mnmz_5gp.jpg");
        $lDesc = <<< LDESC
   The F07 platform of the 5 Series GT provides a vehicle length traditionally 
       found in a BMW 7 Series, but with the headroom found in the BMW X5 crossover
       SUV. The F07 also features a unique "bi-modal" trunk, similar to the Twin
       Door concept on the Skoda Superb, which may be opened in a traditional 
       car-like fashion, or the entire hatch may be open in a traditional SUV 
       fashion for larger objects. Autoblog has suggested that similar vehicles
       include the Mercedes-Benz R-Class and the Lincoln MKT. Edmunds Insideline
       has suggested that BMW has designed the 5 Series GT as "sedan-style utility"
       while the BMW X6 fastback crossover SUV (released the year before, in 2008
       as a 2009 model) was meant as a "coupe-style utility".
On January 30, 2009, BMW released a video "BMW Concept: Scribble Video". The 
video was the first public introduction into the thought process behind the design
of the progressive activity vehicle series and the upcoming 5 GT.
The BMW 5 Series GT is roughly US$3,000 more than the equivalent BMW 5 Series 
sedan, being priced comparably to a similarly equipped BMW X5 midsize crossover
SUV, and significantly less expensive than the BMW 7 Series. The 5 Series Gran 
Turismo, despite being badged as part of the midsize 5 Series lineup, has been 
described by Edmunds Insideline as a "7 Series Hatchback in Reality". This is as
the GT's 120.7-inch (3,070 mm) wheelbase, 63.4-inch (1,610 mm) front track and 
65.1-inch (1,650 mm) rear track are shared with the full-size short wheelbase 7
Series (F01), giving the GT considerably larger dimensions than the 5 Series (F10).
 Indeed, the F07 5 Series GT shares design cues with that of the F01 7 
Series; notably the shape of the headlights flanking a larger split-kidney grille,
as well as its rear "L"-shaped taillights with a chrome reflector strip. The 2010
BMW 550i GT weighs in at 4,938 pounds (2,240 kg), which is 400 pounds (180 kg) 
heavier than the 2009 BMW 750i, and consequently the 550i GT's driving dynamics
suffer compared to the 2009 BMW 750i and 2009 BMW X6 xDrive50i, despite sharing
the same 4.4 L biturbo V8 engine.
The F07 Gran Turismo shares the same F01 7 Series-derived platform, powertrain, 
mechanical package, and dashboard with the upcoming F10 5 Series. However, their
front fascia has different headlights and bumper air intakes, while their taillights
also differ. The F07 also has a taller height, resulting in a higher center of 
gravity, its longer length allows for more rear legroom, the rear passenger 
accommodation has optional "Executive" bucket seats for two instead of the three-seat 
bench, and it weighs 400 pounds (180 kg) heavier compared to the F10. The F07 
also features frame-less doors and a double-pane liftgate trunk.
LDESC;
        $sDesc = <<< SDESC
The BMW 5 Series Gran Turismo (also referred to as the BMW 5 Series GT) is an
    executive or mid-size car from BMW.  
SDESC;
        $urls = <<< URLS
   <li id="cite_note-0"><span class="mw-cite-backlink"><b><a href="#cite_ref-0">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external text" href="http://www.bmwarchiv.de/e-code/f07.html">BMW F07 Platform Information</a></span></li>
<li id="cite_note-1"><span class="mw-cite-backlink"><b><a href="#cite_ref-1">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external text" href="http://www.press.bmwgroup.com/pressclub/us02.nsf/fwPressemeldungFrame?readform&amp;docid=799C8B36C8B493A2C125755C0001C92F">BMW Concept 5 Series Gran Turismo at the 2009 Geneva Motor Show</a></span></li>
<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.press.bmwgroup.com/pressclub/us02.nsf/fwPressemeldungFrame?readform&amp;docid=799C8B36C8B493A2C125755C0001C92F">"BMW Concept 5 Series Gran Turismo at the 2009 Geneva Motor Show"</a>. Press.bmwgroup.com<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.press.bmwgroup.com/pressclub/us02.nsf/fwPressemeldungFrame?readform&amp;docid=799C8B36C8B493A2C125755C0001C92F">http://www.press.bmwgroup.com/pressclub/us02.nsf/fwPressemeldungFrame?readform&amp;docid=799C8B36C8B493A2C125755C0001C92F</a></span><span class="reference-accessdate">. Retrieved 2011-04-04</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=BMW+Concept+5+Series+Gran+Turismo+at+the+2009+Geneva+Motor+Show&amp;rft.atitle=&amp;rft.pub=Press.bmwgroup.com&amp;rft_id=http%3A%2F%2Fwww.press.bmwgroup.com%2Fpressclub%2Fus02.nsf%2FfwPressemeldungFrame%3Freadform%26docid%3D799C8B36C8B493A2C125755C0001C92F&amp;rfr_id=info:sid/en.wikipedia.org:BMW_5_Series_Gran_Turismo"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-3"><span class="mw-cite-backlink"><b><a href="#cite_ref-3">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external text" href="http://www.autoblog.com/2009/02/13/geneva-preview-full-details-emerge-on-bmw-5-series-gran-turismo/">Geneva Preview: Full details emerge on BMW 5 Series Gran Turismo Concept</a></span></li>
<li id="cite_note-4"><span class="mw-cite-backlink"><b><a href="#cite_ref-4">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external text" href="https://www.press.bmwgroup.com/pressclub/p/pcgl/pressDetail.html?title=bmw-concept-5-series-gran-turismo&amp;outputChannelId=6&amp;id=T0011458DE&amp;left_menu_item=node__2237">BMW Concept 5 Series Gran Turismo.</a></span></li>
<li id="cite_note-5"><span class="mw-cite-backlink"><b><a href="#cite_ref-5">^</a></b></span> <span class="reference-text"><span class="citation web">Paukert, Chris (2009-03-04). <a rel="nofollow" class="external text" href="http://www.autoblog.com/2009/03/04/geneva-2009-bmw-5-series-gran-turismo-is-one-luxurious-automoti/">"Geneva 2009: BMW 5 Series Gran Turismo is one luxurious automotive hermaphrodite"</a>. Autoblog.com<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.autoblog.com/2009/03/04/geneva-2009-bmw-5-series-gran-turismo-is-one-luxurious-automoti/">http://www.autoblog.com/2009/03/04/geneva-2009-bmw-5-series-gran-turismo-is-one-luxurious-automoti/</a></span><span class="reference-accessdate">. Retrieved 2011-04-04</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Geneva+2009%3A+BMW+5+Series+Gran+Turismo+is+one+luxurious+automotive+hermaphrodite&amp;rft.atitle=&amp;rft.aulast=Paukert&amp;rft.aufirst=Chris&amp;rft.au=Paukert%2C%26%2332%3BChris&amp;rft.date=2009-03-04&amp;rft.pub=Autoblog.com&amp;rft_id=http%3A%2F%2Fwww.autoblog.com%2F2009%2F03%2F04%2Fgeneva-2009-bmw-5-series-gran-turismo-is-one-luxurious-automoti%2F&amp;rfr_id=info:sid/en.wikipedia.org:BMW_5_Series_Gran_Turismo"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-bmwusa.com-6"><span class="mw-cite-backlink"><b><a href="#cite_ref-bmwusa.com_6-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.bmwusa.com/standard/content/byo/default.aspx">"BMW North America"</a>. <i>bmwusa.com</i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.bmwusa.com/standard/content/byo/default.aspx">http://www.bmwusa.com/standard/content/byo/default.aspx</a></span><span class="reference-accessdate">. Retrieved 2010-06-28</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=BMW+North+America&amp;rft.atitle=bmwusa.com&amp;rft_id=http%3A%2F%2Fwww.bmwusa.com%2Fstandard%2Fcontent%2Fbyo%2Fdefault.aspx&amp;rfr_id=info:sid/en.wikipedia.org:BMW_5_Series_Gran_Turismo"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-motortrend.com-7"><span class="mw-cite-backlink"><b><a href="#cite_ref-motortrend.com_7-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.motortrend.com/roadtests/sedans/112_0905_2010_bmw_5_series_gt_first_look/performance_safety_price.html">"Motor Trend First Look: 2010 BMW 5 Series Gran Turismo"</a>. Motortrend.com<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.motortrend.com/roadtests/sedans/112_0905_2010_bmw_5_series_gt_first_look/performance_safety_price.html">http://www.motortrend.com/roadtests/sedans/112_0905_2010_bmw_5_series_gt_first_look/performance_safety_price.html</a></span><span class="reference-accessdate">. Retrieved 2011-04-04</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Motor+Trend+First+Look%3A+2010+BMW+5+Series+Gran+Turismo&amp;rft.atitle=&amp;rft.pub=Motortrend.com&amp;rft_id=http%3A%2F%2Fwww.motortrend.com%2Froadtests%2Fsedans%2F112_0905_2010_bmw_5_series_gt_first_look%2Fperformance_safety_price.html&amp;rfr_id=info:sid/en.wikipedia.org:BMW_5_Series_Gran_Turismo"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-insideline1-8"><span class="mw-cite-backlink">^ <a href="#cite_ref-insideline1_8-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-insideline1_8-1"><sup><i><b>b</b></i></sup></a> <a href="#cite_ref-insideline1_8-2"><sup><i><b>c</b></i></sup></a></span> <span class="reference-text"><span class="citation web">Riches, Erin (2010-08-27). <a rel="nofollow" class="external text" href="http://www.insideline.com/bmw/5-series/2010/2010-bmw-550i-gran-turismo-full-test-and-video.html#article_pagination_top_0">"2010 BMW 550i Gran Turismo Full Test and Video"</a>. Insideline.com<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.insideline.com/bmw/5-series/2010/2010-bmw-550i-gran-turismo-full-test-and-video.html#article_pagination_top_0">http://www.insideline.com/bmw/5-series/2010/2010-bmw-550i-gran-turismo-full-test-and-video.html#article_pagination_top_0</a></span><span class="reference-accessdate">. Retrieved 2012-03-24</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2010+BMW+550i+Gran+Turismo+Full+Test+and+Video&amp;rft.atitle=&amp;rft.aulast=Riches&amp;rft.aufirst=Erin&amp;rft.au=Riches%2C%26%2332%3BErin&amp;rft.date=2010-08-27&amp;rft.pub=Insideline.com&amp;rft_id=http%3A%2F%2Fwww.insideline.com%2Fbmw%2F5-series%2F2010%2F2010-bmw-550i-gran-turismo-full-test-and-video.html%23article_pagination_top_0&amp;rfr_id=info:sid/en.wikipedia.org:BMW_5_Series_Gran_Turismo"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-9"><span class="mw-cite-backlink"><b><a href="#cite_ref-9">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external text" href="http://www.autoblog.com/2010/04/15/beijing-preview-bmw-adding-all-wheel-drive-to-gran-turismo-line/">Beijing Preview: BMW adding all-wheel drive to Gran Turismo line</a></span></li>
<li id="cite_note-10"><span class="mw-cite-backlink"><b><a href="#cite_ref-10">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external text" href="http://www.autoblog.com/2011/03/15/bmw-italy-teams-up-with-trussardi-for-special-edition-5-series-g/">BMW Italy teams up with Trussardi for special edition 5 Series Gran Turismo</a></span></li>
<li id="cite_note-11"><span class="mw-cite-backlink"><b><a href="#cite_ref-11">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external text" href="http://www.le-citydeluxe.com/po/sinseccion/-37322.html">Special Edition: BMW 5 Gran Turismo by Trussardi</a></span></li>
<li id="cite_note-www.bmwusa.com-12"><span class="mw-cite-backlink"><b><a href="#cite_ref-www.bmwusa.com_12-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.bmwusa.com/standard/content/experience/newsfeed/post/2009/05/21/The-New-BMW-5-Series-Gran-Turismo.aspx">"The New BMW 5 Series Gran Turismo"</a>. <i>www.bmwusa.com</i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.bmwusa.com/standard/content/experience/newsfeed/post/2009/05/21/The-New-BMW-5-Series-Gran-Turismo.aspx">http://www.bmwusa.com/standard/content/experience/newsfeed/post/2009/05/21/The-New-BMW-5-Series-Gran-Turismo.aspx</a></span><span class="reference-accessdate">. Retrieved 2010-03-05</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=The+New+BMW+5+Series+Gran+Turismo&amp;rft.atitle=www.bmwusa.com&amp;rft_id=http%3A%2F%2Fwww.bmwusa.com%2Fstandard%2Fcontent%2Fexperience%2Fnewsfeed%2Fpost%2F2009%2F05%2F21%2FThe-New-BMW-5-Series-Gran-Turismo.aspx&amp;rfr_id=info:sid/en.wikipedia.org:BMW_5_Series_Gran_Turismo"><span style="display: none;">&#160;</span></span></span></li>
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
