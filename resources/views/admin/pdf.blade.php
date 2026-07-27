<!DOCTYPE html>
<!--
  =========================================================================
  S. CATERERS - ADMIN PACKAGE MENU PDF CONTROL DASHBOARD
  =========================================================================
-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>S. Caterers — Admin PDF Menu Dashboard</title>
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=6.4">

  <style>
    :root {
      --admin-bg: #F7F4EF;
      --admin-card-bg: #FFFFFF;
      --admin-wine: #6E1423;
      --admin-wine-dark: #2A1B12;
      --admin-gold: #C6A15B;
      --admin-gold-light: #E7C589;
      --admin-border: #E8DFD1;
      --admin-text: #201C1A;
      --admin-muted: #7A7067;
    }

    body {
      background-color: var(--admin-bg);
      color: var(--admin-text);
      font-family: 'Outfit', sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .admin-header {
      background: linear-gradient(135deg, #2A1B12 0%, #4A0E17 60%, #6E1423 100%);
      padding: 1.75rem 0;
      color: #FFFFFF;
      position: relative;
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }

    .admin-header::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(to right, var(--admin-gold), var(--admin-gold-light), var(--admin-gold));
    }

    .admin-brand-badge {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      background: rgba(255,255,255,0.08);
      padding: 6px 14px;
      border-radius: 30px;
      border: 1px solid rgba(231, 197, 137, 0.25);
    }

    .admin-brand-badge img {
      height: 30px;
      width: auto;
    }

    .header-nav-btn {
      background: rgba(255,255,255,0.1);
      border: 1px solid rgba(255,255,255,0.22);
      color: #FFFFFF;
      border-radius: 10px;
      padding: 8px 16px;
      font-size: 0.88rem;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s ease;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .header-nav-btn:hover {
      background: #FFFFFF;
      color: var(--admin-wine);
      border-color: #FFFFFF;
      transform: translateY(-1px);
    }

    .pdf-card {
      background: #FFFFFF;
      border: 1.5px solid var(--admin-border);
      border-radius: 16px;
      padding: 1.5rem;
      box-shadow: 0 4px 20px rgba(42, 27, 18, 0.04);
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: all 0.25s ease;
    }

    .pdf-card:hover {
      border-color: var(--admin-gold);
      box-shadow: 0 8px 24px rgba(42, 27, 18, 0.08);
    }

    .btn-wine {
      background: linear-gradient(135deg, #6E1423 0%, #4A0E17 100%);
      color: #FFFFFF;
      font-weight: 700;
      border: none;
      border-radius: 10px;
      transition: all 0.2s ease;
    }

    .btn-wine:hover {
      background: linear-gradient(135deg, #8A1A2C 0%, #5E121E 100%);
      color: #FFFFFF;
      box-shadow: 0 4px 14px rgba(110, 20, 35, 0.3);
    }
  </style>
</head>
<body>

  <!-- ================= HEADER BAR ================= -->
  <header class="admin-header">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
        
        <div class="d-flex align-items-center gap-3">
          <div class="admin-brand-badge">
            <img src="{{ asset('images/logo.png') }}" alt="S. Caterers Logo">
            <span style="font-weight: 700; font-size: 0.85rem; letter-spacing: 0.08em; color: var(--admin-gold-light);">ADMIN PDF PORTAL</span>
          </div>
          <div>
            <h1 class="h3 mb-0" style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; color: #FFFFFF;">Package Menu PDFs Control</h1>
          </div>
        </div>
        
        <div class="d-flex align-items-center gap-2">
          <a href="{{ route('admin.gallery') }}" class="header-nav-btn" style="background: rgba(198,161,91,0.2); border-color: var(--admin-gold); color: #FFFFFF;"><i class="fa-solid fa-photo-film me-1 text-gold"></i> Gallery Dashboard</a>
          <a href="{{ route('services') }}#packages" class="header-nav-btn" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i> View Live Packages</a>
          <a href="#" class="header-nav-btn" onclick="logoutAdmin(event)"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </div>
      </div>
    </div>
  </header>

  <!-- ================= MAIN CONTENT ================= -->
  <main class="py-4 flex-grow-1">
    <div class="container">
      
      <!-- Flash Session Messages -->
      @if(session('success'))
        <div class="alert alert-success border-0 alert-dismissible fade show text-center py-3 mb-4" style="background-color: rgba(40, 167, 69, 0.12); color: #28a745; font-weight: 600; border-radius: 12px;">
          <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if(session('error'))
        <div class="alert alert-danger border-0 alert-dismissible fade show text-center py-3 mb-4" style="background-color: rgba(220, 53, 69, 0.12); color: #dc3545; font-weight: 600; border-radius: 12px;">
          <i class="fa-solid fa-circle-xmark me-2"></i> {{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <!-- Top Information Alert Banner -->
      <div class="p-4 mb-4" style="background: #FFFDF9; border: 1.5px solid #E8D09E; border-radius: 16px; box-shadow: 0 4px 16px rgba(198, 161, 91, 0.08);">
        <div class="d-flex align-items-start gap-3">
          <div style="width: 46px; height: 46px; border-radius: 12px; background: linear-gradient(135deg, #6E1423 0%, #4A0E17 100%); color: #C6A15B; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; flex-shrink: 0;">
            <i class="fa-solid fa-file-pdf"></i>
          </div>
          <div>
            <h2 class="h5 mb-1" style="font-weight: 800; color: #6E1423;">Official Package Menu PDF Uploader</h2>
            <p class="text-muted small mb-0" style="font-size: 0.9rem; line-height: 1.5;">
              Select and upload a new PDF document for any of your 4 catering packages below. Updates are stored securely in Cloudinary CDN and SQLite database, ensuring instant deployment across desktop and mobile views on Vercel.
            </p>
          </div>
        </div>
      </div>

      <!-- 4 Package PDF Upload Cards -->
      <div class="row g-4">
        @foreach($pdfMenus ?? [] as $pdf)
          <div class="col-12 col-md-6 col-lg-3">
            <div class="pdf-card">
              <div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <span class="badge px-3 py-2" style="{{ $pdf['badge_style'] }} font-weight: 700; font-size: 0.8rem; border-radius: 8px;">{{ $pdf['badge'] }}</span>
                  <small class="text-muted" style="font-weight: 700; font-size: 0.8rem;"><i class="fa-solid fa-hard-drive me-1"></i>{{ $pdf['size'] }}</small>
                </div>

                <h3 class="h5 font-heading mb-2" style="font-weight: 800; color: #201C1A;">{{ $pdf['name'] }}</h3>
                <p class="text-muted small mb-3" style="font-size: 0.82rem;">Filename: <code>{{ $pdf['filename'] }}</code></p>

                <div class="p-2 mb-3 rounded" style="background: #F7F4EF; border: 1px solid #E8DFD1; font-size: 0.8rem; color: #555;">
                  <i class="fa-solid fa-clock text-gold me-1"></i> Last Updated:<br>
                  <strong style="color: #201C1A;">{{ $pdf['updated'] }}</strong>
                </div>
              </div>

              <div>
                <!-- Dedicated Upload Form -->
                <form action="{{ route('admin.update-pdf') }}" method="POST" enctype="multipart/form-data" class="mb-2">
                  @csrf
                  <input type="hidden" name="menu_key" value="{{ $pdf['key'] }}">
                  
                  <div class="mb-3">
                    <label class="form-label text-muted small fw-bold mb-1"><i class="fa-solid fa-paperclip me-1"></i> Select PDF File:</label>
                    <input type="file" name="pdf_file" class="form-control" accept=".pdf" required style="font-size: 0.82rem; border-radius: 8px;">
                  </div>

                  <button type="submit" class="btn btn-wine w-100 py-2" style="font-size: 0.88rem; font-weight: 700;">
                    <i class="fa-solid fa-cloud-arrow-up me-1"></i> Upload &amp; Replace PDF
                  </button>
                </form>

                @if($pdf['exists'])
                  <a href="{{ $pdf['url'] }}" target="_blank" class="btn btn-outline-dark btn-sm w-100 py-2 mt-1" style="font-size: 0.82rem; font-weight: 600; border-radius: 8px;">
                    <i class="fa-solid fa-arrow-up-right-from-square me-1"></i> View / Download PDF
                  </a>
                @endif
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </main>

  <!-- Footer -->
  <footer class="py-3 text-center text-muted border-top mt-auto" style="background: #FFFFFF; font-size: 0.85rem;">
    <div class="container">
      S. CATERERS ADMIN CONTROL • Pure Vegetarian Elegance • Lucknow, UP
    </div>
  </footer>

  <!-- Admin Logout Form -->
  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    @csrf
  </form>

  <!-- Login Modal (If unauthenticated) -->
  @if(!empty($showLoginModal))
    <div class="modal fade show" id="adminLoginModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" style="display: block; background: rgba(0,0,0,0.85);">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 18px; overflow: hidden; border: none;">
          <div class="modal-header text-white p-4" style="background: linear-gradient(135deg, #2A1B12 0%, #6E1423 100%);">
            <h5 class="modal-title font-heading fw-bold"><i class="fa-solid fa-lock me-2 text-gold"></i> Admin Security Login</h5>
          </div>
          <div class="modal-body p-4">
            <form action="{{ route('admin.login') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="password" class="form-label fw-bold">Admin Password</label>
                <input type="password" class="form-control py-2" id="password" name="password" required placeholder="Enter admin password...">
              </div>
              <button type="submit" class="btn btn-wine w-100 py-3 font-heading fw-bold">Authenticate &amp; Open PDF Portal</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endif

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function logoutAdmin(e) {
      e.preventDefault();
      document.getElementById('logout-form').submit();
    }
  </script>
</body>
</html>
