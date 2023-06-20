<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller'] = 'home';

// HALAMAN DASHBOARD
$route['dashboard'] = 'admin/dashboard';

// ROUTING HALAMAN ALAT
$route['equipments'] = 'equipments/index';
$route['equipments/add'] = 'equipments/create';
$route['equipments/edit/(:any)'] = 'equipments/edit/$1';

//ROUTING HALAMAN ADMIN
$route['admin'] = 'admin/index';
$route['admin/add'] = 'admin/create';
$route['admin/edit/(:any)'] = 'admin/edit/$1';

// ROUTING HALAMAN PENYEWA
$route['tenants'] = 'tenants/index';
$route['tenants/add'] = 'tenants/create';
$route['tenants/edit/(:any)'] = 'tenants/edit/$1';

// ROUTING HALAMAN TRANSAKSI
$route['transaction'] = 'transaction/index';
$route['transaction/add'] = 'transaction/create';
$route['transaction/edit/(:any)'] = 'transaction/edit/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;