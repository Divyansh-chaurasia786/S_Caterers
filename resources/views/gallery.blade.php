<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery | S. Caterers - Pure Vegetarian Premium Catering</title>
  
  <meta name="description" content="Explore the portfolio of S. Caterers by Amit Agarwal. Browse high-resolution photos of our signature wedding buffet setups, luxury live counters, live gourmet prep, and fine-dine presentation.">
  <meta name="keywords" content="S. Caterers Gallery, Wedding Catering Photos, Lucknow Catering Portfolio, Food Presentation, Catering Setup Lucknow">
  <meta name="author" content="Amit Agarwal">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo.png') }}">
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=6.1">
  
  <style>
    /* Scoped Gallery Page Styles */
    .gallery-hero {
      background: linear-gradient(135deg, var(--wine-deep) 0%, var(--wine) 50%, #4A0E17 100%);
      padding: 9.5rem 0 6rem;
      color: var(--ivory);
      position: relative;
      overflow: hidden;
      text-align: center;
    }
    
    .gallery-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(rgba(231, 197, 137, 0.08) 1px, transparent 1px);
      background-size: 24px 24px;
      pointer-events: none;
    }
    
    .gallery-hero .eyebrow {
      color: var(--gold-bright);
      font-size: 0.8rem;
      letter-spacing: 0.3em;
      margin-bottom: 12px;
      display: inline-block;
    }
    
    .gallery-hero h1 {
      font-family: var(--font-heading);
      font-size: clamp(2.5rem, 5vw, 4rem);
      font-weight: 700;
      color: var(--ivory);
      margin-bottom: 1rem;
      line-height: 1.15;
    }
    
    .gallery-hero h1 span {
      color: var(--gold-bright);
      font-style: italic;
    }
    
    .gallery-hero p {
      font-size: 1.05rem;
      max-width: 650px;
      margin: 0 auto;
      color: var(--ivory-dim);
      opacity: 0.9;
    }

    /* Filters Styles */
    .filter-section {
      background-color: var(--ivory);
      padding: 3rem 0 0;
    }

    .gallery-filters {
      display: flex;
      justify-content: center;
      gap: 12px;
      flex-wrap: wrap;
      margin-bottom: 0;
    }

    .filter-btn {
      background: rgba(0, 0, 0, 0.05);
      border: 1px solid rgba(198, 161, 91, 0.15);
      color: #555555;
      padding: 10px 24px;
      border-radius: 30px;
      font-size: 0.9rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .filter-btn:hover,
    .filter-btn.active {
      background: var(--wine);
      color: #FFFFFF !important;
      border-color: var(--wine);
      box-shadow: 0 4px 12px rgba(110, 20, 35, 0.25);
      transform: translateY(-1px);
    }

    /* Grid Section */
    .gallery-grid-section {
      background-color: var(--ivory);
      padding: 3rem 0 6.5rem;
    }

    .gallery-grid-item {
      display: block;
      transition: all 0.4s ease;
    }

    .gallery-grid-item.hidden {
      display: none;
    }

    .gallery-card {
      position: relative;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(32, 28, 26, 0.06);
      border: 1px solid var(--gold-line);
      aspect-ratio: 4 / 3;
      height: auto !important;
      cursor: pointer;
    }

    .gallery-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .gallery-card:hover img {
      transform: scale(1.08);
    }

    .gallery-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(110, 20, 35, 0.9) 0%, rgba(32, 28, 26, 0.2) 100%);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 1.5rem;
      opacity: 0;
      transition: opacity 0.4s ease;
    }

    .gallery-card:hover .gallery-overlay {
      opacity: 1;
    }

    .gallery-overlay i {
      color: var(--gold-bright);
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      transform: translateY(10px);
      transition: transform 0.4s ease 0.1s;
    }

    .gallery-overlay span {
      color: #FFFFFF;
      font-size: 1.05rem;
      font-weight: 700;
      font-family: var(--font-heading);
      letter-spacing: 0.05em;
      transform: translateY(10px);
      transition: transform 0.4s ease;
    }

    .gallery-card:hover .gallery-overlay i,
    .gallery-card:hover .gallery-overlay span {
      transform: translateY(0);
    }

    /* 3D Lightbox Modal Styles */
    .lightbox-modal {
      display: none;
      position: fixed;
      inset: 0;
      background-color: rgba(17, 14, 13, 0.95);
      z-index: 9999;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
      padding: 15px;
    }

    .lightbox-modal.show {
      display: flex;
      opacity: 1;
    }

    .lightbox-content {
      position: relative;
      max-width: 90vw;
      max-height: 85vh;
      border-radius: 14px;
      overflow: hidden;
      border: 3px solid var(--gold);
      box-shadow: 0 10px 40px rgba(0,0,0,0.8);
      transform: scale(0.9);
      transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.15);
      display: flex;
      flex-direction: column;
      background: #000000;
      width: auto;
    }

    .lightbox-modal.show .lightbox-content {
      transform: scale(1);
    }

    #lightboxMediaContainer {
      position: relative;
      flex: 1 1 auto;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #000000;
      overflow: hidden;
      max-height: calc(85vh - 50px);
    }

    #lightboxMediaContainer img,
    #lightboxMediaContainer video {
      max-width: 100%;
      max-height: calc(85vh - 50px);
      display: block;
      object-fit: contain;
      margin: 0 auto;
    }

    .lightbox-caption {
      position: relative;
      flex: 0 0 auto;
      background: rgba(110, 20, 35, 0.98);
      color: #FFFFFF;
      padding: 10px 16px;
      text-align: center;
      font-size: 0.95rem;
      font-weight: 600;
      font-family: var(--font-heading);
      border-top: 1px solid var(--gold-line);
      width: 100%;
      z-index: 10;
      box-sizing: border-box;
    }

    .lightbox-close {
      position: absolute;
      top: 12px;
      right: 12px;
      color: #FFFFFF;
      font-size: 1.2rem;
      background: rgba(0, 0, 0, 0.65);
      border: 1.5px solid var(--gold);
      border-radius: 50%;
      width: 36px;
      height: 36px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 30;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.5);
    }

    .lightbox-close:hover {
      color: var(--gold);
      background: rgba(110, 20, 35, 0.9);
      transform: scale(1.1);
    }

    /* Lightbox Navigation Buttons */
    .lightbox-nav-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(17, 14, 13, 0.85);
      color: #FFFFFF;
      border: 2px solid var(--gold);
      width: 48px;
      height: 48px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      cursor: pointer;
      z-index: 9999;
      transition: all 0.3s ease;
      box-shadow: 0 4px 20px rgba(0,0,0,0.6);
    }

    .lightbox-nav-btn:hover {
      background: var(--wine);
      color: var(--gold-light);
      border-color: var(--gold-light);
      transform: translateY(-50%) scale(1.15);
    }

    .lightbox-nav-btn.prev-btn {
      left: 20px;
    }

    .lightbox-nav-btn.next-btn {
      right: 20px;
    }

    @media (max-width: 768px) {
      .lightbox-nav-btn {
        width: 40px;
        height: 40px;
        font-size: 1rem;
      }
      .lightbox-nav-btn.prev-btn {
        left: 8px;
      }
      .lightbox-nav-btn.next-btn {
        right: 8px;
      }
      .gallery-hero {
        padding: 7.5rem 0 4.5rem;
      }
      .gallery-filters {
        padding: 0 16px;
        gap: 8px;
        justify-content: flex-start;
        overflow-x: auto;
        white-space: nowrap;
        flex-wrap: nowrap;
        padding-bottom: 8px;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
      }
      .gallery-filters::-webkit-scrollbar {
        display: none;
      }
      .filter-btn {
        padding: 8px 18px;
        font-size: 0.82rem;
        flex-shrink: 0;
      }
      .gallery-grid-section {
        padding: 2rem 16px 4rem;
      }
      .gallery-card {
        height: auto !important;
        aspect-ratio: 4 / 3 !important;
      }
      .lightbox-close {
        top: -40px;
        right: 10px;
      }
    }
  </style>
