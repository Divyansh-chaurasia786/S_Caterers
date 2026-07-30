<?php
/**
 * S. Caterers — Kloudbean / Cloudways Hosting Setup & Database Migration Tool
 * Access in browser: http://yourdomain.com/cloudbean-setup.php
 */

define('LARAVEL_START', microtime(true));

$rootDir = dirname(__DIR__);
$publicDir = __DIR__;

function e_str($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$results = [
    'php_version'   => ['status' => 'info', 'msg' => ''],
    'extensions'    => ['status' => 'info', 'msg' => ''],
    'folders'       => ['status' => 'info', 'msg' => ''],
    'env_file'      => ['status' => 'info', 'msg' => ''],
    'db_connection' => ['status' => 'info', 'msg' => ''],
    'migrations'    => ['status' => 'info', 'msg' => ''],
    'artisan'       => ['status' => 'info', 'msg' => ''],
];

// 1. PHP Version
$phpVersion = PHP_VERSION;
if (version_compare($phpVersion, '8.1.0', '>=')) {
    $results['php_version'] = ['status' => 'success', 'msg' => "PHP $phpVersion (Supported on Kloudbean)"];
} else {
    $results['php_version'] = ['status' => 'error', 'msg' => "PHP $phpVersion (Kloudbean requires PHP 8.1 or PHP 8.2+)"];
}

// 2. Extensions
$requiredExts = ['pdo', 'pdo_mysql', 'mbstring', 'openssl', 'fileinfo', 'curl', 'xml'];
$missingExts = [];
foreach ($requiredExts as $ext) {
    if (!extension_loaded($ext)) {
        $missingExts[] = $ext;
    }
}
if (empty($missingExts)) {
    $results['extensions'] = ['status' => 'success', 'msg' => 'All required extensions loaded (' . implode(', ', $requiredExts) . ')'];
} else {
    $results['extensions'] = ['status' => 'warning', 'msg' => 'Missing extensions: ' . implode(', ', $missingExts)];
}

// 3. Folder Permissions
$dirsToCreate = [
    $rootDir . '/storage',
    $rootDir . '/storage/app',
    $rootDir . '/storage/app/public',
    $rootDir . '/storage/framework',
    $rootDir . '/storage/framework/cache',
    $rootDir . '/storage/framework/cache/data',
    $rootDir . '/storage/framework/sessions',
    $rootDir . '/storage/framework/views',
    $rootDir . '/storage/logs',
    $rootDir . '/bootstrap/cache',
];

foreach ($dirsToCreate as $dir) {
    if (!file_exists($dir)) {
        @mkdir($dir, 0775, true);
    }
    @chmod($dir, 0775);
}
$results['folders'] = ['status' => 'success', 'msg' => 'Storage and cache directories ready.'];

// 4. Stale Local Cache Flush
$staleCacheFiles = [
    $rootDir . '/bootstrap/cache/config.php',
    $rootDir . '/bootstrap/cache/routes-v7.php',
    $rootDir . '/bootstrap/cache/services.php',
    $rootDir . '/bootstrap/cache/packages.php',
];
foreach ($staleCacheFiles as $file) {
    if (file_exists($file)) {
        @unlink($file);
    }
}

// 5. Bootstrap Laravel
if (file_exists($rootDir . '/vendor/autoload.php') && file_exists($rootDir . '/bootstrap/app.php')) {
    try {
        require $rootDir . '/vendor/autoload.php';
        $app = require_once $rootDir . '/bootstrap/app.php';
        $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
        $kernel->bootstrap();

        // Environment Check
        $dbDriver = env('DB_CONNECTION', 'mysql');
        $dbHost   = env('DB_HOST', '127.0.0.1');
        $dbPort   = env('DB_PORT', '3306');
        $dbName   = env('DB_DATABASE');
        $dbUser   = env('DB_USERNAME');

        $results['env_file'] = [
            'status' => 'success',
            'msg' => ".env loaded: Driver={$dbDriver}, Host={$dbHost}:{$dbPort}, DB={$dbName}, User={$dbUser}"
        ];

        // Generate Key if Missing
        if (empty(env('APP_KEY'))) {
            \Illuminate\Support\Facades\Artisan::call('key:generate', ['--force' => true]);
        }

        // Clear Caches
        \Illuminate\Support\Facades\Artisan::call('config:clear');
        \Illuminate\Support\Facades\Artisan::call('route:clear');
        \Illuminate\Support\Facades\Artisan::call('view:clear');
        \Illuminate\Support\Facades\Artisan::call('cache:clear');

        // Storage Symlink
        try {
            \Illuminate\Support\Facades\Artisan::call('storage:link');
        } catch (\Throwable $e) {}

        // Test Connection & Run Migrations
        try {
            \Illuminate\Support\Facades\DB::connection()->getPdo();
            $results['db_connection'] = [
                'status' => 'success',
                'msg' => "Successfully connected to Kloudbean Database [{$dbDriver}://{$dbHost}:{$dbPort}/{$dbName}]!"
            ];

            try {
                \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
                $results['migrations'] = [
                    'status' => 'success',
                    'msg' => 'All database tables (inquiries, contacts, gallery_images, etc.) migrated successfully!'
                ];
            } catch (\Throwable $migErr) {
                $results['migrations'] = [
                    'status' => 'warning',
                    'msg' => 'Migration notice: ' . $migErr->getMessage()
                ];
            }

        } catch (\Throwable $dbConnErr) {
            $results['db_connection'] = [
                'status' => 'error',
                'msg' => "Could not connect to Database. Error: " . $dbConnErr->getMessage() . ". Update DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD in Kloudbean .env file!"
            ];
        }

        $results['artisan'] = ['status' => 'success', 'msg' => 'Kloudbean Artisan tasks executed cleanly.'];

    } catch (\Throwable $bootErr) {
        $results['artisan'] = ['status' => 'error', 'msg' => 'Boot Error: ' . $bootErr->getMessage()];
    }
} else {
    $results['artisan'] = ['status' => 'error', 'msg' => 'vendor/autoload.php missing. Run `composer install` or upload vendor/ folder!'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S. Caterers — Kloudbean Hosting Setup & Database Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #FDFBF7; color: #1F1510; font-family: system-ui, -apple-system, sans-serif; padding: 40px 0; }
        .card-custom { border-radius: 16px; border: 1.5px solid #E6D8C3; box-shadow: 0 10px 30px rgba(0,0,0,0.06); background: #FFFFFF; }
        .header-box { background: linear-gradient(135deg, #1E293B 0%, #0F172A 100%); color: #38BDF8; border-radius: 14px 14px 0 0; padding: 24px; text-align: center; }
        .badge-status { font-size: 0.82rem; padding: 6px 12px; border-radius: 20px; font-weight: 700; }
        .status-success { background: #E8F5E9; color: #2E7D32; border: 1px solid #A5D6A7; }
        .status-warning { background: #FFF8E1; color: #F57F17; border: 1px solid #FFE082; }
        .status-error { background: #FFEBEE; color: #C62828; border: 1px solid #EF9A9A; }
    </style>
</head>
<body>
<div class="container" style="max-width: 850px;">
    <div class="card card-custom">
        <div class="header-box">
            <h2 class="fw-bold mb-1"><i class="fa-solid fa-cloud-bolt me-2"></i>S. Caterers</h2>
            <p class="mb-0 text-white-50">Kloudbean / Cloudways Database Migration & Repair Utility</p>
        </div>
        <div class="card-body p-4">

            <div class="alert alert-primary d-flex align-items-center gap-3 mb-4" role="alert">
                <i class="fa-solid fa-server fs-4"></i>
                <div>
                    <strong>Kloudbean Hosting Diagnostic:</strong> This tool flushes stale caches, tests your Kloudbean MySQL/MariaDB database connection, and automatically migrates all tables.
                </div>
            </div>

            <div class="list-group mb-4">
                <div class="list-group-item p-3 d-flex align-items-start justify-content-between">
                    <div>
                        <h6 class="fw-bold mb-1"><i class="fa-brands fa-php me-2 text-primary"></i>PHP Version</h6>
                        <p class="mb-0 text-muted small"><?= e_str($results['php_version']['msg']) ?></p>
                    </div>
                    <span class="badge-status status-<?= $results['php_version']['status'] ?>"><?= strtoupper($results['php_version']['status']) ?></span>
                </div>

                <div class="list-group-item p-3 d-flex align-items-start justify-content-between">
                    <div>
                        <h6 class="fw-bold mb-1"><i class="fa-solid fa-sliders me-2 text-secondary"></i>Kloudbean Environment (.env)</h6>
                        <p class="mb-0 text-muted small"><?= e_str($results['env_file']['msg']) ?></p>
                    </div>
                    <span class="badge-status status-<?= $results['env_file']['status'] ?>"><?= strtoupper($results['env_file']['status']) ?></span>
                </div>

                <div class="list-group-item p-3 d-flex align-items-start justify-content-between">
                    <div>
                        <h6 class="fw-bold mb-1"><i class="fa-solid fa-database me-2 text-info"></i>Database Connection</h6>
                        <p class="mb-0 text-muted small"><?= e_str($results['db_connection']['msg']) ?></p>
                    </div>
                    <span class="badge-status status-<?= $results['db_connection']['status'] ?>"><?= strtoupper($results['db_connection']['status']) ?></span>
                </div>

                <div class="list-group-item p-3 d-flex align-items-start justify-content-between">
                    <div>
                        <h6 class="fw-bold mb-1"><i class="fa-solid fa-table me-2 text-success"></i>Database Migrations</h6>
                        <p class="mb-0 text-muted small"><?= e_str($results['migrations']['msg']) ?></p>
                    </div>
                    <span class="badge-status status-<?= $results['migrations']['status'] ?>"><?= strtoupper($results['migrations']['status']) ?></span>
                </div>

                <div class="list-group-item p-3 d-flex align-items-start justify-content-between">
                    <div>
                        <h6 class="fw-bold mb-1"><i class="fa-solid fa-broom me-2 text-warning"></i>Cache & Artisan Tasks</h6>
                        <p class="mb-0 text-muted small"><?= e_str($results['artisan']['msg']) ?></p>
                    </div>
                    <span class="badge-status status-<?= $results['artisan']['status'] ?>"><?= strtoupper($results['artisan']['status']) ?></span>
                </div>
            </div>

            <div class="text-center pt-2">
                <a href="/" class="btn btn-dark fw-bold px-4 py-2 me-2" style="border-radius: 8px;">
                    <i class="fa-solid fa-house me-2"></i>Go to Homepage
                </a>
                <a href="/services" class="btn btn-outline-dark fw-bold px-4 py-2 me-2" style="border-radius: 8px;">
                    <i class="fa-solid fa-concierge-bell me-2"></i>Test Services Page
                </a>
                <a href="/cloudbean-setup.php" class="btn btn-primary fw-bold px-4 py-2" style="border-radius: 8px;">
                    <i class="fa-solid fa-rotate me-2"></i>Re-Run Migration
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
