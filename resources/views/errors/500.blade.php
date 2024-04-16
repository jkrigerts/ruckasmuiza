<x-layouts.simple-page metaName="error" bg_src='images/landing/landing.webp' bg_alt="Ruckas muiža">
  <x-slot:title>Servera kļūda</x-slot:title>
  <p>
    Notikusi servera kļūda. Lūdzu, sazinieties ar muižu.
  </p>
  <div class="gift_cards-centered-btn">
    <x-button-link href="{{ route('contacts') }}" text="Sazināties"/>
  </div>
</x-layouts.simple-page>