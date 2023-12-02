<?php

namespace App\Models;

use CodeIgniter\Model;

class MovieModel extends Model
{
  protected $table = 'movie';
  protected $primaryKey = 'id';
  protected $allowedFields = ['title', 'genre', 'release_date', 'duration', 'synopsis', 'poster', 'rating'];

  public function getMovie($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }

  public function search($keyword)
  {
    return $this->table('movie')->like('title', $keyword)->orLike('genre', $keyword)->orLike('synopsis', $keyword);
  }

  public function getRating()
  {
    return $this->table('movie')->selectAvg('rating')->get()->getRowArray();
  }

  public function getMovieByRating()
  {
    return $this->table('movie')->orderBy('rating', 'DESC')->get()->getResultArray();
  }

  public function getMovieByGenre($genre)
  {
    return $this->table('movie')->like('genre', $genre)->get()->getResultArray();
  }
}