<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarBMWZ4Roadster extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName('BMW Z4 Roadster');
        $car->setPrice('100000');
        $car->setImage("/bundles/trigsimpleshop/img/bmw/minimized/mnmz_z4roadster.jpg");
        $lDesc = <<< LDESC
   The Z4 used lightweight materials to offset the increased weight over the smaller Z3, such as aluminum hood and suspension components, magnesium roof frame. Run flat tires removed the need for a spare tire, which in addition to saving weight, allowed for a larger boot.
Advanced aerodynamics yield a drag coefficient of 0.35 and a relatively calm passenger compartment when the top is down.
The 6-cylinder engines included all alloy construction, double VANOS variable valve timing and streamlined intake and exhaust manifolds, throttle by wire. Safety technology included four-wheel disc brakes and electronic stability control, incorporating ABS and traction control. The electric power steering was speed-sensitive, allowing for easier maneuvering at low speeds.
A "Sport Package" added stiffer and lower suspension, larger wheels, and sport tuned electronic steering, throttle and shift parameters.
The SMG transmission was offered in addition to the usual manual and automatic.
Production of a cheaper 2.2-litre model began in October 2003, priced from £18,500 in UK. It weighs 35 kg (77 lb) less than the 3.0L version, but is still heavier than the 2.5L Z3's weight of 1,315 kg (2,900 lb). A 2.0L 4-cylinder engine for the European market was introduced in May 2005.
LDESC;
        $sDesc = <<< SDESC
   The BMW Z4 is a rear-wheel drive sports car by the German car maker BMW. It follows a line of past BMW roadsters such as the BMW Z1, BMW 507, BMW Z8, and the BMW Z3. The Z4 replaces the Z3. First generation production started in 2002 at BMW USA's Greer, South Carolina plant, with production of both roadster and coupe forms. When debuted, it won Automobile Magazine "Design of the Year Award". Starting with the 2009 model year, the second-generation Z4 is built at BMW's Regensburg, Germany plant as a retractable hardtop roadster. In 2009, the BMW Z4 won the Red Dot Design Award.
