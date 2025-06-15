<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->match(['get', 'post'], '/register', 'UserController::register');
$routes->match(['get', 'post'], '/', 'UserController::register');
$routes->get('/beranda', 'BerandaController::index');

$routes->get('/login', 'UserController::login');
$routes->post('/login', 'UserController::verif');
$routes->get('/logout', 'UserController::logout');
$routes->get('/register', 'UserController::register');
$routes->post('/register', 'UserController::register');

$routes->get('/produk', 'ProdukController::index');
$routes->get('produk/detail/(:any)', 'ProdukController::detail/$1');

$routes->get('/keranjang', 'KeranjangController::index');
$routes->post('/keranjang/add', 'KeranjangController::add');
$routes->post('/keranjang/remove/(:segment)', 'KeranjangController::remove/$1');
$routes->post('/keranjang/update/(:segment)', 'KeranjangController::update/$1');

$routes->get('/pembayaran', 'PembayaranController::index');
$routes->post('/pembayaran/proses', 'PembayaranController::proses');

$routes->get('/checkout', 'PembayaranController::index');

$routes->get('/riwayat', 'RiwayatController::index');
$routes->get('/riwayat/detail/(:num)', 'RiwayatController::detail/$1');