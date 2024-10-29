<x-layouts.simple-page metaName="trattoria" bg_src='images/landing/landing.webp' bg_alt="Ruckas muiža">
  <x-slot:title><span class="heading-prefix">Trattoria</span><span>picu piegāde Cēsu apkārtnē</span></x-slot:title>
  <p><em>Trattoria</em> piedāvā ātru un ērtu picu piegādi Cēsīs un apkaimē! Lai pasūtījumu veiktu, zvaniet <a href="tel:+37129407566">+371&nbsp;29407566</a>.</p>

  <div class="trattoria-table-center">
    <x-table >
      <thead>
        <tr>
          <th class="zone">Zona</th>
          <th>Attā&shy;lums</th>
          <th>Iekļautās apdzīvotās vietas</th>
          <th>Pasū&shy;tījuma summa</th>
          <th>Piegādes cena</th>
        </tr>
      </thead>
      <tbody>
        <tr style="background-color: white;">
          <td rowspan="2" class="zone">1.</td>
          <td rowspan="2">līdz&nbsp;<span class="trattoria-emp">3&nbsp;km</span></td>
          <td rowspan="2" class="places">Agra, Cēsis, Meijermuiža, Ozolkalns, Žagarkalns</td>
          <td>no&nbsp;<span class="trattoria-emp">5&nbsp;€</span></td>
          <td><span class="trattoria-emp">1,50&nbsp;€</span></td>
        </tr>
        <tr>
          <td>no&nbsp;<span class="trattoria-emp">10&nbsp;€</span></td>
          <td><span class="trattoria-emp">Bezmaksas</span></td>
        </tr>

        <tr>
          <td rowspan="2" class="zone">2.</td>
          <td rowspan="2">līdz&nbsp;<span class="trattoria-emp">5&nbsp;km</span></td>
          <td rowspan="2" class="places">Dukuri, Jāņmuiža, Krīvi, Līvi, Priekuļi</td>
          <td>no&nbsp;<span class="trattoria-emp">10&nbsp;€</span></td>
          <td><span class="trattoria-emp">1,50&nbsp;€</span></td>
        </tr>
        <tr style="background-color: transparent;">
          <td>no&nbsp;<span class="trattoria-emp">25&nbsp;€</span></td>
          <td><span class="trattoria-emp">Bezmaksas</span></td>
        </tr>
        <tr style="background-color: white;">
          <td rowspan="2" class="zone">3.</td>
          <td rowspan="2">līdz&nbsp;<span class="trattoria-emp">10&nbsp;km</span></td>
          <td rowspan="2" class="places">Āraiši, Raiskums</td>
          <td>no&nbsp;<span class="trattoria-emp">20&nbsp;€</span></td>
          <td><span class="trattoria-emp">3,00&nbsp;€</span></td>
        </tr>
        <tr>
          <td>no&nbsp;<span class="trattoria-emp">35&nbsp;€</span></td>
          <td><span class="trattoria-emp">Bezmaksas</span></td>
        </tr>

        {{-- <tr>
          <td rowspan="2" class="zone">4.</td>
          <td rowspan="2">līdz&nbsp;<span class="trattoria-emp">15&nbsp;km</span></td>
          <td rowspan="2" class="places">Amata, Amatciems, Bille, Driškina ezers, Kārļi, Liepa, Mežmaļi, Melturi, Rāceņi, Rīdzene, “Ungurmalas”</td>
          <td>no&nbsp;<span class="trattoria-emp">30&nbsp;€</span></td>
          <td><span class="trattoria-emp">4,00&nbsp;€</span></td>
        </tr>
        <tr style="background-color: transparent;">
          <td>no&nbsp;<span class="trattoria-emp">50&nbsp;€</span></td>
          <td><span class="trattoria-emp">Bezmaksas</span></td>
        </tr>
        <tr style="background-color: white;">
          <td class="zone">5.</td>
          <td>līdz&nbsp;<span class="trattoria-emp">20&nbsp;km</span></td>
          <td class="places">Bērzkrogs, Ģikši, Ieriķi, Jaunrauna, Rāmuļi, Stalbe</td>
          <td>no&nbsp;<span class="trattoria-emp">40&nbsp;€</span></td>
          <td><span class="trattoria-emp">5,00&nbsp;€</span></td>
        </tr>

        <tr style="background-color: transparent;">
          <td class="zone">6.</td>
          <td>līdz&nbsp;<span class="trattoria-emp">25&nbsp;km</span></td>
          <td class="places">Mārsnēni, Plācis, Rauna, Straupe</td>
          <td>no&nbsp;<span class="trattoria-emp">50&nbsp;€</span></td>
          <td><span class="trattoria-emp">7,00&nbsp;€</span></td>
        </tr> --}}
      </tbody>
    </x-table>
  </div>

  <p style="margin-top:2rem">Veicot picu piegādi, papildus tiek piemērota maksa par iepakojumu: 1 € katrai picai.</p>

  <x-inner-chapter-heading>Piegādes darba laiks</x-inner-chapter-heading>
  <ul>
    <li>Pirmdienās - brīvs</li>
    <li>Otrdienās, trešdienās, ceturtdienās un svētdienās - <strong style="color: #D9992D; font-size: 1.1rem">no 12.00 līdz 19.30</strong>.</li>
    <li>Piektdienās un sestdienās - <strong style="color: #9E004F; font-size: 1.1rem">no 12.00 līdz 24.00</strong>!</li>
  </ul>

  <x-trattoria-gallery></x-trattoria-gallery>


</x-layouts.simple-page>