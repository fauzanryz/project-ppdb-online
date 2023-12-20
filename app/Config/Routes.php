<?php

use CodeIgniter\Routes\RouteCollection;

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

// Routes Pendaftar Masuk
$routes->get('/pendaftarMasuk', 'Pendaftar::index');
$routes->get('/pendaftarMasuk/formTambahPendaftar', 'Pendaftar::formTambahPendaftar');
$routes->post('/pendaftarMasuk/tambahPendaftar', 'Pendaftar::tambahPendaftar');
$routes->delete('/pendaftarMasuk/hapus/(:num)', 'Pendaftar::hapusPendaftar/$1');
$routes->get('/pendaftarMasuk/edit/(:num)', 'Pendaftar::editPendaftar/$1');
$routes->post('/pendaftarMasuk/updatePendaftar/(:num)', 'Pendaftar::updatePendaftar/$1');
$routes->get('/pendaftarMasuk/detail/(:any)', 'Pendaftar::detailPendaftar/$1');


// Routes Pendaftar Diterima
$routes->get('/pendaftarDiterima', 'PendaftarDiterima::index');
$routes->get('/pendaftarDiterima/detail/(:any)', 'PendaftarDiterima::detailPendaftarDiterima/$1');
$routes->delete('/pendaftarDiterima/hapus/(:num)', 'PendaftarDiterima::hapusPendaftarDiterima/$1');
$routes->get('/pendaftarDiterima/cetakPendaftarDiterima', 'PendaftarDiterima::cetakPendaftarDiterima');




// Routes Pendaftar Ditolak
$routes->get('/pendaftarDitolak', 'PendaftarDitolak::index');
$routes->get('/pendaftarDitolak/detail/(:any)', 'PendaftarDitolak::detailPendaftarDitolak/$1');
$routes->delete('/pendaftarDitolak/hapus/(:num)', 'PendaftarDitolak::hapusPendaftarDitolak/$1');



// Routes Semua Pendaftar
$routes->get('/semuaPendaftar', 'semuaPendaftar::index');
$routes->get('/semuaPendaftar/detail/(:any)', 'semuaPendaftar::detailSemuaPendaftar/$1');
$routes->delete('/semuaPendaftar/hapus/(:num)', 'semuaPendaftar::hapusSemuaPendaftar/$1');


// Routes Biodata
$routes->get('/biodata', 'Biodata::index');
$routes->post('/biodata/tambahBiodata', 'Biodata::tambahBiodata');


// Routes Download
$routes->get('pendaftar/downloadFile/(:any)/(:any)', 'Pendaftar::downloadFile/$1/$2');


// Routes Profil
$routes->get('/profil', 'Profil::index');
$routes->get('profil/tambahprofil', 'Profil::tambah_profil');
$routes->post('profil/proses_tambah', 'Profil::proses_tambah');
$routes->get('profil/ubahprofil/(:any)', 'Profil::ubah_profil/$1');
$routes->post('profil/proses_ubah', 'Profil::proses_ubah');
$routes->get('profil/hapusprofil/(:any)', 'Profil::hapus_profil/$1');



// Routes Banner
$routes->get('/banner', 'Banner::index');
$routes->get('banner/tambahbanner', 'Banner::tambah_banner');
$routes->post('banner/proses_tambah', 'Banner::proses_tambah');
$routes->post('banner/proses_ubah', 'Banner::proses_ubah');
$routes->get('banner/ubahbanner/(:any)', 'Banner::ubah_banner/$1');
$routes->get('banner/hapusbanner/(:any)', 'Banner::hapus_banner/$1');








// $routes->get('/pendaftarDiterima/formTambahPendaftar', 'Pendaftar::formTambahPendaftar');
// $routes->post('/pendaftarDiterima/tambahPendaftar', 'Pendaftar::tambahPendaftar');
// $routes->delete('/pendaftarDiterima/hapus/(:num)', 'Pendaftar::hapusPendaftar/$1');
// $routes->get('/pendaftarDiterima/edit/(:num)', 'Pendaftar::editPendaftar/$1');
// $routes->post('/pendaftarDiterima/updatePendaftar/(:num)', 'Pendaftar::updatePendaftar/$1');
// $routes->get('/pendaftarDiterima/detail/(:any)', 'Pendaftar::detailPendaftar/$1');
