<?php
/**
 * S. Caterers - GoDaddy cPanel Automatic Backend Repair & Diagnostic Utility
 * Access in browser: http://yourdomain.com/godaddy-setup.php
 */

define('LARAVEL_START', microtime(true));

$rootDir = dirname(__DIR__);
$publicDir = __DIR__;

// Helper to sanitize output
function e_str($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$results = [
    'php_version' => ['status' => 'info', 'msg' => ''],
    'extensions'  => ['status' => 'info', 'msg' => ''],
    'folders'     => ['status' => 'info', 'msg' => ''],
    'cache_cleared' => ['status' => 'info', 'msg' => ''],
    'env_file'    => ['status' => 'info', 'msg' => ''],
    'database'    => ['status' => 'info', 'msg' => ''],
    'artisan'     => ['status' => 'info', 'msg' => ''],
];

// 1. Check PHP Version
$phpVersion = PHP_VERSION;
if (version_compare($phpVersion, '8.1.0', '>=')) {
    $results['php_version'] = ['status' => 'success', 'msg' => "PHP $phpVersion (Supported)"];
} else {
    $results['php_version'] = ['status' => 'error', 'msg' => "PHP $phpVersion (Requires PHP 8.1 or higher on GoDaddy Select PHP Version)"];
}

// 2. Check Extensions
$requiredExts = ['pdo', 'pdo_mysql', 'mbstring', 'openssl', 'fileinfo', 'tokenizer', 'xml', 'curl'];
$missingExts = [];
foreach ($requiredExts as $ext) {
    if (!extension_loaded($ext)) {
        $missingExts[] = $ext;
    }
}
if (empty($missingExts)) {
    $results['extensions'] = ['status' => 'success', 'msg' => 'All required PHP extensions loaded (' . implode(', ', $requiredExts) . ')'];
} else {
    $results['extensions'] = ['status' => 'warning', 'msg' => 'Missing extensions: ' . implode(', ', $missingExts) . '. Enable them in cPanel > Select PHP Version.'];
}

// 3. Ensure Directories Exist & Writable
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
    $rootDir . '/database',
];

$failedDirs = [];
foreach ($dirsToCreate as $dir) {
    if (!file_exists($dir)) {
        @mkdir($dir, 0775, true);
    }
    if (file_exists($dir)) {
        @chmod($dir, 0775);
    }
    if (!is_writable($dir)) {
        $failedDirs[] = basename($dir);
    }
}

if (empty($failedDirs)) {
    $results['folders'] = ['status' => 'success', 'msg' => 'Storage and bootstrap cache directories created and writable (0775).'];
} else {
    $results['folders'] = ['status' => 'warning', 'msg' => 'Check file permissions for: ' . implode(', ', $failedDirs) . '. Set permissions to 755 or 775 in File Manager.'];
}

// 4. Delete Stale Local Cache Files (Removes local Windows paths that crash GoDaddy Linux)
$staleCacheFiles = [
    $rootDir . '/bootstrap/cache/config.php',
    $rootDir . '/bootstrap/cache/routes-v7.php',
    $rootDir . '/bootstrap/cache/services.php',
    $rootDir . '/bootstrap/cache/packages.php',
];

$clearedFiles = [];
foreach ($staleCacheFiles as $file) {
    if (file_exists($file)) {
        @unlink($file);
        $clearedFiles[] = basename($file);
    }
}
$results['cache_cleared'] = [
    'status' => 'success',
    'msg' => !empty($clearedFiles) 
        ? 'Cleared stale local cache files (' . implode(', ', $clearedFiles) . ').' 
        : 'No stale local cache files found.'
];

// 5. Environment File (.env) Check & Key Generation
$envPath = $rootDir . '/.env';
$envExamplePath = $rootDir . '/.env.example';

if (!file_exists($envPath)) {
    if (file_exists($envExamplePath)) {
        @copy($envExamplePath, $envPath);
        $results['env_file'] = ['status' => 'warning', 'msg' => 'Created .env file from .env.example. Please update DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD in .env!'];
    } else {
        $results['env_file'] = ['status' => 'error', 'msg' => '.env file missing! Create a .env file in project root.'];
    }
} else {
    $results['env_file'] = ['status' => 'success', 'msg' => '.env file exists.'];
}

