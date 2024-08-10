<x-layouts.simple-page metaName="trattoria" bg_src='images/landing/landing.webp' bg_alt="Ruckas muiža">
  <x-slot:title><span class="heading-prefix">Renāra&nbsp;Sproģa ģimenes&nbsp;picērija</span><span>Trattoria</span></x-slot:title>
  <p>
    Sveicam ikvienu viesi mūsu ģimenes <em>trattoriā</em>!
  </p>
  <p>
    Es, Renārs Sproģis, kopā ar savu ģimeni vēlamies ienest
    mazliet Itālijas saules un siltuma Ruckas muižā.
    Esam izveidojuši ģimenes picēriju, kurā picas mīkla tiek gatavota no
    dabīgā ierauga un cepta speciālā itāļu picas krāsnī.
    Pateicoties dabīgajam ieraugam un mīklas raudzēšanas
    procesam, pica ir autentiska, pasakaini garšīga un pēc
    tās apēšanas nav smaguma sajūtas. Produkti, ko izmantojam
    mūsu trattoriā arī tiek vesti no Itālijas, tādējādi
    panākot īstu itāļu Neapoles picas garšu kombināciju.
  </p>
  <p>
    Ko nozīmē <em>trattoria</em>? Tā ir neliela ģimenes kafejnīca,
    kurā lielākā daļa darbinieki ir ģimenes locekļi.
    <em>Trattoria</em> pēc savas būtības, apkalpošanas un interjera
    nav tik formāla kā restorāns.
  </p>
  <p style="margin-bottom: 0;">
    Mūsu gatavotās Neapoles tipa picas ir tik gardas, ka pat garoziņa pāri nepaliks! 
  </p>
  <p>
    Uz tikšanos Ruckas muižā!
  </p>


  <x-inner-chapter-heading>Darba laiks</x-inner-chapter-heading>
  {{-- <ul>
    <li>Pirmdiena – slēgts</li>
    <li>Otrdiena – no 12.00 līdz 20.00</li>
    <li>Trešdiena – no 12.00 līdz 20.00</li>
    <li>Ceturtdiena – no 12.00 līdz 20.00</li>
    <li>Piektdiena – no 12.00 līdz 21.00</li>
    <li>Sestdiena – no 12.00 līdz 21.00</li>
    <li>Svētdiena – no 12.00 līdz 20.00</li>
  </ul> --}}
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
        <td>12.00 – 21.00</td>
      </tr>
      <tr>
        <td>Sestdiena</td>
        <td>12.00 – 21.00</td>
      </tr>
      <tr>
        <td>Svētdiena</td>
        <td>12.00 – 20.00</td>
      </tr>
    </x-table>
  </div>

  <x-inner-chapter-heading>Ēdienkarte</x-inner-chapter-heading>
  <iframe class="trattoria-iframe" src="{{ url('assets/Ruckas_muiza-Trattoria-edienkarte.pdf') }}" width="100%"></iframe>

  <div class="gift_cards-centered-btn">
    <a href="{{ url('assets/Ruckas_muiza-Trattoria-edienkarte.pdf') }}" class="button-link" target="_blank">Apskatīt ēdienkarti</a>
  </div>
</x-layouts.simple-page>