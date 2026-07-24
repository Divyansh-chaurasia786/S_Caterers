<?php
$content = file_get_contents('C:\Users\Admin\.gemini\antigravity\brain\419b95ca-0bdb-4772-8130-df08ce17db26\.system_generated\steps\9969\content.md');

// Try to find file IDs and names from Google Drive JSON data
// Look for patterns like ["filename.jpg","id",...]
preg_match_all('/"([^"]{3,80}\.(?:jpg|jpeg|png|webp|mp4|mov|JPG|PNG|JPEG))"/i', $content, $matches);

$unique = array_unique($matches[1]);
echo "Found " . count($unique) . " image references:\n\n";
foreach ($unique as $name) {
    echo "  - $name\n";
}

// Also look for file IDs (Google Drive file IDs are 33-char alphanumeric)
echo "\n\n--- Searching for folder/file names ---\n";
// Look for S caterers specific content
preg_match_all('/"([^"]{5,50})"/', $content, $allStrings);
$catererFiles = [];
foreach ($allStrings[1] as $str) {
    // Filter for likely image/catering filenames
    if (preg_match('/(?:wedding|food|buffet|catering|event|party|S.?[Cc]aterer|IMG|DSC|photo|IMG_)/i', $str)) {
        $catererFiles[] = $str;
    }
}
$catererFiles = array_unique($catererFiles);
foreach (array_slice($catererFiles, 0, 30) as $f) {
    echo "  $f\n";
}
