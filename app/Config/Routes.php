<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->match(['get', 'post'], '/', 'UserController::register');
$routes->get('/beranda', 'BerandaController::index');

$routes->match(['get', 'post'], '/login', 'UserController::login');
$routes->get('/login', 'UserController::login');
$routes->post('/login', 'UserController::auth'); // tetap butuh ini
$routes->get('/logout', 'UserController::logout');


$routes->get('/produk', 'ProdukController::index');
$routes->get('produk/detail/(:any)', 'ProdukController::detail/$1');

$routes->group('keranjang', function ($routes) {
    $routes->get('/', 'KeranjangController::index');
    $routes->post('add', 'KeranjangController::add');
    $routes->post('update/(:num)', 'KeranjangController::update/$1');
    $routes->post('remove/(:num)', 'KeranjangController::remove/$1');
});




$routes->match(['get', 'post'], '/login', 'UserController::index');
