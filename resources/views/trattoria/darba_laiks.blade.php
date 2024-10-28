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
            <td><strong style="color: #D9992D; font-size: 1.1rem">12.00 – 19.30</strong></td>
          </tr>
          <tr>
            <td>Trešdiena</td>
            <td><strong style="color: #D9992D; font-size: 1.1rem">12.00 – 19.30</strong></td>
          </tr>
          <tr>
            <td>Ceturtdiena</td>
            <td><strong style="color: #D9992D; font-size: 1.1rem">12.00 – 19.30</strong></td>
          </tr>
          <tr>
            <td>Piektdiena</td>
            <td><strong style="color: #9E004F; font-size: 1.1rem">12.00 – 24.00</strong></td>
          </tr>
          <tr>
            <td>Sestdiena</td>
            <td><strong style="color: #9E004F; font-size: 1.1rem">12.00 – 24.00</strong></td>
          </tr>
          <tr>
            <td>Svētdiena</td>
            <td><strong style="color: #D9992D; font-size: 1.1rem">12.00 – 19.30</strong></td>
          </tr>
        </x-table>
      </div>
    </x-two-columns>

    <x-trattoria-reservation></x-trattoria-reservation>

</x-layouts.simple-page>