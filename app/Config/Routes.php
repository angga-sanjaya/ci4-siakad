<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');

$routes->get('/beranda', 'Home::index');

// Menampilkan seluruh mahasiswa
$routes->get('mahasiswa', 'Mahasiswa::index');

// Menampilkan formulir tambah
$routes->get('mahasiswa/create', 'Mahasiswa::create');

// Menyimpan data baru
$routes->post('mahasiswa/store', 'Mahasiswa::store');

// Menampilkan formulir edit
$routes->get('mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');

// Memproses perubahan data
$routes->post('mahasiswa/update/(:num)', 'Mahasiswa::update/$1');

// Menghapus data
$routes->post('mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');

$routes->get('/dosen', 'Home::dosen');

$routes->get('/mata-kuliah', 'Home::matakuliah');

$routes->get('/tentang', 'Home::tentang');

// tanda / itu hanya untuk menamai alamat URL