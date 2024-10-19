<x-layouts.simple-page metaName="trattoria" bg_src='images/landing/landing.webp' bg_alt="Ruckas muiža">
  <x-slot:title><span class="heading-prefix">Trattoria</span><span>ēdienkarte</span></x-slot:title>
  
  <iframe class="trattoria-iframe" src="{{ url('assets/Ruckas_muiza-Trattoria-edienkarte.pdf') }}" width="100%"></iframe>

  <div class="trattoria-centered-btn" style="margin-bottom:5rem">
    <a href="{{ url('assets/Ruckas_muiza-Trattoria-edienkarte.pdf') }}" class="button-link" target="_blank">Apskatīt ēdienkarti</a>
  </div>

  <x-trattoria-reservation></x-trattoria-reservation>
</x-layouts.simple-page>