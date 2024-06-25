<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/comentarios', 'Comment::index');
$routes->get('/entrar', 'Login::index');
$routes->post('/entrar', 'Login::store');
