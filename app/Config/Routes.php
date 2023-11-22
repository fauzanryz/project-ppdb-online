<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Routes Auth
$routes->get('/register', 'Auth::register');
$routes->get('/login', 'Auth::login');
$routes->post('/saveRegister', 'Auth::saveRegister');
