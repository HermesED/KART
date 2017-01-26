<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 	= 'main/home';

$route['home'] 					  = 'main/home';
$route['maintenance'] 		= 'main/soon';
$route['about'] 				  = 'main/aboutus';
$route['contact'] 				= 'main/contactus';
$route['service'] 				= 'main/service';
$route['pricing'] 				= 'main/price';
$route['error'] 				  = 'main/error404';

$route['login']					  = 'login/log'; //menampilkan halaman login
$route['login/(:any)']		= 'login/log/$1';  // formulir login user
$route['logout']				  = 'login/logout';
$route['dologin'] 				= 'login/login'; //proses do login


$route['signup'] 				  = 'login/signup';
$route['signing'] 				= 'login/dosignup';

$route['pendaftaran'] 		= 'administrasi/reg';
$route['daftar'] 				  = 'administrasi/dftr'; //eksekusi form
$route['pembatalan'] 			= 'administrasi/btl';
$route['batal'] 				  = 'administrasi/batal'; //eksekusi form

$route['kegiatan']				= 'kegiatan/keg1';
$route['kegiatan2']				= 'kegiatan/kegiatan2';
$route['kegiatandetail']	= 'kegiatan/detailkeg';
$route['timeline_keg']		= 'kegiatan/tlkeg';
$route['entrykeg']				= 'kegiatan/entrykeg';
$route['submitkeg']				= 'kegiatan/submit';

$route['gallery'] 				= 'gallery/g1';
$route['gallery2'] 				= 'gallery/g2';
$route['gallerydetail'] 	= 'gallery/g_detail';

$route['members']				  = 'member/m1';
$route['users']					  = 'member/userpage';
$route['member_admin']		= 'member/entrym';
$route['entrymb']				  = 'member/input_anggota';

$route['404_override'] = 'main/error404';
$route['translate_uri_dashes'] = FALSE;
