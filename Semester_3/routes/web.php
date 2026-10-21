<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang di Pemrograman Web 3';
});

Route::get('/mahasiswa', function () {
    return 'Halaman Data Mahasiswa';
});

Route::get('/dosen', function () {
    return 'Halaman Data Dosen';
});
