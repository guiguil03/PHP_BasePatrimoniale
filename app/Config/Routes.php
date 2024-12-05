<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get("/home", 'Home::home');
$routes->get("/connexionForm", 'Auth::ConnexionForm') ;
$routes->post("/connexion", 'Auth::Connexion') ;
$routes->get("/registerForm", "Auth::registerForm");
$routes->post("/register", "Auth::register");

$routes->get("/elements", 'Home::elements');
$routes->get('logout','Auth::logout'); 
$routes->get('connected','Auth::connected'); 
$routes->get('ItemsForm','Items::ItemsForm');
$routes->post('Items', 'Items::Items')
;