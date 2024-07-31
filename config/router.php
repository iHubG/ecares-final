<?php
    
    $routes = [ 
        '/ecares-final/' => 'index',
        '/ecares-final/admin-login' => 'admin-login',
        '/ecares-final/practitioner-login' => 'practitioner-login',
        '/ecares-final/mother-login' => 'mother-login',
    ];

    $url = $_SERVER['REQUEST_URI'];

    $url = strtok($url, '?');

    if (array_key_exists($url, $routes)) {
        $route = $routes[$url];
        switch ($route) {
            case 'index':
                require "./views/home.view.php";
                break;
            case 'admin-login':
                require "./views/admin-login.view.php";
                break;
            case 'practitioner-login':
                require "./views/practitioner-login.view.php";
                break;
            case 'mother-login':
                require "./views/mother-login.view.php";
                break;
            default:
                echo "404 Page Not Found";
                break;
        }
    } else {
        echo "404 Page Not Found";

    }

