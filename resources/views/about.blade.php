<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | S. Caterers Lucknow & Uttar Pradesh</title>
  <!-- SEO Meta Tags -->
  <meta name="description" content="Discover S. Caterers' 30-year legacy of luxury vegetarian catering under Amit Agrawal. Serving Lucknow and all of Uttar Pradesh with pure Satvik and Jain dining.">
  <meta name="author" content="Amit Agrawal">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
          <li class="nav-item"><a class="nav-link nav-link-custom active" href="#">About Us</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('home') }}#services">Services</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="#footer-section">Contact Us</a></li>
        </ul>
        <div class="d-flex mt-2 mt-lg-0">
          <a href="{{ route('home') }}#services" class="btn-gold">Explore Packages</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- ================= ABOUT HERO BANNER ================= -->
  <section class="about-hero position-relative">
    <div class="hero-text-glow"></div>
    <div class="container text-center position-relative" style="z-index: 5;">
      <span class="eyebrow text-uppercase" style="letter-spacing: 0.2em; font-size: 0.85rem;">Our Heritage & Devotion</span>
      <h1 class="mt-2 mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 900; font-size: 3.2rem; color: var(--charcoal);">Our Story & <span class="highlight" style="color: var(--wine);">Philosophy</span></h1>
      <p class="lead-copy mx-auto" style="max-width: 600px; font-size: 1.15rem; color: var(--ink-soft); font-style: italic;">
        "Crafting flawless vegetarian banquets with absolute purity, Lakhnavi heritage flavor, and royal hospitality."
      </p>
    </div>
  </section>

  <div class="jali-divider" id="divider-hero"></div>

  <!-- ================= THE FOUNDER'S JOURNEY ================= -->
  <section class="section-pad bg-white">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-7">
          <span class="eyebrow">The Visionary</span>
          <h2 class="section-title mt-2 mb-4">Letter from the <span class="accent">Founder</span></h2>
          <p class="event-desc" style="font-size: 1.05rem; line-height: 1.8; color: var(--ink-soft);">
            Welcome to S. Caterers. When I established this company on Sitapur Road in 1995, my goal was simple yet unwavering: to offer the families of Lucknow a catering experience that is as pure as it is delicious.
          </p>
          <p class="event-desc" style="font-size: 1.05rem; line-height: 1.8; color: var(--ink-soft);">
            For us, catering is not a transaction; it is a sacred act of hospitality. S. Caterers stands as a pledge to absolute vegetarian integrity. We have built custom segregated kitchens, sourced local fresh farm products, and trained our servers to serve with unmatched warmth and respect.
          </p>
          <p class="event-desc" style="font-size: 1.05rem; line-height: 1.8; color: var(--ink-soft); font-weight: 500;">
            Today, as we open our doors to serve grand destination weddings and celebrations across the entire state of Uttar Pradesh, our devotion remains the same.
          </p>
          <div class="mt-4 pt-2">
            <h4 class="mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; color: var(--wine);">Amit Agrawal</h4>
            <span style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--gold); font-weight: 600;">Founder & CEO</span>
          </div>
        </div>
        <div class="col-lg-5 text-center">
          <div class="event-frame-wrap" style="width: 330px; height: 440px;">
            <div class="event-frame-inner">
              <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?q=80&w=600&auto=format&fit=cover" alt="Amit Agrawal">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="jali-divider dark" id="divider-founder"></div>

  <!-- ================= PILLARS OF PURITY ================= -->
  <section class="section-pad" style="background: var(--ivory);">
    <div class="container">
      <div class="section-title-wrap text-center mb-5">
        <span class="eyebrow">Why Choose Us</span>
        <h2 class="section-title">Our Pillars of <span class="accent">Purity</span></h2>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Pillar 1 -->
        <div class="col-md-4">
          <div class="package-card" style="padding: 2.5rem 2rem;">
            <div class="pkg-icon" style="font-size: 2.2rem; color: var(--wine); margin-bottom: 1.5rem;">
              <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h3 class="pkg-title" style="font-size: 1.3rem; margin-bottom: 1rem;">100% Segregated Kitchens</h3>
            <p class="pkg-desc" style="font-size: 0.92rem; line-height: 1.6;">We guarantee absolute spiritual purity. Our modern facility is strictly vegetarian, meaning no meat, seafood, or egg products ever cross our thresholds.</p>
          </div>
        </div>

        <!-- Pillar 2 -->
        <div class="col-md-4">
          <div class="package-card" style="padding: 2.5rem 2rem;">
            <div class="pkg-icon" style="font-size: 2.2rem; color: var(--wine); margin-bottom: 1.5rem;">
              <i class="fa-solid fa-leaf"></i>
            </div>
            <h3 class="pkg-title" style="font-size: 1.3rem; margin-bottom: 1rem;">Satvik & Jain Integrity</h3>
            <p class="pkg-desc" style="font-size: 0.92rem; line-height: 1.6;">We accommodate orthodox preferences with dedicated spice bins, separate storage, and dedicated utensils for onion-free and garlic-free prep lines.</p>
          </div>
        </div>

        <!-- Pillar 3 -->
        <div class="col-md-4">
          <div class="package-card" style="padding: 2.5rem 2rem;">
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

  <!-- ================= TESTIMONIALS / JOURNEY SLIDER ================= -->
  <section class="section-pad journey-section" id="journey-section">
    <div class="container">
      <div class="section-title-wrap text-center">
        <span class="eyebrow">Our Milestones</span>
        <h2 class="section-title">The Journey of <span class="accent">S. Caterers</span></h2>
      </div>

      <!-- Golden Thread Horizontal Timeline Navigation Bar -->
      <div class="timeline-nav-container">
        <div class="timeline-thread"></div>
        <div class="timeline-nodes-wrap">
          <div class="timeline-node-item active" data-slide="0"><span class="year-label">1995</span></div>
          <div class="timeline-node-item" data-slide="1"><span class="year-label">1998</span></div>
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
                <div class="journey-year-badge">1995</div>
                <h3 class="journey-title">The Seed of a Dream</h3>
                <p class="journey-desc">Amit Agrawal establishes S. Caterers with a humble kitchen, deep local ties, and a burning passion to serve authentic Lakhnavi vegetarian delicacies to family gatherings and social circles.</p>
                <div class="journey-signature">Amit Agrawal</div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://picsum.photos/seed/culinarydreams/500/600" alt="Milestone 1">
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
                <div class="journey-signature">Amit Agrawal</div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://picsum.photos/seed/banquetsetup/500/600" alt="Milestone 2">
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
                <div class="journey-signature">Amit Agrawal</div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://picsum.photos/seed/lakhnavichaat/500/600" alt="Milestone 3">
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
                <div class="journey-signature">Amit Agrawal</div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://picsum.photos/seed/freshvegetables/500/600" alt="Milestone 4">
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
                <p class="journey-desc">To support growing demand, Amit Agrawal builds a new, modern central kitchen on Sitapur Road, Lucknow. This facility houses advanced sanitary machinery and dedicated prep bays.</p>
                <div class="journey-signature">Amit Agrawal</div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://picsum.photos/seed/cateringkitchen/500/600" alt="Milestone 5">
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
                <div class="journey-signature">Amit Agrawal</div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://picsum.photos/seed/satvikkitchen/500/600" alt="Milestone 6">
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
                <div class="journey-signature">Amit Agrawal</div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://picsum.photos/seed/pastaitalian/500/600" alt="Milestone 7">
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
                <div class="journey-signature">Amit Agrawal</div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://picsum.photos/seed/corporateevent/500/600" alt="Milestone 8">
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
                <div class="journey-signature">Amit Agrawal</div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://picsum.photos/seed/hygienecatering/500/600" alt="Milestone 9">
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
                <div class="journey-signature">Amit Agrawal</div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://picsum.photos/seed/fineplating/500/600" alt="Milestone 10">
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
                <div class="journey-signature">Amit Agrawal</div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://picsum.photos/seed/grandwedding/500/600" alt="Milestone 11">
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
                <div class="journey-signature">Amit Agrawal</div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="journey-frame-wrap">
                <div class="journey-frame-inner">
                  <img src="https://picsum.photos/seed/chefcooking/500/600" alt="Milestone 12">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Slider Controls -->
      <div class="journey-controls">
        <button class="slider-arrow" id="journey-prev" aria-label="Previous Slide">
          <i class="fa-solid fa-arrow-left"></i>
        </button>
        <div class="journey-dots" id="journey-dots-container">
          <!-- Dots will be populated by JS -->
        </div>
        <button class="slider-arrow" id="journey-next" aria-label="Next Slide">
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </div>
    </div>
  </section>

  <div class="jali-divider dark" id="divider-journey"></div>

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
  <section class="section-pad text-center" style="background: var(--ivory-dim); border-top: 1px solid var(--gold-line); border-bottom: 1px solid var(--gold-line);">
    <div class="container">
      <div style="max-width: 700px; margin: 0 auto;">
        <span class="eyebrow" style="color: var(--wine);">Plan Your Celebration</span>
        <h2 class="section-title mt-2 mb-3" style="color: var(--charcoal);">Let's Craft an Exquisite Feast Together</h2>
        <p class="mx-auto mb-4" style="max-width: 550px; font-size: 1.02rem; line-height: 1.8; color: var(--ink-soft);">
          Reach out to Amit Agrawal's boutique planning wing to customize your pure-veg menu and reserve your catering date anywhere in Uttar Pradesh.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
          <a href="https://wa.me/9198xxxxxx10" target="_blank" class="btn-gold"><i class="fa-brands fa-whatsapp me-2"></i> WhatsApp Us Now</a>
          <a href="{{ route('home') }}" class="btn-outline-wine">Back to Homepage</a>
        </div>
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
          <a href="{{ route('home') }}#services">Our Packages</a>
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

  <!-- Accordion and Journey Slider scripts -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // 1. FAQ Accordion Logic
      const triggers = document.querySelectorAll('.faq-trigger');
      
      triggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
          const item = trigger.parentElement;
          const panel = trigger.nextElementSibling;
          const isActive = item.classList.contains('active');
          
          // Collapse all panels
          document.querySelectorAll('.faq-item').forEach(i => {
            i.classList.remove('active');
            i.querySelector('.faq-panel').style.maxHeight = null;
          });
          
          // Toggle active
          if (!isActive) {
            item.classList.add('active');
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
      });

      // 2. Journey Slider Logic
      const slides = document.querySelectorAll('.journey-slide');
      const timelineNodes = document.querySelectorAll('.timeline-node-item');
      const dotsContainer = document.getElementById('journey-dots-container');
      const prevBtn = document.getElementById('journey-prev');
      const nextBtn = document.getElementById('journey-next');
      let currentSlide = 0;
      let autoplayTimer;

      // Dynamically build indicator dots
      slides.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if(index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
          showSlide(index);
          resetAutoplay();
        });
        dotsContainer.appendChild(dot);
      });

      const dots = document.querySelectorAll('.dot');

      function showSlide(index) {
        slides.forEach(s => s.classList.remove('active'));
        dots.forEach(d => d.classList.remove('active'));
        timelineNodes.forEach(node => node.classList.remove('active'));
        
        slides[index].classList.add('active');
        dots[index].classList.add('active');
        timelineNodes[index].classList.add('active');

        // Scroll the timeline nav to center the active node on mobile viewports
        const activeNode = timelineNodes[index];
        const container = document.querySelector('.timeline-nav-container');
        if (container) {
          const containerWidth = container.offsetWidth;
          const nodeLeft = activeNode.offsetLeft;
          const nodeWidth = activeNode.offsetWidth;
          container.scrollTo({
            left: nodeLeft - (containerWidth / 2) + (nodeWidth / 2),
            behavior: 'smooth'
          });
        }
        
        currentSlide = index;
      }

      // Add click listener to timeline nodes
      timelineNodes.forEach((node, index) => {
        node.addEventListener('click', () => {
          showSlide(index);
          resetAutoplay();
        });
      });

      function nextSlide() {
        let next = (currentSlide + 1) % slides.length;
        showSlide(next);
      }

      function prevSlide() {
        let prev = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prev);
      }

      nextBtn.addEventListener('click', () => {
        nextSlide();
        resetAutoplay();
      });

      prevBtn.addEventListener('click', () => {
        prevSlide();
        resetAutoplay();
      });

      // Autoplay logic - 3000ms (3 seconds) interval as requested
      function startAutoplay() {
        autoplayTimer = setInterval(nextSlide, 3000);
      }

      function resetAutoplay() {
        clearInterval(autoplayTimer);
        startAutoplay();
      }

      startAutoplay();
    });
  </script>

</body>
</html>
