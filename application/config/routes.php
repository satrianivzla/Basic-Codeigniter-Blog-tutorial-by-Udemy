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

//RoutesUsers
$route['register']               =   'users/register';
$route['login']                  =   'users/login';
$route['logout']                 =   'users/login/logout';
$route['dashboard']              =   'users/dashboard';
$route['profile']                =   'users/dashboard/profile';
$route['edit_profile_pic']       =   'users/dashboard/edit_profile_pic';
$route['update_profile_pic']     =   'users/dashboard/update_profile_pic';
$route['edit_profile']           =   'users/dashboard/edit_profile';

$route['view_author_profile/(:any)']   = 'users/public_access/view_author_profile/$1';

// //RoutesBlog
$route['latest_posts']               =   'posts/blog/latest_posts';
$route['add_post']               =   'posts/blog/add_post';
$route['my_post']               =    'posts/blog/my_post';
$route['view_post/(:any)']      =    'posts/blog/view_post/$1';
$route['save_comment']          =   'posts/blog/save_comment';
$route['view_authors_posts/(:any)']   = 'posts/blog/view_authors_posts/$1';

$route['default_controller'] = 'users/register';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