</head>
<body>

  <!-- ================= HEADER / NAVBAR ================= -->
  <nav class="navbar navbar-expand-lg navbar-custom" id="nav-header">
    <div class="container">
      <a class="navbar-brand-logo" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="S. Caterers Logo">
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMain" aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars" style="color: var(--charcoal);"></i>
      </button>
      <div class="collapse navbar-collapse" id="navMain">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
          <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('home') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('about') }}">About Us</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('services') }}">Services</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom active" href="#">Gallery</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
        <div class="d-flex mt-2 mt-lg-0">
          <a href="https://wa.me/916393998141?text=Hello%20S.%20Caterers!%20I%20saw%20your%20gallery%20portfolio%20and%20would%20like%20to%20discuss%20event%20catering." target="_blank" class="btn-gold"><i class="fa-brands fa-whatsapp me-1"></i> WhatsApp Us</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- ================= GALLERY HERO ================= -->
  <section class="gallery-hero">
    <div class="container">
      <span class="eyebrow">OUR CATERING PORTFOLIO</span>
      <h1>Captured <span>Moments</span></h1>
      <p>Explore our premium catering portfolio—showcasing grand wedding setups, luxury live counters, live culinary prep, and masterfully plated cuisines across Uttar Pradesh.</p>
    </div>
  </section>

  <!-- ================= GALLERY FILTERS ================= -->
  <section class="filter-section">
    <div class="container">
      <div class="gallery-filters" id="gallery-filters-bar">
        <button class="filter-btn active" onclick="filterGallery('all')">All Moments</button>
        @foreach($categories as $category)
          <button class="filter-btn" onclick="filterGallery('{{ Str::slug($category) }}')">{{ $category }}</button>
        @endforeach
      </div>
    </div>
  </section>

  <!-- ================= GALLERY GRID ================= -->
  <section class="gallery-grid-section">
    <div class="container">
      <div class="row g-4" id="gallery-grid-container">
               @foreach($images as $image)
        @php
          $videoSrc = $image->is_video
            ? ($image->isCloudinary() ? $image->path : asset($image->path))
            : '';
          $imgSrc = $image->is_video
            ? ($image->isCloudinary() ? $image->getThumbnailUrl() : null)
            : $image->getOptimizedUrl();
        @endphp
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 gallery-grid-item" data-category="{{ Str::slug($image->category) }}">
          <div class="gallery-card" onclick="openLightbox(this)"
               data-is-video="{{ $image->is_video ? '1' : '0' }}"
               data-src="{{ $image->is_video ? $videoSrc : $image->getOptimizedUrl() }}">
            @if($image->is_video)
              @if($image->isCloudinary() && $imgSrc)
                {{-- Cloudinary video: use generated jpg poster frame --}}
                <img src="{{ $imgSrc }}" alt="{{ $image->title }}" loading="lazy">
              @else
                {{-- Local video: use video element as thumbnail (preloads first frame) --}}
                <video src="{{ $videoSrc }}#t=0.5" muted playsinline preload="metadata"
                       style="width:100%;height:100%;object-fit:cover;display:block;"></video>
              @endif
              <div class="gallery-overlay">
                <i class="fa-solid fa-circle-play" style="font-size:2.5rem;"></i>
                <span>{{ $image->title }}</span>
              </div>
            @else
              <img src="{{ $imgSrc }}" alt="{{ $image->title }}" loading="lazy">
              <div class="gallery-overlay">
                <i class="fa-solid fa-expand"></i>
                <span>{{ $image->title }}</span>
              </div>
            @endif
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>

  <!-- ================= FOOTER ================= -->
  <footer id="footer-section">
    <div class="container">
      <div class="row g-5 footer-container">
        <!-- Logo Column -->
        <div class="col-md-6 col-lg-4">
          <img src="{{ asset('images/logo.png') }}" alt="S. Caterers Logo" class="footer-logo">
          <p class="footer-summary-text" style="font-size: 0.88rem; line-height: 1.6; max-width: 320px;">Premium 100% vegetarian catering services by Amit Agarwal, serving royal taste and unmatched hospitality across Lucknow and the entire state of Uttar Pradesh (UP) since 1998.</p>
          <div class="footer-social mt-4">
            <a href="https://www.instagram.com/s.caterers_lko?igsh=NjZxbmE3dm9ubW9v" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </div>

        <!-- Explore Column -->
        <div class="col-6 col-md-3 col-lg-2">
          <h6>Explore</h6>
          <a href="{{ route('home') }}">Home</a>
          <a href="{{ route('about') }}">About Us</a>
          <a href="{{ route('services') }}">Our Packages</a>
          <a href="{{ route('gallery') }}">Gallery</a>
        </div>

        <!-- Cuisine Column -->
        <div class="col-6 col-md-3 col-lg-2">
          <h6>Cuisine</h6>
          <a href="{{ route('services') }}#packages">Lakhnavi</a>
          <a href="{{ route('services') }}#packages">Mughlai</a>
          <a href="{{ route('services') }}#packages">Satvik / Jain</a>
          <a href="{{ route('services') }}#packages">Many More...</a>
        </div>

        <!-- Contact Column -->
        <div class="col-md-6 col-lg-4 footer-contact">
          <h6>Contact Us</h6>
          <div style="display: flex; flex-direction: column; gap: 12px;">
            <p style="font-size: 0.88rem; margin: 0; display: flex; align-items: flex-start; gap: 8px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-top: 3px; flex-shrink: 0;"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
              <a href="https://maps.google.com/?q=Sachan+Complex,+Chungi,+Krishna+Nagar,+Lucknow" target="_blank" style="color: inherit; text-decoration: none;">Sachan Complex, Chungi, Krishna Nagar, Lucknow, UP</a>
            </p>
            
            <p style="font-size: 0.88rem; margin: 0; display: flex; align-items: center; gap: 8px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <a href="https://wa.me/916393998141" target="_blank" style="color: inherit; text-decoration: none;">+91 63939 98141</a>
            </p>
            
            <p style="font-size: 0.88rem; margin: 0; display: flex; align-items: center; gap: 8px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0;"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
              <a href="mailto:scatererslko@gmail.com" style="color: inherit; text-decoration: none;">scatererslko@gmail.com</a>
            </p>
          </div>
        </div>
      </div>

      <div class="footer-bottom d-flex flex-wrap justify-content-between">
        <span>&copy; 2026 S. Caterers by Amit Agarwal. All rights reserved.</span>
        <span>Designed with devotion for exquisite tastes.</span>
      </div>
    </div>
  </footer>

  <!-- ================= LIGHTBOX MODAL ================= -->
  <div class="lightbox-modal" id="lightboxModal">
    <button class="lightbox-nav-btn prev-btn" id="lightboxPrevBtn" onclick="navigateLightbox(-1)" aria-label="Previous Media">
      <i class="fa-solid fa-chevron-left"></i>
    </button>

    <div class="lightbox-content">
      <button class="lightbox-close" onclick="closeLightbox()"><i class="fa-solid fa-xmark"></i></button>
      <div id="lightboxMediaContainer">
        <img id="lightboxImg" src="" alt="Expanded View">
      </div>
      <div class="lightbox-caption">
        <span id="lightboxCaption">Royal Buffet Presentation</span>
        <span id="lightboxCounter" style="font-size: 0.82rem; font-weight: 500; opacity: 0.85; margin-left: 8px;"></span>
      </div>
    </div>

    <button class="lightbox-nav-btn next-btn" id="lightboxNextBtn" onclick="navigateLightbox(1)" aria-label="Next Media">
      <i class="fa-solid fa-chevron-right"></i>
    </button>
  </div>

  <!-- Bootstrap 5 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Gallery Logic -->
  <script>
    // 1. Gallery Filtering logic
    function filterGallery(category) {
      // Toggle active states on filter buttons
      const buttons = document.querySelectorAll('.filter-btn');
      buttons.forEach(btn => {
        if (btn.getAttribute('onclick').includes(category)) {
          btn.classList.add('active');
        } else {
          btn.classList.remove('active');
        }
      });

      // Filter grid items
      const items = document.querySelectorAll('.gallery-grid-item');
      items.forEach(item => {
        const itemCategory = item.getAttribute('data-category');
        if (category === 'all' || itemCategory === category) {
          item.classList.remove('hidden');
        } else {
          item.classList.add('hidden');
        }
      });

      // Centered horizontal scroll active filter btn on mobile viewports
      const activeBtn = Array.from(buttons).find(btn => btn.classList.contains('active'));
      const container = document.getElementById('gallery-filters-bar');
      if (activeBtn && container) {
        const btnOffset = activeBtn.offsetLeft;
        const btnWidth = activeBtn.offsetWidth;
        const containerWidth = container.offsetWidth;
        container.scrollTo({
          left: btnOffset - (containerWidth / 2) + (btnWidth / 2),
          behavior: 'smooth'
        });
      }
    }

    // 2. Lightbox Open/Close & Navigation logic
    let currentVisibleCards = [];
    let currentLightboxIndex = -1;

    function getVisibleCards() {
      return Array.from(document.querySelectorAll('.gallery-grid-item:not(.hidden) .gallery-card'));
    }

    function openLightbox(card) {
      currentVisibleCards = getVisibleCards();
      currentLightboxIndex = currentVisibleCards.indexOf(card);

      if (currentLightboxIndex === -1) {
        currentVisibleCards = [card];
        currentLightboxIndex = 0;
      }

      renderLightboxItem(currentLightboxIndex);

      const modal = document.getElementById('lightboxModal');
      if (modal) {
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
      }
    }

    function renderLightboxItem(index) {
      if (!currentVisibleCards.length || index < 0 || index >= currentVisibleCards.length) return;

      const card = currentVisibleCards[index];
      const isVideo = card.getAttribute('data-is-video') === '1';
      const mediaSrc = card.getAttribute('data-src') || (card.querySelector('img') ? card.querySelector('img').src : card.querySelector('video').src);
      const title = card.getAttribute('data-title') || (card.querySelector('.gallery-overlay span') ? card.querySelector('.gallery-overlay span').textContent : '');

      const mediaContainer = document.getElementById('lightboxMediaContainer');
      const modalCaption = document.getElementById('lightboxCaption');
      const modalCounter = document.getElementById('lightboxCounter');

      if (mediaContainer) {
        if (isVideo) {
          const cleanSrc = mediaSrc.split('#')[0];
          mediaContainer.innerHTML = `<video src="${cleanSrc}" controls autoplay playsinline controlsList="nodownload" style="max-width: 100%; max-height: calc(85vh - 50px); display: block; object-fit: contain; margin: 0 auto; outline: none; z-index: 1;"></video>`;
          const vidEl = mediaContainer.querySelector('video');
          if (vidEl) {
            vidEl.play().catch(function(){});
          }
        } else {
          mediaContainer.innerHTML = `<img id="lightboxImg" src="${mediaSrc}" alt="${title}" style="max-width: 100%; max-height: calc(85vh - 50px); display: block; object-fit: contain; margin: 0 auto;">`;
        }

        if (modalCaption) modalCaption.textContent = title;
        if (modalCounter) modalCounter.textContent = `(${index + 1} / ${currentVisibleCards.length})`;
      }
    }

    function navigateLightbox(direction) {
      if (!currentVisibleCards.length) return;
      currentLightboxIndex = (currentLightboxIndex + direction + currentVisibleCards.length) % currentVisibleCards.length;
      renderLightboxItem(currentLightboxIndex);
    }

    function closeLightbox() {
      const modal = document.getElementById('lightboxModal');
      const mediaContainer = document.getElementById('lightboxMediaContainer');
      if (modal) {
        modal.classList.remove('show');
        if (mediaContainer) {
          mediaContainer.innerHTML = '';
        }
        document.body.style.overflow = 'auto';
      }
    }

    // Close on click outside media box
    document.getElementById('lightboxModal').addEventListener('click', function(e) {
      if (e.target === this) {
        closeLightbox();
      }
    });

    // Keyboard navigation (Left, Right, Escape)
    document.addEventListener('keydown', function(e) {
      const modal = document.getElementById('lightboxModal');
      if (!modal || !modal.classList.contains('show')) return;

      if (e.key === 'ArrowLeft') {
        navigateLightbox(-1);
      } else if (e.key === 'ArrowRight') {
        navigateLightbox(1);
      } else if (e.key === 'Escape') {
        closeLightbox();
      }
    });

    // Touch Swipe Support for Mobile
    let touchStartX = 0;
    let touchEndX = 0;

    const modalContent = document.getElementById('lightboxModal');
    if (modalContent) {
      modalContent.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
      }, { passive: true });

      modalContent.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
      }, { passive: true });
    }

    function handleSwipe() {
      const diff = touchEndX - touchStartX;
      if (Math.abs(diff) > 40) {
        if (diff < 0) {
          navigateLightbox(1); // Swipe left -> Next
        } else {
          navigateLightbox(-1); // Swipe right -> Prev
        }
      }
    }
  </script>

  <!-- Floating WhatsApp CTA -->
  <a href="https://wa.me/916393998141?text=Hello%20S.%20Caterers!%20I%20would%20like%20to%20inquire%20about%20your%20pure%20vegetarian%20catering%20services." class="floating-whatsapp-cta" target="_blank" aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <!-- Admin Verification Script -->
  <script src="{{ asset('js/admin-trigger.js') }}?v=1.0" data-csrf="{{ csrf_token() }}"></script>

</body>
</html>
