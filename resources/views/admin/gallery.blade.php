<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>S. Caterers — Admin Gallery Dashboard</title>
  
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
  <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=6.3">

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

    /* Header Styling */
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

    /* Stats Overview Row */
    .stat-card {
      background: #FFFFFF;
      border: 1px solid var(--admin-border);
      border-radius: 14px;
      padding: 0.95rem 1.1rem;
      display: flex;
      align-items: center;
      gap: 12px;
      height: 100%;
      box-shadow: 0 4px 15px rgba(42, 27, 18, 0.03);
      transition: all 0.25s ease;
    }

    .stat-card:hover {
      border-color: var(--admin-gold);
      box-shadow: 0 8px 24px rgba(42, 27, 18, 0.07);
    }

    .stat-icon-wrap {
      width: 42px;
      height: 42px;
      border-radius: 10px;
      background: rgba(110, 20, 35, 0.08);
      color: var(--admin-wine);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      flex-shrink: 0;
    }

    .stat-val {
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-weight: 800;
      font-size: 1.28rem;
      color: var(--admin-wine-dark);
      line-height: 1.15;
    }

    .stat-lbl {
      font-size: 0.78rem;
      color: var(--admin-muted);
      text-transform: uppercase;
      letter-spacing: 0.04em;
      font-weight: 600;
      line-height: 1.2;
    }

    /* Cards & Panel Styling */
    .admin-card {
      background: var(--admin-card-bg);
      border: 1px solid var(--admin-border);
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(42, 27, 18, 0.05);
      padding: 1.75rem;
      height: 100%;
    }

    .card-heading {
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-weight: 700;
      font-size: 1.2rem;
      color: var(--admin-wine-dark);
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid var(--admin-border);
      padding-bottom: 0.85rem;
      margin-bottom: 1.25rem;
    }

    /* View Mode Tabs */
    .admin-view-pills .nav-link {
      color: var(--admin-muted);
      background: #FAF7F2;
      border: 1px solid var(--admin-border);
      border-radius: 10px;
      font-size: 0.85rem;
      font-weight: 600;
      padding: 7px 14px;
      transition: all 0.2s ease;
    }

    .admin-view-pills .nav-link:hover {
      color: var(--admin-wine-dark);
      background: #FFFDF8;
    }

    .admin-view-pills .nav-link.active {
      background: linear-gradient(135deg, #2A1B12, #4A0E17);
      color: #FFFFFF;
      border-color: var(--admin-wine-dark);
    }

    /* Category Accordion / Folders */
    .category-accordion-item {
      background: #FFFFFF;
      border: 1px solid var(--admin-border);
      border-radius: 14px;
      margin-bottom: 0.85rem;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(42, 27, 18, 0.03);
    }

    .category-accordion-header {
      background: #FAF7F2;
      padding: 1rem 1.25rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      cursor: pointer;
      user-select: none;
      transition: all 0.25s ease;
    }

    .category-accordion-header:hover {
      background: #FFFDF8;
    }

    .category-accordion-header.active {
      background: linear-gradient(135deg, #2A1B12, #4A0E17);
      color: #FFFFFF;
    }

    .category-accordion-header.active .cat-title {
      color: #FFFFFF !important;
    }

    .category-accordion-header.active .cat-count-badge {
      background: rgba(231, 197, 137, 0.25) !important;
      color: var(--admin-gold-light) !important;
      border: 1px solid rgba(231, 197, 137, 0.4);
    }

    .category-accordion-header .chevron-icon {
      transition: transform 0.3s ease;
      font-size: 0.9rem;
    }

    .category-accordion-header.active .chevron-icon {
      transform: rotate(180deg);
      color: var(--admin-gold-light);
    }

    .category-accordion-body {
      display: none;
      padding: 1.25rem;
      background: #FFFFFF;
      border-top: 1px solid var(--admin-border);
    }

    .category-accordion-body.show {
      display: block;
    }

    /* Single Drag & Drop Container */
    .dropzone-box {
      border: 2px dashed #D6C7B2;
      border-radius: 14px;
      background: #FAF7F2;
      padding: 2rem 1.25rem;
      text-align: center;
      cursor: pointer;
      transition: all 0.25s ease;
      position: relative;
    }

    .dropzone-box:hover, .dropzone-box.dragover {
      border-color: var(--admin-gold);
      background: #FFFDF8;
      box-shadow: 0 0 0 4px rgba(198, 161, 91, 0.12);
    }

    .dropzone-icon {
      width: 54px;
      height: 54px;
      border-radius: 50%;
      background: rgba(198, 161, 91, 0.15);
      color: var(--admin-gold);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1.45rem;
      margin-bottom: 0.65rem;
      transition: transform 0.25s ease, background 0.25s ease, color 0.25s ease;
    }

    .dropzone-box:hover .dropzone-icon {
      transform: translateY(-3px);
      background: var(--admin-gold);
      color: #FFFFFF;
    }

    .file-input-hidden {
      position: absolute;
      inset: 0;
      opacity: 0;
      cursor: pointer;
      width: 100%;
      height: 100%;
      z-index: 5;
    }

    /* File Preview Box */
    .file-preview-card {
      display: none;
      background: #FFFFFF;
      border: 1px solid var(--admin-border);
      border-radius: 12px;
      padding: 12px;
      margin-top: 12px;
      align-items: center;
      gap: 12px;
    }

    .file-preview-card.active {
      display: flex;
    }

    .file-preview-img {
      width: 56px;
      height: 56px;
      object-fit: cover;
      border-radius: 8px;
      border: 1px solid var(--admin-border);
      flex-shrink: 0;
    }

    /* Form Inputs */
    .form-label-custom {
      font-weight: 600;
      color: var(--admin-wine-dark);
      font-size: 0.88rem;
      margin-bottom: 0.4rem;
    }

    .form-control-custom, .form-select-custom {
      border: 1px solid #DFD5C6 !important;
      border-radius: 10px !important;
      padding: 11px 14px !important;
      background-color: #FFFDF9 !important;
      color: var(--admin-text) !important;
      font-size: 0.95rem !important;
      transition: all 0.2s ease !important;
    }

    .form-control-custom:focus, .form-select-custom:focus {
      border-color: var(--admin-gold) !important;
      box-shadow: 0 0 0 3px rgba(198, 161, 91, 0.18) !important;
      outline: none !important;
    }

    /* Custom Category Field Animation */
    .custom-cat-wrapper {
      display: none;
      margin-top: 10px;
    }

    .custom-cat-wrapper.show {
      display: block;
    }

    /* Gallery Card Grid */
    .gallery-grid-card {
      background: #FFFFFF;
      border: 1px solid var(--admin-border);
      border-radius: 14px;
      overflow: hidden;
      transition: all 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
      box-shadow: 0 4px 15px rgba(42, 27, 18, 0.03);
    }

    .gallery-grid-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 28px rgba(42, 27, 18, 0.1);
      border-color: var(--admin-gold);
    }

    .card-thumb-wrap {
      position: relative;
      width: 100%;
      aspect-ratio: 16 / 10;
      overflow: hidden;
      background: #FAF7F2;
    }

    .card-thumb-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .gallery-grid-card:hover .card-thumb-img {
      transform: scale(1.05);
    }

    .category-badge-pill {
      position: absolute;
      top: 10px;
      left: 10px;
      background: rgba(42, 27, 18, 0.88);
      color: var(--admin-gold-light);
      border: 1px solid rgba(231, 197, 137, 0.4);
      backdrop-filter: blur(6px);
      padding: 4px 10px;
      border-radius: 20px;
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      z-index: 2;
    }

    .card-body-content {
      padding: 1rem;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
      justify-content: space-between;
      gap: 12px;
    }

    .card-photo-title {
      font-weight: 700;
      color: var(--admin-wine-dark);
      font-size: 0.95rem;
      margin-bottom: 0.25rem;
      line-height: 1.35;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .card-photo-meta {
      font-size: 0.76rem;
      color: var(--admin-muted);
    }

    .card-action-row {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 6px;
      margin-top: auto;
      padding-top: 6px;
      width: 100%;
    }

    .btn-action-base {
      width: 100%;
      height: 36px;
      white-space: nowrap;
      border-radius: 8px;
      font-size: 0.78rem;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s ease;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 4px;
      cursor: pointer;
      padding: 0 4px;
      box-shadow: none;
    }

    .btn-view-grid {
      background: rgba(198, 161, 91, 0.12);
      color: var(--admin-wine-dark);
      border: 1px solid rgba(198, 161, 91, 0.35);
    }

    .btn-view-grid:hover {
      background: var(--admin-gold);
      color: #FFFFFF;
      border-color: var(--admin-gold);
    }

    .btn-edit-grid {
      background: rgba(42, 27, 18, 0.06);
      color: var(--admin-wine-dark);
      border: 1px solid var(--admin-border);
    }

    .btn-edit-grid:hover {
      background: var(--admin-wine-dark);
      color: #FFFFFF;
      border-color: var(--admin-wine-dark);
    }

    .btn-delete-grid {
      background: #FFF5F5;
      color: #DC3545;
      border: 1px solid #F5C6CB;
    }

    .btn-delete-grid:hover {
      background: #DC3545;
      color: #FFFFFF;
      border-color: #DC3545;
    }

    /* Hide card selection checkboxes by default */
    .media-select-checkbox {
      position: absolute;
      top: 10px;
      right: 10px;
      z-index: 20;
      transform: scale(1.35);
      cursor: pointer;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.4);
      border: 2px solid #fff;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.25s ease, transform 0.2s ease;
    }

    /* Reveal checkboxes when selection mode active, checked, or hovered */
    body.selection-mode-active .media-select-checkbox,
    .media-select-checkbox:checked,
    .gallery-grid-card:hover .media-select-checkbox {
      opacity: 1;
      pointer-events: auto;
    }

    .gallery-grid-card.selecting {
      transform: scale(0.97) !important;
      border: 2px solid var(--admin-gold) !important;
    }

    /* Floating Sticky Bulk Action Bar */
    .floating-bulk-bar {
      position: fixed;
      bottom: 28px;
      left: 50%;
      transform: translateX(-50%) translateY(120px);
      z-index: 9999;
      background: linear-gradient(135deg, #1A0508, #6E1423);
      border: 2px solid var(--admin-gold);
      border-radius: 50px;
      padding: 12px 28px;
      min-width: 380px;
      max-width: 92%;
      color: #FFFFFF;
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.6);
      transition: all 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      opacity: 0;
      pointer-events: none;
    }

    .floating-bulk-bar.show {
      transform: translateX(-50%) translateY(0);
      opacity: 1;
      pointer-events: auto;
    }

    /* Modal styling */
    .modal-content-custom {
      border-radius: 16px;
      border: 1px solid var(--admin-border);
      overflow: hidden;
    }

    .modal-header-custom {
      background: linear-gradient(135deg, #2A1B12, #4A0E17);
      color: #FFFFFF;
      padding: 1.2rem 1.5rem;
      border-bottom: 2px solid var(--admin-gold);
    }

    .modal-header-custom .btn-close {
      filter: invert(1) grayscale(100%) brightness(200%);
    }

    .delete-preview-box {
      background: #FAF7F2;
      border: 1px solid var(--admin-border);
      border-radius: 12px;
      padding: 12px;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    @media (max-width: 768px) {
      .admin-card {
        padding: 1.25rem;
      }
      .category-accordion-header {
        padding: 0.85rem 1rem;
      }
      .category-accordion-body {
        padding: 1rem 0.85rem;
      }
    }
  </style>
</head>
<body>

  <!-- ================= ADMIN HEADER ================= -->
  <header class="admin-header">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
        <div class="d-flex align-items-center gap-3">
          <div class="admin-brand-badge">
            <img src="{{ asset('images/logo.png') }}" alt="S. Caterers Logo">
            <span style="font-weight: 700; font-size: 0.85rem; letter-spacing: 0.08em; color: var(--admin-gold-light);">ADMIN CONTROL</span>
          </div>
          <div>
            <h1 class="h3 mb-0" style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; color: #FFFFFF;">Gallery Portfolio Dashboard</h1>
          </div>
        </div>
        
        <div class="d-flex align-items-center gap-2">
          <a href="{{ route('admin.export-db') }}" class="header-nav-btn" style="background: rgba(198,161,91,0.2); border-color: var(--admin-gold); color: #FFFFFF;" title="Download MySQL-compatible SQL Database Backup for Hostinger"><i class="fa-solid fa-download me-1 text-gold"></i> Backup DB (.sql)</a>
          <a href="{{ route('gallery') }}" class="header-nav-btn" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i> View Live Gallery</a>
          <a href="#" class="header-nav-btn" onclick="logoutAdmin(event)"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </div>
      </div>
    </div>
  </header>

  <!-- ================= MAIN LAYOUT ================= -->
  <main class="py-4 flex-grow-1">
    <div class="container">
      
      <!-- Session Alerts -->
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

      <!-- Stats Bar (Operational Metrics) -->
      <div class="row g-2 g-md-3 mb-4">
        <div class="col-12 col-sm-4">
          <div class="stat-card">
            <div class="stat-icon-wrap"><i class="fa-solid fa-photo-film"></i></div>
            <div class="overflow-hidden">
              <div class="stat-val">{{ $images->count() }}</div>
              <div class="stat-lbl text-truncate">Total Media Assets</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class="stat-card">
            <div class="stat-icon-wrap"><i class="fa-solid fa-layer-group"></i></div>
            <div class="overflow-hidden">
              <div class="stat-val">{{ $categories->count() }}</div>
              <div class="stat-lbl text-truncate">Active Categories</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class="stat-card" style="flex-direction:column; align-items:flex-start; gap:8px;">
            @php
              $ss = $storageStats ?? ['used_mb'=>0,'total_mb'=>25600,'percent'=>0,'cloudinary_count'=>0,'local_count'=>0];
              $usedGb   = number_format($ss['used_mb'] / 1024, 2);
              $totalGb  = number_format($ss['total_mb'] / 1024, 0);
              $pct      = $ss['percent'];
              $barColor = $pct < 60 ? '#28a745' : ($pct < 85 ? '#fd7e14' : '#dc3545');
            @endphp
            <div style="display:flex;align-items:center;gap:10px;width:100%;">
              <div class="stat-icon-wrap" style="color:{{ $barColor }};background:{{ $barColor }}1a;flex-shrink:0;">
                <i class="fa-solid fa-database"></i>
              </div>
              <div style="flex:1;min-width:0;">
                <div class="stat-val" style="color:{{ $barColor }};font-size:1.1rem;">
                  {{ $usedGb }} GB <span style="font-size:0.7rem;color:var(--admin-muted);font-weight:500;">/ {{ $totalGb }} GB</span>
                </div>
                <div class="stat-lbl">Storage Used</div>
              </div>
            </div>
            {{-- Progress bar --}}
            <div style="width:100%;background:#f0ebe3;border-radius:6px;height:7px;overflow:hidden;">
              <div style="width:{{ max(2, $pct) }}%;height:100%;background:{{ $barColor }};border-radius:6px;transition:width 0.6s ease;"></div>
            </div>
            <div style="display:flex;justify-content:space-between;width:100%;font-size:0.72rem;color:var(--admin-muted);">
              <span><i class="fa-solid fa-cloud me-1 text-gold"></i>{{ $ss['cloudinary_count'] }} assets</span>
              <span><i class="fa-solid fa-hard-drive me-1"></i>{{ $ss['local_count'] }} local</span>
              <span style="color:{{ $barColor }};font-weight:700;">{{ $pct }}%</span>
            </div>
          </div>
        </div>

      </div>

      <div class="row g-4">
        <!-- Left Column: Upload New Image / Video -->
        <div class="col-lg-4">
          <div class="admin-card">
            <div class="card-heading">
              <span>Upload Photo or Video</span>
              <i class="fa-solid fa-cloud-arrow-up text-muted" style="font-size: 1.1rem;"></i>
            </div>
            
            <form action="javascript:void(0)" method="POST" enctype="multipart/form-data" id="upload-form" onsubmit="event.preventDefault(); handleUploadSubmit(this); return false;">
              @csrf
              
              <!-- Media Title -->
              <div class="mb-3">
                <label for="title" class="form-label-custom">Title / Caption</label>
                <input type="text" class="form-control form-control-custom" id="title" name="title" placeholder="e.g. Grand Wedding Buffet Showcase" required>
              </div>
              
              <!-- Category Selector -->
              <div class="mb-3">
                <label for="category-select" class="form-label-custom">Category / Filter Tab</label>
                <select class="form-select form-select-custom" id="category-select" name="category" required onchange="toggleCategoryInput(this)">
                  <option value="" disabled selected>Select Category...</option>
                  <!-- Standard Presets -->
                  <option value="Grand Weddings">Grand Weddings</option>
                  <option value="Live Counters">Live Counters</option>
                  <option value="Cuisine &amp; Plating">Cuisine &amp; Plating</option>
                  <option value="Pristine Kitchens">Pristine Kitchens</option>
                  <option value="Event Photos">Event Photos</option>
                  <option value="Event Videos">Event Videos</option>
                  
                  <!-- Custom categories from DB -->
                  @foreach($categories as $cat)
                    @if(!in_array($cat, ['Grand Weddings', 'Live Counters', 'Cuisine & Plating', 'Pristine Kitchens', 'Event Photos', 'Event Videos']))
                      <option value="{{ $cat }}">{{ $cat }}</option>
                    @endif
                  @endforeach
                  
                  <!-- Custom Option -->
                  <option value="custom" style="font-weight: bold; color: var(--admin-wine);">+ Write your own category...</option>
                </select>
                
                <!-- Dynamic custom category text input (Hidden by default) -->
                <div class="custom-cat-wrapper" id="custom-cat-wrapper">
                  <input type="text" class="form-control form-control-custom" id="custom-category-input" placeholder="Enter custom category name...">
                </div>
              </div>
              
              <!-- Single Drag & Drop Container for Photos & Videos -->
              <div class="mb-4">
                <label class="form-label-custom">Select Photo or Video File</label>
                
                <div class="dropzone-box" id="dropzone">
                  <input type="file" class="file-input-hidden" id="file" name="file" accept="image/*,video/*" required onchange="handleFileSelect(this)">
                  
                  <div class="dropzone-icon">
                    <i class="fa-solid fa-photo-film"></i>
                  </div>
                  <h6 class="mb-1" style="font-weight: 700; color: var(--admin-wine-dark); font-size: 0.95rem;">Drag &amp; drop photo or video here</h6>
                  <p class="text-muted mb-0" style="font-size: 0.8rem;">or <span style="color: var(--admin-gold); font-weight: 600; text-decoration: underline;">click to browse files</span></p>
                  <div class="text-muted mt-2" style="font-size: 0.74rem;">PNG, JPG, WEBP, MP4, MOV, WEBM up to 50MB</div>
                </div>

                <!-- Interactive File Preview Card -->
                <div class="file-preview-card" id="file-preview-card">
                  <div id="preview-element-wrap">
                    <img id="file-preview-img" src="" alt="Preview" class="file-preview-img">
                  </div>
                  <div class="flex-grow-1 overflow-hidden">
                    <strong id="file-name-text" class="d-block text-truncate" style="font-size: 0.85rem; color: var(--admin-wine-dark);"></strong>
                    <span id="file-size-text" class="text-muted" style="font-size: 0.75rem;"></span>
                  </div>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="clearFileSelection()"><i class="fa-solid fa-xmark"></i></button>
                </div>
              </div>
              
              <!-- Live Real-Time Upload Progress Bar -->
              <div id="upload-progress-wrapper" class="mb-3 p-3" style="display: none; background: #FAF7F2; border: 1px solid var(--admin-border); border-radius: 12px;">
                <div class="d-flex justify-content-between align-items-center mb-2" style="font-size: 0.84rem; font-weight: 700; color: var(--admin-wine-dark);">
                  <span id="upload-progress-status"><i class="fa-solid fa-cloud-arrow-up text-gold me-1"></i> Uploading to Cloud Storage...</span>
                  <span id="upload-progress-percent" style="color: var(--admin-wine); font-weight: 800; font-size: 0.95rem;">0%</span>
                </div>
                <div style="width: 100%; background: #E8DFD1; border-radius: 10px; height: 12px; overflow: hidden; box-shadow: inset 0 1px 3px rgba(0,0,0,0.12);">
                  <div id="upload-progress-bar" style="width: 0%; height: 100%; background: linear-gradient(90deg, #C6A15B, #6E1423); border-radius: 10px; transition: width 0.2s ease;"></div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-2" style="font-size: 0.75rem; color: var(--admin-muted);">
                  <span id="upload-progress-subtext">0 MB / 0 MB uploaded</span>
                  <span><i class="fa-solid fa-shield-halved me-1 text-warning"></i>Protected Cloud Transfer</span>
                </div>
              </div>

              <!-- Submit Button with Loading State -->
              <button type="submit" class="btn-gold w-100 py-3 d-flex align-items-center justify-content-center" id="btn-upload-submit" style="font-size: 1rem; border-radius: 12px; font-weight: 700;">
                <i class="fa-solid fa-cloud-arrow-up me-2" id="upload-btn-icon"></i> <span id="upload-btn-text">UPLOAD TO GALLERY</span>
              </button>
            </form>
          </div>
        </div>
        
        <!-- Right Column: Gallery List & Category Accordion View -->
        <div class="col-lg-8">
          <div class="admin-card">
            
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3 pb-2 border-bottom">
              <div>
                <h5 class="mb-0 font-heading fw-bold" style="color: var(--admin-wine-dark);">Gallery Portfolio ({{ $images->count() }})</h5>
                <span class="text-muted" style="font-size: 0.8rem;">Click a category folder below to expand photos &amp; videos</span>
              </div>
              
              <div class="d-flex align-items-center gap-2 flex-wrap">
                <!-- Check All -->
                @if($images->isNotEmpty())
                  <div class="form-check me-2 mb-0" style="font-size: 0.85rem; font-weight: 700; color: var(--admin-wine-dark);">
                    <input type="checkbox" class="form-check-input" id="select-all-checkbox" onchange="toggleSelectAll(this)">
                    <label class="form-check-label" for="select-all-checkbox">Select All</label>
                  </div>

                  <!-- Delete Selected Button -->
                  <button type="button" class="btn btn-danger btn-sm" id="btn-delete-selected" onclick="deleteSelectedMedia()" style="display: none; font-weight: 700; border-radius: 8px;">
                    <i class="fa-solid fa-trash me-1"></i> Delete Selected (<span id="selected-count">0</span>)
                  </button>

                  <!-- Delete ALL Button -->
                  <button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteAllMedia()" style="font-weight: 700; border-radius: 8px;">
                    <i class="fa-solid fa-dumpster-fire me-1"></i> Delete ALL Media
                  </button>
                @endif

                <!-- View Mode Pills -->
                <div class="nav admin-view-pills ms-1">
                  <button class="nav-link active" id="btn-view-categories" onclick="switchAdminView('categories')">
                    <i class="fa-solid fa-folder-tree me-1"></i> By Category
                  </button>
                  <button class="nav-link" id="btn-view-all" onclick="switchAdminView('all')">
                    <i class="fa-solid fa-border-all me-1"></i> All Grid
                  </button>
                </div>
              </div>
            </div>
            
            @if($images->isEmpty())
              <div class="text-center py-5">
                <div class="dropzone-icon mx-auto mb-3" style="width: 64px; height: 64px; font-size: 1.8rem;"><i class="fa-regular fa-image"></i></div>
                <h5 style="color: var(--admin-wine-dark); font-weight: 700;">No Media Found</h5>
                <p class="text-muted" style="font-size: 0.9rem;">Your gallery is currently empty. Use the left panel to upload your first photo or video.</p>
              </div>
            @else

              <!-- ================= VIEW 1: CATEGORY ACCORDION FOLDERS ================= -->
              <div id="admin-view-categories">
                @php
                  $groupedImages = $images->groupBy('category');
                @endphp

                @foreach($groupedImages as $categoryName => $catImages)
                  @php
                    $catSlug = Str::slug($categoryName);
                  @endphp
                  <div class="category-accordion-item" id="folder-item-{{ $catSlug }}">
                    <!-- Category Accordion Header -->
                    <div class="category-accordion-header {{ $loop->first ? 'active' : '' }}">
                      <div class="d-flex align-items-center gap-2" onclick="toggleAdminAccordion(this.closest('.category-accordion-header'))" style="flex-grow: 1; cursor: pointer;">
                        <i class="fa-solid fa-folder-open text-warning fs-5"></i>
                        <span class="cat-title fw-bold" style="font-size: 0.98rem; color: var(--admin-wine-dark);">{{ $categoryName }}</span>
                        <span class="badge cat-count-badge" style="background: rgba(110, 20, 35, 0.1); color: var(--admin-wine); font-size: 0.75rem; border-radius: 20px; font-weight: 700;">
                          {{ $catImages->count() }} {{ Str::plural('Item', $catImages->count()) }}
                        </span>
                      </div>

                      <div class="d-flex align-items-center gap-2" onclick="event.stopPropagation();">
                        <!-- Section Checkbox on Folder Bar (Clean Checkbox Only) -->
                        <label class="d-flex align-items-center mb-0 p-1" style="color: var(--admin-wine-dark); background: rgba(255,255,255,0.85); border-radius: 6px; border: 1px solid var(--admin-border); cursor: pointer;" title="Select all items in {{ $categoryName }}" onclick="event.stopPropagation();">
                          <input type="checkbox" class="form-check-input folder-section-checkbox" id="folder-cb-{{ $catSlug }}" onchange="toggleFolderSection(this, '{{ $catSlug }}')" style="cursor: pointer; transform: scale(1.25); margin: 0;">
                        </label>

                        <!-- Delete Folder Button -->
                        <button type="button" class="btn btn-danger btn-sm px-2 py-1 btn-delete-folder" id="btn-delete-folder-{{ $catSlug }}" onclick="deleteFolderSection('{{ $catSlug }}', '{{ addslashes($categoryName) }}')" style="display: none; font-size: 0.78rem; font-weight: 700; border-radius: 6px;" title="Delete selected items in this folder">
                          <i class="fa-solid fa-trash me-1"></i> Delete Section (<span id="folder-count-{{ $catSlug }}">0</span>)
                        </button>

                        <i class="fa-solid fa-chevron-down chevron-icon ms-1" onclick="toggleAdminAccordion(this.closest('.category-accordion-header'))"></i>
                      </div>
                    </div>

                    <!-- Category Accordion Body -->
                    <div class="category-accordion-body {{ $loop->first ? 'show' : '' }}">
                      <div class="row g-3">
                        @foreach($catImages as $image)
                          <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
                            <div class="gallery-grid-card">
                              
                              <div class="card-thumb-wrap">
                                <input type="checkbox" class="media-select-checkbox media-item-{{ $catSlug }} form-check-input" value="{{ $image->cloudinary_id ?? $image->id }}" data-category-slug="{{ $catSlug }}" onchange="updateFolderSelectionState('{{ $catSlug }}')" style="position: absolute; top: 10px; right: 10px; z-index: 20; transform: scale(1.35); cursor: pointer; box-shadow: 0 2px 6px rgba(0,0,0,0.4); border: 2px solid #fff;">
                                @if($image->is_video)
                                  <span class="badge position-absolute top-0 start-0 m-2 px-2 py-1 bg-dark bg-opacity-75 text-warning rounded-pill" style="font-size:0.68rem; z-index:5;"><i class="fa-solid fa-video me-1"></i> Video</span>
                                @endif
                                
                                @if($image->is_video)
                                  <div class="position-relative w-100 h-100 bg-dark d-flex align-items-center justify-content-center">
                                    <video src="{{ Str::startsWith($image->path, 'http') ? $image->path : asset($image->path) }}" 
                                           poster="{{ method_exists($image, 'getThumbnailUrl') ? $image->getThumbnailUrl() : preg_replace('/\.[a-z0-9]+$/i', '.jpg', preg_replace('#(/upload/)#', '$1so_0,w_400/', $image->path, 1)) }}"
                                           class="card-thumb-img" 
                                           muted 
                                           loop 
                                           playsinline 
                                           preload="metadata"
                                           onmouseover="if(this.paused) this.play().catch(function(){})" 
                                           onmouseout="this.pause()"></video>
                                    <div class="position-absolute" style="pointer-events: none; background: rgba(0,0,0,0.6); width: 44px; height: 44px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--admin-gold); border: 2px solid var(--admin-gold);">
                                      <i class="fa-solid fa-play ms-1"></i>
                                    </div>
                                  </div>
                                @else
                                  <img src="{{ Str::startsWith($image->path, 'http') ? $image->path : asset($image->path) }}" 
                                       alt="{{ $image->title }}" 
                                       class="card-thumb-img" 
                                       loading="lazy"
                                       onerror="this.onerror=null; this.src='{{ asset('images/logo.png') }}'; this.style.objectFit='contain'; this.style.padding='24px';">
                                @endif
                              </div>

                              <div class="card-body-content">
                                <div>
                                  <div class="card-photo-title" title="{{ $image->title }}">
                                    @if($image->is_video)
                                      <i class="fa-solid fa-film text-warning me-1"></i>
                                    @endif
                                    {{ $image->title }}
                                  </div>
                                  <div class="card-photo-meta d-flex align-items-center justify-content-between">
                                    <span><i class="fa-solid fa-folder-open me-1 text-warning"></i> {{ $image->category }}</span>
                                    <span>#{{ $image->id }}</span>
                                  </div>
                                </div>

                                <div class="card-action-row">
                                  <button type="button" 
                                          class="btn-action-base btn-view-grid" 
                                          onclick="openImagePreviewModal('{{ addslashes($image->title) }}', '{{ $image->category }}', '{{ Str::startsWith($image->path, 'http') ? $image->path : asset($image->path) }}', '{{ $image->is_video ? 'Video File' : 'Photo File' }}', '{{ route('gallery') }}#gallery-grid-container', {{ $image->is_video ? 'true' : 'false' }})">
                                    <i class="fa-solid fa-eye"></i> View
                                  </button>

                                  <button type="button" 
                                          class="btn-action-base btn-edit-grid" 
                                          onclick="openEditModal({{ $image->id }}, '{{ addslashes($image->title) }}', '{{ addslashes($image->category) }}', '{{ Str::startsWith($image->path, 'http') ? $image->path : asset($image->path) }}', '{{ route('admin.update', $image->id) }}', {{ $image->is_video ? 'true' : 'false' }})">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                  </button>

                                  <button type="button" 
                                          class="btn-action-base btn-delete-grid" 
                                          onclick="openDeleteModal({{ $image->id }}, '{{ addslashes($image->title) }}', '{{ Str::startsWith($image->path, 'http') ? $image->path : asset($image->path) }}', '{{ route('admin.delete', $image->id) }}', {{ $image->is_video ? 'true' : 'false' }})">
                                    <i class="fa-solid fa-trash-can"></i> Delete
                                  </button>
                                </div>
                              </div>

                            </div>
                          </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>

              <!-- ================= VIEW 2: ALL PHOTOS & VIDEOS GRID ================= -->
              <div id="admin-view-all" style="display: none;">
                <div class="row g-3">
                  @foreach($images as $image)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
                      <div class="gallery-grid-card">
                        
                        <div class="card-thumb-wrap">
                          @if($image->is_video)
                            <span class="badge position-absolute top-0 start-0 m-2 px-2 py-1 bg-dark bg-opacity-75 text-warning rounded-pill" style="font-size:0.68rem; z-index:5;"><i class="fa-solid fa-video me-1"></i> Video</span>
                          @endif

                          @if($image->is_video)
                            <div class="position-relative w-100 h-100 bg-dark d-flex align-items-center justify-content-center">
                              <video src="{{ Str::startsWith($image->path, 'http') ? $image->path : asset($image->path) }}" 
                                     poster="{{ method_exists($image, 'getThumbnailUrl') ? $image->getThumbnailUrl() : preg_replace('/\.[a-z0-9]+$/i', '.jpg', preg_replace('#(/upload/)#', '$1so_0,w_400/', $image->path, 1)) }}"
                                     class="card-thumb-img" 
                                     muted 
                                     loop 
                                     playsinline 
                                     preload="metadata"
                                     onmouseover="if(this.paused) this.play().catch(function(){})" 
                                     onmouseout="this.pause()"></video>
                              <div class="position-absolute" style="pointer-events: none; background: rgba(0,0,0,0.6); width: 44px; height: 44px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--admin-gold); border: 2px solid var(--admin-gold);">
                                <i class="fa-solid fa-play ms-1"></i>
                              </div>
                            </div>
                          @else
                            <img src="{{ Str::startsWith($image->path, 'http') ? $image->path : asset($image->path) }}" 
                                 alt="{{ $image->title }}" 
                                 class="card-thumb-img" 
                                 loading="lazy"
                                 onerror="this.onerror=null; this.src='{{ asset('images/logo.png') }}'; this.style.objectFit='contain'; this.style.padding='24px';">
                          @endif
                        </div>

                        <div class="card-body-content">
                          <div>
                            <div class="card-photo-title" title="{{ $image->title }}">
                              @if($image->is_video)
                                <i class="fa-solid fa-film text-warning me-1"></i>
                              @endif
                              {{ $image->title }}
                            </div>
                            <div class="card-photo-meta d-flex align-items-center justify-content-between">
                              <span><i class="fa-solid fa-folder-open me-1 text-warning"></i> {{ $image->category }}</span>
                              <span>#{{ $image->id }}</span>
                            </div>
                          </div>

                          <div class="card-action-row">
                            <button type="button" 
                                    class="btn-action-base btn-view-grid" 
                                    onclick="openImagePreviewModal('{{ addslashes($image->title) }}', '{{ $image->category }}', '{{ Str::startsWith($image->path, 'http') ? $image->path : asset($image->path) }}', '{{ $image->is_video ? 'Video File' : 'Photo File' }}', '{{ route('gallery') }}#gallery-grid-container', {{ $image->is_video ? 'true' : 'false' }})">
                              <i class="fa-solid fa-eye"></i> View
                            </button>

                            <button type="button" 
                                    class="btn-action-base btn-edit-grid" 
                                    onclick="openEditModal({{ $image->id }}, '{{ addslashes($image->title) }}', '{{ addslashes($image->category) }}', '{{ Str::startsWith($image->path, 'http') ? $image->path : asset($image->path) }}', '{{ route('admin.update', $image->id) }}', {{ $image->is_video ? 'true' : 'false' }})">
                              <i class="fa-solid fa-pen-to-square"></i> Edit
                            </button>

                            <button type="button" 
                                    class="btn-action-base btn-delete-grid" 
                                    onclick="openDeleteModal({{ $image->id }}, '{{ addslashes($image->title) }}', '{{ Str::startsWith($image->path, 'http') ? $image->path : asset($image->path) }}', '{{ route('admin.delete', $image->id) }}', {{ $image->is_video ? 'true' : 'false' }})">
                              <i class="fa-solid fa-trash-can"></i> Delete
                            </button>
                          </div>
                        </div>

                      </div>
                    </div>
                  @endforeach
                </div>
              </div>

            @endif

          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- ================= INTERACTIVE MEDIA PREVIEW / LIGHTBOX MODAL ================= -->
  <div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content modal-content-custom">
        
        <div class="modal-header modal-header-custom">
          <div>
            <span class="badge mb-1" id="modal-preview-cat" style="background: rgba(198, 161, 91, 0.25); color: var(--admin-gold-light); font-size: 0.72rem; text-transform: uppercase;"></span>
            <h5 class="modal-title font-heading mb-0" id="modal-preview-title" style="font-weight: 700;">Media Preview</h5>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body p-0">
          <div class="bg-dark text-center p-3" id="modal-media-container" style="min-height: 280px; max-height: 480px; display: flex; align-items: center; justify-content: center; overflow: hidden;">
            <img id="modal-preview-img" src="" alt="High-Res Image" style="max-width: 100%; max-height: 440px; object-fit: contain; border-radius: 8px; box-shadow: 0 8px 30px rgba(0,0,0,0.5);" onerror="this.onerror=null; this.src='{{ asset('images/logo.png') }}';">
          </div>

          <div class="p-4 bg-white">
            <div class="row g-3 align-items-center">
              <div class="col-sm-6">
                <span class="text-muted d-block" style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase;">Media Type</span>
                <strong id="modal-preview-storage" style="font-size: 0.95rem; color: var(--admin-wine-dark);"></strong>
              </div>
              <div class="col-sm-6">
                <span class="text-muted d-block" style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase;">Path / Asset Source</span>
                <span id="modal-preview-path" class="d-block text-truncate text-muted" style="font-size: 0.82rem; font-family: monospace;"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer bg-light px-4 py-3 border-0 d-flex flex-wrap justify-content-between gap-2">
          <a href="#" id="modal-live-gallery-link" class="btn btn-outline-dark btn-sm px-3" style="border-radius: 8px; font-weight: 600;" target="_blank">
            <i class="fa-solid fa-arrow-up-right-from-square me-1"></i> View in Live Client Gallery
          </a>

          <div class="d-flex gap-2">
            <a href="#" id="modal-raw-img-link" class="btn btn-gold btn-sm px-3" style="border-radius: 8px; font-weight: 700;" target="_blank">
              <i class="fa-solid fa-expand me-1"></i> Open Raw Media File
            </a>
            <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal" style="border-radius: 8px; font-weight: 600;">Close</button>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- ================= EDIT MEDIA DETAILS MODAL ================= -->
  <div class="modal fade" id="editMediaModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content modal-content-custom">
        
        <div class="modal-header modal-header-custom">
          <h5 class="modal-title font-heading mb-0" id="editModalLabel" style="font-weight: 700;">
            <i class="fa-solid fa-pen-to-square text-warning me-2"></i> Edit Title &amp; Category
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form id="edit-modal-form" action="" method="POST" class="m-0">
          @csrf
          <div class="modal-body p-4">
            <div class="delete-preview-box mb-3">
              <div id="modal-edit-thumb-container">
                <img id="modal-edit-img" src="" alt="Thumbnail" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid var(--admin-border);">
              </div>
              <div class="overflow-hidden">
                <strong id="modal-edit-current-title" class="d-block text-truncate" style="color: var(--admin-wine-dark); font-size: 0.95rem;"></strong>
                <span class="text-muted" style="font-size: 0.78rem;">Modify display title and assigned category section</span>
              </div>
            </div>

            <!-- Title Input -->
            <div class="mb-3">
              <label for="modal-edit-title-input" class="form-label-custom">Title / Name</label>
              <input type="text" class="form-control form-control-custom" id="modal-edit-title-input" name="title" required>
            </div>

            <!-- Category Selector -->
            <div class="mb-3">
              <label for="modal-edit-category-select" class="form-label-custom">Category / Section Tab</label>
              <select class="form-select form-select-custom" id="modal-edit-category-select" name="category" required onchange="toggleEditCategoryInput(this)">
                <option value="Grand Weddings">Grand Weddings</option>
                <option value="Live Counters">Live Counters</option>
                <option value="Cuisine &amp; Plating">Cuisine &amp; Plating</option>
                <option value="Pristine Kitchens">Pristine Kitchens</option>
                <option value="Event Photos">Event Photos</option>
                <option value="Event Videos">Event Videos</option>
                
                @foreach($categories as $cat)
                  @if(!in_array($cat, ['Grand Weddings', 'Live Counters', 'Cuisine & Plating', 'Pristine Kitchens', 'Event Photos', 'Event Videos']))
                    <option value="{{ $cat }}">{{ $cat }}</option>
                  @endif
                @endforeach
                
                <option value="custom" style="font-weight: bold; color: var(--admin-wine);">+ Write custom category...</option>
              </select>

              <div class="custom-cat-wrapper" id="modal-edit-custom-cat-wrapper">
                <input type="text" class="form-control form-control-custom" id="modal-edit-custom-category-input" placeholder="Enter custom category name...">
              </div>
            </div>
          </div>

          <div class="modal-footer bg-light px-4 py-3 border-0 d-flex gap-2">
            <button type="button" class="btn btn-outline-secondary px-4 py-2" data-bs-dismiss="modal" style="border-radius: 10px; font-weight: 600; font-size: 0.9rem;">Cancel</button>
            <button type="submit" class="btn btn-gold px-4 py-2" style="border-radius: 10px; font-weight: 700; font-size: 0.9rem;">
              <i class="fa-solid fa-floppy-disk me-1"></i> Save Changes
            </button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- ================= DELETE CONFIRMATION MODAL ================= -->
  <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content modal-content-custom">
        
        <div class="modal-header modal-header-custom">
          <h5 class="modal-title font-heading mb-0" id="deleteModalLabel" style="font-weight: 700;">
            <i class="fa-solid fa-triangle-exclamation text-warning me-2"></i> Confirm Media Deletion
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body p-4">
          <p style="font-size: 0.95rem; color: var(--admin-text); line-height: 1.6;">
            Are you sure you want to delete this media asset from the gallery? This action cannot be undone.
          </p>

          <div class="delete-preview-box mt-3">
            <div id="modal-del-thumb-container">
              <img id="modal-del-img" src="" alt="Thumbnail" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid var(--admin-border);" onerror="this.onerror=null; this.src='{{ asset('images/logo.png') }}';">
            </div>
            <div class="overflow-hidden">
              <strong id="modal-del-title" class="d-block text-truncate" style="color: var(--admin-wine-dark); font-size: 0.95rem;"></strong>
              <span class="text-muted" style="font-size: 0.78rem;">Permanently remove from database</span>
            </div>
          </div>
        </div>

        <div class="modal-footer bg-light px-4 py-3 border-0 d-flex gap-2">
          <button type="button" class="btn btn-outline-secondary px-4 py-2" data-bs-dismiss="modal" style="border-radius: 10px; font-weight: 600; font-size: 0.9rem;">Cancel</button>

          <form id="delete-modal-form" action="" method="POST" class="m-0">
            @csrf
            <button type="submit" class="btn btn-danger px-4 py-2" style="border-radius: 10px; font-weight: 700; font-size: 0.9rem;">
              <i class="fa-solid fa-trash-can me-1"></i> Yes, Delete Item
            </button>
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- ================= UPLOAD STORAGE LIMIT REACHED MODAL ================= -->
  <div class="modal fade" id="storageLimitModal" tabindex="-1" aria-labelledby="storageLimitLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content modal-content-custom">
        <div class="modal-header modal-header-custom" style="background: linear-gradient(135deg, #6E1423, #4A0E17);">
          <h5 class="modal-title font-heading mb-0 text-white fw-bold" id="storageLimitLabel">
            <i class="fa-solid fa-triangle-exclamation text-warning me-2"></i> Storage Limit Reached (24.9 GB)
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 text-center">
          <div class="dropzone-icon mx-auto mb-3" style="width: 64px; height: 64px; background: rgba(220, 53, 69, 0.12); color: #dc3545; font-size: 1.8rem; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;">
            <i class="fa-solid fa-hard-drive"></i>
          </div>
          <h5 class="fw-bold mb-2" style="color: var(--admin-wine-dark);">Storage Full — Upload Blocked</h5>
          <p class="text-muted mb-0" style="font-size: 0.92rem; line-height: 1.6;">
            Your gallery storage has reached <strong>24.9 GB</strong> out of the 25 GB limit. New uploads are blocked to prevent the website from crashing.
          </p>
          <div class="alert alert-warning border-0 mt-3 mb-0 text-start py-2 px-3" style="border-radius: 10px; font-size: 0.85rem;">
            <i class="fa-solid fa-circle-info me-1 text-warning"></i> <strong>How to fix:</strong> Delete older or unused photos/videos from the gallery below to free up space, then upload again.
          </div>
        </div>
        <div class="modal-footer bg-light px-4 py-3 border-0 justify-content-center">
          <button type="button" class="btn btn-gold px-4 py-2" data-bs-dismiss="modal" style="border-radius: 10px; font-weight: 700;">Understood, Manage Gallery</button>
        </div>
      </div>
    </div>
  </div>


  <!-- ================= SCRIPTS ================= -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // 1. Toggle custom category input for Upload Form
    function toggleCategoryInput(selectEl) {
      const customWrapper = document.getElementById('custom-cat-wrapper');
      const customInput = document.getElementById('custom-category-input');
      
      if (selectEl.value === 'custom') {
        customWrapper.classList.add('show');
        customInput.required = true;
        customInput.name = 'category';
        selectEl.removeAttribute('name');
        customInput.focus();
      } else {
        customWrapper.classList.remove('show');
        customInput.required = false;
        customInput.removeAttribute('name');
        selectEl.name = 'category';
      }
    }

    // Toggle custom category input for Edit Modal
    function toggleEditCategoryInput(selectEl) {
      const customWrapper = document.getElementById('modal-edit-custom-cat-wrapper');
      const customInput = document.getElementById('modal-edit-custom-category-input');
      
      if (selectEl.value === 'custom') {
        customWrapper.classList.add('show');
        customInput.required = true;
        customInput.name = 'category';
        selectEl.removeAttribute('name');
        customInput.focus();
      } else {
        customWrapper.classList.remove('show');
        customInput.required = false;
        customInput.removeAttribute('name');
        selectEl.name = 'category';
      }
    }

    // 2. Drag & Drop + File Selection Handler (Supports Photos & Videos)
    const dropzone = document.getElementById('dropzone');
    const fileInput = document.getElementById('file');
    const previewCard = document.getElementById('file-preview-card');
    const previewWrap = document.getElementById('preview-element-wrap');
    const fileNameText = document.getElementById('file-name-text');
    const fileSizeText = document.getElementById('file-size-text');

    if (dropzone && fileInput) {
      ['dragenter', 'dragover'].forEach(eventName => {
        dropzone.addEventListener(eventName, (e) => {
          e.preventDefault();
          e.stopPropagation();
          dropzone.classList.add('dragover');
        }, false);
      });

      ['dragleave', 'drop'].forEach(eventName => {
        dropzone.addEventListener(eventName, (e) => {
          e.preventDefault();
          e.stopPropagation();
          dropzone.classList.remove('dragover');
        }, false);
      });
    }

    function handleFileSelect(input) {
      if (input.files && input.files[0]) {
        const file = input.files[0];
        
        fileNameText.textContent = file.name;
        fileSizeText.textContent = (file.size / (1024 * 1024)).toFixed(2) + ' MB';
        
        const isVideo = file.type.startsWith('video/') || ['mp4', 'mov', 'webm', 'mkv', 'avi'].some(ext => file.name.toLowerCase().endsWith('.' + ext));

        // Auto-assign folder category if empty
        const catSelect = document.getElementById('category-select');
        if (catSelect && (!catSelect.value || catSelect.value === '')) {
          catSelect.value = isVideo ? 'Event Videos' : 'Event Photos';
        }

        if (isVideo) {
          previewWrap.innerHTML = `<video src="${URL.createObjectURL(file)}" class="file-preview-img" muted playsinline autoplay loop></video>`;
        } else {
          const reader = new FileReader();
          reader.onload = function(e) {
            previewWrap.innerHTML = `<img src="${e.target.result}" class="file-preview-img" alt="Preview">`;
          };
          reader.readAsDataURL(file);
        }
        previewCard.classList.add('active');
      }
    }

    function clearFileSelection() {
      fileInput.value = '';
      previewCard.classList.remove('active');
      previewWrap.innerHTML = '<img id="file-preview-img" src="" alt="Preview" class="file-preview-img">';
      fileNameText.textContent = '';
      fileSizeText.textContent = '';
    }

    // 3. Category Accordion Single-Expansion Toggle Logic
    function toggleAdminAccordion(headerEl) {
      const isAlreadyActive = headerEl.classList.contains('active');
      
      // Collapse all open category accordions
      document.querySelectorAll('.category-accordion-header').forEach(h => {
        h.classList.remove('active');
      });
      document.querySelectorAll('.category-accordion-body').forEach(b => {
        b.classList.remove('show');
      });
      
      // Expand clicked category if it wasn't already active
      if (!isAlreadyActive) {
        headerEl.classList.add('active');
        const body = headerEl.nextElementSibling;
        if (body) {
          body.classList.add('show');
        }
      }
    }

    // 4. Switch View Mode (By Category Accordion vs All Grid)
    function switchAdminView(mode) {
      const catView = document.getElementById('admin-view-categories');
      const allView = document.getElementById('admin-view-all');
      const btnCat = document.getElementById('btn-view-categories');
      const btnAll = document.getElementById('btn-view-all');

      if (mode === 'categories') {
        catView.style.display = 'block';
        allView.style.display = 'none';
        btnCat.classList.add('active');
        btnAll.classList.remove('active');
      } else {
        catView.style.display = 'none';
        allView.style.display = 'block';
        btnCat.classList.remove('active');
        btnAll.classList.add('active');
      }
    }

    // 5. Form Submit Real-Time Direct Cloudinary Upload
    const STORAGE_USED_MB  = {{ $storageStats['used_mb'] ?? 0 }};
    const STORAGE_LIMIT_MB = 24900; // 24.9 GB — warn before hitting Cloudinary's 25 GB cap

    async function handleUploadSubmit(form) {
      if (window.event) {
        window.event.preventDefault();
        window.event.stopPropagation();
      }

      if (STORAGE_USED_MB >= STORAGE_LIMIT_MB) {
        const limitModal = new bootstrap.Modal(document.getElementById('storageLimitModal'));
        limitModal.show();
        return false;
      }

      const fileInput = document.getElementById('file');
      if (!fileInput || !fileInput.files || !fileInput.files[0]) {
        alert('Please select a photo or video file to upload.');
        return false;
      }

      const selectedFile = fileInput.files[0];
      const titleInput = document.getElementById('title');
      const categorySelect = document.getElementById('category-select');
      const customCategoryInput = document.getElementById('custom-category-input');

      let categoryVal = categorySelect.value;
      if (categoryVal === 'custom') {
        categoryVal = customCategoryInput.value.trim();
      }

      if (!titleInput.value.trim()) {
        alert('Please enter a Title / Caption.');
        return false;
      }
      if (!categoryVal) {
        alert('Please select or enter a Category.');
        return false;
      }

      const btn = document.getElementById('btn-upload-submit');
      const icon = document.getElementById('upload-btn-icon');
      const text = document.getElementById('upload-btn-text');

      const wrapper = document.getElementById('upload-progress-wrapper');
      const progressBar = document.getElementById('upload-progress-bar');
      const percentText = document.getElementById('upload-progress-percent');
      const statusText = document.getElementById('upload-progress-status');
      const subtextText = document.getElementById('upload-progress-subtext');

      btn.disabled = true;
      icon.className = 'fa-solid fa-circle-notch fa-spin me-2';
      text.textContent = 'PREPARING CLOUD UPLOAD...';
      if (wrapper) wrapper.style.display = 'block';

      try {
        // 1. Fetch Cloudinary signature from Laravel server
        const sigRes = await fetch("{{ route('admin.signature') }}");
        const sigData = await sigRes.json();

        if (!sigData.success) {
          throw new Error(sigData.message || 'Failed to get upload signature.');
        }

        // 2. Build Cloudinary Direct Upload FormData
        const ext = selectedFile.name.split('.').pop().toLowerCase();
        const isVideo = ['mp4', 'mov', 'webm', 'ogg', 'mkv', 'avi'].includes(ext);
        const resourceType = isVideo ? 'video' : 'image';

        const cloudData = new FormData();
        cloudData.append('file', selectedFile);
        cloudData.append('api_key', sigData.api_key);
        cloudData.append('timestamp', sigData.timestamp);
        cloudData.append('signature', sigData.signature);
        cloudData.append('folder', sigData.folder);

        // 3. Perform Direct XHR Upload to Cloudinary with real-time progress bar
        const cloudUrl = `https://api.cloudinary.com/v1_1/${sigData.cloud_name}/${resourceType}/upload`;

        await new Promise((resolve, reject) => {
          const xhr = new XMLHttpRequest();

          xhr.upload.onprogress = function(e) {
            if (e.lengthComputable) {
              const percent = Math.round((e.loaded / e.total) * 100);
              if (progressBar) progressBar.style.width = percent + '%';
              if (percentText) percentText.textContent = percent + '%';

              const loadedMb = (e.loaded / 1048576).toFixed(1);
              const totalMb = (e.total / 1048576).toFixed(1);
              if (subtextText) subtextText.textContent = `${loadedMb} MB / ${totalMb} MB uploaded`;

              if (percent >= 100) {
                if (statusText) statusText.innerHTML = '<i class="fa-solid fa-gear fa-spin text-warning me-1"></i> Saving to Database...';
                text.textContent = 'SAVING TO GALLERY...';
              } else {
                if (statusText) statusText.innerHTML = `<i class="fa-solid fa-cloud-arrow-up text-warning me-1"></i> Uploading ${isVideo ? 'Video' : 'Photo'} to Cloud...`;
              }
            }
          };

          xhr.onload = async function() {
            if (xhr.status >= 200 && xhr.status < 400) {
              try {
                const cloudRes = JSON.parse(xhr.responseText);
                
                // 4. Save metadata record to Laravel database
                const saveRes = await fetch("{{ route('admin.save-media') }}", {
                  method: 'POST',
                  headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'X-Requested-With': 'XMLHttpRequest'
                  },
                  body: JSON.stringify({
                    title: titleInput.value.trim(),
                    category: categoryVal,
                    path: cloudRes.secure_url,
                    cloudinary_id: cloudRes.public_id,
                    is_video: isVideo ? 1 : 0
                  })
                });

                const rawText = await saveRes.text();
                let saveData;
                try {
                  saveData = JSON.parse(rawText);
                } catch(e) {
                  throw new Error('Save media failed: ' + rawText.substring(0, 120));
                }

                if (saveData.success) {
                  if (statusText) statusText.innerHTML = '<i class="fa-solid fa-circle-check text-success me-1"></i> Upload Complete!';
                  if (percentText) percentText.textContent = '100%';
                  if (progressBar) progressBar.style.width = '100%';
                  window.location.reload();
                  resolve();
                } else {
                  reject(new Error(saveData.message || 'Failed to save media record.'));
                }
              } catch(err) {
                reject(err);
              }
            } else {
              reject(new Error('Cloudinary Upload Failed: ' + (xhr.responseText || 'Server Error')));
            }
          };

          xhr.onerror = function() {
            reject(new Error('Network error while uploading to cloud.'));
          };

          xhr.open('POST', cloudUrl, true);
          xhr.send(cloudData);
        });

      } catch (err) {
        btn.disabled = false;
        icon.className = 'fa-solid fa-cloud-arrow-up me-2';
        text.textContent = 'UPLOAD TO GALLERY';
        if (statusText) statusText.innerHTML = '<i class="fa-solid fa-circle-exclamation text-danger me-1"></i> Upload Error';
        alert('Upload Error: ' + err.message);
      }

      return false;
    }

    // 6. Interactive Media Preview Modal Trigger
    function openImagePreviewModal(title, category, mediaPath, storageType, liveGalleryUrl, isVideo = false) {
      document.getElementById('modal-preview-title').textContent = title;
      document.getElementById('modal-preview-cat').textContent = category;
      document.getElementById('modal-preview-storage').textContent = storageType;
      document.getElementById('modal-preview-path').textContent = mediaPath;
      document.getElementById('modal-raw-img-link').href = mediaPath;
      document.getElementById('modal-live-gallery-link').href = liveGalleryUrl;

      const mediaContainer = document.getElementById('modal-media-container');
      if (isVideo) {
        const cleanPath = mediaPath.split('#')[0];
        mediaContainer.innerHTML = `<video src="${cleanPath}" controls autoplay class="w-100" style="max-height: 440px; border-radius: 8px; box-shadow: 0 8px 30px rgba(0,0,0,0.5);"></video>`;
        const modalVid = mediaContainer.querySelector('video');
        if (modalVid) {
          modalVid.play().catch(function(){});
        }
      } else {
        mediaContainer.innerHTML = `<img id="modal-preview-img" src="${mediaPath}" alt="High-Res Image" style="max-width: 100%; max-height: 440px; object-fit: contain; border-radius: 8px; box-shadow: 0 8px 30px rgba(0,0,0,0.5);" onerror="this.onerror=null; this.src='{{ asset('images/logo.png') }}';">`;
      }

      const previewModal = new bootstrap.Modal(document.getElementById('imagePreviewModal'));
      previewModal.show();
    }

    // 7. Interactive Edit Title & Category Modal Trigger
    function openEditModal(id, title, category, mediaPath, updateUrl, isVideo = false) {
      document.getElementById('modal-edit-title-input').value = title;
      document.getElementById('modal-edit-current-title').textContent = title;
      
      const select = document.getElementById('modal-edit-category-select');
      
      // Check if option exists in dropdown, else set to custom
      let optionExists = false;
      for (let i = 0; i < select.options.length; i++) {
        if (select.options[i].value === category) {
          optionExists = true;
          break;
        }
      }

      if (optionExists) {
        select.value = category;
      } else {
        select.value = 'custom';
        document.getElementById('modal-edit-custom-category-input').value = category;
      }
      
      toggleEditCategoryInput(select);

      const thumbWrap = document.getElementById('modal-edit-thumb-container');
      if (isVideo) {
        thumbWrap.innerHTML = `<video src="${mediaPath}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid var(--admin-border);" muted></video>`;
      } else {
        thumbWrap.innerHTML = `<img src="${mediaPath}" alt="Thumbnail" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid var(--admin-border);" onerror="this.onerror=null; this.src='{{ asset('images/logo.png') }}';">`;
      }

      document.getElementById('edit-modal-form').action = updateUrl;

      const editModal = new bootstrap.Modal(document.getElementById('editMediaModal'));
      editModal.show();
    }

    // 8. Delete Confirmation Modal Trigger
    function openDeleteModal(id, title, mediaPath, deleteUrl, isVideo = false) {
      document.getElementById('modal-del-title').textContent = title;
      const thumbWrap = document.getElementById('modal-del-thumb-container');
      if (isVideo) {
        thumbWrap.innerHTML = `<video src="${mediaPath}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid var(--admin-border);" muted></video>`;
      } else {
        thumbWrap.innerHTML = `<img src="${mediaPath}" alt="Thumbnail" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid var(--admin-border);" onerror="this.onerror=null; this.src='{{ asset('images/logo.png') }}';">`;
      }
      document.getElementById('delete-modal-form').action = deleteUrl;

      const deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'));
      deleteModal.show();
    }

    // 9. Logout helper
    function logoutAdmin(event) {
      event.preventDefault();
      
      const logoutForm = document.createElement('form');
      logoutForm.method = 'POST';
      logoutForm.action = '/admin/gallery/logout';
      
      const csrfToken = document.createElement('input');
      csrfToken.type = 'hidden';
      csrfToken.name = '_token';
      csrfToken.value = '{{ csrf_token() }}';
      logoutForm.appendChild(csrfToken);
      
      document.body.appendChild(logoutForm);
      logoutForm.submit();
    }

    // 10. Folder Section Selection & Bulk Delete Handlers
    function toggleFolderSection(folderCb, catSlug) {
      const items = document.querySelectorAll(`.media-item-${catSlug}`);
      items.forEach(cb => cb.checked = folderCb.checked);
      updateFolderSelectionState(catSlug);
    }

    function updateFolderSelectionState(catSlug) {
      const totalInFolder = document.querySelectorAll(`.media-item-${catSlug}`).length;
      const checkedInFolder = document.querySelectorAll(`.media-item-${catSlug}:checked`);
      const count = checkedInFolder.length;

      const folderCb = document.getElementById(`folder-cb-${catSlug}`);
      if (folderCb) {
        folderCb.checked = (count === totalInFolder && totalInFolder > 0);
      }

      const folderDeleteBtn = document.getElementById(`btn-delete-folder-${catSlug}`);
      const folderCountText = document.getElementById(`folder-count-${catSlug}`);

      if (folderCountText) folderCountText.textContent = count;
      if (folderDeleteBtn) {
        folderDeleteBtn.style.display = count > 0 ? 'inline-block' : 'none';
      }

      updateSelectionState();
    }

    async function deleteFolderSection(catSlug, catName) {
      const checkedBoxes = document.querySelectorAll(`.media-item-${catSlug}:checked`);
      const ids = Array.from(checkedBoxes).map(cb => cb.value);

      if (ids.length === 0) {
        alert(`Please select at least one media item in "${catName}" to delete.`);
        return;
      }

      if (!confirm(`Are you sure you want to delete ${ids.length} selected item(s) from "${catName}"? This action cannot be undone.`)) {
        return;
      }

      try {
        const res = await fetch("{{ route('admin.bulk-delete') }}", {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'X-Requested-With': 'XMLHttpRequest'
          },
          body: JSON.stringify({ ids: ids })
        });
        const data = await res.json();
        if (data.success) {
          alert(data.message || `Deleted ${ids.length} items from "${catName}"!`);
          window.location.reload();
        } else {
          alert(data.message || 'Folder section delete failed.');
        }
      } catch (e) {
        alert('Delete section error: ' + e.message);
      }
    }

    function updateSelectionState() {
      const checkboxes = document.querySelectorAll('.media-select-checkbox:checked');
      const count = checkboxes.length;
      const btnDeleteSelected = document.getElementById('btn-delete-selected');
      const selectedCount = document.getElementById('selected-count');

      if (selectedCount) selectedCount.textContent = count;

      if (btnDeleteSelected) {
        btnDeleteSelected.style.display = count > 0 ? 'inline-block' : 'none';
      }

      if (count > 0) {
        document.body.classList.add('selection-mode-active');
      } else {
        document.body.classList.remove('selection-mode-active');
      }
    }

    function toggleSelectAll(masterCheckbox) {
      const checkboxes = document.querySelectorAll('.media-select-checkbox');
      checkboxes.forEach(cb => cb.checked = masterCheckbox.checked);

      const folderCbs = document.querySelectorAll('.folder-section-checkbox');
      folderCbs.forEach(fcb => fcb.checked = masterCheckbox.checked);

      // update all folder delete buttons
      document.querySelectorAll('.btn-delete-folder').forEach(btn => {
        const catSlug = btn.id.replace('btn-delete-folder-', '');
        updateFolderSelectionState(catSlug);
      });

      updateSelectionState();
    }

    async function deleteSelectedMedia() {
      const checkedBoxes = document.querySelectorAll('.media-select-checkbox:checked');
      const ids = Array.from(checkedBoxes).map(cb => cb.value);

      if (ids.length === 0) {
        alert('Please select at least one media item to delete.');
        return;
      }

      if (!confirm(`Are you sure you want to delete ${ids.length} selected media item(s)? This action will remove them permanently.`)) {
        return;
      }

      try {
        const res = await fetch("{{ route('admin.bulk-delete') }}", {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'X-Requested-With': 'XMLHttpRequest'
          },
          body: JSON.stringify({ ids: ids })
        });
        const data = await res.json();
        if (data.success) {
          alert(data.message || 'Selected items deleted successfully!');
          window.location.reload();
        } else {
          alert(data.message || 'Bulk delete failed.');
        }
      } catch (e) {
        alert('Bulk delete error: ' + e.message);
      }
    }

    async function deleteAllMedia() {
      if (!confirm('⚠️ WARNING: Are you sure you want to DELETE ALL MEDIA (photos & videos) from your gallery? This will permanently remove all files from cloud storage!')) {
        return;
      }

      if (!confirm('FINAL CONFIRMATION: Click OK to permanently delete ALL gallery items.')) {
        return;
      }

      try {
        const res = await fetch("{{ route('admin.bulk-delete') }}", {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'X-Requested-With': 'XMLHttpRequest'
          },
          body: JSON.stringify({ delete_all: true })
        });
        const data = await res.json();
        if (data.success) {
          alert(data.message || 'All gallery items deleted successfully!');
          window.location.reload();
        } else {
          alert(data.message || 'Delete all failed.');
        }
      } catch (e) {
        alert('Delete all error: ' + e.message);
      }
    }

    function clearAllSelections() {
      const checkboxes = document.querySelectorAll('.media-select-checkbox');
      checkboxes.forEach(cb => cb.checked = false);
      const master = document.getElementById('select-all-checkbox');
      if (master) master.checked = false;

      const folderCbs = document.querySelectorAll('.folder-section-checkbox');
      folderCbs.forEach(fcb => fcb.checked = false);

      document.querySelectorAll('.btn-delete-folder').forEach(btn => btn.style.display = 'none');
      updateSelectionState();
    }

    // 12. Press & Hold (Long-press 500ms gesture) to Activate Card Selection Mode
    document.addEventListener('DOMContentLoaded', function() {
      const cards = document.querySelectorAll('.gallery-grid-card');

      cards.forEach(card => {
        let pressTimer = null;

        const startPress = (e) => {
          if (e.target.closest('.card-action-row') || e.target.closest('.media-select-checkbox')) return;
          
          card.classList.add('selecting');
          pressTimer = setTimeout(() => {
            document.body.classList.add('selection-mode-active');
            const checkbox = card.querySelector('.media-select-checkbox');
            if (checkbox) {
              checkbox.checked = !checkbox.checked;
              const catSlug = checkbox.getAttribute('data-category-slug');
              if (catSlug) updateFolderSelectionState(catSlug);
              else updateSelectionState();
            }
            card.classList.remove('selecting');
          }, 500);
        };

        const cancelPress = () => {
          clearTimeout(pressTimer);
          card.classList.remove('selecting');
        };

        card.addEventListener('mousedown', startPress);
        card.addEventListener('touchstart', startPress, { passive: true });

        card.addEventListener('mouseup', cancelPress);
        card.addEventListener('mouseleave', cancelPress);
        card.addEventListener('touchend', cancelPress);
        card.addEventListener('touchcancel', cancelPress);
      });
    });
  </script>

</body>
</html>
