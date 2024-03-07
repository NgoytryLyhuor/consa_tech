<?php

function route()
{
    // Get the requested URI
    $uri = $_SERVER['REQUEST_URI'];

    // Get the base path dynamically
    $basePath = str_replace("/index.php", "", $_SERVER["SCRIPT_NAME"]);

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

        case '/contact':
            echo 'Contact Us';
            break;

        default:
            echo '404 Not Found';
            break;
    }
}
