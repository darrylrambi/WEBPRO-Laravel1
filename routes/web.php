<?php

use Illuminate\Support\Facades\Route;

// Import controller userController
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

// buat route untuk masuk ke page userInput
Route::view('userInput','userInput')->name('userInput');

// buat route untuk masuk ke page userData
Route::view('userData','userData')->name('userData');

// buat route untuk akses function simpan di controller
// Route::post sesuai dengan method di page userInput
Route::post('userInput', [userController::class, 'simpan']);


