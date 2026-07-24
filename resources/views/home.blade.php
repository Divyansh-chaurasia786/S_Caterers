<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>S. Caterers by Amit Agarwal — Pure Vegetarian Catering, Lucknow</title>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="S. Caterers by Amit Agarwal offers premium, 100% pure vegetarian catering services in Lucknow. Specializing in weddings, corporate events, and Satvik/Jain menus.">
  <meta name="keywords" content="S Caterers, Amit Agarwal, Vegetarian Catering Lucknow, Wedding Caterer Lucknow, Jain Catering, Satvik Food">
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
</head>
<body>

  <!-- ================= HEADER (NAVBAR) ================= -->
  <nav class="navbar navbar-expand-lg navbar-custom" id="nav-header">
    <div class="container">
      <a class="navbar-brand-logo" href="#">
        <img src="{{ asset('images/logo.png') }}" alt="S. Caterers Logo">
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMain" aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars" style="color: var(--charcoal);"></i>
      </button>
      <div class="collapse navbar-collapse" id="navMain">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
          <li class="nav-item"><a class="nav-link nav-link-custom active" href="{{ route('home') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('about') }}">About Us</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('services') }}">Services</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('gallery') }}">Gallery</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
        <div class="d-flex mt-2 mt-lg-0">
          <a href="{{ route('services') }}" class="btn-gold">Explore Packages</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- ================= HERO SECTION ================= -->
  <section class="hero position-relative" id="hero-section">
  <div class="hero-text-glow"></div>
  <div class="hero-top-tag-bar">
    <span class="veg-tag"><span class="veg-dot"></span> 100% Pure Vegetarian</span>
  </div>
  <div class="container-fluid p-0">
    <div class="row g-0">
      <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
        <div class="hero-content ps-4 pe-4 ps-lg-5 pe-lg-5 text-start">
          <div class="mb-3">
            <span class="eyebrow"><i class="fa-solid fa-spa me-1"></i> A Legacy of Taste</span>
          </div>
            <div class="font-cursive mt-2">Welcome to</div>
            <h1 class="mt-1">S. CATERERS<br><span class="highlight">by Amit Agarwal</span></h1>
            <p class="lead-copy">Crafting culinary masterpieces and premium dining experiences for your most treasured celebrations. From traditional Lakhnavi delicacies to global gourmet courses, we cater with pure love, hygiene, and unmatched devotion.</p>
            <div class="d-flex gap-3 flex-wrap justify-content-lg-start justify-content-center">
              <a href="{{ route('services') }}" class="btn-gold">Explore Menus</a>
              <a href="https://wa.me/919839077960?text=Hello%20S.%20Caterers!%20I%20would%20like%20to%20inquire%20about%20your%20pure%20vegetarian%20catering%20services%20for%20an%20upcoming%20event." target="_blank" class="btn-outline-wine"><i class="fa-brands fa-whatsapp me-1"></i> WhatsApp Us</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 hero-image-col">
          <div class="hero-image-wrap">
            <div class="hero-slide active slide-1" style="background-image: url('{{ asset('images/hero-slide-1.jpg') }}');"></div>
            <div class="hero-slide slide-2" style="background-image: url('{{ asset('images/hero-slide-2.jpg') }}');"></div>
            <div class="hero-slide slide-3" style="background-image: url('{{ asset('images/hero-slide-3.jpg') }}');"></div>
          </div>

          <!-- Option A Wavy Mask Overlay (SVG) -->
          <svg class="hero-wavy-mask" viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Left mask area filled with the Ivory background color -->
            <path d="M 0 0 C 30 20, 10 50, 40 80 C 50 90, 20 100, 30 100 L 0 100 Z" class="wavy-mask-bg" />
            <!-- The glowing gold wavy border line itself -->
            <path d="M 0 0 C 30 20, 10 50, 40 80 C 50 90, 20 100, 30 100" class="wavy-mask-line" />
            <defs>
              <linearGradient id="gold-gradient-hero" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" stop-color="#E2C793" />
                <stop offset="100%" stop-color="#C5A880" />
              </linearGradient>
            </defs>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= THE THREE PROMISE CARDS ================= -->
  <section class="promise-section" id="promise-banner">
    <div class="container">
      <div class="row g-3 justify-content-center">
        <div class="col-12 col-md-4">
          <div class="promise-card">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 3.58 1 9.8a7 7 0 0 1-13.7 3.2"/><path d="M9 22v-4h4"/></svg>
            </div>
            <div>
              <div class="title">Our Promise</div>
              <div class="desc">100% Pure Veg Kitchen</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="promise-card">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v8"/><path d="m4.93 4.93 5.66 5.66"/><path d="M2 12h8"/><path d="m4.93 19.07 5.66-5.66"/><path d="M12 22v-8"/><path d="m19.07 19.07-5.66-5.66"/><path d="M22 12h-8"/><path d="m19.07 4.93-5.66 5.66"/><circle cx="12" cy="12" r="2.5"/></svg>
            </div>
            <div>
              <div class="title">Satvik Options</div>
              <div class="desc">Jain Menus on Request</div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="promise-card">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89 7 23l5-3 5 3-1.21-9.12"/></svg>
            </div>
            <div>
              <div class="title">Trusted Caterer</div>
              <div class="desc">Lucknow's #1 Veg Choice</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SIGNATURE SPECIALITIES ================= -->
  <section class="section-pad" id="specialities">
    <div class="container">
      <div class="section-title-wrap">
        <span class="eyebrow">Culinary Masterpieces</span>
        <h2 class="section-title">Our Signature <span class="accent">Specialities</span></h2>
      </div>

      <div class="row g-4 mobile-swipe-deck" id="specialties-swipe-deck">
        <!-- Awadhi Specialties -->
        <div class="col-md-6 col-lg-3">
          <div class="specialty-card">
            <div class="specialty-img-wrap">
              <img src="{{ asset('images/specialty-biryani.jpg') }}" alt="Veg Dum Biryani">
            </div>
            <div class="specialty-overlay">
              <h3 class="specialty-title">Veg Dum Biryani</h3>
              <p class="specialty-desc">Aromatic slow-cooked basmati rice layered with garden-fresh seasonal vegetables, pure saffron strands, and hand-ground spices.</p>
            </div>
          </div>
        </div>

        <!-- Shahi Paneer Korma -->
        <div class="col-md-6 col-lg-3">
          <div class="specialty-card">
            <div class="specialty-img-wrap">
              <img src="{{ asset('images/specialty-korma.jpg') }}" alt="Paneer Shahi Korma">
            </div>
            <div class="specialty-overlay">
              <h3 class="specialty-title">Paneer Shahi Korma</h3>
              <p class="specialty-desc">Melt-in-mouth cottage cheese cubes slow-simmered in a rich cashew-cardamom gold sauce and butter gravy.</p>
            </div>
          </div>
        </div>

        <!-- Global Gourmet Fusion -->
        <div class="col-md-6 col-lg-3">
          <div class="specialty-card">
            <div class="specialty-img-wrap">
              <img src="{{ asset('images/specialty-live.jpg') }}" alt="Global Live Stations">
            </div>
            <div class="specialty-overlay">
              <h3 class="specialty-title">Global Live Stations</h3>
              <p class="specialty-desc">Interactive live pasta bars, wood-fired artisanal flatbreads, and fresh East Asian stir-fry woks prepared live by our chefs.</p>
            </div>
          </div>
        </div>

        <!-- Royal Dessert Lounge -->
        <div class="col-md-6 col-lg-3">
          <div class="specialty-card">
            <div class="specialty-img-wrap">
              <img src="{{ asset('images/specialty-dessert.jpg') }}" alt="Royal Dessert Lounge">
            </div>
            <div class="specialty-overlay">
              <h3 class="specialty-title">Royal Dessert Lounge</h3>
              <p class="specialty-desc">A premium sweet escape featuring fresh silver-leaf Rabdi, warm saffron Jalebis, and custom artisanal mousse jars.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Specialties Pagination Dots -->
      <div class="carousel-dots d-md-none" id="dots-specialties"></div>
    </div>
  </section>

  <div class="jali-divider" id="divider-1"></div>

  <!-- ================= SERVICES (PACKAGES) ================= -->
  <section class="section-pad" id="services">
    <div class="container">
      <div class="section-title-wrap">
        <span class="eyebrow">Our Services</span>
        <h2 class="section-title">Curated Catering <span class="accent">Packages</span></h2>
      </div>

      <!-- Desktop View (Grid Layout) -->
      <div class="row g-4 justify-content-center d-none d-md-flex">
        <!-- Silver Package -->
        <div class="col-md-6 col-lg-4">
          <div class="package-card" id="pkg-silver">
            <div class="pkg-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils"><path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/><path d="M7 2v20"/><path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Z"/><path d="M19 15v7"/></svg>
            </div>
            <h3 class="pkg-title">Silver Package</h3>
            <p class="pkg-desc">An elegant arrangement of classic Lakhnavi and North Indian vegetarian specialties. Perfect for family gatherings, traditional rituals, and intimate celebrations looking for authentic heritage taste.</p>
          </div>
        </div>

        <!-- Gold Package -->
        <div class="col-md-6 col-lg-4">
          <div class="package-card" id="pkg-gold">
            <div class="pkg-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-soup"><path d="M12 21a9 9 0 0 0 9-9H3a9 9 0 0 0 9 9Z"/><path d="M7 21h10"/><path d="M12 2v4"/><path d="M7 5a3 3 0 0 1 3-3"/><path d="M14 5a3 3 0 0 1 3-3"/><path d="M3 12h18"/></svg>
            </div>
            <h3 class="pkg-title">Gold Package</h3>
            <p class="pkg-desc">Our highly popular signature setup. Blends premium traditional courses with interactive street food chaat counters and modern dessert platters, offering a rich variety for grand receptions.</p>
          </div>
        </div>

        <!-- Royal Package -->
        <div class="col-md-6 col-lg-4">
          <div class="package-card royal-package" id="pkg-royal">
            <div class="pkg-icon" style="color: var(--gold-bright);">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-crown"><path d="m2 4 3 12h14l3-12-6 7-4-7-4 7-6-7Z"/><path d="M5 20h14"/></svg>
            </div>
            <h3 class="pkg-title">Royal Package</h3>
            <p class="pkg-desc">A luxurious culinary banquet experience. Features live international counters (Italian, Thai, Continental), bespoke presentation displays, boutique serving staff, and custom menus crafted by our head chef.</p>
          </div>
        </div>
      </div>

      <!-- Mobile View (Tabbed Layout) -->
      <div class="d-md-none">
        <ul class="nav nav-pills pkg-tabs" id="pkgTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tab-silver" data-bs-toggle="tab" data-bs-target="#pane-silver" type="button" role="tab" aria-controls="pane-silver" aria-selected="true">Silver</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-gold" data-bs-toggle="tab" data-bs-target="#pane-gold" type="button" role="tab" aria-controls="pane-gold" aria-selected="false">Gold</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-royal" data-bs-toggle="tab" data-bs-target="#pane-royal" type="button" role="tab" aria-controls="pane-royal" aria-selected="false">Royal</button>
          </li>
        </ul>
        
        <div class="tab-content" id="pkgTabContent">
          <!-- Silver Pane -->
          <div class="tab-pane fade show active" id="pane-silver" role="tabpanel" aria-labelledby="tab-silver">
            <div class="package-card" id="pkg-silver-mob">
              <div class="pkg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils"><path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/><path d="M7 2v20"/><path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Z"/><path d="M19 15v7"/></svg>
              </div>
              <h3 class="pkg-title">Silver Package</h3>
              <p class="pkg-desc">An elegant arrangement of classic Lakhnavi and North Indian vegetarian specialties. Perfect for family gatherings, traditional rituals, and intimate celebrations looking for authentic heritage taste.</p>
            </div>
          </div>
          
          <!-- Gold Pane -->
          <div class="tab-pane fade" id="pane-gold" role="tabpanel" aria-labelledby="tab-gold">
            <div class="package-card" id="pkg-gold-mob">
              <div class="pkg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-soup"><path d="M12 21a9 9 0 0 0 9-9H3a9 9 0 0 0 9 9Z"/><path d="M7 21h10"/><path d="M12 2v4"/><path d="M7 5a3 3 0 0 1 3-3"/><path d="M14 5a3 3 0 0 1 3-3"/><path d="M3 12h18"/></svg>
              </div>
              <h3 class="pkg-title">Gold Package</h3>
              <p class="pkg-desc">Our highly popular signature setup. Blends premium traditional courses with interactive street food chaat counters and modern dessert platters, offering a rich variety for grand receptions.</p>
            </div>
          </div>
          
          <!-- Royal Pane -->
          <div class="tab-pane fade" id="pane-royal" role="tabpanel" aria-labelledby="tab-royal">
            <div class="package-card royal-package" id="pkg-royal-mob">
              <div class="pkg-icon" style="color: var(--gold-bright);">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-crown"><path d="m2 4 3 12h14l3-12-6 7-4-7-4 7-6-7Z"/><path d="M5 20h14"/></svg>
              </div>
              <h3 class="pkg-title">Royal Package</h3>
              <p class="pkg-desc">A luxurious culinary banquet experience. Features live international counters (Italian, Thai, Continental), bespoke presentation displays, boutique serving staff, and custom menus crafted by our head chef.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-5">
        <a href="{{ route('services') }}" class="btn-outline-wine">Know More</a>
      </div>
    </div>
  </section>

  <!-- ================= TAILORED EVENTS ================= -->
  <section class="section-pad" id="events">
    <div class="container">
      <div class="section-title-wrap">
        <span class="eyebrow">Our Occasions</span>
        <h2 class="section-title">Catering For Your <span class="accent">Milestones</span></h2>
      </div>

      <!-- Desktop Layout: 3 Rows -->
      <div class="d-none d-md-block">
        <!-- Wedding Catering Row (Image Left, Text Right) -->
        <div class="row align-items-center g-5 event-row">
          <div class="col-12 col-lg-6 text-center">
            <div class="event-frame-wrap">
              <div class="event-frame-inner">
                <img src="{{ asset('images/occasion-wedding.jpg') }}" alt="Weddings">
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="event-content-col">
              <span class="event-tag-pill">Grand Scale</span>
              <h3 class="event-title">Destination Weddings</h3>
              <p class="event-desc">Experience a wedding banquet that mirrors royal dining traditions. From gorgeous multi-themed food installations and live chaat galleries to boutique family table service, we ensure your wedding feast is nothing short of legendary.</p>
              <a href="https://wa.me/919839077960?text=Hello%20S.%20Caterers!%20I%20would%20like%20to%20plan%20a%20grand%20pure-veg%20Wedding%20Catering%20menu." target="_blank" class="btn-outline-wine"><i class="fa-brands fa-whatsapp me-1"></i> Plan Wedding Menu</a>
            </div>
          </div>
        </div>

        <!-- Corporate Galas Row (Image Right, Text Left) -->
        <div class="row align-items-center g-5 event-row flex-lg-row-reverse">
          <div class="col-12 col-lg-6 text-center">
            <div class="event-frame-wrap">
              <div class="event-frame-inner">
                <img src="{{ asset('images/occasion-corporate.jpg') }}" alt="Corporate Galas">
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="event-content-col">
              <span class="event-tag-pill">Corporate</span>
              <h3 class="event-title">Corporate Galas</h3>
              <p class="event-desc">Make a statement with professional plated luncheons, elegant buffet stations, and formal corporate dinners. We specialize in high-end corporate gala catering, ensuring flawless service, hygiene, and punctual execution.</p>
              <a href="https://wa.me/919839077960?text=Hello%20S.%20Caterers!%20I%20would%20like%20to%20inquire%20about%20Corporate%20Catering%20services%20and%20packages." target="_blank" class="btn-outline-wine"><i class="fa-brands fa-whatsapp me-1"></i> Plan Corporate Event</a>
            </div>
          </div>
        </div>

        <!-- Sacred Pujas Row (Image Left, Text Right) -->
        <div class="row align-items-center g-5 event-row">
          <div class="col-12 col-lg-6 text-center">
            <div class="event-frame-wrap">
              <div class="event-frame-inner">
                <img src="{{ asset('images/occasion-puja.jpg') }}" alt="Sacred Pujas">
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="event-content-col">
              <span class="event-tag-pill">100% Satvik</span>
              <h3 class="event-title">Traditional Pujas & Griha Pravesh</h3>
              <p class="event-desc">Catering crafted with absolute purity and spiritual devotion. We prepare dedicated Satvik menus with zero onion, garlic, or root vegetables on request, served in completely sanitized pure vegetarian setups.</p>
              <a href="https://wa.me/919839077960?text=Hello%20S.%20Caterers!%20I%20would%20like%20to%20inquire%20about%20your%20Satvik%20%2F%20Jain%20Puja%20Catering%20options." target="_blank" class="btn-outline-wine"><i class="fa-brands fa-whatsapp me-1"></i> Plan Puja Menu</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Layout: Horizontal Auto-playing Carousel -->
      <div class="d-md-none">
        <div class="row g-4 mobile-swipe-deck" id="occasions-swipe-deck">
          <!-- Card 1: Destination Weddings -->
          <div class="col-12">
            <div class="occasion-card">
              <div class="occasion-img-wrap">
                <img src="{{ asset('images/occasion-wedding.jpg') }}" alt="Weddings">
              </div>
              <div class="occasion-content">
                <span class="event-tag-pill">Grand Scale</span>
                <h3 class="event-title">Destination Weddings</h3>
                <p class="event-desc">Experience a wedding banquet that mirrors royal dining traditions. From gorgeous multi-themed food installations and live chaat galleries to family table service, we ensure your wedding feast is legendary.</p>
                <a href="https://wa.me/919839077960?text=Hello%20S.%20Caterers!%20I%20would%20like%20to%20plan%20a%20grand%20pure-veg%20Wedding%20Catering%20menu." target="_blank" class="btn-outline-wine btn-sm"><i class="fa-brands fa-whatsapp me-1"></i> Plan Wedding Menu</a>
              </div>
            </div>
          </div>
          <!-- Card 2: Corporate Galas -->
          <div class="col-12">
            <div class="occasion-card">
              <div class="occasion-img-wrap">
                <img src="{{ asset('images/occasion-corporate.jpg') }}" alt="Corporate Galas">
              </div>
              <div class="occasion-content">
                <span class="event-tag-pill">Corporate</span>
                <h3 class="event-title">Corporate Galas</h3>
                <p class="event-desc">Make a statement with professional plated luncheons, elegant buffet stations, and formal corporate dinners. We specialize in high-end corporate gala catering with flawless service.</p>
                <a href="https://wa.me/919839077960?text=Hello%20S.%20Caterers!%20I%20would%20like%20to%20inquire%20about%20Corporate%20Catering%20services%20and%20packages." target="_blank" class="btn-outline-wine btn-sm"><i class="fa-brands fa-whatsapp me-1"></i> Plan Corporate Event</a>
              </div>
            </div>
          </div>
          <!-- Card 3: Traditional Pujas & Griha Pravesh -->
          <div class="col-12">
            <div class="occasion-card">
              <div class="occasion-img-wrap">
                <img src="{{ asset('images/occasion-puja.jpg') }}" alt="Sacred Pujas">
              </div>
              <div class="occasion-content">
                <span class="event-tag-pill">100% Satvik</span>
                <h3 class="event-title">Traditional Pujas</h3>
                <p class="event-desc">Catering crafted with absolute purity and spiritual devotion. We prepare dedicated Satvik menus with zero onion, garlic, or root vegetables on request in completely sanitized setups.</p>
                <a href="https://wa.me/919839077960?text=Hello%20S.%20Caterers!%20I%20would%20like%20to%20inquire%20about%20your%20Satvik%20%2F%20Jain%20Puja%20Catering%20options." target="_blank" class="btn-outline-wine btn-sm"><i class="fa-brands fa-whatsapp me-1"></i> Plan Puja Menu</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Occasions Pagination Dots -->
        <div class="carousel-dots" id="dots-occasions"></div>
      </div>
    </div>
  </section>  <div class="jali-divider dark" id="divider-2"></div>

  <!-- ================= ABOUT US CTA BANNER ================= -->
  <section class="section-pad text-center" id="about-cta-section" style="background: var(--ivory-dim); border-top: 1px solid var(--gold-line); border-bottom: 1px solid var(--gold-line);">
    <div class="container py-3">
      <div style="max-width: 800px; margin: 0 auto;">
        <span class="eyebrow">Our Legacy</span>
        <h2 class="section-title mt-2 mb-3">Serving Exquisite Tastes Since <span class="accent">1998</span></h2>
        <p class="lead-copy mx-auto" style="font-size: 1.05rem; line-height: 1.8; color: var(--ink-soft); max-width: 650px;">
          What started as a beloved local kitchen in Lucknow has grown into a statewide premium service. Discover our 28-year journey of culinary devotion, our strict 100% vegetarian sanitation standards, and our recent expansion to serve grand celebrations across the entire state of Uttar Pradesh.
        </p>
        <div class="mt-4">
          <a href="{{ route('about') }}" class="btn-gold">Read Our Story & Standards</a>
        </div>
      </div>
    </div>
  </section>

  <div class="jali-divider" id="divider-3"></div>

  <!-- ================= GALLERY ("CAPTURED MOMENTS") ================= -->
  <section class="section-pad pb-4" id="gallery-section">
    <div class="container">
      <div class="section-title-wrap">
        <span class="eyebrow">Portfolio</span>
        <h2 class="section-title">Captured <span class="accent">Moments</span></h2>
      </div>

      <div class="row g-4 mobile-swipe-deck" id="gallery-swipe-deck">
        <!-- Photo 1 -->
        <div class="col-sm-6 col-lg-3">
          <a href="{{ asset('images/specialty-korma.jpg') }}" target="_blank" style="text-decoration: none;">
            <div class="gallery-card">
              <img src="{{ asset('images/specialty-korma.jpg') }}" alt="Exquisite Plating Presentation">
              <div class="gallery-overlay">
                <div class="gallery-title-card">Exquisite Plating</div>
              </div>
            </div>
          </a>
        </div>

        <!-- Photo 2 -->
        <div class="col-sm-6 col-lg-3">
          <a href="{{ asset('images/lakhnavi-street-chaat.jpg') }}" target="_blank" style="text-decoration: none;">
            <div class="gallery-card">
              <img src="{{ asset('images/lakhnavi-street-chaat.jpg') }}" alt="Lakhnavi Street Chaat Presentation">
              <div class="gallery-overlay">
                <div class="gallery-title-card">Lakhnavi Street Chaat</div>
              </div>
            </div>
          </a>
        </div>

        <!-- Photo 3 -->
        <div class="col-sm-6 col-lg-3">
          <a href="{{ asset('images/occasion-wedding.jpg') }}" target="_blank" style="text-decoration: none;">
            <div class="gallery-card">
              <img src="{{ asset('images/occasion-wedding.jpg') }}" alt="Royal Buffet Decor Setup">
              <div class="gallery-overlay">
                <div class="gallery-title-card">Royal Buffet Decor</div>
              </div>
            </div>
          </a>
        </div>

        <!-- Photo 4 -->
        <div class="col-sm-6 col-lg-3">
          <a href="{{ asset('images/specialty-dessert.jpg') }}" target="_blank" style="text-decoration: none;">
            <div class="gallery-card">
              <img src="{{ asset('images/specialty-dessert.jpg') }}" alt="Dessert Banquet Display Setup">
              <div class="gallery-overlay">
                <div class="gallery-title-card">Dessert Banquet Display</div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- Gallery Pagination Dots -->
      <div class="carousel-dots d-md-none" id="dots-gallery"></div>

      <div class="text-center mt-5">
        <a href="{{ route('gallery') }}" class="btn-outline-wine">View More Gallery</a>
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
          <a href="#services">Our Packages</a>
          <a href="#gallery-section">Gallery</a>
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
              <a href="https://maps.google.com/?q=Keshav+Nagar,+Sitapur+Road,+Lucknow" target="_blank" style="color: inherit; text-decoration: none;">Keshav Nagar, Sitapur Road, Lucknow, UP</a>
            </p>
            
            <p style="font-size: 0.88rem; margin: 0; display: flex; align-items: center; gap: 8px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <a href="tel:+919839077960" style="color: inherit; text-decoration: none;">+91 98390 77960</a>
            </p>
            
            <p style="font-size: 0.88rem; margin: 0; display: flex; align-items: center; gap: 8px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--gold-bright)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <a href="tel:+919415788950" style="color: inherit; text-decoration: none;">+91 94157 88950</a>
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

  <!-- Floating WhatsApp CTA -->
  <a href="https://wa.me/919839077960?text=Hello%20S.%20Caterers!%20I%20would%20like%20to%20inquire%20about%20your%20pure%20vegetarian%20catering%20services." class="floating-whatsapp-cta" target="_blank" aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <!-- Homepage Auto-Sliding and Scrolling Scripts -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // 1. Hero background slideshow
      const slides = document.querySelectorAll('.hero-slide');
      if (slides.length > 0) {
        let currentSlide = 0;
        setInterval(() => {
          slides.forEach(s => s.classList.remove('leaving'));
          const prevSlide = currentSlide;
          slides[prevSlide].classList.remove('active');
          slides[prevSlide].classList.add('leaving');
          currentSlide = (currentSlide + 1) % slides.length;
          slides[currentSlide].classList.add('active');
        }, 4500);
      }

      // 2. Helper function to build and control a mobile slider carousel with dots and rightward loop
      const setupMobileSlider = (deckId, dotsContainerId) => {
        const deck = document.getElementById(deckId);
        const dotsContainer = document.getElementById(dotsContainerId);
        if (!deck || !dotsContainer) return;
        
        const cards = deck.children;
        const totalCards = cards.length;
        if (totalCards <= 1) return;

        let intervalId = null;
        let resumeTimeout = null;
        let isUserInteracting = false;
        
        // Build gold pagination dots dynamically
        dotsContainer.innerHTML = '';
        for (let i = 0; i < totalCards; i++) {
          const dot = document.createElement('span');
          dot.classList.add('carousel-dot');
          if (i === 0) dot.classList.add('active');
          
          dot.addEventListener('click', () => {
            handleUserInteraction();
            const cardWidth = cards[0].offsetWidth + parseFloat(getComputedStyle(deck).gap || 16);
            deck.scrollTo({ left: i * cardWidth, behavior: 'smooth' });
          });
          
          dotsContainer.appendChild(dot);
        }
        
        // Synchronize active dot status during scrolling
        deck.addEventListener('scroll', () => {
          const cardWidth = cards[0].offsetWidth + parseFloat(getComputedStyle(deck).gap || 16);
          const activeIndex = Math.round(deck.scrollLeft / cardWidth);
          const dots = dotsContainer.querySelectorAll('.carousel-dot');
          dots.forEach((dot, idx) => {
            if (idx === activeIndex) {
              dot.classList.add('active');
            } else {
              dot.classList.remove('active');
            }
          });
        });

        // Robust handler for all manual interactions
        const handleUserInteraction = () => {
          isUserInteracting = true;
          if (intervalId) {
            clearInterval(intervalId);
            intervalId = null;
          }
          if (resumeTimeout) {
            clearTimeout(resumeTimeout);
          }
          // Resume autoplay after 10 seconds of no interaction
          resumeTimeout = setTimeout(() => {
            isUserInteracting = false;
            startAutoplay();
          }, 10000);
        };
        
        const startAutoplay = () => {
          if (intervalId) clearInterval(intervalId);
          intervalId = setInterval(() => {
            if (isUserInteracting) return;
            
            const cardWidth = cards[0].offsetWidth + parseFloat(getComputedStyle(deck).gap || 16);
            const maxScroll = deck.scrollWidth - deck.clientWidth;
            
            let currentIndex = Math.round(deck.scrollLeft / cardWidth);
            let nextIndex = (currentIndex + 1) % totalCards;

            if (deck.scrollLeft >= maxScroll - 15) {
              // Smoothly scroll back to start so the transition flow doesn't break
              deck.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
              deck.scrollTo({ left: nextIndex * cardWidth, behavior: 'smooth' });
            }
          }, 3000);
        };
        
        const pauseAutoplay = () => {
          if (intervalId) {
            clearInterval(intervalId);
            intervalId = null;
          }
          if (resumeTimeout) {
            clearTimeout(resumeTimeout);
            resumeTimeout = null;
          }
        };
        
        // Touch events handling
        deck.addEventListener('touchstart', () => {
          handleUserInteraction();
        }, { passive: true });
        
        deck.addEventListener('touchmove', () => {
          handleUserInteraction();
        }, { passive: true });
        
        deck.addEventListener('touchend', () => {
          handleUserInteraction();
        }, { passive: true });
        
        // Mouse hover handling
        deck.addEventListener('mouseenter', () => {
          handleUserInteraction();
        });
        
        deck.addEventListener('mouseleave', () => {
          handleUserInteraction();
        });
        
        // Initialize if viewport is mobile
        if (window.innerWidth < 768) {
          startAutoplay();
        }
        
        window.addEventListener('resize', () => {
          pauseAutoplay();
          if (window.innerWidth < 768) {
            startAutoplay();
          }
        });
      };

      // Initialize all three mobile sliders
      setupMobileSlider('specialties-swipe-deck', 'dots-specialties');
      setupMobileSlider('occasions-swipe-deck', 'dots-occasions');
      setupMobileSlider('gallery-swipe-deck', 'dots-gallery');

      // 2b. Specialties Spotlight Autoplay on Desktop / Slider Autoplay on Mobile
      const specialtiesDeck = document.getElementById('specialties-swipe-deck');
      if (specialtiesDeck) {
        const cards = specialtiesDeck.querySelectorAll('.specialty-card');
        let currentSpotlight = 0;
        let spotlightInterval = null;

        const startSpotlight = () => {
          if (spotlightInterval) clearInterval(spotlightInterval);
          // Highlight first card immediately
          cards.forEach(c => c.classList.remove('active-spotlight'));
          cards[currentSpotlight].classList.add('active-spotlight');
          currentSpotlight = (currentSpotlight + 1) % cards.length;

          spotlightInterval = setInterval(() => {
            cards.forEach(c => c.classList.remove('active-spotlight'));
            cards[currentSpotlight].classList.add('active-spotlight');
            currentSpotlight = (currentSpotlight + 1) % cards.length;
          }, 3000);
        };

        const stopSpotlight = () => {
          if (spotlightInterval) {
            clearInterval(spotlightInterval);
            spotlightInterval = null;
          }
          cards.forEach(c => c.classList.remove('active-spotlight'));
        };

        const handleSpecialtiesAutoplay = () => {
          if (window.innerWidth >= 768) {
            startSpotlight();
          } else {
            stopSpotlight();
          }
        };

        // Pause spotlight on manual hover to let users interact normally
        cards.forEach(card => {
          card.addEventListener('mouseenter', stopSpotlight);
          card.addEventListener('mouseleave', handleSpecialtiesAutoplay);
        });

        handleSpecialtiesAutoplay();
        window.addEventListener('resize', handleSpecialtiesAutoplay);
      }

      // 3. Auto-sliding catering packages tabs on mobile
      const pkgTabButtons = [
        document.getElementById('tab-silver'),
        document.getElementById('tab-gold'),
        document.getElementById('tab-royal')
      ].filter(btn => btn !== null);
      
      if (pkgTabButtons.length > 0) {
        let currentPkgIndex = 0;
        let pkgInterval = setInterval(() => {
          currentPkgIndex = (currentPkgIndex + 1) % pkgTabButtons.length;
          pkgTabButtons[currentPkgIndex].click();
        }, 3000);
        
        pkgTabButtons.forEach((btn, index) => {
          btn.addEventListener('click', () => {
            clearInterval(pkgInterval);
            currentPkgIndex = index;
          });
        });
      }
    });
  </script>

  <!-- Bootstrap 5 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Admin Verification Script -->
  <script src="{{ asset('js/admin-trigger.js') }}?v=1.0" data-csrf="{{ csrf_token() }}"></script>

</body>
</html>
