<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang di Pemrograman Web 3';
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/dosen', function () {
    return 'Halaman Data Dosen';
});

Route::get('/salam/{nama}', function ($nama) {
    return 'Halo, ' . $nama;
});
