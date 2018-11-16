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


$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';

$route['users/index'] = 'users/index';
$route['users/current'] = 'users/current';
$route['users/current/(:any)'] = 'users/mydata/$1';
$route['users/switch_user/(:any)/(:any)'] = 'users/switch_user/$1/$2';
$route['users/(:any)'] = 'users/view/$1';
$route['users'] = 'users';

$route['item/index'] = 'item/index';
$route['item/create'] = 'item/create';
$route['item/delete/(:any)'] = 'item/delete/$1';
$route['item/myitem'] = 'item/myitem';
$route['item/(:any)'] = 'item/view/$1';
$route['item'] = 'item';

$route['bid/index'] = 'bid/index';
$route['bid/create'] = 'bid/create';
$route['bid/myfailedbid'] = 'bid/myfailedbid';
$route['bid/create/(:any)'] = 'bid/create/$1';
$route['bid/confirm_bidder/(:any)/(:num)'] = 'bid/confirm_bidder/$1/$2';
$route['bid/(:any)'] = 'bid/view/$1';
$route['bid'] = 'bid';

$route['loan/index'] = 'loan/index';
$route['loan/myloan'] = 'loan/myloan';
$route['loan/create'] = 'loan/create';
$route['loan/(:any)'] = 'loan/view/$1';
$route['loan'] = 'loan';

$route['post/index'] = 'post/index';
$route['post/allposts'] = 'post/allposts';
$route['post/myposts'] = 'post/myposts';
$route['post/create'] = 'post/create';
$route['post/(:any)'] = 'post/view/$1';
$route['post'] = 'post';

$route['comment/index'] = 'comment/index';
$route['comment/create'] = 'comment/create';
$route['comment/create/(:any)'] = 'comment/create/$1';
$route['comment/(:any)'] = 'comment/view/$1';
$route['comment'] = 'comment';

$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
