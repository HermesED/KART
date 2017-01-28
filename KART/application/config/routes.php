<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main/home';

$route['home'] = 'main/home';
$route['maintenance'] = 'main/soon';
$route['about'] = 'main/aboutus';
$route['contact'] = 'main/contactus';
$route['service'] = 'main/service';
$route['pricing'] = 'main/price';
$route['error'] = 'main/error404';

/** USER **/
$route['usr/login'] = 'usr/log';
$route['usr/login/(:any)'] = 'usr/log/$1';
$route['usr/logout'] = 'usr/logout';
$route['usr/dologin'] = 'usr/login';
$route['usr/signup'] = 'usr/sp';
$route['usr/register'] = 'usr/register';

/** ADMINISTRASI **/
$route['pendaftaran'] = 'administrasi/reg';
$route['daftar']  = 'administrasi/dftr';
$route['pembatalan'] = 'administrasi/btl';
$route['batal'] = 'administrasi/batal';

$route['kegiatan2'] = 'kegiatan/kegiatan2';
$route['timeline_keg'] = 'kegiatan/tlkeg';

$route['gallery'] = 'gallery/g1';
$route['gallery2'] = 'gallery/g2';
$route['gallerydetail'] = 'gallery/g_detail';

$route['members'] = 'member/m1';
$route['users']	= 'member/userpage';
$route['member_admin'] = 'member/entrym';
$route['entrymb'] = 'member/input_anggota';

/** KEGIATAN **/
$route['kegiatan'] = 'kegiatan/keg';
$route['kegiatan/entry'] = 'kegiatan/entrykeg';
$route['kegiatan/sbt'] = 'kegiatan/submit';
$route['kegiatan/likekeg'] = 'kegiatan/likekeg';

$route['timeline_keg'] = 'kegiatan/tlkeg';
$route['kegiatan/(:any)'] = 'kegiatan/keg/$1';
$route['timeline_keg/(:any)'] = 'kegiatan/tlkeg/$1';

$route['404_override'] = 'main/error404';
$route['translate_uri_dashes'] = FALSE;
