const fs = require('fs');
let f = fs.readFileSync('D:/s caterers new/resources/views/services.blade.php', 'utf8');

// Find all Book buttons in modal footers and replace their text content
// Pattern inside buttons: <i class="..."></i> BOOK SILVER MENU NOW   or similar
const bookLabels = [
  ['BOOK SILVER MENU NOW', 'Book Silver'],
  ['BOOK GOLD MENU NOW',   'Book Gold'],
  ['BOOK ROYAL MENU NOW',  'Book Royal'],
  ['BOOK VIP MENU NOW',    'Book VIP'],
  ['BOOK FULL MENU NOW',   'Book Full'],
  ['Book Silver Menu Now', 'Book Silver'],
  ['Book Gold Menu Now',   'Book Gold'],
  ['Book Royal Menu Now',  'Book Royal'],
  ['Book VIP Menu Now',    'Book VIP'],
  ['Book Full Menu Now',   'Book Full'],
];

bookLabels.forEach(([full, short]) => {
  if (f.includes(full)) {
    const replacement = `<span class="d-none d-sm-inline">${full}</span><span class="d-inline d-sm-none">${short}</span>`;
    f = f.split(full).join(replacement);
    console.log('Shortened:', full, '->', short);
  }
});

// Also shorten "Close Window" -> "Close" on mobile
f = f.replace(
  /(<button[^>]*data-bs-dismiss="modal"[^>]*>[\s\S]{0,30}?)Close Window/g,
  '$1<span class="d-none d-sm-inline">Close Window</span><span class="d-inline d-sm-none">Close</span>'
);

// Also shorten "Share Menu" footer button
f = f.replace(
  /(<button[^>]*onclick="shareMenu\([^)]+\)"[^>]*class="btn[^>]+>[\s\S]{0,50}?)<i class="fa-solid fa-share-nodes"><\/i> Share Menu/g,
  '$1<i class="fa-solid fa-share-nodes"></i> <span class="d-none d-sm-inline">Share Menu</span><span class="d-inline d-sm-none">Share</span>'
);

fs.writeFileSync('D:/s caterers new/resources/views/services.blade.php', f, 'utf8');
console.log('Done. Lines:', f.split('\n').length);
