<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'c_Dash::Dashboard_awal'); // tampilan awal Dashboard 

//------------------------------------------------------------------------------- 

$routes->get('/login', 'c_Auth::login');  // rute -> halaman login
$routes->post('/process_login', 'c_Auth::process_login'); // rute -> untuk process login

//--------------------------------------------------------------------------------
 
$routes->get('/register', 'c_Auth::register'); // rute -> halaman register
$routes->post('/process_register', 'c_Auth::process_register'); // rute -> untuk process register


$routes->get('/logout', 'c_Auth::logout'); // rute -> untuk logout dan kembali ke login


$routes->get('/dashboard', 'c_Dash::Dashboard_user'); // rute -> halaman dashboard User setelah Login

$routes->get('/Leaderboard', 'c_Lboard::Leader_board'); // rute -> halaman leaderboard User setelah Login






 