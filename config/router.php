<?php
    
    $routes = [ 
        '/' => 'index',
        '/admin-login' => 'admin-login',
        '/admin-dashboard' => 'admin-dashboard',
        '/admin-facilities' => 'admin-facilities',
        '/admin-practitioners' => 'admin-practitioners',
        '/admin-mothers' => 'admin-mothers',
        '/admin-logs' => 'admin-logs',
        '/admin-backup' => 'admin-backup',
        '/practitioner-login' => 'practitioner-login',
        '/practitioner-signup' => 'practitioner-signup',
        '/practitioner' => 'practitioner',
        '/practitioner/learning-materials' => 'practitioner-materials',
        '/practitioner/learning-content' => 'practitioner-content',
        '/practitioner/facility' => 'practitioner-facility',
        '/mother-login' => 'mother-login',
        '/mother-signup' => 'mother-signup',
        '/mother' => 'mother',
        '/mother/community' => 'mother-community',
        '/mother/report' => 'mother-report',
        '/mother/learning-materials' => 'mother-materials',
        '/mother-activity' => 'mother-activity',
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
            case 'admin-facilities':
                require "./views/admin-facilities.view.php";
                break;
            case 'admin-practitioners':
                require "./views/admin-practitioners.view.php";
                break;
            case 'admin-mothers':
                require "./views/admin-mothers.view.php";
                break;
            case 'admin-logs':
                require "./views/admin-logs.view.php";
                break;
            case 'admin-backup':
                require "./views/admin-backup.view.php";
                break;
            case 'practitioner-login':
                require "./views/practitioner-login.view.php";
                break;
            case 'practitioner-signup':
                require "./views/practitioner-signup.view.php";
                break;
            case 'practitioner':
                require "./views/practitioner-interface.view.php";
                break;
            case 'practitioner-materials':
                require "./views/practitioner-materials.view.php";
                break;
            case 'practitioner-content':
                require "./views/practitioner-learning-content.view.php";
                break;
            case 'practitioner-facility':
                require "./views/practitioner-facility.view.php";
                break;
            case 'mother-login':
                require "./views/mother-login.view.php";
                break;
            case 'mother-signup':
                require "./views/mother-signup.view.php";
                break;
            case 'mother':
                require "./views/mother-interface.view.php";
                break;
            case 'mother-community':
                require "./views/mother-community.view.php";
                break;
            case 'mother-report':
                require "./views/mother-report.view.php";
                break;
            case 'mother-materials':
                require "./views/mother-learning-materials.view.php";
                break;
            case 'mother-activity':
                require "./views/mother-activity.view.php";
                break;
            default:
                echo "<h2 class='text-center text-4xl text-gray-500 mt-5'> 404 Page Not Found </h2>";
                break;
        }
    } else {
        echo "<h2 class='text-center text-4xl text-gray-500 mt-5'> 404 Page Not Found </h2>";

    }
