<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        for ($i=1; $i<=15; $i++) {
            $data[] = [
                'barang_id' => $i,
                'kategori_id' => rand(1,5),
                'supplier_id' => rand(1,3),
                'barang_kode' => 'BRG'.str_pad($i,3,'0',STR_PAD_LEFT),
                'barang_nama' => 'Barang '.$i,
                'harga_beli' => rand(10000,50000),
                'harga_jual' => rand(60000,100000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('m_barang')->insert($data);
    }
}