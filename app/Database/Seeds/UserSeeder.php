<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            
        ];

        foreach ($data as $wahanaItem) {
            $this->db->table('user')->insert($wahanaItem);
        }
    }
}
