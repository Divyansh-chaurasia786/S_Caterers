<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | S. Caterers Lucknow & Uttar Pradesh</title>
  <!-- SEO Meta Tags -->
  <meta name="description" content="Discover S. Caterers' 28-year legacy of luxury vegetarian catering under Amit Agarwal. Serving Lucknow and all of Uttar Pradesh with pure Satvik and Jain dining.">
  <meta name="author" content="Amit Agarwal">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo.png') }}">
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=6.1">
</head>
<body>

  <!-- ================= HEADER (NAVBAR) ================= -->
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
          <li class="nav-item"><a class="nav-link nav-link-custom active" href="{{ route('about') }}">About Us</a></li>
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

  <!-- ================= ABOUT HERO BANNER ================= -->
  <section class="about-hero position-relative">
    <div class="hero-text-glow"></div>
    <div class="container text-center position-relative" style="z-index: 5;">
      <span class="eyebrow text-uppercase" style="letter-spacing: 0.2em; font-size: 0.85rem; color: var(--gold-bright);">Our Heritage & Devotion</span>
      <h1 class="mt-2 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 900; font-size: 3.2rem; color: var(--ivory);">Our Story & <span class="highlight" style="color: var(--gold-bright);">Philosophy</span></h1>
      <p class="lead-copy mx-auto" style="max-width: 600px; font-size: 1.15rem; color: var(--ivory-dim); font-style: italic;">
        "Crafting flawless vegetarian banquets with absolute purity, Lakhnavi heritage flavor, and royal hospitality."
      </p>
    </div>
  </section>

  <div class="jali-divider" id="divider-hero"></div>

  <!-- ================= THE FOUNDER'S JOURNEY ================= -->
  <section class="section-pad bg-white">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-12 col-lg-7">
          <span class="eyebrow">The Visionary</span>
          <h2 class="section-title mt-2 mb-4">Letter from the <span class="accent">Founder</span></h2>
          <p class="event-desc" style="font-size: 1.05rem; line-height: 1.8; color: var(--ink-soft);">
            Welcome to S. Caterers. When I established this company on Sitapur Road in 1998, my goal was simple yet unwavering: to offer the families of Lucknow a catering experience that is as pure as it is delicious.
          </p>
          <p class="event-desc" style="font-size: 1.05rem; line-height: 1.8; color: var(--ink-soft);">
            For us, catering is not a transaction; it is a sacred act of hospitality. S. Caterers stands as a pledge to absolute vegetarian integrity. We have built custom segregated kitchens, sourced local fresh farm products, and trained our servers to serve with unmatched warmth and respect.
          </p>
          <p class="event-desc" style="font-size: 1.05rem; line-height: 1.8; color: var(--ink-soft); font-weight: 500;">
            Today, as we open our doors to serve grand destination weddings and celebrations across the entire state of Uttar Pradesh, our devotion remains the same.
          </p>
          <div class="mt-4 pt-2">
            <h4 class="mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; color: var(--wine);">Amit Agarwal</h4>
            <span style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--gold); font-weight: 600;">Founder & CEO</span>
          </div>
        </div>
        <div class="col-12 col-lg-5 text-center">
          <div class="event-frame-wrap" style="width: 330px; height: 440px;">
            <div class="event-frame-inner">
              <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?q=80&w=600&auto=format&fit=cover" alt="Amit Agarwal">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="jali-divider dark" id="divider-founder"></div>

  <!-- ================= PILLARS OF PURITY ================= -->
  <section class="section-pad pillars-section" style="background: var(--ivory);">
    <div class="container">
      <div class="section-title-wrap text-center mb-5">
        <span class="eyebrow">Why Choose Us</span>
        <h2 class="section-title">Our Pillars of <span class="accent">Purity</span></h2>
      </div>

      <div class="row g-4 justify-content-center pillars-slider">
        <!-- Pillar 1 -->
        <div class="col-md-4">
          <div class="package-card pillar-card" style="padding: 2.5rem 2rem;">
            <div class="pkg-icon" style="font-size: 2.2rem; color: var(--wine); margin-bottom: 1.5rem;">
              <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h3 class="pkg-title" style="font-size: 1.3rem; margin-bottom: 1rem;">100% Segregated Kitchens</h3>
            <p class="pkg-desc" style="font-size: 0.92rem; line-height: 1.6;">We guarantee absolute spiritual purity. Our modern facility is strictly vegetarian, meaning no meat, seafood, or egg products ever cross our thresholds.</p>
          </div>
        </div>

        <!-- Pillar 2 -->
        <div class="col-md-4">
          <div class="package-card pillar-card" style="padding: 2.5rem 2rem;">
            <div class="pkg-icon" style="font-size: 2.2rem; color: var(--wine); margin-bottom: 1.5rem;">
              <i class="fa-solid fa-leaf"></i>
            </div>
            <h3 class="pkg-title" style="font-size: 1.3rem; margin-bottom: 1rem;">Satvik & Jain Integrity</h3>
            <p class="pkg-desc" style="font-size: 0.92rem; line-height: 1.6;">We accommodate orthodox preferences with dedicated spice bins, separate storage, and dedicated utensils for onion-free and garlic-free prep lines.</p>
          </div>
        </div>

        <!-- Pillar 3 -->
        <div class="col-md-4">
          <div class="package-card pillar-card" style="padding: 2.5rem 2rem;">
            <div class="pkg-icon" style="font-size: 2.2rem; color: var(--wine); margin-bottom: 1.5rem;">
              <i class="fa-solid fa-pepper-hot"></i>
            </div>
            <h3 class="pkg-title" style="font-size: 1.3rem; margin-bottom: 1rem;">Premium Sourcing</h3>
            <p class="pkg-desc" style="font-size: 0.92rem; line-height: 1.6;">Only farm-fresh seasonal greens, rich whole grains, custom-pressed oils, and premium quality dairy fats are used to cook our authentic dishes.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="jali-divider" id="divider-pillars"></div>

  <!-- ================= JOURNEY: 3D PAGE-FLIP BOOK ================= -->
  <section class="section-pad journey-section" id="journey-section" style="background: #FDFAF4; overflow: hidden;">
    <div class="container">
      <div class="section-title-wrap text-center mb-4">
        <span class="eyebrow">Our Milestones</span>
        <h2 class="section-title">The Journey of <span class="accent">S. Caterers</span></h2>
      </div>

      <!-- ─── DESKTOP & MOBILE: 3D Heritage Book Page-Flip ─── -->
      <div class="journey-book-wrapper">

        <!-- Timeline Year Nav with Prev/Next arrows -->
        <div class="book-timeline-nav" id="book-timeline-nav">
          <button class="book-arrow-btn" id="book-prev" aria-label="Previous Era">
            <i class="fas fa-chevron-left"></i>
          </button>
          <div class="book-years-track" id="book-years-track">
            <span class="book-year active" data-page="0">1998</span>
            <span class="book-year" data-page="1">2000</span>
            <span class="book-year" data-page="2">2001</span>
            <span class="book-year" data-page="3">2005</span>
            <span class="book-year" data-page="4">2008</span>
            <span class="book-year" data-page="5">2011</span>
            <span class="book-year" data-page="6">2014</span>
            <span class="book-year" data-page="7">2017</span>
            <span class="book-year" data-page="8">2020</span>
            <span class="book-year" data-page="9">2022</span>
            <span class="book-year" data-page="10">2024</span>
            <span class="book-year" data-page="11">2026</span>
          </div>
          <button class="book-arrow-btn" id="book-next" aria-label="Next Era">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>

        <!-- 3D Book Container -->
        <div class="milestones-book-container" id="milestones-book">
          <!-- Spine shadow in center -->
          <div class="book-spine"></div>

          <!-- LEFT PAGE: Year + Description -->
          <div class="book-page book-left" id="book-left-page">
            <div class="book-page-inner">
              <div class="book-page-content">
                <div class="book-chapter-label">The Story</div>
                <div class="book-year-display" id="book-year-display">1998</div>
                <h3 class="book-title" id="book-title">The Seed of a Dream</h3>
                <p class="book-desc" id="book-desc">Amit Agarwal establishes S. Caterers with a humble kitchen, deep local ties, and a burning passion to serve authentic Lakhnavi vegetarian delicacies to family gatherings and social circles.</p>
                <div class="book-page-number">Page 1 / 12</div>
              </div>
            </div>
          </div>

          <!-- RIGHT PAGE: Milestone Photo -->
          <div class="book-page book-right" id="book-right-page">
            <div class="book-page-inner">
              <div class="book-img-wrap">
                <img id="book-img" src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=600&h=500&q=80" alt="Milestone 1998">
                <div class="book-img-caption" id="book-img-caption">Est. 1998 — Lucknow</div>
              </div>
            </div>
          </div>

          <!-- Flip overlay panel (animates over right page) -->
          <div class="book-flip-panel" id="book-flip-panel">
            <div class="book-flip-front">
              <div class="book-img-wrap">
                <img id="book-flip-img" src="" alt="">
              </div>
            </div>
            <div class="book-flip-back">
              <div class="book-page-content">
                <div class="book-chapter-label">The Story</div>
                <div class="book-year-display" id="book-flip-year"></div>
                <h3 class="book-title" id="book-flip-title"></h3>
                <p class="book-desc" id="book-flip-desc"></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ─── MOBILE: Classic slide (hidden) ─── -->
      <div class="d-none">
        <!-- Golden Thread Horizontal Timeline Navigation Bar -->
        <div class="timeline-nav-container">
          <div class="timeline-thread"></div>
          <div class="timeline-nodes-wrap">
            <div class="timeline-node-item active" data-slide="0"><span class="year-label">1998</span></div>
            <div class="timeline-node-item" data-slide="1"><span class="year-label">2000</span></div>
            <div class="timeline-node-item" data-slide="2"><span class="year-label">2001</span></div>
            <div class="timeline-node-item" data-slide="3"><span class="year-label">2005</span></div>
            <div class="timeline-node-item" data-slide="4"><span class="year-label">2008</span></div>
            <div class="timeline-node-item" data-slide="5"><span class="year-label">2011</span></div>
            <div class="timeline-node-item" data-slide="6"><span class="year-label">2014</span></div>
            <div class="timeline-node-item" data-slide="7"><span class="year-label">2017</span></div>
            <div class="timeline-node-item" data-slide="8"><span class="year-label">2020</span></div>
            <div class="timeline-node-item" data-slide="9"><span class="year-label">2022</span></div>
            <div class="timeline-node-item" data-slide="10"><span class="year-label">2024</span></div>
            <div class="timeline-node-item" data-slide="11"><span class="year-label">2026</span></div>
          </div>
        </div>

        <div class="journey-slider-container">
        
        <!-- Slide 1 -->
        <div class="journey-slide active">
          <div class="row align-items-center g-5">
            <div class="col-lg-7">
              <div class="journey-text-panel">
                <div class="journey-year-badge">1998</div>
                <h3 class="journey-title">The Seed of a Dream</h3>
                <p class="journey-desc">Amit Agarwal establishes S. Caterers with a humble kitchen, deep local ties, and a burning passion to serve authentic Lakhnavi vegetarian delicacies to family gatherings and social circles.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=500&h=600&q=80" alt="Milestone 1">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="journey-slide">
          <div class="row align-items-center g-5">
            <div class="col-lg-7">
              <div class="journey-text-panel">
                <div class="journey-year-badge">1998</div>
                <h3 class="journey-title">First Grand Wedding</h3>
                <p class="journey-desc">S. Caterers successfully caters their first major wedding of 500+ guests. The flawless presentation and exquisite food taste set a new benchmark for wedding catering in Lucknow.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=500&h=600&q=80" alt="Milestone 2">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="journey-slide">
          <div class="row align-items-center g-5">
            <div class="col-lg-7">
              <div class="journey-text-panel">
                <div class="journey-year-badge">2001</div>
                <h3 class="journey-title">The Chaat Revolution</h3>
                <p class="journey-desc">We introduce live Lakhnavi street food and premium chaat counters. Offering a gourmet spin on traditional street food, these live displays quickly became a signature feature at every event.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://images.unsplash.com/photo-1601050690597-df056fb49785?auto=format&fit=crop&w=500&h=600&q=80" alt="Milestone 3">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="journey-slide">
          <div class="row align-items-center g-5">
            <div class="col-lg-7">
              <div class="journey-text-panel">
                <div class="journey-year-badge">2005</div>
                <h3 class="journey-title">100% Pure Veg Commitment</h3>
                <p class="journey-desc">Making a landmark decision, S. Caterers commits to being a strictly vegetarian company. We pledge to run a completely segregated veg-only kitchen with no meat and no eggs ever.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=500&h=600&q=80" alt="Milestone 4">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 5 -->
        <div class="journey-slide">
          <div class="row align-items-center g-5">
            <div class="col-lg-7">
              <div class="journey-text-panel">
                <div class="journey-year-badge">2008</div>
                <h3 class="journey-title">Expanding to Sitapur Road</h3>
                <p class="journey-desc">To support growing demand, Amit Agarwal builds a new, modern central kitchen on Sitapur Road, Lucknow. This facility houses advanced sanitary machinery and dedicated prep bays.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=500&h=600&q=80" alt="Milestone 5">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 6 -->
        <div class="journey-slide">
          <div class="row align-items-center g-5">
            <div class="col-lg-7">
              <div class="journey-text-panel">
                <div class="journey-year-badge">2011</div>
                <h3 class="journey-title">Satvik & Jain Specialization</h3>
                <p class="journey-desc">We form a highly specialized culinary division dedicated to onion-free, garlic-free, and strict Satvik preparations, guaranteeing culinary satisfaction for all community events.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://images.unsplash.com/photo-1565557623262-b51c2513a641?auto=format&fit=crop&w=500&h=600&q=80" alt="Milestone 6">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 7 -->
        <div class="journey-slide">
          <div class="row align-items-center g-5">
            <div class="col-lg-7">
              <div class="journey-text-panel">
                <div class="journey-year-badge">2014</div>
                <h3 class="journey-title">Introducing Global Cuisines</h3>
                <p class="journey-desc">S. Caterers expands the menu by introducing authentic Italian, Continental, Chinese, and Thai menus, hiring specialty chefs to maintain taste authenticity for premium menus.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?auto=format&fit=crop&w=500&h=600&q=80" alt="Milestone 7">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 8 -->
        <div class="journey-slide">
          <div class="row align-items-center g-5">
            <div class="col-lg-7">
              <div class="journey-text-panel">
                <div class="journey-year-badge">2017</div>
                <h3 class="journey-title">The Corporate Leap</h3>
                <p class="journey-desc">Expanding corporate operations, we cater high-profile summits, industrial inaugurations, and elite business events, establishing a reputation for speed, safety, and scale.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=500&h=600&q=80" alt="Milestone 8">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 9 -->
        <div class="journey-slide">
          <div class="row align-items-center g-5">
            <div class="col-lg-7">
              <div class="journey-text-panel">
                <div class="journey-year-badge">2020</div>
                <h3 class="journey-title">Safety and Adaptation</h3>
                <p class="journey-desc">During global health challenges, S. Caterers immediately shifts to contact-free catering and 5-star medical sanitation guidelines, demonstrating corporate agility and client care.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=500&h=600&q=80" alt="Milestone 9">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 10 -->
        <div class="journey-slide">
          <div class="row align-items-center g-5">
            <div class="col-lg-7">
              <div class="journey-text-panel">
                <div class="journey-year-badge">2022</div>
                <h3 class="journey-title">Modern Culinary Plating</h3>
                <p class="journey-desc">We introduce boutique catering aesthetics, featuring miniature appetizers, molecular gastronomy elements, and high-fashion food presentation that mirrors international dining styles.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=500&h=600&q=80" alt="Milestone 10">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 11 -->
        <div class="journey-slide">
          <div class="row align-items-center g-5">
            <div class="col-lg-7">
              <div class="journey-text-panel">
                <div class="journey-year-badge">2024</div>
                <h3 class="journey-title">10,000+ Events Served</h3>
                <p class="journey-desc">We hit a monumental milestone of serving over 10,000 corporate, wedding, and social events since our inception, cementing our place in our community's celebrations.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=500&h=600&q=80" alt="Milestone 11">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 12 -->
        <div class="journey-slide">
          <div class="row align-items-center g-5">
            <div class="col-lg-7">
              <div class="journey-text-panel">
                <div class="journey-year-badge">2026</div>
                <h3 class="journey-title">Expanding Horizons: Serving All of Uttar Pradesh</h3>
                <p class="journey-desc">Officially expanding our horizons beyond Lucknow, S. Caterers now opens booking operations to cater premium weddings, corporate summits, and grand galas across the entire state of Uttar Pradesh (UP).</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://images.unsplash.com/photo-1587314168485-3236d6710814?auto=format&fit=crop&w=500&h=600&q=80" alt="Milestone 12">
                </div>
              </div>
            </div>
          </div>
        </div>

        </div><!-- /.journey-slider-container -->

        <!-- Mobile Slider Controls -->
        <div class="journey-controls">
          <button class="slider-arrow" id="journey-prev" aria-label="Previous Slide">
            <i class="fas fa-chevron-left"></i>
          </button>
          <div class="journey-dots" id="journey-dots-container"></div>
          <button class="slider-arrow" id="journey-next" aria-label="Next Slide">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div><!-- /.d-lg-none -->

    </div>
  </section>

  <div class="jali-divider dark" id="divider-journey"></div>

  <!-- ================= GALLERY SECTION ================= -->
  <section class="section-pad bg-white" id="about-gallery" style="border-bottom: 1px solid var(--gold-line);">
    <div class="container">
      <div class="section-title-wrap text-center mb-5">
        <span class="eyebrow">GALLERY</span>
        <h2 class="section-title">Our Kitchen &amp; <span class="accent">Service Craft</span></h2>
        <p class="text-muted mx-auto" style="max-width: 600px; margin-top: 0.5rem;">A visual journey behind the scenes of our premium catering operations, high-end presentation standards, and pristine kitchens.</p>
      </div>

      <div class="row g-4 mobile-swipe-deck" id="about-gallery-swipe-deck">
        <!-- Gallery Item 1 -->
        <div class="col-sm-6 col-lg-3">
          <div class="gallery-card">
            <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=800&q=80" alt="Pristine Kitchen Preparation" loading="lazy">
            <div class="gallery-overlay">
              <i class="fa-solid fa-camera"></i>
              <span>Pristine Kitchen Setup</span>
            </div>
          </div>
        </div>
        <!-- Gallery Item 2 -->
        <div class="col-sm-6 col-lg-3">
          <div class="gallery-card">
            <img src="https://images.unsplash.com/photo-1555244162-803834f70033?auto=format&fit=crop&w=800&q=80" alt="Exquisite Plating" loading="lazy">
            <div class="gallery-overlay">
              <i class="fa-solid fa-camera"></i>
              <span>Exquisite Plating Art</span>
            </div>
          </div>
        </div>
        <!-- Gallery Item 3 -->
        <div class="col-sm-6 col-lg-3">
          <div class="gallery-card">
            <img src="https://images.unsplash.com/photo-1532635249-90c128818ec6?auto=format&fit=crop&w=800&q=80" alt="Premium Table Setup" loading="lazy">
            <div class="gallery-overlay">
              <i class="fa-solid fa-camera"></i>
              <span>Premium Table Setup</span>
            </div>
          </div>
        </div>
        <!-- Gallery Item 4 -->
        <div class="col-sm-6 col-lg-3">
          <div class="gallery-card">
            <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=800&q=80" alt="Professional Butler Service" loading="lazy">
            <div class="gallery-overlay">
              <i class="fa-solid fa-camera"></i>
              <span>Fine-Dine Experience</span>
            </div>
          </div>
        </div>
      </div>
      <!-- Dots on Mobile -->
      <div class="carousel-dots d-md-none" id="dots-about-gallery" style="margin-top: 15px;"></div>
    </div>
  </section>

  <div class="jali-divider" id="divider-about-gallery"></div>

  <!-- ================= ABOUT FAQS ================= -->
  <section class="section-pad bg-white" id="faqs-section">
    <div class="container">
      <div class="section-title-wrap text-center mb-5">
        <span class="eyebrow">Clarifications</span>
        <h2 class="section-title">Frequently Asked <span class="accent">Questions</span></h2>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="faq-accordion">
            
            <!-- FAQ 1 -->
            <div class="faq-item">
              <button class="faq-trigger d-flex justify-content-between align-items-center w-100 text-start border-0 bg-transparent py-4">
                <span>Do you cater outside Lucknow?</span>
                <i class="fa-solid fa-chevron-down faq-arrow"></i>
              </button>
              <div class="faq-panel">
                <div class="pb-4">
                  <p class="mb-0 text-muted">Yes, absolutely! While Lucknow remains our proud headquarters, S. Caterers is delighted to cater destination weddings, corporate galas, and social events across the entire state of Uttar Pradesh (UP).</p>
                </div>
              </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item">
              <button class="faq-trigger d-flex justify-content-between align-items-center w-100 text-start border-0 bg-transparent py-4">
                <span>How do you guarantee the strict purity of Jain and Satvik meals?</span>
                <i class="fa-solid fa-chevron-down faq-arrow"></i>
              </button>
              <div class="faq-panel">
                <div class="pb-4">
                  <p class="mb-0 text-muted">We maintain dedicated cooking stations and independent cookware for Jain menus that are completely segregated from other operations. We also use isolated spice bins and strictly vet our suppliers to ensure zero contact with onion, garlic, or root vegetables.</p>
                </div>
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item">
              <button class="faq-trigger d-flex justify-content-between align-items-center w-100 text-start border-0 bg-transparent py-4">
                <span>What are your minimum booking sizes and packages?</span>
                <i class="fa-solid fa-chevron-down faq-arrow"></i>
              </button>
              <div class="faq-panel">
                <div class="pb-4">
                  <p class="mb-0 text-muted">We cater gatherings ranging from small intimate affairs of 50 guests to massive wedding receptions of 2,000+ attendees. Our packages (Silver, Gold, and Royal) can be fully customized according to your guest count and cuisine preferences.</p>
                </div>
              </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item">
              <button class="faq-trigger d-flex justify-content-between align-items-center w-100 text-start border-0 bg-transparent py-4">
                <span>Can we customize the server uniforms and buffet layouts?</span>
                <i class="fa-solid fa-chevron-down faq-arrow"></i>
              </button>
              <div class="faq-panel">
                <div class="pb-4">
                  <p class="mb-0 text-muted">Yes, our boutique wing is built exactly for this! We coordinate themed layout setups (royal Lakhnavi, gold luxury, rustic fusion) and provide boutique uniform selections for our servers to match your overall event aesthetic.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="jali-divider" id="divider-faq"></div>

  <!-- ================= ABOUT CTA BANNER ================= -->
  <section class="section-pad text-center plan-celebration-section" style="background: var(--ivory-dim); border-top: 1px solid var(--gold-line); border-bottom: 1px solid var(--gold-line);">
    <div class="container">
      <div style="max-width: 700px; margin: 0 auto;">
        <span class="eyebrow" style="color: var(--wine);">Plan Your Celebration</span>
        <h2 class="section-title mt-2 mb-3" style="color: var(--charcoal);">Let's Craft an Exquisite Feast Together</h2>
        <p class="mx-auto mb-4" style="max-width: 550px; font-size: 1.02rem; line-height: 1.8; color: var(--ink-soft);">
          Reach out to Amit Agarwal's boutique planning wing to customize your pure-veg menu and reserve your catering date anywhere in Uttar Pradesh.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="https://wa.me/919839077960?text=Hello%20S.%20Caterers!%20I%20read%20about%20your%2028-year%20legacy%20and%20would%20like%20to%20discuss%20catering%20for%20an%20upcoming%20event." target="_blank" class="btn-gold"><i class="fa-brands fa-whatsapp me-2"></i> WhatsApp Us Now</a>
          <a href="{{ route('home') }}" class="btn-outline-wine">Back to Homepage</a>
        </div>
      </div>
    </div>
  </section>

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
          <a href="{{ route('home') }}#gallery-section">Gallery</a>
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

  <!-- Bootstrap 5 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Accordion, Mobile Journey Slider, and Desktop Book-Flip scripts -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {

      /* =========================================================
         1. FAQ Accordion Logic
      ========================================================= */
      const triggers = document.querySelectorAll('.faq-trigger');
      triggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
          const item = trigger.parentElement;
          const panel = trigger.nextElementSibling;
          const isActive = item.classList.contains('active');
          document.querySelectorAll('.faq-item').forEach(i => {
            i.classList.remove('active');
            i.querySelector('.faq-panel').style.maxHeight = null;
          });
          if (!isActive) {
            item.classList.add('active');
            panel.style.maxHeight = panel.scrollHeight + 'px';
          }
        });
      });

      /* =========================================================
         2. MOBILE Journey Slider (unchanged)
      ========================================================= */
      const slides        = document.querySelectorAll('.journey-slide');
      const timelineNodes = document.querySelectorAll('.timeline-node-item');
      const dotsContainer = document.getElementById('journey-dots-container');
      const prevBtn       = document.getElementById('journey-prev');
      const nextBtn       = document.getElementById('journey-next');
      let currentSlide  = 0;
      let autoplayTimer;

      if (slides.length && dotsContainer) {
        slides.forEach((_, index) => {
          const dot = document.createElement('div');
          dot.classList.add('dot');
          if (index === 0) dot.classList.add('active');
          dot.addEventListener('click', () => { showSlide(index); resetAutoplay(); });
          dotsContainer.appendChild(dot);
        });

        const dots = document.querySelectorAll('.dot');

        function showSlide(index) {
          slides.forEach(s => s.classList.remove('active'));
          dots.forEach(d => d.classList.remove('active'));
          timelineNodes.forEach(n => n.classList.remove('active'));
          slides[index].classList.add('active');
          dots[index].classList.add('active');
          timelineNodes[index] && timelineNodes[index].classList.add('active');
          const activeNode = timelineNodes[index];
          const navCont = document.querySelector('.timeline-nav-container');
          if (navCont && activeNode) {
            navCont.scrollTo({
              left: activeNode.offsetLeft - navCont.offsetWidth / 2 + activeNode.offsetWidth / 2,
              behavior: 'smooth'
            });
          }
          currentSlide = index;
        }

        timelineNodes.forEach((node, index) => {
          node.addEventListener('click', () => { showSlide(index); resetAutoplay(); });
        });

        function nextSlide() { showSlide((currentSlide + 1) % slides.length); }
        function prevSlide() { showSlide((currentSlide - 1 + slides.length) % slides.length); }

        prevBtn && prevBtn.addEventListener('click', () => { prevSlide(); resetAutoplay(); });
        nextBtn && nextBtn.addEventListener('click', () => { nextSlide(); resetAutoplay(); });

        function startAutoplay() { autoplayTimer = setInterval(nextSlide, 3000); }
        function resetAutoplay() { clearInterval(autoplayTimer); startAutoplay(); }
        startAutoplay();
      }

      /* =========================================================
         3. DESKTOP 3D Heritage Book Page-Flip
      ========================================================= */
      const bookMilestones = [
        { year: '1998', title: 'The Seed of a Dream',            desc: 'Amit Agarwal establishes S. Caterers with a humble kitchen, deep local ties, and a burning passion to serve authentic Lakhnavi vegetarian delicacies to family gatherings and social circles.', img: 'https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=600&h=500&q=80', caption: 'Est. 1998 — Lucknow' },
        { year: '2000', title: 'First Grand Wedding',            desc: 'S. Caterers successfully caters their first major wedding of 500+ guests. The flawless presentation and exquisite food taste set a new benchmark for wedding catering in Lucknow.', img: 'https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=600&h=500&q=80', caption: '2000 — Grand Wedding' },
        { year: '2001', title: 'The Chaat Revolution',           desc: 'We introduce live Lakhnavi street food and premium chaat counters. Offering a gourmet spin on traditional street food, these live displays quickly became a signature feature at every event.', img: 'https://images.unsplash.com/photo-1601050690597-df056fb49785?auto=format&fit=crop&w=600&h=500&q=80', caption: '2001 — Chaat Revolution' },
        { year: '2005', title: '100% Pure Veg Commitment',       desc: 'Making a landmark decision, S. Caterers commits to being a strictly vegetarian company. We pledge to run a completely segregated veg-only kitchen with no meat and no eggs ever.', img: 'https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=600&h=500&q=80', caption: '2005 — Pure Veg Pledge' },
        { year: '2008', title: 'Expanding to Sitapur Road',      desc: 'To support growing demand, Amit Agarwal builds a new, modern central kitchen on Sitapur Road, Lucknow. This facility houses advanced sanitary machinery and dedicated prep bays.', img: 'https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=600&h=500&q=80', caption: '2008 — New Kitchen' },
        { year: '2011', title: 'Satvik & Jain Specialization',   desc: 'We form a highly specialized culinary division dedicated to onion-free, garlic-free, and strict Satvik preparations, guaranteeing culinary satisfaction for all community events.', img: 'https://images.unsplash.com/photo-1565557623262-b51c2513a641?auto=format&fit=crop&w=600&h=500&q=80', caption: '2011 — Satvik Division' },
        { year: '2014', title: 'Introducing Global Cuisines',    desc: 'S. Caterers expands the menu by introducing authentic Italian, Continental, Chinese, and Thai menus, hiring specialty chefs to maintain taste authenticity for premium menus.', img: 'https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?auto=format&fit=crop&w=600&h=500&q=80', caption: '2014 — Global Flavours' },
        { year: '2017', title: 'The Corporate Leap',             desc: 'Expanding corporate operations, we cater high-profile summits, industrial inaugurations, and elite business events, establishing a reputation for speed, safety, and scale.', img: 'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=600&h=500&q=80', caption: '2017 — Corporate Catering' },
        { year: '2020', title: 'Safety and Adaptation',          desc: 'During global health challenges, S. Caterers immediately shifts to contact-free catering and 5-star medical sanitation guidelines, demonstrating corporate agility and client care.', img: 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=600&h=500&q=80', caption: '2020 — Safe Catering' },
        { year: '2022', title: 'Modern Culinary Plating',        desc: 'We introduce boutique catering aesthetics, featuring miniature appetizers, molecular gastronomy elements, and high-fashion food presentation that mirrors international dining styles.', img: 'https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=600&h=500&q=80', caption: '2022 — Artisan Plating' },
        { year: '2024', title: '10,000+ Events Served',          desc: 'We hit a monumental milestone of serving over 10,000 corporate, wedding, and social events since our inception, cementing our place in our community\'s celebrations.', img: 'https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=600&h=500&q=80', caption: '2024 — 10K Events' },
        { year: '2026', title: 'Expanding Horizons: All of UP',  desc: 'Officially expanding our horizons beyond Lucknow, S. Caterers now opens booking operations to cater premium weddings, corporate summits, and grand galas across the entire state of Uttar Pradesh (UP).', img: 'https://images.unsplash.com/photo-1587314168485-3236d6710814?auto=format&fit=crop&w=600&h=500&q=80', caption: '2026 — Uttar Pradesh' }
      ];

      const book         = document.getElementById('milestones-book');
      const flipPanel    = document.getElementById('book-flip-panel');
      const bookYears    = document.querySelectorAll('.book-year');
      const bPrev        = document.getElementById('book-prev');
      const bNext        = document.getElementById('book-next');

      // Live content elements
      const elYear    = document.getElementById('book-year-display');
      const elTitle   = document.getElementById('book-title');
      const elDesc    = document.getElementById('book-desc');
      const elImg     = document.getElementById('book-img');
      const elCaption = document.getElementById('book-img-caption');
      const elPageNum = book ? book.querySelector('.book-page-number') : null;

      // Flip staging elements
      const elFlipImg   = document.getElementById('book-flip-img');
      const elFlipYear  = document.getElementById('book-flip-year');
      const elFlipTitle = document.getElementById('book-flip-title');
      const elFlipDesc  = document.getElementById('book-flip-desc');

      if (!book || !flipPanel) return; // desktop elements not rendered

      let bookPage   = 0;
      let isFlipping = false;

      function setBookContent(data, pageIndex) {
        elYear.textContent    = data.year;
        elTitle.textContent   = data.title;
        elDesc.textContent    = data.desc;
        elImg.src             = data.img;
        elImg.alt             = data.caption;
        elCaption.textContent = data.caption;
        if (elPageNum) elPageNum.textContent = 'Page ' + (pageIndex + 1) + ' / ' + bookMilestones.length;
      }

      function highlightYear(index) {
        bookYears.forEach(y => y.classList.remove('active'));
        const activeYear = bookYears[index];
        if (activeYear) {
          activeYear.classList.add('active');
          const track = document.getElementById('book-years-track');
          if (track) {
            track.scrollTo({
              left: activeYear.offsetLeft - track.offsetWidth / 2 + activeYear.offsetWidth / 2,
              behavior: 'smooth'
            });
          }
        }
      }

      function flipToPage(newIndex) {
        if (isFlipping || newIndex === bookPage) return;
        isFlipping = true;

        const next = bookMilestones[newIndex];
        const direction = newIndex > bookPage ? 1 : -1; // 1 = forward, -1 = back

        // Stage the flip panel with NEXT content (on back face = left-page text)
        elFlipImg.src          = next.img;
        elFlipYear.textContent  = next.year;
        elFlipTitle.textContent = next.title;
        elFlipDesc.textContent  = next.desc;

        // Position the flip panel: starts flush on top of right page
        flipPanel.style.transition = 'none';
        if (direction === 1) {
          // Forward flip: panel starts as the current right page, rotates to reveal left-page text
          flipPanel.style.transformOrigin = 'left center';
          flipPanel.style.transform = 'rotateY(0deg)';
        } else {
          // Backward flip: panel starts as the target left page, rotates back to right
          flipPanel.style.transformOrigin = 'left center';
          flipPanel.style.transform = 'rotateY(-180deg)';
        }
        flipPanel.classList.add('flipping');

        // Force reflow so the starting transform is painted before we animate
        flipPanel.offsetWidth;

        // Start the flip animation
        flipPanel.style.transition = 'transform 0.9s cubic-bezier(0.645, 0.045, 0.355, 1.000)';
        flipPanel.style.transform  = direction === 1 ? 'rotateY(-180deg)' : 'rotateY(0deg)';

        // At the halfway point (~450ms) swap the underlying page content
        setTimeout(() => {
          setBookContent(next, newIndex);
          highlightYear(newIndex);
          bookPage = newIndex;
        }, 450);

        // After animation ends, reset flip panel to hidden state
        setTimeout(() => {
          flipPanel.classList.remove('flipping');
          flipPanel.style.transition = 'none';
          flipPanel.style.transform  = 'rotateY(0deg)';
          isFlipping = false;
        }, 960);
      }

      // Year tab clicks — pause autoplay on manual nav
      bookYears.forEach((btn, i) => {
        btn.addEventListener('click', () => { flipToPage(i); resetBookAutoplay(); });
      });

      // Arrow buttons — pause autoplay on manual nav
      bPrev && bPrev.addEventListener('click', () => {
        flipToPage((bookPage - 1 + bookMilestones.length) % bookMilestones.length);
        resetBookAutoplay();
      });
      bNext && bNext.addEventListener('click', () => {
        flipToPage((bookPage + 1) % bookMilestones.length);
        resetBookAutoplay();
      });

      // Keyboard navigation — pause autoplay
      document.addEventListener('keydown', e => {
        if (window.innerWidth < 992) return;
        if (e.key === 'ArrowRight') { flipToPage((bookPage + 1) % bookMilestones.length); resetBookAutoplay(); }
        if (e.key === 'ArrowLeft')  { flipToPage((bookPage - 1 + bookMilestones.length) % bookMilestones.length); resetBookAutoplay(); }
      });

      /* ── Autoplay: flip forward every 4 seconds ── */
      let bookAutoTimer = null;

      function startBookAutoplay() {
        bookAutoTimer = setInterval(() => {
          flipToPage((bookPage + 1) % bookMilestones.length);
        }, 6000);
      }

      function stopBookAutoplay() {
        clearInterval(bookAutoTimer);
        bookAutoTimer = null;
      }

      function resetBookAutoplay() {
        stopBookAutoplay();
        // Resume after 5 seconds of inactivity
        bookAutoTimer = setTimeout(() => {
          startBookAutoplay();
        }, 5000);
      }

      // Pause on hover, resume when mouse leaves
      book.addEventListener('mouseenter', stopBookAutoplay);
      book.addEventListener('mouseleave', startBookAutoplay);

      // Kick off autoplay on load
      startBookAutoplay();

      // Swipe detection for mobile touch screens
      let touchStartX = 0;
      let touchEndX = 0;
      
      book.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
      }, { passive: true });
      
      book.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
      }, { passive: true });
      
      function handleSwipe() {
        const threshold = 40; // minimum distance to count as swipe
        if (touchStartX - touchEndX > threshold) {
          // Swiped left -> next page
          flipToPage((bookPage + 1) % bookMilestones.length);
          resetBookAutoplay();
        } else if (touchEndX - touchStartX > threshold) {
          // Swiped right -> prev page
          flipToPage((bookPage - 1 + bookMilestones.length) % bookMilestones.length);
          resetBookAutoplay();
        }
      }

      // Mobile Slider for About Page Gallery
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
        
        // Build pagination dots dynamically
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
          // Resume autoplay after 5 seconds of no interaction
          resumeTimeout = setTimeout(() => {
            isUserInteracting = false;
            startAutoplay();
          }, 5000);
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
              deck.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
              deck.scrollTo({ left: nextIndex * cardWidth, behavior: 'smooth' });
            }
          }, 3500);
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

      setupMobileSlider('about-gallery-swipe-deck', 'dots-about-gallery');

    }); // end DOMContentLoaded
  </script>

  <!-- Floating WhatsApp CTA -->
  <a href="https://wa.me/919839077960?text=Hello%20S.%20Caterers!%20I%20would%20like%20to%20inquire%20about%20your%20pure%20vegetarian%20catering%20services." class="floating-whatsapp-cta" target="_blank" aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <!-- Admin Verification Script -->
  <script src="{{ asset('js/admin-trigger.js') }}?v=1.0" data-csrf="{{ csrf_token() }}"></script>

</body>
</html>
