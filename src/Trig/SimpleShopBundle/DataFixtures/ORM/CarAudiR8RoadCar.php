<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarAudiR8RoadCar extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName('Audi R8 (road car)');
        $car->setPrice('90000');
        $car->setImage("/bundles/trigsimpleshop/img/audi/minimized/mnmz_audi-r8.jpg");
        $lDesc = <<< LDESC
   The Audi R8 was initially equipped with a 4.2 litre V8 engine. Specifically, it is an all-aluminium alloy 32-valve (four valves per cylinder) petrol engine,[4] utilising Fuel Stratified Injection (FSI),[4] and has a displacement of 4,163 cubic centimetres (254.0 cu in).[4] It develops a motive power output of 420 metric horsepower (309 kW; 414 bhp) (Directive 80/1269/EEC),[4] and generates 430 newton metres (317 lbf·ft) of torque,[4] on 98 RON 'Super Unleaded' petrol. It is basically the same engine used in the Audi B7 RS4, but is modified to use dry sump lubrication system. This V8 is a highly reworked, high-revving variant of the existing 4.2 litre V8, but includes cylinder-direct fuel injection (Fuel Stratified Injection), and four valves per cylinder, instead of five (as used on the previous non-FSI variants). It also uses two chain-driven double overhead camshafts (DOHC) per cylinder bank, and utilises variable valve timing for both inlet and exhaust camshafts. The 4 wheel drive system is biased towards the rear; it only sends 30% of its power to the front wheels and the other 70% to the rear.
The transmission options are either a Lamborghini sourced six-speed manual gearbox with metal gate for the shift lever, or an Audi-developed R tronic[4] gearbox—which is a semi-automatic, without a traditional clutch pedal with automatic gears shifting mode.[7][19] These options are the same as those available on the Lamborghini Gallardo. A double clutch direct-shift gearbox (DSG), now badged by Audi as S tronic, is not available (as of April 2010).
LDESC;
        $sDesc = <<< SDESC
   The Audi R8 (Typ 42) is a mid-engine, 2-seater sports car, which uses Audi's trademark quattro permanent all-wheel drive system. It was introduced by the German automaker Audi AG in 2006.
The car was exclusively designed, developed, and manufactured by Audi AG's high performance private subsidiary company, quattro GmbH, and is based on the Lamborghini Gallardo platform. The fundamental construction of the R8 is based on the Audi Space Frame, and uses an aluminium monocoque which is built around space frame principles. The car is built by quattro GmbH in a newly renovated factory at Audi's 'aluminium site' at Neckarsulm in Germany.
SDESC;
        $urls = <<< URLS
   <li id="cite_note-0"><span class="mw-cite-backlink"><b><a href="#cite_ref-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.audi.com/com/brand/en/company/investor_relations/for_investors/participations/quattro_gmbh.html">"More individuality – quattro GmbH"</a>. Audi. <a rel="nofollow" class="external text" href="http://web.archive.org/web/20110724131809/http://www.audi.com/com/brand/en/company/investor_relations/for_investors/participations/quattro_gmbh.html">Archived</a> from the original on 24 July 2011<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.audi.com/com/brand/en/company/investor_relations/for_investors/participations/quattro_gmbh.html">http://www.audi.com/com/brand/en/company/investor_relations/for_investors/participations/quattro_gmbh.html</a></span><span class="reference-accessdate">. Retrieved 24 July 2011</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=More+individuality+%E2%80%93+quattro+GmbH&amp;rft.atitle=&amp;rft.pub=Audi&amp;rft_id=http%3A%2F%2Fwww.audi.com%2Fcom%2Fbrand%2Fen%2Fcompany%2Finvestor_relations%2Ffor_investors%2Fparticipations%2Fquattro_gmbh.html&amp;rfr_id=info:sid/en.wikipedia.org:Audi_R8_(road_car)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-1"><span class="mw-cite-backlink"><b><a href="#cite_ref-1">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.audi.de/etc/medialib/cms4imp/audi2/company/financial_information/pdf_0803.Par.0017.File.pdf">"Financial Information"</a> (in German) (PDF). <i>audi.de</i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.audi.de/etc/medialib/cms4imp/audi2/company/financial_information/pdf_0803.Par.0017.File.pdf">http://www.audi.de/etc/medialib/cms4imp/audi2/company/financial_information/pdf_0803.Par.0017.File.pdf</a></span><span class="reference-accessdate">. Retrieved 2007-12-31</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Financial+Information&amp;rft.atitle=audi.de&amp;rft_id=http%3A%2F%2Fwww.audi.de%2Fetc%2Fmedialib%2Fcms4imp%2Faudi2%2Fcompany%2Ffinancial_information%2Fpdf_0803.Par.0017.File.pdf&amp;rfr_id=info:sid/en.wikipedia.org:Audi_R8_(road_car)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external autonumber" href="http://www.audi.de/etc/medialib/ngw/company/investor_relations/pdf/finanzberichte/geschaeftsbericht.Par.0007.File.pdf/audi_gb_2008_de_finanz.pdf">[1]</a></span></li>
