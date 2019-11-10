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



// router public

$route['check/(:any)'] = 'Welcome/validasi/$1';
$route['checkpost'] = 'Welcome/validasipost';
// $route['checks'] = 'Welcome/index/validasipost';

// router admin
$route['absensi'] = 'Admin/Home/daftar';
