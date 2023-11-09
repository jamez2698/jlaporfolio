<?php

$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;

// Define routes in a separate configuration file
$routes = [
    '/jlaporfolio/' => '/modules/body.php',
    '/jlaporfolio/home/' => '/modules/home.php',
    '/jlaporfolio/porfolio/' => '/modules/porfolio.php',
];

// Default route
$route = '/404.php';

// Find a matching route
if (array_key_exists($request_uri, $routes)) {
    $route = $routes[$request_uri];
}

require __DIR__ . $route;