SDESC;
        $urls = <<< URLS
  <li id="cite_note-0"><span class="mw-cite-backlink"><b><a href="#cite_ref-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.autofieldguide.com/articles/120201.html">"Design to Reality: the Z4 Roadster"</a>. AutoFieldGuide<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.autofieldguide.com/articles/120201.html">http://www.autofieldguide.com/articles/120201.html</a></span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Design+to+Reality%3A+the+Z4+Roadster&amp;rft.atitle=&amp;rft.pub=AutoFieldGuide&amp;rft_id=http%3A%2F%2Fwww.autofieldguide.com%2Farticles%2F120201.html&amp;rfr_id=info:sid/en.wikipedia.org:BMW_Z4_(E85)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-1"><span class="mw-cite-backlink"><b><a href="#cite_ref-1">^</a></b></span> <span class="reference-text"><span class="citation news">Vasilash, Gary S. (2002). <a rel="nofollow" class="external text" href="http://findarticles.com/p/articles/mi_m0KJI/is_/ai_95526319">"Design to Reality: the Z4 roadster"</a>. Automotive Design and Production<span class="printonly">. <a rel="nofollow" class="external free" href="http://findarticles.com/p/articles/mi_m0KJI/is_/ai_95526319">http://findarticles.com/p/articles/mi_m0KJI/is_/ai_95526319</a></span><span class="reference-accessdate">. Retrieved 2002-12</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Design+to+Reality%3A+the+Z4+roadster&amp;rft.atitle=&amp;rft.aulast=Vasilash&amp;rft.aufirst=Gary+S.&amp;rft.au=Vasilash%2C%26%2332%3BGary+S.&amp;rft.date=2002&amp;rft.pub=Automotive+Design+and+Production&amp;rft_id=http%3A%2F%2Ffindarticles.com%2Fp%2Farticles%2Fmi_m0KJI%2Fis_%2Fai_95526319&amp;rfr_id=info:sid/en.wikipedia.org:BMW_Z4_(E85)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.businessweek.com/magazine/content/06_42/b4005076.htm">"An Interview with BMW's chief designer"</a>. BusinessWeek<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.businessweek.com/magazine/content/06_42/b4005076.htm">http://www.businessweek.com/magazine/content/06_42/b4005076.htm</a></span><span class="reference-accessdate">. Retrieved 2006-10-16</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=An+Interview+with+BMW%27s+chief+designer&amp;rft.atitle=&amp;rft.pub=BusinessWeek&amp;rft_id=http%3A%2F%2Fwww.businessweek.com%2Fmagazine%2Fcontent%2F06_42%2Fb4005076.htm&amp;rfr_id=info:sid/en.wikipedia.org:BMW_Z4_(E85)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-3"><span class="mw-cite-backlink"><b><a href="#cite_ref-3">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.jbcarpages.com/bmw/z4/2008/specs2/">"2008 BMW Z4 &amp; M Coupe Specs"</a>. JB car pages<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.jbcarpages.com/bmw/z4/2008/specs2/">http://www.jbcarpages.com/bmw/z4/2008/specs2/</a></span><span class="reference-accessdate">. Retrieved 2008-12-22</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2008+BMW+Z4+%26+M+Coupe+Specs&amp;rft.atitle=&amp;rft.pub=JB+car+pages&amp;rft_id=http%3A%2F%2Fwww.jbcarpages.com%2Fbmw%2Fz4%2F2008%2Fspecs2%2F&amp;rfr_id=info:sid/en.wikipedia.org:BMW_Z4_(E85)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-2008roadster-4"><span class="mw-cite-backlink"><b><a href="#cite_ref-2008roadster_4-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.jbcarpages.com/bmw/z4/2008/specs/">"2008 BMW Z4 &amp; M Roadster Specs"</a>. JB car pages<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.jbcarpages.com/bmw/z4/2008/specs/">http://www.jbcarpages.com/bmw/z4/2008/specs/</a></span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2008+BMW+Z4+%26+M+Roadster+Specs&amp;rft.atitle=&amp;rft.pub=JB+car+pages&amp;rft_id=http%3A%2F%2Fwww.jbcarpages.com%2Fbmw%2Fz4%2F2008%2Fspecs%2F&amp;rfr_id=info:sid/en.wikipedia.org:BMW_Z4_(E85)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-5"><span class="mw-cite-backlink"><b><a href="#cite_ref-5">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.pistonheads.com/doc.asp?c=100&amp;i=15562/">"BMW Z4 &amp; M Coupé"</a>. Pistonheads pages<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.pistonheads.com/doc.asp?c=100&amp;i=15562/">http://www.pistonheads.com/doc.asp?c=100&amp;i=15562/</a></span><span class="reference-accessdate">. Retrieved 2011-07-27</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=BMW+Z4+%26+M+Coup%C3%A9&amp;rft.atitle=&amp;rft.pub=Pistonheads+pages&amp;rft_id=http%3A%2F%2Fwww.pistonheads.com%2Fdoc.asp%3Fc%3D100%26i%3D15562%2F&amp;rfr_id=info:sid/en.wikipedia.org:BMW_Z4_(E85)"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-6"><span class="mw-cite-backlink"><b><a href="#cite_ref-6">^</a></b></span> <span class="reference-text">Source - BMW Car magazine, Nov. 2008 issue, pp 9.</span></li>
<li id="cite_note-US:_BMW_ends_Z4_production-7"><span class="mw-cite-backlink">^ <a href="#cite_ref-US:_BMW_ends_Z4_production_7-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-US:_BMW_ends_Z4_production_7-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.automotiveworld.com/news/manufacturing/70629-us-bmw-ends-z4-production">"US: BMW ends Z4 production"</a>. AutomotiveWorld<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.automotiveworld.com/news/manufacturing/70629-us-bmw-ends-z4-production">http://www.automotiveworld.com/news/manufacturing/70629-us-bmw-ends-z4-production</a></span><span class="reference-accessdate">. Retrieved 2008-09-03</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=US%3A+BMW+ends+Z4+production&amp;rft.atitle=&amp;rft.pub=AutomotiveWorld&amp;rft_id=http%3A%2F%2Fwww.automotiveworld.com%2Fnews%2Fmanufacturing%2F70629-us-bmw-ends-z4-production&amp;rfr_id=info:sid/en.wikipedia.org:BMW_Z4_(E85)"><span style="display: none;">&#160;</span></span></span></li> 
URLS;
        $car->setLongDescription($lDesc);
        $car->setShortDescription($sDesc);
        $car->setUrls($urls);
        $car->setVendor($manager->merge($this->getReference('bmw_vnd')));
        $manager->persist($car);
        $manager->flush();
    }
    
    public function getOrder() {
        return 69;
    }
}

?>
