<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'kode_satuan' => '1KS',
                'nama_satuan' => '1 kode satuan',
            ],
            [
                'kode_satuan' => '2KS',
                'nama_satuan' => '2 kode satuan',
            ],
            [
                'kode_satuan' => '3KS',
                'nama_satuan' => '3 kode satuan',
            ],
        ]);
    }
}
