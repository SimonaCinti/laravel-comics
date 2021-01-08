<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * HOME PAGE
 */

// A: Metodo diretto

// Route::get('/', function () {
//     $comics = config('comics');

     // dd($comics);

//     return view('home', compact('comics'));
// })->name('home');

// B: Metodo Controller

Route::get('/', 'HomeController@index')->name('home');

/**
 * COMICS DETAIL *
 */

 Route::get('/comic/{slug}', 'ComicController@show')->name('comic-detail');