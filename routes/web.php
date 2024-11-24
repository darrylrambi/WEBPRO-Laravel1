<?php

use Illuminate\Support\Facades\Route;

// Import controller
use App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});

// buat route untuk masuk ke page userInput
Route::view('userInput','userInput');

// buat route untuk masuk ke page userData
Route::view('userData','userData');


