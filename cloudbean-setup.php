<?php
/**
 * S. Caterers — Kloudbean Root Entrypoint
 * Forwards execution to public/cloudbean-setup.php
 */
if (file_exists(__DIR__ . '/public/cloudbean-setup.php')) {
    require __DIR__ . '/public/cloudbean-setup.php';
} else {
    echo "cloudbean-setup.php not found.";
}
