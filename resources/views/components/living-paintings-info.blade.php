<x-two-columns style="align-items:start;margin-top:5.5rem;">
  <x-slot:title>Seansi</x-slot:title>
  <p>Seansi notiek katru dienu no otrdienas līdz svētdienai ieskaitot. <strong style="color: #9E004F; font-size: 1.2rem">Izstāde skatāmas līdz šī gada 15. oktobrim</strong>.</p>
  <ul>
    {{-- <li style="margin-bottom: 0.2rem">10.00 – 10.30 Mīts – Cilvēks – Daba</li>
    <li style="margin-bottom: 0.2rem">10.30 – 11.00 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">11.00 – 11.30 Mīts – Cilvēks – Daba</li>
    <li style="margin-bottom: 0.2rem">11.30 – 12.00 Manas iedvesmas dārzi</li> --}}

    <li style="margin-bottom: 0.2rem">12.00 – 12.30 Mīts – Cilvēks – Daba</li>
    <li style="margin-bottom: 0.2rem">12.30 – 13.00 Manas iedvesmas dārzi</li>

    <li style="margin-bottom: 0.2rem">13.00 – 13.30 Mīts – Cilvēks – Daba</li>
    <li style="margin-bottom: 0.2rem">13.30 – 14.00 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">14.00 – 14.30 Mīts – Cilvēks – Daba</li>

    <li style="margin-bottom: 0.2rem">14.30 – 15.00 Manas iedvesmas dārzi</li>
    <li style="margin-bottom: 0.2rem">15.00 – 15.30 Mīts – Cilvēks – Daba</li>
    <li style="margin-bottom: 0.2rem">15.30 – 16.00 Manas iedvesmas dārzi</li>

    <li style="margin-bottom: 0.2rem">16.00 – 16.30 Mīts – Cilvēks – Daba</li>
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
    <p style="margin-top:1.5rem; margin-bottom: 0">Grupas atlaide (grupa virs 10 personām, t. sk. skolēnu grupas): 10&nbsp;%</p>
    <p style="margin-bottom: 0">Cēsu Drauga kartes atlaide: 10&nbsp;%</p>
    <p>3+ Ģimenes karte atlaide: 10%</p>

    <p style="margin-bottom: 0">Bezmaksas ieeja:</p>
    <ul style="padding-left: 20px">
      <li style="margin-bottom: 0; list-style-type: disc">pirmsskolas vecuma bērniem,</li>
      <li style="margin-bottom: 0; list-style-type: disc">personām ar I un II grupas invaliditāti un vienai personai, kas pavada personu ar I grupas invaliditāti. </li>
    </ul>
  </x-slot:second_slot>
</x-two-columns>

{{-- <div class="gift_cards-centered-btn">
  <x-button-link href="{{ route('contacts') }}" text="Pieteikties!"/>
</div> --}}