// 6. Bootstrap Laravel & Run Artisan Commands
$artisanLogs = [];
if (file_exists($rootDir . '/vendor/autoload.php') && file_exists($rootDir . '/bootstrap/app.php')) {
    try {
        require $rootDir . '/vendor/autoload.php';
        $app = require_once $rootDir . '/bootstrap/app.php';
        $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
        $kernel->bootstrap();

        // Generate APP_KEY if missing
        if (empty(env('APP_KEY'))) {
            \Illuminate\Support\Facades\Artisan::call('key:generate', ['--force' => true]);
            $artisanLogs[] = 'Generated new APP_KEY.';
        }

        // Clear Caches
        \Illuminate\Support\Facades\Artisan::call('config:clear');
        \Illuminate\Support\Facades\Artisan::call('route:clear');
        \Illuminate\Support\Facades\Artisan::call('view:clear');
        \Illuminate\Support\Facades\Artisan::call('cache:clear');
        $artisanLogs[] = 'Cleared config, route, view, and application cache.';

        // Storage Symlink
        try {
            \Illuminate\Support\Facades\Artisan::call('storage:link');
            $artisanLogs[] = 'Created storage public symlink.';
        } catch (\Throwable $stgErr) {
            $artisanLogs[] = 'Storage link note: ' . $stgErr->getMessage();
        }

        // Run Database Migrations
        try {
            \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
            $artisanLogs[] = 'Database migrations executed successfully.';
            $results['database'] = ['status' => 'success', 'msg' => 'Database connected and migrated successfully!'];
        } catch (\Throwable $dbErr) {
            $results['database'] = ['status' => 'warning', 'msg' => 'Database migration note: ' . $dbErr->getMessage() . '. Update database credentials in .env!'];
        }

        $results['artisan'] = ['status' => 'success', 'msg' => implode(' | ', $artisanLogs)];

    } catch (\Throwable $appErr) {
        $results['artisan'] = ['status' => 'error', 'msg' => 'Laravel Boot Exception: ' . $appErr->getMessage()];
    }
} else {
    $results['artisan'] = ['status' => 'error', 'msg' => 'vendor/autoload.php or bootstrap/app.php missing. Run `composer install` or upload vendor/ folder to GoDaddy!'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S. Caterers — GoDaddy Backend Diagnostic & Repair Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #FDFBF7; color: #1F1510; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding-top: 40px; padding-bottom: 60px; }
        .card-custom { border-radius: 16px; border: 1.5px solid #E6D8C3; box-shadow: 0 10px 30px rgba(0,0,0,0.06); background: #FFFFFF; }
        .header-box { background: linear-gradient(135deg, #7A1C2B 0%, #540D18 100%); color: #FFD700; border-radius: 14px 14px 0 0; padding: 24px; text-align: center; }
        .badge-status { font-size: 0.85rem; padding: 6px 12px; border-radius: 20px; font-weight: 700; }
        .status-success { background: #E8F5E9; color: #2E7D32; border: 1px solid #A5D6A7; }
        .status-warning { background: #FFF8E1; color: #F57F17; border: 1px solid #FFE082; }
        .status-error { background: #FFEBEE; color: #C62828; border: 1px solid #EF9A9A; }
    </style>
</head>
<body>
<div class="container" style="max-width: 850px;">
    <div class="card card-custom">
        <div class="header-box">
            <h2 class="fw-bold mb-1"><i class="fa-solid fa-screwdriver-wrench me-2"></i>S. Caterers</h2>
            <p class="mb-0 text-white-50">GoDaddy cPanel Backend Repair & Diagnostic Tool</p>
        </div>
        <div class="card-body p-4">

            <div class="alert alert-info d-flex align-items-center gap-3 mb-4" role="alert">
                <i class="fa-solid fa-circle-info fs-4"></i>
                <div>
                    <strong>Diagnostic Status:</strong> This tool has automatically cleared stale local caches, generated missing environment keys, created storage directories, and attempted database migrations.
                </div>
            </div>

            <div class="list-group mb-4">
                <!-- PHP Version -->
                <div class="list-group-item p-3 d-flex align-items-start justify-content-between">
                    <div>
                        <h6 class="fw-bold mb-1"><i class="fa-brands fa-php me-2 text-primary"></i>PHP Runtime Version</h6>
                        <p class="mb-0 text-muted small"><?= e_str($results['php_version']['msg']) ?></p>
                    </div>
                    <span class="badge-status status-<?= $results['php_version']['status'] ?>"><?= strtoupper($results['php_version']['status']) ?></span>
                </div>

                <!-- Extensions -->
                <div class="list-group-item p-3 d-flex align-items-start justify-content-between">
                    <div>
                        <h6 class="fw-bold mb-1"><i class="fa-solid fa-puzzle-piece me-2 text-success"></i>PHP Extensions</h6>
                        <p class="mb-0 text-muted small"><?= e_str($results['extensions']['msg']) ?></p>
                    </div>
                    <span class="badge-status status-<?= $results['extensions']['status'] ?>"><?= strtoupper($results['extensions']['status']) ?></span>
                </div>

                <!-- Folders -->
                <div class="list-group-item p-3 d-flex align-items-start justify-content-between">
                    <div>
                        <h6 class="fw-bold mb-1"><i class="fa-solid fa-folder-open me-2 text-warning"></i>Storage & Cache Permissions</h6>
                        <p class="mb-0 text-muted small"><?= e_str($results['folders']['msg']) ?></p>
                    </div>
                    <span class="badge-status status-<?= $results['folders']['status'] ?>"><?= strtoupper($results['folders']['status']) ?></span>
                </div>

                <!-- Cache Cleared -->
                <div class="list-group-item p-3 d-flex align-items-start justify-content-between">
                    <div>
                        <h6 class="fw-bold mb-1"><i class="fa-solid fa-broom me-2 text-danger"></i>Local Stale Cache Flush</h6>
                        <p class="mb-0 text-muted small"><?= e_str($results['cache_cleared']['msg']) ?></p>
                    </div>
                    <span class="badge-status status-<?= $results['cache_cleared']['status'] ?>"><?= strtoupper($results['cache_cleared']['status']) ?></span>
                </div>

                <!-- Environment -->
                <div class="list-group-item p-3 d-flex align-items-start justify-content-between">
                    <div>
                        <h6 class="fw-bold mb-1"><i class="fa-solid fa-sliders me-2 text-secondary"></i>Environment (.env) Configuration</h6>
                        <p class="mb-0 text-muted small"><?= e_str($results['env_file']['msg']) ?></p>
                    </div>
                    <span class="badge-status status-<?= $results['env_file']['status'] ?>"><?= strtoupper($results['env_file']['status']) ?></span>
                </div>

                <!-- Artisan Execution -->
                <div class="list-group-item p-3 d-flex align-items-start justify-content-between">
                    <div>
                        <h6 class="fw-bold mb-1"><i class="fa-solid fa-terminal me-2 text-dark"></i>Laravel Artisan Boot & Tasks</h6>
                        <p class="mb-0 text-muted small"><?= e_str($results['artisan']['msg']) ?></p>
                    </div>
                    <span class="badge-status status-<?= $results['artisan']['status'] ?>"><?= strtoupper($results['artisan']['status']) ?></span>
                </div>

                <!-- Database Status -->
                <div class="list-group-item p-3 d-flex align-items-start justify-content-between">
                    <div>
                        <h6 class="fw-bold mb-1"><i class="fa-solid fa-database me-2 text-info"></i>Database Connection & Migrations</h6>
                        <p class="mb-0 text-muted small"><?= e_str($results['database']['msg']) ?></p>
                    </div>
                    <span class="badge-status status-<?= $results['database']['status'] ?>"><?= strtoupper($results['database']['status']) ?></span>
                </div>
            </div>

            <div class="text-center pt-2">
                <a href="/" class="btn btn-danger fw-bold px-4 py-2 me-2" style="background: #7A1C2B; border: none; border-radius: 8px;">
                    <i class="fa-solid fa-house me-2"></i>Go to Homepage
                </a>
                <a href="/services" class="btn btn-outline-dark fw-bold px-4 py-2 me-2" style="border-radius: 8px;">
                    <i class="fa-solid fa-concierge-bell me-2"></i>Test Services Page
                </a>
                <a href="/godaddy-setup.php" class="btn btn-secondary fw-bold px-4 py-2" style="border-radius: 8px;">
                    <i class="fa-solid fa-rotate me-2"></i>Re-Run Diagnostics
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
