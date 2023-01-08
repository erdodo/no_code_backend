<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'document';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['setup'] = 'Setup/index';
$route['setup/create'] = 'Setup/create';

//System control
$route['api/v1/(:any)'] = 'Base/index/$1'; 


//Listeleme
$route['api/v1/(:any)/(:any)/list'] = 'Base/list/$1/$2';//Dil,tablo adı
$route['api/v1/(:any)/(:any)/show/(:any)'] = 'Base/show/$1/$2/$3';//Dil, tablo adı, filter

//Ekleme
$route['api/v1/(:any)/(:any)/add'] = 'Base/add/$1/$2';//Dil,tablo adı
$route['api/v1/(:any)/(:any)/create'] = 'Base/create/$1/$2';//Dil,tablo adı

//Güncelleme
$route['api/v1/(:any)/(:any)/update/(:any)'] = 'Base/update/$1/$2/$3';//Dil, tablo adı, filter
$route['api/v1/(:any)/(:any)/edit/(:any)'] = 'Base/edit/$1/$2/$3';//Dil, tablo adı, filter

//Silme
$route['api/v1/(:any)/(:any)/delete/(:any)'] = 'Base/delete/$1/$2/$3';//Dil, tablo adı, filter

//Kullanıcı
$route['api/account/login'] = 'Account/login';//Dil, tablo adı, filter
$route['api/account/register'] = 'Account/register';//Dil, tablo adı, filter
$route['api/account/create_pass'] = 'Account/create_pass';//Dil, tablo adı, filter
