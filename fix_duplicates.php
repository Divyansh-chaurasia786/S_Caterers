<?php
// Compare file sizes between scaterers_photo_* and event_photo_* files
$galleryDir = 'public/images/gallery/';

$eventPhotos = [];
foreach (glob($galleryDir . 'event_photo_*.jpeg') as $f) {
    $size = filesize($f);
    $eventPhotos[$size][] = basename($f);
}

$scatPhotos = [];
foreach (glob($galleryDir . 'scaterers_photo_*.jpeg') as $f) {
    $size = filesize($f);
    $scatPhotos[$size][] = basename($f);
}

echo "=== MATCHING DUPLICATES BY SIZE ===\n\n";
$duplicatePaths = [];
foreach ($scatPhotos as $size => $files) {
    if (isset($eventPhotos[$size])) {
        foreach ($files as $scFile) {
            foreach ($eventPhotos[$size] as $evFile) {
                // Verify by comparing actual file contents (first 1000 bytes)
                $sc = file_get_contents($galleryDir . $scFile, false, null, 0, 1000);
                $ev = file_get_contents($galleryDir . $evFile, false, null, 0, 1000);
                if ($sc === $ev) {
                    echo "DUPLICATE: $scFile === $evFile ({$size} bytes)\n";
                    $duplicatePaths[] = 'images/gallery/' . $scFile; // Keep event_photo, delete scaterers_photo
                }
            }
        }
    }
}

echo "\n=== TOTAL DUPLICATES TO REMOVE: " . count($duplicatePaths) . " ===\n";

if (count($duplicatePaths) > 0) {
    // Delete from DB
    $pdo = new PDO('sqlite:database/database.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $deleted = 0;
    foreach ($duplicatePaths as $path) {
        // Find DB record
        $stmt = $pdo->prepare("SELECT id, title FROM gallery_images WHERE path = ?");
        $stmt->execute([$path]);
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($rec) {
            $pdo->prepare("DELETE FROM gallery_images WHERE path = ?")->execute([$path]);
            echo "DB deleted: #{$rec['id']} {$rec['title']} — $path\n";
            $deleted++;
        }
        // Delete file
        $fullPath = $path; // relative to project root
        if (file_exists($fullPath)) {
            unlink($fullPath);
            echo "File deleted: $path\n";
        }
    }
    echo "\n=== Removed $deleted duplicate records from DB ===\n";
}
