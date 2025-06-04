<x-layouts.simple-page
    metaName="stay"
    bg_src='images/landing/landing.webp'
    bg_alt="Ruckas muiža"
    style="--heading-decrease-size: 0.2rem"
>
  <x-slot:title>Nakšņo&shy;šana Cēsīs</x-slot:title>
  <p>
    Lai baudītu nesteidzīgu atpūtu un pagarinātu savas brīvdienas Cēsīs,
    aicinām izvēlēties atpūtu Ruckas muižā. Ruckas muižas naktsmītnes ir 
    paredzētas viesiem, kas vēlas kļūt par daļu no muižas rosīgās dzīves. 
    Nakšņotājiem piedāvājam atvērtās muižas konceptu – viesi uzturēšanās laikā 
    var brīvi baudīt muižas telpas, piemēram, izvēloties malkot tēju vai kafiju 
    muižas oranžērijā vai bibliotēkā. Muižu ieskauj brīnumskaists parks, kuru nakšņotāji 
    var izbaudīt, dodoties svaiga gaisa pastaigās vai atpūšoties ar glāzi itāļu 
    vīna kādā no parka atpūtas zonām.
  </p>

  <p style="margin-bottom:0.5rem">Muiža lieliski piemērota nakšņotājiem, kuri vēlas iepazīt Cēsis, 
    jo tā atrodas tikai:
  </p>
  
  <ul  style="padding-left:30px">
      <li  style="list-style-type: disc;">7 minūšu pastaigas attālumā no Cēsu autoostas;</li>
      <li style="list-style-type: disc;">10 minūšu pastaigas attālumā no Vidzemes koncertzāles <em>Cēsis</em>;</li>
      <li style="list-style-type: disc;">12 minūšu pastaigas attālumā no Cēsu vecpilsētas;</li>
      <li style="list-style-type: disc;">15 minūšu pastaigas attālumā no Cēsu pils kompleksa.</li>
  </ul>
  
  <p>
    Pie mums pieejamas nakšņošanas iespējas kādā no pieciem numuriņiem. 
    Viesiem pieejamas tikai koplietošanas WC un plašas dušas telpas. 
    Bez nakšņošanas iespējām piedāvājam arī citus pakalpojumus, 
    lai uzturēšanās muižā būtu īpaši neaizmirstama. Ar piedāvājumu 
    var iepazīties sadaļā <a href="{{ route("services.")}}">PAKALPOJUMI</a>.</p>
  
  <p><strong style="color: #9E004F; font-size: 1.2rem">Ierašanās no 14:00 līdz 19:00, numuriņu atbrīvošana līdz 12:00.</strong></p>

  

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
            <p>2 personām <strong>60 €</strong> vai 1 personai <strong>50 €</strong></p>
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
    <a href="https://www.booking.com/hotel/lv/ruckas-muiza.lv.html" class="button-link" target="_blank">Veikt rezervāciju</a> 
  </div>
</x-layouts.simple-page>