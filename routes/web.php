<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\GaleriController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('berita', [BeritaController::class, 'index'])->name('berita');
Route::get('ekstrakulikuler', [EkstrakulikulerController::class, 'index'])->name('ekstrakulikuler');
Route::get('galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
