<?php

namespace Database\Seeders;

use App\Models\Events;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // April 2024
        Events::create([
            "type_id" => "7",
            "time" => "17:30",
            "timeLong" => "",
            "title" => "Harija Potera fanu klubs",
            "info" => "Tikšanās un darbošanās kopā",
            "infoLong" => "Harija Potera fanu kluba tikšanās skolas vecuma bērniem.",
            "price" => "7 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-02',
            'published' => true
        ]);
        Events::create([
            "type_id" => "3",
            "time" => "18:30",
            "timeLong" => "",
            "title" => "Kultūrvēsture caur rakstību",
            "info" => "Vada Astra Reine",
            "infoLong" => "Nodarbību vada māksliniece Astra Reine.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-04',
            'published' => true
        ]);
        Events::create([
            "type_id" => "8",
            "time" => "10:00 / 11:30",
            "timeLong" => "10:00 (3 - 5 gadi) / 11:30 (6 - 9 gadi)",
            "title" => "Dari un radi kopā!",
            "info" => "Kopā ar Inutu Briedi",
            "infoLong" => "Bērnu radošas darbošanās rīts \"Dari un radi kopā!\" kopā ar Cēsu teātra aktrisi Inutu Briedi. Dziedāsim, rotaļāsimies un radīsim kopā! 10:00 aicināti 3 - 5 gadus veci, bet 11:30 aicināti 6 - 9 gadus veci bērni.",
            "price" => "7 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-06',
            'published' => true
        ]);
        Events::create([
            "type_id" => "2",
            "time" => "18:00",
            "timeLong" => "",
            "title" => "Kas jāzina par olīveļļām?",
            "info" => "Vada Ingus Linē",
            "infoLong" => "Ingus Linē dalīsies ar savu pieredzi par olīveļļām.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-10',
            'published' => true
        ]);
        Events::create([
            "type_id" => "3",
            "time" => "18:30",
            "timeLong" => "",
            "title" => "Kultūrvēsture caur rakstību",
            "info" => "Vada Astra Reine",
            "infoLong" => "Nodarbību vada māksliniece Astra Reine.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-11',
            'published' => true
        ]);
        Events::create([
            "type_id" => "1",
            "time" => "18:30",
            "timeLong" => "",
            "title" => "Ruckas muižas dzejas lasījumi",
            "info" => "Ar Cēsu teātra aktieriem",
            "infoLong" => "Ar dzeju un dziesmām viesosies Cēsu Teātra aktieri.",
            "price" => "10 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-12',
            'published' => true
        ]);
        Events::create([
            "type_id" => "8",
            "time" => "10:00 / 11:30",
            "timeLong" => "10:00 (3 - 5 gadi) / 11:30 (6 - 9 gadi)",
            "title" => "Zīmētprieks. Troļļu krāsošana",
            "info" => "Kopā ar Baibu Leitenu",
            "infoLong" => "Bērnu radošas darbošanās rīts kopā ar \"Zīmētprieks\" mākslinieci Baibu Leitenu. Gleznošanas nodarbībās šoreiz krāsosim multiplikācijas tēlus Troļļus! 10:00 aicināti 3 - 5 gadus veci, bet 11:30 aicināti 6 - 9 gadus veci bērni.",
            "price" => "7 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-13',
            'published' => true
        ]);
        Events::create([
            "type_id" => "7",
            "time" => "17:30",
            "timeLong" => "",
            "title" => "Harija Potera fanu klubs",
            "info" => "Tikšanās un darbošanās kopā",
            "infoLong" => "Harija Potera fanu kluba tikšanās skolas vecuma bērniem.",
            "price" => "7 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-16',
            'published' => true
        ]);
        Events::create([
            "type_id" => "4",
            "time" => "18:00",
            "timeLong" => "",
            "title" => "Pavasara pušķu veidošana",
            "info" => "Kopā ar Anci",
            "infoLong" => "Meistarklase \"Pavasara pušķu veidošana\" ar Puķu meiteni Anci. Visi nepieciešamie materiāli iekļauti cenā!",
            "price" => "35 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-16',
            'published' => true
        ]);
        Events::create([
            "type_id" => "5",
            "time" => "18:30",
            "timeLong" => "",
            "title" => "Muižas mūzika",
            "info" => "Larisa Kaimiņa, Olga Kohņuka, Laura Mellīna Kaimiņa",
            "infoLong" => "Koncerts \"Muižas mūzika\", kurā muzicēs vijolniece Larisa Kaimiņa, pianiste Olga Kohņuka un flautiste Laura Mellīna Kaimiņa.",
            "price" => "10 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-19',
            'published' => true
        ]);
        Events::create([
            "type_id" => "8",
            "time" => "11:00 / 13:00",
            "timeLong" => "",
            "title" => "Leļļu izrāde \"Ceļojums\"",
            "info" => "Kopā ar leļļu teātra studiju \"Ilze\"",
            "infoLong" => "Improvizācijas leļļu teātra studijas \"Ilze\" izrāde \"Ceļojums\"  bērniem un vecākiem!",
            "price" => "7 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-20',
            'published' => true
        ]);
        Events::create([
            "type_id" => "4",
            "time" => "18:00",
            "timeLong" => "",
            "title" => "Tautasdziesmu mandalas veidošana",
            "info" => "Sarmītes Eidukas vadībā",
            "infoLong" => "Tautasdziesmu mandalas veidošana Sarmītes Eidukas vadībā. Visi nepieciešamie materiāli iekļauti cenā!",
            "price" => "45 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-23',
            'published' => true
        ]);
        Events::create([
            "type_id" => "1",
            "time" => "18:30",
            "timeLong" => "",
            "title" => "Pie Kaķīša dzirnavām viesojoties",
            "info" => "Kopā ar Inutu Briedi",
            "infoLong" => "Izklaidējošs stāsts par un ap dzirnavām. Kopā ar aktrisi Inutu Briedi.",
            "price" => "10 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-24',
            'published' => true
        ]);
        Events::create([
            "type_id" => "8",
            "time" => "10:00 / 11:30",
            "timeLong" => "10:00 (3 - 5 gadi) / 11:30 (6 - 9 gadi)",
            "title" => "Dari un radi kopā!",
            "info" => "Kopā ar Inutu Briedi",
            "infoLong" => "Bērnu radošas darbošanās rīts \"Dari un radi kopā!\" kopā ar Cēsu teātra aktrisi Inutu Briedi. Dziedāsim, rotaļāsimies un radīsim kopā! 10:00 aicināti 3 - 5 gadus veci, bet 11:30 aicināti 6 - 9 gadus veci bērni.",
            "price" => "7 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-27',
            'published' => true
        ]);
        Events::create([
            "type_id" => "4",
            "time" => "18:00",
            "timeLong" => "",
            "title" => "Dzīvības zieda punktiņmandalas veidošana",
            "info" => "Sarmītes Eidukas vadībā",
            "infoLong" => "Meistarklase \"Dzīvības zieda punktiņmandalas veidošana\" Sarmītes Eidukas vadībā. Visi nepieciešamie materiāli iekļauti cenā!",
            "price" => "45 EUR",
            'cancelled' => false,
            'happens_at' => '2024-04-30',
            'published' => true
        ]);   
        // March 2024
        Events::create([
            "type_id" => "9",
            "time" => "18:30",
            "timeLong" => "",
            "title" => "Sieviete ar dzeltenām brillēm",
            "info" => "Kopā ar Regīnu Devīti",
            "infoLong" => "Regīnas Devītes monoizrāde ar komēdijas elementiem \"Sieviete ar dzeltenām brillēm\"",
            "price" => "15 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-01',
            'published' => true
        ]);
        Events::create([
            "type_id" => "8",
            "time" => "10:00 / 11:30",
            "timeLong" => "10:00 (3 - 5 gadi) / 11:30 (6 - 9 gadi)",
            "title" => "Dari un radi kopā!",
            "info" => "Kopā ar Inutu Briedi",
            "infoLong" => "Bērnu radošas darbošanās rīts \"Dari un radi kopā!\" kopā ar aktrisi Inutu Briedi. Dziedāsim, rotaļāsimies un radīsim kopā! 10:00 aicināti 3 - 5 gadus veci, bet 11:30 aicināti 6 - 9 gadus veci bērni.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-02',
            'published' => true
        ]);
        Events::create([
            "type_id" => "7",
            "time" => "17:30",
            "timeLong" => "",
            "title" => "Harija Potera fanu klubs",
            "info" => "Kino vakars ar popkornu",
            "infoLong" => "Harija Potera fanu kluba kino vakars ar popkornu skolas vecuma bērniem.",
            "price" => "5 EUR (kluba biedriem: 4 EUR)",
            'cancelled' => false,
            'happens_at' => '2024-03-05',
            'published' => true
        ]);
        Events::create([
            "type_id" => "2",
            "time" => "18:30",
            "timeLong" => "",
            "title" => "Par un ap tomātiem",
            "info" => "Andra Mihaļova lekcija",
            "infoLong" => "Andra Mihaļova lekcija lekcija par tomātiem.",
            "price" => "Ieeja par ziedojumu",
            'cancelled' => false,
            'happens_at' => '2024-03-07',
            'published' => true
        ]);
        Events::create([
            "type_id" => "1",
            "time" => "18:00",
            "timeLong" => "",
            "title" => "Bez skaistām sievietēm nav dzīvot vērts!",
            "info" => "Ar Cēsu teātra aktieriem",
            "infoLong" => "Sieviešu dienas dzejas vakars muižā. Dzejiski, muzikāli izklaidējoša programma kopā ar Cēsu teātra aktieriem Juri Krūzi un Jāni Gabrānu.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-08',
            'published' => true
        ]);
        Events::create([
            "type_id" => "8",
            "time" => "10:00 / 11:30",
            "timeLong" => "10:00 (3 - 5 gadi) / 11:30 (6 - 9 gadi)",
            "title" => "Dari un radi kopā!",
            "info" => "Kopā ar Inutu Briedi",
            "infoLong" => "Bērnu radošas darbošanās rīts \"Dari un radi kopā!\" kopā ar aktrisi Inutu Briedi. Dziedāsim, rotaļāsimies un radīsim kopā! 10:00 aicināti 3 - 5 gadus veci, bet 11:30 aicināti 6 - 9 gadus veci bērni.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-09',
            'published' => true
        ]);
        Events::create([
            "type_id" => "4",
            "time" => "18:00 - 22:00",
            "timeLong" => "",
            "title" => "Punktiņmandalas veidošana iesācējiem",
            "info" => "Sarmītes Eidukas vadībā",
            "infoLong" => "Punktiņmandalas veidošana iesācējiem Sarmītes Eidukas vadībā. Cenā iekļauti materiāli un siltie dzērieni.",
            "price" => "25 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-13',
            'published' => true
        ]);
        Events::create([
            "type_id" => "3",
            "time" => "18:30",
            "timeLong" => "",
            "title" => "Kultūrvēsture caur rakstību",
            "info" => "Vada Astra Reine",
            "infoLong" => "Nodarbību vada māksliniece Astra Reine.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-14',
            'published' => true
        ]);
        Events::create([
            "type_id" => "1",
            "time" => "18:30",
            "timeLong" => "",
            "title" => "Dzejnieks. Dzeja. Dziesma.",
            "info" => "Kopā ar Elīnu Riemeri un Lāsmu Vasmani",
            "infoLong" => "Muzikālas sarunas ar Elīnu Riemeri un Lāsmu Vasmani.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-15',
            'published' => true
        ]);
        Events::create([
            "type_id" => "8",
            "time" => "10:00 / 11:30",
            "timeLong" => "10:00 (3 - 5 gadi) / 11:30 (6 - 9 gadi)",
            "title" => "Tutas lietu Lapsas un Feneka gatavošana",
            "info" => "Kopā ar Baibu Leitenu",
            "infoLong" => "Bērnu radošas darbošanās rīts kopā ar \"Zīmētprieks\" mākslinieci Baibu Leitenu. 10:00 aicināti 3 - 5 gadus veci, bet 11:30 aicināti 6 - 9 gadus veci bērni.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-16',
            'published' => true
        ]);
        Events::create([
            "type_id" => "7",
            "time" => "17:30",
            "timeLong" => "",
            "title" => "Harija Potera fanu klubs",
            "info" => "Tikšanās un darbošanās kopā",
            "infoLong" => "Harija Potera fanu kluba tikšanās skolas vecuma bērniem.",
            "price" => "7 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-19',
            'published' => true
        ]);
        Events::create([
            "type_id" => "1",
            "time" => "18:30",
            "timeLong" => "",
            "title" => "Pie Kaķīša dzirnavām viesojoties",
            "info" => "Kopā ar Inutu Briedi",
            "infoLong" => "Izklaidējošs stāsts par un ap dzirnavām. Kopā ar aktrisi Inutu Briedi.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-20',
            'published' => true
        ]);
        Events::create([
            "type_id" => "3",
            "time" => "18:30",
            "timeLong" => "",
            "title" => "Kultūrvēsture caur rakstību",
            "info" => "Vada Astra Reine",
            "infoLong" => "Nodarbību vada lektore, māksliniece Astra Reine.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-21',
            'published' => true
        ]);
        Events::create([
            "type_id" => "1",
            "time" => "18:30",
            "timeLong" => "",
            "title" => "Lieldienas gaidot",
            "info" => "Ieva Lapšāne ar ģimeni",
            "infoLong" => "Koncerts Lieldienu gaisotnē, kurā uzstājas Ieva Lapšāne ar ģimeni.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-22',
            'published' => true
        ]);
        Events::create([
            "type_id" => "8",
            "time" => "10:00 / 11:30",
            "timeLong" => "10:00 (3 - 5 gadi) / 11:30 (6 - 9 gadi)",
            "title" => "Kroņu gatavošana",
            "info" => "Kopā ar Baibu Leitenu",
            "infoLong" => "Bērnu radošas darbošanās rīts kopā ar \"Zīmētprieks\" mākslinieci Baibu Leitenu. 10:00 aicināti 3 - 5 gadus veci, bet 11:30 aicināti 6 - 9 gadus veci bērni.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-23',
            'published' => true
        ]);
        Events::create([
            "type_id" => "4",
            "time" => "11:30 - 16:30",
            "timeLong" => "",
            "title" => "Lielformāta gleznošana",
            "info" => "Baibas Feoktistovas vadībā",
            "infoLong" => "Lielformāta gleznošanas meistarklase Baibas Feoktistovas vadībā. Cenā iekļauti materiāli un siltie dzērieni.",
            "price" => "95 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-23',
            'published' => true
        ]);
        Events::create([
            "type_id" => "4",
            "time" => "18:00 - 22:00",
            "timeLong" => "",
            "title" => "Punktiņmandalas veidošana uz audekla",
            "info" => "Sarmītes Eidukas vadībā",
            "infoLong" => "Punktiņmandalas veidošana uz audeklā (20X20) Sarmītes Eidukas vadībā. Cenā iekļauti materiāli un siltie dzērieni.",
            "price" => "30 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-28',
            'published' => true
        ]);
        Events::create([
            "type_id" => "8",
            "time" => "10:00 / 11:30",
            "timeLong" => "10:00 (3 - 5 gadi) / 11:30 (6 - 9 gadi)",
            "title" => "Dari un radi kopā!",
            "info" => "Kopā ar Inutu Briedi",
            "infoLong" => "Bērnu radošas darbošanās rīts \"Dari un radi kopā!\" kopā ar aktrisi Inutu Briedi. Dziedāsim, rotaļāsimies un radīsim kopā! 10:00 aicināti 3 - 5 gadus veci, bet 11:30 aicināti 6 - 9 gadus veci bērni.",
            "price" => "5 EUR",
            'cancelled' => false,
            'happens_at' => '2024-03-30',
            'published' => true
        ]);
    }
}
