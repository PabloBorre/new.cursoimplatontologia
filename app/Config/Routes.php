<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contacto', 'Home::contacto');
$routes->get('/docentes', 'Home::docentes');
$routes->get('/cursos', 'Home::cursos');
$routes->get('/cursos/(:segment)', 'Home::cursoDetalle/$1');
$routes->get('/docente/(:segment)', 'Home::docente/$1');