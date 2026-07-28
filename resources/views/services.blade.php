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
    /* â”€â”€ PREMIUM MENU MODAL STYLES â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    .modal-xl { max-width: min(96vw, 1140px); }

    /* Smooth modal entrance */
    .modal.fade .modal-dialog { transform: translateY(-24px) scale(0.97); transition: transform 0.32s cubic-bezier(0.34,1.3,0.64,1), opacity 0.28s ease; }
    .modal.show .modal-dialog { transform: translateY(0) scale(1); }

    /* Modal container */
    .menu-modal-content {
      border-radius: 20px !important;
      border: none !important;
      overflow: hidden;
      box-shadow: 0 25px 80px rgba(0,0,0,0.55) !important;
    }

    /* Modal header — must NOT clip the absolute close button */
    .menu-modal-content .modal-header {
      overflow: visible !important;
    }

    /* Close button — always on top, large mobile tap target */
    .menu-modal-content .btn-close {
      position: absolute !important;
      top: 10px !important;
      right: 12px !important;
      z-index: 100 !important;
      width: 36px !important;
      height: 36px !important;
      min-width: 36px !important;
      min-height: 36px !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      background: rgba(255,255,255,0.15) !important;
      border-radius: 50% !important;
      opacity: 0.9 !important;
      cursor: pointer !important;
      border: none !important;
      touch-action: manipulation !important;
      -webkit-tap-highlight-color: transparent !important;
    }
    .menu-modal-content .btn-close:hover {
      background: rgba(255,255,255,0.28) !important;
      opacity: 1 !important;
    }
    /* Ensure content wrapper never covers the close button */
    .menu-modal-content .modal-header > .w-100 {
      padding-right: 52px !important; /* leave space for close btn */
    }

    /* Modal body — always scrollable, header never takes too much space */
    .menu-modal-body {
      background: #F7F4EF;
      padding: 24px !important;
      max-height: 65vh;
      overflow-y: auto;
    }
    /* Custom scrollbar */
    .menu-modal-body::-webkit-scrollbar { width: 5px; }
    .menu-modal-body::-webkit-scrollbar-track { background: #EAE0D0; border-radius: 4px; }
    .menu-modal-body::-webkit-scrollbar-thumb { background: #C6A15B; border-radius: 4px; }

    /* Modal footer */
    .menu-modal-footer {
      background: #fff;
      border-top: 2px solid #EAE0D0 !important;
      padding: 12px 22px !important;
    }

    .menu-section-card {
      background: #fff;
      border: 1px solid #EAE0D0 !important;
      border-radius: 16px !important;
      box-shadow: 0 2px 16px rgba(0,0,0,0.04);
      margin-bottom: 20px !important;
      transition: box-shadow 0.2s ease;
    }
    .menu-section-card:hover { box-shadow: 0 6px 28px rgba(0,0,0,0.09); }

    /* Section header inside card */
    .menu-section-header {
      border-bottom: 1px solid #EAE0D0;
      padding: 16px 20px;
      border-radius: 16px 16px 0 0;
    }

    /* Item card */
    .menu-item-card {
      background: #FFFDF9;
      border: 1px solid #EAE0D0 !important;
      border-radius: 12px !important;
      padding: 14px !important;
      transition: transform 0.18s ease, box-shadow 0.18s ease;
      height: 100%;
    }
    .menu-item-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(0,0,0,0.08) !important;
    }

    /* Download button in header */
    .menu-dl-btn {
      transition: transform 0.18s ease, box-shadow 0.18s ease !important;
    }
    .menu-dl-btn:hover {
      transform: translateY(-1px) scale(1.04);
      box-shadow: 0 6px 20px rgba(198,161,91,0.6) !important;
    }

    /* Package select highlight animation */
    @keyframes selectPulse {
      0%   { box-shadow: 0 0 0 0 rgba(198,161,91,0.9); border-color: #C6A15B; background: rgba(198,161,91,0.12); }
      30%  { box-shadow: 0 0 0 8px rgba(198,161,91,0.3); border-color: #C6A15B; background: rgba(198,161,91,0.18); }
      60%  { box-shadow: 0 0 0 4px rgba(198,161,91,0.15); border-color: #C6A15B; background: rgba(198,161,91,0.10); }
      100% { box-shadow: 0 0 0 8px rgba(198,161,91,0.25); border-color: #C6A15B; background: rgba(198,161,91,0.14); }
    }
    .pkg-select-highlight {
      animation: selectPulse 0.6s ease-out forwards;
      border: 2px solid #C6A15B !important;
      border-radius: 8px !important;
      outline: none !important;
      transition: all 0.3s ease;
    }


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
    
    .royal-badge {
      position: absolute;
      top: -14px;
      left: 50%;
      transform: translateX(-50%);
      background: var(--gold);
      color: var(--charcoal);
      font-size: 0.72rem;
      font-weight: 700;
      padding: 4px 16px;
      border-radius: 20px;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      z-index: 10;
      white-space: nowrap;
      box-shadow: 0 4px 12px rgba(0,0,0,0.12);
    }
    
    *:focus, *:focus-visible {
      outline: none !important;
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
        padding: 24px 18px !important;
        background: var(--ivory) !important;
        border: 1px solid var(--gold-line) !important;
        border-radius: 20px !important;
        max-width: 100% !important;
        box-shadow: 0 8px 24px rgba(32, 28, 26, 0.05) !important;
      }
      .inquiry-form-box .text-center.mb-5 {
        margin-bottom: 24px !important;
      }
      .inquiry-form-box h2.section-title {
        font-size: 22px !important;
        margin-bottom: 6px !important;
      }
      .inquiry-form-box p.text-muted {
        font-size: 13px !important;
        line-height: 1.5 !important;
        margin-bottom: 0 !important;
      }
      .form-group-custom {
        margin-bottom: 16px !important;
      }
      .form-group-custom label {
        display: block !important;
        font-size: 11px !important;
        font-weight: 700 !important;
        letter-spacing: 0.06em !important;
        margin-bottom: 6px !important;
        color: var(--wine) !important;
      }
      .form-group-custom input:not([type="checkbox"]),
      .form-group-custom select,
      .form-group-custom textarea {
        height: 46px !important;
        font-size: 14px !important;
        padding: 10px 14px !important;
        margin-bottom: 0 !important;
        border-radius: 10px !important;
        border: 1.5px solid #E6D8C3 !important;
        width: 100% !important;
        box-sizing: border-box !important;
        background: #FFFFFF !important;
      }
      .form-group-custom select {
        background-image: url("data:image/svg+xml;utf8,<svg fill='%236E1423' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>") !important;
        background-repeat: no-repeat !important;
        background-position: right 10px center !important;
        background-size: 18px !important;
        padding-right: 32px !important;
      }
      .form-group-custom textarea {
        height: 90px !important;
        padding: 10px 14px !important;
      }
      .form-group-custom input[type="checkbox"] {
        width: 18px !important;
        height: 18px !important;
        margin-top: 3px !important;
        margin-bottom: 0 !important;
        padding: 0 !important;
        background: transparent !important;
        border: none !important;
        flex-shrink: 0 !important;
      }
      .side-by-side-row {
        display: flex !important;
        flex-wrap: nowrap !important;
        gap: 10px !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        margin-bottom: 16px !important;
      }
      .side-by-side-row > div {
        flex: 1 1 50% !important;
        width: 50% !important;
        min-width: 0 !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        margin-bottom: 0 !important;
      }
      .side-by-side-row label {
        min-height: 28px !important;
        display: flex !important;
        align-items: flex-end !important;
        line-height: 1.2 !important;
      }
      .addon-toggle-header {
        padding: 12px 14px !important;
        border-radius: 12px !important;
      }
      .addon-chip span {
        font-size: 12px !important;
        padding: 6px 12px !important;
      }
      #inquiry button[type="submit"] {
        background: #25D366 !important;
        color: #FFF !important;
        font-weight: 700 !important;
        height: 50px !important;
        border-radius: 12px !important;
        font-size: 15px !important;
        border: none !important;
        margin-top: 14px !important;
        padding: 0 16px !important;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        width: 100% !important;
        box-shadow: 0 6px 16px rgba(37, 211, 102, 0.25) !important;
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
  <!-- DEBUG NOTE: 
       Desktop View: Uses 4x col-lg-3 columns in a single row (Silver, Gold, Royal, VIP).
       Mobile View: Uses .mobile-swipe-deck JS carousel with dots pagination.
       Badge styling: .royal-badge requires position: absolute; top: -14px; left: 50%; transform: translateX(-50%);
  -->
  <section class="package-grid-section" id="packages">
    <div class="container">
      <!-- Centered Section Title Wrap -->
      <div class="section-title-wrap text-center mb-4">
        <span class="eyebrow">OUR CATERING OPTIONS</span>
        <h2 class="section-title">Curated Menu <span class="accent">Packages</span></h2>
        <p class="text-muted" style="max-width: 600px; margin: 0.5rem auto 0;">Select a starting tier to begin planning your wedding feast, haldi lunch, sangeet reception, or private corporate gala.</p>
        <p style="font-size: 0.88rem; color: var(--wine); font-style: italic; font-weight: 600; margin-top: 10px; margin-bottom: 0;">*Note: All packages are fully customizable. Final pricing depends on menu selections and guest count, subject to mutual discussion.</p>
      </div>

      <!-- Small View Full Menu Button Row Aligned Right -->
      <div class="d-flex justify-content-end mb-4">
        <button type="button" class="btn btn-sm fw-bold px-3 py-2 text-white shadow-sm d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#fullMenuModal" style="background: linear-gradient(135deg, #0F0F0F 0%, #2A1B12 50%, #4A0E17 100%); border: 1.5px solid #D4AF37; border-radius: 8px; font-size: 0.82rem; letter-spacing: 0.5px; transition: all 0.2s ease;">
          <i class="fa-solid fa-book-open" style="color: #FFD700; font-size: 0.88rem;"></i>
          <span>View Full Menu</span>
          <i class="fa-solid fa-chevron-right ms-1" style="color: #FFD700; font-size: 0.75rem;"></i>
        </button>
      </div>

      <!-- Desktop View (Grid Layout - 4 Menus in One Line) -->
      <div class="row g-3 justify-content-center d-none d-md-flex">
        <!-- Silver Menu -->
        <div class="col-md-6 col-lg-3">
          <div class="pkg-custom-card animate-on-scroll" style="padding: 1.8rem 1.1rem;">
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
              <a href="#inquiry" class="btn-outline-wine w-100 select-package mb-2" data-package="Silver Menu">Select Silver Menu</a>
              <button type="button" class="btn btn-sm w-100 d-inline-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#silverMenuModal" style="background: #FFF8EB; border: 1.5px solid #E8D09E; color: #8A6B1B; font-weight: 700; font-size: 0.82rem; border-radius: 8px; padding: 8px 12px; transition: all 0.3s ease;">
                <i class="fa-solid fa-utensils" style="color: #C6A15B; font-size: 1rem;"></i> View Full Silver Menu
              </button>
            </div>
          </div>
        </div>

        <!-- Gold Menu -->
        <div class="col-md-6 col-lg-3">
          <div class="pkg-custom-card animate-on-scroll" style="padding: 1.8rem 1.1rem;">
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
              <a href="#inquiry" class="btn-outline-wine w-100 select-package mb-2" data-package="Gold Menu">Select Gold Menu</a>
              <button type="button" class="btn btn-sm w-100 d-inline-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#goldMenuModal" style="background: #FFF8EB; border: 1.5px solid #E8D09E; color: #8A6B1B; font-weight: 700; font-size: 0.82rem; border-radius: 8px; padding: 8px 12px; transition: all 0.3s ease;">
                <i class="fa-solid fa-utensils" style="color: #C6A15B; font-size: 1rem;"></i> View Full Gold Menu
              </button>
            </div>
          </div>
        </div>

        <!-- Royal Menu -->
        <div class="col-md-6 col-lg-3">
          <div class="pkg-custom-card royal-active animate-on-scroll" style="padding: 1.8rem 1.1rem;">
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
              <a href="#inquiry" class="btn-gold w-100 select-package mb-2" data-package="Royal Menu">Select Royal Menu</a>
              <button type="button" class="btn btn-sm w-100 d-inline-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#royalMenuModal" style="background: #FFF8EB; border: 1.5px solid #E8D09E; color: #8A6B1B; font-weight: 700; font-size: 0.82rem; border-radius: 8px; padding: 8px 12px; transition: all 0.3s ease;">
                <i class="fa-solid fa-utensils" style="color: #C6A15B; font-size: 1rem;"></i> View Full Royal Menu
              </button>
            </div>
          </div>
        </div>

        <!-- VIP Menu -->
        <div class="col-md-6 col-lg-3">
          <div class="pkg-custom-card animate-on-scroll" style="border: 2px solid #6A3FA0; background: linear-gradient(160deg, #F9F5FF 0%, #F3EBF9 100%); position: relative; padding: 1.8rem 1.1rem;">
            <div class="royal-badge" style="background: linear-gradient(135deg, #4B1F82, #6A3FA0); color: #FFD700;">’¢Ã¢₹Å“€š¦ Most Premium</div>
            <div class="pkg-header">
              <div class="icon" style="color: #6A3FA0;"><i class="fa-solid fa-gem"></i></div>
              <h3 style="color: #3A1060;">VIP Menu</h3>
              <p class="desc" style="color: #5A3080;">The pinnacle of vegetarian banquet luxury ’¢₹ an all-inclusive ultra-premium menu with exclusive counters, personalised service, and extraordinary presentation.</p>
            </div>
            <ul class="pkg-features">
              <li><i class="fa-solid fa-circle-check" style="color: #6A3FA0;"></i> <span>Unlimited Selections Across All Categories</span></li>
              <li><i class="fa-solid fa-circle-check" style="color: #6A3FA0;"></i> <span>5 Exclusive Live Specialty Counters</span></li>
              <li><i class="fa-solid fa-circle-check" style="color: #6A3FA0;"></i> <span>Personalised White-Glove Butler Service</span></li>
              <li><i class="fa-solid fa-circle-check" style="color: #6A3FA0;"></i> <span>Signature Platinum Thali & Table Setting</span></li>
              <li><i class="fa-solid fa-circle-check" style="color: #6A3FA0;"></i> <span>Exclusive Dessert Parlour & Sweet Counter</span></li>
            </ul>
            <div class="text-center mt-auto pt-3">
              <a href="#inquiry" class="btn btn-sm w-100 select-package mb-2" data-package="VIP Menu" style="background: linear-gradient(135deg, #4B1F82, #6A3FA0); color: #FFD700; font-weight: 800; border-radius: 8px; padding: 10px 16px; font-size: 0.9rem; border: none; letter-spacing: 0.5px;">Select VIP Menu</a>
              <button type="button" class="btn btn-sm w-100 d-inline-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#vipMenuModal" style="background: #F3EBF9; border: 1.5px solid #C9A5E8; color: #6A3FA0; font-weight: 700; font-size: 0.82rem; border-radius: 8px; padding: 8px 12px; transition: all 0.3s ease;">
                <i class="fa-solid fa-gem" style="color: #6A3FA0; font-size: 1rem;"></i> View Full VIP Menu
              </button>
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
                <a href="#inquiry" class="btn-outline-wine w-100 select-package mb-2" data-package="Silver Menu">Select Silver Menu</a>
                <button type="button" class="btn btn-sm w-100 d-inline-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#silverMenuModal" style="background: #FFF8EB; border: 1.5px solid #E8D09E; color: #8A6B1B; font-weight: 700; font-size: 0.82rem; border-radius: 8px; padding: 8px 12px; transition: all 0.3s ease;">
                  <i class="fa-solid fa-utensils" style="color: #C6A15B; font-size: 1rem;"></i> View Full Silver Menu
                </button>
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
                <a href="#inquiry" class="btn-outline-wine w-100 select-package mb-2" data-package="Gold Menu">Select Gold Menu</a>
                <button type="button" class="btn btn-sm w-100 d-inline-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#goldMenuModal" style="background: #FFF8EB; border: 1.5px solid #E8D09E; color: #8A6B1B; font-weight: 700; font-size: 0.82rem; border-radius: 8px; padding: 8px 12px; transition: all 0.3s ease;">
                  <i class="fa-solid fa-utensils" style="color: #C6A15B; font-size: 1rem;"></i> View Full Gold Menu
                </button>
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
                <a href="#inquiry" class="btn-gold w-100 select-package mb-2" data-package="Royal Menu">Select Royal Menu</a>
                <button type="button" class="btn btn-sm w-100 d-inline-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#royalMenuModal" style="background: #FFF8EB; border: 1.5px solid #E8D09E; color: #8A6B1B; font-weight: 700; font-size: 0.82rem; border-radius: 8px; padding: 8px 12px; transition: all 0.3s ease;">
                  <i class="fa-solid fa-utensils" style="color: #C6A15B; font-size: 1rem;"></i> View Full Royal Menu
                </button>
              </div>
            </div>
          </div>

          <!-- VIP Menu (Mobile) -->
          <div class="col-12">
            <div class="pkg-custom-card animate-on-scroll" style="border: 2px solid #6A3FA0; background: linear-gradient(160deg, #F9F5FF 0%, #F3EBF9 100%); position: relative;">
              <div class="royal-badge" style="background: linear-gradient(135deg, #4B1F82, #6A3FA0); color: #FFD700;">’¢Ã¢₹Å“€š¦ Most Premium</div>
              <div class="pkg-header">
                <div class="icon" style="color: #6A3FA0;"><i class="fa-solid fa-gem"></i></div>
                <h3 style="color: #3A1060;">VIP Menu</h3>
                <p class="desc" style="color: #5A3080;">The pinnacle of vegetarian banquet luxury ’¢₹ an all-inclusive ultra-premium menu with exclusive counters, personalised service, and extraordinary presentation.</p>
              </div>
              <ul class="pkg-features">
                <li><i class="fa-solid fa-circle-check" style="color: #6A3FA0;"></i> <span>Unlimited Selections Across All Categories</span></li>
                <li><i class="fa-solid fa-circle-check" style="color: #6A3FA0;"></i> <span>5 Exclusive Live Specialty Counters</span></li>
                <li><i class="fa-solid fa-circle-check" style="color: #6A3FA0;"></i> <span>Personalised White-Glove Butler Service</span></li>
                <li><i class="fa-solid fa-circle-check" style="color: #6A3FA0;"></i> <span>Signature Platinum Thali & Table Setting</span></li>
                <li><i class="fa-solid fa-circle-check" style="color: #6A3FA0;"></i> <span>Exclusive Dessert Parlour & Sweet Counter</span></li>
              </ul>
              <div class="text-center mt-auto pt-3">
                <a href="#inquiry" class="btn btn-sm w-100 select-package mb-2" data-package="VIP Menu" style="background: linear-gradient(135deg, #4B1F82, #6A3FA0); color: #FFD700; font-weight: 800; border-radius: 8px; padding: 10px 16px; font-size: 0.9rem; border: none; letter-spacing: 0.5px;">Select VIP Menu</a>
                <button type="button" class="btn btn-sm w-100 d-inline-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#vipMenuModal" style="background: #F3EBF9; border: 1.5px solid #C9A5E8; color: #6A3FA0; font-weight: 700; font-size: 0.82rem; border-radius: 8px; padding: 8px 12px; transition: all 0.3s ease;">
                  <i class="fa-solid fa-gem" style="color: #6A3FA0; font-size: 1rem;"></i> View Full VIP Menu
                </button>
              </div>
            </div>
          </div>

        </div>
        <!-- Packages Pagination Dots -->
        <div class="carousel-dots d-md-none" id="dots-packages" style="margin-top: 15px;"></div>
      </div>
    </div>
  </section>

  <!-- ================= EVENTS & OCCASIONS WE CATER ================= -->
  <section class="occasions-section bg-light-ivory py-5" id="events-we-cater" style="border-bottom: 1px solid var(--gold-line);">
    <div class="container py-3">
      <div class="section-title-wrap text-center mb-5">
        <span class="eyebrow" style="color: var(--wine); font-weight: 800; letter-spacing: 1.5px;">TAILORED CATERING FOR EVERY EVENT</span>
        <h2 class="section-title" style="color: #1F1510; font-size: 2.2rem; font-weight: 800;">Events &amp; Occasions <span class="accent" style="color: var(--wine);">We Cater</span></h2>
        <p class="text-muted" style="max-width: 650px; margin: 0.5rem auto 0; color: #333333 !important; font-weight: 500; font-size: 0.98rem; line-height: 1.6;">S. Caterers provides 100% pure vegetarian catering excellence for all types of functions, ceremonies, and celebrations.</p>
      </div>

      <div class="row g-4 mobile-swipe-deck" id="events-swipe-deck">
        <!-- 1. Weddings & Receptions -->
        <div class="col-12 col-md-6 col-lg-6">
          <div class="occasion-card h-100 animate-on-scroll" style="background: #FFFFFF !important; border: 1.5px solid #E6D8C3 !important; border-radius: 16px !important; padding: 1.5rem !important; box-shadow: 0 8px 24px rgba(44, 26, 17, 0.08) !important;">
            <div class="event-icon-badge mb-3" style="width: 52px; height: 52px; border-radius: 14px; background: linear-gradient(135deg, #7A1C2B 0%, #540D18 100%); color: #D4AF37; display: flex; align-items: center; justify-content: center; font-size: 1.35rem; box-shadow: 0 4px 12px rgba(122, 28, 43, 0.25);">
              <i class="fa-solid fa-ring"></i>
            </div>
            <div class="occasion-content p-0" style="gap: 8px !important;">
              <span class="event-tag-pill" style="background: #FFF8EB !important; color: #8A6B1B !important; border: 1px solid #E8D09E !important; font-size: 0.72rem !important; font-weight: 800 !important; padding: 4px 10px !important; border-radius: 20px !important; display: inline-flex; align-items: center; align-self: flex-start;"><i class="fa-solid fa-crown me-1" style="color: #C6A15B;"></i> GRAND CELEBRATIONS</span>
              <h3 class="event-title" style="font-size: 1.2rem !important; font-weight: 800 !important; color: #1F1510 !important; margin: 6px 0 !important; font-family: 'Playfair Display', serif;">Weddings &amp; Receptions</h3>
              <p class="event-desc" style="font-size: 0.88rem !important; font-weight: 500 !important; line-height: 1.6 !important; color: #2D2622 !important; margin-bottom: 1rem !important;">Royal Rajwada 100% pure veg feasts, imperial buffet lanes, white-glove thali service &amp; live chef counters.</p>
              <a href="#inquiry" class="btn-wine btn-sm mt-auto select-package" data-package="Wedding &amp; Grand Reception" style="background: linear-gradient(135deg, #7A1C2B 0%, #540D18 100%) !important; color: #FFFFFF !important; font-weight: 700 !important; border: none !important; border-radius: 10px !important; padding: 10px 24px !important; width: auto !important; display: inline-flex !important; align-items: center !important; justify-content: center !important; font-size: 0.85rem !important; white-space: nowrap !important; box-shadow: 0 4px 12px rgba(122, 28, 43, 0.2) !important;">Book Wedding Catering</a>
            </div>
          </div>
        </div>

        <!-- 2. Engagements & Roka -->
        <div class="col-12 col-md-6 col-lg-6">
          <div class="occasion-card h-100 animate-on-scroll" style="background: #FFFFFF !important; border: 1.5px solid #E6D8C3 !important; border-radius: 16px !important; padding: 1.5rem !important; box-shadow: 0 8px 24px rgba(44, 26, 17, 0.08) !important;">
            <div class="event-icon-badge mb-3" style="width: 52px; height: 52px; border-radius: 14px; background: linear-gradient(135deg, #7A1C2B 0%, #540D18 100%); color: #D4AF37; display: flex; align-items: center; justify-content: center; font-size: 1.35rem; box-shadow: 0 4px 12px rgba(122, 28, 43, 0.25);">
              <i class="fa-solid fa-heart"></i>
            </div>
            <div class="occasion-content p-0" style="gap: 8px !important;">
              <span class="event-tag-pill" style="background: #FFF8EB !important; color: #8A6B1B !important; border: 1px solid #E8D09E !important; font-size: 0.72rem !important; font-weight: 800 !important; padding: 4px 10px !important; border-radius: 20px !important; display: inline-flex; align-items: center; align-self: flex-start;"><i class="fa-solid fa-sparkles me-1" style="color: #C6A15B;"></i> INTIMATE CEREMONIES</span>
              <h3 class="event-title" style="font-size: 1.2rem !important; font-weight: 800 !important; color: #1F1510 !important; margin: 6px 0 !important; font-family: 'Playfair Display', serif;">Engagements &amp; Roka</h3>
              <p class="event-desc" style="font-size: 0.88rem !important; font-weight: 500 !important; line-height: 1.6 !important; color: #2D2622 !important; margin-bottom: 1rem !important;">Chic ring ceremony catering, mocktail bar lounges, live gourmet starter passes &amp; elegant dining decor.</p>
              <a href="#inquiry" class="btn-wine btn-sm mt-auto select-package" data-package="Engagement &amp; Roka Ceremony" style="background: linear-gradient(135deg, #7A1C2B 0%, #540D18 100%) !important; color: #FFFFFF !important; font-weight: 700 !important; border: none !important; border-radius: 10px !important; padding: 10px 24px !important; width: auto !important; display: inline-flex !important; align-items: center !important; justify-content: center !important; font-size: 0.85rem !important; white-space: nowrap !important; box-shadow: 0 4px 12px rgba(122, 28, 43, 0.2) !important;">Book Engagement Catering</a>
            </div>
          </div>
        </div>

        <!-- 3. Birthdays & Social Parties -->
        <div class="col-12 col-md-6 col-lg-6">
          <div class="occasion-card h-100 animate-on-scroll" style="background: #FFFFFF !important; border: 1.5px solid #E6D8C3 !important; border-radius: 16px !important; padding: 1.5rem !important; box-shadow: 0 8px 24px rgba(44, 26, 17, 0.08) !important;">
            <div class="event-icon-badge mb-3" style="width: 52px; height: 52px; border-radius: 14px; background: linear-gradient(135deg, #7A1C2B 0%, #540D18 100%); color: #D4AF37; display: flex; align-items: center; justify-content: center; font-size: 1.35rem; box-shadow: 0 4px 12px rgba(122, 28, 43, 0.25);">
              <i class="fa-solid fa-cake-candles"></i>
            </div>
            <div class="occasion-content p-0" style="gap: 8px !important;">
              <span class="event-tag-pill" style="background: #FFF8EB !important; color: #8A6B1B !important; border: 1px solid #E8D09E !important; font-size: 0.72rem !important; font-weight: 800 !important; padding: 4px 10px !important; border-radius: 20px !important; display: inline-flex; align-items: center; align-self: flex-start;"><i class="fa-solid fa-gift me-1" style="color: #C6A15B;"></i> MILESTONE PARTIES</span>
              <h3 class="event-title" style="font-size: 1.2rem !important; font-weight: 800 !important; color: #1F1510 !important; margin: 6px 0 !important; font-family: 'Playfair Display', serif;">Birthdays &amp; Parties</h3>
              <p class="event-desc" style="font-size: 0.88rem !important; font-weight: 500 !important; line-height: 1.6 !important; color: #2D2622 !important; margin-bottom: 1rem !important;">Vibrant live Dilli chaat, wok-tossed Chinese noodles, live jalebi rabri counters &amp; custom mocktail bars.</p>
              <a href="#inquiry" class="btn-wine btn-sm mt-auto select-package" data-package="Birthday Party &amp; Milestone" style="background: linear-gradient(135deg, #7A1C2B 0%, #540D18 100%) !important; color: #FFFFFF !important; font-weight: 700 !important; border: none !important; border-radius: 10px !important; padding: 10px 24px !important; width: auto !important; display: inline-flex !important; align-items: center !important; justify-content: center !important; font-size: 0.85rem !important; white-space: nowrap !important; box-shadow: 0 4px 12px rgba(122, 28, 43, 0.2) !important;">Book Birthday Catering</a>
            </div>
          </div>
        </div>

        <!-- 4. Corporate & Custom Events -->
        <div class="col-12 col-md-6 col-lg-6">
          <div class="occasion-card h-100 animate-on-scroll" style="border: 2px solid #C6A15B !important; background: #FFFDF9 !important; border-radius: 16px !important; padding: 1.5rem !important; box-shadow: 0 8px 24px rgba(198, 161, 91, 0.15) !important;">
            <div class="event-icon-badge mb-3" style="width: 52px; height: 52px; border-radius: 14px; background: linear-gradient(135deg, #C6A15B 0%, #8A6B1B 100%); color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 1.35rem; box-shadow: 0 4px 12px rgba(138, 107, 27, 0.3);">
              <i class="fa-solid fa-wand-magic-sparkles"></i>
            </div>
            <div class="occasion-content p-0" style="gap: 8px !important;">
              <span class="event-tag-pill" style="background: linear-gradient(135deg, #C6A15B 0%, #8A6B1B 100%) !important; color: #FFFFFF !important; border: none !important; font-size: 0.72rem !important; font-weight: 800 !important; padding: 4px 10px !important; border-radius: 20px !important; display: inline-flex; align-items: center; align-self: flex-start;"><i class="fa-solid fa-star me-1" style="color: #FFF;"></i> ANY SCALE EVENT</span>
              <h3 class="event-title" style="font-size: 1.2rem !important; font-weight: 800 !important; color: #7A1C2B !important; margin: 6px 0 !important; font-family: 'Playfair Display', serif;">Corporate &amp; Custom Events</h3>
              <p class="event-desc" style="font-size: 0.88rem !important; font-weight: 500 !important; line-height: 1.6 !important; color: #2D2622 !important; margin-bottom: 1rem !important;">Executive luncheons, Pujas (Satvik/Jain), corporate galas, or any customized pure-veg gathering of any size.</p>
              <a href="#inquiry" class="btn-gold btn-sm mt-auto select-package" data-package="Custom Event Catering" style="background: linear-gradient(135deg, #C6A15B 0%, #8A6B1B 100%) !important; color: #FFFFFF !important; font-weight: 700 !important; border: none !important; border-radius: 10px !important; padding: 10px 24px !important; width: auto !important; display: inline-flex !important; align-items: center !important; justify-content: center !important; font-size: 0.85rem !important; white-space: nowrap !important; box-shadow: 0 4px 12px rgba(138, 107, 27, 0.25) !important;">Book Custom Catering</a>
            </div>
          </div>
        </div>

      </div>
      <!-- Events Pagination Dots -->
      <div class="carousel-dots d-md-none" id="dots-events" style="margin-top: 15px;"></div>
    </div>
  </section>

  <!-- ================= PREMIUM ADD-ON COUNTERS ================= -->
  <section class="addons-section bg-white py-5" id="addons" style="border-bottom: 1px solid var(--gold-line);">
    <div class="container py-3">
      <div class="section-title-wrap text-center mb-4">
        <span class="eyebrow">EXCLUSIVE CULINARY ADD-ONS</span>
        <h2 class="section-title">Signature Live <span class="accent">Counters</span></h2>
        <p class="text-muted" style="max-width: 650px; margin: 0.5rem auto 0; color: #333 !important; font-weight: 500;">Enhance your catering experience with our interactive specialty live stations, overseen by our expert chefs.</p>
        
        <!-- More Live Counters Highlight Banner -->
        <div class="mt-3 p-3 mx-auto" style="max-width: 850px; background: #FFFDF9; border: 1.5px solid #E8D09E; border-radius: 12px; box-shadow: 0 4px 16px rgba(198, 161, 91, 0.12);">
          <div class="d-flex align-items-center justify-content-center gap-2 flex-wrap text-center">
            <span style="font-weight: 800; color: #7A1C2B; font-size: 0.95rem;">Many More Live Counters Available Upon Request:</span>
            <span style="font-size: 0.88rem; color: #2D2622; font-weight: 600;">Lakhnavi Chaat Street ’• Live BBQ Tandoor ’• Pan-Asian Wok &amp; Dimsum ’• Live Dosa Station ’• Live Tava Veg ’• Live Jalebi-Rabri ’• Kulfi-Falooda Parlour</span>
          </div>
        </div>
      </div>

      <div class="row g-4 justify-content-center mobile-swipe-deck" id="counters-swipe-deck">
        <!-- 1. Craft Bar Lounge -->
        <div class="col-md-6 col-lg-4">
          <div class="pkg-custom-card animate-on-scroll h-100 d-flex flex-column" style="background: var(--bg-white); border: 1px solid var(--gold-line); border-radius: 18px; padding: 2rem;">
            <div class="pkg-img-wrap" style="margin: -2rem -2rem 1.5rem -2rem; border-top-left-radius: 18px; border-top-right-radius: 18px;">
              <img src="{{ asset('images/bar-lounge.jpg') }}" alt="Craft Bar Lounge" loading="lazy">
            </div>
            <div class="pkg-header">
              <div class="icon mb-3" style="font-size: 2.2rem; color: var(--wine);"><i class="fa-solid fa-martini-glass-citrus"></i></div>
              <h3 style="font-size: 1.35rem; font-weight: 700; color: var(--charcoal);">Craft Bar Lounge</h3>
              <p class="desc" style="font-size: 0.88rem; color: var(--ink-soft); line-height: 1.5; margin-bottom: 1.5rem;">Artisanal mixology lounge serving smoke-infused mocktails, fresh botanical sherbets &amp; signature drinks ’¢₹ crafted live by master mixologists.</p>
            </div>
            <ul class="pkg-features" style="list-style: none; padding: 0; margin-bottom: 2rem; flex-grow: 1;">
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Professional Master Mixologist Team</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Exotic Mocktails (Blue Lagoon, Virgin Mojito, Pinacolada)</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Desi Fusion (Kala Khatta, Masala Guava, Shahi Thandai)</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Fresh Botanical &amp; Saffron Garnishes</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Luxury Crystal Glassware &amp; Smoke Effects</span></li>
            </ul>
            <div class="mt-auto">
              <a href="#inquiry" class="btn-outline-wine w-100 select-package" data-package="Craft Bar Counter" style="font-size: 0.88rem; padding: 10px 0; border-radius: 8px;">Book Craft Bar Counter</a>
            </div>
          </div>
        </div>

        <!-- 2. Live Juice Counter -->
        <div class="col-md-6 col-lg-4">
          <div class="pkg-custom-card animate-on-scroll h-100 d-flex flex-column" style="background: var(--bg-white); border: 1px solid var(--gold-line); border-radius: 18px; padding: 2rem;">
            <div class="pkg-img-wrap" style="margin: -2rem -2rem 1.5rem -2rem; border-top-left-radius: 18px; border-top-right-radius: 18px;">
              <img src="{{ asset('images/juice-counter.jpg') }}" alt="Live Juice Counter" loading="lazy">
            </div>
            <div class="pkg-header">
              <div class="icon mb-3" style="font-size: 2.2rem; color: var(--wine);"><i class="fa-solid fa-lemon"></i></div>
              <h3 style="font-size: 1.35rem; font-weight: 700; color: var(--charcoal);">Live Juice &amp; Smoothie Counter</h3>
              <p class="desc" style="font-size: 0.88rem; color: var(--ink-soft); line-height: 1.5; margin-bottom: 1.5rem;">Pure, natural &amp; refreshing cold-pressed fruit juices, signature herb infusions, and live gourmet dispensers served in a grand fairy-lit setup.</p>
            </div>
            <ul class="pkg-features" style="list-style: none; padding: 0; margin-bottom: 2rem; flex-grow: 1;">
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Fresh Cold-Pressed Orange, Kiwi, Watermelon &amp; Pineapple</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Specialty Shakes: Mango, Chocolate, Strawberry &amp; Kesar Pista</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Botanical Infusions: Lemon Mint &amp; Green Tea Coolers</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Backlit Fretwork Counter with Fairy Lights &amp; Floral Decor</span></li>
            </ul>
            <div class="mt-auto">
              <a href="#inquiry" class="btn-outline-wine w-100 select-package" data-package="Live Juice Counter" style="font-size: 0.88rem; padding: 10px 0; border-radius: 8px;">Book Juice Counter</a>
            </div>
          </div>
        </div>

        <!-- 3. Vintage Bakery Counter -->
        <div class="col-md-6 col-lg-4">
          <div class="pkg-custom-card animate-on-scroll h-100 d-flex flex-column" style="background: var(--bg-white); border: 1px solid var(--gold-line); border-radius: 18px; padding: 2rem;">
            <div class="pkg-img-wrap" style="margin: -2rem -2rem 1.5rem -2rem; border-top-left-radius: 18px; border-top-right-radius: 18px;">
              <img src="{{ asset('images/bakery-counter.jpg') }}" alt="Vintage Bakery Counter" loading="lazy">
            </div>
            <div class="pkg-header">
              <div class="icon mb-3" style="font-size: 2.2rem; color: var(--wine);"><i class="fa-solid fa-cookie-bite"></i></div>
              <h3 style="font-size: 1.35rem; font-weight: 700; color: var(--charcoal);">Vintage Bakery &amp; Cafe Counter</h3>
              <p class="desc" style="font-size: 0.88rem; color: var(--ink-soft); line-height: 1.5; margin-bottom: 1.5rem;">Treat your guests to a 100% pure vegetarian Vintage Cafe experience featuring artisanal pastries, gourmet puddings, brownies &amp; hot oven savories.</p>
            </div>
            <ul class="pkg-features" style="list-style: none; padding: 0; margin-bottom: 2rem; flex-grow: 1;">
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Belgian Chocolate Truffle, Red Velvet &amp; Pineapple Pastries</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Warm Chocolate Brownie with Hot Chocolate Sauce</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Fruit Truffle Mousse Cups &amp; Butterscotch Puddings</span></li>
              <li style="font-size: 0.88rem; margin-bottom: 0.6rem; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: var(--gold); margin-top: 3px;"></i> <span>Live Wood-Fired Veg Pizza &amp; Garlic Bread Station</span></li>
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
              <div class="menu-item-desc">Freshly ground premium coffee beans brewed with thick, rich milk foam at our live caf’Ã†â€™€š© stall.</div>
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
          <!-- Bot Mitigation Honeypot & Time Check -->
          <input type="text" name="website_url_hp" style="display:none !important;" tabindex="-1" autocomplete="off">
          <input type="hidden" name="form_load_time" value="{{ time() }}">

          <!-- STEP 1: CLIENT INFORMATION -->
          <div class="form-section-card" style="border: 1.5px solid #E6D8C3; border-radius: 12px; padding: 1rem 1.25rem; background: #FFFFFF; box-shadow: 0 2px 10px rgba(44, 26, 17, 0.03); margin-bottom: 0.85rem !important;">
            <div class="form-section-header mb-2 pb-1 d-flex align-items-center justify-content-between" style="border-bottom: 1px solid #F0E6D8;">
              <span style="font-size: 0.75rem; font-weight: 800; color: var(--wine); letter-spacing: 0.8px; text-transform: uppercase;"><i class="fa-solid fa-user me-1" style="color: var(--gold);"></i> STEP 1: CLIENT INFORMATION</span>
              <span style="font-size: 0.68rem; font-weight: 700; color: #8A6B1B; background: #FFF8EB; padding: 2px 6px; border-radius: 10px; border: 1px solid #E8D09E;">REQUIRED</span>
            </div>
            
            <div class="row g-2">
              <div class="col-md-6 form-group-custom mb-2">
                <label for="inq-name" style="font-weight: 700; color: #1F1510; font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.4px; margin-bottom: 3px;">Your Full Name <span style="font-size:0.68rem;color:var(--wine);font-weight:700;">*</span></label>
                <input type="text" name="name" id="inq-name" placeholder="e.g. Divyansh Chaurasia" style="border: 1.5px solid #CFC0A8; border-radius: 8px; padding: 8px 12px; background: #FFFDF9; color: #1F1510; font-weight: 600; width: 100%; font-size: 0.9rem;" required>
              </div>
              <div class="col-md-6 form-group-custom mb-2">
                <label for="inq-phone" style="font-weight: 700; color: #1F1510; font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.4px; margin-bottom: 3px;">Mobile / Contact Number <span style="font-size:0.68rem;color:var(--wine);font-weight:700;">(Required)</span></label>
                <input type="tel" name="phone" id="inq-phone" placeholder="e.g. 6393998141" maxlength="10" pattern="[6-9][0-9]{9}" title="Enter a valid 10-digit Indian mobile number" style="border: 1.5px solid #CFC0A8; border-radius: 8px; padding: 8px 12px; background: #FFFDF9; color: #1F1510; font-weight: 600; width: 100%; font-size: 0.9rem;" required>
              </div>
            </div>

            <div class="form-group-custom mb-0">
              <label for="inq-email" style="font-weight: 700; color: #1F1510; font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.4px; margin-bottom: 3px;">Email Address <span style="font-size:0.68rem;color:#777;font-weight:500;">(Optional)</span></label>
              <input type="email" name="email" id="inq-email" placeholder="name@domain.com (Optional)" style="border: 1.5px solid #CFC0A8; border-radius: 8px; padding: 8px 12px; background: #FFFDF9; color: #1F1510; font-weight: 600; width: 100%; font-size: 0.9rem;">
            </div>
          </div>

          <!-- STEP 2: CATERING SELECTION -->
          <div class="form-section-card" style="border: 1.5px solid #E6D8C3; border-radius: 12px; padding: 1rem 1.25rem; background: #FFFFFF; box-shadow: 0 2px 10px rgba(44, 26, 17, 0.03); margin-bottom: 0.85rem !important;">
            <div class="form-section-header mb-2 pb-1 d-flex align-items-center justify-content-between" style="border-bottom: 1px solid #F0E6D8;">
              <span style="font-size: 0.75rem; font-weight: 800; color: var(--wine); letter-spacing: 0.8px; text-transform: uppercase;"><i class="fa-solid fa-utensils me-1" style="color: var(--gold);"></i> STEP 2: CATERING &amp; EVENT TYPE</span>
              <span style="font-size: 0.68rem; font-weight: 700; color: #8A6B1B; background: #FFF8EB; padding: 2px 6px; border-radius: 10px; border: 1px solid #E8D09E;">REQUIRED</span>
            </div>

            <div class="row g-2">
              <div class="col-md-6 form-group-custom mb-2">
                <label for="inq-package" style="font-weight: 700; color: #1F1510; font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.4px; margin-bottom: 3px;">Catering Package / Tier</label>
                <select name="package" id="inq-package" style="border: 1.5px solid #CFC0A8; border-radius: 8px; padding: 8px 12px; background: #FFFDF9; color: #1F1510; font-weight: 600; width: 100%; font-size: 0.9rem;" required>
                  <option value="" disabled selected>Choose a starting tier...</option>
                  <option value="Silver Menu">Silver Menu</option>
                  <option value="Royal Menu">Royal Menu</option>
                  <option value="VIP Menu">VIP Menu</option>
                  <option value="Custom Catering Service">Custom Catering Service</option>
                </select>
              </div>

              <div class="col-md-6 form-group-custom mb-0">
                <label for="inq-event-type" style="font-weight: 700; color: #1F1510; font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.4px; margin-bottom: 3px;">Event &amp; Occasion Type</label>
                <select name="event_type" id="inq-event-type" style="border: 1.5px solid #CFC0A8; border-radius: 8px; padding: 8px 12px; background: #FFFDF9; color: #1F1510; font-weight: 600; width: 100%; font-size: 0.9rem;" required>
                  <option value="" disabled selected>Select event type...</option>
                  <option value="Wedding & Grand Reception">Wedding &amp; Grand Reception</option>
                  <option value="Engagement & Roka Ceremony">Engagement &amp; Roka Ceremony</option>
                  <option value="Birthday Party & Milestone">Birthday Party &amp; Milestone</option>
                  <option value="Baby Shower / Family Function">Baby Shower / Family Function (Godh Bharai)</option>
                  <option value="Corporate Event / Seminar">Corporate Event / Seminar</option>
                  <option value="Grah Pravesh / Sacred Puja">Grah Pravesh / Sacred Puja (Satvik Catering)</option>
                  <option value="Anniversary / Social Gathering">Anniversary / Social Gathering</option>
                  <option value="Custom Event Catering">Other Custom Event</option>
                </select>
              </div>
            </div>
          </div>

          <!-- STEP 3: DATE & GUEST COUNT -->
          <div class="form-section-card" style="border: 1.5px solid #E6D8C3; border-radius: 12px; padding: 1rem 1.25rem; background: #FFFFFF; box-shadow: 0 2px 10px rgba(44, 26, 17, 0.03); margin-bottom: 0.85rem !important;">
            <div class="form-section-header mb-2 pb-1 d-flex align-items-center justify-content-between" style="border-bottom: 1px solid #F0E6D8;">
              <span style="font-size: 0.75rem; font-weight: 800; color: var(--wine); letter-spacing: 0.8px; text-transform: uppercase;"><i class="fa-solid fa-calendar-check me-1" style="color: var(--gold);"></i> STEP 3: DATE &amp; GUESTS</span>
              <span style="font-size: 0.68rem; font-weight: 700; color: #8A6B1B; background: #FFF8EB; padding: 2px 6px; border-radius: 10px; border: 1px solid #E8D09E;">REQUIRED</span>
            </div>

            <div class="row side-by-side-row g-2">
              <div class="col-6 form-group-custom mb-0">
                <label for="inq-date" style="font-weight: 700; color: #1F1510; font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.4px; margin-bottom: 3px;">Event Date <span style="font-size:0.68rem;color:#777;font-weight:500;">(DD/MM/YYYY)</span></label>
                <input type="date" name="event_date" id="inq-date" min="{{ date('Y-m-d') }}" placeholder="e.g. DD/MM/YYYY" style="border: 1.5px solid #CFC0A8; border-radius: 8px; padding: 8px 12px; background: #FFFDF9; color: #1F1510; font-weight: 600; width: 100%; font-size: 0.9rem;" required>
              </div>
              <div class="col-6 form-group-custom mb-0">
                <label for="inq-guests" style="font-weight: 700; color: #1F1510; font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.4px; margin-bottom: 3px;">Expected Guests <span style="font-size:0.68rem;color:var(--wine);font-weight:700;">(min. 10)</span></label>
                <input type="number" name="guests" id="inq-guests" placeholder="e.g. 250" min="10" style="border: 1.5px solid #CFC0A8; border-radius: 8px; padding: 8px 12px; background: #FFFDF9; color: #1F1510; font-weight: 600; width: 100%; font-size: 0.9rem;" required>
              </div>
            </div>
          </div>

          <!-- STEP 4: ADD-ONS & NOTES -->
          <div class="form-section-card" style="border: 1.5px solid #E6D8C3; border-radius: 12px; padding: 1rem 1.25rem; background: #FFFFFF; box-shadow: 0 2px 10px rgba(44, 26, 17, 0.03); margin-bottom: 0.85rem !important;">
            <div class="form-section-header mb-2 pb-1 d-flex align-items-center justify-content-between" style="border-bottom: 1px solid #F0E6D8;">
              <span style="font-size: 0.75rem; font-weight: 800; color: var(--wine); letter-spacing: 0.8px; text-transform: uppercase;"><i class="fa-solid fa-sliders me-1" style="color: var(--gold);"></i> STEP 4: ADD-ONS &amp; NOTES</span>
              <span style="font-size: 0.68rem; font-weight: 700; color: #777; background: #F5F5F5; padding: 2px 6px; border-radius: 10px; border: 1px solid #E0E0E0;">OPTIONAL</span>
            </div>

            <!-- Add-on Services Section -->
            <div class="form-group-custom mb-2">
              <div class="addon-toggle-header" id="addon-toggle-trigger" style="display: flex; align-items: center; justify-content: space-between; cursor: pointer; padding: 8px 12px; background: #FFFDF9; border: 1.5px solid #CFC0A8; border-radius: 8px; transition: all 0.3s ease; margin-bottom: 8px; user-select: none;">
                <div style="display: flex; align-items: center; gap: 8px;">
                  <i class="fa-solid fa-circle-plus" style="color: var(--gold); font-size: 1.05rem; flex-shrink: 0;"></i>
                  <div style="line-height: 1.2;">
                    <span style="font-weight: 800; color: var(--wine); font-size: 0.8rem; letter-spacing: 0.03em; text-transform: uppercase; display: block;">Select Add-on Services</span>
                    <span style="font-size: 0.7rem; color: #666; font-weight: 500;">(Optional extra live counters)</span>
                  </div>
                </div>
                <span style="font-size: 0.7rem; color: #8B6B1B; font-weight: 700; background: #FFF8EB; padding: 3px 8px; border-radius: 10px; border: 1px solid #E8D09E; flex-shrink: 0;" class="toggle-status-text">TAP TO EXPAND</span>
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

            <div class="form-group-custom mb-2">
              <label for="inq-notes" style="font-weight: 700; color: #1F1510; font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.4px; margin-bottom: 3px;">Special Dietary Requests &amp; Notes <span style="font-size:0.7rem;color:#777;font-weight:500;">(Optional)</span></label>
              <textarea name="notes" id="inq-notes" rows="2" placeholder="Mention any specific requirements (e.g. 100% Satvik / Jain dietary requirements, custom uniform theme)..." style="border: 1.5px solid #CFC0A8; border-radius: 8px; padding: 8px 12px; background: #FFFDF9; color: #1F1510; font-weight: 600; width: 100%; font-size: 0.88rem;"></textarea>
            </div>

            <div class="form-group-custom d-flex align-items-center gap-2 mb-0">
              <input type="checkbox" name="customization" id="inq-customization" value="Yes" style="width: 16px; height: 16px; cursor: pointer; accent-color: var(--wine);">
              <label for="inq-customization" style="margin-bottom: 0; cursor: pointer; font-size: 0.82rem; font-weight: 700; color: #1F1510; text-transform: none; letter-spacing: normal;">I would like to customize my package menu / add custom counters</label>
            </div>
          </div>

          <div class="text-center mb-2">
            <p style="font-size: 0.78rem; color: var(--wine); font-style: italic; font-weight: 600; margin-bottom: 0;">*Note: Final catering prices depend on menu selection, guest count, and mutual discussion.</p>
          </div>

          <div class="text-center pt-1">
            <button type="submit" class="btn-gold px-4 py-2" style="font-size: 0.92rem; border-radius: 8px; font-weight: 700; max-width: 320px; width: 100%; box-shadow: 0 4px 12px rgba(198, 161, 91, 0.25);">Submit &amp; Open WhatsApp Chat</button>
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
            <a href="https://www.instagram.com/s.caterers_lko?igsh=NjZxbmE3dm9ubW9v" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
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
        setupMobileSlider('events-swipe-deck', 'dots-events');
      };

      // Block past dates in date picker
      const dateInput = document.getElementById('inq-date');
      if (dateInput) {
        const today = new Date().toISOString().split('T')[0];
        dateInput.min = today;
      }

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

  <!-- ================= SILVER MENU FULL POPUP MODAL ================= -->
  <div class="modal fade" id="silverMenuModal" tabindex="-1" aria-labelledby="silverMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content menu-modal-content" style="border-radius: 24px; border: 2px solid #CBD5E0; overflow: hidden; background: #FFFFFF; box-shadow: 0 15px 50px rgba(0,0,0,0.3);">
        
                <!-- Modal Header -->
        <div class="modal-header p-0" style="background: linear-gradient(160deg,#0F0F0F 0%,#1A1A2E 40%,#16213E 100%); border-bottom: none; position: relative; overflow: hidden;">
          <!-- Decorative top accent strip -->
          <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#C6A15B;"></div>
          <!-- Subtle pattern overlay -->
          <div style="position:absolute;inset:0;background:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2260%22 height=%2260%22><circle cx=%2230%22 cy=%2230%22 r=%221%22 fill=%22rgba(255,255,255,0.04)%22/></svg>');"></div>

          <div class="w-100 px-4 pt-3 pb-2" style="position:relative;z-index:1;">
            <!-- Brand pill -->
            <div class="d-flex align-items-center justify-content-center mb-2">
              <div class="d-inline-flex align-items-center gap-2 px-2 py-1" style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.18);border-radius:50px;backdrop-filter:blur(10px);">
                <img src="{{ asset('images/logo.png') }}" alt="S. Caterers" style="height:18px;width:auto;filter:brightness(1.3);">
                <span style="color:rgba(255,255,255,0.85);font-size:0.68rem;font-weight:800;letter-spacing:2px;text-transform:uppercase;">S. CATERERS · PURE VEGETARIAN</span>
              </div>
            </div>

            <!-- Menu title -->
            <h2 class="font-heading text-center mb-1" id="silverMenuModalLabel" style="font-size:clamp(1.2rem,3.5vw,1.7rem);font-weight:900;color:#C6A15B;letter-spacing:2px;text-transform:uppercase;text-shadow:0 2px 12px rgba(0,0,0,0.4);margin:0 50px;">
              SILVER CHOICE MENU
            </h2>

            <!-- Decorative line -->
            <div class="d-flex align-items-center justify-content-center gap-3 my-1">
              <div style="height:1px;width:60px;background:linear-gradient(to right,transparent,#C6A15B);"></div>
              <div style="width:6px;height:6px;border-radius:50%;background:#C6A15B;box-shadow:0 0 8px #C6A15B;"></div>
              <div style="height:1px;width:60px;background:linear-gradient(to left,transparent,#C6A15B);"></div>
            </div>

            <!-- Subtitle -->
            <p class="text-center mb-2" style="color:rgba(255,255,255,0.7);font-size:0.82rem;letter-spacing:0.8px;font-weight:500;margin:0;">
              Artisanal Patisserie, Bakes &amp; Fine Banquet Selection
            </p>

            <!-- Action buttons row -->
            <div class="d-flex align-items-center justify-content-center gap-2 pb-0">
              <button onclick="shareMenu('silver')" class="d-inline-flex align-items-center gap-2 menu-dl-btn" style="background:#C6A15B;color:#fff;font-size:0.77rem;font-weight:800;padding:6px 18px;border-radius:50px;border:none;cursor:pointer;box-shadow:0 4px 14px rgba(198,161,91,0.5);letter-spacing:0.5px;">
                <i class="fa-solid fa-share-nodes" style="font-size:0.78rem;"></i> Share Menu
              </button>
            </div>
          </div>

          <!-- Close button -->
          <button type="button" class="btn-close btn-close-white position-absolute" data-bs-dismiss="modal" aria-label="Close"
                  style="top:10px;right:12px;opacity:0.9;z-index:10;width:36px;height:36px;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.12);border-radius:50%;filter:drop-shadow(0 1px 4px rgba(0,0,0,0.6));cursor:pointer;"></button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body menu-modal-body" id="silverMenuModalBody" style="background: #FAF8F5; font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;">
          
          <!-- SECTION 1: SIGNATURE PASTRIES -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <!-- Cake SVG Icon -->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#6E1423" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 21v-8a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8"></path>
                  <path d="M4 16s.5-1 2-1 2.5 2 4 2 2.5-2 4-2 2.5 2 4 2 2-1 2-1"></path>
                  <path d="M2 21h20"></path>
                  <path d="M7 8v-3"></path>
                  <path d="M12 8v-3"></path>
                  <path d="M17 8v-3"></path>
                  <path d="M7 4h.01"></path>
                  <path d="M12 4h.01"></path>
                  <path d="M17 4h.01"></path>
                </svg>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">SIGNATURE PASTRIES</h3>
                <small class="text-muted fw-semibold">Handcrafted gourmet sponge cakes &amp; delicate layered frosting</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <div class="d-flex align-items-center gap-2 mb-1">
                    <span class="badge rounded-pill" style="background: rgba(198,161,91,0.2); color: #8A6B1B; font-weight: 800; font-size: 0.72rem;">PASTRY</span>
                    <h4 class="h6 font-heading mb-0 text-uppercase" style="font-weight: 800; color: #1A1A1A;">CLASSIC TROPICAL PINEAPPLE</h4>
                  </div>
                  <p class="text-muted small mb-0 ps-1" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    Layers of soft vanilla sponge generously frosted with fresh pineapple cream.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <div class="d-flex align-items-center gap-2 mb-1">
                    <span class="badge rounded-pill" style="background: rgba(198,161,91,0.2); color: #8A6B1B; font-weight: 800; font-size: 0.72rem;">PASTRY</span>
                    <h4 class="h6 font-heading mb-0 text-uppercase" style="font-weight: 800; color: #1A1A1A;">BELGIAN CHOCOLATE TRUFFLE</h4>
                  </div>
                  <p class="text-muted small mb-0 ps-1" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    Rich, dark cocoa sponge perfectly layered with our silken chocolate ganache.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <div class="d-flex align-items-center gap-2 mb-1">
                    <span class="badge rounded-pill" style="background: rgba(198,161,91,0.2); color: #8A6B1B; font-weight: 800; font-size: 0.72rem;">PASTRY</span>
                    <h4 class="h6 font-heading mb-0 text-uppercase" style="font-weight: 800; color: #1A1A1A;">SIGNATURE RED VELVET</h4>
                  </div>
                  <p class="text-muted small mb-0 ps-1" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    A vibrant crimson sponge paired beautifully with a velvety cream frosting.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <div class="d-flex align-items-center gap-2 mb-1">
                    <span class="badge rounded-pill" style="background: rgba(198,161,91,0.2); color: #8A6B1B; font-weight: 800; font-size: 0.72rem;">PASTRY</span>
                    <h4 class="h6 font-heading mb-0 text-uppercase" style="font-weight: 800; color: #1A1A1A;">MADAGASCAR VANILLA BEAN</h4>
                  </div>
                  <p class="text-muted small mb-0 ps-1" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    A light, airy sponge infused with pure vanilla and fresh sweet cream.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- SECTION 2: GOURMET PUDDINGS -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <!-- Pudding/Dessert SVG Icon -->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#6E1423" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"></path>
                  <path d="M12 6a6 6 0 0 0-6 6h12a6 6 0 0 0-6-6z"></path>
                </svg>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">GOURMET PUDDINGS</h3>
                <small class="text-muted fw-semibold">Silken creamy puddings &amp; interactive live chocolate fountain</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <div class="d-flex align-items-center gap-2 mb-1">
                    <span class="badge rounded-pill" style="background: rgba(198,161,91,0.2); color: #8A6B1B; font-weight: 800; font-size: 0.72rem;">PUDDING</span>
                    <h4 class="h6 font-heading mb-0 text-uppercase" style="font-weight: 800; color: #1A1A1A;">GOLDEN BUTTERSCOTCH PUDDING</h4>
                  </div>
                  <p class="text-muted small mb-0 ps-1" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    A creamy, caramel-infused pudding topped with delightful crunchy pralines.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <div class="d-flex align-items-center gap-2 mb-1">
                    <span class="badge rounded-pill" style="background: rgba(198,161,91,0.2); color: #8A6B1B; font-weight: 800; font-size: 0.72rem;">PUDDING</span>
                    <h4 class="h6 font-heading mb-0 text-uppercase" style="font-weight: 800; color: #1A1A1A;">FRESH STRAWBERRY MEADOW PUDDING</h4>
                  </div>
                  <p class="text-muted small mb-0 ps-1" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    A luscious, fruity dessert layered with sweet, homemade strawberry compote.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <div class="d-flex align-items-center gap-2 mb-1">
                    <span class="badge rounded-pill" style="background: rgba(198,161,91,0.2); color: #8A6B1B; font-weight: 800; font-size: 0.72rem;">INTERACTIVE</span>
                    <h4 class="h6 font-heading mb-0 text-uppercase" style="font-weight: 800; color: #1A1A1A;">THE GRAND CHOCOLATE FOUNTAIN</h4>
                  </div>
                  <p class="text-muted small mb-0 ps-1" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    A flowing cascade of premium melted chocolate, perfect for an interactive dessert experience.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- SECTION 3: DESSERT CUPS & CONFECTIONS -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <!-- Muffin/Cup SVG Icon -->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#6E1423" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 2a5 5 0 0 0-4.9 6h9.8A5 5 0 0 0 12 2z"></path>
                  <path d="M4 10l2 12h12l2-12H4z"></path>
                </svg>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">DESSERT CUPS &amp; CONFECTIONS</h3>
                <small class="text-muted fw-semibold">Mousse cups, fresh muffins, artisanal cookies &amp; rich brownies</small>
              </div>
            </div>

            <!-- SUB: DESSERT CUPS & MUFFINS -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important; letter-spacing: 0.5px;">DESSERT CUPS &amp; MUFFINS</h4>
            
            <div class="row g-3 mb-4">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">TROPICAL FRUIT PUNCH CREAM CUP</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    A refreshing medley of seasonal fresh fruits layered with whipped vanilla cream.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">DECADENT CHOCOLATE CREAM CUP</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    Indulgent layers of rich chocolate mousse and airy, sweetened whipped cream.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">DOUBLE CHOCO-CHIP MUFFINS</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    A rich, tender cocoa muffin baked fresh and loaded with premium chocolate morsels.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">VANILLA TUTTI FRUTTI MUFFINS</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    A buttery vanilla bake beautifully speckled with sweet, colorful candied fruits.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">CHOCOLATE DOUGHNUT &amp; TRUFFLE BALLS</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    Soft, golden ring pastries enrobed in glaze, alongside bite-sized hand-rolled spheres.
                  </p>
                </div>
              </div>
            </div>

            <!-- SUB: GOURMET COOKIES & BROWNIES -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important; letter-spacing: 0.5px;">GOURMET COOKIES &amp; BROWNIES</h4>
            
            <div class="row g-3">
              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">FUDGE &amp; WALNUT BROWNIE</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    A dense, gooey chocolate brownie generously studded with premium roasted walnuts.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">ROYAL DRY FRUIT COOKIES</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    Traditional rich, buttery shortbread loaded with premium roasted nuts and almonds.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">ARTISANAL SAVORY COOKIES</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    Crisp, crumbly bites baked to perfection with a blend of fine herbs and delicate spices.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- SECTION 4: HOT KITCHEN & SAVORIES -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <!-- Pizza SVG Icon -->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#6E1423" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M15 11h.01"></path>
                  <path d="M11 15h.01"></path>
                  <path d="M16 16h.01"></path>
                  <path d="M2 16l10-14 10 14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2z"></path>
                </svg>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">HOT KITCHEN &amp; SAVORIES</h3>
                <small class="text-muted fw-semibold">Live artisan pizzas, garlic breads, gourmet burgers &amp; authentic pastas</small>
              </div>
            </div>

            <!-- SUB: HOT CAFE CLASSICS -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important; letter-spacing: 0.5px;">HOT CAFE CLASSICS</h4>
            
            <div class="row g-3 mb-4">
              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">LIVE ARTISAN CHEESE PIZZA</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    Hand-tossed crust loaded with melted mozzarella, cottage cheese, sweet corn, mushroom, onion, and capsicum.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">OVEN-BAKED CHEESE GARLIC BREAD</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    Warm, crusty bread slices smothered in rich garlic herb butter and golden melted cheese.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">GRILLED CHEESE MULTIGRAIN SANDWICH</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    A wholesome, toasted artisan sandwich packed with savory cheese and fresh garden greens.
                  </p>
                </div>
              </div>
            </div>

            <!-- SUB: BURGERS & PASTA -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important; letter-spacing: 0.5px;">BURGERS &amp; PASTA</h4>
            
            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">THE CLASSIC VEGGIE BURGER</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    A crispy, spiced vegetable patty served in a soft bun with fresh greens and house sauce.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">THE PREMIUM CHEESE BURGER</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    Our classic veggie burger upgraded with a thick, melting slice of premium cheese.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">ARRABBIATA RED SAUCE PASTA</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    Al dente pasta tossed in a robust, tangy, and mildly spiced tomato-basil sauce.
                  </p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">CREAMY ALFREDO WHITE SAUCE PASTA</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">
                    Silky pasta smothered in a rich, velvety cheese and cream sauce, garnished with herbs.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer menu-modal-footer d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div class="small text-muted fw-bold">
            <i class="fa-solid fa-crown me-1 text-gold"></i> S. CATERERS SILVER MENU
          </div>
          <div class="d-flex align-items-center gap-2">
            <button onclick="shareMenu('silver')" class="btn fw-bold d-inline-flex align-items-center gap-1" style="border-radius:8px;font-size:0.82rem;background:#C6A15B;color:#fff;border:none;padding:8px 16px;box-shadow:0 4px 12px rgba(198,161,91,0.4);">
            <i class="fa-solid fa-share-nodes"></i> Share Menu
          </button>
            <button type="button" class="btn btn-outline-secondary px-3 py-2 fw-bold" data-bs-dismiss="modal" style="border-radius: 8px;">Close Window</button>
            <button type="button" class="btn btn-gold px-4 py-2 fw-bold" onclick="bookMenuFromModal('Silver Menu', 'silverMenuModal')" style="border-radius: 8px; background: linear-gradient(135deg, #C6A15B 0%, #8A6B1B 100%); color: #fff; border: none;"><i class="fa-solid fa-calendar-check me-1"></i> Book Silver Menu Now</button>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- ================= GOLD MENU FULL POPUP MODAL ================= -->
  <div class="modal fade" id="goldMenuModal" tabindex="-1" aria-labelledby="goldMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content menu-modal-content" style="border-radius: 24px; border: 2px solid #C6A15B; overflow: hidden; background: #FFFFFF; box-shadow: 0 15px 50px rgba(0,0,0,0.3);">
        
                <!-- Modal Header -->
        <div class="modal-header p-0" style="background: linear-gradient(160deg,#0F0F0F 0%,#1C1700 40%,#2A2000 100%); border-bottom: none; position: relative; overflow: hidden;">
          <!-- Decorative top accent strip -->
          <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#D4AF37;"></div>
          <!-- Subtle pattern overlay -->
          <div style="position:absolute;inset:0;background:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2260%22 height=%2260%22><circle cx=%2230%22 cy=%2230%22 r=%221%22 fill=%22rgba(255,255,255,0.04)%22/></svg>');"></div>

          <div class="w-100 px-4 pt-3 pb-2" style="position:relative;z-index:1;">
            <!-- Brand pill -->
            <div class="d-flex align-items-center justify-content-center mb-2">
              <div class="d-inline-flex align-items-center gap-2 px-2 py-1" style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.18);border-radius:50px;backdrop-filter:blur(10px);">
                <img src="{{ asset('images/logo.png') }}" alt="S. Caterers" style="height:18px;width:auto;filter:brightness(1.3);">
                <span style="color:rgba(255,255,255,0.85);font-size:0.68rem;font-weight:800;letter-spacing:2px;text-transform:uppercase;">S. CATERERS · PURE VEGETARIAN</span>
              </div>
            </div>

            <!-- Menu title -->
            <h2 class="font-heading text-center mb-1" id="goldMenuModalLabel" style="font-size:clamp(1.2rem,3.5vw,1.7rem);font-weight:900;color:#D4AF37;letter-spacing:2px;text-transform:uppercase;text-shadow:0 2px 12px rgba(0,0,0,0.4);margin:0 50px;">
              THE GOLD MENU
            </h2>

            <!-- Decorative line -->
            <div class="d-flex align-items-center justify-content-center gap-3 my-1">
              <div style="height:1px;width:60px;background:linear-gradient(to right,transparent,#D4AF37);"></div>
              <div style="width:6px;height:6px;border-radius:50%;background:#D4AF37;box-shadow:0 0 8px #D4AF37;"></div>
              <div style="height:1px;width:60px;background:linear-gradient(to left,transparent,#D4AF37);"></div>
            </div>

            <!-- Subtitle -->
            <p class="text-center mb-2" style="color:rgba(255,255,255,0.7);font-size:0.82rem;letter-spacing:0.8px;font-weight:500;margin:0;">
              Pure Vegetarian Fine Dining Banquet Experience
            </p>

            <!-- Action buttons row -->
            <div class="d-flex align-items-center justify-content-center gap-2 pb-0">
              <button onclick="shareMenu('gold')" class="d-inline-flex align-items-center gap-2 menu-dl-btn" style="background:#D4AF37;color:#fff;font-size:0.77rem;font-weight:800;padding:6px 18px;border-radius:50px;border:none;cursor:pointer;box-shadow:0 4px 14px rgba(212,175,55,0.5);letter-spacing:0.5px;">
                <i class="fa-solid fa-share-nodes" style="font-size:0.78rem;"></i> Share Menu
              </button>
            </div>
          </div>

          <!-- Close button -->
          <button type="button" class="btn-close btn-close-white position-absolute" data-bs-dismiss="modal" aria-label="Close"
                  style="top:10px;right:12px;opacity:0.9;z-index:10;width:36px;height:36px;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.12);border-radius:50%;filter:drop-shadow(0 1px 4px rgba(0,0,0,0.6));cursor:pointer;"></button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body menu-modal-body" id="goldMenuModalBody" style="background: #FAF8F5; font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;">
          
          <!-- I. THE WELCOME RECEPTION -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-martini-glass-citrus fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">I. THE WELCOME RECEPTION</h3>
                <small class="text-muted fw-semibold">Refreshments, artisanal shakes &amp; gourmet coffee</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">BLUE LAGOON MOCKTAIL</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A vibrant, azure-tinted tropical refreshment infused with citrus notes.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">VANILLA SHAKE</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A smooth, creamy masterpiece made with classic vanilla bean extract.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">BUTTERSCOTCH SHAKE</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A rich, velvety blend of premium dairy and artisanal butterscotch ribbons.</p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">ARTISANAL COFFEE</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Freshly brewed roasted beans, offering a bold and aromatic experience.</p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">VIRGIN MOJITO</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A timeless classic featuring muddled garden-fresh mint leaves and sparkling soda.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- II. THE GOURMET SOUP BISTRO -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-bowl-rice fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">II. THE GOURMET SOUP BISTRO</h3>
                <small class="text-muted fw-semibold">(Select one signature broth to begin your meal)</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">HOT &amp; SOUR SOUP</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A spicy and tangy Asian-inspired broth loaded with finely diced vegetables.</p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">MANCHOW SOUP</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A dark, fragrant ginger-garlic soup served with crunchy fried noodles.</p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">CREAM OF TOMATO SOUP</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A silky, smooth puree of vine-ripened tomatoes finished with fresh cream.</p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">SWEET CORN SOUP</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A comforting, thick velvety soup featuring golden kernels of sweet corn.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- III. INDIAN CHAT -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-utensils fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">III. INDIAN CHAT</h3>
                <small class="text-muted fw-semibold">Authentic street-style chaats &amp; crunchy puris</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">ALOO TIKKI</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Crispy, shallow-fried potato patties seasoned with traditional spices.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">PANI KE BATASHE</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Hollow, crispy semolina spheres filled with spiced water.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">ALOO KACHALOO</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A zesty street-style preparation of marinated potatoes and sweet potatoes.</p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">DAHI BATASE</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Crisp puris topped with thick sweetened yogurt and fine sev.</p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">MATAR TIKKI</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A unique green pea galette, pan-seared until golden.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- IV. THE LIVE PIZZA OVEN -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-pizza-slice fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">IV. THE LIVE PIZZA OVEN</h3>
                <small class="text-muted fw-semibold">Hand-tossed artisan wood-fired style pizza</small>
              </div>
            </div>

            <div class="p-3 rounded-3 border" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
              <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">VEG LOADED PIZZA</h4>
              <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A hand-tossed artisanal crust topped with premium cheese, sweet corn, capsicum, and onions.</p>
            </div>
          </div>

          <!-- V. LIVE & MOVING HOT PLATES -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-fire-flame-curry fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">V. LIVE &amp; MOVING HOT PLATES</h3>
                <small class="text-muted fw-semibold">Tikka, kebabs, tandoori treats &amp; savory hot starters</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">PANEER TIKKA SHASHLIK</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Hand-cut cubes of cottage cheese marinated in a spicy yogurt rub and charred.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">AJWAINI PANEER TIKKA</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Tender paneer marinated with carom seeds and yellow chilies.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">TANDOORI ALOO</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Baby potatoes scooped out, stuffed with a rich mixture, and roasted to a smoky finish.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">CHILLI POTATO</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Crispy fried potato batons tossed in a fiery, sweet-and-spicy glaze.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">ITALIAN HERB POTATO</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Potato wedges tossed in extra virgin olive oil, rosemary, and oregano.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">MOTIYA TIKKI</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Elegant, small pearl-shaped vegetable tikkis.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">RAJMA GALOUTI</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A vegetarian tribute to the royal kebab; finely minced kidney beans smoked with cloves.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">HARA BHARA KEBAB</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A healthy and flavorful blend of spinach, green peas, and aromatic spices.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">VEG SALT &amp; PEPPER</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A crunchy Oriental starter featuring garden vegetables tossed with crushed peppercorns.</p>
                </div>
              </div>

              <div class="col-12">
                <div class="p-3 rounded-3 border" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">VEGETABLE CROQUETS</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Golden-fried breaded rolls filled with a creamy mash of seasoned vegetables.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- VI. GLOBAL LIVE COUNTERS -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-earth-asia fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">VI. GLOBAL LIVE COUNTERS</h3>
                <small class="text-muted fw-semibold">Live wok, Punjabi traditional &amp; Awadhi royal counters</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">YO! CHINA</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Wok-tossed Hakka Noodles and savory Veg Manchurian simmered in a bold Hot Garlic Sauce.</p>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">PUNJABI STALL</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Rustic, slow-cooked Sarso Ka Saag served with traditional unleavened Makke Ki Roti.</p>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">AWADHI VEG COUNTER</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Traditional Veg Kebabs paired with saffron-infused Ulte Tave Ka Paratha and tangy Khatti Chutney.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- VII. THE GRAND BUFFET (MAIN COURSE) -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-plate-wheat fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">VII. THE GRAND BUFFET (MAIN COURSE)</h3>
                <small class="text-muted fw-semibold">Royal curries, paneer delicacies, dal makhni, biryani &amp; live griddle</small>
              </div>
            </div>

            <!-- PANEER SELECTION (SELECT ONE) -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">PANEER SELECTION (SELECT ONE)</h4>
            <div class="row g-3 mb-4">
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">PANEER BUTTER MASALA</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Soft cottage cheese cubes bathed in a rich, creamy tomato and cashew nut gravy.</p>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">PALAK PANEER</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A vibrant, iron-rich puree of fresh spinach tempered with garlic and cubes of paneer.</p>
                </div>
              </div>
            </div>

            <!-- SPECIALTY CURRY (SELECT ONE) -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">SPECIALTY CURRY (SELECT ONE)</h4>
            <div class="row g-3 mb-4">
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">DUM ALOO</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Slow-cooked potatoes in a rich, spicy yogurt-based gravy infused with fennel.</p>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">METHI MALAI CORN</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A sophisticated blend of bitter fenugreek leaves, sweet corn, and heavy cream.</p>
                </div>
              </div>
            </div>

            <!-- MUSHROOM SELECTION (SELECT ONE) -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">MUSHROOM SELECTION (SELECT ONE)</h4>
            <div class="row g-3 mb-4">
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">MUSHROOM DO PYAZA</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Saut’Ã†â€™€š©ed button mushrooms cooked with a generous, caramelized double portion of onions.</p>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">MUSHROOM MATAR</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A classic pairing of tender mushrooms and sweet garden peas in a spiced curry.</p>
                </div>
              </div>
            </div>

            <!-- DRY VEGETABLE SELECTION (SELECT ONE) -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">DRY VEGETABLE SELECTION (SELECT ONE)</h4>
            <div class="row g-3 mb-4">
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">MIX VEG</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A seasonal medley of garden-fresh vegetables tossed with aromatic spices.</p>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">DHANIYA ALOO</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Roasted potatoes tossed in a vibrant, herbaceous green coriander tempering.</p>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">ALOO GOBHI ADRAKI</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A dry, flavorful preparation of potatoes and cauliflower prominently featured with julienned ginger.</p>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">KHADE MASALE KA ALOO</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Potatoes tempered with whole spices for a rustic, deep taste.</p>
                </div>
              </div>
            </div>

            <!-- LENTILS (SELECT ONE) -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">LENTILS (SELECT ONE)</h4>
            <div class="row g-3 mb-4">
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">DAL TADKA</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Yellow lentils tempered with cumin, burnt garlic, and whole red chilies.</p>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">DAL MAKHNI</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">The king of dals; black lentils slow-cooked overnight with cream and butter.</p>
                </div>
              </div>
            </div>

            <!-- RICE & BIRYANI (SELECT ONE) -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">RICE &amp; BIRYANI (SELECT ONE)</h4>
            <div class="row g-3 mb-4">
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">JEERA PULAO</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Fragrant Basmati rice tempered with roasted cumin seeds.</p>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">VEG BIRYANI</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A majestic layer of long-grain rice and marinated vegetables, dum-cooked with saffron.</p>
                </div>
              </div>
            </div>

            <!-- LIVE GRIDDLE & ACCOMPANIMENTS -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">LIVE GRIDDLE &amp; ACCOMPANIMENTS</h4>
            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">VEG. LIVE TAWA</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Fresh vegetables tossed to order on a hot griddle with a blend of tangy spices.</p>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">DAHI VADA WITH SOTH CHUTNEY</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Soft lentil dumplings soaked in chilled yogurt, topped with sweet tamarind chutney.</p>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">PAPAD BAR</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">An assortment of crispy roasted and fried lentil wafers.</p>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">PICKLES BAR</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A collection of traditional, tangy, and spicy Indian pickles.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- VIII. THE SALAD BAR -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-2 mb-2">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-leaf fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">VIII. THE SALAD BAR</h3>
                <p class="text-muted small mb-0">A lavish spread of fresh, seasonal greens, mixed vegetable medleys, and curated dressings.</p>
              </div>
            </div>
          </div>

          <!-- IX. BREADS (TANDOOR & KADHAI) -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-bread-slice fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">IX. BREADS (TANDOOR &amp; KADHAI)</h3>
                <small class="text-muted fw-semibold">Fresh live oven-baked Indian rotis, parathas &amp; puris</small>
              </div>
            </div>
            <div class="p-3 rounded-3" style="background: #FFFDF9; border: 1px solid #E8DFD1;">
              <p class="mb-2 fw-semibold text-dark" style="font-size: 0.92rem;">’• Naan | Butter Naan | Garlic Naan | Missi Roti | Tandoori Roti | Butter Roti</p>
              <p class="mb-2 fw-semibold text-dark" style="font-size: 0.92rem;">’• Laccha Paratha | Methi Paratha | Mirchi Paratha</p>
              <p class="mb-0 fw-semibold text-dark" style="font-size: 0.92rem;">’• Poori | Palak Poori | Kachori</p>
            </div>
          </div>

          <!-- X. THE GRAND FINALE -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-ice-cream fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">X. THE GRAND FINALE</h3>
                <small class="text-muted fw-semibold">Hot desi sweets &amp; premium cold ice cream dessert section</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold">HOT SWEET SECTION (SELECT ANY THREE)</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Gulab Jamun, Kala Jam, Gajar Halwa, Moong Dal Halwa, Kesariya Milk.</p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold">COLD SWEET SECTION</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Premium Vanilla Ice Cream, Strawberry Ice Cream.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- XI. PHERA SECTION -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-mug-hot fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">XI. PHERA SECTION</h3>
                <small class="text-muted fw-semibold">Late-night phera hospitality counter</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">HOT TEA</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Aromatic and comforting traditional hot Indian tea.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">FRIED MAKHANA</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Crispy lotus seeds lightly roasted with a hint of rock salt.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">MINERAL WATER</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Chilled, premium bottled water.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">ASSORTED COOKIES</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Oven-fresh baked biscuits for a sweet and savory crunch.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- XII. VIDAI MENU (EXTRA ’¢¢₹Ã…Â¡€š¹50) -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-gift fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">XII. VIDAI MENU (EXTRA ’¢¢₹Ã…Â¡€š¹50)</h3>
                <small class="text-muted fw-semibold">Optional farewell snacks for departing guests</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">VEG CUTLET</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Golden, crumb-fried vegetable patties with a soft, spiced core.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">KACHORI &amp; ALOO ZHOL</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Flaky deep-fried pastry served with a tangy, spicy potato curry.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">HOT TEA</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Traditional hot tea to refresh departing guests.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">FRESH COOKIES</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A selection of sweet baked treats for the journey.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer menu-modal-footer d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div class="small text-muted fw-bold">
            <i class="fa-solid fa-crown me-1 text-gold"></i> S. CATERERS GOLD MENU
          </div>
          <div class="d-flex align-items-center gap-2">
            <button onclick="shareMenu('gold')" class="btn fw-bold d-inline-flex align-items-center gap-1" style="border-radius:8px;font-size:0.82rem;background:#D4AF37;color:#fff;border:none;padding:8px 16px;box-shadow:0 4px 12px rgba(212,175,55,0.4);">
            <i class="fa-solid fa-share-nodes"></i> Share Menu
          </button>
            <button type="button" class="btn btn-outline-secondary px-3 py-2 fw-bold" data-bs-dismiss="modal" style="border-radius: 8px;">Close Window</button>
            <button type="button" class="btn btn-gold px-4 py-2 fw-bold" onclick="bookMenuFromModal('Gold Menu', 'goldMenuModal')" style="border-radius: 8px; background: linear-gradient(135deg, #C6A15B 0%, #8A6B1B 100%); color: #fff; border: none;"><i class="fa-solid fa-calendar-check me-1"></i> Book Gold Menu Now</button>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- ================= ROYAL MENU FULL POPUP MODAL ================= -->
  <div class="modal fade" id="royalMenuModal" tabindex="-1" aria-labelledby="royalMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content menu-modal-content" style="border-radius: 24px; border: 2px solid #D4AF37; overflow: hidden; background: #FFFFFF; box-shadow: 0 15px 50px rgba(0,0,0,0.3);">
        
                <!-- Modal Header -->
        <div class="modal-header p-0" style="background: linear-gradient(160deg,#2D0008 0%,#1A000A 40%,#3D0010 100%); border-bottom: none; position: relative; overflow: hidden;">
          <!-- Decorative top accent strip -->
          <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#FFD700;"></div>
          <!-- Subtle pattern overlay -->
          <div style="position:absolute;inset:0;background:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2260%22 height=%2260%22><circle cx=%2230%22 cy=%2230%22 r=%221%22 fill=%22rgba(255,255,255,0.04)%22/></svg>');"></div>

          <div class="w-100 px-4 pt-3 pb-2" style="position:relative;z-index:1;">
            <!-- Brand pill -->
            <div class="d-flex align-items-center justify-content-center mb-2">
              <div class="d-inline-flex align-items-center gap-2 px-2 py-1" style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.18);border-radius:50px;backdrop-filter:blur(10px);">
                <img src="{{ asset('images/logo.png') }}" alt="S. Caterers" style="height:18px;width:auto;filter:brightness(1.3);">
                <span style="color:rgba(255,255,255,0.85);font-size:0.68rem;font-weight:800;letter-spacing:2px;text-transform:uppercase;">S. CATERERS · RAJWADA COLLECTION</span>
              </div>
            </div>

            <!-- Menu title -->
            <h2 class="font-heading text-center mb-1" id="royalMenuModalLabel" style="font-size:clamp(1.2rem,3.5vw,1.7rem);font-weight:900;color:#FFD700;letter-spacing:2px;text-transform:uppercase;text-shadow:0 2px 12px rgba(0,0,0,0.4);margin:0 50px;">
              THE ROYAL CHOICE MENU
            </h2>

            <!-- Decorative line -->
            <div class="d-flex align-items-center justify-content-center gap-3 my-1">
              <div style="height:1px;width:60px;background:linear-gradient(to right,transparent,#FFD700);"></div>
              <div style="width:6px;height:6px;border-radius:50%;background:#FFD700;box-shadow:0 0 8px #FFD700;"></div>
              <div style="height:1px;width:60px;background:linear-gradient(to left,transparent,#FFD700);"></div>
            </div>

            <!-- Subtitle -->
            <p class="text-center mb-2" style="color:rgba(255,255,255,0.7);font-size:0.82rem;letter-spacing:0.8px;font-weight:500;margin:0;">
              Opulent VIP Rajwada Feast &amp; Live Interactive Stations
            </p>

            <!-- Action buttons row -->
            <div class="d-flex align-items-center justify-content-center gap-2 pb-0">
              <button onclick="shareMenu('royal')" class="d-inline-flex align-items-center gap-2 menu-dl-btn" style="background:#FFD700;color:#fff;font-size:0.77rem;font-weight:800;padding:6px 18px;border-radius:50px;border:none;cursor:pointer;box-shadow:0 4px 14px rgba(255,215,0,0.5);letter-spacing:0.5px;">
                <i class="fa-solid fa-share-nodes" style="font-size:0.78rem;"></i> Share Menu
              </button>
            </div>
          </div>

          <!-- Close button -->
          <button type="button" class="btn-close btn-close-white position-absolute" data-bs-dismiss="modal" aria-label="Close"
                  style="top:10px;right:12px;opacity:0.9;z-index:10;width:36px;height:36px;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.12);border-radius:50%;filter:drop-shadow(0 1px 4px rgba(0,0,0,0.6));cursor:pointer;"></button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body menu-modal-body" id="royalMenuModalBody" style="background: #FAF8F5; font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;">
          
          <p class="text-center text-muted fst-italic mb-4" style="font-size: 0.95rem;">
            "We invite you to experience a culinary masterpiece. From our live interactive stations to our royal main course, every dish is crafted to create unforgettable memories for you and your guests."
          </p>

          <!-- WELCOME BEVERAGES -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-martini-glass-citrus fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">WELCOME BEVERAGES</h3>
                <small class="text-muted fw-semibold">Exotic mocktails, premium shakes &amp; coffee station</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Exotic Mocktails</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A refreshing trio of Blue Lagoon, Virgin Mojito, and Strawberry Blast.</p>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Premium Shakes</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Thick and creamy blends: Cold Coffee, Butterscotch Shake, and Seasonal Mango Shake.</p>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Coffee Station</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Freshly brewed aromatic coffee served steaming hot.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- GOURMET SOUPS (ANY TWO) -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-bowl-rice fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">GOURMET SOUPS (ANY TWO)</h3>
                <small class="text-muted fw-semibold">Asian broths &amp; velvety comfort soups</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Asian Classics</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Spicy Hot &amp; Sour Soup OR Crunchy Manchow Soup.</p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Comfort Bowls</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Velvety Cream of Tomato OR Classic Sweet Corn Soup.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- THE GRAND APPETIZER SHOWCASE -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-fire-flame-curry fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">THE GRAND APPETIZER SHOWCASE</h3>
                <small class="text-muted fw-semibold">Live charcoal BBQ, moving hot plates &amp; Agra street chaats</small>
              </div>
            </div>

            <!-- LIVE BBQ & TANDOOR (THE THEATRE OF EMBERS) -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">LIVE BBQ &amp; TANDOOR (THE THEATRE OF EMBERS)</h4>
            <div class="row g-3 mb-4">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Tandoori Soya Chaap</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Soy chunks marinated in hung curd and secret roasted spices, finished in the clay oven.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Veg Shammi Kebab</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Melt-in-the-mouth galettes made from lentils and finely chopped vegetables.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Veg Seekh Kebab</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Minced vegetable skewers infused with aromatic herbs glazed with butter.</p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Hara Bhara Kebab</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Spinach and green pea patties stuffed with nuts and spices.</p>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Matar Meva Kebab</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">A royal delicacy of green peas and cashews, shallow fried to golden perfection.</p>
                </div>
              </div>
            </div>

            <!-- THE MOVING HOT PLATE (ORIENTAL & CONTINENTAL) -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">THE MOVING HOT PLATE (ORIENTAL &amp; CONTINENTAL)</h4>
            <div class="row g-3 mb-4">
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Chilly Paneer Dry</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Cottage cheese cubes wok-tossed with bell peppers in a spicy, tangy glaze.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Cheese Corn Cigar Rolls</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Crispy pastry sheets rolled with a melting center of cheese and sweet corn.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Crispy Veg Salt &amp; Pepper</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Assorted vegetables tempura-fried and dusted with sea salt and cracked pepper.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Classic Spring Rolls</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Golden fried wraps stuffed with savory glass noodles and julienned vegetables.</p>
                </div>
              </div>
            </div>

            <!-- AGRA KI CHAAT (LIVE STREET FLAVORS) -->
            <h4 class="h6 font-heading mb-3 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">AGRA KI CHAAT (LIVE STREET FLAVORS)</h4>
            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">The Tikki Station</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Crispy Aloo Tikki &amp; Spiced Matar Tikki served with sizzling chutneys.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Gol Gappa Bar</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Pani Ke Batasa (Spicy Water Balls) &amp; Dahi Batase (Yogurt Spheres).</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Palak Pan Patta Chat</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Spinach leaves fried in chickpea batter, topped with yogurt and pomegranate.</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h5 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Aloo Kachaloo</h5>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Spicy, tangy potato chunks tossed in regional spices.</p>
                </div>
              </div>

              <div class="col-12">
                <div class="p-3 rounded-3 border" style="background: #FFF8EB; border-color: #E8D09E !important;">
                  <small class="fw-bold text-dark"><i class="fa-solid fa-pepper-hot me-1 text-gold"></i> Served with Gourmet Dips:</small>
                  <span class="small text-muted ms-1">Tangy Tomato, Spicy Green Chilli, Creamy Garlic Mayo, and Zesty Cocktail Sauce.</span>
                </div>
              </div>
            </div>
          </div>

          <!-- GLOBAL & REGIONAL FLAVORS -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-earth-asia fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">GLOBAL &amp; REGIONAL FLAVORS</h3>
                <small class="text-muted fw-semibold">Italian, Chinese, Punjabi, Awadhi &amp; South Indian specialty counters</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase text-dark fw-bold">ITALIAN BISTRO</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Wood-Fired Pizza: Veg Loaded, Cheese Corn, Capsicum.</li>
                    <li>’• Gourmet Pasta: Alfredo (Creamy) &amp; Arrabbiata (Spicy).</li>
                    <li>’• Sides: Garlic Breads &amp; Live Saute Veg.</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase text-dark fw-bold">YO! CHINA</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Wok Station: Burnt Garlic Noodles &amp; Singapore Rice.</li>
                    <li>’• Asian Gravy: Veg Balls in Hot Chinese Sauce.</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase text-dark fw-bold">PUNJABI PIND</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Sarson Ka Saag: With Makke Ki Roti.</li>
                    <li>’• Stuffed Kulcha: Served with Pindi Chole.</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase text-dark fw-bold">AWADHI DASTARKHWAN</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Veg Galouti Kebab: With Khatti Chutney &amp; Onion Rings.</li>
                    <li>’• Ulte Tave Ka Paratha: Authentic Awadhi specialty.</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase text-dark fw-bold">SOUTH INDIAN</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Dosa Variety: Crispy Paper Dosa &amp; Masala Dosa.</li>
                    <li>’• Sides: Authentic Sambhar &amp; Coconut Chutney.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- THE ROYAL MAIN COURSE -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-crown fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">THE ROYAL MAIN COURSE</h3>
                <small class="text-muted fw-semibold">Paneer pasanda, mushroom &amp; kofta, live takatak &amp; accompaniments</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">PANEER (SELECT ONE)</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Paneer Pasanda: Stuffed paneer sandwiches in rich golden gravy.</li>
                    <li>’• Kadhai Paneer: Wok-tossed with bell peppers and freshly ground spices.</li>
                    <li>’• Paneer Lababdar: Creamy, tangy tomato gravy with grated paneer.</li>
                    <li>’• Palak Paneer: Classic spinach preparation tempered with garlic.</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">MUSHROOM &amp; KOFTA</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Mushroom: Mutter Mushroom OR Do Pyaza.</li>
                    <li>’• Specials: Nargisi Kofta OR Mirchi Ka Salan.</li>
                    <li>’• Live Veg Takatak: 6 types of seasonal veggies prepared live on the Tava.</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">REGIONAL FAVORITES</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Potato (Select One): Aloo Kali Mirch OR Dhaniya Aloo.</li>
                    <li>’• Dal (Select One): Dal Makhani (Creamy) OR Dal Tadka (Tempered).</li>
                    <li>’• Rice (Select One): Jeera Rice OR Veg Biryani.</li>
                    <li>’• Dry Veg (Select One): Mix Veg, Gobhi Musallam, Bhindi Crispy, OR Bhindi Masala.</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">ACCOMPANIMENTS &amp; BREADS</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Yoghurt &amp; Salad: Dahi Vada, Pineapple Raita, Salad Bar, Papad Bar, Pickles.</li>
                    <li>’• Assorted Breads: Butter Naan, Missi Roti, Laccha Paratha, Garlic/Biscuit Naan, Methi/Mirchi Paratha, Poori, Palak Poori, Khasta Kachori.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- SWEET FINALES -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-ice-cream fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">SWEET FINALES</h3>
                <small class="text-muted fw-semibold">Hot sweets, royal treats, kulfi &amp; gourmet ice creams</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold">HOT SWEETS</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Classic Selection: Gulab Jamun OR Kala Jam.</li>
                    <li>’• Halwa (Select One): Gajar Halwa, Moong Dal Halwa, OR Beetroot Halwa.</li>
                    <li>’• Royal Treats (Select One): Imarti Rabdi, Malpua Rabdi, OR Shahi Tukda.</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold">SPECIALTY SELECTION</h4>
                  <p class="small text-muted mb-1 fw-bold">Choice of:</p>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Kulfi (Faluda or Stick)</li>
                    <li>’• Warm Kesariya Milk</li>
                    <li>’• Malai Makkhan</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold">ICE CREAM</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; line-height: 1.5;">Vanilla with Chocolate Sauce, Strawberry, or Butterscotch.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- THE PHERE STATION -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-2 mb-2">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-mug-hot fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">THE PHERE STATION</h3>
                <p class="text-muted small mb-0">Continuous Service: Tea, Water, Cookies, and Fried Makhana.</p>
              </div>
            </div>
          </div>

          <!-- THE VIDAI MENU (EXTRA ₹50) -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-gift fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">THE VIDAI MENU (EXTRA ₹50)</h3>
                <small class="text-muted fw-semibold">Optional farewell snacks for departing guests</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Vegetable Cutlet</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Heart-shaped spiced vegetable patties, crumb-fried to perfection.</p>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Kachori &amp; Aloo Jhol</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Traditional flaky pastry served with a savory, spiced potato curry.</p>
                </div>
              </div>

              <div class="col-12 col-md-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-1 text-uppercase" style="font-weight: 800; color: #1A1A1A;">Tea &amp; Cookies</h4>
                  <p class="text-muted small mb-0" style="font-size: 0.88rem; color: #555555 !important; line-height: 1.45;">Freshly brewed masala chai served with assorted bakery biscuits.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer menu-modal-footer d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div class="small text-muted fw-bold">
            <i class="fa-solid fa-crown me-1 text-gold"></i> S. CATERERS ROYAL MENU
          </div>
          <div class="d-flex align-items-center gap-2">
            <button onclick="shareMenu('royal')" class="btn fw-bold d-inline-flex align-items-center gap-1" style="border-radius:8px;font-size:0.82rem;background:#FFD700;color:#fff;border:none;padding:8px 16px;box-shadow:0 4px 12px rgba(255,215,0,0.4);">
            <i class="fa-solid fa-share-nodes"></i> Share Menu
          </button>
            <button type="button" class="btn btn-outline-secondary px-3 py-2 fw-bold" data-bs-dismiss="modal" style="border-radius: 8px;">Close Window</button>
            <button type="button" class="btn btn-gold px-4 py-2 fw-bold" onclick="bookMenuFromModal('Royal Menu', 'royalMenuModal')" style="border-radius: 8px; background: linear-gradient(135deg, #C6A15B 0%, #8A6B1B 100%); color: #fff; border: none;"><i class="fa-solid fa-calendar-check me-1"></i> Book Royal Menu Now</button>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- ================= VIP MENU FULL POPUP MODAL ================= -->
  <div class="modal fade" id="vipMenuModal" tabindex="-1" aria-labelledby="vipMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content menu-modal-content" style="border-radius: 24px; border: 2px solid #6A3FA0; overflow: hidden; background: #FFFFFF; box-shadow: 0 15px 50px rgba(0,0,0,0.3);">
        
                <!-- Modal Header -->
        <div class="modal-header p-0" style="background: linear-gradient(160deg,#1A0933 0%,#0D001A 40%,#2A0845 100%); border-bottom: none; position: relative; overflow: hidden;">
          <!-- Decorative top accent strip -->
          <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#9B59B6;"></div>
          <!-- Subtle pattern overlay -->
          <div style="position:absolute;inset:0;background:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2260%22 height=%2260%22><circle cx=%2230%22 cy=%2230%22 r=%221%22 fill=%22rgba(255,255,255,0.04)%22/></svg>');"></div>

          <div class="w-100 px-4 pt-3 pb-2" style="position:relative;z-index:1;">
            <!-- Brand pill -->
            <div class="d-flex align-items-center justify-content-center mb-2">
              <div class="d-inline-flex align-items-center gap-2 px-2 py-1" style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.18);border-radius:50px;backdrop-filter:blur(10px);">
                <img src="{{ asset('images/logo.png') }}" alt="S. Caterers" style="height:18px;width:auto;filter:brightness(1.3);">
                <span style="color:rgba(255,255,255,0.85);font-size:0.68rem;font-weight:800;letter-spacing:2px;text-transform:uppercase;">S. CATERERS · PINNACLE COLLECTION</span>
              </div>
            </div>

            <!-- Menu title -->
            <h2 class="font-heading text-center mb-1" id="vipMenuModalLabel" style="font-size:clamp(1.2rem,3.5vw,1.7rem);font-weight:900;color:#D7A8F0;letter-spacing:2px;text-transform:uppercase;text-shadow:0 2px 12px rgba(0,0,0,0.4);margin:0 50px;">
              VIP MENU
            </h2>

            <!-- Decorative line -->
            <div class="d-flex align-items-center justify-content-center gap-3 my-1">
              <div style="height:1px;width:60px;background:linear-gradient(to right,transparent,#9B59B6);"></div>
              <div style="width:6px;height:6px;border-radius:50%;background:#9B59B6;box-shadow:0 0 8px #9B59B6;"></div>
              <div style="height:1px;width:60px;background:linear-gradient(to left,transparent,#9B59B6);"></div>
            </div>

            <!-- Subtitle -->
            <p class="text-center mb-2" style="color:rgba(255,255,255,0.7);font-size:0.82rem;letter-spacing:0.8px;font-weight:500;margin:0;">
              The Pinnacle of Vegetarian Banquet Luxury
            </p>

            <!-- Action buttons row -->
            <div class="d-flex align-items-center justify-content-center gap-2 pb-0">
              <button onclick="shareMenu('vip')" class="d-inline-flex align-items-center gap-2 menu-dl-btn" style="background:#9B59B6;color:#fff;font-size:0.77rem;font-weight:800;padding:6px 18px;border-radius:50px;border:none;cursor:pointer;box-shadow:0 4px 14px rgba(155,89,182,0.5);letter-spacing:0.5px;">
                <i class="fa-solid fa-share-nodes" style="font-size:0.78rem;"></i> Share Menu
              </button>
            </div>
          </div>

          <!-- Close button -->
          <button type="button" class="btn-close btn-close-white position-absolute" data-bs-dismiss="modal" aria-label="Close"
                  style="top:10px;right:12px;opacity:0.9;z-index:10;width:36px;height:36px;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.12);border-radius:50%;filter:drop-shadow(0 1px 4px rgba(0,0,0,0.6));cursor:pointer;"></button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body menu-modal-body" id="vipMenuModalBody" style="background: #FAF7FC; font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;">
          
          <p class="text-center text-muted fst-italic mb-4" style="font-size: 0.95rem;">
            "We invite you to experience a culinary masterpiece. From our live interactive stations to our royal main course, every dish is crafted to create unforgettable memories for you and your guests."
          </p>

          <!-- WELCOME DRINKS -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E6D9F2 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E6D9F2 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(106, 63, 160, 0.15); border: 1.5px solid #6A3FA0; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-martini-glass-citrus fs-5" style="color: #6A3FA0 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #3A1060; font-weight: 800; letter-spacing: 1px;">WELCOME DRINKS</h3>
                <small class="text-muted fw-semibold">Gourmet coffee, herbal teas, signature shakes, mocktails &amp; soups</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">COFFEE</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Espresso | Cappuccino</li>
                    <li>’• Cafe Latte | Cafe Mocha</li>
                    <li>’• Hot Chocolate</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">TEA</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Kulhad Tea</li>
                    <li>’• Masala Green Tea</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">WELCOME SOUP</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Veg. Peeking Soup</li>
                    <li>’• Tomato Soup</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">SHAKES</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Pineapple Shake | Vanilla Shake</li>
                    <li>’• Chocolate Shake | Strawberry Shake</li>
                    <li>’• Mango Shake</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">MOCKTAILS</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Green Mint Mojito | Royal Blue Sky | Pinacolada</li>
                    <li>’• Spiced Mango Pineapple | Virgin Mojito</li>
                    <li>’• Fresh Lime Soda | Cold Drink</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- APPETIZERS & SNACKS -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E6D9F2 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E6D9F2 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(106, 63, 160, 0.15); border: 1.5px solid #6A3FA0; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-fire-flame-curry fs-5" style="color: #6A3FA0 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #3A1060; font-weight: 800; letter-spacing: 1px;">APPETIZERS &amp; SNACKS</h3>
                <small class="text-muted fw-semibold">Live BBQ, dimsums, street chaats, grilled snacks &amp; bar nibbles</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">WELCOME VEG. SNACKS</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Corn Cheese Nest | Honey Chilli Potato</li>
                    <li>’• Spinach Spring Roll | Crispy Corn</li>
                    <li>’• Paneer 65 | Mexican LollyPop</li>
                    <li>’• Mushroom Chilli | Crispy Paneer</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">GRILLED SNACKS</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Dahi Kabab | Galoti Kabab</li>
                    <li>’• American Corn | Mushroom Kabab</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">BAR SNACKS</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Paneer Masala | Papad | Salad</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">LIVE BBQ</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Paneer Mughlai Tikka | Achari Soya Chaap</li>
                    <li>’• Malai Soya Chaap | Mushroom Masala Tikka</li>
                    <li>’• Sweet N Savory Pineapple Tikka | Khatta Meetha Aloo Tikka</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">DIMSUM COUNTER</h4>
                  <p class="small text-muted mb-1 fw-bold">Varieties-</p>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Vegetable Dimsum | Cheese Dimsum</li>
                    <li class="fst-italic text-purple mt-1">(with - Red Garlic Chutney)</li>
                  </ul>
                </div>
              </div>

              <div class="col-12">
                <div class="p-3 rounded-3 border" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">CHAAT COUNTER</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Golgappa with 2 type of water | Stuffed aloo tikka | Mattar Bowl tawa</li>
                    <li>’• Dahi fruit Papdi | Banarasi tamatar chaat | Veg. Omlet Sandwich with khatti mithi chutney</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- INTERNATIONAL & REGIONAL CUISINES -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E6D9F2 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E6D9F2 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(106, 63, 160, 0.15); border: 1.5px solid #6A3FA0; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-earth-asia fs-5" style="color: #6A3FA0 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #3A1060; font-weight: 800; letter-spacing: 1px;">INTERNATIONAL &amp; REGIONAL CUISINES</h3>
                <small class="text-muted fw-semibold">Chinese, Japanese, Italian, Mexican, Pizza &amp; Veg Mughlai counters</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">CHINESE CUISINE</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Chilli Garlic Noodles</li>
                    <li>’• Paneer Schewan</li>
                    <li>’• Veg. Fried Rice with hot Garlic Sauce</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">JAPANESE CUISINE</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Vegetarian Sushi Bowl</li>
                    <li>’• Sizzling Veggie Teppanyaki</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">MEXICAN &amp; PIZZA</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• PIZZA COUNTER</li>
                    <li>’• Veg. Quesadilla Wrap</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">ITALIAN CUISINE</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Spinach Tomato Tortellini | Penne with Spicy Tomato Cream Sauce</li>
                    <li>’• Pasta Al Rosa | Pesto Spaghetti Pasta</li>
                    <li>’• Cheese Spinach and Mushroom Lasagna</li>
                    <li>’• Grilled Paneer in Burnt Garlic Creamy Sauce | Baby Corn Pepper Stir Fry</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">VEG. MUGHLAI</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Mushroom Kaleji | Rumali Roti</li>
                    <li>’• Veg. Biryani | Burani Raita</li>
                    <li>’• Green Chutney | Onion Rings</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- MAIN COURSE & BREADS -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E6D9F2 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E6D9F2 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(106, 63, 160, 0.15); border: 1.5px solid #6A3FA0; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-plate-wheat fs-5" style="color: #6A3FA0 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #3A1060; font-weight: 800; letter-spacing: 1px;">MAIN COURSE &amp; BREADS</h3>
                <small class="text-muted fw-semibold">Signature paneer curries, dal bukhara, live yellow dal, curd station &amp; artisanal rotis</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">MAIN COURSE</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Paneer Lababdar | Paneer Tikka Masala Gravy</li>
                    <li>’• Nargisi Kofta | Kashmiri Dum Aloo | Methi Malai Corn</li>
                    <li>’• Veg. Jhal Frezi | Matar Angoor Kaju</li>
                    <li>’• Dal Bukhara | Dal Yellow Tadka Live</li>
                    <li>’• Jeera Rice | Matar Paneer Pulao</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">CURD STATION &amp; BREADS</h4>
                  <p class="small text-muted mb-1 fw-bold">CURD STATION</p>
                  <ul class="list-unstyled small text-muted mb-3 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Dahi Gujiya</li>
                  </ul>
                  <p class="small text-muted mb-1 fw-bold">BREADS</p>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Plain Naan | Butter Naan | Stuffed Naan</li>
                    <li>’• Laccha Paratha | Missi Roti | Biscuiti Roti</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- DESSERTS & SERVICE -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E6D9F2 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E6D9F2 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(106, 63, 160, 0.15); border: 1.5px solid #6A3FA0; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-ice-cream fs-5" style="color: #6A3FA0 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #3A1060; font-weight: 800; letter-spacing: 1px;">DESSERTS &amp; SERVICE</h3>
                <small class="text-muted fw-semibold">Ice creams, kulfi falooda, bakery desserts, hot desserts &amp; end course</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">COLD DESSERT</h4>
                  <p class="small text-muted mb-1 fw-bold">Ice Cream-</p>
                  <ul class="list-unstyled small text-muted mb-2 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• American Nuts | Kesar Pista | Butterscotch</li>
                  </ul>
                  <p class="small text-muted mb-1 fw-bold">Kulfi Falooda-</p>
                  <ul class="list-unstyled small text-muted mb-2 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Kesariya | Mango | Paan</li>
                  </ul>
                  <p class="small text-muted mb-0 fw-semibold">’• Kesariya Chena rabdi in Terracota Pot</p>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">HOT DESSERT</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Kesariya Jaleba Mewa</li>
                    <li>’• Moong Badam Halwa</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">BAKERY DESSERT</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Brownie with hot chocolate sauce</li>
                    <li>’• Fruit Truffle Mousse</li>
                    <li>’• Chocolate Truffle Mousse</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FDFBFF; border-color: #E6D9F2 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #6A3FA0 !important;">END COURSE</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Mineral Water Bottle 250ml</li>
                    <li>’• Premium Crockery</li>
                    <li>’• Premium Service</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer menu-modal-footer d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div class="small text-muted fw-bold">
            <i class="fa-solid fa-gem me-1" style="color: #6A3FA0;"></i> S. CATERERS VIP MENU
          </div>
          <div class="d-flex align-items-center gap-2">
            <button onclick="shareMenu('vip')" class="btn fw-bold d-inline-flex align-items-center gap-1" style="border-radius:8px;font-size:0.82rem;background:#9B59B6;color:#fff;border:none;padding:8px 16px;box-shadow:0 4px 12px rgba(155,89,182,0.4);">
            <i class="fa-solid fa-share-nodes"></i> Share Menu
          </button>
            <button type="button" class="btn btn-outline-secondary px-3 py-2 fw-bold" data-bs-dismiss="modal" style="border-radius: 8px;">Close Window</button>
            <button type="button" class="btn px-4 py-2 fw-bold" onclick="bookMenuFromModal('VIP Menu', 'vipMenuModal')"><i class="fa-solid fa-calendar-check me-1"></i> Book VIP Menu Now</button>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- ================= MASTER FULL MENU POPUP MODAL ================= -->
  <div class="modal fade" id="fullMenuModal" tabindex="-1" aria-labelledby="fullMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content menu-modal-content" style="border-radius: 24px; border: 2px solid #D4AF37; overflow: hidden; background: #FFFFFF; box-shadow: 0 15px 50px rgba(0,0,0,0.3);">
        
                <!-- Modal Header -->
        <div class="modal-header p-0" style="background: linear-gradient(160deg,#0F0F0F 0%,#1A1400 40%,#261E00 100%); border-bottom: none; position: relative; overflow: hidden;">
          <!-- Decorative top accent strip -->
          <div style="position:absolute;top:0;left:0;right:0;height:3px;background:#D4AF37;"></div>
          <!-- Subtle pattern overlay -->
          <div style="position:absolute;inset:0;background:url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2260%22 height=%2260%22><circle cx=%2230%22 cy=%2230%22 r=%221%22 fill=%22rgba(255,255,255,0.04)%22/></svg>');"></div>

          <div class="w-100 px-4 pt-3 pb-2" style="position:relative;z-index:1;">
            <!-- Brand pill -->
            <div class="d-flex align-items-center justify-content-center mb-2">
              <div class="d-inline-flex align-items-center gap-2 px-2 py-1" style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.18);border-radius:50px;backdrop-filter:blur(10px);">
                <img src="{{ asset('images/logo.png') }}" alt="S. Caterers" style="height:18px;width:auto;filter:brightness(1.3);">
                <span style="color:rgba(255,255,255,0.85);font-size:0.68rem;font-weight:800;letter-spacing:2px;text-transform:uppercase;">S. CATERERS · COMPLETE COLLECTION</span>
              </div>
            </div>

            <!-- Menu title -->
            <h2 class="font-heading text-center mb-1" id="Banquet" style="font-size:clamp(1.2rem,3.5vw,1.7rem);font-weight:900;color:#FFD700;letter-spacing:2px;text-transform:uppercase;text-shadow:0 2px 12px rgba(0,0,0,0.4);margin:0 50px;">
              MASTER FULL MENU
            </h2>

            <!-- Decorative line -->
            <div class="d-flex align-items-center justify-content-center gap-3 my-1">
              <div style="height:1px;width:60px;background:linear-gradient(to right,transparent,#D4AF37);"></div>
              <div style="width:6px;height:6px;border-radius:50%;background:#D4AF37;box-shadow:0 0 8px #D4AF37;"></div>
              <div style="height:1px;width:60px;background:linear-gradient(to left,transparent,#D4AF37);"></div>
            </div>

            <!-- Subtitle -->
            <p class="text-center mb-2" style="color:rgba(255,255,255,0.7);font-size:0.82rem;letter-spacing:0.8px;font-weight:500;margin:0;">
              S. Caterers — Complete Vegetarian Banquet Collection
            </p>

            <!-- Action buttons row -->
            <div class="d-flex align-items-center justify-content-center gap-2 pb-0">
              <button onclick="shareMenu('full')" class="d-inline-flex align-items-center gap-2 menu-dl-btn" style="background:#D4AF37;color:#111;font-size:0.77rem;font-weight:800;padding:6px 18px;border-radius:50px;border:none;cursor:pointer;box-shadow:0 4px 14px rgba(212,175,55,0.5);letter-spacing:0.5px;">
                <i class="fa-solid fa-share-nodes" style="font-size:0.78rem;"></i> Share Menu
              </button>
            </div>
          </div>

          <!-- Close button -->
          <button type="button" class="btn-close btn-close-white position-absolute" data-bs-dismiss="modal" aria-label="Close"
                  style="top:10px;right:12px;opacity:0.9;z-index:10;width:36px;height:36px;display:flex;align-items:center;justify-content:center;background:rgba(255,255,255,0.12);border-radius:50%;filter:drop-shadow(0 1px 4px rgba(0,0,0,0.6));cursor:pointer;"></button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body menu-modal-body" id="fullMenuModalBody" style="background: #FAF8F5; font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;">
          
          <!-- WELCOME DRINK -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-martini-glass-citrus fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">WELCOME DRINK</h3>
                <small class="text-muted fw-semibold">Mocktails, shakes, slush, juices, coffees &amp; teas</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">MOCKTAILS- MONIN SYRUP</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Cold Drinks (Coke, Mirinda, Sprite)</li>
                    <li>’• Pink Lady | Blue Lagoon</li>
                    <li>’• Green Garden | Green Mint</li>
                    <li>’• Virgin Merry | Pine Colada | Majitos</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">SHAKES &amp; SLUSH</h4>
                  <p class="small text-muted mb-1 fw-bold">SHAKES</p>
                  <ul class="list-unstyled small text-muted mb-2 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Strawberry | Alphonso dream | Kiwi</li>
                    <li>’• Date | Banana | Chocklate | Keser Pista</li>
                  </ul>
                  <p class="small text-muted mb-1 fw-bold">SLUSH</p>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Orange, Lemon, Mango, Pineapple</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">JUICES &amp; COFFEE</h4>
                  <p class="small text-muted mb-1 fw-bold">JUICES</p>
                  <ul class="list-unstyled small text-muted mb-2 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Variety of Fruit Juces (18 to 20 Type) by Delhi (Extra)</li>
                  </ul>
                  <p class="small text-muted mb-1 fw-bold">EXPRESSO COFFEE</p>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Caf’Ã†â€™€š© Hut (Extra) | 2-3 Types Beans Coffee</li>
                    <li>’• Coffee | Cold Coffee</li>
                  </ul>
                </div>
              </div>

              <div class="col-12">
                <div class="p-3 rounded-3 border" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">TEA &amp; BAKERY</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Lemon Tea | Ginger Tea | Elaichi Tea | Cookies</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- APPETIZERS & SOUPS -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-bowl-rice fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">APPETIZERS &amp; SOUPS</h3>
                <small class="text-muted fw-semibold">Soups, Indian, Grill, Chinese, Western snacks &amp; Barbeque</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">SOUPS</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Cream of Tomato with bread Sticks</li>
                    <li>’• Veg. Sweet Corn</li>
                    <li>’• Veg. Peeking Soup with Noodles</li>
                    <li>’• Lemon Coriander</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">INDIAN SNACKS</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Paneer Tandoori | Veg. Shami Kabab</li>
                    <li>’• Idly Crispy | Corn Cheese Nest</li>
                    <li>’• Subz Kabab | Deluxe Cold Canopies</li>
                    <li>’• Hari Matar Samosa | Moong Ki Pakori | Finger Chips | Motiya Roll</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">GRILL SNACKS</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Veg. Galawati Kabab</li>
                    <li>’• Veg. Kathi Roll</li>
                    <li>’• American Corn</li>
                    <li>’• Brockly Babycorn</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">CHINESE SNACKS</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Veg. Dragon Roll | Veg. Tampura</li>
                    <li>’• Spring Roll | Chilly Honey Potato</li>
                    <li>’• Dry Chilli Paneer | Dry Manchurian</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">WESTERN SNACKS</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Maxican Lollypop</li>
                    <li>’• Backed Sekh Potato</li>
                    <li>’• Road of Mashroom</li>
                    <li>’• American Cheese Ball</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">BAR BE QUE</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Paneer Kali Mirch Tikka</li>
                    <li>’• Paneer Masala Tikka</li>
                    <li>’• Mashroom Tikka | Stuffed Potato</li>
                    <li>’• Aloo Achari Tikka</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- CHAAT & STREET FLAVORS -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-utensils fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">CHAAT &amp; STREET FLAVORS</h3>
                <small class="text-muted fw-semibold">Chaats, Delhi, Muradabadi, Gujrati, South Indian, Patiley &amp; Specialty counters</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">CHAAT</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Aloo Tikki (Chane Ki Dal Stuffed)</li>
                    <li>’• Pani Batasha (Atta &amp; Suji with 3 type of water)</li>
                    <li>’• Matar Tikiya Tawa | Hari Matar Tawa</li>
                    <li>’• Dahi Fruit Papdi (Delhi Chaat) | Rajkachori | Tawa Aloo Fry</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">DELHI, MURADABADI &amp; GUJRATI</h4>
                  <p class="small text-muted mb-1 fw-bold">DELHI SE (EXTRA)</p>
                  <ul class="list-unstyled small text-muted mb-2 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Fruit Kulia Chaat</li>
                  </ul>
                  <p class="small text-muted mb-1 fw-bold">MURADABADI &amp; GUJRATI</p>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Muradabadi Dal (Butter, Jeera, Lemon with Green Chutney)</li>
                    <li>’• Moong Dal Chilla Green Chutney</li>
                    <li>’• Veg. Omlet Sandwich with Khatty Meethy Chutney</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">SOUTH INDIAN</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Paper Dosa Or Masala Dosa</li>
                    <li>’• Idli &amp; Sambhar Vada</li>
                    <li>’• Fusion Dosa with 4 type filling</li>
                    <li>’• Nariyal Chutney</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">PATILEY SE (EXTRA)</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Matar Patilli</li>
                    <li>’• Bakery Kulcha (Delhi Se)</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">BAKERY &amp; SPECIALTY COUNTERS (EXTRA)</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Mr. Brown Bakery (Extra) | Domino's Pizza (Extra)</li>
                    <li>’• Hot N Juicy | American Corn Trolly</li>
                    <li>’• Fruit Display- Imported Fresh Fruits (Extra)</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- GLOBAL & REGIONAL SPECIALTIES -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-earth-asia fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">GLOBAL &amp; REGIONAL SPECIALTIES</h3>
                <small class="text-muted fw-semibold">Salads, continental, Chinese, Italian &amp; Veg Mughlai counters</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">SALAD &amp; CONTINENTAL</h4>
                  <p class="small text-muted mb-1 fw-bold">SALAD</p>
                  <ul class="list-unstyled small text-muted mb-2 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Multy Green Veg. Salad | Pasta Salad with Young Vegetable</li>
                    <li>’• Multy Sprouted Beans Salad | Red Cabbege Kimchi</li>
                    <li>’• Veg. Corn Salad | Russion Salad | Aloo Matar Chaat</li>
                  </ul>
                  <p class="small text-muted mb-1 fw-bold">CONTINENTAL</p>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Continental Veg. with Garlic Bread, Ginger Bread</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">CHINESE &amp; ITALIAN</h4>
                  <p class="small text-muted mb-1 fw-bold">CHINESE</p>
                  <ul class="list-unstyled small text-muted mb-2 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Singapuri Rice Noodles | Paneer Sezwan</li>
                    <li>’• Chilli Garlic Noodles with Spring Onion | Steamed Momos</li>
                    <li>’• Veg. Noodles | Manchurian | Chilli Paneer | Fried Rice | Paneer Saate</li>
                  </ul>
                  <p class="small text-muted mb-1 fw-bold">ITALIAN</p>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Lazaniya | Pasta Live (Red Souce, White Souce)</li>
                    <li>’• Potato Rosety | Nachos with Salsa Sause</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">VEG. MUGHLAI</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Kathi Kabab | Veg. Shami Kabab | Veg. Chaap</li>
                    <li>’• Mashroom Kaleji | Roomali Roti</li>
                    <li>’• Jackfruit Biryani | Burani Raita</li>
                    <li>’• Green Chutney | Onion Ring</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- REGIONAL CUISINES & MAIN COURSE -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-plate-wheat fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">REGIONAL CUISINES &amp; MAIN COURSE</h3>
                <small class="text-muted fw-semibold">Agra, Punjabi, Rajasthani, Daal Ghar, Rice counter, Pickles &amp; Raita stalls</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">AGRA &amp; PUNJABI</h4>
                  <p class="small text-muted mb-1 fw-bold">AGRA SE</p>
                  <ul class="list-unstyled small text-muted mb-2 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Variety of Stuffed Parathas | Set Curd | Pickle</li>
                  </ul>
                  <p class="small text-muted mb-1 fw-bold">PUNJABI</p>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Stuffed Kulcha | Chola | Pickle (Ginger &amp; Chilli)</li>
                    <li>’• Chutney (Onion &amp; Radish) | Makke Ki Roti Sarson Ka Saag</li>
                    <li>’• Gudh &amp; Butter (Extra)</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">RAJASTHANI</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Paneer Bhujia | Baigan Bharta | Rajma Rice</li>
                    <li>’• Daal Pachmeli | Kadhi Pakori | Gattey Ki Sabzi</li>
                    <li>’• Sanger Teet | Hara Moong | Baajra ki Khichdi</li>
                    <li>’• Baati-Chokha | Plain Rice | Tawa Roti-Aata &amp; Besani | Roasted Papad</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">DAAL GHAR, RICE &amp; RAITA</h4>
                  <p class="small text-muted mb-1 fw-bold">DAAL GHAR &amp; RICE</p>
                  <ul class="list-unstyled small text-muted mb-2 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Daal Sultani Tadka | Daal Urd Chana | Daal Pachmeli | Daal Makhani</li>
                    <li>’• Veg. Pulao | Jeera Pulao | Mater Paneer Pulao | Shahi Pulao | Green Rice</li>
                  </ul>
                  <p class="small text-muted mb-1 fw-bold">PICKLE &amp; RAITA COUNTERS</p>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Pickle Counter (6 to 8 Variety of Pickle)</li>
                    <li>’• Raita Counter Live (6 to 8 Variety of Raita)</li>
                    <li>’• Dahi Gujia | Papad Stall (6 to 8 Variety Fry Papad)</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- VEGETABLES & CURRIES -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-pepper-hot fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">VEGETABLES &amp; CURRIES</h3>
                <small class="text-muted fw-semibold">Paneer specialties, corn &amp; mushroom, potato &amp; kofta, dry veg &amp; breads counter</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">PANEER SPECIALTIES</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Kadhai Paneer | Paneer Makhanwala</li>
                    <li>’• Matar Paneer | Palak Paneer | Methi Malai Paneer</li>
                    <li>’• Muglai Paneer | Paneer Lababdar (Golden Gravy)</li>
                    <li>’• Paneer Lazzatdar (Red Gravy)</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">CORN, MUSHROOM &amp; KOFTA</h4>
                  <p class="small text-muted mb-1 fw-bold">CORN &amp; MUSHROOM</p>
                  <ul class="list-unstyled small text-muted mb-2 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Matar Mashroom | Methi Malai Corn (White Gravy)</li>
                    <li>’• Palak Malai Corn | Corn Curry Mirchi Masala</li>
                  </ul>
                  <p class="small text-muted mb-1 fw-bold">POTATO &amp; KOFTA</p>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Banarasi Dum Aloo | Kashmiri Dum Aloo (Orange Gravy)</li>
                    <li>’• Nawabganji Aloo | Lollypop Kofta (Brown Gravy)</li>
                    <li>’• Malai Kofta | Bulbul Kofta | Veg. Kofta | Tawa Veg.</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">SEASONAL DRY VEG &amp; BREADS</h4>
                  <p class="small text-muted mb-1 fw-bold">SEASONAL &amp; DRY VEG.</p>
                  <ul class="list-unstyled small text-muted mb-2 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Afgani Gobhi Shimla | Gobhi Tukda Musallam</li>
                    <li>’• Gobhi Matar Gaajar | Hari Matar Dry</li>
                    <li>’• Kumbh Gobhi Hyderbadi (Green) | Veg. Jalfarezi</li>
                    <li>’• Bhindi Kurkuri | Mix Veg. | Bhindi Masala</li>
                  </ul>
                  <p class="small text-muted mb-1 fw-bold">BREADS COUNTER</p>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Baby Naan | Butter Naan | Pudina Naan | Missi Roti</li>
                    <li>’• Chamcham Naan | Biscuty Roti | Laccha Paratha | Puri Kachori</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- DESSERTS & FINALE -->
          <div class="menu-section-card p-3 p-md-4" style="border-color: #E8DFD1 !important; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div class="d-flex align-items-center gap-3 pb-3 mb-3 border-bottom" style="border-bottom-color: #E8DFD1 !important;">
              <div style="width: 44px; height: 44px; border-radius: 12px; background: rgba(198, 161, 91, 0.15); border: 1.5px solid #C6A15B; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-ice-cream fs-5" style="color: #6E1423 !important;"></i>
              </div>
              <div>
                <h3 class="h5 font-heading mb-0 text-uppercase" style="color: #6E1423; font-weight: 800; letter-spacing: 1px;">DESSERTS &amp; FINALE</h3>
                <small class="text-muted fw-semibold">Ice cream, hot sweets, kulfi, sweets paradise &amp; end course inclusions</small>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">ICE CREAM &amp; HOT SWEETS</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Ice Cream 4 to 5 Variety &amp; Stick Candy</li>
                    <li>’• (Gloria Desert Counter Extra)</li>
                    <li>’• Kesaria Milk | Kesaria Jalebi | Mini Imarti</li>
                    <li>’• Gulab Jamun | Mini Malai Ghewar</li>
                    <li>’• Assorted Halwa Tawa (Moong, Badam, Carrot, Pista, Urd, Suji)</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">KULFI &amp; TRADITIONAL</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Kulfi Faluda</li>
                    <li>’• Stick Kulfi</li>
                    <li>’• Kesaria Malai Gilory</li>
                    <li>’• Malai Pista Cake</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">SWEETS PARADISE</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Sweet Paradise | Chandramukhi</li>
                    <li>’• Cheena Malai | Cheena Kheer</li>
                    <li>’• Rasmalai | Spanj Rasgulla</li>
                    <li>’• Chappan Bhog Sweets (Extra)</li>
                  </ul>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-3">
                <div class="menu-item-card" style="background: #FFFDF9; border-color: #E8DFD1 !important;">
                  <h4 class="h6 font-heading mb-2 text-uppercase text-dark fw-bold border-start border-3 ps-2" style="border-color: #C6A15B !important;">END COURSE INCLUSIONS</h4>
                  <ul class="list-unstyled small text-muted mb-0 ps-1" style="font-size: 0.88rem; line-height: 1.5;">
                    <li>’• Mineral Water 200ml. Bisleri Bottle</li>
                    <li>’• Pan Stall (Extra)</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer menu-modal-footer d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div class="small text-muted fw-bold">
            <i class="fa-solid fa-book-open me-1 text-gold"></i> S. CATERERS MASTER FULL MENU
          </div>
          <div class="d-flex align-items-center gap-2">
            <button onclick="shareMenu('full')" class="btn fw-bold d-inline-flex align-items-center gap-1" style="border-radius:8px;font-size:0.82rem;background:#D4AF37;color:#fff;border:none;padding:8px 16px;box-shadow:0 4px 12px rgba(212,175,55,0.4);">
            <i class="fa-solid fa-share-nodes"></i> Share Menu
          </button>
            <button type="button" class="btn btn-outline-secondary px-3 py-2 fw-bold" data-bs-dismiss="modal" style="border-radius: 8px;">Close Window</button>
            <button type="button" class="btn btn-gold px-4 py-2 fw-bold" onclick="bookMenuFromModal('Full Menu', 'fullMenuModal')" style="border-radius: 8px; background: linear-gradient(135deg, #C6A15B 0%, #8A6B1B 100%); color: #fff; border: none;"><i class="fa-solid fa-calendar-check me-1"></i> Book Custom Menu Now</button>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script>
    /* ── SHARE MENU — deep-link sharing ─────────────────────────── */
    function shareMenu(menuType) {
      var names = {
        silver: 'Silver Choice Menu',
        gold:   'The Gold Menu',
        royal:  'The Royal Choice Menu',
        vip:    'VIP Menu',
        full:   'Master Full Menu'
      };
      var base = window.location.origin + window.location.pathname.replace(/\/$/, '');
      var url  = base + '?menu=' + menuType;
      var title = 'S. Caterers — ' + (names[menuType] || 'Menu');
      var text  = 'Check out the ' + (names[menuType] || 'Menu') +
                  ' at S. Caterers by Amit Agarwal — Premium Pure Vegetarian Catering, Lucknow.';

      if (navigator.share) {
        navigator.share({ title: title, text: text, url: url })
          .catch(function(){});
      } else {
        /* Fallback: copy to clipboard + show toast */
        navigator.clipboard.writeText(url).then(function() {
          showShareToast('Link copied! Share it with your guests.');
        }).catch(function() {
          /* Last fallback */
          prompt('Copy this link and share it:', url);
        });
      }
    }

    /* Toast notification */
    function showShareToast(msg) {
      var t = document.createElement('div');
      t.textContent = msg;
      t.style.cssText = [
        'position:fixed;bottom:24px;left:50%;transform:translateX(-50%);',
        'background:#1A1A1A;color:#D4AF37;padding:12px 24px;border-radius:50px;',
        'font-size:0.85rem;font-weight:700;z-index:99999;',
        'box-shadow:0 8px 30px rgba(0,0,0,0.4);letter-spacing:0.5px;',
        'transition:opacity 0.4s ease;opacity:1;'
      ].join('');
      document.body.appendChild(t);
      setTimeout(function(){ t.style.opacity='0'; setTimeout(function(){ t.remove(); }, 400); }, 2800);
    }

    /* ── DEEP-LINK: auto-open modal from ?menu=xxx URL param ─────── */
    (function() {
      var modalMap = {
        silver: 'silverMenuModal',
        gold:   'goldMenuModal',
        royal:  'royalMenuModal',
        vip:    'vipMenuModal',
        full:   'fullMenuModal'
      };
      var params   = new URLSearchParams(window.location.search);
      var menuKey  = params.get('menu');
      var modalId  = menuKey ? modalMap[menuKey] : null;
      if (!modalId) return;

      function tryOpen() {
        var el = document.getElementById(modalId);
        if (el && window.bootstrap) {
          new bootstrap.Modal(el).show();
        }
      }

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
          setTimeout(tryOpen, 300); /* wait for Bootstrap to init */
        });
      } else {
        setTimeout(tryOpen, 300);
      }
    })();

    function bookMenuFromModal(packageName, modalId) {
      /* 1. Select the package in the form dropdown */
      var pkgSelect = document.getElementById('inq-package');
      if (pkgSelect) {
        for (var i = 0; i < pkgSelect.options.length; i++) {
          if (pkgSelect.options[i].value.toLowerCase().includes(packageName.toLowerCase())) {
            pkgSelect.options[i].selected = true;
            break;
          }
        }
      }

      /* 2. Close the modal first, then scroll after animation ends (350ms) */
      var modalEl = document.getElementById(modalId);
      if (modalEl && window.bootstrap) {
        var bsModal = bootstrap.Modal.getInstance(modalEl);
        if (bsModal) {
          bsModal.hide();
          setTimeout(function() {
            var sec = document.getElementById('inquiry');
            if (sec) { sec.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
            /* Highlight the select for 2 seconds */
            setTimeout(function() {
              var sel = document.getElementById('inq-package');
              if (sel) {
                sel.classList.add('pkg-select-highlight');
                setTimeout(function() { sel.classList.remove('pkg-select-highlight'); }, 2000);
              }
            }, 500); /* after scroll settles */
          }, 380); /* wait for modal close animation */
          return;
        }
      }
      /* Fallback: just scroll */
      var sec = document.getElementById('inquiry');
      if (sec) { sec.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    }

    /* Keep old name as alias for any remaining references */
    function selectPackageFromModal(packageName) {
      bookMenuFromModal(packageName, '');
    }
  </script>


  <!-- Admin Verification Script -->
  <script src="{{ asset('js/admin-trigger.js') }}?v=1.0" data-csrf="{{ csrf_token() }}"></script>









