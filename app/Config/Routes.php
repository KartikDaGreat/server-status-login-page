<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LoginController::index');
$routes->post('/login', 'LoginController::login');
$routes->get('/view','DashboardController::view');
$routes->get('/add','DashboardController::view');

$routes->get('/geturl','Cron::geturl');