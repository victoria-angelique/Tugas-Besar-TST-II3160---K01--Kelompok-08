<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RatingSeeder extends Seeder
{
    public function run()
    {
        for ($i=0; $i<50; $i++) {
            $this->db->table('rating')->insert([
                'wahanaId' => rand(1, 3),
                'rating' => rand(1, 5),
            ]);
        }
    }
}
