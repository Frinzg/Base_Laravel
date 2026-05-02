<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    //
    public function index()
    {
        $data = [
            'Nama Toko' => 'Makmur Wijaya',
            'Alamat' => 'Jl Ahmad Yani No. 45, Cilacap',
            'Type' => 'Ruko'
        ];
        
        return view('pages.produk',compact(('data')));
    }
    public function tambah()
    {
        return view('pages.addproduk');
    }
}
