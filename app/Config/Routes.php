<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('connexionForm', 'Auth::connexionForm');
$routes->post('connexion','Auth::connexion');
$routes->get('registerForm', 'Auth::RegisterForm');
$routes->post('register','Auth::Register');
$routes->get('ItemsList', 'Items::ItemsList');
$routes->get('ItemsForm', 'Items::ItemsForm');
$routes->post('Items', 'Items::Items');
$routes->get('details', 'Home::details');
$routes->get("/MapController", 'MapController::index');
$routes->get('/items/searchItems', 'Items::searchItems');
