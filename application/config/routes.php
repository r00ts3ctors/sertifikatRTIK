<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



// router member

$route['dashboard'] = 'Dashboard/Home';
$route['nosertifikat/(:any)'] = 'Sertifikat/index/$1';
$route['carikegiatan'] = 'sertifikat/cariDataSertifikat';
$route['list'] = 'Dashboard/Home/listSertifikat';
$route['register'] = 'Dashboard/home/register';
$route['daftar/(:num)'] = 'Dashboard/home/takePelatihan/$1';
// $route['carikegiatan/(:any)'] = 'sertifikat/cariDataSertifikat/$1';
