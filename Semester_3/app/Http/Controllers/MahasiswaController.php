<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $nama = 'Farell Reyhan Pradana';
        $nim = '312500013';
        $prodi = 'Teknologi Rekayasa Perangkat Lunak';

        return view('mahasiswa', compact('nama', 'nim', 'prodi'));
    }
}
