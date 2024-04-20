<x-layouts.simple-page metaName="services" bg_src='images/landing/landing.webp' bg_alt="Ruckas muiža">
  <x-slot:title>Pakalpojumi</x-slot:title>
  <p>
    Ruckas muiža ir īstā vieta, kur svinēt dzīvi, īpašus notikumus,
    baudīt atpūtu vai organizēt kādu plašākam pulkam aktuālu pasākumu.
    Šī ir vieta, kur būt. Uzzini, ko mēs piedāvājam!
  </p>
  <x-two-columns img_src='images/landing/naksnot.webp' img_alt="Istabiņa nakšņošanai">
    <x-slot:title>Nakšņošana</x-slot:title>
    <p>
      Izbaudi neaizmirstamu nakšņošanas pieredzi kādā no grezni
      iekārtotajām Ruckas muižas istabiņām. Muižā pieejami 7 unikāli
      iekārtoti numuriņi mierpilnai un greznai atpūtai.
    </p>
    <x-button-link href="{{ route('services.stay') }}" text="Uzzināt vairāk!"/>
  </x-two-columns>

  <x-two-columns img_src='images/services/kazas.webp' img_alt="Kāzu kleita" swap={{true}}>
    <x-slot:title>Kāzas</x-slot:title>
    <p>
      Plāno iestūrēt laulības ostā un meklē īsto vietu savām svinībām?
      Vai arī ir aktuāla pasakaini skaista pieturvieta divvientulībai
      kāzu dienā? Un kā ar kāzu ceremonijas vietu? To visu vari piedzīvot
      Ruckas muižā – iespējas ir bezgalīgas!
    </p>
    <x-button-link href="{{ route('services.weddings') }}" text="Uzzināt vairāk!"/>
  </x-two-columns>

  <x-two-columns img_src='images/services/svinibas.webp' img_alt="Svinības">
    <x-slot:title>Svinības</x-slot:title>
    <p>
      Ruckas muiža ir īstā vieta, kur grezni svinēt sev īpašus dzīves notikumus
      vai korporatīvus pasākumus – telpas ir plašas, mājīgas un gaišas!
      Iespējams uzņemt līdz pat 80 personām.
    </p>
    <x-button-link href="{{ route('services.celebrations') }}" text="Uzzināt vairāk!"/>
  </x-two-columns>

  <x-two-columns img_src='images/services/telpu-noma.webp' img_alt="Noma" swap={{true}}>
    <x-slot:title>Telpu noma</x-slot:title>
    <p>
      Ja meklē telpas radošām nodarbēm, meistarklasēm, semināriem vai nometnēm –
      esi īstajā vietā! Mūsu daudzfunkcionālās un plašās telpas tam ir kā radītas.
      Iespējams uzņemt līdz pat 80 dalībniekiem.
    </p>
    <x-button-link href="{{ route('services.rent') }}" text="Uzzināt vairāk!"/>
  </x-two-columns>
</x-layouts.simple-page>