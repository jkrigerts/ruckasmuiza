<x-layouts.simple-page
    metaName="stay"
    bg_src='images/landing/landing.webp'
    bg_alt="Ruckas muiža"
    style="--heading-decrease-size: 0.2rem"
>
  <x-slot:title>Nakšņo&shy;šana Cēsīs</x-slot:title>
  <p>
    Nedēļas nogale Cēsīs, atpūta ar ģimeni vai jaunlaulāto divvientulība –
    Ruckas muiža ir tās naktsmājas Vidzemē, kas neatstās vienaldzīgu!
    Pie mums pieejamas nakšņošanas iespējas, sākot no 40 €/personai,
    kādā no 7 numuriņiem. Pieejama tikai koplietošanas WC un dušas telpas.</p>
    {{-- <div class="gift_cards-centered-btn" style="margin-bottom: 2rem">
      <x-button-link href="{{ url('galerija/2') }}" text="Apskatīt istabiņas"></x-button-link>
    </div> --}}

  <div class="stay-rooms">
    <table>
      <thead>
        <tr>
          <th>Nosaukums</th>
          <th>Numurs</th>
          <th>Guļvietas</th>
          <th>Cena</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Marijas istaba</td>
          <td>Nr. 10</td>
          <td>Viena divguļamā gulta</td>
          <td rowspan="7">
            <p>2 personām <strong>50 €</strong> vai 1 personai <strong>40 €</strong></p>
          </td>
        </tr>
        <tr>
          <td>Jāzepa istaba</td>
          <td>Nr. 9</td>
          <td>Divas vienguļamās gultas</td>
        </tr>
        <tr>
          <td>Martas istaba</td>
          <td>Nr. 8</td>
          <td>Divas vienguļamās gultas</td>
        </tr>
        <tr>
          <td>Jēkaba istaba</td>
          <td>Nr. 6</td>
          <td>Viena divguļamā gulta</td>
        </tr>
        <tr>
          <td>Margarētas istaba</td>
          <td>Nr. 3</td>
          <td>Viena divguļamā gulta</td>
        </tr>
        <tr>
          <td>Franciska istaba</td>
          <td>Nr. 2</td>
          <td>Viena divguļamā gulta</td>
        </tr>
        <tr>
          <td>Jāņa istaba</td>
          <td>Nr. 1</td>
          <td>Divas vienguļamās gultas</td>
        </tr>
      </tbody>
    </table>
    <p style="margin-bottom: 0; margin-top: 1rem;">Cēsu Drauga kartes īpašniekiem atlaide <strong>10&nbsp;%</strong></p>
  </div>
  <div class="gift_cards-centered-btn">
    <x-button-link href="{{ url('galerija/2') }}" text="Apskatīt istabiņas"></x-button-link>
    <x-button-link href="{{ route('contacts') }}" text="Veikt rezervāciju"/>
  </div>
</x-layouts.simple-page>