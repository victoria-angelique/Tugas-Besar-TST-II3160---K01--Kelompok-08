<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class WahanaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_wahana' => 'Rolerkoster',
                'kapasitas' => 100,
            ], 
            [
                'nama_wahana' => 'Bianglala',
                'kapasitas' => 70,
            ],
            [
                'nama_wahana' => 'Rumah Hantu',
                'kapasitas' => 120,
            ]
        ];

        foreach ($data as $wahanaItem) {
            $this->db->table('wahana')->insert($wahanaItem);
        }
    }
}
