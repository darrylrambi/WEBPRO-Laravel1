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

// buat route untuk akses function simpan di controller
// Route::post sesuai dengan method di page userInput
Route::post('userInput', [userController::class, 'simpan']);


