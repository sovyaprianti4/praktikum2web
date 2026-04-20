<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Page::index');

$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');

$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');

/* ADMIN */
$routes->get('/admin/artikel', 'Artikel::admin_index');
$routes->get('/admin/artikel/add', 'Artikel::add');
$routes->post('/admin/artikel/save', 'Artikel::save');

$routes->get('/admin/artikel/edit/(:num)', 'Artikel::edit/$1');
$routes->post('/admin/artikel/update/(:num)', 'Artikel::update/$1');

$routes->get('/admin/artikel/delete/(:num)', 'Artikel::delete/$1');