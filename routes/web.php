<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/ekstrakulikuler', function () {
    return view('ekstrakulikuler');
});
Route::get('/profil', function () {
    return view('profil');
});
