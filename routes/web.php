<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'Nama' => 'Rizky',
        'Umur' => 20,
        'Alamat' => 'Jl. Mawar No. 123',
    ]);
});

Route::get('/Detil', function () {
    return view('pages.Detail');
});

Route::view('/contact', 'pages.contact');
Route::get('/product', [produkController::class, 'index']);
Route::get('/product/tambah', [produkController::class, 'tambah']);
