<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aereoporti', 'MainController@index')
    ->  name('aer-index');

Route::post('/result', 'MainController@result')
      ->  name('result');
