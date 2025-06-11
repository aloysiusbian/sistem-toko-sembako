<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->match(['get', 'post'], '/', 'UserController::register');
$routes->get('/beranda', 'BerandaController::index');
$routes->get('/produk', 'ProdukController::index');
$routes->get('/login', 'UserController::login');

$routes->get('produk/detail/(:any)', 'ProdukController::detail/$1');

$routes->get('produk/detail/(:any)', 'ProdukController::detail/$1');

