<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catering Packages & Menu Highlights | S. Caterers Lucknow</title>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="Explore S. Caterers premium catering packages: Silver, Gold, and Royal banquets. Discover our Lakhnavi street food, BBQ grills, global live stations, and traditional Awadhi vegetarian delicacies.">
  <meta name="keywords" content="Catering Packages, S. Caterers Menu, Awadhi Food Lucknow, Lakhnavi Chaat, Pure Veg Catering Lucknow, Satvik Jain Catering">
  <meta name="author" content="Amit Agrawal">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
  <style>
    /* Scoped Services Page Styles */
    .services-hero {
      background: linear-gradient(135deg, var(--wine-deep) 0%, var(--wine) 50%, #4A0E17 100%);
      padding: 9.5rem 0 6rem;
      color: var(--ivory);
      position: relative;
      overflow: hidden;
      text-align: center;
    }
    
    .services-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(rgba(231, 197, 137, 0.08) 1px, transparent 1px);
      background-size: 24px 24px;
      pointer-events: none;
    }
    
    .services-hero .eyebrow {
      color: var(--gold-bright);
      font-size: 0.8rem;
      letter-spacing: 0.3em;
      margin-bottom: 12px;
      display: inline-block;
    }
    
    .services-hero h1 {
      font-family: var(--font-heading);
      font-size: clamp(2.5rem, 5vw, 4rem);
      font-weight: 700;
      color: var(--ivory);
      margin-bottom: 1rem;
      line-height: 1.15;
    }
    
    .services-hero h1 span {
      color: var(--gold-bright);
      font-style: italic;
    }
    
    .services-hero p {
      font-size: 1.05rem;
      max-width: 650px;
      margin: 0 auto;
      color: var(--ivory-dim);
      opacity: 0.9;
    }
    
    /* Package Card Styling */
    .package-grid-section {
      background-color: var(--ivory);
      padding: 6.5rem 0;
    }
    
    .pkg-custom-card {
      background: #FFFFFF;
      border: 1px solid var(--gold-line);
      border-radius: 18px;
      padding: 2.5rem 2rem;
      height: 100%;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      display: flex;
      flex-direction: column;
      position: relative;
    }
    
    .pkg-custom-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 40px rgba(110, 20, 35, 0.08);
      border-color: var(--gold);
    }
    
    .pkg-custom-card.royal-active {
      border: 2px solid var(--gold);
      box-shadow: 0 12px 30px rgba(198, 161, 91, 0.15);
    }
    
    .pkg-custom-card.royal-active .royal-badge {
      position: absolute;
      top: -14px;
      left: 50%;
      transform: translateX(-50%);
      background: var(--gold);
      color: var(--charcoal);
      font-size: 0.75rem;
      font-weight: 700;
      padding: 4px 16px;
      border-radius: 20px;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }
    
    .pkg-header {
      border-bottom: 1px solid rgba(198, 161, 91, 0.18);
      padding-bottom: 1.5rem;
      margin-bottom: 1.5rem;
      text-align: center;
    }
    
    .pkg-header .icon {
      font-size: 2rem;
      color: var(--gold);
      margin-bottom: 0.5rem;
    }
    
    .pkg-header h3 {
      font-family: var(--font-heading);
      font-size: 1.6rem;
      font-weight: 700;
      color: var(--charcoal);
      margin-bottom: 0.25rem;
    }
    
    .pkg-header .desc {
      font-size: 0.88rem;
      color: var(--ink-soft);
      line-height: 1.5;
    }
    
    .pkg-features {
      list-style: none;
      padding: 0;
      margin: 0 0 2rem 0;
      flex-grow: 1;
    }
    
    .pkg-features li {
      font-size: 0.9rem;
      color: var(--charcoal);
      margin-bottom: 0.75rem;
      display: flex;
      align-items: flex-start;
      gap: 10px;
    }
    
    .pkg-features li i {
      color: var(--gold);
      margin-top: 4px;
      font-size: 0.8rem;
    }
    
    .pkg-features li strong {
      color: var(--wine);
    }
    
    /* Food Galleries Wok tabs */
    .menu-showcase-section {
      background-color: var(--ivory-dim);
      padding: 6.5rem 0;
    }
    
    .menu-tabs {
      display: flex;
      justify-content: center;
      gap: 10px;
      flex-wrap: wrap;
      margin-bottom: 3.5rem;
    }
    
    .menu-tab-btn {
      background: #FFFFFF;
      border: 1px solid rgba(198, 161, 91, 0.25);
      color: var(--charcoal);
      padding: 8px 24px;
      border-radius: 30px;
      font-size: 0.9rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.25s ease;
    }
    
    .menu-tab-btn:hover,
    .menu-tab-btn.active {
      background: var(--wine);
      color: var(--ivory);
      border-color: var(--wine);
      box-shadow: 0 6px 15px rgba(110, 20, 35, 0.15);
    }
    
    .menu-items-grid {
      background: #FFFFFF;
      border: 1px solid var(--gold-line);
      border-radius: 18px;
      padding: 3rem 2.5rem;
      box-shadow: 0 10px 30px rgba(32, 28, 26, 0.04);
    }
    
    .menu-pane {
      display: none;
    }
    
    .menu-pane.active {
      display: block;
      animation: fadeIn 0.4s ease-in-out;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .menu-item-row {
      border-bottom: 1px dashed rgba(198, 161, 91, 0.18);
      padding: 1.2rem 0;
    }
    
    .menu-item-row:last-child {
      border-bottom: none;
    }
    
    .menu-item-name {
      font-family: var(--font-heading);
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--wine);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .menu-item-name span.extra-badge {
      font-family: var(--font-body);
      font-size: 0.68rem;
      background: var(--gold);
      color: var(--charcoal);
      padding: 2px 8px;
      border-radius: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.04em;
    }
    
    .menu-item-desc {
      font-size: 0.88rem;
      color: var(--ink-soft);
      margin-top: 4px;
    }
    
    /* Inquiry Form Container */
    .inquiry-form-section {
      background-color: #FFFFFF;
      padding: 6.5rem 0;
    }
    
    .inquiry-form-box {
      max-width: 720px;
      margin: 0 auto;
      background: var(--ivory);
      border: 1px solid var(--gold-line);
      border-radius: 24px;
      padding: 3.5rem 3rem;
      box-shadow: 0 12px 36px rgba(32, 28, 26, 0.06);
    }
    
    .form-group-custom {
      margin-bottom: 1.5rem;
    }
    
    .form-group-custom label {
      display: block;
      font-size: 0.8rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--wine);
      margin-bottom: 6px;
    }
    
    .form-group-custom input,
    .form-group-custom select,
    .form-group-custom textarea {
      width: 100%;
      padding: 12px 16px;
      border: 1.5px solid rgba(198, 161, 91, 0.25);
      border-radius: 10px;
      background: #FFFFFF;
      font-size: 0.95rem;
      color: var(--charcoal);
      outline: none;
      transition: border-color 0.25s ease;
    }
    
    .form-group-custom input:focus,
    .form-group-custom select:focus,
    .form-group-custom textarea:focus {
      border-color: var(--wine);
      box-shadow: 0 0 0 3px rgba(110, 20, 35, 0.08);
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
          <li class="nav-item"><a class="nav-link nav-link-custom active" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="#footer-section">Contact Us</a></li>
        </ul>
        <div class="d-flex mt-2 mt-lg-0">
          <a href="https://wa.me/919839077960" target="_blank" class="btn-gold"><i class="fa-brands fa-whatsapp me-1"></i> WhatsApp Us</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- ================= SERVICES HERO ================= -->
  <section class="services-hero">
    <div class="container">
      <span class="eyebrow">PREMIUM PURE VEGETARIAN CATERING</span>
      <h1>Gastronomic Excellence for <span>Your Occasions</span></h1>
      <p>Explore S. Caterers' curated package options, specialty food galleries, and signature live counters compiled directly from our royal vegetarian menus.</p>
    </div>
  </section>

  <!-- ================= PACKAGES GRID ================= -->
  <section class="package-grid-section" id="packages">
    <div class="container">
      <div class="section-title-wrap text-center mb-5">
        <span class="eyebrow">OUR CATERING OPTIONS</span>
        <h2 class="section-title">Curated Menu <span class="accent">Packages</span></h2>
        <p class="text-muted" style="max-width: 600px; margin: 0.5rem auto 0;">Select a starting tier to begin planning your wedding feast, haldi lunch, sangeet reception, or private corporate gala.</p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Silver Package -->
        <div class="col-md-6 col-lg-4">
          <div class="pkg-custom-card">
            <div class="pkg-header">
              <div class="icon"><i class="fa-solid fa-seedling"></i></div>
              <h3>Silver Package</h3>
              <p class="desc">A tasteful compilation of traditional North Indian and authentic Awadhi vegetarian classics.</p>
            </div>
            <ul class="pkg-features">
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>Welcome Drinks:</strong> A selection of 2 hot coffees, classic kulhad tea, and carbonated beverages.</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>Soups & Starters:</strong> Cream of Tomato Soup, Paneer Tandoori, and crispy Hari Matar Samosas.</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>Main Course Stalls:</strong> Matar Paneer, Banarasi Dum Aalu, and comforting Dal Yellow Tadka.</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>Accompaniments:</strong> Bathua Raita, Jeera Rice, Tawa Roti (Aata & Besan), and Laccha Parathas.</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>Sweets & Dessert:</strong> Spongy Chena Kheer and vanilla/chocolate ice creams.</span></li>
            </ul>
            <div class="text-center mt-auto pt-3">
              <a href="#inquiry" class="btn-outline-wine w-100 select-package" data-package="Silver Package">Select Package</a>
            </div>
          </div>
        </div>

        <!-- Gold Package -->
        <div class="col-md-6 col-lg-4">
          <div class="pkg-custom-card">
            <div class="pkg-header">
              <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
              <h3>Gold Package</h3>
              <p class="desc">Our highly popular tier blending Mughlai specialties with live street food chaat galleries.</p>
            </div>
            <ul class="pkg-features">
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>Welcome & Shakes:</strong> Mojitos, Fruit Shakes (Strawberry & Kesar Pista), and Cafe Hut espresso.</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>BBQ & Starters:</strong> Paneer Mughlai Tikka, Malai Soya Chaap, and Dahi Kababs.</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>Live Chaat Street:</strong> Stuffed Aloo Tikki, Pani Batashas with 3 waters, and Palak Chaat.</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>Main Course:</strong> Paneer Lababdar, Nargisi Kofta, Dal Bukhara, and Veg Biryani.</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>Dessert Gallery:</strong> Kesariya Jaleba Mewa, Gajar Halwa, and classic Kulfi Falooda.</span></li>
            </ul>
            <div class="text-center mt-auto pt-3">
              <a href="#inquiry" class="btn-outline-wine w-100 select-package" data-package="Gold Package">Select Package</a>
            </div>
          </div>
        </div>

        <!-- Royal Package -->
        <div class="col-md-6 col-lg-4">
          <div class="pkg-custom-card royal-active">
            <div class="royal-badge">Chef's Signature</div>
            <div class="pkg-header">
              <div class="icon" style="color: var(--gold);"><i class="fa-solid fa-crown"></i></div>
              <h3>Royal Banquet</h3>
              <p class="desc">A luxurious, multi-cuisine layout featuring global live stations, specialty mocktails, and chef-curated desserts.</p>
            </div>
            <ul class="pkg-features">
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>Luxury Mocktails:</strong> Blue Lagoon, Spiced Mango Pineapple, and fresh Lemon Slush.</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>BBQ & Starters:</strong> Veg. Galawati Kababs, Corn Cheese Nests, and Mexican Lollipops.</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>Global Wok Live:</strong> Veg Sushi Bowls, Sizzling Veggie Teppanyaki, and live Pizza & Pasta.</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>Shahi Mains:</strong> Matar Angoor Kaju, Mushroom Kaleji, Dal Bukhara, and Amritsari Chhola.</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span><strong>Desserts in Terracotta:</strong> Chena Rabdi in Terracotta pots, Moong Badam Halwa, and chocolate fountains.</span></li>
            </ul>
            <div class="text-center mt-auto pt-3">
              <a href="#inquiry" class="btn-gold w-100 select-package" data-package="Royal Package">Select Package</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= SIGNATURE FOOD GALLERIES ================= -->
  <section class="menu-showcase-section" id="menu-galleries">
    <div class="container">
      <div class="section-title-wrap text-center mb-5">
        <span class="eyebrow">OUR SPECIALTIES</span>
        <h2 class="section-title">Signature Food <span class="accent">Galleries</span></h2>
        <p class="text-muted" style="max-width: 600px; margin: 0.5rem auto 0;">Explore curated items selected from our menus. Toggle the tabs below to view signature items.</p>
      </div>

      <!-- Wok Filter Tabs -->
      <div class="menu-tabs">
        <button class="menu-tab-btn active" onclick="switchTab('drinks')">Beverages & Shakes</button>
        <button class="menu-tab-btn" onclick="switchTab('starters')">Gourmet Starters</button>
        <button class="menu-tab-btn" onclick="switchTab('chaat')">Lakhnavi Chaat Street</button>
        <button class="menu-tab-btn" onclick="switchTab('global')">Global Wok Live</button>
        <button class="menu-tab-btn" onclick="switchTab('main')">Shahi Main Course</button>
        <button class="menu-tab-btn" onclick="switchTab('sweets')">Sweet Endings</button>
      </div>

      <!-- Menu Grid Pane -->
      <div class="menu-items-grid">
        <!-- Beverages & Shakes -->
        <div class="menu-pane active" id="pane-drinks">
          <div class="row">
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Green Mint Mojito</div>
              <div class="menu-item-desc">Zesty, refreshing summer cooler infused with fresh garden mint and lime slices.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Spiced Mango Pineapple</div>
              <div class="menu-item-desc">A gorgeous tropical blend of sweet pineapple and tangy mango syrup with a hint of red chili spice.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Espresso & Cappuccino <span class="extra-badge">Davidoff</span></div>
              <div class="menu-item-desc">Freshly ground premium coffee beans brewed with thick, rich milk foam at our live café stall.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Kesar Pista & Mango Shakes</div>
              <div class="menu-item-desc">Creamy, rich blended milkshakes garnished with saffron strands and slivered green pistachios.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Kulhad Tea / Masala Green Tea</div>
              <div class="menu-item-desc">Traditionally brewed ginger and cardamom Indian tea served hot in earthen clay cups (kulhads).</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Blue Lagoon & Pink Lady</div>
              <div class="menu-item-desc">Aesthetic mocktail options prepared live by our mixologists using premium Monin syrups.</div>
            </div>
          </div>
        </div>

        <!-- Gourmet Starters -->
        <div class="menu-pane" id="pane-starters">
          <div class="row">
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Veg. Galawati Kabab</div>
              <div class="menu-item-desc">S. Caterers' signature ultra-soft vegetable kababs, blended with royal spices and cooked on a tawa.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Corn Cheese Nest</div>
              <div class="menu-item-desc">Golden-fried, crispy nests crafted from vermicelli, stuffed with a creamy cheese and sweet corn filling.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Dahi Kabab</div>
              <div class="menu-item-desc">Melt-in-your-mouth spiced yogurt patties with a thin, crispy crust, served with green mint chutney.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Paneer Mughlai Tikka</div>
              <div class="menu-item-desc">Soft, pillowy cottage cheese cubes marinated in rich cashew paste and cardamoms, roasted in tandoor.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Mexican Lollypop</div>
              <div class="menu-item-desc">Flavorful vegetable pops with fresh cilantro and sweet corn, shaped on skewers with a Mexican twist.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Motiya Roll / Achari Soya Chaap</div>
              <div class="menu-item-desc">Crispy golden wrappers filled with seasoned greens, alongside clay-oven roasted tangy achari chaap.</div>
            </div>
          </div>
        </div>

        <!-- Lakhnavi Chaat Street -->
        <div class="menu-pane" id="pane-chaat">
          <div class="row">
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Pani Batasha (Atta & Suji) <span class="extra-badge">3 Waters</span></div>
              <div class="menu-item-desc">Crispy puffed puris served with potato chickpea stuffing and three distinct flavored waters (Mint, Tamarind, Lemon).</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Stuffed Aloo Tikiya</div>
              <div class="menu-item-desc">Crispy golden potato patties stuffed with spiced chana dal, topped with sweet curd, date tamarind sauce, and sev.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Banarasi Tamatar Chaat</div>
              <div class="menu-item-desc">A famous, tangy street food delicacy made of mashed tomatoes, potatoes, and special spices, served in clay bowls.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Palak Chaat</div>
              <div class="menu-item-desc">Light and crispy batter-fried spinach leaves topped with pomegranate seeds, sweet curd, and mint chutney.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Bhuni Matar Tawa / Matar Patilli</div>
              <div class="menu-item-desc">Savory green peas tossed on a tawa with chopped onions, green chilies, and fresh coriander.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Dahi Fruit Papdi / Rajkachori</div>
              <div class="menu-item-desc">Curd-soaked flour crisps tossed with seasonal fruits, alongside a majestic rajkachori stuffed with sprouts.</div>
            </div>
          </div>
        </div>

        <!-- Global Wok Live -->
        <div class="menu-pane" id="pane-global">
          <div class="row">
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Vegetarian Sushi Bowl</div>
              <div class="menu-item-desc">Modern Japanese style sushi rice bowls topped with avocado slices, pickled ginger, sesame, and seaweed.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Sizzling Veggie Teppanyaki</div>
              <div class="menu-item-desc">Live chef station with seasoned seasonal vegetables and tofu sizzled on a hot iron plate with ginger soy.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Veg. & Cheese Dimsums <span class="extra-badge">On Trolleys</span></div>
              <div class="menu-item-desc">Steamed delicate dumplings filled with finely chopped cabbage, carrots, and cheese, served with garlic chili dip.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Live Pizza & Pasta Station</div>
              <div class="menu-item-desc">Custom pasta prepared live (Red Sauce, White Cheese Sauce, and Rosa blend) with freshly baked mini pizzas.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Mexican Quesadilla Wrap</div>
              <div class="menu-item-desc">Toasted flour tortillas folded and stuffed with melted cheese, bell peppers, and refried beans.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Veg. Hakka Noodles & Manchurian</div>
              <div class="menu-item-desc">Wok-tossed garlic noodles served alongside soft vegetable dumplings in a rich soy gravy.</div>
            </div>
          </div>
        </div>

        <!-- Shahi Main Course -->
        <div class="menu-pane" id="pane-main">
          <div class="row">
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Paneer Lababdar</div>
              <div class="menu-item-desc">Soft cottage cheese cubes cooked in a rich, velvety onion tomato cashew gravy with dry fenugreek leaves.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Nargisi Kofta</div>
              <div class="menu-item-desc">Luxurious vegetable dumplings stuffed with grated paneer and nuts, simmered in a royal golden Mughlai gravy.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Mushroom Kaleji & Rumali Roti</div>
              <div class="menu-item-desc">A rich, heavily spiced mushroom dish prepared in Awadhi style, served with paper-thin rumali flatbreads.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Dal Bukhara / Dal Yellow Tadka Live</div>
              <div class="menu-item-desc">Slow-cooked whole black lentils simmered overnight with butter and cream, and live-tempered yellow lentils.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Matar Angoor Kaju Curry</div>
              <div class="menu-item-desc">Chef's specialty sweet and savory curry prepared with fresh green peas, seedless grapes, and cashew nuts.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Awadhi Veg. Biryani</div>
              <div class="menu-item-desc">Fragrant, long-grain Basmati rice layered with garden vegetables and aromatic spices, cooked under dum.</div>
            </div>
          </div>
        </div>

        <!-- Sweet Endings -->
        <div class="menu-pane" id="pane-sweets">
          <div class="row">
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Kesariya Chena Rabdi <span class="extra-badge">Terracotta Pots</span></div>
              <div class="menu-item-desc">Thick, sweetened condensed milk flavored with rich saffron and green cardamoms, served with soft chena balls.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Moong Badam Halwa</div>
              <div class="menu-item-desc">A rich, heavy traditional dessert pudding made from yellow lentils and pure ghee, garnished with toasted almonds.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Kesariya Jaleba Mewa</div>
              <div class="menu-item-desc">Giant, crispy jalebis fried in pure ghee, soaked in saffron syrup, and topped with dry fruits and silver leaves.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Kulfi Falooda (Kesariya, Mango, Paan)</div>
              <div class="menu-item-desc">Traditional dense kulfi ice creams sliced and served with sweet falooda noodles, rose syrup, and sabja seeds.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Brownie with Chocolate Fountain</div>
              <div class="menu-item-desc">Rich fudge chocolate brownies served alongside a flowing fountain of warm, melted milk chocolate.</div>
            </div>
            <div class="col-md-6 menu-item-row">
              <div class="menu-item-name">Mini Malai Ghewar / Rasmalai</div>
              <div class="menu-item-desc">Classic honeycombed Ghewar soaked in rabdi, and soft chena dumplings immersed in cardamom-flavored milk.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= INQUIRY FORM ================= -->
  <section class="inquiry-form-section" id="inquiry">
    <div class="container">
      <div class="inquiry-form-box">
        <div class="text-center mb-5">
          <span class="eyebrow">BOOK A CONSULTATION</span>
          <h2 class="section-title" style="font-size: 2.2rem;">Plan Your Celebration</h2>
          <p class="text-muted" style="font-size: 0.92rem;">Fill in your details below and the S. Caterers event planning team will prepare a customized proposal for you.</p>
        </div>

        @if(session('success'))
          <div class="alert alert-success border-0 text-center py-3 mb-4" style="background-color: rgba(40, 167, 69, 0.1); color: #28a745; font-weight: 600; border-radius: 12px;">
            <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
          </div>
        @endif

        <form action="{{ route('services.inquiry') }}" method="POST">
          @csrf
          
          <div class="row">
            <div class="col-md-6 form-group-custom">
              <label for="inq-name">Your Full Name</label>
              <input type="text" name="name" id="inq-name" placeholder="e.g. Divyansh Chaurasia" required>
            </div>
            <div class="col-md-6 form-group-custom">
              <label for="inq-email">Email Address</label>
              <input type="email" name="email" id="inq-email" placeholder="name@domain.com" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 form-group-custom">
              <label for="inq-phone">Contact Number</label>
              <input type="text" name="phone" id="inq-phone" placeholder="e.g. +91 98390 77960" required>
            </div>
            <div class="col-md-6 form-group-custom">
              <label for="inq-date">Event Date</label>
              <input type="date" name="event_date" id="inq-date" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 form-group-custom">
              <label for="inq-guests">Expected Guests</label>
              <input type="number" name="guests" id="inq-guests" placeholder="e.g. 250" min="20" required>
            </div>
            <div class="col-md-6 form-group-custom">
              <label for="inq-package">Catering Package</label>
              <select name="package" id="inq-package" required>
                <option value="" disabled selected>Choose a starting tier...</option>
                <option value="Silver Package">Heritage Silver Package</option>
                <option value="Gold Package">Signature Gold Package</option>
                <option value="Royal Package">Luxe Royal Banquet</option>
                <option value="Custom Event">Bespoke Custom Catering</option>
              </select>
            </div>
          </div>

          <div class="form-group-custom">
            <label for="inq-notes">Special Dietary Requests &amp; Notes</label>
            <textarea name="notes" id="inq-notes" rows="4" placeholder="Mention any specific requirements (e.g. 100% Satvik / Jain kitchen segregation, custom uniform theme, live teppanyaki preferences)..."></textarea>
          </div>

          <div class="text-center pt-2">
            <button type="submit" class="btn-gold w-100 py-3" style="font-size: 1.05rem; border-radius: 12px; font-weight: 700;">Submit Consultation Request</button>
          </div>
        </form>
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
            <a href="https://wa.me/919839077960" target="_blank" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>

        <!-- Explore Column -->
        <div class="col-6 col-md-3 col-lg-2">
          <h6>Explore</h6>
          <a href="{{ route('home') }}">Home</a>
          <a href="{{ route('about') }}">About Us</a>
          <a href="#packages">Our Packages</a>
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
          <p style="font-size: 0.88rem; margin-bottom: 0.8rem;"><i class="fa-solid fa-location-dot me-2" style="color: var(--gold-bright);"></i> Keshav Nagar, Sitapur Road, Lucknow, UP</p>
          <p style="font-size: 0.88rem; margin-bottom: 0.8rem;"><i class="fa-solid fa-phone me-2" style="color: var(--gold-bright);"></i> +91 98390 77960, +91 94157 88950</p>
          <p style="font-size: 0.88rem;"><i class="fa-solid fa-envelope me-2" style="color: var(--gold-bright);"></i> scatererslko@gmail.com</p>
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

  <!-- Interactive Tabs Logic -->
  <script>
    function switchTab(tabId) {
      // Deactivate all tab buttons
      const buttons = document.querySelectorAll('.menu-tab-btn');
      buttons.forEach(btn => btn.classList.remove('active'));
      
      // Deactivate all menu panes
      const panes = document.querySelectorAll('.menu-pane');
      panes.forEach(pane => pane.classList.remove('active'));
      
      // Activate target tab button
      const targetBtn = Array.from(buttons).find(btn => btn.getAttribute('onclick').includes(tabId));
      if (targetBtn) targetBtn.classList.add('active');
      
      // Activate target menu pane
      const targetPane = document.getElementById('pane-' + tabId);
      if (targetPane) targetPane.classList.add('active');
    }

    // Auto-select package in inquiry form on click
    document.querySelectorAll('.select-package').forEach(link => {
      link.addEventListener('click', function(e) {
        const pkgName = this.getAttribute('data-package');
        const selectEl = document.getElementById('inq-package');
        if (selectEl) {
          selectEl.value = pkgName;
        }
      });
    });
  </script>
</body>
</html>
