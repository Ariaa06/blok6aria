<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//bagian get
$routes->get('/home/dashboard', 'Home::dashboard');
$routes->get('/home/masyarakat', 'Home::masyarakat');
$routes->get('/home/petugas', 'Home::petugas');
$routes->get('/home/login', 'Home::login');
$routes->get('/home/register', 'Home::register');
$routes->get('/home/dokter', 'Home::dokter');
$routes->get('/home/select_time', 'Home::select_time');
$routes->get('/home/history', 'Home::history');
$routes->get('/home/fpw', 'Home::fpw');
$routes->get('/home/logout', 'Home::logout');
$routes->get('/home/level', 'Home::level');
$routes->get('/home/laporan', 'Home::laporan');
$routes->get('/home/signup', 'Home::signup');
$routes->get('/home/print', 'Home::print');
$routes->get('/home/print2', 'Home::print2');
$routes->get('/home/pdf', 'Home::pdf');
$routes->get('/home/bid', 'Home::bid');
$routes->get('/home/booking/(:num)', 'Home::booking/$1');
$routes->get('/home/info', 'Home::info');
$routes->get('/home/profile', 'Home::profile');
$routes->get('/home/exportToExcel', 'Home::exportToExcel');


$routes->get('/home/tambah_dokter', 'Home::tambah_dokter');
$routes->get('/home/tambah_rating', 'Home::tambah_rating');
$routes->get('/home/tambah_petugas', 'Home::tambah_petugas');
$routes->get('/home/tambah_masyarakat', 'Home::tambah_masyarakat');
$routes->get('/home/tambah_history', 'Home::tambah_history');
$routes->get('/home/book', 'Home::book');
$routes->get('/home/bid', 'Home::bid');
$routes->get('/home/exportToExcel', 'Home::exportToExcel');


$routes->add('/home/aksi_t_dokter', 'Home::aksi_t_dokter');
$routes->add('/home/aksi_t_rating', 'Home::aksi_t_rating');
$routes->add('/home/aksi_t_petugas', 'Home::aksi_t_petugas');
$routes->add('/home/aksi_t_masyarakat', 'Home::aksi_t_masyarakat');
$routes->add('/home/aksi_t_history', 'Home::aksi_t_history');
$routes->add('/home/aksi_t_data', 'Home::aksi_t_data');
$routes->add('/home/aksi_signup', 'Home::aksi_signup');
$routes->add('/home/book', 'Home::book');
$routes->add('/home/exportToExcel', 'Home::exportToExcel');


$routes->add('/home/hapus_dokter/(:num)', 'Home::hapus_dokter/$1');
$routes->add('/home/hapus_petugas/(:num)', 'Home::hapus_petugas/$1');
$routes->add('/home/hapus_masyarakat/(:num)', 'Home::hapus_masyarakat/$1');
$routes->add('/home/hapus_level/(:num)', 'Home::hapus_level/$1');
$routes->add('/home/hapus_history/(:num)', 'Home::hapus_history/$1');
$routes->add('/home/hapus_data/(:num)', 'Home::hapus_data/$1');


$routes->add('/home/edit_dokter/(:num)', 'Home::edit_dokter/$1');
$routes->add('/home/edit_petugas/(:num)', 'Home::edit_petugas/$1');
$routes->add('/home/edit_masyarakat/(:num)', 'Home::edit_masyarakat/$1');
$routes->add('/home/edit_history/(:num)', 'Home::edit_history/$1');
$routes->add('/home/edit_data/(:num)', 'Home::edit_data/$1');
$routes->add('/home/edit_profile/(:num)', 'Home::edit_profile/$1');
$routes->add('/home/exportToExcel/(:num)', 'Home::exportToExcel/$1');


$routes->add('/home/aksi_edit_barang', 'Home::aksi_edit_barang');
$routes->add('/home/aksi_edit_petugas', 'Home::aksi_edit_petugas');
$routes->add('/home/aksi_edit_masyarakat', 'Home::aksi_edit_masyarakat');
$routes->add('/home/aksi_edit_history', 'Home::aksi_edit_history');
$routes->add('/home/aksi_edit_profile', 'Home::aksi_edit_profile');
$routes->add('/home/aksi_edit_data', 'Home::aksi_edit_data');


$routes->add('/home/aksi_login', 'Home::aksi_login');
$routes->add('/home/aksi_reset', 'Home::aksi_reset');
$routes->add('/home/aksi_reset/(:num)', 'Home::aksi_reset/$1');

$routes->get('pdf/generate', 'PdfController::generatePdf');

$routes->get('/home/menu1', 'Home::menu1');