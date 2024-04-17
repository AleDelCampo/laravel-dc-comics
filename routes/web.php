<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;


Route::resource('comics', ComicController::class);

Route::get('/', [PageController::class, 'home'])->name('home');

