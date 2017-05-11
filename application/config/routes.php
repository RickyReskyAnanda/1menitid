<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 		= 'H_beranda';
$route['404_override'] 				= 'H_beranda/not_found';
$route['translate_uri_dashes'] 		= FALSE;