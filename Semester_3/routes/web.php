<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
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

Route::get('/dashboard', function () {
    return 'Dashboard';
})->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/simpan', function (Request $request) {
    return 'Data berhasil dikirim dengan nama: ' . $request->nama;
});

Route::get('/form-mahasiswa', fn() => view('form-mahasiswa'));
Route::post('/simpan-mahasiswa', function (Request $request) {
    $request->validate([
        'nama' => 'required|min:3',
    ]);

    return 'Nama berhasil diperiksa: ' . $request->nama;
});
