<?php

namespace App\Controllers;

use App\Models\MovieModel;
use App\Models\CinemaModel;
use App\Models\TransactionModel;
use App\Models\TicketModel;

class Home extends BaseController
{
    protected $movieModel;
    protected $cinemaModel;
    protected $transactionModel;
    protected $ticketModel;
    public function __construct()
    {
        $this->movieModel = new MovieModel();
        $this->cinemaModel = new CinemaModel();
        $this->transactionModel = new TransactionModel();
        $this->ticketModel = new TicketModel();
    }
    public function index(): string
    {
        $data = [
            'title' => 'Home | Cinema XXV',
            'user' => session()->get('username'),
            'movie' => $this->movieModel->findAll()
        ];
        return view('index', $data);
    }
    public function login(): string
    {
        $data = [
            'title' => 'Login | Cinema XXV',
        ];
        return view('login', $data);
    }
    public function register(): string
    {
        $data = [
            'title' => 'Register | Cinema XXV',
        ];
        return view('register', $data);
    }
    public function movie(): string
    {
        // dd($this->movieModel->findAll());
        $data = [
            'title' => 'Movie | Cinema XXV',
            'header' => 'Explore Movie',
            'movies' => $this->movieModel->findAll()
        ];
        return view('movie', $data);
    }
    public function history(): string
    {
        $data = [
            'title' => 'History | Cinema XXV',
            'user' => session()->get('username'),
        ];
        return view('history', $data);
    }
    public function ulasan(): string
    {
        $data = [
            'title' => 'Ulasan | Cinema XXV',
            'header' => 'Ulasan',
        ];
        return view('ulasan', $data);
    }

    public function add_movie(): string
    {
        $data = [
            'title' => 'Add Movie | Cinema XXV',
        ];
        return view('/user/add_movie', $data);
    }

    public function post_add_movie()
    {
        $this->movieModel->save(
            [
            'title' => $this->request->getVar('title'),
            'genre' => $this->request->getVar('genre'),
            'release_date' => $this->request->getVar('release_date'),
            'duration' => $this->request->getVar('duration'),
            'synopsis' => $this->request->getVar('synopsis')
            ]
        );
        return redirect()->to('/movie');
    }

    public function movie_detail($id)
    {
        // dd($this->movieModel->getMovie($id));
        $data = [
            'title' => 'Movie Detail | Cinema XXV',
            'header' => 'Movie Detail',
            'movie' => $this->movieModel->getMovie($id)
        ];
        return view('movie_detail', $data);
    }

    public function select_seats($id)
    {
        $data = [
            'title' => 'Select Seats | Cinema XXV',
            'header' => 'Select Seats',
            'movie' => $this->movieModel->getMovie($id),
            'cinema' => $this->cinemaModel->findAll()
        ];
        return view('select_seats', $data);
    }
}
