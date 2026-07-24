<?php
$content = file_get_contents('C:\Users\Admin\.gemini\antigravity\brain\419b95ca-0bdb-4772-8130-df08ce17db26\.system_generated\steps\9969\content.md');

// Google Drive file IDs are typically 28-33 char alphanumeric strings
// They appear in patterns like "id":"1AbCdEf..." or /file/d/ID/
preg_match_all('/(?:\/file\/d\/|"id"\s*:\s*"|fileId=)([a-zA-Z0-9_-]{25,50})/', $content, $matches);
$ids = array_unique($matches[1]);
echo "File IDs found:\n";
foreach ($ids as $id) {
    echo "  $id\n";
}

// Also look for the specific Scanned file pattern to get IDs
// In Drive page source, files appear as arrays - look for file entries
preg_match_all('/\["Scanned[^"]*",\s*"null",\s*\[([^\]]+)\]/', $content, $driveEntries);
echo "\n\nDrive entries:\n";
print_r($driveEntries);
