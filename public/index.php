<?php
session_start();
/*
 * Require All File With Composer
 */
require '../vendor/autoload.php';
error_reporting(E_ALL);
set_error_handler('\Core\Error::errorHandler');
set_exception_handler('\Core\Error::exceptionHandler');
/*
 * Boot And Connect To Database
 */
\Core\Database::boot();

/*
 * Create Routing Object
 */

$route = new Core\Router();

/*
 * Add Uri To Routing System
 */

$route->add('/','HomeController@index');
/*
 * Dispatch Current Address
 */
$route->dispatch($_SERVER['REQUEST_URI']);
