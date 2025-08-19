<?php

<<<<<<< HEAD
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
=======
namespace Config;

use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

// Set default namespace, controller, and method
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');    // default welcome page controller
$routes->setDefaultMethod('index');

// Define routes
$routes->get('/', 'Home::index');               // Default CodeIgniter welcome page at "/"
$routes->get('bootstrap', 'Bootstrap::index');  // Your Bootstrap page at "/bootstrap"
>>>>>>> f69d1ecc667fa858b3ff951ed491fe09fae783e2
