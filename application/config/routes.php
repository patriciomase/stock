<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] 		= "sales";
$route['404_override'] 				= '';

$route['caja/(:any)']				= 'cashboxes/index/$1';
$route['caja']						= 'cashboxes';

$route['ventas']					= 'sales';
$route['articulos']					= 'products';
$route['articulos/(:any)']			= 'products/$1';
$route['categorias']				= 'categories';
$route['movimientos/(:any)']		= 'movements/by_date/$1';
$route['movimientos']				= 'movements/by_date';
$route['acerca_de']					= 'about';

$route['cashboxes/(:any)']			= 'cashboxs/index/$1';
$route['products/(:any).json']		= 'products/by_code/$1';

/* End of file routes.php */
/* Location: ./application/config/routes.php */