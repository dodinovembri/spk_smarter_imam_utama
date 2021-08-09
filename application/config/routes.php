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
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// routes for auth
$route['login'] = 'AuthController';
$route['auth/login'] = 'AuthController/login';
$route['home'] = 'HomeController';
$route['logout'] = 'HomeController/logout';

// routes for user
$route['user'] = 'UserController';
$route['user/create'] = 'UserController/create';
$route['user/store'] = 'UserController/store';
$route['user/edit/(:any)'] = 'UserController/edit/$1';
$route['user/show/(:any)'] = 'UserController/show/$1';
$route['user/update/(:any)'] = 'UserController/update/$1';
$route['user/destroy/(:any)'] = 'UserController/destroy/$1';

// routes for criteria
$route['criteria'] = 'CriteriaController';
$route['criteria/updateBobot'] = 'CriteriaController/updateBobot';
$route['criteria/sub_criteria'] = 'CriteriaController/sub_criteria';
$route['criteria/create'] = 'CriteriaController/create';
$route['criteria/store'] = 'CriteriaController/store';
$route['criteria/edit/(:any)'] = 'CriteriaController/edit/$1';
$route['criteria/show/(:any)'] = 'CriteriaController/show/$1';
$route['criteria/update/(:any)'] = 'CriteriaController/update/$1';
$route['criteria/destroy/(:any)'] = 'CriteriaController/destroy/$1';

// routes for sub criteria
$route['sub_criterias/(:any)'] = 'SubCriteriaController/index/$1';
$route['sub_criteria/create'] = 'SubCriteriaController/create';
$route['sub_criteria/store'] = 'SubCriteriaController/store';
$route['sub_criteria/edit/(:any)'] = 'SubCriteriaController/edit/$1';
$route['sub_criteria/show/(:any)'] = 'SubCriteriaController/show/$1';
$route['sub_criteria/update/(:any)'] = 'SubCriteriaController/update/$1';
$route['sub_criteria/destroy/(:any)'] = 'SubCriteriaController/destroy/$1';

// routes for ranking
$route['ranking'] = 'RankingController';
$route['smarter'] = 'RankingController/smarter';

// routes for profile
$route['profile'] = 'ProfileController';
$route['profile/create'] = 'ProfileController/create';
$route['change_password'] = 'ProfileController/change_password';
$route['profile/store/(:any)'] = 'ProfileController/store/$1';
$route['profile/edit/(:any)'] = 'ProfileController/edit/$1';
$route['profile/show/(:any)'] = 'ProfileController/show/$1';
$route['profile/update/(:any)'] = 'ProfileController/update/$1';
$route['profile/destroy/(:any)'] = 'ProfileController/destroy/$1';
$route['profile/store_pw/(:any)'] = 'ProfileController/store_pw/$1';

// routes for alternative
$route['alternative'] = 'AlternativeController';
$route['alternative/create'] = 'AlternativeController/create';
$route['alternative/alternative_value'] = 'AlternativeController/alternative_value';
$route['alternative/store'] = 'AlternativeController/store';
$route['alternative/edit/(:any)'] = 'AlternativeController/edit/$1';
$route['alternative/show/(:any)'] = 'AlternativeController/show/$1';
$route['alternative/update/(:any)'] = 'AlternativeController/update/$1';
$route['alternative/destroy/(:any)'] = 'AlternativeController/destroy/$1';

// routes for alternative value
$route['alternative_values/(:any)'] = 'AlternativeValueController/index/$1';
$route['alternative_value/create'] = 'AlternativeValueController/create';
$route['alternative_value/store'] = 'AlternativeValueController/store';
$route['alternative_value/show/(:any)'] = 'AlternativeValueController/show/$1';
$route['alternative_value/edit/(:any)'] = 'AlternativeValueController/edit/$1';
$route['alternative_value/update/(:any)'] = 'AlternativeValueController/update/$1';
$route['alternative_value/destroy/(:any)'] = 'AlternativeValueController/destroy/$1';