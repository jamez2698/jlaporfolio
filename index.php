<?php

$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;

// Define routes in a separate configuration file
$routes = [
    '/myporfolio/' => '/modules/body.php',
    '/myporfolio/home/' => '/modules/home.php',
    '/myporfolio/porfolio/' => '/modules/porfolio.php',
];

// Default route
$route = '/404.php';

// Find a matching route
if (array_key_exists($request_uri, $routes)) {
    $route = $routes[$request_uri];
}

require __DIR__ . $route;
