<x-layouts.simple-page metaName="photo_session" bg_src='images/landing/landing.webp' bg_alt="Ruckas muiža">
  <x-slot:title>Fotosesija</x-slot:title>
  <div class="photo-session-description">
      <img src={{ asset("images/services/photo-session/karina-jurcina.jpeg") }} alt="Karīna Jurciņa">  
    <div>
      <p>
        <strong>Karīna Jurciņa</strong> ir profesionāla fotogrāfe ar <strong>17 gadu pieredzi</strong>.
      </p>
      <p style="margin-bottom: 0.5rem;">
        "Bērnībā ar lielu aizrautību vēroju, kā tēvs fotografē. Jūtos gandarīta, ka šo fotografēšanas
        mīlestību esmu mantojusi. Mīlestību pret savu darbu es atrodu bildēs.
      
        Fotogrāfija – tā ir daļa no manis. Tā rada prieku un iemūžina daudz patīkamu brīžu.
        Raugoties fotogrāfijās, emocijas atgriežas.
      </p>
      <p>
        Katra fotosesija ir stāsts par dzīvi, cilvēkiem un emocijām. Par skaistiem
        mirkļiem un attiecībām. Man ir svarīgs šis stāsts neatkarīgi no tā,
        vai fotosesija notiek fotostudijā, dabā vai svinību telpā.
        Pa visu Latviju fotografēju – kāzas, jubilejas, kristības, ģimenes, 
        korporatīvos pasākumus un vienkārši skaistus mirkļus." 
      </p>
      <p style="margin-bottom: 1rem;">
        Piesaki savu fotosesiju:
      </p>
      <ul>
        <li>tel.: <a href="tel:+37129382859">+371 29382859</a></li>
        <li style="margin-bottom: 0">e-pasts: <a href="mailto:info@carinafoto.lv">info@carinafoto.lv</a></li>
      </ul>
    </div>
  </div>

  <div id="photo-session-gallery">
    <a class="image"
       href="{{url("images/services/photo-session/gimene-pie-muizas.jpg")}}"
       data-pswp-width="1434" 
       data-pswp-height="2048"
    >
      <img src={{ asset("images/services/photo-session/gimene-pie-muizas-sm.webp") }}
           alt="Ģimene pie Ruckas muižas"
           loading="lazy"
      >
    </a>
    <a class="image"
       href="{{url("images/services/photo-session/oranzerija-gaisa.jpg")}}"
       data-pswp-width="2048" 
       data-pswp-height="1434"
    >
      <img src={{ asset("images/services/photo-session/oranzerija-gaisa-sm.webp") }}
           alt="Ruckas muižas oranžērija"
           loading="lazy"
      >
    </a>
    <a class="image"
       href="{{url("images/services/photo-session/sievietes-pie-muizas.jpg")}}"
       data-pswp-width="1434" 
       data-pswp-height="2048"
    >
      <img src={{ asset("images/services/photo-session/sievietes-pie-muizas-sm.webp") }}
           alt="Sievietes ar laternām pie Ruckas muižas"
           loading="lazy"
      >
    </a>
    <a class="image"
       href="{{url("images/services/photo-session/berns-ar-izbrinu.jpg")}}"
       data-pswp-width="1434" 
       data-pswp-height="2048"
    >
      <img src={{ asset("images/services/photo-session/berns-ar-izbrinu-sm.webp") }}
           alt="Izbrīnīts bērns pie Ruckas muižas"
           loading="lazy"
      >
    </a>
    <a class="image"
       href="{{url("images/services/photo-session/sieviete-pie-muizas.jpg")}}"
       data-pswp-width="1434" 
       data-pswp-height="2048"
    >
      <img src={{ asset("images/services/photo-session/sieviete-pie-muizas-sm.webp") }}
           alt="Sieviete lasa grāmatu pie Ruckas muižas"
           loading="lazy"
      >
    </a>
    <a class="image"
       href="{{url("images/services/photo-session/berni-muizas-parka.jpg")}}"
       data-pswp-width="1434" 
       data-pswp-height="2048"
    >
      <img src={{ asset("images/services/photo-session/berni-muizas-parka-sm.webp") }}
           alt="Bērni Ruckas muižas parkā"
           loading="lazy"
      >
    </a>
    <a class="image"
       href="{{url("images/services/photo-session/oranzerija-romantika.jpg")}}"
       data-pswp-width="2048" 
       data-pswp-height="1433"
    >
      <img src={{ asset("images/services/photo-session/oranzerija-romantika-sm.webp") }}
           alt="Ruckas muižas romantiskā oranžērija"
           loading="lazy"
      >
    </a>
    <a class="image"
       href="{{url("images/services/photo-session/sievietes-pie-kleitas.jpg")}}"
       data-pswp-width="1435" 
       data-pswp-height="2048"
    >
      <img src={{ asset("images/services/photo-session/sievietes-pie-kleitas-sm.webp") }}
           alt="Divas sievietes Ruckas muižā"
           loading="lazy"
      >
    </a>

  </div>
</x-layouts.simple-page>


<script language="JavaScript" type="module">

  const lightbox = new window.PhotoSwipeLightbox({
    gallery: '#photo-session-gallery',
    bgOpacity: 0.9,
    showHideAnimationType: 'fade',
    children: 'a',
    pswpModule: window.photoswipe
  });
  lightbox.init();
</script>