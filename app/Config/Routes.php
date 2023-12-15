<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/api/wahana/', 'WahanaAPIController::index'); // get all wahana
$routes->post('/api/wahana/', 'WahanaAPIController::create'); // create wahana
$routes->get('/api/wahana/(:num)', 'WahanaAPIController::show/$1'); // get wahana by id
$routes->put('/api/wahana/(:num)', 'WahanaAPIController::update/$1'); // update wahana by id

$routes->get('/login', 'AuthAPIController::login_view');
$routes->get('/logout', 'LoginController::logout');
$routes->delete('/api/wahana/(:num)', 'WahanaAPIController::delete/$1'); // delete wahana by id
$routes->match(['get','post'], 'AuthAPIController/login_action', 'AuthAPIController::login_action');

$routes->get('/analytics', 'AnalyticsController::index');
$routes->get('/api/analytics', 'AnalyticsAPIController::index');
$routes->get('/api/analytics/(:num)', 'AnalyticsAPIController::show/$1');

