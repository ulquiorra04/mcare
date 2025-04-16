<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Doctor;
use App\Controllers\Patient;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Doctor routes
$routes->get('doctors', [Doctor::class, 'index']);
$routes->post('doctors', [Doctor::class, 'index']);
$routes->post('doctors/edit', [Doctor::class, 'edit']);
$routes->get('doctors/delete/(:segment)', [Doctor::class, 'delete']);

// Patient routes
$routes->get('patients', [Patient::class, 'index']);
$routes->post('patients', [Patient::class, 'index']);
$routes->post('patients/edit', [Patient::class, 'edit']);
$routes->get('patients/delete/(:segment)', [Doctor::class, 'delete']);