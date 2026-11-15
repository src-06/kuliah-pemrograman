<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('routes/beranda'));

Route::get('/jadwal', fn() => view('routes/jadwal'));

Route::get('/login', fn() => view('routes/login'));
Route::post('/cek_login', function (Request $request) {
    $request->validate([
        'nama' => 'required|min:3',
        'pass' => 'required|min:6',
    ]);

    if ($request->nama == "mahasiswa" && $request->pass == "trpl123") {
        session([
            'nama' => $request->nama,
            'pass' => $request->pass,
        ]);

        return redirect('/dashboard');
    }

    return redirect('/');
});

Route::get('/dashboard', function () {
    $nama = session('nama');

    if ($nama) {
        return view('routes/dashboard', ['nama' => $nama]);
    }

    return redirect('/');
});
Route::get('/logout', function () {
    session(['nama' => '']);
    return redirect('/');
});
