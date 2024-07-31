<?php
    
    $routes = [ 
        '/ecares-final/' => 'index',
        '/ecares-final/about' => 'about',
    ];

    $url = $_SERVER['REQUEST_URI'];

    $url = strtok($url, '?');

    if (array_key_exists($url, $routes)) {
        $route = $routes[$url];
        switch ($route) {
            case 'index':
                require "./views/home.view.php";
                break;
            case 'about':
                echo "about page";
                break;
            default:
                echo "404 Page Not Found";
                break;
        }
    } else {
        echo "404 Page Not Found";

    }

