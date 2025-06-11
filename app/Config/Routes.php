<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->match(['get', 'post'], '/', 'registerController::register');
$routes->get('/beranda', 'BerandaController::index');
$routes->get('/produk', 'ProdukController::index');
$routes->get('/login', 'loginController::index');

$routes->get('produk/detail/(:any)', 'ProdukController::detail/$1');

$routes->get('produk/detail/(:any)', 'ProdukController::detail/$1');

