<?php
// Insert the downloaded Drive images as local gallery records in the SQLite database
$dbPath = __DIR__ . '/database/database.sqlite';

try {
    $pdo = new PDO("sqlite:$dbPath");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Ensure table exists
    $pdo->exec("CREATE TABLE IF NOT EXISTS gallery_images (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT NOT NULL,
        category TEXT NOT NULL,
        path TEXT NOT NULL,
        cloudinary_id TEXT,
        is_video INTEGER DEFAULT 0,
        is_local INTEGER DEFAULT 1,
        created_at TEXT,
        updated_at TEXT
    )");
    
    // Images to insert - path is relative to public/
    $images = [
        // Grand Weddings
        ['Grand Wedding Banquet Setup',        'Grand Weddings',     'images/gallery/drive/grand-wedding-hall-1.jpg'],
        ['Royal Buffet Hall — Golden Theme',   'Grand Weddings',     'images/gallery/drive/grand-wedding-hall-2.jpg'],
        ['Luxury Banquet Counter Setup',       'Grand Weddings',     'images/gallery/drive/grand-wedding-hall-3.jpg'],
        ['Premium Wedding Buffet Setup',       'Grand Weddings',     'images/gallery/drive/grand-wedding-hall-4.jpg'],
        ['Grand Hall with Chandeliers',        'Grand Weddings',     'images/gallery/drive/grand-wedding-hall-5.jpg'],
        
        // Cuisine & Plating
        ['Pineapple & Watermelon Art Tower',  'Cuisine & Plating',  'images/gallery/drive/fruit-art-pineapple-tower.jpg'],
        ['Papaya Fruit Display',              'Cuisine & Plating',  'images/gallery/drive/fruit-art-papaya-display.jpg'],
        ['Watermelon Rose Tower',             'Cuisine & Plating',  'images/gallery/drive/fruit-art-watermelon-rose.jpg'],
        ['Layered Fruit Art Tower',           'Cuisine & Plating',  'images/gallery/drive/fruit-art-mixed-tower.jpg'],
        
        // Live Counters
        ['Rajasthani Rustic Live Counter',    'Live Counters',      'images/gallery/drive/live-counter-rustic.jpg'],
        ['Live Gol Gappe Counter',            'Live Counters',      'images/gallery/drive/live-counter-golgappe.jpg'],
        ['Assorted Breads Counter',           'Live Counters',      'images/gallery/drive/live-counter-assorted-breads.jpg'],
        ['Live Chinese Noodles Counter',      'Live Counters',      'images/gallery/drive/live-counter-chinese.jpg'],
        ['Grand Outdoor Buffet Setup',        'Live Counters',      'images/gallery/drive/live-counter-outdoor-buffet.jpg'],
        
        // Bar Lounge
        ['S Caterers Soft Drinks Bar',        'Bar Lounge',         'images/gallery/drive/bar-lounge-signboard.jpg'],
        ['Waiter Serving at Bar Counter',     'Bar Lounge',         'images/gallery/drive/bar-lounge-waiter.jpg'],
        
        // Event Photos
        ['Guests Enjoying Wedding Buffet',    'Event Photos',       'images/gallery/drive/event-guests-being-served.jpg'],
        ['Live Cooking at Event',             'Event Photos',       'images/gallery/drive/event-live-cooking-action.jpg'],
        ['Staff Serving at Indoor Banquet',   'Event Photos',       'images/gallery/drive/event-staff-yellow-serving.jpg'],
        ['Long Buffet Counter — Grand Event', 'Event Photos',       'images/gallery/drive/venue-breads-counter-wide.jpg'],
        ['Daytime Indoor Banquet Hall',       'Event Photos',       'images/gallery/drive/venue-daytime-indoor-buffet.jpg'],
        ['Elegant Blue & White Venue Setup',  'Event Photos',       'images/gallery/drive/venue-blue-white-counter.jpg'],
    ];
    
    $now = date('Y-m-d H:i:s');
    $stmt = $pdo->prepare("INSERT INTO gallery_images (title, category, path, cloudinary_id, is_video, is_local, created_at, updated_at) VALUES (?, ?, ?, ?, 0, 1, ?, ?)");
    
    $inserted = 0;
    foreach ($images as $img) {
        // Check if already exists
        $check = $pdo->prepare("SELECT COUNT(*) FROM gallery_images WHERE path = ?");
        $check->execute([$img[2]]);
        if ($check->fetchColumn() > 0) {
            echo "⏭️ Already exists: {$img[0]}\n";
            continue;
        }
        
        $cloudId = 'local_drive_' . time() . '_' . $inserted;
        $stmt->execute([$img[0], $img[1], $img[2], $cloudId, $now, $now]);
        echo "✅ Inserted: {$img[0]} [{$img[1]}]\n";
        $inserted++;
        usleep(1000); // Tiny delay to get unique timestamps
    }
    
    echo "\n=== Inserted $inserted records ===\n";
    
    // Show all gallery records
    $all = $pdo->query("SELECT id, title, category, is_local FROM gallery_images ORDER BY id DESC LIMIT 30")->fetchAll(PDO::FETCH_ASSOC);
    echo "\nAll gallery records:\n";
    foreach ($all as $r) {
        $localTag = $r['is_local'] ? '[LOCAL]' : '[CLOUD]';
        echo "  #{$r['id']} {$localTag} {$r['title']} — {$r['category']}\n";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}
