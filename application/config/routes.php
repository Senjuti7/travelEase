<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['search'] = 'home/search';
$route["photo-gallery"]="gallery/photo_gallery";
$route["(:any).htm"]="home/error";
$route["our-branches"]="packers_movers/state";
$route["packers-movers-(:any)-india"]="packers_movers/state_services/$1";
$route["(:any)-packers-movers-(:any)"]="packers_movers/city/$2/$1";

$route['translate_uri_dashes'] = TRUE;