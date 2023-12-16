<?php

namespace App\Database\Seeds;

use App\Models\Rating;
use CodeIgniter\Database\Seeder;

class RatingSeeder extends Seeder
{
    public function run()
    {
        $model = model(Rating::class);

        for ($i=0; $i<50; $i++) {
            $model->createRating(rand(1, 5), rand(1, 5));
        }
        for ($i=50; $i<200; $i++) {
            $model->createRating(rand(4, 5), rand(1, 5));
        }
    }
}
