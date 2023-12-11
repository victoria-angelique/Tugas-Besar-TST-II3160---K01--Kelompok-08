<?php

namespace App\Models;

use CodeIgniter\Model;

class Wahana extends Model
{
    protected $table            = 'wahana';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = [];

    public function getAllWahana() {
        return $this->findAll();
    }

    public function getWahanaById(int $id) {
        return $this->find($id);
    }

    public function createWahana(string $nama_wahana, int $kapasitas) {
        return $this->insert([
            'nama_wahana' => $nama_wahana,
            'kapasitas' => $kapasitas,
        ]);
    }
}
