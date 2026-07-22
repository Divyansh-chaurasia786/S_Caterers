<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>S. Caterers by Amit Agrawal — Pure Vegetarian Catering, Lucknow</title>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="S. Caterers by Amit Agrawal offers premium, 100% pure vegetarian catering services in Lucknow. Specializing in weddings, corporate events, and Satvik/Jain menus.">
  <meta name="keywords" content="S Caterers, Amit Agrawal, Vegetarian Catering Lucknow, Wedding Caterer Lucknow, Jain Catering, Satvik Food">
  <meta name="author" content="Amit Agrawal">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
          <li class="nav-item"><a class="nav-link nav-link-custom" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('about') }}">About Us</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="#">Contact Us</a></li>
        </ul>
        <div class="d-flex mt-2 mt-lg-0">
          <a href="#services" class="btn-gold">Explore Packages</a>
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
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <div class="hero-content ps-4 pe-4 ps-lg-5 pe-lg-5 text-start">
          <div class="mb-3">
            <span class="eyebrow"><i class="fa-solid fa-spa me-1"></i> A Legacy of Taste</span>
          </div>
            <div class="font-cursive mt-2">Welcome to</div>
            <h1 class="mt-1">S. CATERERS<br><span class="highlight">by Amit Agrawal</span></h1>
            <p class="lead-copy">Crafting culinary masterpieces and premium dining experiences for your most treasured celebrations. From traditional Lakhnavi delicacies to global gourmet courses, we cater with pure love, hygiene, and unmatched devotion.</p>
            <div class="d-flex gap-3 flex-wrap">
              <a href="#services" class="btn-gold">Explore Menus</a>
              <a href="https://wa.me/9198xxxxxx10" target="_blank" class="btn-outline-wine"><i class="fa-brands fa-whatsapp me-1"></i> WhatsApp Us</a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 hero-image-col">
          <!-- Hero Image -->
          <div class="hero-image-wrap">
            <img src="https://picsum.photos/seed/cateringhero/900/700" alt="S. Caterers Wedding Dining Setup">
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
      <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <div class="promise-card">
            <div class="icon-wrap">
              <i class="fa-solid fa-leaf"></i>
            </div>
            <div>
              <div class="title">Our Promise</div>
              <div class="desc">100% Pure Veg Kitchen</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="promise-card">
            <div class="icon-wrap">
              <i class="fa-solid fa-spa"></i>
            </div>
            <div>
              <div class="title">Satvik Options</div>
              <div class="desc">Jain Menus on Request</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="promise-card">
            <div class="icon-wrap">
              <i class="fa-solid fa-award"></i>
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

      <div class="row g-4">
        <!-- Awadhi Specialties -->
        <div class="col-md-6 col-lg-3">
          <div class="specialty-card">
            <div class="specialty-img-wrap">
              <img src="https://images.unsplash.com/photo-1633945274405-b6c8069047b0?q=80&w=600&auto=format&fit=cover" alt="Awadhi Biryani">
            </div>
            <div class="specialty-overlay">
              <h3 class="specialty-title">Awadhi Dum Biryani</h3>
              <p class="specialty-desc">Aromatic slow-cooked basmati rice layered with garden-fresh seasonal vegetables, pure saffron strands, and hand-ground spices.</p>
            </div>
          </div>
        </div>

        <!-- Shahi Paneer Korma -->
        <div class="col-md-6 col-lg-3">
          <div class="specialty-card">
            <div class="specialty-img-wrap">
              <img src="https://images.unsplash.com/photo-1601050690597-df056fb4ce78?q=80&w=600&auto=format&fit=cover" alt="Shahi Korma">
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
              <img src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?q=80&w=600&auto=format&fit=cover" alt="Live Stations">
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
              <img src="https://images.unsplash.com/photo-1587314168485-3236d6710814?q=80&w=600&auto=format&fit=cover" alt="Royal Desserts">
            </div>
            <div class="specialty-overlay">
              <h3 class="specialty-title">Royal Dessert Lounge</h3>
              <p class="specialty-desc">A premium sweet escape featuring fresh silver-leaf Rabdi, warm saffron Jalebis, and custom artisanal mousse jars.</p>
            </div>
          </div>
        </div>
      </div>
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

      <div class="row g-4 justify-content-center">
        <!-- Silver Package -->
        <div class="col-md-6 col-lg-4">
          <div class="package-card" id="pkg-silver">
            <div class="pkg-icon">
              <i class="fa-solid fa-plate-wheat"></i>
            </div>
            <h3 class="pkg-title">Silver Package</h3>
            <p class="pkg-desc">An elegant arrangement of classic Lakhnavi and North Indian vegetarian specialties. Perfect for family gatherings, traditional rituals, and intimate celebrations looking for authentic heritage taste.</p>
          </div>
        </div>

        <!-- Gold Package -->
        <div class="col-md-6 col-lg-4">
          <div class="package-card" id="pkg-gold">
            <div class="pkg-icon">
              <i class="fa-solid fa-bowl-food"></i>
            </div>
            <h3 class="pkg-title">Gold Package</h3>
            <p class="pkg-desc">Our highly popular signature setup. Blends premium traditional courses with interactive street food chaat counters and modern dessert platters, offering a rich variety for grand receptions.</p>
          </div>
        </div>

        <!-- Royal Package -->
        <div class="col-md-6 col-lg-4">
          <div class="package-card royal-package" id="pkg-royal">
            <div class="pkg-icon" style="color: var(--gold-bright);">
              <i class="fa-solid fa-crown"></i>
            </div>
            <h3 class="pkg-title">Royal Package</h3>
            <p class="pkg-desc">A luxurious culinary banquet experience. Features live international counters (Italian, Thai, Continental), bespoke presentation displays, boutique serving staff, and custom menus crafted by our head chef.</p>
          </div>
        </div>
      </div>

      <div class="text-center mt-5">
        <a href="#" class="btn-outline-wine">Know More</a>
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

      <!-- Wedding Catering Row (Image Left, Text Right) -->
      <div class="row align-items-center g-5 event-row">
        <div class="col-lg-6 text-center">
          <div class="event-frame-wrap">
            <div class="event-frame-inner">
              <img src="https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=600&auto=format&fit=cover" alt="Weddings">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="event-content-col">
            <span class="event-tag-pill">Grand Scale</span>
            <h3 class="event-title">Destination Weddings</h3>
            <p class="event-desc">Experience a wedding banquet that mirrors royal dining traditions. From gorgeous multi-themed food installations and live chaat galleries to boutique family table service, we ensure your wedding feast is nothing short of legendary.</p>
            <a href="https://wa.me/9198xxxxxx10" target="_blank" class="btn-outline-wine"><i class="fa-brands fa-whatsapp me-1"></i> Plan Wedding Menu</a>
          </div>
        </div>
      </div>

      <!-- Corporate Galas Row (Image Right, Text Left) -->
      <div class="row align-items-center g-5 event-row flex-lg-row-reverse">
        <div class="col-lg-6 text-center">
          <div class="event-frame-wrap">
            <div class="event-frame-inner">
              <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=600&auto=format&fit=cover" alt="Corporate Galas">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="event-content-col">
            <span class="event-tag-pill">Corporate</span>
            <h3 class="event-title">Corporate Galas</h3>
            <p class="event-desc">Make a statement with professional plated luncheons, elegant buffet stations, and formal corporate dinners. We specialize in high-end corporate gala catering, ensuring flawless service, hygiene, and punctual execution.</p>
            <a href="https://wa.me/9198xxxxxx10" target="_blank" class="btn-outline-wine"><i class="fa-brands fa-whatsapp me-1"></i> Plan Corporate Event</a>
          </div>
        </div>
      </div>

      <!-- Sacred Pujas Row (Image Left, Text Right) -->
      <div class="row align-items-center g-5 event-row">
        <div class="col-lg-6 text-center">
          <div class="event-frame-wrap">
            <div class="event-frame-inner">
              <img src="https://images.unsplash.com/photo-1561489396-888724a1543d?q=80&w=600&auto=format&fit=cover" alt="Sacred Pujas">
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="event-content-col">
            <span class="event-tag-pill">100% Satvik</span>
            <h3 class="event-title">Traditional Pujas & Griha Pravesh</h3>
            <p class="event-desc">Catering crafted with absolute purity and spiritual devotion. We prepare dedicated Satvik menus with zero onion, garlic, or root vegetables on request, served in completely sanitized pure vegetarian setups.</p>
            <a href="https://wa.me/9198xxxxxx10" target="_blank" class="btn-outline-wine"><i class="fa-brands fa-whatsapp me-1"></i> Plan Puja Menu</a>
          </div>
        </div>
      </div>
    </div>
  </section>  <div class="jali-divider dark" id="divider-2"></div>

  <!-- ================= ABOUT US CTA BANNER ================= -->
  <section class="section-pad text-center" id="about-cta-section" style="background: var(--ivory-dim); border-top: 1px solid var(--gold-line); border-bottom: 1px solid var(--gold-line);">
    <div class="container py-3">
      <div style="max-width: 800px; margin: 0 auto;">
        <span class="eyebrow">Our Legacy</span>
        <h2 class="section-title mt-2 mb-3">Serving Exquisite Tastes Since <span class="accent">1995</span></h2>
        <p class="lead-copy mx-auto" style="font-size: 1.05rem; line-height: 1.8; color: var(--ink-soft); max-width: 650px;">
          What started as a beloved local kitchen in Lucknow has grown into a statewide premium service. Discover our 30-year journey of culinary devotion, our strict 100% vegetarian sanitation standards, and our recent expansion to serve grand celebrations across the entire state of Uttar Pradesh.
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

      <div class="row g-4">
        <!-- Photo 1 -->
        <div class="col-sm-6 col-lg-3">
          <div class="gallery-card">
            <img src="https://picsum.photos/seed/gallery1/500/500" alt="Catering Presentation 1">
            <div class="gallery-overlay">
              <div class="gallery-title-card">Exquisite Plating</div>
            </div>
          </div>
        </div>

        <!-- Photo 2 -->
        <div class="col-sm-6 col-lg-3">
          <div class="gallery-card">
            <img src="https://picsum.photos/seed/gallery2/500/500" alt="Catering Presentation 2">
            <div class="gallery-overlay">
              <div class="gallery-title-card">Lakhnavi Street Chaat</div>
            </div>
          </div>
        </div>

        <!-- Photo 3 -->
        <div class="col-sm-6 col-lg-3">
          <div class="gallery-card">
            <img src="https://picsum.photos/seed/gallery3/500/500" alt="Catering Presentation 3">
            <div class="gallery-overlay">
              <div class="gallery-title-card">Royal Buffet Decor</div>
            </div>
          </div>
        </div>

        <!-- Photo 4 -->
        <div class="col-sm-6 col-lg-3">
          <div class="gallery-card">
            <img src="https://picsum.photos/seed/gallery4/500/500" alt="Catering Presentation 4">
            <div class="gallery-overlay">
              <div class="gallery-title-card">Dessert Banquet Display</div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-5">
        <a href="#" class="btn-outline-wine">View More</a>
      </div>
    </div>
  </section>

  <!-- ================= FOOTER ================= -->
  <footer id="footer-section">
    <div class="container">
      <div class="row g-5">
        <!-- Logo Column -->
        <div class="col-md-6 col-lg-4">
          <img src="{{ asset('images/logo.png') }}" alt="S. Caterers Logo" class="footer-logo">
          <p style="font-size: 0.88rem; line-height: 1.6; max-width: 320px;">Premium 100% vegetarian catering services by Amit Agrawal, serving royal taste and unmatched hospitality across Lucknow and the entire state of Uttar Pradesh (UP) since 1995.</p>
          <div class="footer-social mt-4">
            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
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
        <div class="col-md-6 col-lg-4">
          <h6>Contact Us</h6>
          <p style="font-size: 0.88rem; margin-bottom: 0.8rem;"><i class="fa-solid fa-location-dot me-2" style="color: var(--gold-bright);"></i> Sitapur Road, Lucknow, Uttar Pradesh</p>
          <p style="font-size: 0.88rem; margin-bottom: 0.8rem;"><i class="fa-solid fa-phone me-2" style="color: var(--gold-bright);"></i> +91 98xxxxxx10</p>
          <p style="font-size: 0.88rem;"><i class="fa-solid fa-envelope me-2" style="color: var(--gold-bright);"></i> info@scatererslucknow.in</p>
        </div>
      </div>

      <div class="footer-bottom d-flex flex-wrap justify-content-between">
        <span>&copy; 2026 S. Caterers by Amit Agrawal. All rights reserved.</span>
        <span>Designed with devotion for exquisite tastes.</span>
      </div>
    </div>
  </footer>

  <!-- Bootstrap 5 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
