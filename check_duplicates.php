<?php
$pdo = new PDO('sqlite:database/database.sqlite');
$all = $pdo->query('SELECT id, title, category, path FROM gallery_images ORDER BY id')->fetchAll(PDO::FETCH_ASSOC);

echo "=== ALL GALLERY RECORDS (" . count($all) . " total) ===\n\n";
foreach ($all as $r) {
    echo "#{$r['id']} [{$r['category']}] {$r['title']}\n";
    echo "    path: {$r['path']}\n";
}

// Check for duplicate paths
echo "\n\n=== CHECKING FOR DUPLICATE PATHS ===\n";
$paths = array_column($all, 'path');
$duplicates = array_filter(array_count_values($paths), fn($c) => $c > 1);
if ($duplicates) {
    echo "DUPLICATE PATHS FOUND:\n";
    foreach ($duplicates as $path => $count) {
        echo "  [$count times] $path\n";
        // Show all records with this path
        foreach ($all as $r) {
            if ($r['path'] === $path) {
                echo "    -> #{$r['id']} {$r['title']}\n";
            }
        }
    }
} else {
    echo "No exact duplicate paths found.\n";
}

// Also check for similar filenames (might be same image with different paths)
echo "\n=== CHECKING FOR SIMILAR FILENAMES ===\n";
$filenames = [];
foreach ($all as $r) {
    $basename = basename($r['path']);
    if (!isset($filenames[$basename])) $filenames[$basename] = [];
    $filenames[$basename][] = $r;
}
foreach ($filenames as $fn => $records) {
    if (count($records) > 1) {
        echo "SAME FILENAME '$fn':\n";
        foreach ($records as $r) {
            echo "  #{$r['id']} {$r['title']} — {$r['category']}\n";
            echo "    {$r['path']}\n";
        }
    }
}
