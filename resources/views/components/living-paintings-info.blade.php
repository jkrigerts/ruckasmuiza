<x-two-columns style="align-items:start;margin-top:5.5rem;">
  <x-slot:title>Seansi</x-slot:title>
  <ul>
    <li style="margin-bottom: 0.2rem">10.00, 10.20 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">10.40 Mīts – Cilvēks - Daba</li>
    <li style="margin-bottom: 0.2rem">11.10, 11.30 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">11.50 Mīts – Cilvēks - Daba</li>
    <li style="margin-bottom: 0.2rem">12.20, 12.40 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">13.00 Mīts – Cilvēks - Daba</li>
    <li></li>
    <li style="margin-bottom: 0.2rem">14.00, 14.20 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">14.40 Mīts – Cilvēks - Daba</li>
    <li style="margin-bottom: 0.2rem">15.10, 15.30 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">15.50 Mīts – Cilvēks - Daba</li>
    <li style="margin-bottom: 0.2rem">16.20, 16.40 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">17.00 Mīts – Cilvēks - Daba</li>
  </ul>
  <x-slot:second_slot>
    <h2>Cenas</h2>
    <x-table>
      <thead>
        <tr>
          <th></th>
          <th>Kopējā biļete</th>
          <th>Manas iedvesmas dārzi</th>
          <th>Mīts &#8209; Cilvēks &#8209; Daba</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Pieaugušais</td>
          <td>10</td>
          <td>7</td>
          <td>6</td>
        </tr>
        <tr>
          <td>Skolēns&nbsp;/ students&nbsp;/ seniors</td>
          <td>6</td>
          <td>5</td>
          <td>4</td>
        </tr>
        <tr>
          <td>Ģimene 2&nbsp;+&nbsp;3</td>
          <td>22</td>
          <td>17</td>
          <td>15</td>
        </tr>
        {{-- <tr>
          <td>Grupas atlaide* 10&nbsp;%</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>Cēsu Drauga kartes atlaide 10&nbsp;%</td>
          <td></td>
          <td></td>
          <td></td>
        </tr> --}}
      </tbody>
    </x-table>
    <p style="margin-top:1.5rem;">Grupas atlaide (grupa virs 10 personām, t. sk. skolēnu grupas): 10&nbsp;%</p>
    <p>Cēsu Drauga kartes atlaide: 10&nbsp;%</p>
  </x-slot:second_slot>
</x-two-columns>

<div class="gift_cards-centered-btn">
  <x-button-link href="{{ route('contacts') }}" text="Pieteikties!"/>
</div>