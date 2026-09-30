<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/', 'Pages::home');
$routes->get('About', 'About::index');
$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');
