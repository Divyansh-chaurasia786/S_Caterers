<?php
// Download best images at higher resolution (1600px wide)
// Mapped: index => [file_id, destination_name, category]
$bestImages = [
    // Grand Wedding Hall
    ['id' => '1BHJZRalYnJwvZtGjSn3HNckGrMZwpuW2', 'name' => 'grand-wedding-hall-1.jpg'],
    ['id' => '1BI_SgMwrpjq8f_RxMfS8kzOu1OQky4Ud', 'name' => 'grand-wedding-hall-2.jpg'],
    ['id' => '1BNXQC_lXqAeY2TLpc6Ej8-qgmMSw5pyO', 'name' => 'grand-wedding-hall-3.jpg'],
    ['id' => '1B_beWSE5OMMh6i1Zjdq-xQfHWgE19_Za', 'name' => 'grand-wedding-hall-4.jpg'],
    ['id' => '1Bgdz7eVbNxdN_0OwGUUXv6Ir31BZx9ax', 'name' => 'grand-wedding-hall-5.jpg'],
    
    // Fruit Art / Cuisine Plating
    ['id' => '1Bal2HsxfAUZ2gfIOetVPQlCMjy5ubUqw', 'name' => 'fruit-art-pineapple-tower.jpg'],
    ['id' => '1BbVzuB3Hc8HBL8PW96qWuV8yOa2BodDX', 'name' => 'fruit-art-papaya-display.jpg'],
    ['id' => '1Bub_v0d183TgOETfUf-3DqWaYeggNspG', 'name' => 'fruit-art-watermelon-rose.jpg'],
    ['id' => '1Bv3qBatfOaYF9ib8t8MgPeatyZbgbST7', 'name' => 'fruit-art-mixed-tower.jpg'],
    
    // Live Counters
    ['id' => '1BcQ86IcZPGirT0Wnx81nc0TutkWh1AqV', 'name' => 'live-counter-rustic.jpg'],
    ['id' => '1C9Ep2Ol1s28YVN0-0PX2H7Qdmzbd1I-r', 'name' => 'live-counter-golgappe.jpg'],
    ['id' => '1CS96NSFyvXt5pXlx1jzVkFstB-pvh3eP', 'name' => 'live-counter-assorted-breads.jpg'],
    ['id' => '1Ch17CiroIPZ8rUKNY0axxsorNa5znEBg', 'name' => 'live-counter-chinese.jpg'],
    ['id' => '1IHMsVXloQtIQbN5OrKpNCxIqyZIkVjjX', 'name' => 'live-counter-outdoor-buffet.jpg'],
    
    // Bar Lounge
    ['id' => '1CWmjGEqI7ftogeuISg3ZB8bz5K7vwBbe', 'name' => 'bar-lounge-signboard.jpg'],
    ['id' => '1Coz07kJozJn2hwSjmHzLs72PcrpItRRM', 'name' => 'bar-lounge-waiter.jpg'],
    
    // Staff & Events in Action  
    ['id' => '1E1oiAy3fD9J-15nJxP7VnIbBiycOgjPc', 'name' => 'event-guests-being-served.jpg'],
    ['id' => '1ED76ZO-1ggiH-1vS3ypyj4l8bhfELs_e', 'name' => 'event-live-cooking-action.jpg'],
    ['id' => '1ILmVdGs4uN90i7hNAbPjibWuuJa-CoAb', 'name' => 'event-staff-yellow-serving.jpg'],
    
    // Venue Setup
    ['id' => '1D3hLHnZYT6ucf82UhHvjCQ5lwmgst8Bv', 'name' => 'venue-breads-counter-wide.jpg'],
    ['id' => '1DIYY3YyNl3yRLEZ2yhEtokk_mp0OjPVT', 'name' => 'venue-daytime-indoor-buffet.jpg'],
    ['id' => '1IqBSB6lg-Qh_yZUn51oSrYU1gZtAInAE', 'name' => 'venue-blue-white-counter.jpg'],
];

$outputDir = 'public/images/gallery/drive';
if (!is_dir($outputDir)) mkdir($outputDir, 0755, true);

$context = stream_context_create([
    'http' => [
        'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 Chrome/120.0.0.0\r\n",
        'timeout' => 20,
        'follow_location' => true,
        'max_redirects' => 5,
    ]
]);

echo "Downloading " . count($bestImages) . " high-res images...\n\n";

$success = [];
$failed = [];

foreach ($bestImages as $i => $img) {
    $id = $img['id'];
    $name = $img['name'];
    
    // Try 1600px wide version
    $url = "https://drive.google.com/thumbnail?id=$id&sz=w1600";
    $data = @file_get_contents($url, false, $context);
    
    if ($data && strlen($data) > 10000) {
        $isJpeg = substr($data, 0, 2) === "\xFF\xD8";
        $isPng = substr($data, 0, 4) === "\x89PNG";
        
        if ($isJpeg || $isPng) {
            $filepath = "$outputDir/$name";
            file_put_contents($filepath, $data);
            $kb = round(strlen($data)/1024);
            echo "✅ [{$i}] $name ({$kb}KB)\n";
            $success[] = ['name' => $name, 'path' => $filepath, 'id' => $id];
        } else {
            // Try 800px
            $url2 = "https://drive.google.com/thumbnail?id=$id&sz=w800";
            $data2 = @file_get_contents($url2, false, $context);
            if ($data2 && strlen($data2) > 5000) {
                file_put_contents("$outputDir/$name", $data2);
                $kb = round(strlen($data2)/1024);
                echo "✅ [{$i}] $name (800px, {$kb}KB)\n";
                $success[] = ['name' => $name, 'path' => "$outputDir/$name", 'id' => $id];
            } else {
                echo "❌ [{$i}] $name - failed\n";
                $failed[] = $name;
            }
        }
    } else {
        echo "❌ [{$i}] $name - failed (" . strlen($data) . " bytes)\n";
        $failed[] = $name;
    }
    
    usleep(150000); // 150ms delay
}

echo "\n=== DONE: " . count($success) . " success, " . count($failed) . " failed ===\n";
if ($failed) {
    echo "Failed:\n";
    foreach ($failed as $f) echo "  - $f\n";
}
