<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('mahatat', 'mahatat')
    ->name('mahatat');

Route::view('jemg', 'jemg')
    ->name('jemg');

Route::view('barker', 'barker')
    ->name('barker');
