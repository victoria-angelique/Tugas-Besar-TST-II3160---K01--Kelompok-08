<?php

namespace App\Models;

use CodeIgniter\Model;

class Wahana extends Model
{
    protected $table            = 'wahana';
    protected $primaryKey       = 'wahanaId';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = [];

    public function getAllWahana() {
        return $this->findAll();
    }

    public function getWahanaById(int $wahanaId) {
        return $this->find($wahanaId);
    }

    public function createWahana(string $nama, int $kapasitas) {
        return $this->insert([
            'nama' => $nama,
            'kapasitas' => $kapasitas,
            
        ]);
    }
    
    public function updateWahana(int $wahanaId, string $nama, int $kapasitas){
        return $this->update($wahanaId, [
            'nama' => $nama,
            'kapasitas' => $kapasitas,
        ]);
    }

    public function updateWahanaRating(int $wahanaId, float $ratingWahana){
        return $this->update($wahanaId, [
            'ratingWahana' => $ratingWahana
        ]);
    }

    public function deleteRating(int $wahanaId){
        $this->delete(['wahanaId'=> $wahanaId
        ]);
    }
        
}