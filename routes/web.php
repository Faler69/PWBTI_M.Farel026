<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "Muhammad Farel",
        "nohp" => "085800661620",
        "foto" => "images/images.jpg",
    ]);
});

Route::get('/berita', action: [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class,'tampildata']);

Route::get('datamahasiswa', [MahasiswaController::class,'index']);

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});