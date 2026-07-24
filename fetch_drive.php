<?php
// Use Google Drive's unofficial JSON API to list files in folder
$folderId = '14T-9ulXesWGZ-j7j0YJM1GhWxvxnDS8P';

// Method 1: Use the export URL pattern for public folders
$url = "https://drive.google.com/drive/folders/$folderId";

$context = stream_context_create([
    'http' => [
        'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36\r\n",
        'timeout' => 30,
    ]
]);

$html = @file_get_contents($url, false, $context);
if ($html === false) {
    echo "Could not fetch page\n";
    exit;
}

// Look for file IDs in the HTML - they appear in patterns like:
// "1AbCdEfGhIjKlMnOpQrStUvWxYz12345" 
// or /thumbnail?id=FILEID
preg_match_all('/thumbnail\?id=([a-zA-Z0-9_-]{25,50})/', $html, $m1);
preg_match_all('/\/file\/d\/([a-zA-Z0-9_-]{25,50})/', $html, $m2);
preg_match_all('"src\\s*=\\s*\\"[^"]*\/([a-zA-Z0-9_-]{28,35})\\"[^>]*>"', $html, $m3);

// Look for initData or _DRIVE_ivd JSON arrays
if (preg_match('/window\["_DRIVE_ivd"\]\s*=\s*\'(.*?)\'/', $html, $ivd)) {
    echo "Found _DRIVE_ivd data!\n";
    $data = json_decode(stripslashes($ivd[1]), true);
    print_r($data);
}

// Look for [[["fileId" patterns
preg_match_all('/"([a-zA-Z0-9_-]{28,35})"/', $html, $allIds);
$candidates = array_unique($allIds[1]);
$fileIds = [];
foreach ($candidates as $id) {
    // Filter to likely Drive file IDs (28-33 chars alphanumeric + _-)
    if (strlen($id) >= 28 && strlen($id) <= 35 && preg_match('/^[a-zA-Z0-9_-]+$/', $id)) {
        $fileIds[] = $id;
    }
}

echo "Total file ID candidates: " . count($fileIds) . "\n";
foreach (array_slice($fileIds, 0, 50) as $id) {
    echo "  $id\n";
}

// Save raw HTML for inspection
file_put_contents('drive_raw.html', $html);
echo "\nSaved raw HTML to drive_raw.html (" . strlen($html) . " bytes)\n";
