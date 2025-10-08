<x-layouts.simple-page metaName="trattoria" bg_src='images/landing/landing.webp' bg_alt="Ruckas muiža">
  <x-slot:title><span class="heading-prefix">Renāra&nbsp;Sproģa ģimenes&nbsp;picērija</span><span>Trattoria</span></x-slot:title>
  <p>
    Sveicam ikvienu viesi mūsu ģimenes <em>trattoriā</em>!
  </p>
  <p>
    Es, Renārs Sproģis, kopā ar savu ģimeni vēlamies ienest
    mazliet Itālijas saules un siltuma Ruckas muižā.
    Esam izveidojuši ģimenes picēriju, kurā picas mīkla tiek gatavota no
    dabīgā ierauga un cepta speciālā itāļu picas krāsnī.
    Pateicoties dabīgajam ieraugam un mīklas raudzēšanas
    procesam, pica ir autentiska, pasakaini garšīga un pēc
    tās apēšanas nav smaguma sajūtas. Produkti, ko izmantojam
    mūsu trattoriā arī tiek vesti no Itālijas, tādējādi
    panākot īstu itāļu Neapoles picas garšu kombināciju.
  </p>
  <p>
    Ko nozīmē <em>trattoria</em>? Tā ir neliela ģimenes kafejnīca,
    kurā lielākā daļa darbinieki ir ģimenes locekļi.
    <em>Trattoria</em> pēc savas būtības, apkalpošanas un interjera
    nav tik formāla kā restorāns.
  </p>
  <p style="margin-bottom: 0;">
    Mūsu gatavotās Neapoles tipa picas ir tik gardas, ka pat garoziņa pāri nepaliks! 
  </p>
  <p>
    Uz tikšanos Ruckas muižā!
  </p>

  <div id="pizza" style="margin-top:5.5rem">
    <x-two-columns swap={{true}} style="gap:30px">
      <x-slot:title>Darba laiks</x-slot:title>
      <div class="trattoria-table-center">
        <x-table >
          <thead>
            <tr>
              <th>Diena</th>
              <th>Darba laiks</th>
            </tr>
          </thead>
          <tr>
            <td>Pirmdiena</td>
            <td>slēgts</td>
          </tr>
          <tr>
            <td>Otrdiena</td>
            <td>slēgts</td>
          </tr>
          <tr>
            <td>Trešdiena</td>
            <td>12.00 – 20.00</td>
          </tr>
          <tr>
            <td>Ceturtdiena</td>
            <td>12.00 – 20.00</td>
          </tr>
          <tr>
            <td>Piektdiena</td>
            <td>12.00 – 20.00</td>
          </tr>
          <tr>
            <td>Sestdiena</td>
            <td>12.00 – 20.00</td>
          </tr>
          <tr>
            <td>Svētdiena</td>
            <td>12.00 – 20.00</td>
          </tr>
        </x-table>
      </div>

      
      <x-slot:second_slot>
        <a class="trattoria-image"
         href="{{url("images/trattoria/trattoria_24.webp")}}"
         data-pswp-width="1200" 
         data-pswp-height="1714"
        >
          <img src={{ asset("images/trattoria/trattoria_24.webp") }}
              alt="Ruckas muižas Trattoria ceptā pica"
              loading="lazy"
          >
        </a>
      </x-slot:second_slot>
    </x-two-columns>

    <x-two-columns style="gap:30px">
      <x-slot:title>Rezervācija</x-slot:title>
      <p>Tālruņa numurs galdiņu rezervācijai: <a href="tel:+37129407566">+371&nbsp;29407566</a></p>
      
      <x-slot:second_slot>
        <a class="trattoria-image"
         href="{{url("images/trattoria/trattoria_25.webp")}}"
         data-pswp-width="1200" 
         data-pswp-height="1714"
        >
          <img src={{ asset("images/trattoria/trattoria_25.webp") }}
              alt="Ruckas muižas Trattoria ceptā pica"
              loading="lazy"
          >
        </a>
      </x-slot:second_slot>
    </x-two-columns>

    <article>
      <x-inner-chapter-heading>Ēdienkarte</x-inner-chapter-heading>
      <iframe class="trattoria-iframe" src="{{ url('assets/Ruckas_muiza-Trattoria-edienkarte.pdf') }}" width="100%"></iframe>

      <div class="trattoria-centered-btn">
        <a href="{{ url('assets/Ruckas_muiza-Trattoria-edienkarte.pdf') }}" class="button-link" target="_blank">Apskatīt ēdienkarti</a>
      </div>
    </article>

    <div class="trattoria-image-row">
      <a class="trattoria-image"
          href="{{url("images/trattoria/trattoria_01.webp")}}"
          data-pswp-width="1200" 
          data-pswp-height="1714"
        >
        <img src={{ asset("images/trattoria/trattoria_01.webp") }}
            alt="Ruckas muižas Trattoria ceptā pica"
            loading="lazy"
        >
      </a>
      <a class="trattoria-image"
          href="{{url("images/trattoria/trattoria_17.webp")}}"
          data-pswp-width="1200" 
          data-pswp-height="1714"
        >
        <img src={{ asset("images/trattoria/trattoria_17.webp") }}
            alt="Ruckas muižas Trattoria ceptā pica"
            loading="lazy"
        >
      </a>
      <a class="trattoria-image"
          href="{{url("images/trattoria/trattoria_11.webp")}}"
          data-pswp-width="1200" 
          data-pswp-height="1714"
        >
        <img src={{ asset("images/trattoria/trattoria_11.webp") }}
            alt="Ruckas muižas Trattoria ceptā pica"
            loading="lazy"
        >
      </a>
      <a class="trattoria-image"
          href="{{url("images/trattoria/trattoria_05.webp")}}"
          data-pswp-width="1200" 
          data-pswp-height="1714"
        >
        <img src={{ asset("images/trattoria/trattoria_05.webp") }}
            alt="Ruckas muižas Trattoria ceptā pica"
            loading="lazy"
        >
      </a>
      

    </div>
  </div>
</x-layouts.simple-page>


<script language="JavaScript" type="module">

  const lightbox = new window.PhotoSwipeLightbox({
    gallery: '#pizza',
    bgOpacity: 0.9,
    showHideAnimationType: 'fade',
    children: '.trattoria-image',
    pswpModule: window.photoswipe
  });
  lightbox.init();
</script>