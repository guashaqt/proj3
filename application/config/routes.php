<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Frontend_Controller';
$route['Register'] = 'Frontend_Controller/register';

$route['admin'] = 'Admin_Controller';
$route['dashboard'] = 'Admin_Controller/dashboard';
$route['logout'] = 'Admin_Controller/logout';

$route['dashboard/add-resident'] = 'Admin_Controller/add_resident';
$route['dashboard/view-resident'] = 'Admin_Controller/view_resident';
$route['dashboard/delete-resident/(:any)'] = 'Admin_Controller/delete_resident/$1';
$route['dashboard/update-resident/(:any)'] = 'Admin_Controller/update_resident/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;