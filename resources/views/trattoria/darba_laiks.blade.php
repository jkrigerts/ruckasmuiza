<x-layouts.simple-page metaName="trattoria" bg_src='images/landing/landing.webp' bg_alt="Ruckas muiža">
  <x-slot:title><span class="heading-prefix">Trattoria</span><span>darba&nbsp;laiks</span></x-slot:title>
  

    <x-two-columns img_src='images/trattoria/trattoria_24.webp' img_alt="Ruckas muižas Trattoria ceptā pica" swap={{true}}>
      <div class="trattoria-table-center">
        <x-table >
          <thead>
            <tr>
              <th>Diena</th>
              <th>Darba laiks</th>
            </tr>
          </thead>
          <tr>
            <td>Pirmdiena</td>
            <td>slēgts</td>
          </tr>
          <tr>
            <td>Otrdiena</td>
            <td>12.00 – 20.00</td>
          </tr>
          <tr>
            <td>Trešdiena</td>
            <td>12.00 – 20.00</td>
          </tr>
          <tr>
            <td>Ceturtdiena</td>
            <td>12.00 – 20.00</td>
          </tr>
          <tr>
            <td>Piektdiena</td>
            <td>12.00 – 20.00</td>
          </tr>
          <tr>
            <td>Sestdiena</td>
            <td>12.00 – 20.00</td>
          </tr>
          <tr>
            <td>Svētdiena</td>
            <td>12.00 – 20.00</td>
          </tr>
        </x-table>
      </div>
    </x-two-columns>

    <x-trattoria-reservation></x-trattoria-reservation>

</x-layouts.simple-page>