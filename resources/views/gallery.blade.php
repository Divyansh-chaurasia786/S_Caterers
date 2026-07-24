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
      padding: 20px;
    }

    .lightbox-modal.show {
      display: flex;
      opacity: 1;
    }

    .lightbox-content {
      position: relative;
      max-width: 90vw;
      max-height: 80vh;
      border-radius: 12px;
      overflow: hidden;
      border: 3px solid var(--gold);
      box-shadow: 0 10px 40px rgba(0,0,0,0.5);
      transform: scale(0.9);
      transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.15);
    }

    .lightbox-modal.show .lightbox-content {
      transform: scale(1);
    }

    .lightbox-content img {
      max-width: 100%;
      max-height: 80vh;
      display: block;
      object-fit: contain;
    }

    .lightbox-caption {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(110, 20, 35, 0.9);
      color: #FFFFFF;
      padding: 12px;
      text-align: center;
      font-size: 1rem;
      font-weight: 600;
      font-family: var(--font-heading);
    }

    .lightbox-close {
      position: absolute;
      top: -45px;
      right: 0;
      color: #FFFFFF;
      font-size: 2rem;
      background: none;
      border: none;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    .lightbox-close:hover {
      color: var(--gold);
    }

    @media (max-width: 768px) {
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
            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" aria-label="LinkedIn" style="display: inline-flex; align-items: center; justify-content: center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
            </a>
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
          <a href="#">Lakhnavi</a>
          <a href="#">Mughlai</a>
          <a href="#">Satvik / Jain</a>
          <a href="#">Global Fusion</a>
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
              <a href="tel:+916393998141" style="color: inherit; text-decoration: none;">+91 63939 98141</a>
            </p>
            
            <p style="font-size: 0.88rem; margin: 0; display: flex; align-items: center; gap: 8px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <p>Providing magnificent pure-vegetarian catering, exquisite Lakhnavi chaat stalls, and imperial live counters for over 28 years in Lucknow and across North India.</p>
          </div>
        </div>
        <div class="col-6 col-lg-2 ms-lg-auto">
          <div class="footer-links">
            <h6>Quick Links</h6>
            <ul>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About Us</a></li>
              <li><a href="{{ route('services') }}">Services</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-6 col-lg-2">
          <div class="footer-links">
            <h6>Specialities</h6>
            <ul>
              <li><a href="{{ route('services') }}">Grand Weddings</a></li>
              <li><a href="{{ route('services') }}">Lakhnavi Street Chaat</a></li>
              <li><a href="{{ route('services') }}">Awadhi Korma &amp; Naan</a></li>
              <li><a href="{{ route('services') }}">Satvik Puja Catering</a></li>
              <li><a href="{{ route('services') }}">Gourmet Desserts</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-contact-info">
            <h6>Get In Touch</h6>
            <p><i class="fa-solid fa-user me-2" style="color: var(--gold);"></i> Amit Agarwal (Founder)</p>
            <p><i class="fa-solid fa-phone me-2" style="color: var(--gold);"></i> <a href="https://wa.me/916393998141" target="_blank" style="color: inherit; text-decoration: none;">+91 63939 98141</a></p>
            <p><i class="fa-solid fa-location-dot me-2" style="color: var(--gold);"></i> Lucknow, Uttar Pradesh</p>
            <p><i class="fa-solid fa-envelope me-2" style="color: var(--gold);"></i> <a href="mailto:scatererslko@gmail.com" style="color: inherit; text-decoration: none;">scatererslko@gmail.com</a></p>
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
    <div class="lightbox-content">
      <button class="lightbox-close" onclick="closeLightbox()"><i class="fa-solid fa-xmark"></i></button>
      <div id="lightboxMediaContainer">
        <img id="lightboxImg" src="" alt="Expanded View">
      </div>
      <div class="lightbox-caption" id="lightboxCaption">Royal Buffet Presentation</div>
    </div>
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

    // 2. Lightbox Open/Close logic
    function openLightbox(card) {
      const isVideo = card.getAttribute('data-is-video') === '1';
      const mediaSrc = card.getAttribute('data-src') || (card.querySelector('img') ? card.querySelector('img').src : card.querySelector('video').src);
      const title = card.getAttribute('data-title') || (card.querySelector('.gallery-overlay span') ? card.querySelector('.gallery-overlay span').textContent : '');

      const modal = document.getElementById('lightboxModal');
      const mediaContainer = document.getElementById('lightboxMediaContainer');
      const modalCaption = document.getElementById('lightboxCaption');

      if (modal && mediaContainer) {
        if (isVideo) {
          const cleanSrc = mediaSrc.split('#')[0];
          mediaContainer.innerHTML = `<video src="${cleanSrc}" controls autoplay playsinline style="max-width: 100%; max-height: 80vh; display: block; object-fit: contain;"></video>`;
          const vidEl = mediaContainer.querySelector('video');
          if (vidEl) {
            vidEl.play().catch(function(){});
          }
        } else {
          mediaContainer.innerHTML = `<img id="lightboxImg" src="${mediaSrc}" alt="${title}" style="max-width: 100%; max-height: 80vh; display: block; object-fit: contain;">`;
        }

        modalCaption.textContent = title;
        modal.classList.add('show');
        document.body.style.overflow = 'hidden'; // Disable scroll background
      }
    }

    function closeLightbox() {
      const modal = document.getElementById('lightboxModal');
      const mediaContainer = document.getElementById('lightboxMediaContainer');
      if (modal) {
        modal.classList.remove('show');
        if (mediaContainer) {
          mediaContainer.innerHTML = '';
        }
        document.body.style.overflow = 'auto'; // Re-enable scroll
      }
    }

    // Close on click outside the lightbox image
    document.getElementById('lightboxModal').addEventListener('click', function(e) {
      if (e.target === this) {
        closeLightbox();
      }
    });

    // Close on escape key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        closeLightbox();
      }
    });
  </script>

  <!-- Floating WhatsApp CTA -->
  <a href="https://wa.me/916393998141?text=Hello%20S.%20Caterers!%20I%20would%20like%20to%20inquire%20about%20your%20pure%20vegetarian%20catering%20services." class="floating-whatsapp-cta" target="_blank" aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <!-- Admin Verification Script -->
  <script src="{{ asset('js/admin-trigger.js') }}?v=1.0" data-csrf="{{ csrf_token() }}"></script>

</body>
</html>
