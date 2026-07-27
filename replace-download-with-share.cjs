/**
 * Replace Download PDF buttons with Share buttons
 * and add deep-link modal auto-open on page load
 */
const fs = require('fs');
const file = 'D:/s caterers new/resources/views/services.blade.php';
let f = fs.readFileSync(file, 'utf8');

// ── 1. HEADER: replace the centred download <a> with a Share button ──────────
// Pattern in header action row:
// <a href="{{ asset('pdfs/XXXX.pdf') }}" download="S-Caterers-XXXX.pdf"
//    class="d-inline-flex align-items-center gap-2 menu-dl-btn"
//    style="...">
//   <i class="fa-solid fa-download" ...></i> Download PDF
// </a>

const menus = [
  { key: 'silver', label: 'Silver Choice Menu',    accentColor: '#C6A15B', shadow: '198,161,91' },
  { key: 'gold',   label: 'The Gold Menu',          accentColor: '#D4AF37', shadow: '212,175,55' },
  { key: 'royal',  label: 'The Royal Choice Menu',  accentColor: '#FFD700', shadow: '255,215,0'  },
  { key: 'vip',    label: 'VIP Menu',               accentColor: '#9B59B6', shadow: '155,89,182' },
  { key: 'full',   label: 'Master Full Menu',       accentColor: '#D4AF37', shadow: '212,175,55' },
];

menus.forEach(m => {
  // ── HEADER share button ──
  // Match the full <a ...> block in the header (ends with </a>)
  const headerPattern = new RegExp(
    `<a href="\\{\\{ asset\\('pdfs/${m.key === 'full' ? 'master-full-menu' : m.key + '-menu'}\\.pdf'\\) \\}\\}" download="[^"]*"\\s*class="d-inline-flex align-items-center gap-2 menu-dl-btn"[\\s\\S]*?<\\/a>`,
    'g'
  );
  const headerShare = `<button onclick="shareMenu('${m.key}')" class="d-inline-flex align-items-center gap-2 menu-dl-btn" style="background:${m.accentColor};color:#fff;font-size:0.77rem;font-weight:800;padding:6px 18px;border-radius:50px;border:none;cursor:pointer;box-shadow:0 4px 14px rgba(${m.shadow},0.5);letter-spacing:0.5px;">
                <i class="fa-solid fa-share-nodes" style="font-size:0.78rem;"></i> Share Menu
              </button>`;
  const h1 = f;
  f = f.replace(headerPattern, headerShare);
  if (f === h1) console.log(`  ⚠ Header pattern not matched for ${m.key}`);
  else console.log(`  ✓ Header share button: ${m.key}`);
});

// ── 2. FOOTER: replace Download PDF <a> buttons in modal-footer ───────────────
// Pattern: <a href="{{ asset('pdfs/XXX') }}" download="..." class="btn fw-bold...">
//            <i...></i> Download PDF
//          </a>

menus.forEach(m => {
  const pdfFile = m.key === 'full' ? 'master-full-menu.pdf' : `${m.key}-menu.pdf`;
  // Be flexible on the asset path since "full" had "Complete" earlier
  const footerPattern = new RegExp(
    `<a href="\\{\\{ asset\\('pdfs/[^']*'\\) \\}\\}" download="[^"]*" class="btn fw-bold[^"]*"[^>]*>[\\s\\S]*?Download PDF[\\s\\S]*?<\\/a>`,
  );

  // More reliable: replace by finding which modal footer belongs to which menu
  // We'll do it by proximity — find the modal footer comment markers
});

// Manual per-menu footer replacement using unique content
const footerReplacements = [
  {
    old: `<a href="{{ asset('pdfs/silver-menu.pdf') }}" download="S-Caterers-silver-menu.pdf" class="btn fw-bold d-inline-flex align-items-center gap-1"`,
    menuKey: 'silver', accent: '#C6A15B', shadow: '198,161,91'
  },
  {
    old: `<a href="{{ asset('pdfs/gold-menu.pdf') }}" download="S-Caterers-gold-menu.pdf" class="btn fw-bold d-inline-flex align-items-center gap-1"`,
    menuKey: 'gold', accent: '#D4AF37', shadow: '212,175,55'
  },
  {
    old: `<a href="{{ asset('pdfs/royal-menu.pdf') }}" download="S-Caterers-royal-menu.pdf" class="btn fw-bold d-inline-flex align-items-center gap-1"`,
    menuKey: 'royal', accent: '#FFD700', shadow: '255,215,0'
  },
  {
    old: `<a href="{{ asset('pdfs/vip-menu.pdf') }}" download="S-Caterers-vip-menu.pdf" class="btn fw-bold d-inline-flex align-items-center gap-1"`,
    menuKey: 'vip', accent: '#9B59B6', shadow: '155,89,182'
  },
  {
    old: `<a href="{{ asset('pdfs/master-full-menu.pdf') }}" download="S-Caterers-master-full-menu.pdf" class="btn fw-bold d-inline-flex align-items-center gap-1"`,
    menuKey: 'full', accent: '#D4AF37', shadow: '212,175,55'
  },
];

footerReplacements.forEach(r => {
  // Find the full <a>...</a> block starting with r.old and replace to </a>
  const idx = f.indexOf(r.old);
  if (idx === -1) { console.log(`  ⚠ Footer not found for ${r.menuKey}`); return; }

  const closeA = f.indexOf('</a>', idx);
  if (closeA === -1) { console.log(`  ⚠ No </a> found for ${r.menuKey}`); return; }

  const oldBlock = f.slice(idx, closeA + 4);
  const newBlock = `<button onclick="shareMenu('${r.menuKey}')" class="btn fw-bold d-inline-flex align-items-center gap-1" style="border-radius:8px;font-size:0.82rem;background:${r.accent};color:#fff;border:none;padding:8px 16px;box-shadow:0 4px 12px rgba(${r.shadow},0.4);">
            <i class="fa-solid fa-share-nodes"></i> Share Menu
          </button>`;

  f = f.slice(0, idx) + newBlock + f.slice(closeA + 4);
  console.log(`  ✓ Footer share button: ${r.menuKey}`);
});

// ── 3. Also fix the broken "Complete" asset path if still there ──────────────
f = f.replace(
  /<a href="\{\{ asset\('pdfs\/Complete'\) \}\}"[^>]*>[\s\S]*?<\/a>/,
  `<button onclick="shareMenu('full')" class="btn fw-bold d-inline-flex align-items-center gap-1" style="border-radius:8px;font-size:0.82rem;background:#D4AF37;color:#fff;border:none;padding:8px 16px;">
            <i class="fa-solid fa-share-nodes"></i> Share Menu
          </button>`
);

// ── 4. Save ─────────────────────────────────────────────────────────────────
fs.writeFileSync(file, f, 'utf8');
console.log('\nFile saved. Lines:', f.split('\n').length);

// Verify no more download PDF buttons in modals
const remaining = (f.match(/pdfs\/(silver|gold|royal|vip|master)/g) || []).length;
console.log('Remaining PDF asset references:', remaining, '(should be 0)');
