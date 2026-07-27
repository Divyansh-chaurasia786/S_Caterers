// Fix encoding and slim modal headers
const fs = require('fs');
const file = 'D:/s caterers new/resources/views/services.blade.php';
let f = fs.readFileSync(file, 'utf8');

// ── FIX 1: All garbled bullet/middot encoding ──────────────────
const garbled = [
  /ÃƒÆ'Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€šÃ‚Â¢/g,
  /Ã¢â‚¬Â¢/g,
  /Â·/g,
  /\u00C2\u00B7/g,
];
garbled.forEach(rx => { f = f.replace(rx, '·'); });
console.log('Encoding fixed');

// ── FIX 2: Footer tagline banners ─────────────────────────────
// Replace the big dark py-3 strip inside modal body with slim py-2 version
const banners = [
  {
    find: /(<div class="text-center py-3 rounded-3"[^>]*>)\s*PROUDLY SERVING LUCKNOW\s*[·•\s·]*\s*SILVER CHOICE MENU\s*(<\/div>)/g,
    replace: '<div class="text-center py-2 rounded-3" style="background:#0F0F0F;color:#C6A15B;font-weight:800;font-size:0.78rem;letter-spacing:2px;text-transform:uppercase;">✦ PROUDLY SERVING LUCKNOW &nbsp;·&nbsp; SILVER CHOICE MENU ✦</div>'
  },
  {
    find: /(<div class="text-center py-3 rounded-3"[^>]*>)\s*PROUDLY SERVING LUCKNOW\s*[·•\s·]*\s*THE GOLD MENU\s*(<\/div>)/g,
    replace: '<div class="text-center py-2 rounded-3" style="background:#0F0F0F;color:#D4AF37;font-weight:800;font-size:0.78rem;letter-spacing:2px;text-transform:uppercase;">✦ PROUDLY SERVING LUCKNOW &nbsp;·&nbsp; THE GOLD MENU ✦</div>'
  },
  {
    find: /(<div class="text-center py-3 rounded-3"[^>]*background: #0F0F0F[^>]*>)\s*FOR BOOKINGS[\s\S]{0,200}?(<\/div>)/,
    replace: '<div class="text-center py-2 rounded-3" style="background:#2D0008;color:#FFD700;font-weight:800;font-size:0.78rem;letter-spacing:2px;text-transform:uppercase;">✦ BOOKINGS: 9839077960, 9415788950 &nbsp;·&nbsp; amit1881970@yahoo.in ✦</div>'
  },
  {
    find: /(<div class="text-center py-3 rounded-3"[^>]*background: #1A0933[^>]*>)\s*CONTACT US[\s\S]{0,200}?(<\/div>)/,
    replace: '<div class="text-center py-2 rounded-3" style="background:#1A0933;color:#D7A8F0;font-weight:800;font-size:0.78rem;letter-spacing:2px;text-transform:uppercase;">✦ CONTACT: 9839077960 &nbsp;·&nbsp; amit1881970@yahoo.in ✦</div>'
  },
];
banners.forEach(b => { f = f.replace(b.find, b.replace); });
console.log('Banners fixed');

// ── FIX 3: Make modal header COMPACT ───────────────────────────
// Reduce pt-4 pb-3 → pt-3 pb-2 on the inner content wrapper
f = f.replace(/class="w-100 px-4 pt-4 pb-3" style="position:relative;z-index:1;"/g,
              'class="w-100 px-4 pt-3 pb-2" style="position:relative;z-index:1;"');

// Reduce mb-3 → mb-2 on brand pill wrapper
f = f.replace(/class="d-flex align-items-center justify-content-center mb-3"/g,
              'class="d-flex align-items-center justify-content-center mb-2"');

// Reduce brand pill padding px-3 py-1 → px-2 py-1
f = f.replace(/class="d-inline-flex align-items-center gap-2 px-3 py-1" style="background:rgba\(255,255,255,0.08\)/g,
              'class="d-inline-flex align-items-center gap-2 px-2 py-1" style="background:rgba(255,255,255,0.08)');

// Reduce logo height 20px → 18px
f = f.replace(/style="height:20px;width:auto;filter:brightness\(1\.3\);"/g,
              'style="height:18px;width:auto;filter:brightness(1.3);"');

// Reduce brand pill font-size 0.72rem → 0.68rem
f = f.replace(/font-size:0\.72rem;font-weight:800;letter-spacing:2px;text-transform:uppercase;"/g,
              'font-size:0.68rem;font-weight:800;letter-spacing:2px;text-transform:uppercase;"');

// Reduce title font clamp — smaller max size
f = f.replace(/font-size:clamp\(1\.4rem,4vw,2\.2rem\)/g, 'font-size:clamp(1.2rem,3.5vw,1.7rem)');

// Reduce letter-spacing on title
f = f.replace(/letter-spacing:3px;text-transform:uppercase;text-shadow/g,
              'letter-spacing:2px;text-transform:uppercase;text-shadow');

// Reduce margin on title sides
f = f.replace(/margin:0 60px;"/g, 'margin:0 50px;"');

// Reduce decorative line gap: my-2 → my-1
f = f.replace(/class="d-flex align-items-center justify-content-center gap-3 my-2"/g,
              'class="d-flex align-items-center justify-content-center gap-3 my-1"');

// Reduce subtitle mb-3 → mb-2
f = f.replace(/<p class="text-center mb-3" style="color:rgba\(255,255,255,0\.7\)/g,
              '<p class="text-center mb-2" style="color:rgba(255,255,255,0.7)');

// Reduce subtitle font-size 0.88rem → 0.82rem
f = f.replace(/font-size:0\.88rem;letter-spacing:1px;font-weight:500;margin:0;"/g,
              'font-size:0.82rem;letter-spacing:0.8px;font-weight:500;margin:0;"');

// Slim the action button row pb-1 → pb-0 (no extra bottom pad)
f = f.replace(/<div class="d-flex align-items-center justify-content-center gap-2 pb-1">/g,
              '<div class="d-flex align-items-center justify-content-center gap-2 pb-0">');

// Download button: padding 8px 18px → 6px 16px
f = f.replace(/padding:8px 18px;border-radius:50px;text-decoration:none/g,
              'padding:6px 16px;border-radius:50px;text-decoration:none');
f = f.replace(/font-size:0\.8rem;font-weight:800/g, 'font-size:0.77rem;font-weight:800');

console.log('Header compacted');

// ── FIX 4: Modal footer — make it look cleaner ─────────────────
// Replace the old white bg-light footer with a proper one
f = f.replace(
  /class="modal-footer bg-light px-4 py-3 border-top d-flex align-items-center justify-content-between flex-wrap gap-2"/g,
  'class="modal-footer menu-modal-footer d-flex align-items-center justify-content-between flex-wrap gap-2"'
);
console.log('Footer cleaned');

fs.writeFileSync(file, f, 'utf8');
console.log('\nAll fixes applied. Lines:', f.split('\n').length);
