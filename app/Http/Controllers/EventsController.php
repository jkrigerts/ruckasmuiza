<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * This is a PHP code snippet for the EventsController class.
     * 
     * The index method is responsible for handling the request and returning the view for the 'events' page.
     * It takes a Request object as a parameter and validates the 'month' and 'year' parameters.
     * If the validation passes, it sets the current date based on the provided month and year, or uses the current date if not provided.
     * It then calculates the first and last day of the month and stores them in variables.
     * 
     * The method creates an empty array called $return to store the dates and events.
     * It adds the days before the current month to the $return array.
     * It then adds the days of the current month to the $return array, along with any events that happen on those dates.
     * Finally, it adds the days after the current month to the $return array if needed.
     * 
     * The $return array is then dumped using the dd() function for debugging purposes.
     * The method returns the 'events' view.
     */
    public function index(Request $req){
        $dateFormat = 'Y-m-d';
        $req->validate([
            'month' => 'numeric|integer|between:1,12',
            'year' => 'numeric|integer|between:'. now()->year - 2 .','. now()->year + 2 .''

        ]);

        $today = isset($req->month) ? Carbon::parse(now()->year . '-' . $req->month . '-' . now()->day) : now();
        $today = Carbon::parse(
            (isset($req->year) ? $req->year : now()->year) . '-' .
            (isset($req->month) ? $req->month : now()->month) . '-' .
            now()->day
        );

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
            'aprīls',
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
        // $lastDayPlace = Carbon::parse($today)->endOfMonth()->weekday();

        $return = []; // return array with dates and arrays with events
        
        // add days before this month
        for($i = $firstDayPlace - 1; $i >= 1; $i--){
            $day = Carbon::parse($today)->startOfMonth()->subDays($i);
            $dayName = $day->format($dateFormat);
            $events = Events::where('happens_at', $dayName)->with('type')->get();

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
            $events = Events::where('happens_at', $currentDate)->with('type')->get();
            
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
            $events = Events::where('happens_at', $currentDate)->with('type')->get();
            
            $return[$currentDate] = [
                'monthName' => $monthsKas[Carbon::parse($currentDate)->month - 1],
                'day' => Carbon::parse($currentDate)->day,
                'thisMonth' => false,
                'events' => $events,
                'eventCount' => count($events),
            ];
        }
        
        return view('events', [
            'calendarData' => array_chunk($return, 7, true),
            'previousMonth' => $monthsKas[$today->subMonth()->month - 1],
            'thisMonth' => $monthsKa[$today->addMonth()->month - 1],
            'nextMonth' => $monthsKas[$today->addMonth()->month - 1],
            'monthsSelect' => $monthsKa,
            'thisYear' => $today->year,

        ]);
    }
}
