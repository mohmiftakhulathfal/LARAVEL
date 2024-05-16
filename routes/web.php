<?php

use Illuminate\Support\Facades\Route;

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


