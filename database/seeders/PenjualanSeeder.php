<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['user_id' => 3, 'pembeli'=>'Alan' , 'penjualan_kode' => 'SALE001' , 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli'=>'Rizal' , 'penjualan_kode' => 'SALE002' , 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli'=>'Hardi' , 'penjualan_kode' => 'SALE003' , 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli'=>'Soffa' , 'penjualan_kode' => 'SALE004' , 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli'=>'Rafi' , 'penjualan_kode' => 'SALE005' , 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli'=>'Benny' , 'penjualan_kode' => 'SALE006' , 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli'=>'Rafly' , 'penjualan_kode' => 'SALE007' , 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli'=>'Gawain' , 'penjualan_kode' => 'SALE008' , 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli'=>'Khalil' , 'penjualan_kode' => 'SALE009' , 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli'=>'Raka' , 'penjualan_kode' => 'SALE010' , 'penjualan_tanggal' => now()],
        ];

        DB::table('t_penjualan')-> insert ($data);
    }
}
