<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catering Packages & Menu Highlights | S. Caterers Lucknow</title>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="Explore S. Caterers premium catering packages: Silver, Gold, and Royal banquets. Discover our Lakhnavi street food, BBQ grills, global live stations, and traditional Awadhi vegetarian delicacies.">
  <meta name="keywords" content="Catering Packages, S. Caterers Menu, Awadhi Food Lucknow, Lakhnavi Chaat, Pure Veg Catering Lucknow, Satvik Jain Catering">
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
      z-index: 10;
    }
    
    .pkg-img-wrap {
      margin: -2.5rem -2rem 1.5rem -2rem;
      overflow: hidden;
      border-top-left-radius: 16px;
      border-top-right-radius: 16px;
      height: 200px;
      position: relative;
    }
    
    .pkg-img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .pkg-custom-card:hover .pkg-img-wrap img {
      transform: scale(1.08);
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
    
    .menu-tab-btn:hover,
    .menu-tab-btn.active {
      background: var(--wine);
      color: #FFFFFF !important;
      border-color: var(--wine);
      box-shadow: 0 4px 12px rgba(110, 20, 35, 0.25);
      transform: translateY(-1px);
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
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      will-change: padding-left;
    }
    
    .menu-item-row::before {
      content: '';
      position: absolute;
      left: 0;
      top: 15%;
      bottom: 15%;
      width: 0;
      background: var(--gold);
      transition: width 0.3s ease;
      border-radius: 2px;
    }

    .menu-item-row:hover {
      padding-left: 12px !important;
    }

    .menu-item-row:hover::before {
      width: 4px;
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
    
    /* Premium hover effects on cards */
    .pkg-custom-card {
      transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), 
                  box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1), 
                  border-color 0.3s ease !important;
      will-change: transform, opacity, box-shadow;
    }
    .pkg-custom-card:hover {
      transform: translateY(-8px) scale(1.015) !important;
      box-shadow: 0 20px 40px rgba(139, 107, 27, 0.12), 0 8px 24px rgba(44, 26, 17, 0.06) !important;
      border-color: var(--gold) !important;
    }
    .pkg-custom-card .pkg-img-wrap img {
      transition: transform 0.5s ease-in-out !important;
      will-change: transform;
    }
    .pkg-custom-card:hover .pkg-img-wrap img {
      transform: scale(1.08) !important;
    }
    .pkg-custom-card .icon i {
      transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
    }
    .pkg-custom-card:hover .icon i {
      transform: scale(1.15) rotate(5deg) !important;
    }
    .pkg-custom-card .select-package {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
    }
    .pkg-custom-card:hover .select-package {
      background-color: var(--wine) !important;
      color: #FFFFFF !important;
      border-color: var(--wine) !important;
      box-shadow: 0 4px 12px rgba(110, 20, 35, 0.25) !important;
    }

    /* Scroll Entrance Animation Classes */
    .animate-on-scroll {
      opacity: 0;
      transform: translateY(24px);
      will-change: transform, opacity;
      transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), 
                  transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .animate-on-scroll.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Add-on services selection chips in form */
    .addon-checkboxes-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 8px;
      margin-bottom: 16px;
      max-height: 0;
      overflow: hidden;
      opacity: 0;
      transition: max-height 0.35s ease-in-out, opacity 0.3s ease-in-out;
    }
    .addon-checkboxes-grid.show {
      max-height: 500px;
      opacity: 1;
      margin-bottom: 24px;
    }
    .addon-toggle-header {
      transition: border-color 0.25s ease, background-color 0.25s ease, box-shadow 0.25s ease !important;
    }
    .addon-toggle-header:hover {
      border-color: var(--gold) !important;
      box-shadow: 0 4px 10px rgba(139, 107, 27, 0.05);
    }
    .addon-toggle-header.active {
      border-color: var(--wine) !important;
      background: rgba(139, 20, 35, 0.02) !important;
    }
    .addon-chip {
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      margin-bottom: 0;
    }
    .addon-chip input {
      display: none !important; /* Hide native checkbox entirely */
    }
    .addon-chip span {
      display: inline-block;
      padding: 6px 14px;
      border: 1px dashed var(--gold-line);
      border-radius: 20px;
      background: #FFFDF9;
      color: var(--charcoal);
      font-size: 0.85rem;
      font-weight: 600;
      transition: all 0.25s ease;
      user-select: none;
    }
    .addon-chip input:checked + span {
      background: var(--wine) !important;
      color: #FFFFFF !important;
      border-color: var(--wine) !important;
      box-shadow: 0 4px 8px rgba(110, 20, 35, 0.15);
      border-style: solid !important;
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
    /* Hide number input spinner arrows */
    .form-group-custom input[type="number"]::-webkit-outer-spin-button,
    .form-group-custom input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    .form-group-custom input[type="number"] {
      -moz-appearance: textfield;
    }
    
    @media (max-width: 767.98px) {
      .mobile-swipe-deck {
        justify-content: flex-start !important;
        padding-left: 16px !important;
        padding-right: 16px !important;
      }
      .services-hero {
        padding: 28px 16px !important;
      }
      .services-hero h1 {
        font-size: 25px !important;
        line-height: 1.25 !important;
        margin-bottom: 8px !important;
      }
      .services-hero p {
        font-size: 0.85rem !important;
        line-height: 1.45 !important;
      }
      .tab-content {
        display: flex !important;
        flex-direction: column !important;
        width: 100% !important;
        opacity: 1 !important;
        visibility: visible !important;
        min-height: 300px !important;
      }
      .tab-content > .tab-pane {
        width: 100% !important;
      }
      .tab-content > .tab-pane.fade {
        opacity: 0 !important;
        transform: translateY(8px) !important;
        transition: opacity 0.45s ease-in-out, transform 0.45s ease-in-out !important;
      }
      .tab-content > .tab-pane.active {
        display: block !important;
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
      }
      .pkg-tabs {
        display: flex !important;
        justify-content: center !important;
        gap: 10px !important;
        margin: 0 auto 20px auto !important;
        width: 100% !important;
        max-width: 340px !important;
        padding: 0 !important;
        border: none !important;
        background: transparent !important;
      }
      .pkg-tabs .nav-item {
        flex: 1 !important;
      }
      .pkg-tabs .nav-link {
        display: block !important;
        width: 100% !important;
        text-align: center !important;
        border-radius: 20px !important;
        padding: 8px 12px !important;
        border: 1px solid #E6D8C3 !important;
        background: #FFFDF9 !important;
        color: #2A1B12 !important;
        font-weight: 700 !important;
        font-size: 14px !important;
        transition: all 0.25s ease !important;
      }
      .pkg-tabs .nav-link.active {
        background-color: var(--wine) !important;
        color: #FFFFFF !important;
        border-color: var(--wine) !important;
        box-shadow: 0 4px 10px rgba(110, 20, 35, 0.15) !important;
      }
      .pkg-custom-card {
        padding: 16px !important;
        margin-bottom: 20px !important;
        border-radius: 16px !important;
        background: #FFFDF9 !important;
        border: 1px solid #E6D8C3 !important;
        box-sizing: border-box !important;
        height: auto !important;
        display: flex !important;
        flex-direction: column !important;
        box-shadow: 0 4px 12px rgba(44, 26, 17, 0.04) !important;
      }
      .pkg-img-wrap {
        margin: -16px -16px 12px -16px !important;
        height: 140px !important;
        border-top-left-radius: 16px !important;
        border-top-right-radius: 16px !important;
        overflow: hidden !important;
      }
      .pkg-img-wrap img {
        width: 100% !important;
        height: 140px !important;
        object-fit: cover !important;
        border-radius: 12px 12px 0 0 !important;
        display: block !important;
      }
      .pkg-header {
        padding-bottom: 0 !important;
        margin-bottom: 0 !important;
      }
      .pkg-header h3 {
        font-size: 20px !important;
        margin-bottom: 6px !important;
        font-weight: 700 !important;
        color: var(--charcoal) !important;
      }
      .pkg-header .desc {
        font-size: 13px !important;
        line-height: 1.4 !important;
        color: #5A4A42 !important;
        margin-bottom: 12px !important;
      }
      .pkg-features {
        display: flex !important;
        flex-direction: column !important;
        gap: 0 !important;
        padding: 0 !important;
        margin: 0 !important;
        list-style: none !important;
      }
      .pkg-features li {
        display: flex !important;
        align-items: center !important;
        gap: 8px !important;
        margin-bottom: 8px !important;
        font-size: 13px !important;
        color: #2A1B12 !important;
        text-align: left !important;
      }
      .pkg-features li i {
        font-size: 14px !important;
        color: #C59B27 !important;
        margin-top: 0 !important;
      }
      .pkg-custom-card .pt-3 {
        padding-top: 0 !important;
        margin-top: auto !important;
      }
      .select-package {
        width: 100% !important;
        height: 42px !important;
        margin-top: 12px !important;
        font-size: 13px !important;
        font-weight: 700 !important;
        border-radius: 21px !important;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
      }
      /* Signature Food Galleries Mobile Layout Refactoring */
      .menu-items-grid {
        height: auto !important;
        min-height: auto !important;
        padding: 16px !important;
        padding-bottom: 24px !important;
        opacity: 1 !important;
        visibility: visible !important;
        margin-top: 0 !important;
        margin-bottom: 0 !important;
      }
      .menu-showcase-section {
        padding: 28px 16px !important;
        margin-bottom: 0 !important;
        position: relative !important;
        z-index: 1 !important;
      }
      .menu-pane .row {
        display: grid !important;
        grid-template-columns: 1fr 1fr !important;
        gap: 12px !important;
        padding: 0 !important;
        margin: 0 !important;
      }
      .menu-pane .menu-item-row {
        width: 100% !important;
        max-width: none !important;
        padding: 0 !important;
        margin: 0 !important;
        border-bottom: none !important;
        display: block !important;
      }
      .menu-pane .menu-item-name {
        font-size: 14px !important;
        font-weight: bold !important;
        margin-bottom: 4px !important;
        color: var(--wine) !important;
        line-height: 1.25 !important;
      }
      .menu-pane .menu-item-desc {
        font-size: 12px !important;
        color: #5A4A42 !important;
        line-height: 1.35 !important;
        margin-top: 0 !important;
      }

      /* Inquiry Form Mobile Layout Refactoring */
      .inquiry-form-section {
        padding: 28px 16px !important;
        margin-top: 0 !important;
        position: relative !important;
        z-index: 10 !important;
      }
      .inquiry-form-box {
        padding: 24px 16px !important;
        background: var(--ivory) !important;
        border: 1px solid var(--gold-line) !important;
        border-radius: 24px !important;
        max-width: 100% !important;
      }
      .inquiry-form-box .text-center.mb-5 {
        margin-bottom: 20px !important;
      }
      .inquiry-form-box h2.section-title {
        font-size: 24px !important;
        margin-bottom: 6px !important;
      }
      .inquiry-form-box p.text-muted {
        font-size: 13px !important;
        line-height: 1.4 !important;
        margin-bottom: 0 !important;
      }
      .form-group-custom {
        margin-bottom: 0 !important;
      }
      .form-group-custom label {
        font-size: 11px !important;
        margin-bottom: 4px !important;
      }
      .form-group-custom input:not([type="checkbox"]),
      .form-group-custom select,
      .form-group-custom textarea {
        height: 44px !important;
        font-size: 14px !important;
        padding: 8px 12px !important;
        margin-bottom: 12px !important;
        border-radius: 8px !important;
        border: 1px solid #E6D8C3 !important;
        width: 100% !important;
        box-sizing: border-box !important;
        background: #FFFFFF !important;
      }
      .form-group-custom textarea {
        height: 80px !important;
      }
      .form-group-custom input[type="checkbox"] {
        width: 18px !important;
        height: 18px !important;
        margin-bottom: 0 !important;
        padding: 0 !important;
        background: transparent !important;
        border: none !important;
        flex-shrink: 0 !important;
      }
      .side-by-side-row {
        display: flex !important;
        gap: 10px !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
      }
      .side-by-side-row > div {
        flex: 1 !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      #inquiry button[type="submit"] {
        background: #25D366 !important;
        color: #FFF !important;
        font-weight: 700 !important;
        height: 48px !important;
        border-radius: 24px !important;
        font-size: 14px !important;
        border: none !important;
        margin-top: 12px !important;
        padding: 0 !important;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        width: 100% !important;
        box-shadow: none !important;
      }
      /* Horizontally scrollable tabs with hidden scrollbar */
      .menu-tabs {
        justify-content: flex-start !important;
        overflow-x: auto;
        white-space: nowrap;
        padding-bottom: 10px;
        margin-bottom: 2rem !important;
        flex-wrap: nowrap !important;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
      }
      .menu-tabs::-webkit-scrollbar {
        display: none;
      }
      .menu-tab-btn {
        flex-shrink: 0;
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
          <li class="nav-item"><a class="nav-link nav-link-custom active" href="{{ route('services') }}">Services</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('gallery') }}">Gallery</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
        <div class="d-flex mt-2 mt-lg-0">
          <a href="https://wa.me/916393998141?text=Hello%20S.%20Caterers!%20I%20would%20like%20to%20inquire%20about%20your%20catering%20packages%20and%20menu%20customizations." target="_blank" class="btn-gold"><i class="fa-brands fa-whatsapp me-1"></i> WhatsApp Us</a>
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
        <p style="font-size: 0.88rem; color: var(--wine); font-style: italic; font-weight: 600; margin-top: 10px; margin-bottom: 0;">*Note: All packages are fully customizable. Final pricing depends on menu selections and guest count, subject to mutual discussion.</p>
      </div>

      <!-- Desktop View (Grid Layout) -->
      <div class="row g-4 justify-content-center d-none d-md-flex">
        <!-- Silver Menu -->
        <div class="col-md-6 col-lg-4">
          <div class="pkg-custom-card animate-on-scroll">
            <div class="pkg-header">
              <div class="icon"><i class="fa-solid fa-seedling"></i></div>
              <h3>Silver Menu</h3>
              <p class="desc">Classic Indian fine vegetarian feast crafted with authentic spices and tradition. Perfect for sangeet functions, corporate events, and festive celebrations.</p>
            </div>
            <ul class="pkg-features">
              <li><i class="fa-solid fa-circle-check"></i> <span>Complete Indian Buffet Service</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span>2 Starters, 3 Authentic Gravy Mains & 2 Desi Sweets</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span>Live Tandoor Counter (Naan, Roti, Kulcha)</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span>Jeera Rice, Pulao & Authentic Tadka Dal</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span>Fresh Jaljeera & Welcome Drinks Counter</span></li>
            </ul>
            <div class="text-center mt-auto pt-3">
              <a href="#inquiry" class="btn-outline-wine w-100 select-package" data-package="Silver Menu">Select Silver Menu</a>
            </div>
          </div>
        </div>

        <!-- Gold Menu -->
        <div class="col-md-6 col-lg-4">
          <div class="pkg-custom-card animate-on-scroll">
            <div class="pkg-header">
              <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
              <h3>Gold Menu</h3>
              <p class="desc">Our signature luxury Indian banquet featuring live chef counters, rich gravy delicacies, and royal desserts.</p>
            </div>
            <ul class="pkg-features">
              <li><i class="fa-solid fa-circle-check"></i> <span>5-Course Luxury Indian Banquet</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span>Live Dilli Chaat Counter (Pani Puri, Aloo Tikki, Raj Kachori)</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span>Zafrani Paneer & Dahi Ke Kebab Starters</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span>Royal Shahi Paneer, Dal Makhani & Kashmiri Pulao</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span>Gold & Brass Tableware Setup with Butler Service</span></li>
            </ul>
            <div class="text-center mt-auto pt-3">
              <a href="#inquiry" class="btn-outline-wine w-100 select-package" data-package="Gold Menu">Select Gold Menu</a>
            </div>
          </div>
        </div>

        <!-- Royal Menu -->
        <div class="col-md-6 col-lg-4">
          <div class="pkg-custom-card royal-active animate-on-scroll">
            <div class="royal-badge">Chef's Signature</div>
            <div class="pkg-header">
              <div class="icon" style="color: var(--gold);"><i class="fa-solid fa-crown"></i></div>
              <h3>Royal Menu</h3>
              <p class="desc">Opulent VIP Rajwada banquet dining, 24k gold leaf presentation, Awadhi dum biryanis, and traditional thali service.</p>
            </div>
            <ul class="pkg-features">
              <li><i class="fa-solid fa-circle-check"></i> <span>7-Course Royal Rajwada Feast</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span>2 Live Specialty Counters (Live Chaat & Live Jalebi-Rabri)</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span>24k Gold Leaf Paneer & Dum Pukht Dal Makhani</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span>Awadhi Subz Dum Biryani & Methi Chaman</span></li>
              <li><i class="fa-solid fa-circle-check"></i> <span>Traditional Royal Silver Thali & White-Glove Service</span></li>
            </ul>
            <div class="text-center mt-auto pt-3">
              <a href="#inquiry" class="btn-gold w-100 select-package" data-package="Royal Menu">Select Royal Menu</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile View (Slider Layout) -->
      <div class="d-md-none">
        <div class="row g-4 mobile-swipe-deck" id="packages-swipe-deck">
          <!-- Silver Menu -->
          <div class="col-12">
            <div class="pkg-custom-card animate-on-scroll">
              <div class="pkg-header">
                <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                <h3>Silver Menu</h3>
                <p class="desc">Classic Indian fine vegetarian feast crafted with authentic spices and tradition. Perfect for sangeet functions, corporate events, and festive celebrations.</p>
              </div>
              <ul class="pkg-features">
                <li><i class="fa-solid fa-circle-check"></i> <span>Complete Indian Buffet Service</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span>2 Starters, 3 Authentic Gravy Mains & 2 Desi Sweets</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span>Live Tandoor Counter (Naan, Roti, Kulcha)</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span>Jeera Rice, Pulao & Authentic Tadka Dal</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span>Fresh Jaljeera & Welcome Drinks Counter</span></li>
              </ul>
              <div class="text-center mt-auto pt-3">
                <a href="#inquiry" class="btn-outline-wine w-100 select-package" data-package="Silver Menu">Select Silver Menu</a>
              </div>
            </div>
          </div>
          
          <!-- Gold Menu -->
          <div class="col-12">
            <div class="pkg-custom-card animate-on-scroll">
              <div class="pkg-header">
                <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
                <h3>Gold Menu</h3>
                <p class="desc">Our signature luxury Indian banquet featuring live chef counters, rich gravy delicacies, and royal desserts.</p>
              </div>
              <ul class="pkg-features">
                <li><i class="fa-solid fa-circle-check"></i> <span>5-Course Luxury Indian Banquet</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span>Live Dilli Chaat Counter (Pani Puri, Aloo Tikki, Raj Kachori)</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span>Zafrani Paneer & Dahi Ke Kebab Starters</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span>Royal Shahi Paneer, Dal Makhani & Kashmiri Pulao</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span>Gold & Brass Tableware Setup with Butler Service</span></li>
              </ul>
              <div class="text-center mt-auto pt-3">
                <a href="#inquiry" class="btn-outline-wine w-100 select-package" data-package="Gold Menu">Select Gold Menu</a>
              </div>
            </div>
          </div>
          
          <!-- Royal Menu -->
          <div class="col-12">
            <div class="pkg-custom-card royal-active animate-on-scroll">
              <div class="royal-badge">Chef's Signature</div>
              <div class="pkg-header">
                <div class="icon" style="color: var(--gold);"><i class="fa-solid fa-crown"></i></div>
                <h3>Royal Menu</h3>
                <p class="desc">Opulent VIP Rajwada banquet dining, 24k gold leaf presentation, Awadhi dum biryanis, and traditional thali service.</p>
              </div>
              <ul class="pkg-features">
                <li><i class="fa-solid fa-circle-check"></i> <span>7-Course Royal Rajwada Feast</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span>2 Live Specialty Counters (Live Chaat & Live Jalebi-Rabri)</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span>24k Gold Leaf Paneer & Dum Pukht Dal Makhani</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span>Awadhi Subz Dum Biryani & Methi Chaman</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span>Traditional Royal Silver Thali & White-Glove Service</span></li>
              </ul>
              <div class="text-center mt-auto pt-3">
                <a href="#inquiry" class="btn-gold w-100 select-package" data-package="Royal Menu">Select Royal Menu</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Packages Pagination Dots -->
        <div class="carousel-dots d-md-none" id="dots-packages" style="margin-top: 15px;"></div>
      </div>
    </div>
  </section>

  <!-- ================= PREMIUM ADD-ON COUNTERS ================= -->
  <section class="addons-section bg-white py-5" id="addons" style="border-bottom: 1px solid var(--gold-line);">
    <div class="container py-3">
      <div class="section-title-wrap text-center mb-5">
        <span class="eyebrow">EXCLUSIVE CULINARY ADD-ONS</span>
        <h2 class="section-title">Signature Live <span class="accent">Counters</span></h2>
        <p class="text-muted" style="max-width: 600px; margin: 0.5rem auto 0;">Enhance your catering experience with our interactive specialty live stations, overseen by our expert chefs.</p>
      </div>

      <div class="row g-4 justify-content-center mobile-swipe-deck" id="counters-swipe-deck">
        <!-- Craft Bar Lounge -->
        <div class="col-md-6 col-lg-4">
          <div class="pkg-custom-card animate-on-scroll h-100 d-flex flex-column" style="background: var(--bg-white); border: 1px solid var(--gold-line); border-radius: 18px; padding: 2rem;">
            <div class="pkg-img-wrap" style="margin: -2rem -2rem 1.5rem -2rem; border-top-left-radius: 18px; border-top-right-radius: 18px;">
              <img src="{{ asset('images/bar-lounge.jpg') }}" alt="Craft Bar Lounge" loading="lazy">
            </div>
            <div class="pkg-header">
              <div class="icon mb-3" style="font-size: 2.2rem; color: var(--wine);"><i class="fa-solid fa-martini-glass-citrus"></i></div>
              <h3 style="font-size: 1.35rem; font-weight: 700; color: var(--charcoal);">Craft Bar Lounge</h3>
              <p class="desc" style="font-size: 0.88rem; color: var(--ink-soft); line-height: 1.5; margin-bottom: 1.5rem;">Artisanal mixology lounge serving premium cocktails &amp; smoke-infused mocktails, fresh botanical sherbets — crafted live by professional mixologists.</p>
            </div>
            <ul class="pkg-features" style="list-style: none; padding: 0; margin-bottom: 2rem; flex-grow: 1;">
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Professional Master Mixologist Team</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Premium Cocktails &amp; Mocktails Bar (served on request)</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Desi Fusion Mocktails (Kala Khatta, Masala Guava, Shahi Thandai)</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Fresh Botanical &amp; Gold Dust Garnishes</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Luxury Crystal Glassware Setup</span></li>
            </ul>
            <div class="mt-auto">
              <a href="#inquiry" class="btn-outline-wine w-100 select-package" data-package="Craft Bar Counter" style="font-size: 0.88rem; padding: 10px 0; border-radius: 8px;">Book Craft Bar Counter</a>
            </div>
          </div>
        </div>

        <!-- Live Juice Counter -->
        <div class="col-md-6 col-lg-4">
          <div class="pkg-custom-card animate-on-scroll h-100 d-flex flex-column" style="background: var(--bg-white); border: 1px solid var(--gold-line); border-radius: 18px; padding: 2rem;">
            <div class="pkg-img-wrap" style="margin: -2rem -2rem 1.5rem -2rem; border-top-left-radius: 18px; border-top-right-radius: 18px;">
              <img src="{{ asset('images/juice-counter.jpg') }}" alt="Live Juice Counter" loading="lazy">
            </div>
            <div class="pkg-header">
              <div class="icon mb-3" style="font-size: 2.2rem; color: var(--wine);"><i class="fa-solid fa-lemon"></i></div>
              <h3 style="font-size: 1.35rem; font-weight: 700; color: var(--charcoal);">Live Juice Counter</h3>
              <p class="desc" style="font-size: 0.88rem; color: var(--ink-soft); line-height: 1.5; margin-bottom: 1.5rem;">Pure, natural &amp; refreshing cold-pressed fruit juices, signature herb infusions, and live gourmet dispensers served in a grand fairy-lit floral setup.</p>
            </div>
            <ul class="pkg-features" style="list-style: none; padding: 0; margin-bottom: 2rem; flex-grow: 1;">
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span><strong>Pure Fruit Juices:</strong> Fresh Orange, Kiwi, Watermelon, Pineapple &amp; Kala Khatta</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span><strong>Specialty Infusions:</strong> Lemon Mint &amp; Botanical Refreshers</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span><strong>Live Beverage Gallery:</strong> Hygienic Glass Dispensers &amp; Custom Sips</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span><strong>Luxury Setup:</strong> Backlit Fretwork Counter with Warm Fairy Lights &amp; Floral Decor</span></li>
            </ul>
            <div class="mt-auto">
              <a href="#inquiry" class="btn-outline-wine w-100 select-package" data-package="Live Juice Counter" style="font-size: 0.88rem; padding: 10px 0; border-radius: 8px;">Book Juice Counter</a>
            </div>
          </div>
        </div>

        <!-- Vintage Bakery Counter -->
        <div class="col-md-6 col-lg-4">
          <div class="pkg-custom-card animate-on-scroll h-100 d-flex flex-column" style="background: var(--bg-white); border: 1px solid var(--gold-line); border-radius: 18px; padding: 2rem;">
            <div class="pkg-img-wrap" style="margin: -2rem -2rem 1.5rem -2rem; border-top-left-radius: 18px; border-top-right-radius: 18px;">
              <img src="{{ asset('images/bakery-counter.jpg') }}" alt="Vintage Bakery Counter" loading="lazy">
            </div>
            <div class="pkg-header">
              <div class="icon mb-3" style="font-size: 2.2rem; color: var(--wine);"><i class="fa-solid fa-cookie-bite"></i></div>
              <h3 style="font-size: 1.35rem; font-weight: 700; color: var(--charcoal);">Vintage Bakery Counter</h3>
              <p class="desc" style="font-size: 0.88rem; color: var(--ink-soft); line-height: 1.5; margin-bottom: 1.5rem;">Treat your guests to a 100% pure vegetarian Vintage Cafe &amp; Bakery experience featuring artisanal pastries, gourmet puddings, dessert cups, fresh muffins, and hot oven-baked cafe savories.</p>
            </div>
            <ul class="pkg-features" style="list-style: none; padding: 0; margin-bottom: 2rem; flex-grow: 1;">
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span><strong>Signature Pastries:</strong> Belgian Chocolate Truffle, Tropical Pineapple &amp; Red Velvet</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span><strong>Gourmet Puddings &amp; Desserts:</strong> Butterscotch Pudding, Strawberry Compote &amp; Chocolate Fountain</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span><strong>Fresh Bakes &amp; Confections:</strong> Double Choco Muffins, Fruit Cups, Brownies &amp; Dry Fruit Cookies</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span><strong>Hot Cafe Savories:</strong> Oven-Baked Garlic Bread, Live Cheese Pizza, Burgers &amp; Alfredo Pasta</span></li>
            </ul>
            <div class="mt-auto">
              <a href="#inquiry" class="btn-outline-wine w-100 select-package" data-package="Vintage Bakery Counter" style="font-size: 0.88rem; padding: 10px 0; border-radius: 8px;">Book Bakery Counter</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Counters Pagination Dots -->
      <div class="carousel-dots d-md-none" id="dots-counters" style="margin-top: 15px;"></div>
    </div>
  </section>

  <!-- ================= SIGNATURE FOOD GALLERIES ================= -->
  <section class="menu-showcase-section" id="menu-galleries">
    <div class="container">
      <div class="section-title-wrap text-center mb-5 animate-on-scroll">
        <span class="eyebrow">OUR SPECIALTIES</span>
        <h2 class="section-title">Signature Food <span class="accent">Galleries</span></h2>
        <p class="text-muted" style="max-width: 600px; margin: 0.5rem auto 0;">Explore curated items selected from our menus. Toggle the tabs below to view signature items.</p>
      </div>

      <!-- Wok Filter Tabs -->
      <div class="menu-tabs animate-on-scroll">
        <button class="menu-tab-btn active" onclick="switchTab('drinks')">Beverages & Shakes</button>
        <button class="menu-tab-btn" onclick="switchTab('starters')">Gourmet Starters</button>
        <button class="menu-tab-btn" onclick="switchTab('chaat')">Lakhnavi Chaat Street</button>
        <button class="menu-tab-btn" onclick="switchTab('global')">Global Wok Live</button>
        <button class="menu-tab-btn" onclick="switchTab('main')">Shahi Main Course</button>
        <button class="menu-tab-btn" onclick="switchTab('sweets')">Sweet Endings</button>
      </div>

      <!-- Menu Grid Pane -->
      <div class="menu-items-grid animate-on-scroll">
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
              <div class="menu-item-name">Espresso & Cappuccino</div>
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
              <div class="menu-item-name">Pani Batasha (Atta & Suji)</div>
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
              <div class="menu-item-name">Veg. & Cheese Dimsums</div>
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
              <div class="menu-item-name">Kesariya Chena Rabdi</div>
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
              <input type="tel" name="phone" id="inq-phone" placeholder="e.g. 6393998141" maxlength="10" pattern="[6-9][0-9]{9}" title="Enter a valid 10-digit Indian mobile number" required>
            </div>
            <div class="col-md-6 form-group-custom">
              <label for="inq-package">Catering Package</label>
              <select name="package" id="inq-package" required>
                <option value="" disabled selected>Choose a starting tier...</option>
                <option value="Silver Menu">Silver Menu</option>
                <option value="Gold Menu">Gold Menu</option>
                <option value="Royal Menu">Royal Menu</option>
                <option value="Custom Catering Service">Custom Catering Service</option>
              </select>
            </div>
          </div>

          <div class="row side-by-side-row">
            <div class="col-6 form-group-custom">
              <label for="inq-date">Event Date</label>
              <input type="date" name="event_date" id="inq-date" required>
            </div>
            <div class="col-6 form-group-custom">
              <label for="inq-guests">Expected Guests <span style="font-size:0.75rem;color:var(--wine);font-weight:600;">(min. 10)</span></label>
              <input type="number" name="guests" id="inq-guests" placeholder="e.g. 250" min="10" required>
            </div>
          </div>

          <div class="form-group-custom">
            <label for="inq-notes">Special Dietary Requests &amp; Notes <span style="font-size:0.75rem;color:#999;font-weight:500;">(Optional)</span></label>
            <textarea name="notes" id="inq-notes" rows="4" placeholder="Mention any specific requirements (e.g. 100% Satvik / Jain dietary requirements, custom uniform theme, live teppanyaki preferences)..."></textarea>
          </div>

          <!-- Add-on Services Section -->
          <div class="form-group-custom mb-3">
            <div class="addon-toggle-header" id="addon-toggle-trigger" style="display: flex; align-items: center; justify-content: space-between; cursor: pointer; padding: 10px 14px; background: #FFFDF9; border: 1px solid #E6D8C3; border-radius: 10px; transition: all 0.3s ease; margin-bottom: 12px; user-select: none;">
              <span style="display: flex; align-items: center; gap: 8px; font-weight: 700; color: var(--wine); font-size: 0.9rem; letter-spacing: 0.05em; text-transform: uppercase;">
                <i class="fa-solid fa-circle-plus" style="color: var(--gold); font-size: 1.05rem;"></i> Select Add-on Services <span style="font-size:0.75rem;color:#999;font-weight:500;text-transform:none;letter-spacing:0;">(Optional)</span>
              </span>
              <span style="font-size: 0.8rem; color: #8B6B1B; font-weight: 700;" class="toggle-status-text">TAP TO EXPAND</span>
            </div>
            <div class="addon-checkboxes-grid" id="addon-grid">
              <label class="addon-chip">
                <input type="checkbox" name="addons[]" value="Craft Bar Lounge">
                <span>+ Craft Bar Lounge</span>
              </label>
              <label class="addon-chip">
                <input type="checkbox" name="addons[]" value="Live Monin Juice Bar">
                <span>+ Live Juice Bar</span>
              </label>
              <label class="addon-chip">
                <input type="checkbox" name="addons[]" value="Vintage Bakery Counter">
                <span>+ Vintage Bakery Counter</span>
              </label>
              <label class="addon-chip">
                <input type="checkbox" name="addons[]" value="Live Pizza & Pasta Station">
                <span>+ Live Italian Station</span>
              </label>
              <label class="addon-chip">
                <input type="checkbox" name="addons[]" value="Lakhnavi Chaat Live">
                <span>+ Lakhnavi Chaat Live</span>
              </label>
              <label class="addon-chip">
                <input type="checkbox" name="addons[]" value="Espresso Coffee Hub">
                <span>+ Live Coffee Station</span>
              </label>
              <label class="addon-chip">
                <input type="checkbox" name="addons[]" value="Custom Add-on Service">
                <span>+ Custom Add-on Service</span>
              </label>
            </div>
          </div>

          <div class="form-group-custom d-flex align-items-center gap-2 mb-4">
            <input type="checkbox" name="customization" id="inq-customization" value="Yes" style="width: 18px; height: 18px; cursor: pointer; accent-color: var(--wine);">
            <label for="inq-customization" style="margin-bottom: 0; cursor: pointer; font-size: 0.88rem; font-weight: 600; color: var(--charcoal); text-transform: none; letter-spacing: normal;">I would like to customize my package menu / add custom counters</label>
          </div>

          <div class="text-center mb-3">
            <p style="font-size: 0.82rem; color: var(--wine); font-style: italic; font-weight: 600; margin-bottom: 0;">*Note: Final catering prices depend on menu selection, guest count, and mutual discussion.</p>
          </div>

          <div class="text-center pt-2">
            <button type="submit" class="btn-gold w-100 py-3" style="font-size: 1.05rem; border-radius: 12px; font-weight: 700;">Submit &amp; Open WhatsApp Chat</button>
          </div>
        </form>
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

  <!-- Bootstrap 5 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Interactive Tabs Logic -->
  <script>
    // Toggle visibility of add-on services grid with smooth height transitions
    function initAddonsToggle() {
      const trigger = document.getElementById('addon-toggle-trigger');
      if (trigger) {
        if (trigger.dataset.addonInit) return;
        trigger.dataset.addonInit = "true";
        
        trigger.addEventListener('click', () => {
          const grid = document.getElementById('addon-grid');
          if (!grid) return;
          const statusText = trigger.querySelector('.toggle-status-text');
          const icon = trigger.querySelector('i');
          
          const isShow = grid.classList.toggle('show');
          trigger.classList.toggle('active');
          
          if (isShow) {
            if (statusText) statusText.textContent = "TAP TO COLLAPSE";
            if (icon) icon.className = "fa-solid fa-circle-minus";
          } else {
            if (statusText) statusText.textContent = "TAP TO EXPAND";
            if (icon) icon.className = "fa-solid fa-circle-plus";
          }
        });
      }
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initAddonsToggle);
    } else {
      initAddonsToggle();
    }

    function switchTab(tabId) {
      // Deactivate all tab buttons
      const buttons = document.querySelectorAll('.menu-tab-btn');
      buttons.forEach(btn => btn.classList.remove('active'));
      
      // Deactivate all menu panes
      const panes = document.querySelectorAll('.menu-pane');
      panes.forEach(pane => pane.classList.remove('active'));
      
      // Activate target tab button
      const targetBtn = Array.from(buttons).find(btn => btn.getAttribute('onclick').includes(tabId));
      if (targetBtn) {
        targetBtn.classList.add('active');
        
        // Dynamically sync and scroll the active tab container so it centers on screen (mobile)
        const container = document.querySelector('.menu-tabs');
        if (container) {
          const btnOffset = targetBtn.offsetLeft;
          const btnWidth = targetBtn.offsetWidth;
          const containerWidth = container.offsetWidth;
          container.scrollTo({
            left: btnOffset - (containerWidth / 2) + (btnWidth / 2),
            behavior: 'smooth'
          });
        }
      }
      
      // Activate target menu pane
      const targetPane = document.getElementById('pane-' + tabId);
      if (targetPane) targetPane.classList.add('active');
    }

    // Auto-sliding tabs for Specialties / Food Galleries section
    function initSpecialtiesTabAutoplay() {
      const tabButtons = document.querySelectorAll('.menu-tab-btn');
      if (tabButtons.length === 0) return;

      const tabIds = ['drinks', 'starters', 'chaat', 'global', 'main', 'sweets'];
      let currentTabIndex = 0;
      let autoplayInterval = null;
      let resumeTimeout = null;
      let isPaused = false;

      const startAutoplay = () => {
        if (autoplayInterval) clearInterval(autoplayInterval);
        autoplayInterval = setInterval(() => {
          if (isPaused) return;
          currentTabIndex = (currentTabIndex + 1) % tabIds.length;
          switchTab(tabIds[currentTabIndex]);
        }, 3500);
      };

      const stopAutoplay = () => {
        if (autoplayInterval) {
          clearInterval(autoplayInterval);
          autoplayInterval = null;
        }
      };

      const handleUserInteraction = () => {
        isPaused = true;
        stopAutoplay();
        if (resumeTimeout) clearTimeout(resumeTimeout);
        // Resume autoplay after 30 seconds of inactivity
        resumeTimeout = setTimeout(() => {
          isPaused = false;
          startAutoplay();
        }, 30000);
      };

      // Listen for click on each tab button to update the index and handle user override
      tabButtons.forEach((btn, idx) => {
        btn.addEventListener('click', () => {
          currentTabIndex = idx;
          handleUserInteraction();
        });
      });

      // Pause on hover over the entire grid or tabs
      const targetSection = document.getElementById('menu-galleries');
      if (targetSection) {
        targetSection.addEventListener('mouseenter', () => {
          isPaused = true;
          stopAutoplay();
        });
        targetSection.addEventListener('mouseleave', () => {
          isPaused = false;
          startAutoplay();
        });
        targetSection.addEventListener('touchstart', () => {
          handleUserInteraction();
        }, { passive: true });
        targetSection.addEventListener('touchend', () => {
          handleUserInteraction();
        }, { passive: true });
      }

      // Only start autoplay on mobile
      if (window.innerWidth < 992) {
        startAutoplay();
      }
    }

    // Only initialise autoplay on mobile screens; desktop uses manual click only
    function maybeInitSpecialtiesAutoplay() {
      if (window.innerWidth < 992) {
        initSpecialtiesTabAutoplay();
      }
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', maybeInitSpecialtiesAutoplay);
    } else {
      maybeInitSpecialtiesAutoplay();
    }

    // Auto-select package in inquiry form on click
    function initAutoSelectPackage() {
      document.querySelectorAll('.select-package').forEach(link => {
        link.addEventListener('click', function(e) {
          const pkgName = this.getAttribute('data-package');
          const selectEl = document.getElementById('inq-package');
          if (selectEl) {
            selectEl.value = pkgName;
          }
        });
      });
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initAutoSelectPackage);
    } else {
      initAutoSelectPackage();
    }

    // Strip non-digit characters from phone field in real time
    const phoneInput = document.getElementById('inq-phone');
    if (phoneInput) {
      phoneInput.addEventListener('input', function() {
        this.value = this.value.replace(/\D/g, '').slice(0, 10);
      });
      phoneInput.addEventListener('keypress', function(e) {
        if (!/[0-9]/.test(e.key)) e.preventDefault();
      });
    }

    // Intercept form submission, save to database via AJAX, then redirect to WhatsApp
    const form = document.querySelector('.inquiry-form-box form');
    if (form) {
      form.addEventListener('submit', function(e) {
        e.preventDefault();

        // --- Validate phone: exactly 10 digits, starts with 6-9 ---
        const rawPhone = document.getElementById('inq-phone').value.trim();
        if (!/^[6-9][0-9]{9}$/.test(rawPhone)) {
          alert('Please enter a valid 10-digit Indian mobile number (e.g. 6393998141).');
          document.getElementById('inq-phone').focus();
          return;
        }

        // --- Validate guests: must be 10 or more ---
        const rawGuests = parseInt(document.getElementById('inq-guests').value, 10);
        if (isNaN(rawGuests) || rawGuests < 10) {
          alert('Expected Guests must be at least 10.');
          document.getElementById('inq-guests').focus();
          return;
        }

        const name = document.getElementById('inq-name').value;
        const email = document.getElementById('inq-email').value;
        const phone = document.getElementById('inq-phone').value;
        const date = document.getElementById('inq-date').value;
        const guests = document.getElementById('inq-guests').value;
        const pkg = document.getElementById('inq-package').value;
        const notes = document.getElementById('inq-notes').value;
        const customize = document.getElementById('inq-customization').checked ? 'Yes' : 'No';
        const addons = Array.from(document.querySelectorAll('input[name="addons[]"]:checked'))
                            .map(cb => cb.value);
        
        // Prepare data to save in SQLite via AJAX
        const formData = new FormData(this);
        
        // Submit via AJAX
        fetch(this.action, {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          }
        }).then(response => {
          // Construct the WhatsApp message details
          const msg = `Hello S. Caterers! I would like to book a catering consultation:\n\n` +
                      `*Name:* ${name}\n` +
                      `*Email:* ${email}\n` +
                      `*Phone:* ${phone}\n` +
                      `*Event Date:* ${date}\n` +
                      `*Expected Guests:* ${guests}\n` +
                      `*Package:* ${pkg}\n` +
                      `*Add-on Services:* ${addons.length > 0 ? addons.join(', ') : 'None'}\n` +
                      `*Request Menu Customization:* ${customize}\n` +
                      `*Special Requests / Notes:* ${notes ? notes : 'None'}\n\n` +
                      `*(Note: I understand final pricing depends on menu selections & discussion)*`;
                      
          const waUrl = `https://wa.me/916393998141?text=${encodeURIComponent(msg)}`;
          
          // Open WhatsApp in a new tab
          window.open(waUrl, '_blank');
          
          // Show alert and reload page
          alert("Thank you! Your catering inquiry has been saved, and you are being redirected to WhatsApp to chat with Amit Agarwal.");
          window.location.reload();
        }).catch(err => {
          console.error("Inquiry Save Error:", err);
          // Fallback direct redirect to WhatsApp
          const msg = `Hello S. Caterers! I would like to book a catering consultation:\n\n` +
                      `*Name:* ${name}\n` +
                      `*Email:* ${email}\n` +
                      `*Phone:* ${phone}\n` +
                      `*Event Date:* ${date}\n` +
                      `*Expected Guests:* ${guests}\n` +
                      `*Package:* ${pkg}\n` +
                      `*Add-on Services:* ${addons.length > 0 ? addons.join(', ') : 'None'}\n` +
                      `*Request Menu Customization:* ${customize}\n` +
                      `*Special Requests / Notes:* ${notes ? notes : 'None'}`;
          const waUrl = `https://wa.me/916393998141?text=${encodeURIComponent(msg)}`;
          window.open(waUrl, '_blank');
        });
      });

      // Intersection Observer for Scroll Entrance animations
      function initScrollAnimations() {
        const observerOptions = {
          threshold: 0.1,
          rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries, observerInstance) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('visible');
              observerInstance.unobserve(entry.target);
            }
          });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
          observer.observe(el);
        });
      }

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initScrollAnimations);
      } else {
        initScrollAnimations();
      }

      // Helper function to build and control a mobile slider carousel with dots
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
          }, 3500); // Transitions every 3.5 seconds
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

      const initMobileSliders = () => {
        setupMobileSlider('packages-swipe-deck', 'dots-packages');
        setupMobileSlider('counters-swipe-deck', 'dots-counters');
      };

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initMobileSliders);
      } else {
        initMobileSliders();
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
