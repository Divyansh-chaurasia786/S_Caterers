// Binary-level fix for encoding corruption
// The file contains double-encoded UTF-8 (UTF-8 bytes read as Latin-1 then re-encoded as UTF-8)
// Strategy: find the known garbled byte sequences and replace them

const fs = require('fs');
const file = 'D:/s caterers new/resources/views/services.blade.php';

// Read as binary buffer
let buf = fs.readFileSync(file);
let s = buf.toString('binary'); // treat as latin-1

// ── The original UTF-8 bytes for various chars, re-encoded as latin-1 ──
// • (U+2022) in UTF-8 = E2 80 A2
//   double-encoded as latin-1 chars = â€¢ → then that re-encoded to UTF-8:
//   â = C3 A2, € = E2 80 AC (but as latin-1 â€ = E2 80), ¢ = C2 A2
// Let's just do string-level replacements on the latin-1 view

const fixes = [
  // bullet •  — many variants
  ['\xc3\x82\xc2\xa2\xc3\xa2\xc2\x80\xc2\x9e\xc2\xa2', '\xe2\x80\xa2'],  // •
  ['\xc3\x83\xc2\xa2\xc3\xa2\xc2\x80\xc2\xa2',          '\xe2\x80\xa2'],  // •
  ['\xc3\xa2\xc2\x80\xc2\xa2',                           '\xe2\x80\xa2'],  // •
  // ₹ rupee
  ['\xc3\x82\xc2\xa2\xc3\xa2\xc2\x80\xc2\x9a\xc2\xb9', '\xe2\x82\xb9'],  // ₹
  ['\xc3\xa2\xc2\x82\xc2\xac',                           '\xe2\x82\xac'],  // €
  // — em dash
  ['\xc3\xa2\xc2\x80\xc2\x94',                           '\xe2\x80\x94'],  // —
  // · middle dot  
  ['\xc3\x82\xc2\xb7',                                   '\xc2\xb7'],      // ·
];

// Apply binary fixes (work on latin-1 string of bytes)
let fixed = s;
fixes.forEach(([from, to]) => {
  while (fixed.includes(from)) {
    fixed = fixed.split(from).join(to);
  }
});

// Also do string-level text patterns that survived
// Re-interpret as utf8 and do text replacements
let text = Buffer.from(fixed, 'binary').toString('utf8');

// Any remaining obvious garbled sequences
const textFixes = [
  [/'¢¢Ã¢₹Å¡¬€š¢\s*/g, '• '],
  [/Å¡¬€š¢\s*/g, '• '],
  [/¢¢Ã¢₹/g, ''],
  [/Ã¢₹Å¡/g, ''],
  [/€š¢/g, ''],
  [/'¢¢/g, ''],
  // Fix ₹50 pattern: "50)" that's left alone (₹ was already set)
];
textFixes.forEach(([rx, repl]) => {
  text = text.replace(rx, repl);
});

// Count remaining issues
const badCount = (text.match(/Å¡|¬€š|¢¢Ã|ÃƒÆ|Ã‚Â|Ãƒâ€/g) || []).length;
console.log('Remaining garbled:', badCount);

// Find specific VIP section lines
const vipStart = text.indexOf('vipMenuModalBody');
const vipSection = text.slice(vipStart, vipStart + 5000);
const bulletCount = (vipSection.match(/• /g) || []).length;
const badBullets = (vipSection.match(/'¢|Å¡/g) || []).length;
console.log(`VIP section: ${bulletCount} good bullets, ${badBullets} bad`);

fs.writeFileSync(file, text, 'utf8');
console.log('Saved. Lines:', text.split('\n').length);
