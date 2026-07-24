<?php

define('LARAVEL_START', microtime(true));

// Maintenance check
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoload Composer
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Capture and handle request
$app->handleRequest(Illuminate\Http\Request::capture());
