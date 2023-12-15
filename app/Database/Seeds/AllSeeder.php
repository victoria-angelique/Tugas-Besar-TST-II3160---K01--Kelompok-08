<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AllSeeder extends Seeder
{
    public function run()
    {
        $this->call('WahanaSeeder');
        $this->call('RatingSeeder');
        $this->call('UserSeeder');
    }
}
