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
|	https://codeigniter.com/user_guide/general/routing.html
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
//$route['default_controller'] = 'pages';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

//Admin Authentication
$route['admin/login'] = 'admin/auth/login';
$route['admin/logout'] = 'admin/auth/logout';
$route['admin/forgot-password'] = 'admin/auth/forgot_password';
$route['admin/reset-password/(:any)'] = 'admin/auth/reset_password/$1';
//Admin Profile
$route['admin'] = 'admin/profile/dashboard';
$route['admin/profile'] = 'admin/profile/index';
$route['admin/change-password'] = 'admin/profile/change_password';
$route['admin/switch/(:any)'] = 'admin/profile/switch_language/$1';
//Admin Users
$route['admin/users'] = 'admin/users/list_users';
$route['admin/user/view'] = 'admin/users/view_user';
$route['admin/user/add'] = 'admin/users/add_user';
$route['admin/user/create'] = 'admin/users/create_user';
$route['admin/user/edit'] = 'admin/users/edit_user';
$route['admin/user/update'] = 'admin/users/update_user';
$route['admin/user/block'] = 'admin/users/block_user';
$route['admin/user/unblock'] = 'admin/users/unblock_user';
$route['admin/user/delete'] = 'admin/users/delete_user';
//Admin Settings
$route['admin/settings/site'] = 'admin/settings/site_settings';
$route['admin/settings/social-media'] = 'admin/settings/social_media_settings';
$route['admin/settings/seo'] = 'admin/settings/seo_settings';
$route['admin/settings/permissions'] = 'admin/settings/permissions';
$route['admin/settings/app'] = 'admin/settings/app_settings';
$route['admin/settings/email'] = 'admin/settings/email_settings';
$route['admin/settings/email-templates'] = 'admin/settings/email_templates';

/* New Methods */
$route['admin/orders/list-orders'] = 'admin/orders/list_orders';

