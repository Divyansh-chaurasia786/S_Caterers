<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

// Detect Vercel environment
$isVercel = isset($_SERVER['VERCEL']) || getenv('VERCEL') || (isset($_SERVER['HTTP_HOST']) && str_contains($_SERVER['HTTP_HOST'], 'vercel.app'));

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

    putenv("APP_PACKAGES_CACHE=/tmp/bootstrap/cache/packages.php");
    $_ENV['APP_PACKAGES_CACHE'] = '/tmp/bootstrap/cache/packages.php';
    $_SERVER['APP_PACKAGES_CACHE'] = '/tmp/bootstrap/cache/packages.php';

    putenv("APP_SERVICES_CACHE=/tmp/bootstrap/cache/services.php");
    $_ENV['APP_SERVICES_CACHE'] = '/tmp/bootstrap/cache/services.php';
    $_SERVER['APP_SERVICES_CACHE'] = '/tmp/bootstrap/cache/services.php';

    $srcDb = __DIR__ . '/../database/database.sqlite';
    $tmpDb = '/tmp/database/database.sqlite';
    
    $needCopy = true;
    if (file_exists($tmpDb) && @filesize($tmpDb) > 1000) {
        try {
            $checkPdo = new \PDO("sqlite:" . $tmpDb);
            $stmt = $checkPdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='gallery_images'");
            if ($stmt && $stmt->fetch()) {
                $needCopy = false;
            }
        } catch (\Throwable $e) {}
    }

    if ($needCopy) {
        if (file_exists($srcDb) && @filesize($srcDb) > 1000) {
            @copy($srcDb, $tmpDb);
        } else {
            try {
                @touch($tmpDb);
                @chmod($tmpDb, 0777);
                $pdo = new \PDO("sqlite:" . $tmpDb);
                $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $pdo->exec("CREATE TABLE IF NOT EXISTS gallery_images (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    title TEXT NOT NULL,
                    category TEXT NOT NULL,
                    path TEXT NOT NULL,
                    cloudinary_id TEXT DEFAULT NULL,
                    is_video INTEGER DEFAULT 0,
                    is_local INTEGER DEFAULT 1,
                    media_type TEXT DEFAULT 'image',
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )");
            } catch (\Throwable $e) {}
        }
    }

    putenv("DB_CONNECTION=sqlite");
    $_ENV['DB_CONNECTION'] = 'sqlite';
    $_SERVER['DB_CONNECTION'] = 'sqlite';

    putenv("DB_DATABASE={$tmpDb}");
    $_ENV['DB_DATABASE'] = $tmpDb;
    $_SERVER['DB_DATABASE'] = $tmpDb;

    putenv("SESSION_DRIVER=array");
    $_ENV['SESSION_DRIVER'] = 'array';
    $_SERVER['SESSION_DRIVER'] = 'array';
} else {
    // Local / Non-Vercel environment: Test MySQL connection
    $dbConn = env('DB_CONNECTION', 'mysql');
    if ($dbConn === 'mysql') {
        try {
            $host = env('DB_HOST', '127.0.0.1');
            $port = env('DB_PORT', 3306);
            $user = env('DB_USERNAME', 'root');
            $pass = env('DB_PASSWORD', '');
            @$pdo = new \PDO("mysql:host={$host};port={$port}", $user, $pass, [\PDO::ATTR_TIMEOUT => 1]);
        } catch (\Throwable $e) {
            // MySQL server is not running locally; fallback to SQLite automatically so app never crashes!
            putenv("DB_CONNECTION=sqlite");
            $_ENV['DB_CONNECTION'] = 'sqlite';
            $_SERVER['DB_CONNECTION'] = 'sqlite';

            $sqliteDb = __DIR__ . '/../database/database.sqlite';
            if (!file_exists($sqliteDb)) {
                @touch($sqliteDb);
            }
            putenv("DB_DATABASE={$sqliteDb}");
            $_ENV['DB_DATABASE'] = $sqliteDb;
            $_SERVER['DB_DATABASE'] = $sqliteDb;
        }
    }
}

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*'),
        );
    })->create();

$app->booted(function () use ($isVercel) {
    if ($isVercel) {
        $tmpDb = '/tmp/database/database.sqlite';
        config([
            'database.default' => 'sqlite',
            'database.connections.sqlite.database' => $tmpDb,
            'session.driver' => 'array',
            'cache.default' => 'array',
            'view.compiled' => '/tmp/storage/framework/views',
        ]);
    }
});

return $app;
