<?php

use App\Controllers\Loginanggota;
use CodeIgniter\Commands\Utilities\Routes;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/penerbitt', 'PenerbitController::index');
$routes->get('/penerbitt/form', 'PenerbitController::form');
$routes->get('/penerbitt/edit/(:num)', 'PenerbitController::edit/$1');
$routes->post('/penerbitt/create', 'PenerbitController::create');
$routes->post('/penerbitt/hapus', 'PenerbitController::hapus');

$routes->post('/anggotalogin', 'Loginanggota::index');
$routes->post('/anggotalogin', 'Loginanggota::ceklogin');
$routes->post('/logout', 'Loginanggota::logout');