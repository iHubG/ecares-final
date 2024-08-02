<?php
    
    $routes = [ 
        '/ecares-final/' => 'index',
        '/ecares-final/admin-login' => 'admin-login',
        '/ecares-final/admin-dashboard' => 'admin-dashboard',
        '/ecares-final/practitioner-login' => 'practitioner-login',
        '/ecares-final/practitioner-signup' => 'practitioner-signup',
        '/ecares-final/mother-login' => 'mother-login',
        '/ecares-final/mother-signup' => 'mother-signup',
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
            case 'admin-dashboard':
                require "./views/admin-dashboard.view.php";
                break;
            case 'practitioner-login':
                require "./views/practitioner-login.view.php";
                break;
            case 'practitioner-signup':
                require "./views/practitioner-signup.view.php";
                break;
            case 'mother-login':
                require "./views/mother-login.view.php";
                break;
            case 'mother-signup':
                require "./views/mother-signup.view.php";
                break;
            default:
                echo "<h2 class='text-center text-4xl text-gray-500 mt-5'> 404 Page Not Found </h2>";
                break;
        }
    } else {
        echo "<h2 class='text-center text-4xl text-gray-500 mt-5'> 404 Page Not Found </h2>";

    }
