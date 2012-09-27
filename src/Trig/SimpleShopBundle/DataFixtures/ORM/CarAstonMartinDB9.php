<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarAstonMartinDb9 extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName("Aston Martin DB9");
        $car->setPrice("150000");
        $car->setImage("/bundles/trigsimpleshop/img/am/minimized/mnmz_2011_aston_martin_db9_coupe_main.jpg");
        $sDesc = <<< SDESC
The DB9 is the first model to be built at Aston Martin"s Gaydon facility 
    in Warwickshire, England. The moniker "DB" stems from the initials of David
    Brown, the owner of Aston Martin for a significant part of its history. The
    DB9, which was designed by Ian Callum and finished by his successor, Henrik
    Fisker, superseded the now-discontinued Aston Martin DB7 (also by Callum) 
    which started production in 1994.
SDESC;
        $lDesc = <<< LDESC
   The Aston Martin DB9 comes in two variants; the coupé and "Volante" convertible,
       each producing 470 bhp (350 kW; 477 PS) from a 6.0L V12 engine, originally 
       taken from its sister car the V12 Vanquish. In fact, this V12 engine is why
       Aston Martin did not call the car the DB8, which could suggest that it has 
       only a V8 engine. One report states that Aston Martin believed that this
       car was such a huge leap from the Jaguar XJ-S based DB7 that it named it
       DB9 instead of DB8, which they thought would indicate a gradual evolution.
        The Gaydon facility"s production capacity for the DB9 could allow for 
       approximately five thousand units per year, which is roughly the same
       production volume as other esteemed sports cars, in particular the Ferrari
       F430 and Porsche 911 Turbo. The DB9, however, is more often compared against
       other competitors in its segment: the Ian Callum designed Jaguar XKR, the 
       Volkswagen-produced Bentley Continental GT, the ten-cylinder powered BMW M6,
       and the AMG variants of the Mercedes-Benz SL. Traditionally being a maker
       of more exclusive automobiles, CEO Dr. Ulrich Bez has stated that production 
       numbers of the DB9 will be slightly higher than previous models.
