<x-two-columns style="align-items:start;margin-top:5.5rem;">
  <x-slot:title>Seansi</x-slot:title>
  <p>Seansi notiek katru dienu no otrdienas līdz svētdienai ieskaitot.</p>
  <ul>
    <li style="margin-bottom: 0.2rem">10.00 – 10.30 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">10.30 – 11.00 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">11.00 – 11.30 Mīts – Cilvēks – Daba</li>

    <li style="margin-bottom: 0.2rem">11.30 – 12.00 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">12.00 – 12.30 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">12.30 – 13.00 Mīts – Cilvēks – Daba</li>

    <li style="margin-bottom: 0.2rem">13.00 – 13.30 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">13.30 – 14.00 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">14.00 – 14.30 Mīts – Cilvēks – Daba</li>

    <li style="margin-bottom: 0.2rem">14.30 – 15.00 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">15.00 – 15.30 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">15.30 – 16.00 Mīts – Cilvēks – Daba</li>

    <li style="margin-bottom: 0.2rem">16.00 – 16.30 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">16.30 – 17.00 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">17.00 – 17.30 Mīts – Cilvēks – Daba</li>
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