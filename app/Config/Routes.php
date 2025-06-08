<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'BerandaController::index');
$routes->get('/login', 'loginController::index');
$routes->match(['get','post'], '/register', ['registerController::index']);
