<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RatingSeeder extends Seeder
{
    public function run()
    {
        for ($i=0; $i<50; $i++) {
            $this->db->table('rating')->insert([
                'wahanaId' => rand(1, 5),
                'rating' => rand(1, 5),
            ]);
        }
        for ($i=50; $i<200; $i++) {
            $this->db->table('rating')->insert([
                'wahanaId' => rand(4, 5),
                'rating' => rand(1, 5),
            ]);
        }
    }
}
