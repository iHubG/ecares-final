<?php

// Define the routes and their corresponding view files
$routes = [
    '/' => 'home.view.php',
    '/admin-login' => 'admin-login.view.php',
    '/admin-dashboard' => 'admin-dashboard.view.php',
    '/admin-facilities' => 'admin-facilities.view.php',
    '/admin-practitioners' => 'admin-practitioners.view.php',
    '/admin-mothers' => 'admin-mothers.view.php',
    '/admin-logs' => 'admin-logs.view.php',
    '/admin-backup' => 'admin-backup.view.php',
    '/practitioner-login' => 'practitioner-login.view.php',
    '/practitioner-signup' => 'practitioner-signup.view.php',
    '/practitioner' => 'practitioner-interface.view.php',
    '/practitioner/learning-materials' => 'practitioner-materials.view.php',
    '/practitioner/learning-content' => 'practitioner-learning-content.view.php',
    '/practitioner/facility' => 'practitioner-facility.view.php',
    '/mother-login' => 'mother-login.view.php',
    '/mother-signup' => 'mother-signup.view.php',
    '/mother' => 'mother-interface.view.php',
    '/mother/community' => 'mother-community.view.php',
    '/mother/report' => 'mother-report.view.php',
    '/mother/learning-materials' => 'mother-learning-materials.view.php',
    '/mother-activity' => 'mother-activity.view.php',
    '/terms' => 'ecares-terms.view.php',
    '/privacy-policy' => 'ecares-privacy-policy.view.php',
];

$url = strtok($_SERVER['REQUEST_URI'], '?');

$viewFile = isset($routes[$url]) ? "./views/" . $routes[$url] : null;

if ($viewFile && file_exists($viewFile)) {
    require $viewFile;
} else {
    echo "<h2 class='text-center text-4xl text-gray-500 mt-5'> 404 Page Not Found </h2>";
}
