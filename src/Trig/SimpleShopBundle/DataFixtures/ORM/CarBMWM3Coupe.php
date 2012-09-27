<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarBMWM3Coupe extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName('BMW M3 coupe');
        $car->setPrice('45000');
        $car->setImage("/bundles/trigsimpleshop/img/bmw/minimized/mnmz_m3coupe.jpg");
        $lDesc = <<< LDESC
   The M3s were entered by BMW as well as private racing teams and its wins included the Deutsche Tourenwagen Meisterschaft, British Touring Car Championship European Touring Car Championship, Australian Touring Car Championship, as well as the one-off World Touring Car Championship title in 1987. The E30 M3 is also a multiple winner of Guia Race, 24 Hours Nürburgring and Spa 24 Hours.
The M3 also saw service as a rally car, Prodrive-prepared examples contesting several national championships and selected rounds of the World Rally Championship between 1987 and 1989. By the latter year, the cars, based on the standard M3, were equipped with six-speed gearboxes and produced 295 bhp. The M3 was not competitive with the four-wheel-drive cars on loose surfaces, but a very effective car on asphalt. Its most notable success was victory on the Tour de Corse in 1987, driven by Bernard Beguin.
LDESC;
        $sDesc = <<< SDESC
   The BMW M3 is a high-performance version of the BMW 3-Series, developed by BMW's in-house motorsport division, BMW M. M3 models have been derived from the E30, E36, E46 and E90/E92/E93 3-series, and sold with coupé, saloon and convertible body styles. Upgrades over the "standard" 3-Series automobiles include more powerful and responsive engines, improved handling/suspension/braking systems, aerodynamic body enhancements, and interior/exterior accents with the tri-colour "M" (Motorsport) emblem. Over the years the M3 and M5 have become the benchmark vehicle against which most sport sedans in its class are compared despite fierce competition from Mercedes-AMG and Audi quattro GmbH.
SDESC;
        $urls = <<< URLS
   <li id="cite_note-0"><span class="mw-cite-backlink"><b><a href="#cite_ref-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.worldcarfans.com/10605017186/bmw-m3-celebrating-20-years-of-a-sporting-legend">"BMW M3 Celebrating 20 Years of a Sporting Legend"</a>. <a rel="nofollow" class="external free" href="http://www.worldcarfans.com.+2-27-2008">http://www.worldcarfans.com.+2-27-2008</a><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.worldcarfans.com/10605017186/bmw-m3-celebrating-20-years-of-a-sporting-legend">http://www.worldcarfans.com/10605017186/bmw-m3-celebrating-20-years-of-a-sporting-legend</a></span><span class="reference-accessdate">. Retrieved 2-27-2012</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=BMW+M3+Celebrating+20+Years+of+a+Sporting+Legend&amp;rft.atitle=&amp;rft.date=2-27-2008&amp;rft.pub=http%3A%2F%2Fwww.worldcarfans.com&amp;rft_id=http%3A%2F%2Fwww.worldcarfans.com%2F10605017186%2Fbmw-m3-celebrating-20-years-of-a-sporting-legend&amp;rfr_id=info:sid/en.wikipedia.org:BMW_M3"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-1"><span class="mw-cite-backlink"><b><a href="#cite_ref-1">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.clubsportiva.com/blog/bmw-m3-the-evolution-of-the-benchmark/">"BMW M3 – The Evolution of the Benchmark"</a>. clubsportiva.com. 2-27-2012<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.clubsportiva.com/blog/bmw-m3-the-evolution-of-the-benchmark/">http://www.clubsportiva.com/blog/bmw-m3-the-evolution-of-the-benchmark/</a></span><span class="reference-accessdate">. Retrieved 08-04-2011</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=BMW+M3+%E2%80%93+The+Evolution+of+the+Benchmark&amp;rft.atitle=&amp;rft.date=2-27-2012&amp;rft.pub=clubsportiva.com&amp;rft_id=http%3A%2F%2Fwww.clubsportiva.com%2Fblog%2Fbmw-m3-the-evolution-of-the-benchmark%2F&amp;rfr_id=info:sid/en.wikipedia.org:BMW_M3"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2">^</a></b></span> <span class="reference-text">Walton, Jeremy. <i>BMW 3-Series Enthusiast's Companion</i>. Bentley Publishers, 2001, pp. 121–123, <a href="/wiki/Special:BookSources/0837602203" class="internal mw-magiclink-isbn">ISBN 0-8376-0220-3</a></span></li>
<li id="cite_note-Kittler_2001_130-3"><span class="mw-cite-backlink">^ <a href="#cite_ref-Kittler_2001_130_3-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-Kittler_2001_130_3-1"><sup><i><b>b</b></i></sup></a> <a href="#cite_ref-Kittler_2001_130_3-2"><sup><i><b>c</b></i></sup></a> <a href="#cite_ref-Kittler_2001_130_3-3"><sup><i><b>d</b></i></sup></a> <a href="#cite_ref-Kittler_2001_130_3-4"><sup><i><b>e</b></i></sup></a> <a href="#cite_ref-Kittler_2001_130_3-5"><sup><i><b>f</b></i></sup></a></span> <span class="reference-text"><span class="citation book">Kittler, Eberhard (2001). <i>Deutsche Autos seit 1990, vol.5</i>. Stuttgart: Motorbuch. p.&#160;130. <a href="/wiki/International_Standard_Book_Number" title="International Standard Book Number">ISBN</a>&#160;<a href="/wiki/Special:BookSources/3-613-02128-5" title="Special:BookSources/3-613-02128-5">3-613-02128-5</a>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Deutsche+Autos+seit+1990%2C+vol.5&amp;rft.aulast=Kittler&amp;rft.aufirst=Eberhard&amp;rft.au=Kittler%2C%26%2332%3BEberhard&amp;rft.date=2001&amp;rft.pages=p.%26nbsp%3B130&amp;rft.place=Stuttgart&amp;rft.pub=Motorbuch&amp;rft.isbn=3-613-02128-5&amp;rfr_id=info:sid/en.wikipedia.org:BMW_M3"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-4"><span class="mw-cite-backlink"><b><a href="#cite_ref-4">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.bmwmregistry.com/model_faq.php?id=15#2">"FAQ E36 M3 3.2"</a>. BMW M Registry<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.bmwmregistry.com/model_faq.php?id=15#2">http://www.bmwmregistry.com/model_faq.php?id=15#2</a></span><span class="reference-accessdate">. Retrieved 2010-06-20</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=FAQ+E36+M3+3.2&amp;rft.atitle=&amp;rft.pub=BMW+M+Registry&amp;rft_id=http%3A%2F%2Fwww.bmwmregistry.com%2Fmodel_faq.php%3Fid%3D15%232&amp;rfr_id=info:sid/en.wikipedia.org:BMW_M3"><span style="display: none;">&#160;</span></span></span></li>
URLS;
        $car->setLongDescription($lDesc);
        $car->setShortDescription($sDesc);
        $car->setUrls($urls);
        $car->setVendor($manager->merge($this->getReference('bmw_vnd')));
        $manager->persist($car);
        $manager->flush();
    }
    
    public function getOrder() {
        return 67;
    }
}

?>
