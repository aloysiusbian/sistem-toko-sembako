<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'BerandaController::index');
$routes->get('/produk', 'ProdukController::index');
$routes->get('/login', 'loginController::index');
$routes->post('/login', 'loginController::auth');


$routes->match(['get', 'post'], '/register', 'registerController::register');
// $routes->match(['get', 'post'], 'register', 'RegisterController::index');

// $routes->match(['get', 'post'], 'register', 'RegisterController::index');
$routes->get('produk/detail/(:any)', 'ProdukController::detail/$1');




// $routes->match(['get', 'post'], '/register', 'RegisterController::register');

$routes->match(['get', 'post'], '/login', 'LoginController::index');
$routes->post('/login', 'LoginController::auth'); // tetap butuh ini
