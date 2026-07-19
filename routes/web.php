<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;

// Halaman Beranda Utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman Semua Berita
Route::get('/berita', function () {
    return view('berita');
});

// Halaman Semua Galeri
Route::get('/galeri', function () {
    return view('galeri');
});
