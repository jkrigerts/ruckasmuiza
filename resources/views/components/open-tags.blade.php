@php
    
    $afterTitle = ' - Ruckas muiža'; // text used after title
    $defaultImage = '/images/meta_image.png'; // For now, we have the same image for all meta tags

    $settings = [
        'events' => [
            'title' => 'Pasākumi' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Ruckas muiža piedāvā izbaudīt plašu pasākumu klāstu – atrodi sev aktuālo šajā mēnesī un pavadi īpašus, neaizmirstamus mirkļus vietā, kur senatne sastopas ar mūsdienām.',
        ],
        'landing' => [
            'title' => 'Ruckas muiža',
            'image' => $defaultImage,
            'desc'  => 'Laipni lūgti Ruckas muižā',
        ],
        'about' => [
            'title' => 'Par mums' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Ruckas muižas parks ir Cēsu ģeogrāfiskais centrs, tāpēc pavisam droši varam teikt – mūsu senatnes skaistākais piemineklis slejas pašā Cēsu sirdī jau kopš 1577. gada. Laiki mainās, bet muižas unikālā aura un mājīgais gars ir nemainīgs.',
        ],

        // Dzīvās gleznas
        'living_paintings' => [
            'title' => 'Dzīvās gleznas' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Unikāls multimediāls piedzīvojums, kurā jaunākās tehnoloģijas divās izrādēs uz ekrāniem ļauj iepazīt mākslu un mūziku.',
        ],
        'gardens' => [
            'title' => 'Manas iedvesmas dārzi' . $afterTitle,
            'image' => 'images/offers/naktstaurins.webp',
            'desc'  => 'Mākslinieces Baibas Feoktistovas veidots, īstenots sapnis, kas sagādā negaidītus un emocijām bagātus pārsteigumus.',
        ],
        'myth' => [
            'title' => 'Mīts - Cilvēks - Daba' . $afterTitle,
            'image' => 'images/offers/dzivas-gleznas.webp',
            'desc'  => 'Simbolisms Latvijas mākslā. Piedzīvojums, kurā jaunākās tehnoloģijas ļauj iepazīt mākslu un mūziku.',
        ],
        'school_bag' => [
            'title' => 'Latvijas skolas soma' . $afterTitle,
            'image' => 'images/offers/dzivas-gleznas.webp',
            'desc'  => 'Ruckas muiža aicina Latvijas skolu skolēnus un skolotājus atgriezties laikā, kad dzima mūsu tautas nacionālā identitāte, latviešu kultūra!',
        ],

        // Pakalpojumi
        'services' => [
            'title' => 'Pakalpojumi' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Ruckas muiža ir īstā vieta, kur svinēt dzīvi, īpašus notikumus, baudīt atpūtu vai organizēt kādu plašākam pulkam aktuālu pasākumu. Šī ir vieta, kur būt. Uzzini, ko mēs piedāvājam!',
        ],
        'stay' => [
            'title' => 'Nakšņošana Cēsīs' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Nedēļas nogale Cēsīs, atpūta ar ģimeni vai jaunlaulāto divvientulība – Ruckas muiža ir tās naktsmājas Vidzemē, kas neatstās vienaldzīgu! Pie mums pieejamas nakšņošanas iespējas, sākot no 30 €/personai, kādā no 7 numuriņiem.',
        ],
        'weddings' => [
            'title' => 'Kāzu svinību vieta Cēsīs' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Ierodoties muižā pa skaisto koku aleju, jau pārņem romantiska svētku gaisotne. To papildina mājīgais muižas iekārtojums un pasakaini skaistais parks un pagalms. Izbaudi mūsu sniegtās iespējas Tavu dzīves skaistāko svētku svinībām – izvēlies Ruckas muižu kā savu kāzu svinību vietu vai pieturvietu neaizmirstamām atmiņām!',
        ],
        'celebrations' => [
            'title' => 'Svinību vieta Cēsīs' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Svini savus īpašos dzīves notikumus Cēsīs! Mūsu muižas greznās telpas ir iekārtotas tā, lai ērti un mājīgi svinētu kā lielus, tā mazus svētkus! Baudi kopābūšanu ar kolēģiem, radiem, draugiem, kāzu viesiem vai sadarbības partneriem – telpas vienlīdz labi piemērotas kā privātu, tā korporatīvu svinību rīkošanai jebkurā gadalaikā.',
        ],
        'rent' => [
            'title' => 'Telpu noma Cēsīs' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Publiski pasākumi, konferences, semināri, nometnes un pat kultūras pasākumi – Ruckas muiža ir īstā vieta to norisei! Ja meklē plašas, autentiskas telpas, kas pārsteidz ar funkcionalitāti, – Tu esi īstajā vietā! Apstājies un iepazīsties ar cenu piedāvājumu.',
        ],
        'excursion' => [
            'title' => 'Ekskursija' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Atklāj Ruckas muižu un izzini, kā tā mainījusies kopš 1577. gada.',
        ],
        'photo_session' => [
            'title' => 'Fotosesija' . $afterTitle,
            'image' => 'images/services/photo-session/fotosesija.jpg',
            'desc'  => 'Fotogrāfe Karīna Jurciņa un Ruckas muiža piedāvā iespēju notvert īpašos dzīves mirkļus kadros!',
        ],

        // Piedāvājumi
        'special_offers' => [
            'title' => 'Īpašie piedāvājumi' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Sazinies ar mums, lai noskaidrotu, kādi īpašie piedāvājumi ir pieejami!',
        ],
        'rest_offers' => [
            'title' => 'Atpūtas iespējas' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Ruckas muiža ir vieta, kur piedzīvot, iepazīt, izzināt un sajust visai ģimenei! Ieskaties, kādas ir atpūtas iespējas Ruckas muižas kompleksā!',
        ],
        'gift_cards' => [
            'title' => 'Dāvanu kartes' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Ruckas muižas piedāvājuma klāsts ir plašs – katrs šeit atradīs, ko pieredzēt, sajust un izdzīvot. Pārsteidz kādu ar īpašu dāvanu – iespēju apmeklēt Ruckas muižu pēc saviem ieskatiem!',
        ],
        'painting_classes' => [
            'title' => 'Gleznošanas meistarklases' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Baiba Feoktistova rada krāšņas, drosmīgas un unikālas gleznas, kas pārsteidz ikvienu. Ja vēlies tās raudzīt savām acīm un iemācīties gleznot viņas vadībā – šī ir vieta Tev!',
        ],
        
        
        // Muiža runā
        'manor_speaks' => [
            'title' => 'Muiža runā' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Lasi un uzzini par aktuālajiem notikumiem Ruckas muižā!',
        ],
        'news' => [
            'title' => 'Aktualitātes' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Lasi un uzzini par aktuālajiem notikumiem Ruckas muižā!',
        ],
        'gabrans' => [
            'title' => 'Jāņa Gabrāna piezīmes' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Kultūras dzīves mutuļo, pateicoties Ruckas muižas dvēselei – Jānim Gabrānam.',
        ],
        'sprogis' => [
            'title' => 'Renāra Sproģa dienasgrāmata' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Atziņas un pieredzes stāsti no muižas saimnieka Renāra Sproģa skatupunkta.',
        ],

        'books' => [
            'title' => 'Grāmatas' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Iepazīsti un iegādājies kādu no "Mieram tuvu" grāmatām.',
        ],


        'gallery' => [
            'title' => 'Galerija' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Iepazīsti Ruckas muižu un notikumus tajā savām acīm!',
        ],
        'contacts' => [
            'title' => 'Kontakti' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Ruckas muiža Piebalgas iela 19, Cēsis, Cēsu novads, LV-4101 Tālr. nr.: +371 28237566 E-pasts: kultura@ruckasmuiza.lv',
        ],
        'trattoria' => [
            'title' => 'Trattoria' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Trattoria - Renāra Sproģa un ģimenes picērija, kafetērija.',
        ],
        'error' => [
            'title' => 'Kļūda' . $afterTitle,
            'image' => $defaultImage,
            'desc'  => 'Lapa nav atrasta vai notikusi servera kļūda',
        ],
    ]
@endphp

@isset($metaName)
    <title>{{ $settings[$metaName]['title'] }} </title>

    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $settings[$metaName]['title'] }}" />
    <meta property="og:image" content="{{ asset($settings[$metaName]['image']) }}" />
    <meta property="og:description" content="{{ $settings[$metaName]['desc'] }}" />
    
@endisset