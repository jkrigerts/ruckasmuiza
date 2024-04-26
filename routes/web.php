<?php

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


Route::get('/par-muizu', function () { return view('about');})
       ->name("about");

Route::group(
       [
              "prefix" => "/pakalpojumi",
              "as" => "services.",
       ],
       function () {
              Route::get('/', function () {
                     return view('services/services');
              })->name("");
              Route::get('/naksnosana', function () {
                     return view('services/stay');
              })->name("stay");
              Route::get('/kazas', function () {
                     return view('services/weddings');
              })->name("weddings");
              Route::get('/svinibas', function () {
                     return view('services/celebrations');
              })->name("celebrations");
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


Route::group(
       [
              "prefix" => "/piedavajumi",
              "as" => "offers.",
       ],
       function () {
              // Route::get('/ipasie-piedavajumi', function () {
              //        return view('offers/special_offers');
              // })->name("special_offers");
              Route::get('/davanu-kartes', function () {
                     return view('offers/gift_cards');
              })->name("gift_cards");
              Route::get('/gramatas', [BookController::class, "index"])
                     ->name("books");

              Route::get('/gramatas/{id}', [BookController::class, "show"]);
       }
);

Route::group(
       [
              "prefix" => "/muiza-runa",
              "as" => "blog.",
       ],
       function () {
              // Route::get('/aktualitates', function () {
              //        $blogPost = Blog::where('section_id', 3)->where("published", true)->get();
              //        return view('blog/news', ['blogPosts' => $blogPost]);
              // })->name("news");
              Route::get('/renars-sprogis', function () {
                     $blogPost = Blog::where('section_id', 1)->where("published", true)->get();
                     return view('blog/sprogis', ['blogPosts' => $blogPost]);
              })->name("sprogis");
              Route::get('/janis-gabrans', function () {
                     $blogPost = Blog::where('section_id', 2)->where("published", true)->get();
                     return view('blog/gabrans', ['blogPosts' => $blogPost]);
              })->name("gabrans");
              Route::get('/{id}', function ($id) {
                     $blogPost = Blog::where('id', $id)->firstOrFail();
                     return view('blog/blog-post', ['blogPost' => $blogPost]);
              })->name("id");
       }
);

Route::get('/galerija', [GalleryController::class, "index"])
       ->name("gallery");

Route::get('/galerija/{id}', [GalleryController::class, "show"]);

Route::get('/kontakti', function () { return view('contacts');})
       ->name("contacts");
