<?php
/**
 * S. Caterers — GoDaddy Root Repair Entrypoint
 * Forwards execution to public/godaddy-setup.php
 */
require_dir(__DIR__);
function require_dir($dir) {
    if (file_exists($dir . '/public/godaddy-setup.php')) {
        require $dir . '/public/godaddy-setup.php';
    } else {
        echo "godaddy-setup.php not found.";
    }
}
