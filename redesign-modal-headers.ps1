
# S. Caterers — Redesign all 5 modal headers
# Run this script to apply the new premium modal header design

$file = "D:\s caterers new\resources\views\services.blade.php"
$f = Get-Content $file -Raw

# ─────────────────────────────────────────────────────────────────────────
# Helper: build a premium modal header for a given menu
# ─────────────────────────────────────────────────────────────────────────
function Build-Header {
  param($gradient, $accent, $titleColor, $badge, $title, $sub, $pdfFile, $pdfLabel, $modalLabel, $accentRgb)
  return @"
        <!-- Modal Header -->
        <div class="modal-header p-0" style="background: $gradient; border-bottom: none; position: relative; overflow: hidden;">
          <!-- Decorative top accent strip -->
          <div style="position:absolute;top:0;left:0;right:0;height:3px;background:$accent;"></div>
          <!-- Subtle pattern overlay -->
          <div style="position:absolute;inset:0;background:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2260%22 height=%2260%22><circle cx=%2230%22 cy=%2230%22 r=%221%22 fill=%22rgba(255,255,255,0.04)%22/></svg>');"></div>

          <div class="w-100 px-4 pt-4 pb-3" style="position:relative;z-index:1;">
            <!-- Brand pill -->
            <div class="d-flex align-items-center justify-content-center mb-3">
              <div class="d-inline-flex align-items-center gap-2 px-3 py-1" style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.18);border-radius:50px;backdrop-filter:blur(10px);">
                <img src="{{ asset('images/logo.png') }}" alt="S. Caterers" style="height:20px;width:auto;filter:brightness(1.3);">
                <span style="color:rgba(255,255,255,0.85);font-size:0.72rem;font-weight:800;letter-spacing:2px;text-transform:uppercase;">$badge</span>
              </div>
            </div>

            <!-- Menu title -->
            <h2 class="font-heading text-center mb-1" id="$modalLabel" style="font-size:clamp(1.4rem,4vw,2.2rem);font-weight:900;color:$titleColor;letter-spacing:3px;text-transform:uppercase;text-shadow:0 2px 12px rgba(0,0,0,0.4);margin:0 60px;">
              $title
            </h2>

            <!-- Decorative line -->
            <div class="d-flex align-items-center justify-content-center gap-3 my-2">
              <div style="height:1px;width:60px;background:linear-gradient(to right,transparent,$accent);"></div>
              <div style="width:6px;height:6px;border-radius:50%;background:$accent;box-shadow:0 0 8px $accent;"></div>
              <div style="height:1px;width:60px;background:linear-gradient(to left,transparent,$accent);"></div>
            </div>

            <!-- Subtitle -->
            <p class="text-center mb-3" style="color:rgba(255,255,255,0.7);font-size:0.88rem;letter-spacing:1px;font-weight:500;margin:0;">
              $sub
            </p>

            <!-- Action buttons row -->
            <div class="d-flex align-items-center justify-content-center gap-2 pb-1">
              <a href="{{ asset('pdfs/$pdfFile') }}" download="S-Caterers-$pdfFile"
                 class="d-inline-flex align-items-center gap-2"
                 style="background:$accent;color:#fff;font-size:0.8rem;font-weight:800;padding:8px 18px;border-radius:50px;text-decoration:none;box-shadow:0 4px 14px rgba($accentRgb,0.5);letter-spacing:0.5px;transition:all 0.2s;">
                <i class="fa-solid fa-download" style="font-size:0.78rem;"></i> $pdfLabel
              </a>
            </div>
          </div>

          <!-- Close button -->
          <button type="button" class="btn-close btn-close-white position-absolute" data-bs-dismiss="modal" aria-label="Close"
                  style="top:14px;right:16px;opacity:0.8;font-size:0.95rem;filter:drop-shadow(0 1px 3px rgba(0,0,0,0.5));"></button>
        </div>
"@
}

# ─────────────────────────────────────────────────────────────────────────
# 1. SILVER
# ─────────────────────────────────────────────────────────────────────────
$silverHeader = Build-Header `
  "linear-gradient(160deg,#0F0F0F 0%,#1A1A2E 40%,#16213E 100%)" `
  "#C6A15B" `
  "#C6A15B" `
  "S. CATERERS · PURE VEGETARIAN" `
  "SILVER CHOICE MENU" `
  "Artisanal Patisserie, Bakes &amp; Fine Banquet Selection" `
  "silver-menu.pdf" `
  "Download PDF" `
  "silverMenuModalLabel" `
  "198,161,91"

