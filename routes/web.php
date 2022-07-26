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
    $title = [
        'firstword' => 'HELLO',
        'lastword' => 'WORLD'
    ];

    return view('home', [
        'titolo' => $title,

    ]);
})->name("home");

Route::get('/chi-siamo', function () {
    $title = [
        'firstword' => 'CHI ',
        'lastword' => ' SIAMO ?'
    ];

    return view('chi-siamo', [
        'titolo' => $title,

    ]);
})->name("about_us");
