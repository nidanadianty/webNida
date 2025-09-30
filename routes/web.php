<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/ekstrakulikuler', function () {
    return view('ekstrakulikuler');
});
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
