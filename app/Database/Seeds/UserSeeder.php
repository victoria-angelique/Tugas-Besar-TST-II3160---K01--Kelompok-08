<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
               'username' => 'Enji',
               'password' => md5('enji'), 
               'wahanaId' => 3
            ]
        ];

        foreach ($data as $wahanaItem) {
            $this->db->table('user')->insert($wahanaItem);
        }
    }
}
