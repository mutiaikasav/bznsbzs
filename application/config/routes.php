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
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['banner-add'] = 'banner/add';
$route['banner-edit/(:num)'] = 'banner/edit/$1';
$route['banner-delete/(:num)'] = 'banner/delete/$1';

$route['collaboration-add'] = 'collaboration/add';
$route['collaboration-edit/(:num)'] = 'collaboration/edit/$1';
$route['collaboration-delete/(:num)'] = 'collaboration/delete/$1';

$route['bank-add'] = 'bank/add';
$route['bank-edit/(:num)'] = 'bank/edit/$1';
$route['bank-delete/(:num)'] = 'bank/delete/$1';

$route['program-add'] = 'program/add';
$route['program-edit/(:num)'] = 'program/edit/$1';
$route['program-delete/(:num)'] = 'program/delete/$1';

$route['category-add'] = 'category/add';
$route['category-edit/(:num)'] = 'category/edit/$1';
$route['category-delete/(:num)'] = 'category/delete/$1';

$route['article-draft'] = 'article/draft';
$route['article-pending'] = 'article/pending';
$route['article-hide'] = 'article/hide';
$route['article-add'] = 'article/add';
$route['article-edit/(:num)'] = 'article/edit/$1';
$route['article-delete/(:num)'] = 'article/delete/$1';
$route['comments'] = 'article/comments';

$route['gallery-add'] = 'gallery/add';
$route['gallery-edit/(:num)'] = 'gallery/edit/$1';
$route['gallery-delete/(:num)'] = 'gallery/delete/$1';

$route['publication-add'] = 'publication/add';
$route['publication-edit/(:num)'] = 'publication/edit/$1';
$route['publication-delete/(:num)'] = 'publication/delete/$1';

$route['user-add'] = 'user/add';
$route['user-edit/(:num)'] = 'user/edit/$1';
$route['user-delete/(:num)'] = 'user/delete/$1';

$route['role-add'] = 'role/add';
$route['role-edit/(:num)'] = 'role/edit/$1';
$route['role-delete/(:num)'] = 'role/delete/$1';

$route['admin-add'] = 'admin/add';
$route['admin-edit/(:num)'] = 'admin/edit/$1';
$route['admin-delete/(:num)'] = 'admin/delete/$1';