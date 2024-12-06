<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('connexionForm', 'Auth:connexionForm');
$routes->post('connexion','Auth::connexion');
$routes->get('RegisterForm', 'Auth:RegisterForm');
$routes->post('Register','Auth::Register');
$routes->get('ItemsList', 'Items::ItemsList');
$routes->get('ItemsForm', 'Items::ItemsForm');
$routes->post('Items', 'Items::Items');

