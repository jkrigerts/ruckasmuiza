<?php

use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('landing');})
       ->name("landing");

Route::get('/par-muizu', function () { return view('about');})
       ->name("about");

Route::group([
       "prefix" => "/pakalpojumi",
       "as" => "services.",
       ],
       function() {
              Route::get('/', function () {return view('services/services');})->name("");
              Route::get('/viesnica', function () {return view('services/stay');})->name("stay");
              Route::get('/kazas', function () {return view('services/weddings');})->name("weddings");
              Route::get('/svinibas', function () {return view('services/celebrations');})->name("celebrations");
              Route::get('/noma', function () {return view('services/rent');})->name("rent");
       }
       );


Route::get('/pasakumi', [\App\Http\Controllers\EventsController::class, 'index'])
       ->name("events");

Route::group([
       "prefix" => "/piedavajumi",
       "as" => "offers.",
       ],
       function() {
              Route::get('/ipasie-piedavajumi', function () {return view('offers/special_offers');})->name("special_offers");
              Route::get('/atputa', function () {return view('offers/rest');})->name("rest");
              Route::get('/davanu-kartes', function () {return view('offers/gift_cards');})->name("gift_cards");
       }
       );

Route::group([
       "prefix" => "/muiza-runa",
       "as" => "blog.",
       ],
       function() {
       Route::get('/aktualitates', function () {return view('blog/news');})->name("news");
       Route::get('/renars-sprogis', function () {return view('blog/sprogis');})->name("sprogis");
       Route::get('/janis-gabrans', function () {return view('blog/gabrans');})->name("gabrans");
       }
);

Route::get('/galerija', function () { return view('gallery');})
       ->name("gallery");

Route::get('/kontakti', function () { return view('contacts');})
       ->name("contacts");