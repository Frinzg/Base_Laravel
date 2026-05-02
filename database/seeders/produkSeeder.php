<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('produk_tb')->insert([
        [
            'nama_produk' => 'Smartphone Xiaomi',
            'harga' => 2500000,
            'deskripsi_produk' => 'Deskripsi produk A',
            'kategori_id' => 2,
            'created_at' => now(),

        ],[
            'nama_produk' => 'Laptop Lenovo Thinkpad',
            'harga' => 25000000,
            'deskripsi_produk' => 'Deskripsi produk B',
            'kategori_id' => 2,
            'created_at' => now(),
        ],[
            'nama_produk' => 'Headphone Sony WH-1000XM4',
            'harga' => 3500000,
            'deskripsi_produk' => 'Deskripsi produk C',
            'kategori_id' => 2,
            'created_at' => now(),
        ]
        ]);
    }
}
