<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Penjualanseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $data = [];
        for ($i=1; $i<=15; $i++) {
            $data[] = [
                'penjualan_id' => $i,
                'user_id' => 1,
                'pembeli' => 'pembeli'. $i,
                'penjualan_tanggal' => now(),
            ];
        }
DB::table('t_penjualan')->insert([
['penjualan_id'=>1,'user_id'=>1,'penjualan_tanggal'=>now(),'penjualan_total'=>50000],
['penjualan_id'=>2,'user_id'=>1,'penjualan_tanggal'=>now(),'penjualan_total'=>60000],
['penjualan_id'=>3,'user_id'=>2,'penjualan_tanggal'=>now(),'penjualan_total'=>70000],
['penjualan_id'=>4,'user_id'=>2,'penjualan_tanggal'=>now(),'penjualan_total'=>80000],
['penjualan_id'=>5,'user_id'=>3,'penjualan_tanggal'=>now(),'penjualan_total'=>90000],
['penjualan_id'=>6,'user_id'=>3,'penjualan_tanggal'=>now(),'penjualan_total'=>50000],
['penjualan_id'=>7,'user_id'=>1,'penjualan_tanggal'=>now(),'penjualan_total'=>60000],
['penjualan_id'=>8,'user_id'=>2,'penjualan_tanggal'=>now(),'penjualan_total'=>70000],
['penjualan_id'=>9,'user_id'=>3,'penjualan_tanggal'=>now(),'penjualan_total'=>80000],
['penjualan_id'=>10,'user_id'=>1,'penjualan_tanggal'=>now(),'penjualan_total'=>90000]
]);
    }
}
