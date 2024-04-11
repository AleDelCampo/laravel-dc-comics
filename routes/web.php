<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/item', function () {
    return view('secondpage');
})->name('item');

