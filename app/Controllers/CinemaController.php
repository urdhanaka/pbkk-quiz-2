<?php

namespace App\Controllers;

use App\Models\MovieModel;
use App\Models\CinemaModel;

class CinemaController extends BaseController
{
    protected $cinemaModel;
    protected $movieModel;

    public function __construct()
    {
        $this->cinemaModel = new CinemaModel();
        $this->movieModel = new MovieModel();
    }

    public function index()
    {
        $data = [
        'title' => 'Cinema',
        'header' => 'Cinema | Cinema XXV',
        'movie' => $this->movieModel->findAll(),
        'cinemas' => $this->cinemaModel->findAll()
        ];

        return view('cinema', $data);
    }

    public function findCinemaByID($id)
    {
        return $this->cinemaModel->find($id);
    }

    public function add_cinema()
    {
        $data = [
            'title' => 'Add Cinema',
            'validation' => \Config\Services::validation()
        ];

        return view('user/add_cinema', $data);
    }

    public function post_add_cinema()
    {
        $this->cinemaModel->save(
            [
            'name' => $this->request->getVar('name'),
            'address' => $this->request->getVar('address'),
            'capacity' => $this->request->getVar('capacity'),
            'price' => $this->request->getVar('price')
            ]
        );
        return redirect()->to('/cinema');
    }
}
