<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->match(['get', 'post'], '/', 'UserController::register');
$routes->get('/beranda', 'BerandaController::index');
$routes->get('/produk', 'ProdukController::index');
$routes->match(['get', 'post'], '/login', 'UserController::login');

$routes->get('produk/detail/(:any)', 'ProdukController::detail/$1');

$routes->group('keranjang', function ($routes) {
    $routes->get('/', 'KeranjangController::index');
    $routes->post('add', 'KeranjangController::add');
    $routes->post('update/(:num)', 'KeranjangController::update/$1');
    $routes->post('remove/(:num)', 'KeranjangController::remove/$1');
});

$routes->get('/logout', 'UserController::logout');

// Also update the navbar cart link to point to /keranjang
