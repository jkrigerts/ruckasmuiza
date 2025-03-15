<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Events;
use Illuminate\Http\Request;
use \Illuminate\Support\Carbon;

class EventsController extends Controller
{
    public function index(Request $request)
    {

        if ($request->monthOffset == null) return redirect(route('events', ['monthOffset' => 0])); // month offset pārbaude
        return view('events.index');
    }


    public function show(string $id)
    {
        $event = Events::where("published", true)->find($id);
        $date = Carbon::parse($event->happens_at)->translatedFormat('Y.') . " gada " . Carbon::parse($event->happens_at)->translatedFormat('j. M ');
        return view("events.show", compact('event', 'date'));
    }
}
