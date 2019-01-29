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
$route['default_controller']    = 'C_Home';
$route['admin']                 = 'C_Login';
$route['admin/auth']            = 'C_Login/auth';
$route['admin/dashboard']       = 'C_Home/Admin';
$route['logout']                = 'C_Login/logout';
//$route['admin/(:any)']        = 'C_Login';
$route['galeri']                = 'C_Home/full_galeri';
$route['galeri/(:any)']         = 'C_Home/full_galeri';
$route['book']                  = 'C_Home/Book';
$route['book/(:any)']           = 'C_Home/Book';
$route['about']                 = 'C_Home/About';
$route['about/(:any)']          = 'C_Home/About';
$route['products']              = 'C_Home';
$route['group']                 = 'C_Home/Group';
$route['products/group']        = 'C_Home/Group';
$route['meeting']               = 'C_Home/Meeting';
$route['products/meeting']      = 'C_Home/Meeting';
$route['reservasi']             = 'C_Home/Reservasi';
$route['products/reservasi']    = 'C_Home/Reservasi';
$route['booking/auth']          = 'C_Booking/auth';
$route['booking/auth/(:any)']   = 'C_Booking/auth';
$route['admin/data_paket']      = 'C_Paket';
$route['admin/data_galeri']     = 'C_Galeri';
$route['admin/data_booking']    = 'C_Booking';
$route['admin/data_destinasi']  = 'C_Destinasi';
$route['admin/add_galeri']      = 'C_Galeri/add';
$route['cari/search_keyword']   = 'C_Home/search_keyword';

$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
