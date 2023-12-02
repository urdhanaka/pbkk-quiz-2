<?php

namespace App\Controllers;

use App\Models\MovieModel;
use App\Models\CinemaModel;
use App\Models\TransactionModel;

class TransactionController extends BaseController
{
    protected $movieModel;
    protected $cinemaModel;
    protected $transactionModel;
    public function __construct()
    {
        $this->movieModel = new MovieModel();
        $this->cinemaModel = new CinemaModel();
        $this->transactionModel = new TransactionModel();
    }

    public function index()
    {
        $data = [
        'title' => 'Transaction',
        'movie' => $this->movieModel->findAll(),
        'cinema' => $this->cinemaModel->findAll()
        ];
        return view('select_seats', $data);
    }

    public function findMovieByID($id)
    {
        return $this->movieModel->find($id);
    }

    public function findCinemaByID($id)
    {
        return $this->cinemaModel->find($id);
    }

    public function post_add_transaction()
    {
        // dd($this->request->getVar());
        $this->transactionModel->save(
            [
            'user_id' => $this->request->getVar('user_id'),
            'cinema' => $this->request->getVar('cinema'),
            'seat' => $this->request->getVar('seat'),
            'email' => $this->request->getVar('email'),
            'method' => $this->request->getVar('method'),
            'cardholder' => $this->request->getVar('cardholder'),
            'card_number' => $this->request->getVar('card_number'),
            'date' => $this->request->getVar('date'),
            'cvv' => $this->request->getVar('cvv'),
            'status' => 'unverified',
            'amount' => '50000'
            ]
        );

        return redirect()->to('/');
    }
}
