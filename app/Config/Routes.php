<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//create two filter for admin & users

//home routes
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->post('/login-post', 'AuthController::loginPost');

//Admin routes
$routes->get('/register', 'AuthController::register',['filter'=>'IsAdminLogin']);
$routes->post('/register-post', 'AuthController::registerPost',['filter'=>'IsAdminLogin']);
$routes->get('/users', 'AuthController::index',['filter'=>'IsAdminLogin']);

//User Route
$routes->get('/logout', 'AuthController::logout');
$routes->get('/tasks', 'TaskController::index',['filter'=>'IsLogin']);
$routes->get('/task/create', 'TaskController::create',['filter'=>'IsLogin']);
$routes->post('/task/store', 'TaskController::store',['filter'=>'IsLogin']);
$routes->get('/task/edit/(:num)', 'TaskController::edit/$1',['filter'=>'IsLogin']);
$routes->post('/task/update/(:num)', 'TaskController::update/$1',['filter'=>'IsLogin']);
$routes->get('/task/delete/(:num)', 'TaskController::delete/$1',['filter'=>'IsLogin']);
$routes->get('/task/view/(:num)', 'TaskController::view/$1');

