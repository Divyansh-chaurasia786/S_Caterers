/**
 * Fix remaining 4 Book buttons (Silver, Gold, Royal, Full)
 */
const fs = require('fs');
const file = 'D:/s caterers new/resources/views/services.blade.php';
let f = fs.readFileSync(file, 'utf8');

const bookFixes = [
  { old: `<a href="#inquiry" class="btn btn-gold px-4 py-2 fw-bold" data-bs-dismiss="modal" onclick="selectPackageFromModal('Silver Menu')"`, pkg: 'Silver Menu', modal: 'silverMenuModal', cls: 'btn btn-gold px-4 py-2 fw-bold' },
  { old: `<a href="#inquiry" class="btn btn-gold px-4 py-2 fw-bold" data-bs-dismiss="modal" onclick="selectPackageFromModal('Gold Menu')"`,   pkg: 'Gold Menu',   modal: 'goldMenuModal',   cls: 'btn btn-gold px-4 py-2 fw-bold' },
  { old: `<a href="#inquiry" class="btn btn-gold px-4 py-2 fw-bold" data-bs-dismiss="modal" onclick="selectPackageFromModal('Royal Menu')"`, pkg: 'Royal Menu', modal: 'royalMenuModal', cls: 'btn btn-gold px-4 py-2 fw-bold' },
  { old: `<a href="#inquiry" class="btn btn-gold px-4 py-2 fw-bold" data-bs-dismiss="modal" onclick="selectPackageFromModal('Full Menu')"`,  pkg: 'Full Menu',  modal: 'fullMenuModal',  cls: 'btn btn-gold px-4 py-2 fw-bold' },
];

bookFixes.forEach(b => {
  const idx = f.indexOf(b.old);
  if (idx === -1) { console.log('  ⚠ Not found:', b.pkg); return; }

  // Find the style attribute close and then >content</a>
  const tagEnd = f.indexOf('>', idx);
  const closeA = f.indexOf('</a>', tagEnd);
  const inner = f.slice(tagEnd + 1, closeA).trim();

  const newBtn = `<button type="button" class="${b.cls}" onclick="bookMenuFromModal('${b.pkg}', '${b.modal}')" style="${(() => {
    // Extract existing style
    const styleMatch = f.slice(idx, tagEnd).match(/style="([^"]*)"/);
    return styleMatch ? styleMatch[1] : '';
  })()}">${inner}</button>`;

  f = f.slice(0, idx) + newBtn + f.slice(closeA + 4);
  console.log('  ✓ Fixed:', b.pkg);
});

fs.writeFileSync(file, f, 'utf8');

// Verify
const oldRefs = (f.match(/selectPackageFromModal\(/g) || []).length;
const newRefs  = (f.match(/bookMenuFromModal\(/g)      || []).length;
const oldLinks = (f.match(/href="#inquiry"[^>]*data-bs-dismiss/g) || []).length;
console.log(`\nOld selectPackageFromModal calls: ${oldRefs}`);
console.log(`New bookMenuFromModal calls:       ${newRefs}`);
console.log(`Remaining href="#inquiry" dismiss: ${oldLinks}`);
console.log('Lines:', f.split('\n').length);
