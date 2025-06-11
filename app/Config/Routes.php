<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->match(['get', 'post'], '/', 'UserController::register');
$routes->get('/beranda', 'BerandaController::index');
$routes->get('/produk', 'ProdukController::index');
<<<<<<< HEAD
$routes->get('/login', 'loginController::index');
$routes->post('/login', 'loginController::auth');
=======
$routes->get('/login', 'UserController::login');
>>>>>>> e15f6dd74d8c716301cc5565c3c16258f3824f6b

$routes->get('produk/detail/(:any)', 'ProdukController::detail/$1');

$routes->group('keranjang', function($routes) {
    $routes->get('/', 'KeranjangController::index');
    $routes->post('add', 'KeranjangController::add');
    $routes->post('update/(:num)', 'KeranjangController::update/$1');
    $routes->post('remove/(:num)', 'KeranjangController::remove/$1');
});

<<<<<<< HEAD


// $routes->match(['get', 'post'], '/register', 'RegisterController::register');
=======
// Also update the navbar cart link to point to /keranjang
>>>>>>> e15f6dd74d8c716301cc5565c3c16258f3824f6b

$routes->match(['get', 'post'], '/login', 'LoginController::index');
$routes->post('/login', 'LoginController::auth'); // tetap butuh ini
