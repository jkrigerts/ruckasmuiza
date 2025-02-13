<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use Livewire\Livewire;

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

Route::get('/', function () { return view('landing');})
       ->name("landing");

Route::group(
       [
              "prefix" => "/dzivas-gleznas",
              "as" => "living-paintings.",
       ],
       function () {
              Route::get('/', function () {
                     return view('living-paintings/living-paintings');
              })->name("");
              Route::get('/manas-iedvesmas-darzi', function () {
                     return view('living-paintings/gardens');
              })->name("gardens");
              Route::get('/mits-cilveks-daba', function () {
                     return view('living-paintings/myth');
              })->name("myth");
              Route::get('/skolas-soma', function () {
                     return view('living-paintings/school-bag');
              })->name("school-bag");
       }
);

Route::get('/par-muizu', function () { return view('about');})
       ->name("about");

Route::group(
       [
              "prefix" => "/pakalpojumi",
              "as" => "services.",
       ],
       function () {

              Route::get('/gramatas/{id}', [BookController::class, "show"]);
              Route::get('/', function () {
                     return view('services/services');
              })->name("");
              Route::get('/naksnosana', function () {
                     return view('services/stay');
              })->name("stay");
              Route::get('/svinibas', function () {
                     return view('services/celebrations');
              })->name("celebrations");
              Route::get('/fotosesija', function () {
                     return view('services/photo_session');
              })->name("photo_session");

              Route::get('/davanu-kartes', function () {
                     return view('services/gift_cards');
              })->name("gift_cards");

              Route::get('/gleznosanas-meistarklases', function () {
                     return view('services/painting_classes');
              })->name("painting_classes");

              Route::get('/gramatas', [BookController::class, "index"])
                     ->name("books");
              // Route::get('/noma', function () {
              //        return view('services/rent');
              // })->name("rent");
              // Route::get('/ekskursija', function () {
              //        return view('services/excursion');
              // })->name("excursion");
       }
);


Route::get('/pasakumi', function (Request $req) {
       if ($req->monthOffset == null) return redirect(route('events', ['monthOffset' => 0])); // month offset pārbaude
       return view('events');
})->name("events");


// Route::group(
//        [
//               "prefix" => "/piedavajumi",
//               "as" => "offers.",
//        ],
//        function () {
//               // Route::get('/ipasie-piedavajumi', function () {
//               //        return view('offers/special_offers');
//               // })->name("special_offers");
              
              
//               // Route::get('/gramatas/{id}', [BookController::class, "show"]);
              
//        }
// );

Route::group(
       [
              "prefix" => "/muiza-runa",
              "as" => "blog.",
       ],
       function () {
              Route::get('/renars-sprogis', [BlogController::class, "index"])
                     ->name("sprogis");
              // Route::get('/janis-gabrans', [BlogController::class, "index"])
              //        ->name("gabrans");
              Route::get('/renars-sprogis/{id}', [BlogController::class, "show"]);
              // Route::get('/janis-gabrans/{id}', [BlogController::class, "show"]);
       }
);

Route::get('/galerija', [GalleryController::class, "index"])
       ->name("gallery");

Route::get('/galerija/{id}', [GalleryController::class, "show"]);

Route::get('/kontakti', function () { return view('contacts');})
       ->name("contacts");

// Route::get('/trattoria', function () { return view('trattoria');})
//        ->name("trattoria");

Route::group(
       [
              "prefix" => "/trattoria",
              "as" => "trattoria.",
       ],
       function () {
              // Route::get('/', function () {
              //        return view('services/services');
              // })->name("");
              Route::get('/edienkarte', function () {
                     return view('trattoria/edienkarte');
              })->name("edienkarte");
              Route::get('/piegade', function () {
                     return view('trattoria/piegade');
              })->name("piegade");
              Route::get('/darba-laiks', function () {
                     return view('trattoria/darba_laiks');
              })->name("darba_laiks");
              Route::get('/par-mums', function () {
                     return view('trattoria/par_mums');
              })->name("par_mums");
       }
);
