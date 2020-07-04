<?php

/*
|--------------------------------------------------------------------------
| vendor autoload
|--------------------------------------------------------------------------
|
| Import composer vendor
|
*/
require '../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| configuration file
|--------------------------------------------------------------------------
|
| Import configuration
|
*/
require '../config/config.php';


/*
|--------------------------------------------------------------------------
| helpers file
|--------------------------------------------------------------------------
|
| Import helpers
|
*/
require '../helper/helper.php';

/**
 * Import Class Route
 * 
 */
use App\Route\Route;

/**
 * Create instance Class Route
 * 
 */
$route = new Route;

/**
 * Call function run
 * runing route
 *  
 */
$route->run();
