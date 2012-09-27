<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarAudiQ7branco extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName('Audi Q7 branco');
        $car->setPrice('80000');
        $car->setImage("/bundles/trigsimpleshop/img/audi/minimized/mnmz_audi-q7-v12-tdi.jpg");
        $lDesc = <<< LDESC
   The Q7 (internally designated Typ 4L) utilizes a modified version of the Volkswagen Group PL71 platform. Previewed by the Audi Pikes Peak quattro concept car, the Q7 is designed more for on-road use, and was not meant for serious off-road use where a transfer case is needed. In an off road test through the Australian outback it fared well for a "soft roader",[citation needed].[3] Although it lacks a low-range transfer case, it has quattro permanent four wheel drive system with a central differential lock, and an adjustable-height air suspension which helps in off road situations.
LDESC;
        $sDesc = <<< SDESC
 The Audi Q7 is a full-size luxury crossover SUV unveiled in September 2005 at the Frankfurt Motor Show. Production of the Q7 began in autumn of 2005 in Bratislava, Slovakia.[2] It is the first SUV offering from Audi and went on sale in 2007. Later, Audi's second SUV, the Q5, was unveiled as a 2009 model. Audi has since unveiled a third SUV model, the Q3, going on sale in the 3rd quarter of 2011.  
SDESC;
        $urls = <<< URLS
   <li id="cite_note-0"><span class="mw-cite-backlink"><b><a href="#cite_ref-0">^</a></b></span> <span class="reference-text"><span class="citation web">Christian Steinert, The German Car Blog (2006-08-22). <a rel="nofollow" class="external text" href="http://www.germancarblog.com/2006/08/audi-new-sales-division-in-china.html">"Audi: New sales division in China"</a>. The German Car Blog<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.germancarblog.com/2006/08/audi-new-sales-division-in-china.html">http://www.germancarblog.com/2006/08/audi-new-sales-division-in-china.html</a></span><span class="reference-accessdate">. Retrieved 2010-11-01</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Audi%3A+New+sales+division+in+China&amp;rft.atitle=&amp;rft.aulast=Christian+Steinert%2C+The+German+Car+Blog&amp;rft.au=Christian+Steinert%2C+The+German+Car+Blog&amp;rft.date=2006-08-22&amp;rft.pub=The+German+Car+Blog&amp;rft_id=http%3A%2F%2Fwww.germancarblog.com%2F2006%2F08%2Faudi-new-sales-division-in-china.html&amp;rfr_id=info:sid/en.wikipedia.org:Audi_Q7"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-worldcarfans.com-1"><span class="mw-cite-backlink"><b><a href="#cite_ref-worldcarfans.com_1-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.worldcarfans.com/10603277456/audi-q7-production-in-full-swing">"Audi Production in Ultramodern Bratislava Plant"</a>. <i>worldcarfans.com</i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.worldcarfans.com/10603277456/audi-q7-production-in-full-swing">http://www.worldcarfans.com/10603277456/audi-q7-production-in-full-swing</a></span><span class="reference-accessdate">. Retrieved 2010-06-17</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Audi+Production+in+Ultramodern+Bratislava+Plant&amp;rft.atitle=worldcarfans.com&amp;rft_id=http%3A%2F%2Fwww.worldcarfans.com%2F10603277456%2Faudi-q7-production-in-full-swing&amp;rfr_id=info:sid/en.wikipedia.org:Audi_Q7"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external text" href="http://www.timesonline.co.uk/tol/driving/article687697.ece">Times Online</a><sup class="noprint Inline-Template"><span title="&#160;since June 2011" style="white-space: nowrap;">[<i><a href="/wiki/Wikipedia:Link_rot" title="Wikipedia:Link rot">dead link</a></i>]</span></sup></span></li>
<li id="cite_note-3"><span class="mw-cite-backlink"><b><a href="#cite_ref-3">^</a></b></span> <span class="reference-text">Audi.de as of June, 2011</span></li>
<li id="cite_note-carautoportal-4"><span class="mw-cite-backlink"><b><a href="#cite_ref-carautoportal_4-0">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.carautoportal.com/audi/audi-q7.php">"Audi A7 Reference"</a>. <i>carautoportal.com</i><span class="printonly">. <a rel="nofollow" class="external free" href="http://www.carautoportal.com/audi/audi-q7.php">http://www.carautoportal.com/audi/audi-q7.php</a></span><span class="reference-accessdate">. Retrieved 2009-06-26</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Audi+A7+Reference&amp;rft.atitle=carautoportal.com&amp;rft_id=http%3A%2F%2Fwww.carautoportal.com%2Faudi%2Faudi-q7.php&amp;rfr_id=info:sid/en.wikipedia.org:Audi_Q7"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-5"><span class="mw-cite-backlink"><b><a href="#cite_ref-5">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.iihs.org/ratings/rating.aspx?id=1007">"IIHS-HLDI: Audi Q7"</a>. Iihs.org. 2008-11-25<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.iihs.org/ratings/rating.aspx?id=1007">http://www.iihs.org/ratings/rating.aspx?id=1007</a></span><span class="reference-accessdate">. Retrieved 2009-09-06</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=IIHS-HLDI%3A+Audi+Q7&amp;rft.atitle=&amp;rft.date=2008-11-25&amp;rft.pub=Iihs.org&amp;rft_id=http%3A%2F%2Fwww.iihs.org%2Fratings%2Frating.aspx%3Fid%3D1007&amp;rfr_id=info:sid/en.wikipedia.org:Audi_Q7"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-6"><span class="mw-cite-backlink"><b><a href="#cite_ref-6">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.audiworld.com/news/06/010406/content.shtml">"2007 Audi Q7 4.2 quattro Featuring Uncompromised SUV Performance, Luxury and Technology Priced at $49,900"</a>. Audiworld.com. 2006-01-04<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.audiworld.com/news/06/010406/content.shtml">http://www.audiworld.com/news/06/010406/content.shtml</a></span><span class="reference-accessdate">. Retrieved 2010-10-17</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2007+Audi+Q7+4.2+quattro+Featuring+Uncompromised+SUV+Performance%2C+Luxury+and+Technology+Priced+at+%2449%2C900&amp;rft.atitle=&amp;rft.date=2006-01-04&amp;rft.pub=Audiworld.com&amp;rft_id=http%3A%2F%2Fwww.audiworld.com%2Fnews%2F06%2F010406%2Fcontent.shtml&amp;rfr_id=info:sid/en.wikipedia.org:Audi_Q7"><span style="display: none;">&#160;</span></span></span></li>
URLS;
        $car->setLongDescription($lDesc);
        $car->setShortDescription($sDesc);
        $car->setUrls($urls);
        $car->setVendor($manager->merge($this->getReference('audi_vnd')));
        $manager->persist($car);
        $manager->flush();
    }
    
    public function getOrder() {
        return 62;
    }
}

?>
