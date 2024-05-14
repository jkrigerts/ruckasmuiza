<x-layouts.simple-page
        metaName="living_paintings"
        bg_src='images/landing/landing.webp'
        bg_alt="Ruckas muiža"
>
  <x-slot:title>Dzīvās gleznas</x-slot:title>
  <p>
    Unikāls multimediāls piedzīvojums, kurā jaunākās tehnoloģijas divās izrādēs uz ekrāniem
    ļauj iepazīt mākslu un mūziku. Izstāžu režisors un scenārija autors - Māris Kalve.
  </p>

  <x-two-columns img_src='images/offers/dzivas-gleznas.webp' img_alt="Dzīvās gleznas">
    <x-slot:title>Mīts – Cilvēks – Daba</x-slot:title>
    <h3 class="special-heading-for-living-paintings">Simbolisms Latvijas mākslā</h3>
    <p>
      Janis Rozentāls, Vilhelms Purvītis, Rihards Zariņš, Emīls Dārziņš,
      Edvards Virza un citi simbolisma laikmeta mākslinieki unikālā multimediālā piedzīvojumā.
    </p>
    <x-button-link href="{{ route('living-paintings.myth') }}" text="Uzzināt vairāk!"/>
  </x-two-columns>

  <x-two-columns img_src='images/offers/naktstaurins.webp' img_alt="Baibas Feoktistovas glezna" swap={{true}}>
    <x-slot:title>Manas iedvesmas dārzi</x-slot:title>
    <p>
      Baibas Feoktistovas glezniecība. Mocarta, Baha, Šopēna un Bizē mūzika. 
    </p>
    <x-button-link href="{{ route('living-paintings.gardens') }}" text="Uzzināt vairāk!"/>
  </x-two-columns>

  
  

  <x-living-paintings-info />

</x-layouts.simple-page>