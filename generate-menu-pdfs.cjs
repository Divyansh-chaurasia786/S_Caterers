/**
 * S. CATERERS — Menu PDF Generator (robust version)
 * Parses services.blade.php strictly by line ranges,
 * handles h4, h5 item elements and badge-less cards.
 */

const PDFDocument = require('pdfkit');
const fs   = require('fs');
const path = require('path');

const outDir = path.join(__dirname, 'public', 'pdfs');
if (!fs.existsSync(outDir)) fs.mkdirSync(outDir, { recursive: true });

const src   = fs.readFileSync(
  path.join(__dirname, 'resources', 'views', 'services.blade.php'), 'utf8'
);
const lines = src.split('\n');

// ── text helpers ──────────────────────────────────────────────────
function stripTags(s) {
  return (s||'').replace(/<[^>]+>/g,' ')
    .replace(/&amp;/g,'&').replace(/&mdash;/g,'—').replace(/&nbsp;/g,' ')
    .replace(/&lt;/g,'<').replace(/&gt;/g,'>').replace(/\s+/g,' ').trim();
}
function extractAttr(line, attr) {
  const rx = new RegExp(attr+'="([^"]*)"');
  const m = line.match(rx); return m ? m[1] : null;
}
function innerText(line) {
  return stripTags(line.replace(/.*?>/, '').replace(/<\/.*/, ''));
}

