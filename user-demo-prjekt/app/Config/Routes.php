<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/page1', 'page1::index');
$routes->get('/about','about::index');

service('auth')->routes($routes);
// app/Config/Routes.php
$routes->post('auth/jwt', '\App\Controllers\Auth\LoginController::jwtLogin');

$routes->resource('api/v1/cars');

$routes->group('api', ['filter' => 'jwt'], static function ($routes) {
    // ...
});

$routes->get('users', 'UserController::list', ['filter' => 'jwt']);