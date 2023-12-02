<?php

namespace App\Models;

use CodeIgniter\Model;

class CinemaModel extends Model
{
    protected $table = 'cinema';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'address', 'capacity', 'price'];

    public function getCinema($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search(string $keyword)
    {
        return $this->table('cinema')->like('name', $keyword)->orLike('address', $keyword);
    }
}
