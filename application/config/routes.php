<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 		= 'H_homepage';
$route['404_override'] 				= 'H_beranda/not_found';
$route['translate_uri_dashes'] 		= FALSE;

$route['1menitadmin']	= 'A_logged_in';
$route['1menitadmin/proses']	= 'A_logged_in/cek_logged_in';
$route['1menitadmin/keluar']	= 'A_logged_in/user_log_out';

$route['1menitadmin/beranda']	= 'A_beranda';
$route['1menitadmin/profil']	= 'A_beranda/view_profil';

$route['1menitadmin/berita'] 			= 'A_berita';
$route['1menitadmin/berita/tambah'] 	= 'A_berita/view_tambah_berita';
$route['1menitadmin/berita/edit/:num'] 	= 'A_berita/view_edit_berita';

$route['1menitadmin/akun']	= 'A_akun';

$route[':any/:num']	= 'H_berita';