The DB9 is the first Aston Martin model to be designed and developed on Ford"s 
aluminium VH (vertical/horizontal) platform which also underpins Aston Martin"s
flagship DBS. The body structure is composed of aluminium and composites melded
together by mechanically fixed self-piercing rivets and robotic assisted adhesive
bonding techniques. The innovative bonded aluminium structure possesses more than
double the torsional rigidity of its predecessor"s, despite being 25 percent lighter.
Aston Martin"s engineers designed the quad-cam, 48-valve engine for the V12 Vanquish 
in collaboration with Ford"s Research and Vehicle Technology team (RVT) and were 
able to reduce its weight by 11.8 kg (26 lb) for use in the DB9.
LDESC;
        $urls = <<< URLSS
   <li id="cite_note-0"><span class="mw-cite-backlink"><b><a href="#cite_ref-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.forbesautos.com/reviews/2008/aston_martin/db9_coupe/review.html">"2008 Aston Martin DB9 Reviews"</a>. <i>Forbes Autos</i>. <a rel="nofollow" class="external text" href="http://web.archive.org/web/20080628054119/http://www.forbesautos.com/reviews/2008/aston_martin/db9_coupe/review.html">Archived</a> from the original on 28 June 2008<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.forbesautos.com/reviews/2008/aston_martin/db9_coupe/review.html">http://www.forbesautos.com/reviews/2008/aston_martin/db9_coupe/review.html</a></span><span class="reference-accessdate">. Retrieved 5 July 2008</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2008+Aston+Martin+DB9+Reviews&amp;rft.atitle=Forbes+Autos&amp;rft_id=http%3A%2F%2Fwww.forbesautos.com%2Freviews%2F2008%2Faston_martin%2Fdb9_coupe%2Freview.html&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_DB9"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-1"><span class="mw-cite-backlink"><b><a href="#cite_ref-1">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.cargurus.com/Cars/Overview-d908-Aston-Martin-DB9.html">"Aston Martin DB9 Overview"</a>. <i>Car Gurus</i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.cargurus.com/Cars/Overview-d908-Aston-Martin-DB9.html">http://www.cargurus.com/Cars/Overview-d908-Aston-Martin-DB9.html</a></span><span class="reference-accessdate">. Retrieved 5 July 2008</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Aston+Martin+DB9+Overview&amp;rft.atitle=Car+Gurus&amp;rft_id=http%3A%2F%2Fwww.cargurus.com%2FCars%2FOverview-d908-Aston-Martin-DB9.html&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_DB9"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.insideline.com/aston-martin/inside-line-qa-aston-martins-dr-ulrich-bez.html">"Inside Line Q&amp;A: Aston Martin"s Dr. Ulrich Bez"</a>. <i>Edmunds: Inside Line</i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.insideline.com/aston-martin/inside-line-qa-aston-martins-dr-ulrich-bez.html">http://www.insideline.com/aston-martin/inside-line-qa-aston-martins-dr-ulrich-bez.html</a></span><span class="reference-accessdate">. Retrieved 26 October 2009</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Inside+Line+Q%26A%3A+Aston+Martin%27s+Dr.+Ulrich+Bez&amp;rft.atitle=Edmunds%3A+Inside+Line&amp;rft_id=http%3A%2F%2Fwww.insideline.com%2Faston-martin%2Finside-line-qa-aston-martins-dr-ulrich-bez.html&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_DB9"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-supercars.net-3"><span class="mw-cite-backlink">^ <a href="#cite_ref-supercars.net_3-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-supercars.net_3-1"><sup><i><b>b</b></i></sup></a> <a href="#cite_ref-supercars.net_3-2"><sup><i><b>c</b></i></sup></a></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.supercars.net/cars/2424.html">"2004 Aston Martin DB9"</a>. <i>Supercars.net</i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.supercars.net/cars/2424.html">http://www.supercars.net/cars/2424.html</a></span><span class="reference-accessdate">. Retrieved 26 October 2009</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2004+Aston+Martin+DB9&amp;rft.atitle=Supercars.net&amp;rft_id=http%3A%2F%2Fwww.supercars.net%2Fcars%2F2424.html&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_DB9"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-official-spec-4"><span class="mw-cite-backlink">^ <a href="#cite_ref-official-spec_4-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-official-spec_4-1"><sup><i><b>b</b></i></sup></a> <a href="#cite_ref-official-spec_4-2"><sup><i><b>c</b></i></sup></a> <a href="#cite_ref-official-spec_4-3"><sup><i><b>d</b></i></sup></a> <a href="#cite_ref-official-spec_4-4"><sup><i><b>e</b></i></sup></a> <a href="#cite_ref-official-spec_4-5"><sup><i><b>f</b></i></sup></a></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.astonmartin.com/cars/db9-coupe/specs">"Aston Martin – The Cars – DB9 – Specification (official site)"</a><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.astonmartin.com/cars/db9-coupe/specs">http://www.astonmartin.com/cars/db9-coupe/specs</a></span><span class="reference-accessdate">. Retrieved 14 May 2011</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Aston+Martin+%E2%80%93+The+Cars+%E2%80%93+DB9+%E2%80%93+Specification+%28official+site%29&amp;rft.atitle=&amp;rft_id=http%3A%2F%2Fwww.astonmartin.com%2Fcars%2Fdb9-coupe%2Fspecs&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_DB9"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-carautoportal-5"><span class="mw-cite-backlink"><b><a href="#cite_ref-carautoportal_5-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.carautoportal.com/aston-martin/aston-martin-db9.php">"Aston DB9 Reference"</a>. <i>carautoportal.com</i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.carautoportal.com/aston-martin/aston-martin-db9.php">http://www.carautoportal.com/aston-martin/aston-martin-db9.php</a></span><span class="reference-accessdate">. Retrieved 17 June 2009</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Aston+DB9+Reference&amp;rft.atitle=carautoportal.com&amp;rft_id=http%3A%2F%2Fwww.carautoportal.com%2Faston-martin%2Faston-martin-db9.php&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_DB9"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-6"><span class="mw-cite-backlink"><b><a href="#cite_ref-6">^</a></b></span> <span class="reference-text"><span class="citation web">Friday, 7 September 2007 (7 September 2007). <a rel="nofollow" class="external text" href="http://autocar.co.uk/News/NewsArticle/AllCars/227685/">"Two more Astons for Frankfurt show"</a>. Autocar.co.uk<span class="printonly">. <a rel="nofollow" class="external free" href="http://autocar.co.uk/News/NewsArticle/AllCars/227685/">http://autocar.co.uk/News/NewsArticle/AllCars/227685/</a></span><span class="reference-accessdate">. Retrieved 30 September 2010</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Two+more+Astons+for+Frankfurt+show&amp;rft.atitle=&amp;rft.aulast=Friday%2C+7+September+2007&amp;rft.au=Friday%2C+7+September+2007&amp;rft.date=7+September+2007&amp;rft.pub=Autocar.co.uk&amp;rft_id=http%3A%2F%2Fautocar.co.uk%2FNews%2FNewsArticle%2FAllCars%2F227685%2F&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_DB9"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-7"><span class="mw-cite-backlink"><b><a href="#cite_ref-7">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.automoblog.net/2010/07/01/a-dapper-new-aston-martin-db9/">"A Dapper, New Aston Martin DB9"</a>. Automoblog.net<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.automoblog.net/2010/07/01/a-dapper-new-aston-martin-db9/">http://www.automoblog.net/2010/07/01/a-dapper-new-aston-martin-db9/</a></span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=A+Dapper%2C+New+Aston+Martin+DB9&amp;rft.atitle=&amp;rft.pub=Automoblog.net&amp;rft_id=http%3A%2F%2Fwww.automoblog.net%2F2010%2F07%2F01%2Fa-dapper-new-aston-martin-db9%2F&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_DB9"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-8"><span class="mw-cite-backlink"><b><a href="#cite_ref-8">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external text" href="http://www.pistonheads.com/doc.asp?c=129&amp;i=9403">Aston Returns to Le Mans</a>, advance news article about DBR9 racing (viewed 18 June 2006)</span></li>
