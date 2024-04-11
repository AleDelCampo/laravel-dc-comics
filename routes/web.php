<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;


Route::resource('comics', ComicController::class);



