<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function listBarang()
    {
        $datas = [
            ['nama' => 'baju baru', 'jumlah' => 5, 'harga' => 10000],
            ['nama' => 'celana baru', 'jumlah' => 6, 'harga' => 15000],
            ['nama' => 'topi baru', 'jumlah' => 4, 'harga' => 8000],
        ];
        
        return view('barang.list', compact('datas'));
    }

    public function listBarangDiskon()
    {
        $diskon = [
            ['nama' => 'baju bekas', 'jumlah' => 5, 'harga' => 10000],
            ['nama' => 'celana bekas', 'jumlah' => 6, 'harga' => 15000],
            ['nama' => 'topi bekas', 'jumlah' => 4, 'harga' => 8000],
        ];
        return view('barang.diskon.list', compact('diskon'));
    }
}