// ── parse one modal body given its line range ──────────────────────
function parseModal(startLine, endLine) {
  const body = lines.slice(startLine, endLine);
  const sections = [];
  let curSection = null;
  let curSubHead = null;
  let inCard = false;
  let cardBadge = '', cardName = '', cardDesc = '';

  const flush = () => {
    if (cardName && curSection) {
      curSection.items.push({
        badge: cardBadge,
        name:  cardName,
        desc:  cardDesc,
        sub:   curSubHead || ''
      });
    }
    cardBadge = ''; cardName = ''; cardDesc = ''; inCard = false;
  };

  for (const raw of body) {
    const line = raw.trim();

    // New section: div.mb-4
    if (line.startsWith('<div') && line.includes('class="mb-4')) {
      flush();
      curSection = { title:'', sub:'', items:[] };
      sections.push(curSection);
      curSubHead = null;
      continue;
    }

    // Section heading: h3.h5
    if (curSection && line.match(/h3.*class="h5 font-heading/)) {
      curSection.title = innerText(line);
      continue;
    }

    // Section sub-label: small.text-muted.fw-semibold
    if (curSection && !curSection.sub && line.includes('class="text-muted fw-semibold"')) {
      curSection.sub = innerText(line).replace(/&amp;/g,'&');
      continue;
    }

    // Sub-section heading: h4.h6 (full line, not inside a card)
    if (curSection && line.match(/h4.*class="h6 font-heading/) && !inCard) {
      curSubHead = innerText(line);
      continue;
    }

    // Start of item card: p-3 rounded-3 h-100 border
    if (line.includes('p-3 rounded-3 h-100 border') || line.includes('p-3 rounded-3 border')) {
      flush();
      inCard = true;
      continue;
    }

    if (!inCard) continue;

    // Badge inside card
    if (!cardBadge && line.includes('badge rounded-pill')) {
      cardBadge = innerText(line);
      continue;
    }

    // Item name: h4.h6 or h5.h6 or h5 inside card
    if (!cardName && line.match(/h[45].*class="h6 font-heading|h[45].*class="h6/)) {
      cardName = innerText(line);
      continue;
    }

    // Item description: p.text-muted.small
    if (cardName && !cardDesc && line.includes('class="text-muted small')) {
      // description may span multiple lines — grab inline part
      cardDesc = innerText(line);
      continue;
    }
    // continuation of description before closing </p>
    if (cardName && cardDesc && !line.startsWith('<') && line) {
      if (!line.startsWith('</')) cardDesc += ' ' + stripTags(line);
      continue;
    }

    // End of card
    if (inCard && line === '</div>') {
      // don't flush immediately — wait for next card start
    }
  }
  flush();

  return sections.filter(s => s.title && s.items.length > 0);
}

// ── find line numbers for each modal ─────────────────────────────
function findModal(bodyId) {
  let startLine = -1, endLine = -1;
  for (let i = 0; i < lines.length; i++) {
    if (startLine === -1 && lines[i].includes(`id="${bodyId}"`)) {
      startLine = i; continue;
    }
    if (startLine !== -1 && lines[i].includes('<!-- Modal Footer -->')) {
      endLine = i; break;
    }
  }
  return { startLine, endLine };
}

// ── colour helpers ────────────────────────────────────────────────
function hexRgb(h) {
  return [parseInt(h.slice(1,3),16), parseInt(h.slice(3,5),16), parseInt(h.slice(5,7),16)];
}
function lum([r,g,b]) { return 0.299*r+0.587*g+0.114*b; }

// ── PDF builder ───────────────────────────────────────────────────
function buildPdf(menu, sections) {
  return new Promise(resolve => {
    const doc = new PDFDocument({ size:'A4', margin:0, info:{
      Title: menu.title + ' — S. Caterers',
      Author:'S. Caterers by Amit Agarwal'
    }});

    const out = path.join(outDir, menu.file);
    doc.pipe(fs.createWriteStream(out));

    const W=595.28, H=841.89, ML=28, MR=28, CW=W-ML-MR;
    let y=0, pageNum=1;

    const [ar,ag,ab] = hexRgb(menu.accent);
    const [br,bg_,bb] = hexRgb(menu.bgCol);
    const textOnAcc = lum([ar,ag,ab])>155 ? '#111111':'#FFFFFF';

    // ── page decorations ──
    function coverHeader() {
      doc.rect(0,0,W,118).fill(menu.bgCol);
      doc.rect(0,108,W,10).fill(menu.accent);
      // Company
      doc.fillColor('#BBBBBB').fontSize(8.5).font('Helvetica')
         .text('S. CATERERS BY AMIT AGARWAL', ML, 24, {width:CW,align:'center',characterSpacing:3});
      // Title
      doc.fillColor(menu.accent).fontSize(28).font('Helvetica-Bold')
         .text(menu.title, ML, 42, {width:CW,align:'center',characterSpacing:1.5});
      // Subtitle
      const subLines = doc.heightOfString(menu.sub,{width:CW-20,fontSize:9,align:'center'});
      doc.fillColor('#999999').fontSize(9).font('Helvetica')
         .text(menu.sub, ML+10, 78, {width:CW-20,align:'center'});
      // Contact
      doc.fillColor('#777777').fontSize(8).font('Helvetica')
         .text('Call: 9839077960, 9415788950  |  amit1881970@yahoo.in', ML, 95, {width:CW,align:'center'});
      y = 128;
    }

    function miniHeader() {
      doc.rect(0,0,W,38).fill(menu.bgCol);
      doc.rect(0,32,W,6).fill(menu.accent);
      doc.fillColor(menu.accent).fontSize(11).font('Helvetica-Bold')
         .text(menu.title + '  ·  S. CATERERS BY AMIT AGARWAL', ML, 12, {width:CW,align:'center',characterSpacing:1});
      y = 50;
    }

    function pageFooter() {
      doc.rect(0,H-30,W,30).fill(menu.bgCol);
      doc.rect(0,H-30,W,4).fill(menu.accent);
      doc.fillColor('#888888').fontSize(7.5).font('Helvetica')
         .text('S. CATERERS — Premium Vegetarian Catering  |  scaterers.in', ML, H-20, {width:CW-40,align:'center'});
      doc.fillColor('#777777').fontSize(7).font('Helvetica')
         .text('Page '+pageNum, W-MR-30, H-20, {width:30,align:'right'});
    }

    function newPage() {
      pageFooter();
      doc.addPage({size:'A4',margin:0});
      pageNum++;
      miniHeader();
    }

    function checkY(need) { if (y+need > H-38) newPage(); }

    // ── section header ──
    function drawSectionHeader(title, sub) {
      checkY(36);
      // Accent background
      doc.rect(ML, y, CW, 24).fill(menu.accent);
      // Left stripe (darker)
      doc.rect(ML, y, 5, 24).fill(lum([ar,ag,ab])>155 ? 'rgba(0,0,0,0.15)':'rgba(255,255,255,0.2)');
      doc.fillColor(textOnAcc).fontSize(11).font('Helvetica-Bold')
         .text(title.toUpperCase(), ML+12, y+7, {width:CW-20,characterSpacing:0.8});
      y += 28;
      if (sub) {
        doc.fillColor('#888888').fontSize(8).font('Helvetica-Oblique')
           .text(sub.replace(/&amp;/g,'&'), ML+4, y, {width:CW-8});
        y += doc.heightOfString(sub,{width:CW-8,fontSize:8}) + 5;
      }
    }

    // ── sub-section heading ──
    function drawSubHead(text) {
      checkY(14);
      doc.rect(ML, y, 3, 12).fill(menu.accent);
      doc.fillColor('#444444').fontSize(8.5).font('Helvetica-Bold')
         .text(text.toUpperCase(), ML+8, y+2, {characterSpacing:0.5});
      y += 16;
    }

    // ── item row (2-col) ──
    function drawItems(items) {
      const COL_W = (CW-8)/2;

      for (let i=0; i<items.length; i+=2) {
        const a = items[i], b = items[i+1]||null;

        function cardH(it) {
          if (!it) return 0;
          const bH = it.badge ? 13 : 0;
          const nH = doc.heightOfString(it.name, {width:COL_W-16, fontSize:9, font:'Helvetica-Bold'});
          const dH = it.desc ? doc.heightOfString(it.desc, {width:COL_W-18, fontSize:7.5}) + 2 : 0;
          return bH + nH + dH + 14;
        }

        const rowH = Math.max(cardH(a), cardH(b), 30);
        checkY(rowH+5);

        function drawCard(it, x, w) {
          doc.roundedRect(x, y, w, rowH, 4)
             .fillAndStroke('#FFFDF9', '#E0D5C0');

          let iy = y+7;

          if (it.badge) {
            const bw = Math.min(it.badge.length*5.5+12, w-16);
            doc.roundedRect(x+7, iy, bw, 11, 3)
               .fill(menu.accent+'28');
            doc.fillColor(menu.accent).fontSize(6.5).font('Helvetica-Bold')
               .text(it.badge.toUpperCase(), x+11, iy+2.5, {width:bw-8, characterSpacing:0.5});
            iy += 14;
          }

          doc.fillColor('#1A1A1A').fontSize(9).font('Helvetica-Bold')
             .text(it.name, x+8, iy, {width:w-16});
          iy += doc.heightOfString(it.name,{width:w-16, fontSize:9}) + 2;

          if (it.desc) {
            doc.fillColor('#666666').fontSize(7.5).font('Helvetica')
               .text(it.desc, x+10, iy, {width:w-20});
          }
        }

        drawCard(a, ML, COL_W);
        if (b) drawCard(b, ML+COL_W+8, COL_W);
        y += rowH+5;
      }
    }

    // ── render ──
    coverHeader();

    sections.forEach(sec => {
      drawSectionHeader(sec.title, sec.sub);
      if (!sec.items.length) { y+=4; return; }

      // group by sub-heading
      let lastSub = null;
      let group = [];

      const flushGroup = () => {
        if (group.length) { drawItems(group); group=[]; }
      };

      sec.items.forEach(it => {
        if (it.sub && it.sub !== lastSub) {
          flushGroup();
          drawSubHead(it.sub);
          lastSub = it.sub;
        }
        group.push(it);
      });
      flushGroup();
      y += 8;
    });

    pageFooter();
    doc.end();

    doc.on('end', () => {
      console.log(`  ✓  ${menu.file}  (${pageNum} page${pageNum>1?'s':''})`);
      resolve();
    });
  });
}

// ── menu configs ──────────────────────────────────────────────────
const MENUS = [
  { id:'silverMenuModalBody', title:'SILVER CHOICE MENU',    sub:'Artisanal Patisserie, Bakes & Fine Banquet Selection',       file:'silver-menu.pdf',        accent:'#C6A15B', bgCol:'#0F0F0F' },
  { id:'goldMenuModalBody',   title:'THE GOLD MENU',         sub:'Pure Vegetarian Fine Dining Banquet Experience',             file:'gold-menu.pdf',          accent:'#D4AF37', bgCol:'#0F0F0F' },
  { id:'royalMenuModalBody',  title:'THE ROYAL CHOICE MENU', sub:'Opulent VIP Rajwada Feast & Live Interactive Stations',      file:'royal-menu.pdf',         accent:'#FFD700', bgCol:'#2D0008' },
  { id:'vipMenuModalBody',    title:'VIP MENU',              sub:'The Pinnacle of Vegetarian Banquet Luxury',                  file:'vip-menu.pdf',           accent:'#9B59B6', bgCol:'#1A0933' },
  { id:'fullMenuModalBody',   title:'MASTER FULL MENU',      sub:'S. Caterers — Complete Vegetarian Banquet Collection',       file:'master-full-menu.pdf',   accent:'#D4AF37', bgCol:'#0F0F0F' },
];

// ── main ──────────────────────────────────────────────────────────
(async () => {
  console.log('\nS. Caterers — PDF Generator\n');
  for (const menu of MENUS) {
    const { startLine, endLine } = findModal(menu.id);
    if (startLine === -1) { console.log(`  ✗ ${menu.id} not found`); continue; }
    const sections = parseModal(startLine, endLine);
    const total = sections.reduce((a,s)=>a+s.items.length, 0);
    console.log(`  ${menu.title}: ${sections.length} sections, ${total} items`);
    await buildPdf(menu, sections);
  }
  console.log('\nAll PDFs saved to public/pdfs/\n');
})();
