<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'menu';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['menu'] = 'menu';
$route['admin'] = 'Admin';
$route['login'] = 'Admin/login';
$route['urun'] = 'Admin/urun';
$route['drinks'] = 'Menu/drinks';