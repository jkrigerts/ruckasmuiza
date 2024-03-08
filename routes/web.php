<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

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

// Route::get('/{locale?}', function ($locale = null) {
//     if (isset($locale) && in_array($locale, config("app.available_locales"))) {
//         app()->setLocale($locale);
//     }
//     return view('welcome');
// });

// Route::prefix('{locale}')
//     ->where(['locale' => '[a-zA-Z]{2}'])
//     ->middleware('setlocale')
//     ->group(function () {
//         Route::get('/', function () {
//             return view('welcome');
//         });
//         Route::get('/counter', Counter::class);
//     });

// Route::get('/', function () {
//     return redirect(app()->getLocale());
// });

Route::get('/', function () {
 return view('welcome');
});

Route::get('/en', function () {
    app()->setLocale("en");
    return view('welcome');
   });