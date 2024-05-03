<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
            'kode_barang' => '1KB',
            'nama_barang' => 'Plastik',
            'harga_barang' => 30000,
            'deskripsi_barang' => 'Sebungkus Plastik ramah limgkungan',
            'satuan_id' => 1,
            ],
            [
            'kode_barang' => '2KKB',
            'nama_barang' => 'Pipa',
            'harga_barang' => 50000,
            'deskripsi_barang' => 'Pipa terbuat yang kokoh dan bisa bertahan 100 tahun',
            'satuan_id' => 2,
            ],
            [
            'kode_barang' => '3KB',
            'nama_barang' => 'Bata',
            'harga_barang' => 100000,
            'deskripsi_barang' => 'Satuan bata yang terbuat dari campuran besi tanah dan mineral lainnya sehingga kuat dan tahan lama',
            'satuan_id' => 3,
            ],
        ]);
    }
}
