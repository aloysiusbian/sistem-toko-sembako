<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->match(['get', 'post'], '/register', 'UserController::register');
$routes->match(['get', 'post'], '/', 'UserController::register');
$routes->get('/beranda', 'BerandaController::index');

$routes->get('/login', 'UserController::login');
$routes->post('/login', 'UserController::auth'); // tetap butuh ini
$routes->get('/logout', 'UserController::logout');
$routes->get('/register', 'UserController::register');
$routes->post('/register', 'UserController::register');


$routes->get('/produk', 'ProdukController::index');
$routes->get('produkg/detail/(:any)', 'ProdukController::detail/$1');

$routes->get('/keranjang', 'KeranjangController::index');
$routes->post('/keranjang/add', 'KeranjangController::add');
$routes->post('/keranjang/remove/(:num)', 'KeranjangController::remove/$1');
$routes->post('/keranjang/update/(:num)', 'KeranjangController::update/$1');
