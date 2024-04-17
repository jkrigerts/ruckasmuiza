<x-layouts.simple-page metaName="special_offers" bg_src='images/landing/landing.webp' bg_alt="Ruckas muiža">
  <x-slot:title>Īpašie piedāvājumi</x-slot:title>
  <p>
    Sazinies ar mums, lai noskaidrotu, kādi īpašie piedāvājumi ir pieejami!
  </p>
  <div class="gift_cards-centered-btn">
    <x-button-link href="{{ route('contacts') }}" text="Sazināties"/>
  </div>
</x-layouts.simple-page>