const fs = require('fs');
const content = fs.readFileSync('C:\\Users\\Admin\\.gemini\\antigravity\\brain\\419b95ca-0bdb-4772-8130-df08ce17db26\\.system_generated\\steps\\9969\\content.md', 'utf8');

// Regex for drive file metadata or names in window._DRIVE_ or JSON
const matches = content.match(/\["[^"]+\.(jpg|jpeg|png|webp|mp4|mov)"/gi);
console.log('Matches:', matches ? matches.slice(0, 30) : 'None');

// Regex for file titles
const fileNames = [];
const regex = /"([^"]+\.(?:jpg|jpeg|png|webp|mp4|mov))"/gi;
let match;
while ((match = regex.exec(content)) !== null) {
  if (!fileNames.includes(match[1])) {
    fileNames.push(match[1]);
  }
}
console.log('Extracted file names:', fileNames);
