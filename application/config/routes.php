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
|	http://codeigniter.com/user_guide/general/routing.html
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

////CUSTOMERS////
$route['default_controller'] = 'socks';
$route['cart'] = 'socks/cart';
$route['login'] = 'socks/login';
$route['product_info/(:any)'] = 'socks/product_info/$1';
$route['index_2'] = 'socks/index_2';
$route['index_3'] = 'socks/index_3';
$route['mens'] = 'socks/mens';
$route['payment'] = 'socks/payment';
$route['view_cart'] = 'socks/view_cart';
$route['edit_cart'] = 'socks/edit_cart';
$route['remove_cart/(:any)'] = 'socks/remove_cart/$1';
$route['checkout'] = 'socks/checkout';
$route['proceed'] = 'socks/proceed';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

////ADMIN/////
$route['login_a'] = 'socks/login_a';
$route['index_a'] = 'socks/index_a';
$route['logout_a'] = 'socks/logout_a';
$route['add_a'] = 'socks/add_a';
$route['dash_a'] = 'socks/dash_a';
$route['products_a'] = 'socks/products_a';
$route['search_a'] = 'socks/search_a';
$route['items_a/(:any)'] = 'socks/items_a/$1';
$route['delete_product/(:any)'] = 'socks/delete_product/$1';
$route['edit_product/(:any)'] = 'socks/edit_product/$1';
$route['login_admin'] = 'socks/login_admin';
$route['add_admin'] = 'socks/add_admin';