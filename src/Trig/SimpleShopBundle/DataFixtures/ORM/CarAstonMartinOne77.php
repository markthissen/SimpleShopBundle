<?php

namespace Trig\SimpleShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trig\SimpleShopBundle\Entity\Car;

class CarAstonMartinOne77 extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager) {
        $car = new Car();
        $car->setName('Aston Martin One-77');
        $car->setPrice('250000');
        $car->setImage("/bundles/trigsimpleshop/img/am/minimized/mnmz_2009-Aston-Martin-One-77-1.jpg");
        $lDesc = <<< LDESC
Prior to the One-77's Paris Motor Show debut, various details about the car had been leaked, but official specifications were not fully revealed until the 2009 Geneva Motor Show.
The One-77 will feature a full carbon fibre monocoque chassis, a handcrafted aluminium body, and a naturally aspirated 7.3 litre V12 engine with 750 hp (560 kW). Aston Martin claims that this will be the most powerful naturally aspirated production engine in the world when the car is delivered.
The car will also use a strengthened version of the DB9's 6-speed automated manual transmission and height-adjustable pushrod suspension coupled with dynamic stability control. It will feature Pirelli P Zero Corsa tyres (255/35 ZR20 front, 335/30 ZR20 rear) and Carbon Ceramic Matrix brakes.
The top speed was estimated to be 200 mph (320 km/h) but actual tests in December 2009 showed a figure of 220.007 mph (354.067 km/h), with a 0–60 mph time of approximately 3.5 seconds.
The engineering and build source of the carbon chassis and suspension system is contracted to Multimatic of Canada.
The projected weight is 1,500 kg (3,307 lb).   
LDESC;
        $sDesc = <<< SDESC
The Aston Martin One-77 is a two-door coupé built by Aston Martin.
It first appeared at the 2008 Paris Motor Show, although the car remained mostly
covered by a "Savile Row tailored skirt" throughout the show, before being 
fully revealed at the 2009 Geneva Motor Show.There was a limited run of 77 
units (hence the name of the model) as delivery started in October 2010   
SDESC;
        $urls = <<< URLS
<li id="cite_note-edmunds2-0"><span class="mw-cite-backlink">^ <a href="#cite_ref-edmunds2_0-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-edmunds2_0-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.edmunds.com/insideline/autoshows/paris/2008/astonmartinone77.html#astonne772">"Aston Martin One-77 – 2008 Paris Auto Show"</a>. Edmunds.com<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.edmunds.com/insideline/autoshows/paris/2008/astonmartinone77.html#astonne772">http://www.edmunds.com/insideline/autoshows/paris/2008/astonmartinone77.html#astonne772</a></span><span class="reference-accessdate">. Retrieved 18 July 2009</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Aston+Martin+One-77+%E2%80%93+2008+Paris+Auto+Show&amp;rft.atitle=&amp;rft.pub=Edmunds.com&amp;rft_id=http%3A%2F%2Fwww.edmunds.com%2Finsideline%2Fautoshows%2Fparis%2F2008%2Fastonmartinone77.html%23astonne772&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_One-77"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-1"><span class="mw-cite-backlink"><b><a href="#cite_ref-1">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.edmunds.com/insideline/do/News/articleId=130447#2">"2008 Paris Auto Show Preview: Aston Martin One-77"</a>. Edmunds.com. 8 August 2008<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.edmunds.com/insideline/do/News/articleId=130447#2">http://www.edmunds.com/insideline/do/News/articleId=130447#2</a></span><span class="reference-accessdate">. Retrieved 18 July 2009</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2008+Paris+Auto+Show+Preview%3A+Aston+Martin+One-77&amp;rft.atitle=&amp;rft.date=8+August+2008&amp;rft.pub=Edmunds.com&amp;rft_id=http%3A%2F%2Fwww.edmunds.com%2Finsideline%2Fdo%2FNews%2FarticleId%3D130447%232&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_One-77"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.motorauthority.com/news/concept-cars/limited-edition-aston-martin-one-77-preview-leaked/">"Live shots of Aston Martin’s One-77 supercar – [2010 Aston Martin One-77 supercar] – MotorAuthority – Car news, reviews, spy shots"</a>. MotorAuthority<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.motorauthority.com/news/concept-cars/limited-edition-aston-martin-one-77-preview-leaked/">http://www.motorauthority.com/news/concept-cars/limited-edition-aston-martin-one-77-preview-leaked/</a></span><span class="reference-accessdate">. Retrieved 18 July 2009</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Live+shots+of+Aston+Martin%E2%80%99s+One-77+supercar+%E2%80%93+%5B2010+Aston+Martin+One-77+supercar%26%2393%3B+%E2%80%93+MotorAuthority+%E2%80%93+Car+news%2C+reviews%2C+spy+shots&amp;rft.atitle=&amp;rft.pub=MotorAuthority&amp;rft_id=http%3A%2F%2Fwww.motorauthority.com%2Fnews%2Fconcept-cars%2Flimited-edition-aston-martin-one-77-preview-leaked%2F&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_One-77"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-autogenerated1-3"><span class="mw-cite-backlink"><b><a href="#cite_ref-autogenerated1_3-0">^</a></b></span> <span class="reference-text"><a rel="nofollow" class="external text" href="http://925.nl/archief/2008/09/29/925-wereldprimeur-fotos-en-specs-van-aston-martin-project-aston-/">925 wereldprimeur: Foto's en specs van Aston Martin Project Aston One-77</a> (Dutch) <a rel="nofollow" class="external text" href="http://translate.google.com/translate?u=http%3A%2F%2F925.nl%2Farchief%2F2008%2F09%2F29%2F925-wereldprimeur-fotos-en-specs-van-aston-martin-project-aston-&amp;sl=nl&amp;tl=en&amp;hl=en&amp;ie=UTF-8">Google translation</a></span></li>
<li id="cite_note-4"><span class="mw-cite-backlink"><b><a href="#cite_ref-4">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.astonmartin.com/thecompany/news?a=d56b5dd1-8a66-4ef8-b8ff-4e3b1799a45a">"Aston Martin One-77: Featuring the World’s Most Powerful Naturally Aspirated Road Car Engine"</a>. Astonmartin.com. 21 September 2010<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.astonmartin.com/thecompany/news?a=d56b5dd1-8a66-4ef8-b8ff-4e3b1799a45a">http://www.astonmartin.com/thecompany/news?a=d56b5dd1-8a66-4ef8-b8ff-4e3b1799a45a</a></span><span class="reference-accessdate">. Retrieved 20 March 2011</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Aston+Martin+One-77%3A+Featuring+the+World%E2%80%99s+Most+Powerful+Naturally+Aspirated+Road+Car+Engine&amp;rft.atitle=&amp;rft.date=21+September+2010&amp;rft.pub=Astonmartin.com&amp;rft_id=http%3A%2F%2Fwww.astonmartin.com%2Fthecompany%2Fnews%3Fa%3Dd56b5dd1-8a66-4ef8-b8ff-4e3b1799a45a&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_One-77"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-5"><span class="mw-cite-backlink"><b><a href="#cite_ref-5">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.edmunds.com/insideline/autoshows/paris/2008/astonmartinone77detailsleaknews.html">"2008 Paris Auto Show Preview: Aston Martin One-77 Details Leak on the Web"</a>. Edmunds.com. 22 January 2009<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.edmunds.com/insideline/autoshows/paris/2008/astonmartinone77detailsleaknews.html">http://www.edmunds.com/insideline/autoshows/paris/2008/astonmartinone77detailsleaknews.html</a></span><span class="reference-accessdate">. Retrieved 20 March 2011</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=2008+Paris+Auto+Show+Preview%3A+Aston+Martin+One-77+Details+Leak+on+the+Web&amp;rft.atitle=&amp;rft.date=22+January+2009&amp;rft.pub=Edmunds.com&amp;rft_id=http%3A%2F%2Fwww.edmunds.com%2Finsideline%2Fautoshows%2Fparis%2F2008%2Fastonmartinone77detailsleaknews.html&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_One-77"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-6"><span class="mw-cite-backlink"><b><a href="#cite_ref-6">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://www.astonmartin.com/thecompany/news?a=1c7926f7-54c9-44a7-bd09-b720f6b59509">"One-77 closes on new Aston Martin record"</a>. <i>astonmartin.com</i>. Aston Martin. 22 December 2009. <a rel="nofollow" class="external text" href="http://web.archive.org/web/20100130035153/http://www.astonmartin.com/thecompany/news?a=1c7926f7-54c9-44a7-bd09-b720f6b59509">Archived</a> from the original on 30 January 2010<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.astonmartin.com/thecompany/news?a=1c7926f7-54c9-44a7-bd09-b720f6b59509">http://www.astonmartin.com/thecompany/news?a=1c7926f7-54c9-44a7-bd09-b720f6b59509</a></span><span class="reference-accessdate">. Retrieved 18 February 2010</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=One-77+closes+on+new+Aston+Martin+record&amp;rft.atitle=astonmartin.com&amp;rft.date=22+December+2009&amp;rft.pub=Aston+Martin&amp;rft_id=http%3A%2F%2Fwww.astonmartin.com%2Fthecompany%2Fnews%3Fa%3D1c7926f7-54c9-44a7-bd09-b720f6b59509&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_One-77"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-7"><span class="mw-cite-backlink"><b><a href="#cite_ref-7">^</a></b></span> <span class="reference-text"><span class="citation web">Abuelsamid, Sam (3 March 2009). <a rel="nofollow" class="external text" href="http://www.autoblog.com/2009/03/03/geneva-2009-aston-martin-one-77-almost-fully-revealed/">"Geneva 2009: Aston Martin One-77 almost fully revealed"</a>. Autoblog.com<span class="printonly">. <a rel="nofollow" class="external free" href="http://www.autoblog.com/2009/03/03/geneva-2009-aston-martin-one-77-almost-fully-revealed/">http://www.autoblog.com/2009/03/03/geneva-2009-aston-martin-one-77-almost-fully-revealed/</a></span><span class="reference-accessdate">. Retrieved 20 March 2011</span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Geneva+2009%3A+Aston+Martin+One-77+almost+fully+revealed&amp;rft.atitle=&amp;rft.aulast=Abuelsamid&amp;rft.aufirst=Sam&amp;rft.au=Abuelsamid%2C%26%2332%3BSam&amp;rft.date=3+March+2009&amp;rft.pub=Autoblog.com&amp;rft_id=http%3A%2F%2Fwww.autoblog.com%2F2009%2F03%2F03%2Fgeneva-2009-aston-martin-one-77-almost-fully-revealed%2F&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_One-77"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-8"><span class="mw-cite-backlink"><b><a href="#cite_ref-8">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://site.astonmartin.com/eng/thecompany/news?a=aef9fefe-d985-4e21-920d-708f86120c96">"Aston Martin One-77 wins top design award at the Concorso d’Eleganza, Villa d’Este"</a>. AstonMartin.com. 26 April 2009<span class="printonly">. <a rel="nofollow" class="external free" href="http://site.astonmartin.com/eng/thecompany/news?a=aef9fefe-d985-4e21-920d-708f86120c96">http://site.astonmartin.com/eng/thecompany/news?a=aef9fefe-d985-4e21-920d-708f86120c96</a></span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Aston+Martin+One-77+wins+top+design+award+at+the+Concorso+d%E2%80%99Eleganza%2C+Villa+d%E2%80%99Este&amp;rft.atitle=&amp;rft.date=26+April+2009&amp;rft.pub=AstonMartin.com&amp;rft_id=http%3A%2F%2Fsite.astonmartin.com%2Feng%2Fthecompany%2Fnews%3Fa%3Daef9fefe-d985-4e21-920d-708f86120c96&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_One-77"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-9"><span class="mw-cite-backlink"><b><a href="#cite_ref-9">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://site.astonmartin.com/eng/thecompany/news?a=fa5d6c7a-bc9b-4372-b74d-0e399eaffed7">"One-77 Bestowed with Prestigious Design Award"</a>. AstonMartin.com. 11 January 2009<span class="printonly">. <a rel="nofollow" class="external free" href="http://site.astonmartin.com/eng/thecompany/news?a=fa5d6c7a-bc9b-4372-b74d-0e399eaffed7">http://site.astonmartin.com/eng/thecompany/news?a=fa5d6c7a-bc9b-4372-b74d-0e399eaffed7</a></span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=One-77+Bestowed+with+Prestigious+Design+Award&amp;rft.atitle=&amp;rft.date=11+January+2009&amp;rft.pub=AstonMartin.com&amp;rft_id=http%3A%2F%2Fsite.astonmartin.com%2Feng%2Fthecompany%2Fnews%3Fa%3Dfa5d6c7a-bc9b-4372-b74d-0e399eaffed7&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_One-77"><span style="display: none;">&#160;</span></span></span></li>
<li id="cite_note-10"><span class="mw-cite-backlink"><b><a href="#cite_ref-10">^</a></b></span> <span class="reference-text"><span class="citation web"><a rel="nofollow" class="external text" href="http://site.astonmartin.com/eng/thecompany/news?a=55cdf09e-cf2d-41b2-b353-f86e3f9b66e1">"Aston Martin One-77 Wins Design Award"</a>. AstonMartin.com. 6 August 2009<span class="printonly">. <a rel="nofollow" class="external free" href="http://site.astonmartin.com/eng/thecompany/news?a=55cdf09e-cf2d-41b2-b353-f86e3f9b66e1">http://site.astonmartin.com/eng/thecompany/news?a=55cdf09e-cf2d-41b2-b353-f86e3f9b66e1</a></span>.</span><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.btitle=Aston+Martin+One-77+Wins+Design+Award&amp;rft.atitle=&amp;rft.date=6+August+2009&amp;rft.pub=AstonMartin.com&amp;rft_id=http%3A%2F%2Fsite.astonmartin.com%2Feng%2Fthecompany%2Fnews%3Fa%3D55cdf09e-cf2d-41b2-b353-f86e3f9b66e1&amp;rfr_id=info:sid/en.wikipedia.org:Aston_Martin_One-77"><span style="display: none;">&#160;</span></span></span></li>   
URLS;
        $car->setLongDescription($lDesc);
        $car->setShortDescription($sDesc);
        $car->setUrls($urls);
        $car->setVendor($manager->merge($this->getReference('am_vnd')));
        $manager->persist($car);
        $manager->flush();
    }
    
    public function getOrder() {
        return 51;
    }
}

?>
