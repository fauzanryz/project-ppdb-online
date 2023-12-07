<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Routes Auth
$routes->get('/register', 'Auth::register');
$routes->post('/saveRegister', 'Auth::saveRegister');
$routes->get('/login', 'Auth::login');
$routes->post('/checkLogin', 'Auth::checkLogin');
$routes->get('/logout', 'Auth::logout');

// Routes Dashboard
$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/dashboard/admin', 'Admin::index');
$routes->get('/dashboard/calonsiswa', 'CalonSiswa::index');


//Routes Kelola User 
$routes->get('/kelolaUser', 'User::index');
$routes->get('/kelolaUser/formTambahUser', 'User::formTambahUser');
$routes->post('/kelolaUser/tambahUser', 'User::tambahUser');
$routes->delete('/kelolaUser/hapus/(:num)', 'User::hapusUser/$1');
$routes->get('/kelolaUser/edit/(:num)', 'User::editUser/$1');
$routes->post('/kelolaUser/updateUser/(:num)', 'User::updateUser/$1');
// $routes->get('/kelolaUser/detail/(:any)', 'User::detailUser/$1');

// Router Pendaftar Masuk
$routes->get('/pendaftarMasuk', 'Pendaftar::index');
$routes->get('/pendaftarMasuk/formTambahPendaftar', 'Pendaftar::formTambahPendaftar');
$routes->post('/pendaftarMasuk/tambahPendaftar', 'Pendaftar::tambahPendaftar');
$routes->delete('/pendaftarMasuk/hapus/(:num)', 'Pendaftar::hapusPendaftar/$1');
$routes->get('/pendaftarMasuk/edit/(:num)', 'Pendaftar::editPendaftar/$1');
$routes->post('/pendaftarMasuk/updatePendaftar/(:num)', 'Pendaftar::updatePendaftar/$1');
$routes->get('/pendaftarMasuk/detail/(:any)', 'Pendaftar::detailPendaftar/$1');


// Router Pendaftar Diterima
$routes->get('/pendaftarDiterima', 'Pendaftar::pendaftarDiterima');
$routes->get('/pendaftarDitolak', 'Pendaftar::pendaftarDitolak');
$routes->get('/pendaftarBaru', 'Pendaftar::pendaftarBaru');


$routes->get('/pendaftarDiterima/formTambahPendaftar', 'Pendaftar::formTambahPendaftar');
$routes->post('/pendaftarDiterima/tambahPendaftar', 'Pendaftar::tambahPendaftar');
$routes->delete('/pendaftarDiterima/hapus/(:num)', 'Pendaftar::hapusPendaftar/$1');
$routes->get('/pendaftarDiterima/edit/(:num)', 'Pendaftar::editPendaftar/$1');
$routes->post('/pendaftarDiterima/updatePendaftar/(:num)', 'Pendaftar::updatePendaftar/$1');
$routes->get('/pendaftarDiterima/detail/(:any)', 'Pendaftar::detailPendaftar/$1');



