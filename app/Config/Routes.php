<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'BerandaController::index');
$routes->get('/produk', 'ProdukController::index');
$routes->get('/login', 'loginController::index');
$routes->get('/register', 'registerController::index');

