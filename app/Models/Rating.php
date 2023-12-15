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
    protected $protectFields    = true;
    protected $allowedFields    = ['wahanaId', 'rating'];

    public function getAllRating() {
        return $this->findAll();
    }

    public function getRatingById(int $permainanId) {
        return $this->find($permainanId);
    }
    
    public function createRating(int $rating, int $wahanaId) {
        return $this->insert([
            'rating' => $rating,
            'wahanaId' => $wahanaId,
            
        ]);
    }
    public function calculateWahanaRating() {
        return $this->select('rating.wahanaId, nama')->selectAvg('rating')->join('wahana', 'wahana.wahanaId = rating.wahanaId')->groupBy('wahana.wahanaId')->orderBy('rating')->findAll();
    }
    public function calculateWahanaRatingById(int $wahanaId) {
        return $this->select('rating.wahanaId, nama')->selectAvg('rating')->join('wahana', 'wahana.wahanaId = rating.wahanaId')->where('rating.wahanaId', $wahanaId)->groupBy('wahana.wahanaId')->findAll();
    }
}
