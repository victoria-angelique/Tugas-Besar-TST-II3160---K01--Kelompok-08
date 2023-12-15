<?php

namespace App\Models;

use CodeIgniter\Model;

class Rating extends Model
{
    protected $table            = 'rating';
    protected $primaryKey       = 'permainanId';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;

    public function getAllRating() {
        return $this->findAll();
    }

    public function getRatingById(int $permainanId) {
        return $this->find($permainanId);
    }
    
    public function createRating(int $wahanaId, int $rating){
        $hasil = $this->insert([
            'wahanaId' => $wahanaId,
            'rating' => $rating
        ]);

        model(Wahana::class)->updateWahanaRating($wahanaId, $this->calculateWahanaRatingById($wahanaId)['rating']);
        return $hasil;
    }

    public function calculateWahanaRating() {
        return $this->select('rating.wahanaId, nama')->selectAvg('rating')->join('wahana', 'wahana.wahanaId = rating.wahanaId')->groupBy('wahana.wahanaId')->orderBy('rating')->findAll(5);
    }
    public function calculateWahanaRatingById(int $wahanaId) {
        return $this->select('rating.wahanaId, nama')->selectAvg('rating')->join('wahana', 'wahana.wahanaId = rating.wahanaId')->where('rating.wahanaId', $wahanaId)->groupBy('wahana.wahanaId')->first();
    }
}
