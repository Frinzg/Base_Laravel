<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kategori_tb')->insert([
            'nama_kategori' => 'Elektronik',
            'deskripsi' => 'Kategori untuk produk elektronik seperti smartphone, laptop, dan perangkat elektronik lainnya.',
        ]);
    }
}
