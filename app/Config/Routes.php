<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/movie', 'Home::movie', ['filter' => 'auth']);
$routes->get('/movie_detail/(:num)', 'Home::movie_detail/$1', ['filter' => 'auth']);
$routes->get('/select_seats/(:num)', 'Home::select_seats/$1', ['filter' => 'auth']);
$routes->get('/history', 'Home::history', ['filter' => 'auth']);
$routes->get('/ulasan', 'Home::ulasan', ['filter' => 'auth']);

$routes->get('/add_movie', 'Home::add_movie', ['filter' => 'auth']);
$routes->post('/post_add_movie', 'Home::post_add_movie');
$routes->post('/post_add_cinema', 'CinemaController::post_add_cinema');
$routes->post('/post_add_transaction', 'TransactionController::post_add_transaction');

$routes->get('/user', 'UserController::index', ['filter' => 'auth']);
$routes->post('/user/save', 'UserController::save');
$routes->get('/user/login', 'UserController::login');
$routes->post('/user/auth', 'UserController::auth');
$routes->get('/user/delete/(:segment)', 'UserController::delete/$1');

$routes->get('/movie', 'MovieController::index', ['filter' => 'auth']);

$routes->get('/cinema', 'CinemaController::index', ['filter' => 'auth']);
$routes->get('/user/add_cinema', 'CinemaController::add_cinema', ['filter' => 'auth']);

// Logout
$routes->get('/logout', 'UserController::logout');
