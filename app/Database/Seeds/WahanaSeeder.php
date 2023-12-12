<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class WahanaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Rolerkoster',
                'kapasitas' => 100,
                'ratingWahana' => 5,
            ], 
            [
                'nama' => 'Bianglala',
                'kapasitas' => 70,
                'ratingWahana' => 5,
            ],
            [
                'nama' => 'Rumah Hantu',
                'kapasitas' => 120,
                'ratingWahana' => 5,
            ]
        ];

        foreach ($data as $wahanaItem) {
            $this->db->table('wahana')->insert($wahanaItem);
        }
    }
}
