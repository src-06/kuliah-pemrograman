<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa', [
            'nama' => 'Farell Reyhan Pradana',
            'nim' => '312500013',
            'prodi' => 'Teknologi Rekayasa Perangkat Lunak',
        ]);
    }

    public function profil(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'pass' => 'required|min:8',
        ]);

        return view('profil', [
            'nama' => $request->nama,
            'pass' => $request->pass,
        ]);
    }
}
