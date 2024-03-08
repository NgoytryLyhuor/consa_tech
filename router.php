<?php

function route()
{
    // Get the requested URI
    $uri = $_SERVER['REQUEST_URI'];

    // Get the script path
    $scriptPath = $_SERVER["SCRIPT_NAME"];

    // Determine the base path dynamically
    $basePath = rtrim(dirname($scriptPath), '/');

    // Remove the base path from the URI
    $uri = str_replace($basePath, '', $uri);

    // Add a trailing slash if needed
    $uri = '/' . ltrim($uri, '/');

    // Define your routes
    switch ($uri) {
        case '/':
            include 'home.php';
            break;

        case '/about':
            include 'about_us.php';
            break;

        case '/services':
            include 'services.php';
            break;

        default:
            echo '404 Not Found';
            break;
    }
}
