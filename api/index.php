<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Create required /tmp directories before anything else (Vercel serverless)
foreach ([
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/app/public',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
    '/tmp/database',
] as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

// Capture the request FIRST before bootstrapping
// so RoutingServiceProvider can bind it into UrlGenerator
$request = Request::capture();

$app = require_once __DIR__.'/../bootstrap/app.php';

// Bind the captured request into the container before bootstrap
$app->instance('request', $request);

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle($request);

$response->send();

$kernel->terminate($request, $response);
