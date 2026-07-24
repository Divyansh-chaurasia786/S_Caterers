<?php
// These are the file IDs extracted from the Google Drive page
// The folder has 44 scanned images (Scanned_20260724-1854-01.jpg through 44)
// and 5 videos (VID_*.mp4)
// We found 49 non-Google IDs which likely correspond to these files

// Let's try to fetch thumbnails for each candidate ID
$candidateIds = [
    '1BHJZRalYnJwvZtGjSn3HNckGrMZwpuW2',
    '1BI_SgMwrpjq8f_RxMfS8kzOu1OQky4Ud',
    '1BNXQC_lXqAeY2TLpc6Ej8-qgmMSw5pyO',
    '1B_beWSE5OMMh6i1Zjdq-xQfHWgE19_Za',
    '1Bal2HsxfAUZ2gfIOetVPQlCMjy5ubUqw',
    '1BbVzuB3Hc8HBL8PW96qWuV8yOa2BodDX',
    '1BcQ86IcZPGirT0Wnx81nc0TutkWh1AqV',
    '1Bgdz7eVbNxdN_0OwGUUXv6Ir31BZx9ax',
    '1Bub_v0d183TgOETfUf-3DqWaYeggNspG',
    '1Bv3qBatfOaYF9ib8t8MgPeatyZbgbST7',
    '1BzmBUmY85wz9HbixN1ZqycLt8dzs0IPl',
    '1C-Ijg5EeRw0-Wv0O-o7C6ofl1ATXg8z3',
    '1C9Ep2Ol1s28YVN0-0PX2H7Qdmzbd1I-r',
    '1CADX1behWOclzKpX6TaqMIl7tv3_TOad',
    '1CDlD-SXU4D1gPlPNT9N5ZeKmo0tcFy31',
    '1CIivZoNB8Z0A2qviDK4-dmJUrWYY9Z31',
    '1CS96NSFyvXt5pXlx1jzVkFstB-pvh3eP',
    '1CWmjGEqI7ftogeuISg3ZB8bz5K7vwBbe',
    '1CdVj1BQj_MV0yPhDUlf6I9avDbe3D8Z0',
    '1Ceg4oUvFFC34UIP-z6EM3xhcuGir1q9Q',
    '1Ch17CiroIPZ8rUKNY0axxsorNa5znEBg',
    '1Ch7SbutUuXtdYLILB8XwXqbGTJ1tvYjp',
    '1Coz07kJozJn2hwSjmHzLs72PcrpItRRM',
    '1CylLII3nFbORcv4m_VySDiFnzAu0CVZJ',
    '1D2hAPlWAktvyjCe_JCri0U5iLTPL8Abt',
    '1D3hLHnZYT6ucf82UhHvjCQ5lwmgst8Bv',
    '1D5I5fUNLtw0rBneIayZ77GAz8Hw37QQH',
    '1DAr2atm59uWmN1jYzoiiKVUuc4zHC8BV',
    '1DI4W9W3w-UmuHwHqtP49jSbaexNQqfKK',
    '1DIYY3YyNl3yRLEZ2yhEtokk_mp0OjPVT',
    '1DQkKeZQyJhu_hyhaEhXIrsGqABefed02',
    '1DTKudWgCC7BJM3ckYQ0MkrWo1G84BIix',
    '1DTmAb1sK3TmjHYo4QXdNmg6yESm-MgVP',
    '1DZUkOcqpRWc3xZe3EH0sx_45cFxnhYpN',
    '1Dap37EsveSqng5d1mKERKTofAXm-iIJP',
    '1DdOI1KmEkvbAP_W4_kUNAWKWkDNnDBiH',
    '1DmmU0z8ERZ1og1013ZtpimT2bPMeiL9b',
    '1Dyuwg5gKRjdedGdxTKGJw4lVC4gk-53m',
    '1E1oiAy3fD9J-15nJxP7VnIbBiycOgjPc',
    '1E2Gd3tUdV6XotV_p-VEo2J2r3-ctI6_j',
    '1ED76ZO-1ggiH-1vS3ypyj4l8bhfELs_e',
    '1EKMNHv7IzWzbkhWQikAhTEsrpA4tcUXh',
    '1ELD7xoxUHz40nbSLmZUeZp2C4maSnPSQ',
    '1EXYSymKNiSJu8C4M8mhhL0Y5nihNeem3',
    '1IHMsVXloQtIQbN5OrKpNCxIqyZIkVjjX',
    '1IqBSB6lg-Qh_yZUn51oSrYU1gZtAInAE',
    '1ILmVdGs4uN90i7hNAbPjibWuuJa-CoAb',
];

$outputDir = 'drive_downloads';
if (!is_dir($outputDir)) mkdir($outputDir);

$context = stream_context_create([
    'http' => [
        'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 Chrome/120.0.0.0\r\n",
        'timeout' => 15,
        'follow_location' => true,
        'max_redirects' => 5,
    ]
]);

echo "Trying to download thumbnails for " . count($candidateIds) . " file IDs...\n\n";

$successful = [];
$failed = [];

foreach ($candidateIds as $i => $id) {
    // Try Google Drive thumbnail URL (works for public files)
    $thumbUrl = "https://drive.google.com/thumbnail?id=$id&sz=w400";
    
    $data = @file_get_contents($thumbUrl, false, $context);
    
    if ($data && strlen($data) > 5000) {
        // Check if it's actually an image (starts with JPEG or PNG magic bytes)
        $isJpeg = substr($data, 0, 2) === "\xFF\xD8";
        $isPng = substr($data, 0, 4) === "\x89PNG";
        $isGif = substr($data, 0, 3) === "GIF";
        
        if ($isJpeg || $isPng || $isGif) {
            $ext = $isJpeg ? 'jpg' : ($isPng ? 'png' : 'gif');
            $filename = "$outputDir/thumb_" . ($i + 1) . "_$id.$ext";
            file_put_contents($filename, $data);
            echo "✅ ID #" . ($i + 1) . " [$id]: Downloaded! ({$ext}, " . number_format(strlen($data)) . " bytes)\n";
            $successful[] = ['index' => $i + 1, 'id' => $id, 'file' => $filename, 'size' => strlen($data)];
        } else {
            echo "⚠️  ID #" . ($i + 1) . " [$id]: Got data but not image (" . strlen($data) . " bytes, first 20: " . bin2hex(substr($data, 0, 20)) . ")\n";
            $failed[] = $id;
        }
    } else {
        echo "❌ ID #" . ($i + 1) . " [$id]: Failed or too small (" . strlen($data) . " bytes)\n";
        $failed[] = $id;
    }
    
    // Small delay to avoid rate limiting
    usleep(200000); // 200ms
}

echo "\n\n=== SUMMARY ===\n";
echo "Successful: " . count($successful) . "\n";
echo "Failed: " . count($failed) . "\n\n";
echo "Downloaded files:\n";
foreach ($successful as $f) {
    echo "  #{$f['index']}: {$f['file']} (" . number_format($f['size']) . " bytes)\n";
}
