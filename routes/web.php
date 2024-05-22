<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/beranda', function () {
    return view('Selamat Datang');
});

Route::get('/profile', function () {
    return view('Halaman Profile');
});

Route::get('/salam', function () {
    return view('Selamat Datang di kota Depok');
});


// praktikum laravel 2
Route::get('/dashboard', [AdminController::class,'index']);
Route::get('/contact', [ContactController::class,'index']);



