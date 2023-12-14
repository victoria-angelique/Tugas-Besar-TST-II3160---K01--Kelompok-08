<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'userId';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    public function getAllUser() {
        return $this->findAll();
    }

    public function getUserById(int $userId) {
        return $this->find($userId);
    }

    public function createUser(string $username, string $password, int $wahanaId) {
        return $this->insert([
            'username' => $username,
            'password' => $password,
            'wahanaId' => $wahanaId,
        ]);
    }
    
}