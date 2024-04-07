<x-layouts.simple-page bg_src='images/landing/landing.webp' bg_alt="Ruckas muiža">
  <x-slot:title>Nakšņošana Cēsīs</x-slot:title>
  <p>
    Nedēļas nogale Cēsīs, atpūta ar ģimeni vai jaunlaulāto divvientulība –
    Ruckas muiža ir tās naktsmājas Vidzemē, kas neatstās vienaldzīgu!
    Pie mums pieejamas nakšņošanas iespējas, sākot no 30 €/personai,
    kādā no 7 numuriņiem.
  </p>


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
          <td>75 €</td>
        </tr>
        <tr>
          <td>Jāzepa istaba</td>
          <td>Nr. 9</td>
          <td>Divas vienguļamās gultas</td>
          <td>70 € vai 1 personai 50 €</td>
        </tr>
        <tr>
          <td>Martas istaba</td>
          <td>Nr. 8</td>
          <td>Divas vienguļamās gultas</td>
          <td>70 € vai 1 personai 50 €</td>
        </tr>
        <tr>
          <td>Jēkaba istaba</td>
          <td>Nr. 6</td>
          <td>Trīs vienguļamās gultas</td>
          <td>75 € vai 2 personām 65 € vai 1 personai 30 €</td>
        </tr>
        <tr>
          <td>Margarētas istaba</td>
          <td>Nr. 3</td>
          <td>Viena divguļamā gulta</td>
          <td>75 €</td>
        </tr>
        <tr>
          <td>Franciska istaba</td>
          <td>Nr. 2</td>
          <td>Viena divguļamā gulta</td>
          <td>80 €</td>
        </tr>
        <tr>
          <td>Jāņa istaba</td>
          <td>Nr. 1</td>
          <td>Divas vienguļamās gultas</td>
          <td>70 € vai 1 personai 50 €</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="gift_cards-centered-btn">
    <x-button-link href="{{ route('contacts') }}" text="Veikt rezervāciju"/>
  </div>
</x-layouts.simple-page>