<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\Pengguna_12200837;
class PenggunaSeeder_12200837 extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama'      => 'Aldy Tri Wahyudi',
                'password'  => ('12200837')
            ],
            [
                'nama'      => 'creator',
                'password'  => md5('23456')
            ],
            [
                'nama'      => '12200837',
                'password'  => md5('Aldy Tri Wahyudi')
            ]
        ];

        $p = new Pengguna_12200837();
        $p->insertBatch($data);
    }
}