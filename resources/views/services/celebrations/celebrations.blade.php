<x-layouts.simple-page metaName="celebrations" bg_src='images/landing/landing.webp' bg_alt="Ruckas muiža">
  <x-slot:title>Svinību vieta Cēsīs</x-slot:title>
  <p>
    Svini savus īpašos dzīves notikumus Cēsīs!
    Mūsu muižas greznās telpas ir iekārtotas tā, lai ērti un mājīgi svinētu kā lielus,
    tā mazus svētkus! Baudi kopābūšanu ar kolēģiem, radiem, draugiem, kāzu viesiem vai
    sadarbības partneriem – telpas vienlīdz labi piemērotas kā privātu, tā korporatīvu
    svinību rīkošanai jebkurā gadalaikā. 
  </p>

  <p style="margin-bottom:0.5rem">Ruckas muižas gatavie svinību piedāvājumi:</p>
  <ul  style="padding-left:30px">
    <li  style="list-style-type: disc;"><a href="{{route("services.celebrations.pizza")}}" wire:navigate>svinības ar picu meistarklasi</a> (no 5 gadiem līdz neierobežotam vecumam),</li>
    <li  style="list-style-type: disc;"><a href="{{route("services.celebrations.birthday")}}" wire:navigate>dzimšanas dienas piedzīvojumu ballīte</a> <em>Kur pazudusi picas recepte?!</em> (no 5 līdz 12 gadiem),</li>
    <li  style="list-style-type: disc;">mazo dāmu tējas ballīte (no 5 līdz 10 gadiem);</li>
    <li  style="list-style-type: disc;">vecmeitu vai draudzeņu ballīte (no 16 gadiem līdz neierobežotam vecumam); </li>
    <li  style="list-style-type: disc;">kāzu pieturvieta – Ruckas muiža</li>
</ul>


  <x-inner-chapter-heading>Telpas noma</x-inner-chapter-heading>
  <p>Vispopulārākā nomas telpa muižā - 2. stāva <strong style="color: #9E004F; font-size: 1.2rem">oranžērija</strong>!</p>
  <p>
    Oranžērija ir īsts dārgakmens, kas viesus iepriecina ar lielajiem logiem,
    caur kuriem plūst dabīgā gaisma, un daudzajiem telpaugiem, kas rada īpašu atmosfēru. 
    Ikviens, kurš te viesojies, atzīst oranžērijas šarmu un unikālo gaisotni.
  </p>
  <p>
    Šī telpa ir ideāli piemērota dažādiem pasākumiem - svinību svinēšanai,
    kāzu ceremonijām, sanāksmju organizēšanai, radošo projektu īstenošanai.
    Nomājot oranžēriju, viesiem ir pieejama arī blakus esošā bibliotēkas telpa,
    kur iespējams uzklāt kafijas galdu pēc nepieciešamības.
  </p>
  <p style="margin-bottom: 5px">
    Maksa par oranžērijas nomu -
    <strong style="color: #9E004F; font-size: 1.2rem">80 EUR stundā</strong>.</p>
    <p>
      Vairāk informācijas, sazinoties e-pastā:
    <a href="mailto:megija@ruckasmuiza.lv">megija@ruckasmuiza.lv</a> 
  </p>

  <p>
    Ja savus svētkus oranžērijā vēlaties papidināt ar kādu no svinību piedāvājumiem,
    tad oranžērijas telpu nomai tiek piemērota <strong style="color: #9E004F; font-size: 1.2rem">15&nbsp;% atlaide</strong>.
  </p>

  <p>
    Par atsevišķu samaksu sagatavosim un nodrošināsim uzkodu galdu, kafijas pauzes,
    ūdeni, telpu noformējumu, florista pakalpojumus u.c.
    
  Papildus iespējams nomāt projektoru un datoru.  
  </p>

  <div id="rent-orangery-gallery">
    <a class="image"
       href="{{url("images/services/orangery/06.jpg")}}"
       data-pswp-width="1284" 
       data-pswp-height="801"
    >
      <img src={{ asset("images/services/orangery/06.jpg") }}
           alt="Oranžērijas telpaugi un molberti"
           loading="lazy"
      >
    </a>
    <a class="image"
        href="{{url("images/services/orangery/02.jpg")}}"
        data-pswp-width="1920" 
        data-pswp-height="1280"
    >
      <img src={{ asset("images/services/orangery/02.jpg") }}
            alt="Glezna ar tulpēm Oranžērijā"
            loading="lazy"
      >
    </a>

    <a class="image"
        href="{{url("images/services/orangery/03.jpg")}}"
        data-pswp-width="1920" 
        data-pswp-height="1280"
    >
      <img src={{ asset("images/services/orangery/03.jpg") }}
            alt="Gleznotāja aiz durvīm Oranžērijā"
            loading="lazy"
      >
    </a>

    <a class="image"
        href="{{url("images/services/orangery/04.jpg")}}"
        data-pswp-width="1080" 
        data-pswp-height="1080"
    >
      <img src={{ asset("images/services/orangery/04.jpg") }}
            alt="Oranžērijas dīvāni telpaugu ieskauti"
            loading="lazy"
      >
    </a>

    <a class="image"
        href="{{url("images/services/orangery/05.jpg")}}"
        data-pswp-width="1440" 
        data-pswp-height="1800"
    >
      <img src={{ asset("images/services/orangery/05.jpg") }}
            alt="Ieeja Oranžērijā"
            loading="lazy"
      >
    </a>

    <a class="image"
        href="{{url("images/services/orangery/01.jpg")}}"
        data-pswp-width="1920" 
        data-pswp-height="1280"
    >
      <img src={{ asset("images/services/orangery/01.jpg") }}
            alt="Oranžērijā gleznošanas meistarklase"
            loading="lazy"
      >
    </a>

    <a class="image"
        href="{{url("images/services/orangery/07.jpg")}}"
        data-pswp-width="1920" 
        data-pswp-height="1440"
    >
      <img src={{ asset("images/services/orangery/07.jpg") }}
            alt="Oranžērijas telpaugi"
            loading="lazy"
      >
    </a>
  </div>

  <x-inner-chapter-heading>Visas muižas noma</x-inner-chapter-heading>
  <p>
    Muiža tikai Tev? Protams! Netraucēti un pasakaini skaisti – grandiozas
    svinības ir garantētas! Mēs parūpēsimies, ka Tu un viesi pavada neaizmirstamu
    laiku Ruckas muižā, saņemot nedalītu uzmanību un rūpes. 
  </p>
  <p>
    Šāds piedāvājums tiek sagatavots pēc atsevišķas vienošanās.
  </p>

</x-layouts.simple-page>

<script language="JavaScript" type="module">

  const lightbox = new window.PhotoSwipeLightbox({
    gallery: '#rent-orangery-gallery',
    bgOpacity: 0.9,
    showHideAnimationType: 'fade',
    children: 'a',
    pswpModule: window.photoswipe
  });
  lightbox.init();
</script>