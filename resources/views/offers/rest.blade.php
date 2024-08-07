<x-layouts.simple-page metaName="rest_offers" bg_src='images/landing/landing.webp' bg_alt="Ruckas muiža">
  <x-slot:title>Atpūtas iespējas</x-slot:title>
  <p>
    Ruckas muiža ir vieta, kur piedzīvot, iepazīt, izzināt 
    un sajust visai ģimenei! Ieskaties, kādas ir atpūtas
    iespējas Ruckas muižas kompleksā!
  </p>
  <x-two-columns img_src='images/offers/ekskursija.webp' img_alt="Ekskursija">
    <x-slot:title>Ekskursija pa muižu</x-slot:title>
    <p>Atklāj Ruckas muižu un izzini, kā tā mainījusies kopš 1577. gada.</p>
    <p>Ekskursijas pieejamas grupās vai individuāli.</p>
    <p>Cena: 5 € personai (min. cena 30 €)</p>
    <p>Ilgums: ~ 40 minūtes</p>
    <x-button-link href="{{ route('contacts') }}" text="Pieteikt"/>
  </x-two-columns>

  <x-two-columns img_src='images/offers/melderis.webp' img_alt="Dzirnavnieka kurpēs" swap={{true}}>
    <x-slot:title>Iekāp dzirnavnieka kurpēs</x-slot:title>
    <p>
      Vai kādreiz esi domājis, kā top milti? Vai esi gribējis
      redzēt un izzināt šo procesu? Ruckas muižā Tev ir iespēja
      kļūt par īstu melderi – pašam pieredzēt, pašam paveikt
      un pašam izprast malšanu. Programma paredzēta jebkura
      vecuma cilvēkiem.
    </p>
    <p>Pieejams no jūlija!</p>
    <x-button-link href="{{ route('contacts') }}" text="Sazināties"/>
  </x-two-columns>
</x-layouts.simple-page>