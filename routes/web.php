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
 
Route::get('/counter', Counter::class);


Route::get('/', function () {return view('landing');})
       ->name("landing");
Route::get('/par-muizu', function () { return view('about');})
       ->name("about");
Route::get('/afisa', function () { return view('events');})
       ->name("events");
Route::get('/izklaide', function () {return view('services');})
       ->name("services");
Route::get('/naksnosana', function () { return view('stay');})
       ->name("stay");
Route::get('/blogs', function () { return view('blog');})
       ->name("blog");
Route::get('/galerija', function () { return view('gallery');})
       ->name("gallery");