<?php
// Remove visually similar/repetitive/unsuitable images from DB and disk
$pdo = new PDO('sqlite:database/database.sqlite');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Images to REMOVE (keep only unique, high-quality catering content):
// _11 = personal selfie in mall (not catering)
// _13 = stacked gold plates close-up (too similar to _12)
// _20 = stacked gold plates again (very similar to _12 and _13)
// _9 = Bloom & Berry House counter angle 1 (too similar to _10)
// Drive: grand-wedding-hall 2,3,4,5 (all same hall, keep only #1 which is the best)
// Drive: fruit-art-watermelon-rose and fruit-art-mixed-tower (too similar to pineapple tower)
// _25 = dahi puri #2 (same as _26, keep one)

$toRemove = [
    // event_photo repeats/unsuitable
    'images/gallery/event_photo_1784871375_11.jpeg',  // personal selfie
    'images/gallery/event_photo_1784871375_13.jpeg',  // gold plates close-up (duplicate of 12)
    'images/gallery/event_photo_1784871375_20.jpeg',  // stacked gold plates again (duplicate of 12)
    'images/gallery/event_photo_1784871375_9.jpeg',   // Bloom & Berry counter angle 2 (same as 10)
    'images/gallery/event_photo_1784871375_25.jpeg',  // dahi puri in leaf (same as 26)
    
    // Drive: 4 extra wedding hall angles (keep grand-wedding-hall-1.jpg only)
    'images/gallery/drive/grand-wedding-hall-2.jpg',
    'images/gallery/drive/grand-wedding-hall-3.jpg',
    'images/gallery/drive/grand-wedding-hall-4.jpg',
    'images/gallery/drive/grand-wedding-hall-5.jpg',
    
    // Drive: fruit art duplicates (keep pineapple tower only)
    'images/gallery/drive/fruit-art-watermelon-rose.jpg',  // similar to pineapple tower
    'images/gallery/drive/fruit-art-mixed-tower.jpg',      // similar to pineapple tower
];

$removed = 0;
foreach ($toRemove as $path) {
    // Remove from DB
    $stmt = $pdo->prepare("SELECT id, title FROM gallery_images WHERE path = ?");
    $stmt->execute([$path]);
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($rec) {
        $pdo->prepare("DELETE FROM gallery_images WHERE path = ?")->execute([$path]);
        echo "DB removed: #{$rec['id']} {$rec['title']}\n";
    } else {
        echo "DB skip (not found): $path\n";
    }
    
    // Remove file from disk
    if (file_exists($path)) {
        unlink($path);
        echo "File deleted: $path\n";
    }
    $removed++;
}

echo "\n=== Removed $removed items ===\n";

// Show remaining count by category
$cats = $pdo->query("SELECT category, COUNT(*) as cnt FROM gallery_images GROUP BY category ORDER BY category")->fetchAll(PDO::FETCH_ASSOC);
echo "\nRemaining gallery by category:\n";
foreach ($cats as $c) {
    echo "  {$c['category']}: {$c['cnt']} photos\n";
}
$total = $pdo->query("SELECT COUNT(*) FROM gallery_images")->fetchColumn();
echo "\nTotal: $total unique images\n";
