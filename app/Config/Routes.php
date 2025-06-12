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
$routes->get('produk/detail/(:any)', 'ProdukController::detail/$1');

$routes->get('/keranjang', 'KeranjangController::index');

