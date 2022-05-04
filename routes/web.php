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
    $comics = config('comics');
    $headerNav = config('headerNav');
    $footerLinks = config('footerLinks');
    $footerLogos = config('footerLogos');
    return view('layouts.base', [
        "comics" => $comics,
        "headerNav" => $headerNav,
        "footerLinks" => $footerLinks,
        "footerLogos" => $footerLogos
    ]);
})->name('home');
