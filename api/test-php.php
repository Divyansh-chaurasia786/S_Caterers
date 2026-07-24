<?php
// Ultra-minimal - just catch and show the ORIGINAL boot error
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/plain');

$base = dirname(__DIR__);

// Set environment
$_SERVER['APP_ENV'] = 'production';
$_ENV['APP_ENV'] = 'production';
putenv('APP_ENV=production');
putenv('SESSION_DRIVER=cookie');
putenv('CACHE_STORE=array');
putenv('QUEUE_CONNECTION=sync');
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('APP_KEY=base64:LREC/2lhfmqQ/M2MSS2UsZuMWYcXlTGMGtedY7/Yd6U=');

// Create dirs
$dirs = ['/tmp/storage/framework/views','/tmp/storage/framework/cache/data','/tmp/storage/framework/sessions','/tmp/storage/app/public','/tmp/storage/logs'];
foreach ($dirs as $d) { @mkdir($d, 0777, true); }
echo "Dirs created\n";

require $base . '/vendor/autoload.php';
echo "Autoload OK\n";

// Require the app — bootstrap/app.php also does useStoragePath
$app = require $base . '/bootstrap/app.php';
echo "App OK, storage path: " . $app->storagePath() . "\n";
echo "View compiled: " . $app->make('config')->get('view.compiled') . "\n";

// Check if ViewServiceProvider is registered
$providers = $app->getLoadedProviders();
echo "\nLoaded providers:\n";
foreach (array_keys($providers) as $p) {
    if (stripos($p, 'view') !== false || stripos($p, 'View') !== false) {
        echo "  $p\n";
    }
}

// Try to resolve view directly
try {
    $view = $app->make('view');
    echo "\n✓ View factory resolved OK\n";
} catch (\Throwable $e) {
    echo "\n❌ View factory error: " . $e->getMessage() . "\n";
}

// Now handle a request
echo "\nHandling request...\n";
set_error_handler(function($no, $str, $file, $line) {
    echo "PHP Error [$no]: $str in $file:$line\n";
});

register_shutdown_function(function() {
    $err = error_get_last();
    if ($err) echo "Fatal: " . print_r($err, true) . "\n";
});

try {
    $kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);
    $request = \Illuminate\Http\Request::capture();
    $response = $kernel->handle($request);
    echo "Response status: " . $response->getStatusCode() . "\n";
    $kernel->terminate($request, $response);
} catch (\Throwable $e) {
    echo "❌ ORIGINAL ERROR: " . get_class($e) . "\n";
    echo "Message: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . " Line: " . $e->getLine() . "\n";
    echo "Trace: " . $e->getTraceAsString() . "\n";
    if ($e->getPrevious()) {
        echo "\nCAUSED BY: " . get_class($e->getPrevious()) . "\n";
        echo $e->getPrevious()->getMessage() . "\n";
    }
}
