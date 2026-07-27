/**
 * 1. Remove FOOTER TAGLINE contact strips from all 5 modal bodies
 * 2. Fix Book button: close modal properly then smooth-scroll to form
 */
const fs = require('fs');
const file = 'D:/s caterers new/resources/views/services.blade.php';
let f = fs.readFileSync(file, 'utf8');

// ── 1. Remove all FOOTER TAGLINE blocks ──────────────────────────────────────
// Pattern: <!-- FOOTER TAGLINE -->\n          <div ...>...</div>\n
f = f.replace(/\s*<!-- FOOTER TAGLINE -->\s*<div[^>]*>[\s\S]*?<\/div>\s*\n/g, '\n');
const remaining = (f.match(/FOOTER TAGLINE/g) || []).length;
console.log('Remaining FOOTER TAGLINE blocks:', remaining, '(should be 0)');

// ── 2. Fix Book buttons: remove href="#inquiry", keep data-bs-dismiss, add bookMenuFromModal ──
// Current:  <a href="#inquiry" class="..." data-bs-dismiss="modal" onclick="selectPackageFromModal('Silver Package')">
// New:      <button class="..." onclick="bookMenuFromModal('Silver Package', 'silverMenuModal')">

const bookFixes = [
  { old: `<a href="#inquiry" class="btn btn-gold px-4 py-2 fw-bold" data-bs-dismiss="modal" onclick="selectPackageFromModal('Silver Package')"`, pkg: 'Silver Package', modal: 'silverMenuModal', cls: 'btn btn-gold px-4 py-2 fw-bold' },
  { old: `<a href="#inquiry" class="btn btn-gold px-4 py-2 fw-bold" data-bs-dismiss="modal" onclick="selectPackageFromModal('Gold Package')"`,   pkg: 'Gold Package',   modal: 'goldMenuModal',   cls: 'btn btn-gold px-4 py-2 fw-bold' },
  { old: `<a href="#inquiry" class="btn btn-gold px-4 py-2 fw-bold" data-bs-dismiss="modal" onclick="selectPackageFromModal('Royal Package')"`, pkg: 'Royal Package', modal: 'royalMenuModal', cls: 'btn btn-gold px-4 py-2 fw-bold' },
  { old: `<a href="#inquiry" class="btn px-4 py-2 fw-bold" data-bs-dismiss="modal" onclick="selectPackageFromModal('VIP Menu')"`,              pkg: 'VIP Menu',      modal: 'vipMenuModal',   cls: 'btn px-4 py-2 fw-bold' },
  { old: `<a href="#inquiry" class="btn btn-gold px-4 py-2 fw-bold" data-bs-dismiss="modal" onclick="selectPackageFromModal('Full Package')"`,  pkg: 'Full Package',  modal: 'fullMenuModal',  cls: 'btn btn-gold px-4 py-2 fw-bold' },
];

bookFixes.forEach(b => {
  // Find the closing tag (it's an <a>, find </a>)
  const idx = f.indexOf(b.old);
  if (idx === -1) { console.log('  ⚠ Not found:', b.pkg); return; }

  // Find the end of this <a>...</a> - the next </a>
  const closeA = f.indexOf('</a>', idx);
  if (closeA === -1) { console.log('  ⚠ No </a> for:', b.pkg); return; }

  // Extract the inner content (the button label text)
  const inner = f.slice(f.indexOf('>', idx) + 1, closeA).trim();

  // Build replacement <button>
  const newBtn = `<button type="button" class="${b.cls}" onclick="bookMenuFromModal('${b.pkg}', '${b.modal}')">${inner}</button>`;

  f = f.slice(0, idx) + newBtn + f.slice(closeA + 4);
  console.log('  ✓ Book button fixed:', b.pkg);
});

// ── 3. Replace selectPackageFromModal with bookMenuFromModal ─────────────────
const oldFn = `    function selectPackageFromModal(packageName) {
      var pkgSelect = document.getElementById('inq-package');
      if (pkgSelect) {
        for (var i = 0; i < pkgSelect.options.length; i++) {
          if (pkgSelect.options[i].value.toLowerCase().includes(packageName.toLowerCase())) {
            pkgSelect.options[i].selected = true; break;
          }
        }
      }
      var sec = document.getElementById('inquiry');
      if (sec) { sec.scrollIntoView({ behavior: 'smooth' }); }
    }`;

const newFn = `    function bookMenuFromModal(packageName, modalId) {
      /* 1. Select the package in the form dropdown */
      var pkgSelect = document.getElementById('inq-package');
      if (pkgSelect) {
        for (var i = 0; i < pkgSelect.options.length; i++) {
          if (pkgSelect.options[i].value.toLowerCase().includes(packageName.toLowerCase())) {
            pkgSelect.options[i].selected = true;
            break;
          }
        }
      }

      /* 2. Close the modal first, then scroll after animation ends (350ms) */
      var modalEl = document.getElementById(modalId);
      if (modalEl && window.bootstrap) {
        var bsModal = bootstrap.Modal.getInstance(modalEl);
        if (bsModal) {
          bsModal.hide();
          setTimeout(function() {
            var sec = document.getElementById('inquiry');
            if (sec) { sec.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
          }, 380); /* wait for modal close animation */
          return;
        }
      }
      /* Fallback: just scroll */
      var sec = document.getElementById('inquiry');
      if (sec) { sec.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    }

    /* Keep old name as alias for any remaining references */
    function selectPackageFromModal(packageName) {
      bookMenuFromModal(packageName, '');
    }`;

if (f.includes(oldFn)) {
  f = f.replace(oldFn, newFn);
  console.log('✓ Function replaced');
} else {
  // Try to find the function by simpler pattern
  f = f.replace(
    /function selectPackageFromModal\(packageName\) \{[\s\S]*?\n    \}/,
    newFn
  );
  console.log('✓ Function replaced (fuzzy)');
}

// ── 4. Save ──────────────────────────────────────────────────────────────────
fs.writeFileSync(file, f, 'utf8');
console.log('\nSaved. Lines:', f.split('\n').length);

// Verify
const taglines = (f.match(/FOOTER TAGLINE/g) || []).length;
const bookButtons = (f.match(/bookMenuFromModal/g) || []).length;
console.log('FOOTER TAGLINE remaining:', taglines);
console.log('bookMenuFromModal references:', bookButtons);
