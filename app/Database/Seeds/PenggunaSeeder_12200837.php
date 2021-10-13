<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama'      => 'Aldy Tri Wahyudi',
                'password'  => md5('12200837')
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

        $p = new Pengguna();
        $p->insertBatch($data);
    }
}