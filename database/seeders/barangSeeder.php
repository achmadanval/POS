<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,'kategori_id' => '1','barang_kode' => 'MKN1','barang_nama' => 'Soto','harga_beli' => '10000','harga_jual' => '15000',
            ],
            [
                'barang_id' => 2,'kategori_id' => '1','barang_kode' => 'MKN2','barang_nama' => 'Rawon','harga_beli' => '10000','harga_jual' => '15000',
            ],
            [
                'barang_id' => 3,'kategori_id' => '1','barang_kode' => 'MKN3','barang_nama' => 'Bakso','harga_beli' => '7000','harga_jual' => '10000',
            ],
            [
                'barang_id' => 4,'kategori_id' => '1','barang_kode' => 'MKN4','barang_nama' => 'Mie Ayam',
                'harga_beli' => '6000','harga_jual' => '9000',
            ],
            [
                'barang_id' => 5,'kategori_id' => '1','barang_kode' => 'MKN5','barang_nama' => 'Coto Makasar',
                'harga_beli' => '15000','harga_jual' => '20000',
            ],
            [
                'barang_id' => 6,'level_id' => '2','barang_kode' => 'MNM1','barang_nama' => 'Coca-Cola','harga_beli' => '4000','harga_jual' => '7000',
            ],
            [
                'barang_id' => 7,'level_id' => '2','barang_kode' => 'MNM2','barang_nama' => 'Mizone','harga_beli' => '3000','harga_jual' => '6000',
            ],
            [
                'barang_id' => 8,'level_id' => '2','barang_kode' => 'MNM3','barang_nama' => 'Teh Pucuk','harga_beli' => '3000','harga_jual' => '5000',
            ],
            [
                'barang_id' => 9,'level_id' => '2','barang_kode' => 'MNM4','barang_nama' => 'Nutriboost','harga_beli' => '4000','harga_jual' => '7000',
            ],
            [
                'barang_id' => 10,'level_id' => '2','barang_kode' => 'MNM5','barang_nama' => 'Marimas','harga_beli' => '3000','harga_jual' => '5000',
            ],
            [
                'barang_id' => 11,'level_id' => '3','barang_kode' => 'SNK1','barang_nama' => 'Roka','harga_beli' => '2000','harga_jual' => '3000',
            ],
            [
                'barang_id' => 12,'level_id' => '3','barang_kode' => 'SNK2','barang_nama' => 'Taro','harga_beli' => '1000','harga_jual' => '2000',
            ],
            [
                'barang_id' => 13,'level_id' => '3','barang_kode' => 'SNK3','barang_nama' => 'Biskuat','harga_beli' => '500','harga_jual' => '1000',
            ],
            [
                'barang_id' => 14,'level_id' => '3','barang_kode' => 'SNK4','barang_nama' => 'Basreng','harga_beli' => '3000','harga_jual' => '5000',
            ],
            [
                'barang_id' => 15,'level_id' => '3','barang_kode' => 'SNK5','barang_nama' => 'Roma Kelapa','harga_beli' => '5000','harga_jual' => '7000',
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
