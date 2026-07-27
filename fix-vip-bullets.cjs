// Targeted fix for the remaining garbled bullet pattern in VIP menu
const fs = require('fs');
const file = 'D:/s caterers new/resources/views/services.blade.php';
let f = fs.readFileSync(file, 'utf8');

// The remaining garbled pattern in <li> items:
// '¢¢Ã¢₹Å¡¬€š¢  — this is remnant of the double-encoding cleanup
// Let's just search for <li> items that start with these chars and strip them

// Pattern: any sequence of non-letter non-space chars at start of li content
// that clearly aren't part of the text
f = f.replace(/<li>'¢¢Ã¢₹Å¡¬€š¢ /g, '<li>• ');
f = f.replace(/<li>'¢¢Ã¢₹Å¡¬€š¢/g,  '<li>• ');

// Also fix VIDAI section header: THE VIDAI MENU (EXTRA ₹50) — ₹ was replaced above
f = f.replace(/THE VIDAI MENU \(EXTRA [^)]*\)/g, 'THE VIDAI MENU (EXTRA ₹50)');

// Count remaining issues
const li = (f.match(/<li>'¢/g) || []).length;
console.log('Remaining bad <li>:', li);

// Check for any other ¬€š or similar remnants
const rem = (f.match(/'¢¢Ã¢|¬€š¢|Å¡¬/g) || []).length;
console.log('Remaining remnants:', rem);

fs.writeFileSync(file, f, 'utf8');
console.log('Done');
