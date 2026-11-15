<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

Route::get('/', fn() => view('home'));

Route::post('/profil', [MahasiswaController::class, 'profil']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/dosen', function () {
    return 'Halaman Data Dosen';
});

Route::get('/nilai', function () {
    $nilai = collect([
        ['nama' => 'Andi', 'nilai' => 80],
        ['nama' => 'Budi', 'nilai' => 65],
        ['nama' => 'Citra', 'nilai' => 90],
        ['nama' => 'Dina', 'nilai' => 70],
    ]);

    $lulus = $nilai->filter(fn($mhs) => $mhs['nilai'] > 75);

    return $lulus->values()->toJson();
});

Route::get('/simpan-file', function () {
    Storage::disk('local')->put(
        'data-mahasiswa.txt',
        'Nama: Andi, NIM: 2601001, Prodi: TRPL'
    );

    return 'File berhasil disimpan!';
});

Route::get('/baca-file', function () {
    $isi = Storage::disk('local')->get('data-mahasiswa.txt');
    $hasil = str_replace(', ', '<br>', $isi);
    return $hasil;
});

Route::get('/informasi', function () {
    $nama = 'Rafi';
    return 'Halo ' . $nama . '. Waktu Akses: ' . now();
});

Route::get('teks', function () {
    $nama = 'teknologi rekayasa perangkat lunak';

    $kapital = Str::upper($nama);
    $judul = Str::title($nama);

    return 'Huruf Kapital: ' . $kapital . '<br>Format Judul: ' . $judul;
});

Route::get('/api-post', function () {
    $response = Http::get('https://jsonplaceholder.typicode.com/posts/1');

    if ($response->successful()) {
        $data = $response->json();

        return view('api-post', [
            'judul' => $data['title'],
            'isi' => $data['body'],
        ]);
    }

    return response()->json(['pesan' => 'Gagal mengambil data API'], 502);
});

Route::get('/cek-limit', fn() => 'Permintaan diterima')->middleware('throttle:5,1');

Route::get('/salam/{nama}', function ($nama) {
    return 'Halo, ' . $nama;
});

Route::get('produk', [ProdukController::class, 'index']);

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

Route::get('/session', function () {
    session(['nama' => 'Farell Reyhan Pradana']);

    return 'Nama dalam session: ' . session('nama');
});
