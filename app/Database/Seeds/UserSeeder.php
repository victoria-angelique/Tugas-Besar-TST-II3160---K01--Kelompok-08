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
               'wahanaId' => 1
            ],
            [
                'username' => 'Caris',
                'password' => md5('caris'), 
                'wahanaId' => 2
            ],
            [
                'username' => 'Silvester',
                'password' => md5('silvester'), 
                'wahanaId' => 3
            ],
            [
                'username' => 'Lala',
                'password' => md5('lala'), 
                'wahanaId' => 4
            ],
            [
                'username' => 'Nana',
                'password' => md5('Nana'), 
                'wahanaId' => 5
             ]
        ];

        foreach ($data as $wahanaItem) {
            $this->db->table('user')->insert($wahanaItem);
        }
    }
}
