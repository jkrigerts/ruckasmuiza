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
            'year' => 'numeric|integer|between:2020,3000'

        ]);

        $today = isset($req->month) ? Carbon::parse(now()->year . '-' . $req->month . '-' . now()->day) : now();
        $today = Carbon::parse(
            (isset($req->year) ? $req->year : now()->year) . '-' .
            (isset($req->month) ? $req->month : now()->month) . '-' .
            now()->day
        );


        $firstDayOfMonth = Carbon::parse($today)->startOfMonth()->format($dateFormat);
        $firstDayPlace = Carbon::parse($today)->startOfMonth()->weekday();

        $lastDayOfMonth = Carbon::parse($today)->endOfMonth()->format($dateFormat);
        // $lastDayPlace = Carbon::parse($today)->endOfMonth()->weekday();

        $return = []; // return array with dates and arrays with events
        
        // add days before this month
        for($i = $firstDayPlace - 1; $i >= 1; $i--){
            $day = Carbon::parse($today)->startOfMonth()->subDays($i)->format($dateFormat);
            $return[$day] = [
                'thisMonth' => false,
                'events' => Events::where('happens_at', $day)->with('type')->get(),
            ];
        }
        
        // add this month days
        $currentDate = $firstDayOfMonth;
        while ($currentDate <= $lastDayOfMonth) {
            $return[$currentDate] = [
                'thisMonth' => true,
                'events' => Events::where('happens_at', $currentDate)->with('type')->get(),
            ];
            $currentDate = Carbon::parse($currentDate)->addDay()->format($dateFormat);
        }

        // add days after this month if needed
        $currentDate = $lastDayOfMonth;
        while(count($return) < 35){
            $currentDate = Carbon::parse($currentDate)->addDay()->format($dateFormat);
            $return[$currentDate] = [
                'thisMonth' => false,
                'events' => Events::where('happens_at', $currentDate)->with('type')->get(),
            ];
        }
        
        //dd($return);
        return view('events', [
            'calendarData' => $return
        ]);
    }
}