# ─────────────────────────────────────────────────────────────────────────
# 2. GOLD
# ─────────────────────────────────────────────────────────────────────────
$goldHeader = Build-Header `
  "linear-gradient(160deg,#0F0F0F 0%,#1C1700 40%,#2A2000 100%)" `
  "#D4AF37" `
  "#D4AF37" `
  "S. CATERERS · PURE VEGETARIAN" `
  "THE GOLD MENU" `
  "Pure Vegetarian Fine Dining Banquet Experience" `
  "gold-menu.pdf" `
  "Download PDF" `
  "goldMenuModalLabel" `
  "212,175,55"

# ─────────────────────────────────────────────────────────────────────────
# 3. ROYAL
# ─────────────────────────────────────────────────────────────────────────
$royalHeader = Build-Header `
  "linear-gradient(160deg,#2D0008 0%,#1A000A 40%,#3D0010 100%)" `
  "#FFD700" `
  "#FFD700" `
  "S. CATERERS · RAJWADA COLLECTION" `
  "THE ROYAL CHOICE MENU" `
  "Opulent VIP Rajwada Feast &amp; Live Interactive Stations" `
  "royal-menu.pdf" `
  "Download PDF" `
  "royalMenuModalLabel" `
  "255,215,0"

# ─────────────────────────────────────────────────────────────────────────
# 4. VIP
# ─────────────────────────────────────────────────────────────────────────
$vipHeader = Build-Header `
  "linear-gradient(160deg,#1A0933 0%,#0D001A 40%,#2A0845 100%)" `
  "#9B59B6" `
  "#D7A8F0" `
  "S. CATERERS · PINNACLE COLLECTION" `
  "VIP MENU" `
  "The Pinnacle of Vegetarian Banquet Luxury" `
  "vip-menu.pdf" `
  "Download PDF" `
  "vipMenuModalLabel" `
  "155,89,182"

# ─────────────────────────────────────────────────────────────────────────
# 5. FULL / MASTER
# ─────────────────────────────────────────────────────────────────────────
$fullHeader = Build-Header `
  "linear-gradient(160deg,#0F0F0F 0%,#1A1400 40%,#261E00 100%)" `
  "#D4AF37" `
  "#FFD700" `
  "S. CATERERS · COMPLETE COLLECTION" `
  "MASTER FULL MENU" `
  "S. Caterers — Complete Vegetarian Banquet Collection" `
  "master-full-menu.pdf" `
  "Download PDF" `
  "fullMenuModalLabel" `
  "212,175,55"

# ─────────────────────────────────────────────────────────────────────────
# Replace each modal header in the file
# Strategy: replace from <!-- Modal Header --> to closing </div> of modal-header
# ─────────────────────────────────────────────────────────────────────────

function Replace-ModalHeader {
  param($content, $searchFrom, $newHeader)

  # Find "<!-- Modal Header -->" after searchFrom marker
  $markerIdx = $content.IndexOf($searchFrom)
  if ($markerIdx -lt 0) { Write-Host "MARKER NOT FOUND: $searchFrom"; return $content }

  $headerStart = $content.IndexOf("<!-- Modal Header -->", $markerIdx)
  if ($headerStart -lt 0) { Write-Host "Modal Header comment not found after $searchFrom"; return $content }

  # Find the closing </div> of modal-header div
  # The modal-header div starts right after <!-- Modal Header -->
  $divStart = $content.IndexOf("<div", $headerStart + 20)
  # Now count divs to find the matching close
  $pos = $divStart
  $depth = 0
  $endPos = -1
  while ($pos -lt $content.Length) {
    $nextOpen  = $content.IndexOf("<div", $pos)
    $nextClose = $content.IndexOf("</div>", $pos)
    if ($nextClose -lt 0) { break }
    if ($nextOpen -ge 0 -and $nextOpen -lt $nextClose) {
      $depth++; $pos = $nextOpen + 4
    } else {
      $depth--
      if ($depth -eq 0) { $endPos = $nextClose + 6; break }
      $pos = $nextClose + 6
    }
  }

  if ($endPos -lt 0) { Write-Host "Could not find end of modal-header for $searchFrom"; return $content }

  $before = $content.Substring(0, $headerStart)
  $after  = $content.Substring($endPos)
  return $before + $newHeader + $after
}

$f = Replace-ModalHeader $f "SILVER MENU FULL POPUP MODAL" $silverHeader
Write-Host "Silver: replaced"
$f = Replace-ModalHeader $f "GOLD MENU FULL POPUP MODAL" $goldHeader
Write-Host "Gold: replaced"
$f = Replace-ModalHeader $f "ROYAL MENU FULL POPUP MODAL" $royalHeader
Write-Host "Royal: replaced"
$f = Replace-ModalHeader $f "VIP MENU FULL POPUP MODAL" $vipHeader
Write-Host "VIP: replaced"
$f = Replace-ModalHeader $f "id=`"fullMenuModal`"" $fullHeader
Write-Host "Full: replaced"

Set-Content $file -Value $f -Encoding UTF8
Write-Host "`nAll 5 modal headers replaced. Lines: $((Get-Content $file).Count)"
