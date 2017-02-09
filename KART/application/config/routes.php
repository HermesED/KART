<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main/home';

/** PAGES **/
$route['home'] = 'main/home';
$route['maintenance'] = 'main/soon';

$route['about'] = 'main/aboutus';
$route['about/upload'] = 'gallery/leader_img';

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
$route['usr/signup/(:any)'] = 'usr/sp/$1';
$route['usr/register'] = 'usr/ceksignup';

/** ADMINISTRASI **/
$route['pendaftaran'] = 'administrasi/reg';
$route['daftar']  = 'administrasi/dftr';
$route['pembatalan'] = 'administrasi/btl';
$route['batal'] = 'administrasi/batal';

/** GALLERY **/
$route['gallery'] = 'gallery/g1';
$route['gallery2'] = 'gallery/g2';
$route['project'] = 'gallery/project';
$route['gallery/upload'] = 'gallery/upd_gallery';
$route['gallery/delete'] = 'gallery/delete_img';
$route['gallery/(:any)'] = 'gallery/g1/$1';

/** USERS **/
$route['members'] = 'member/m1';
$route['users']	= 'member/userpage';

$route['usr/profile'] = 'usr/user_profile';
$route['usr/edit_profile'] = 'usr/editprofile';

$route['usr/upd_user'] = 'usr/upd_user';
$route['member_admin'] = 'member/entrym';
$route['entrymb'] = 'member/input_anggota';

/** KEGIATAN **/
$route['kegiatan'] = 'kegiatan/keg';
$route['kegiatan/entry'] = 'kegiatan/entrykeg';
$route['kegiatan/sbt'] = 'kegiatan/submit';
$route['kegiatan/likekegiatan'] = 'kegiatan/likekegiatan';
$route['kegiatan/update'] = 'kegiatan/update';

$route['timeline_keg'] = 'kegiatan/tlkeg';
$route['kegiatan/(:any)'] = 'kegiatan/keg/$1';
$route['timeline_keg/(:any)'] = 'kegiatan/tlkeg/$1';

$route['kegiatan2'] = 'kegiatan/kegiatan2';

$route['404_override'] = 'main/error404';
$route['translate_uri_dashes'] = FALSE;
