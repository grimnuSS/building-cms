<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// Detaylı rotalandırmalar
$route['edit/hakkimizda'] = 'Edit/hakkimizda_edit';
$route['edit/yeni_projeler/(:any)'] = 'Edit/yeni_projeler_edit/$1';
$route['edit/devam_eden_projeler/(:any)'] = 'Edit/devam_eden_projeler_edit/$1';
$route['edit/biten_projeler/(:any)'] = 'Edit/biten_projeler_edit/$1';

$route['show/yeni_projeler'] = 'Show/yeni_projeler';

$route['new/yeni_proje'] = 'New_Record/yeni_proje_ekle';
$route['new/devam_eden_proje'] = 'New_Record/devam_eden_proje_ekle';
$route['new/biten_proje'] = 'New_Record/biten_proje_ekle';
/*
$route['create/yeni_projeler'] = 'Create/yeni_projeler_edit';
$route['create/devam_eden_projeler'] = 'Create/yeni_projeler_edit';
$route['create/biten_projeler'] = 'Create/yeni_projeler_edit';*/