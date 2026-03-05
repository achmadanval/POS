<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SPLY001',
                'supplier_nama' => 'PT. Pangan Sejahtera',
                'supplier_alamat' => 'Jl. Sudirman No. 10, Jakarta',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SPLY002',
                'supplier_nama' => 'CV. Minuman Segar',
                'supplier_alamat' => 'Jl. Ahmad Yani No. 45, Surabaya',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SPLY003',
                'supplier_nama' => 'UD. Snack Barokah',
                'supplier_alamat' => 'Jl. Gatot Subroto No. 22, Malang',
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
