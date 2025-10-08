<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('home');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('contact', function () {
    return 'halaman contact';
});
