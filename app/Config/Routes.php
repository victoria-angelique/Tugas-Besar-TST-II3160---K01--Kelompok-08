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
$routes->get('/logout', 'AuthAPIController::logout');
$routes->delete('/api/wahana/(:num)', 'WahanaAPIController::delete/$1'); // delete wahana by id
$routes->get('/', 'HomeController::index', ['filter' => 'authGuard']);
$routes->get('/rating', 'RatingController::index');
$routes->match(['get','post'], 'AuthAPIController/login_action', 'AuthAPIController::login_action');