<li id="cite_note-9"><span class="mw-cite-backlink"><b><a href="#cite_ref-9">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external text" href="http://www.astonmartinracing.com/ENG/results">Aston Martin Racing Results</a> (viewed 18 June 2006)</span></li>
<li id="cite_note-10"><span class="mw-cite-backlink"><b><a href="#cite_ref-10">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.seriouswheels.com/cars/top-2007-Aston-Martin-DBR9-Le-Mans-Winner.htm">"2007 Aston Martin DBR9 Le Mans Winner"</a>. Seriouswheels.com<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.seriouswheels.com/cars/top-2007-Aston-Martin-DBR9-Le-Mans-Winner.htm">http://www.seriouswheels.com/cars/top-2007-Aston-Martin-DBR9-Le-Mans-Winner.htm</a></span><span class="reference-accessdate">. Retrieved 30 September 2010</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2007+Aston+Martin+DBR9+Le+Mans+Winner&amp;rft.atitle=&amp;rft.pub=Seriouswheels.com&amp;rft_id=http%3A%2F%2Fwww.seriouswheels.com%2Fcars%2Ftop-2007-Aston-Martin-DBR9-Le-Mans-Winner.htm&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_DB9"><span style="display: none;">&#160;</span></span></span></li>
URLSS;
        $car->setShortDescription($sDesc);
        $car->setLongDescription($lDesc);
        $car->setUrls($urls);
        $car->setVendor($manager->merge($this->getReference("am_vnd")));
        $manager->persist($car);
        $manager->flush();
    }
    
    public function getOrder() {
        return 50;
    }
}

?>
