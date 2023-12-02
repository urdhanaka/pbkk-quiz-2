<?php

namespace App\Models;

use CodeIgniter\Model;

class MovieCinemaModel extends Model
{
  protected $table = 'movie_cinema';
  protected $primaryKey = 'id';
  protected $allowedFields = ['movie_id', 'cinema_id', 'showtime'];

  public function getMovieCinema($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }

  public function search($keyword)
  {
    return $this->table('movie_cinema')->like('movie_id', $keyword)->orLike('cinema_id', $keyword)->orLike('showtime', $keyword);
  }
}