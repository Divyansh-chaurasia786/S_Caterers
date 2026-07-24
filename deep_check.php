<?php
// Full MD5 hash comparison of ALL gallery images
$galleryDir = 'public/images/gallery/';

// Collect all image files (both local jpeg and drive images)
$allFiles = array_merge(
    glob($galleryDir . '*.jpeg') ?: [],
    glob($galleryDir . '*.jpg') ?: [],
    glob($galleryDir . 'drive/*.jpg') ?: [],
    glob($galleryDir . 'drive/*.jpeg') ?: []
);

echo "Total files found: " . count($allFiles) . "\n\n";

// Compute MD5 hash of each file
$hashMap = [];
foreach ($allFiles as $file) {
    $hash = md5_file($file);
    $hashMap[$hash][] = $file;
}

// Report duplicates
echo "=== EXACT DUPLICATES (same MD5 hash) ===\n";
$totalDuplicates = 0;
foreach ($hashMap as $hash => $files) {
    if (count($files) > 1) {
        echo "\nDUPLICATE GROUP [md5: $hash]:\n";
        foreach ($files as $f) {
            echo "  " . basename($f) . " (" . round(filesize($f)/1024) . "KB) → $f\n";
        }
        $totalDuplicates += count($files) - 1;
    }
}
echo "\nTotal exact duplicate files: $totalDuplicates\n";

// Also check file sizes across event_photo files
echo "\n\n=== ALL event_photo files by size ===\n";
$eventFiles = glob($galleryDir . 'event_photo_*.jpeg') ?: [];
$sizemap = [];
foreach ($eventFiles as $f) {
    $sizemap[filesize($f)][] = basename($f);
}
ksort($sizemap);
foreach ($sizemap as $size => $names) {
    if (count($names) > 1) {
        echo "SAME SIZE [{$size} bytes]: " . implode(', ', $names) . "\n";
    }
}
