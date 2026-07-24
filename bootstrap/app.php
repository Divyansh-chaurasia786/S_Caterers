<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

// On Vercel, /var/task is read-only. Create writable directories in /tmp FIRST,
// before Laravel boots, so all service providers can register successfully.
$isVercel = isset($_SERVER['VERCEL']) || getenv('VERCEL') || getenv('APP_ENV') === 'production';

if ($isVercel) {
    $tmpDirs = [
        '/tmp/storage/framework/views',
        '/tmp/storage/framework/cache/data',
        '/tmp/storage/framework/sessions',
        '/tmp/storage/app/public',
        '/tmp/storage/logs',
        '/tmp/bootstrap/cache',
        '/tmp/database',
    ];
    foreach ($tmpDirs as $dir) {
        if (!is_dir($dir)) {
            @mkdir($dir, 0777, true);
        }
    }

    // Ensure database.sqlite is copied to writable /tmp directory on Vercel
    $srcDb = __DIR__ . '/../database/database.sqlite';
    $tmpDb = '/tmp/database/database.sqlite';
    if (!file_exists($tmpDb)) {
        if (file_exists($srcDb)) {
            @copy($srcDb, $tmpDb);
        } else {
            @touch($tmpDb);
            @chmod($tmpDb, 0777);
        }
    }
    putenv("DB_CONNECTION=sqlite");
    $_ENV['DB_CONNECTION'] = 'sqlite';
    $_SERVER['DB_CONNECTION'] = 'sqlite';

    putenv("DB_DATABASE={$tmpDb}");
    $_ENV['DB_DATABASE'] = $tmpDb;
    $_SERVER['DB_DATABASE'] = $tmpDb;
}

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*'),
        );
    })->create();

// Override storage and bootstrap paths to /tmp on Vercel
if ($isVercel) {
    $app->useStoragePath('/tmp/storage');
    $app->useBootstrapPath('/tmp/bootstrap');
}

return $app;
