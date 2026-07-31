<?php
/**
 * Upload all 22 Google Drive photos directly to Cloudinary via cURL with SSL bypass
 */

$cloudName = 'dbmyeqafj';
$apiKey    = '499981468335259';
$apiSecret = 'XkCkx8xN3cm2p4ceZgYw0xXWEl0';

$images = [
    // Grand Weddings
    ['title' => 'Grand Wedding Banquet Setup',        'category' => 'Grand Weddings',     'file' => 'grand-wedding-hall-1.jpg'],
    ['title' => 'Royal Buffet Hall — Golden Theme',   'category' => 'Grand Weddings',     'file' => 'grand-wedding-hall-2.jpg'],
    ['title' => 'Luxury Banquet Counter Setup',       'category' => 'Grand Weddings',     'file' => 'grand-wedding-hall-3.jpg'],
    ['title' => 'Premium Wedding Buffet Setup',       'category' => 'Grand Weddings',     'file' => 'grand-wedding-hall-4.jpg'],
    ['title' => 'Grand Hall with Chandeliers',        'category' => 'Grand Weddings',     'file' => 'grand-wedding-hall-5.jpg'],
    
    // Cuisine & Plating
    ['title' => 'Pineapple & Watermelon Art Tower',  'category' => 'Cuisine & Plating',  'file' => 'fruit-art-pineapple-tower.jpg'],
    ['title' => 'Papaya Fruit Display',              'category' => 'Cuisine & Plating',  'file' => 'fruit-art-papaya-display.jpg'],
    ['title' => 'Watermelon Rose Tower',             'category' => 'Cuisine & Plating',  'file' => 'fruit-art-watermelon-rose.jpg'],
    ['title' => 'Layered Fruit Art Tower',           'category' => 'Cuisine & Plating',  'file' => 'fruit-art-mixed-tower.jpg'],
    
    // Live Counters
    ['title' => 'Rajasthani Rustic Live Counter',    'category' => 'Live Counters',      'file' => 'live-counter-rustic.jpg'],
    ['title' => 'Live Gol Gappe Counter',            'category' => 'Live Counters',      'file' => 'live-counter-golgappe.jpg'],
    ['title' => 'Assorted Breads Counter',           'category' => 'Live Counters',      'file' => 'live-counter-assorted-breads.jpg'],
    ['title' => 'Live Chinese Noodles Counter',      'category' => 'Live Counters',      'file' => 'live-counter-chinese.jpg'],
    ['title' => 'Grand Outdoor Buffet Setup',        'category' => 'Live Counters',      'file' => 'live-counter-outdoor-buffet.jpg'],
    
    // Bar Lounge
    ['title' => 'S Caterers Soft Drinks Bar',        'category' => 'Bar Lounge',         'file' => 'bar-lounge-signboard.jpg'],
    ['title' => 'Waiter Serving at Bar Counter',     'category' => 'Bar Lounge',         'file' => 'bar-lounge-waiter.jpg'],
    
    // Event Photos
    ['title' => 'Guests Enjoying Wedding Buffet',    'category' => 'Event Photos',       'file' => 'event-guests-being-served.jpg'],
    ['title' => 'Live Cooking at Event',             'category' => 'Event Photos',       'file' => 'event-live-cooking-action.jpg'],
    ['title' => 'Staff Serving at Indoor Banquet',   'category' => 'Event Photos',       'file' => 'event-staff-yellow-serving.jpg'],
    ['title' => 'Long Buffet Counter — Grand Event', 'category' => 'Event Photos',       'file' => 'venue-breads-counter-wide.jpg'],
    ['title' => 'Daytime Indoor Banquet Hall',       'category' => 'Event Photos',       'file' => 'venue-daytime-indoor-buffet.jpg'],
    ['title' => 'Elegant Blue & White Venue Setup',  'category' => 'Event Photos',       'file' => 'venue-blue-white-counter.jpg'],
];

$dir = __DIR__ . '/public/images/gallery/drive/';
$uploaded = 0;

foreach ($images as $img) {
    $filePath = $dir . $img['file'];
    if (!file_exists($filePath)) {
        echo "⚠️ File not found: {$img['file']}\n";
        continue;
    }

    $timestamp = time();
    $contextStr = "title=" . rawurlencode($img['title']) . "|category=" . rawurlencode($img['category']);
    $folder = 's-caterers-gallery';

    // Cloudinary signature calculation
    $paramsToSign = [
        'context' => $contextStr,
        'folder'  => $folder,
        'timestamp' => $timestamp,
    ];
    ksort($paramsToSign);
    $stringToSign = "";
    foreach ($paramsToSign as $k => $v) {
        $stringToSign .= "{$k}={$v}&";
    }
    $stringToSign = rtrim($stringToSign, '&') . $apiSecret;
    $signature = sha1($stringToSign);

    $uploadUrl = "https://api.cloudinary.com/v1_1/{$cloudName}/image/upload";

    $postData = [
        'file'      => new CURLFile($filePath),
        'api_key'   => $apiKey,
        'timestamp' => $timestamp,
        'signature' => $signature,
        'folder'    => $folder,
        'context'   => $contextStr,
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $uploadUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200) {
        $json = json_decode($response, true);
        echo "✅ Uploaded: {$img['title']} [{$img['category']}] -> Public ID: {$json['public_id']}\n";
        $uploaded++;
    } else {
        echo "❌ Failed to upload {$img['title']} (HTTP $httpCode): $response\n";
    }
    usleep(500000); // 0.5s pause
}

echo "\n=== Successfully uploaded $uploaded / " . count($images) . " images to Cloudinary! ===\n";
