<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'c_Dash::Dashboard_awal'); // tampilan awal Dashboard 

//------------------------------------------------------------------------------- 

$routes->get('/login', 'c_Auth::login');  // rute -> halaman login
$routes->POST('/process_login', 'c_Auth::process_login'); // rute -> halaman register

//-------------------------------------------------------------------------------- 
$routes->get('/register', 'c_Auth::register'); // rute -> halaman register


$routes->get('/logout', 'c_Auth::logout'); // rute -> untuk logout dan kembali ke login


$routes->get('/dashboard', 'c_Dash::Dashboard_user'); // rute -> halaman dashboard User setelah Login





 