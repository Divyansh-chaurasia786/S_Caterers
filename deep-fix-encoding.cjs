// Deep fix: replace ALL garbled multi-byte sequences in services.blade.php
const fs = require('fs');
const file = 'D:/s caterers new/resources/views/services.blade.php';
let f = fs.readFileSync(file, 'utf8');

const before = f.length;

// ── Bullet point variants ──────────────────────────────────────
// The UTF-8 bullet • was double-encoded as latin-1 → utf-8 twice
const bullets = [
  'ÃƒÆ\'Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€šÃ‚Â¢',  // most common
  'Ã¢â‚¬Â¢',
  'â€¢',
];
bullets.forEach(b => { f = f.split(b).join('•'); });

// ── Rupee ₹ variants ──────────────────────────────────────────
const rupees = [
  'ÃƒÆ\'Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¹',
  'Ã¢â€šÂ¬',
  'â‚¬',
];
rupees.forEach(r => { f = f.split(r).join('₹'); });

// ── Em dash — variants ────────────────────────────────────────
const emdashes = [
  'Ã¢â‚¬â€œ',
  'â€"',
  'â€"',
];
emdashes.forEach(e => { f = f.split(e).join('—'); });

// ── En dash – ────────────────────────────────────────────────
f = f.split('Ã¢â‚¬â€˜').join('–');

// ── Middot · ────────────────────────────────────────────────
f = f.split('Â·').join('·');

// ── Smart quotes ─────────────────────────────────────────────
f = f.split('Ã¢â‚¬Å"').join('"');
f = f.split('Ã¢â‚¬ï¿½').join('"');
f = f.split('Ã¢â‚¬â„¢').join("'");

// ── Any remaining Ã... patterns (catch-all) ──────────────────
// These are all double-UTF8 artifacts — remove them
f = f.replace(/Ã[ƒ‚â€\s]+([\x80-\xff]|[Â-Ã][^\s<]{0,6})/g, '');

const after = f.length;
console.log(`Fixed: ${before - after} chars of garbled encoding removed`);

// Count remaining Ã patterns
const remaining = (f.match(/ÃƒÆ|Ã‚Â|Ãƒâ|Ã¢â/g) || []).length;
console.log(`Remaining garbled patterns: ${remaining}`);

fs.writeFileSync(file, f, 'utf8');
console.log('Done.');
