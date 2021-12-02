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

Route::get('/doping_music', function () {
    return view('doping_music');
});

Route::get('/doping_artist_browse', function () {
    return view('doping_artist_browse');
});

Route::get('/doping_browse', function () {
    return view('doping_browse');
});

Route::get('/doping_artist', function () {
    return view('doping_artist');
});

Route::get('/doping_album', function () {
    return view('doping_album');
});