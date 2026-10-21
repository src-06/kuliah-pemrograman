<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang di Pemrograman Web 3';
});

Route::get('/mahasiswa', function () {
    $nama = 'Farell Reyhan Pradana';
    $nim = '312500013';
    $prodi = 'Teknologi Rekayasa Perangkat Lunak';

    return view('mahasiswa', compact('nama', 'nim', 'prodi'));
});

Route::get('/dosen', function () {
    return 'Halaman Data Dosen';
});
