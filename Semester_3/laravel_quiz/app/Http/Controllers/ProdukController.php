<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function show()
    {
        $data_produk = collect([
            ['nama_produk' => 'Sumsang S90 Lowest', 'harga' => 50000000, 'stok' => 1],
            ['nama_produk' => 'Sumsang S57 Poor', 'harga' => 20000000, 'stok' => 4],
            ['nama_produk' => 'Xhimai 7 XT', 'harga' => 10000000, 'stok' => 7],
        ]);

        return $data_produk->values()->toJson();
    }
}
