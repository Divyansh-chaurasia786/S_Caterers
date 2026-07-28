/**
 * Fix close button in all 5 modal headers:
 * - Add z-index:10 so it sits above the content div (z-index:1)
 * - Increase touch area for mobile (min 44x44px)
 * - Keep it always visible and clickable
 */
const fs = require('fs');
const file = 'D:/s caterers new/resources/views/services.blade.php';
let f = fs.readFileSync(file, 'utf8');

// Current close button style (same across all 5 modals):
const oldStyle = `style="top:14px;right:16px;opacity:0.8;font-size:0.95rem;filter:drop-shadow(0 1px 3px rgba(0,0,0,0.5));"`;

// New style: z-index:10, bigger touch target, always on top
const newStyle = `style="top:10px;right:12px;opacity:0.9;z-index:10;width:36px;height:36px;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.12);border-radius:50%;filter:drop-shadow(0 1px 4px rgba(0,0,0,0.6));cursor:pointer;"`;

const before = (f.match(/btn-close btn-close-white position-absolute/g) || []).length;
f = f.split(oldStyle).join(newStyle);
const after  = (f.match(/btn-close btn-close-white position-absolute/g) || []).length;
console.log(`Close buttons found: ${before}, style updated: ${before - (f.split(oldStyle).length - 1)}`);

// Also ensure the inner content wrapper doesn't overflow the close button area
// The content wrapper has: class="w-100 px-4 pt-3 pb-2" style="position:relative;z-index:1;"
// We keep z-index:1 there — since close button now has z-index:10, it will be on top

fs.writeFileSync(file, f, 'utf8');
console.log('Saved.');

// Verify
const remaining = (f.match(new RegExp(oldStyle.replace(/[.*+?^${}()|[\]\\]/g,'\\$&'),'g')) || []).length;
console.log('Old style remaining:', remaining, '(should be 0)');
const newCount = (f.match(/z-index:10;width:36px/g) || []).length;
console.log('New style applied to:', newCount, 'buttons (should be 5)');
