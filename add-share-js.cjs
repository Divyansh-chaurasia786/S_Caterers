/**
 * Final cleanup:
 * 1. Fix full menu header button styling
 * 2. Fix subtitle garbled text
 * 3. Add shareMenu() JS function
 * 4. Add deep-link auto-open on page load
 */
const fs = require('fs');
const file = 'D:/s caterers new/resources/views/services.blade.php';
let f = fs.readFileSync(file, 'utf8');

// ── 1. Fix full menu header — replace the wrong btn with proper share btn ────
f = f.replace(
  `<div class="d-flex align-items-center justify-content-center gap-2 pb-0">
              <button onclick="shareMenu('full')" class="btn fw-bold d-inline-flex align-items-center gap-1" style="border-radius:8px;font-size:0.82rem;background:#D4AF37;color:#fff;border:none;padding:8px 16px;">
            <i class="fa-solid fa-share-nodes"></i> Share Menu
          </button>
            </div>`,
  `<div class="d-flex align-items-center justify-content-center gap-2 pb-0">
              <button onclick="shareMenu('full')" class="d-inline-flex align-items-center gap-2 menu-dl-btn" style="background:#D4AF37;color:#111;font-size:0.77rem;font-weight:800;padding:6px 18px;border-radius:50px;border:none;cursor:pointer;box-shadow:0 4px 14px rgba(212,175,55,0.5);letter-spacing:0.5px;">
                <i class="fa-solid fa-share-nodes" style="font-size:0.78rem;"></i> Share Menu
              </button>
            </div>`
);

// ── 2. Fix garbled subtitle in full menu header ──────────────────────────────
f = f.replace(
  `S. Caterers Ã¢₹`,
  `S. Caterers — Complete Vegetarian Banquet Collection`
);
f = f.replace(
  'S. Caterers — Complete Vegetarian Banquet Collection',
  'S. Caterers — Complete Vegetarian Banquet Collection'
);
// Also catch any remnant garbled subtitle patterns
f = f.replace(/S\. Caterers [^<]{1,80}(?=\s*<\/p>)/g, (m) => {
  if (m.includes('Complete')) return m;
  if (m.includes('Ã') || m.includes('₹') || m.includes('¢')) return 'S. Caterers — Complete Vegetarian Banquet Collection';
  return m;
});
console.log('Fixed full menu subtitle');

// ── 3. Add shareMenu() JS + deep-link auto-open ──────────────────────────────
const jsCode = `
  <script>
    /* ── SHARE MENU — deep-link sharing ─────────────────────────── */
    function shareMenu(menuType) {
      var names = {
        silver: 'Silver Choice Menu',
        gold:   'The Gold Menu',
        royal:  'The Royal Choice Menu',
        vip:    'VIP Menu',
        full:   'Master Full Menu'
      };
      var base = window.location.origin + window.location.pathname.replace(/\\/$/, '');
      var url  = base + '?menu=' + menuType;
      var title = 'S. Caterers — ' + (names[menuType] || 'Menu');
      var text  = 'Check out the ' + (names[menuType] || 'Menu') +
                  ' at S. Caterers by Amit Agarwal — Premium Pure Vegetarian Catering, Lucknow.';

      if (navigator.share) {
        navigator.share({ title: title, text: text, url: url })
          .catch(function(){});
      } else {
        /* Fallback: copy to clipboard + show toast */
        navigator.clipboard.writeText(url).then(function() {
          showShareToast('Link copied! Share it with your guests.');
        }).catch(function() {
          /* Last fallback */
          prompt('Copy this link and share it:', url);
        });
      }
    }

    /* Toast notification */
    function showShareToast(msg) {
      var t = document.createElement('div');
      t.textContent = msg;
      t.style.cssText = [
        'position:fixed;bottom:24px;left:50%;transform:translateX(-50%);',
        'background:#1A1A1A;color:#D4AF37;padding:12px 24px;border-radius:50px;',
        'font-size:0.85rem;font-weight:700;z-index:99999;',
        'box-shadow:0 8px 30px rgba(0,0,0,0.4);letter-spacing:0.5px;',
        'transition:opacity 0.4s ease;opacity:1;'
      ].join('');
      document.body.appendChild(t);
      setTimeout(function(){ t.style.opacity='0'; setTimeout(function(){ t.remove(); }, 400); }, 2800);
    }

    /* ── DEEP-LINK: auto-open modal from ?menu=xxx URL param ─────── */
    (function() {
      var modalMap = {
        silver: 'silverMenuModal',
        gold:   'goldMenuModal',
        royal:  'royalMenuModal',
        vip:    'vipMenuModal',
        full:   'fullMenuModal'
      };
      var params   = new URLSearchParams(window.location.search);
      var menuKey  = params.get('menu');
      var modalId  = menuKey ? modalMap[menuKey] : null;
      if (!modalId) return;

      function tryOpen() {
        var el = document.getElementById(modalId);
        if (el && window.bootstrap) {
          new bootstrap.Modal(el).show();
        }
      }

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
          setTimeout(tryOpen, 300); /* wait for Bootstrap to init */
        });
      } else {
        setTimeout(tryOpen, 300);
      }
    })();

    function selectPackageFromModal(packageName) {
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
    }
  </script>
`;

// Replace the existing minimal script block that only has selectPackageFromModal
const oldScript = f.indexOf('\n  <script>\n    function selectPackageFromModal');
const oldScriptEnd = f.indexOf('</script>', oldScript) + 9;

if (oldScript !== -1) {
  f = f.slice(0, oldScript) + jsCode + f.slice(oldScriptEnd);
  console.log('JS block replaced');
} else {
  // Just append before admin-trigger.js
  f = f.replace(
    '  <!-- Admin Verification Script -->',
    jsCode + '\n  <!-- Admin Verification Script -->'
  );
  console.log('JS block appended');
}

// ── 4. Verify ────────────────────────────────────────────────────────────────
const shareCount = (f.match(/shareMenu\(/g) || []).length;
const downloadCount = (f.match(/Download PDF/g) || []).length;
console.log(`shareMenu() buttons: ${shareCount}`);
console.log(`Download PDF remaining: ${downloadCount}`);

fs.writeFileSync(file, f, 'utf8');
console.log('Saved. Lines:', f.split('\n').length);
