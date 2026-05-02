<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produkModel extends Model
{
    //inisialisasi nama tabel
    protected $table = 'tb_produk';
    //inisialisasi primary key
    protected $primaryKey = 'id_produk';
    //inisialisasi kolom yang dapat diisi
    protected $fillable = [
        'nama_produk',
        'harga',
        'stok',
    ];
    //inisialisasi kolom yang tidak dapat diisi
    protected $guarded = [];
}
