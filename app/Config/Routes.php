<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/buku', 'BukuController::index');
$routes->get('/buku/form', 'BukuController::form');
$routes->get('/buku/edit/(:num)', 'BukuController::edit/$1');
$routes->post('/buku/create', 'BukuController::create');
$routes->post('/buku/hapus', 'BukuController::hapus');

$routes->get('/koleksibuku', 'KoleksiBukuController::index');
$routes->get('/koleksibuku/form', 'KoleksiBukuController::form');
$routes->get('/koleksibuku/edit/(:num)', 'KoleksiBukuController::edit/$1');
$routes->post('/koleksibuku/create', 'KoleksiBukuController::create');
$routes->post('/koleksibuku/hapus', 'KoleksiController::hapus');

$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::ceklogin');
$routes->get('/logout', 'LoginController::logout');
