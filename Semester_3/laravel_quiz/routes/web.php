<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', fn() => view('routes/beranda'));

Route::get('/profil', [ProfilController::class, 'index']);

Route::get('/login', fn() => view('routes/login'));
Route::post('/simpan', function (Request $request) {
    $request->validate([
        'nama' => 'required|min:3',
    ]);

    session(['nama' => $request->nama]);

    return view('routes/simpan', ['nama' => session('nama')]);
});

Route::get('/produk', [ProdukController::class, 'show']);
Route::get('/simpan-storage', function () {
    Storage::disk('local')->put(
        'data-produk.txt',
        'Nama: Sumsang S90 Lowest, Harga: Rp 50.000.000, Stok: 1|Nama: Sumsang S57 Poor, Harga: Rp 20.000.000, Stok: 4|Nama: Xhimai 7 XT, Harga: Rp 10.000.000, Stok: 7'
    );

    return view('routes/simpan-storage');
});
Route::get('/lihat-storage', function () {
    $file = Storage::disk('local')->get('data-produk.txt');
    return str_replace('|', '<br>', $file);
});
Route::get('/waktu', function () {
    return 'Waktu Akses: ' . now();
});

Route::get('/api', function () {
    $response = Http::get('https://jsonplaceholder.typicode.com/posts/1');

    if ($response->successful()) {
        $data = $response->json();

        return view('routes/api', [
            'judul' => $data['title'],
            'isi' => $data['body'],
        ]);
    }

    return response()->json(['pesan' => 'Gagal mengambil data API'], 502);
})->middleware('throttle:3,1');
