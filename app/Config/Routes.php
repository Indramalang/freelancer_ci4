<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/contact/save', 'Home::saveMessage');
$routes->get('downloads/(:segment)', 'Home::download/$1');
$routes->get('/download/resume', 'Home::resume');
$routes->get('unduhan/(:segment)', 'Home::unduhan/$1');