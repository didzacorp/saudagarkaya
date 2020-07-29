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

// $route['default_controller'] = 'Welcome';
$urlFunnel = explode('/', $_SERVER['REQUEST_URI']);
// echo $urlFunnel[1];exit;
$route['default_controller'] = 'ground';

if ($urlFunnel[1] == 'register') {
	$route['register/(:any)'] = "register/index/$1";
}else if ($urlFunnel[1] == 'register_form') {
	$route['register_form/(:any)'] = "register_form/index/$1";
}else if ($urlFunnel[1] == 'register_form') {
        $route['register/(:any)'] = "register_form/index/$1";
}else if ($urlFunnel[1] == 'supergoat') {
	$route['supergoat/(:any)'] = "supergoat/index/$1";
}else if ($urlFunnel[1] == 'reseller') {
	$route['reseller/(:any)'] = "reseller/index/$1";
}else if ($urlFunnel[1] == 'checkout') {
	$route['checkout/(:any)'] = "checkout/index/$1";
}else if ($urlFunnel[1] == 'api') {
	$route['api/(:any)'] = "api/$1";
}else if ($urlFunnel[1] == 'payment') {
	$route['payment/(:any)'] = "payment/index/$1";
}else{
	$route['(:any)'] = 'ground/index/$1';
}
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route['supergoat/(:any)'] = "supergoat/index/$1";
// $route['reseller/(:any)'] 	= "reseller/index/$1";

// example: '/en/about' -> use controller 'about'
// $route['^id/(.+)$'] = "$1";
// $route['^en/(.+)$'] = "$1";

 // $route['supergoat/(:any)'] = "supergoat/index/$1";
 // $route['supergoat/(:any)'] = "supergoat/index";

 // $route['supergoat/(:any)'] = "supergoat/index/$1";
 // $route['reseller/(:any)'] = "reseller/index/$1";

 // $route['(:any)'] = "ground/index/$1";
 // $route['manage/daftarBasic'] = "manage/daftarBasic";

// '/en' and '/id' -> use default controller
// $route['^id$'] = $route['default_controller'];
// $route['^en$'] = $route['default_controller'];
