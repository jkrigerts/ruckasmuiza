<x-layouts.simple-page metaName="trattoria" bg_src='images/landing/landing.webp' bg_alt="Ruckas muiža">
  <x-slot:title><span class="heading-prefix">Trattoria</span><span>ēdienkarte</span></x-slot:title>
  
  <iframe class="trattoria-iframe" src="{{ url('assets/Ruckas_muiza-Trattoria-edienkarte.pdf') }}" width="100%"></iframe>

  <div class="trattoria-centered-btn" style="margin-bottom:5rem">
    <a href="{{ url('assets/Ruckas_muiza-Trattoria-edienkarte.pdf') }}" class="button-link" target="_blank">Apskatīt ēdienkarti</a>

    {{-- <a href="{{ url('assets/Rucka_manor-Trattoria-menu.pdf') }}" class="button-link" target="_blank">View Menu in English</a> --}}
  </div>

  <x-trattoria-reservation></x-trattoria-reservation>


  {{-- <x-two-columns swap="{true}">
    <h2>Atlaides</h2>
      <p>
        Uzrādot <em>Dzīvo gleznu</em> biļeti, saņemiet <strong style="color: #9E004F; font-size: 1.1rem">20&nbsp;% atlaidi</strong> visām <em>Trattoria</em> picām!
      </p>

    
    <x-slot:second_slot>
      <video controls autoplay loop class="living-paintings-discount-video" style="border-radius:4px">
        <source src="{{asset('assets/dzivas-gleznas-trattoria-atlaide.mp4')}}#t=0.001" type="video/mp4">
        Pārlūkprogramma neatbalsta video!
      </video> 
    </x-slot:second_slot>
  </x-two-columns> --}}

</x-layouts.simple-page>