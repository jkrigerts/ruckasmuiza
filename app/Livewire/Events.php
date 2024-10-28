<?php

namespace App\Livewire;

use App\Livewire\Events\Event;
use Livewire\Component;

use App\Models\Events as EventsModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Livewire\Attributes\Url;

class Events extends Component
{
    public $calendarData;
    public $previousMonth;
    public $thisMonth;
    public $nextMonth;
    public $monthsSelect;
    public $thisYear;
    public $eventFromDB;

    #[Url(except: '')]
    public $monthOffset = 0; // this is the way arrow buttons are going to work now()->addMonths($monthOffset)

    #[Url(history: true)]
    public $event = 0;

    

    public function data(){
        $dateFormat = 'Y-m-d';
        
        /* 
            Explanation for further code:
                now() -> gets current date
                startOfMonth() -> 
                    is very important because we are going to use addMonths,
                    and if todays date is 31st, and next month wont have 31 days in it,
                    it will eventually skip two months
                addMonths() -> 
                    after setting to the first month of the day, we can safely add months,
                    without the worry that it will skip two months
                format() -> formats the date according to the $dateFormat value
        */
        $this->eventFromDB = EventsModel::where("id", $this->event)->first();
        if ($this->eventFromDB) {
            $this->monthOffset = Carbon::parse(now()->startOfMonth())->diffInMonths(Carbon::parse($this->eventFromDB["happens_at"])->startOfMonth(), false);
        }
        
      
        $today = Carbon::parse(now()->startOfMonth()->addMonths($this->monthOffset)->format($dateFormat));

        $monthsKa = [ // atbild uz jautājumu Kā?
            'janvāra',
            'februāra',
            'marta',
            'aprīļa',
            'maija',
            'jūnija',
            'jūlija',
            'augusta',
            'septembra',
            'oktobra',
            'novembra',
            'decembra'
        ];

        $monthsKas = [ // atbild uz jautājumu Kas?
            'janvāris',
            'februāris',
            'marts',
            'aprīlis',
            'maijs',
            'jūnijs',
            'jūlijs',
            'augusts',
            'septembris',
            'oktobris',
            'novembris',
            'decembris'
        ];


        $firstDayOfMonth = Carbon::parse($today)->startOfMonth()->format($dateFormat);
        $firstDayPlace = Carbon::parse($today)->startOfMonth()->weekday();

        $lastDayOfMonth = Carbon::parse($today)->endOfMonth()->format($dateFormat);

        $return = []; // return array with dates and arrays with events
        
        // add days before this month
        for($i = $firstDayPlace - 1; $i >= 1; $i--){
            $day = Carbon::parse($today)->startOfMonth()->subDays($i);
            $dayName = $day->format($dateFormat);
            // $events = EventsModal::where("published", true)->where('happens_at', $dayName)->with('type')->get();
            $events = [];
            $return[$dayName] = [
                'monthName' => $monthsKas[$day->month - 1],
                'day' => $day->day,
                'thisMonth' => false,
                'events' => $events,
                'eventCount' => count($events),
            ];
        }
        
        // add this month days
        $currentDate = $firstDayOfMonth;
        while ($currentDate <= $lastDayOfMonth) {
            $events = EventsModel::where("published", true)->where('happens_at', $currentDate)->with('type')->get();
            
            $return[$currentDate] = [
                'monthName' => $monthsKas[Carbon::parse($currentDate)->month - 1],
                'day' => Carbon::parse($currentDate)->day,
                'thisMonth' => true,
                'events' => $events,
                'eventCount' => count($events),
            ];
            $currentDate = Carbon::parse($currentDate)->addDay()->format($dateFormat);
        }

        // add days after this month if needed
        $currentDate = $lastDayOfMonth;
        while(count($return) < 35){
            $currentDate = Carbon::parse($currentDate)->addDay()->format($dateFormat);
            //$events = EventsModal::where("published", true)->where('happens_at', $currentDate)->with('type')->get();
            $events = [];
            $return[$currentDate] = [
                'monthName' => $monthsKas[Carbon::parse($currentDate)->month - 1],
                'day' => Carbon::parse($currentDate)->day,
                'thisMonth' => false,
                'events' => $events,
                'eventCount' => count($events),
            ];
        }

        // Fix anomaly that accures sometimes, and required sixth line in the calendar
        if(Carbon::parse($currentDate)->dayOfWeek == 1){
            while(count($return) < 42){
                $currentDate = Carbon::parse($currentDate)->addDay()->format($dateFormat);
                $events = EventsModel::where("published", true)->where('happens_at', $currentDate)->with('type')->get();
                
                $return[$currentDate] = [
                    'monthName' => $monthsKas[Carbon::parse($currentDate)->month - 1],
                    'day' => Carbon::parse($currentDate)->day,
                    'thisMonth' => false,
                    'events' => $events,
                    'eventCount' => count($events),
                ];
            }
        }
        
        $this->calendarData = array_chunk($return, 7, true);
        $this->thisYear = $today->year;
        $this->previousMonth = $monthsKas[$today->subMonth()->month - 1];
        $this->thisMonth = ucfirst($monthsKas[$today->addMonth()->month - 1]);
        $this->nextMonth = $monthsKas[$today->addMonth()->month - 1];
        $this->monthsSelect = $monthsKa;

    }

    public function render()
    {
        $this->data();
        return view('livewire.events');
    }


    // TODO maybe: add checks and limitations for users
    public function up(){
        $this->monthOffset++;
        $this->data();
        $this->dispatch('data-updated');
    }

    public function down(){
        $this->monthOffset--;
        $this->data();
        $this->dispatch('data-updated');
    }
}
