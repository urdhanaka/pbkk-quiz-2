<?php

namespace App\Models;

use CodeIgniter\Model;

class TicketModel extends Model
{
  protected $table = 'ticket';
  protected $primaryKey = 'id';
  protected $allowedFields = ['user_id', 'movie_cinema_movie_id', 'movie_cinema_cinema_id', 'seat', 'price'];

  public function getTicket($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }

  public function search(string $keyword)
  {
    return $this->table('ticket')->like('user_id', $keyword)->orLike('movie_cinema_id', $keyword)->orLike('seat', $keyword)->orLike('price', $keyword);
  }
}