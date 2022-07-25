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
    $links = [
        [
            'link'=> 'Chi siamo ?'
        ],
        [
            'link'=> 'I nostri lavori'
        ],
        [
            'link'=> 'Florian è un eroe?'
        ]
        ];

    return view('home', [
        'titolo' => $title,
        'homeLinks' => $links

    ]);
});