<li id="cite_note-R8_brochure-3"><span class="mw-cite-backlink">^ <a href="#cite_ref-R8_brochure_3-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-1"><sup><i><b>b</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-2"><sup><i><b>c</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-3"><sup><i><b>d</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-4"><sup><i><b>e</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-5"><sup><i><b>f</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-6"><sup><i><b>g</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-7"><sup><i><b>h</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-8"><sup><i><b>i</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-9"><sup><i><b>j</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-10"><sup><i><b>k</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-11"><sup><i><b>l</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-12"><sup><i><b>m</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-13"><sup><i><b>n</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-14"><sup><i><b>o</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-15"><sup><i><b>p</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-16"><sup><i><b>q</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-17"><sup><i><b>r</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-18"><sup><i><b>s</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-19"><sup><i><b>t</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-20"><sup><i><b>u</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-21"><sup><i><b>v</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-22"><sup><i><b>w</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-23"><sup><i><b>x</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-24"><sup><i><b>y</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-25"><sup><i><b>z</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-26"><sup><i><b>aa</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-27"><sup><i><b>ab</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-28"><sup><i><b>ac</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-29"><sup><i><b>ad</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-30"><sup><i><b>ae</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-31"><sup><i><b>af</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-32"><sup><i><b>ag</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-33"><sup><i><b>ah</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-34"><sup><i><b>ai</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-35"><sup><i><b>aj</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-36"><sup><i><b>ak</b></i></sup></a> <a href="#cite_ref-R8_brochure_3-37"><sup><i><b>al</b></i></sup></a></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.audi.co.uk/content/dam/audi/production/PDF/PriceAndSpecGuides/r8.pdf">"The Audi R8 Coupé and Spyder – Pricing and Specification guide – valid from January 2010"</a> (PDF). Audi UK. January 2010<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.audi.co.uk/content/dam/audi/production/PDF/PriceAndSpecGuides/r8.pdf">http://www.audi.co.uk/content/dam/audi/production/PDF/PriceAndSpecGuides/r8.pdf</a></span><span class="reference-accessdate">. Retrieved 12 February 2010</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=The+Audi+R8+Coup%C3%A9+and+Spyder+%E2%80%93+Pricing+and+Specification+guide+%E2%80%93+valid+from+January+2010&amp;rft.atitle=&amp;rft.date=January+2010&amp;rft.pub=Audi+UK&amp;rft_id=http%3A%2F%2Fwww.audi.co.uk%2Fcontent%2Fdam%2Faudi%2Fproduction%2FPDF%2FPriceAndSpecGuides%2Fr8.pdf&amp;rfr_id=info:sid/en.wikipedia.org:Audi_R8_(road_car)"><span style="display: none;">&#160;</span></span></span></li>
URLS;
        $car->setLongDescription($lDesc);
        $car->setShortDescription($sDesc);
        $car->setUrls($urls);
        $car->setVendor($manager->merge($this->getReference('audi_vnd')));
        $manager->persist($car);
        $manager->flush();
    }
    
    public function getOrder() {
        return 63;
    }
}

?>
