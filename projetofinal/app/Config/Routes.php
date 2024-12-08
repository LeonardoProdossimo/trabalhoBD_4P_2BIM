<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/produto', 'Produto::index');
$routes->get('/produto/create', 'Produto::create');
$routes->get('/produto/edit/(:num)', 'Produto::edit/$1');
$routes->get('/produto/delete/(:num)', 'Produto::delete/$1');
$routes->post('/produto/store', 'Produto::store');
