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

Route::get('/', function () {
    return view('guest.home');
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    $merchNav = config('merchNav');
        return view('guest.comics', ["comics" => $comics , "merchNav" => $merchNav]);
})->name('comics');
