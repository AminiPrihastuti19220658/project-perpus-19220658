<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes 
 */
$routes->get('/', 'Home::index');

$routes->get('/kategori', 'KategoriController::index');
$routes->get('/kategori/form', 'KategoriController::form');
$routes->get('/kategori/edit/(:num)', 'KategoriController::edit/$1');
$routes->post('/kategori/create', 'KategoriController::create');
$routes->post('/kategori/hapus', 'KategoriController::hapus');

$routes->get('/peminjaman', 'PeminjamanController::index');
$routes->get('/peminjaman/form', 'PeminjamanController::form');
$routes->get('/peminjaman/edit/(:num)', 'PeminjamanController::edit/$1');
$routes->post('/peminjaman/create', 'PeminjamanController::create');
$routes->post('/peminjaman/hapus', 'PeminjamanController::hapus');