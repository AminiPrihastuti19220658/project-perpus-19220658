<?php

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