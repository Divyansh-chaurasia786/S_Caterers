@extends('layouts.app')

@section('title', 'Services & Packages - s.caters')

@section('content')
<div class="services-page-content">
<!-- HERO BANNER -->
<section class="hero" id="services-hero">
  <div class="hero-content">
    <span class="eyebrow on-dark">✦ 100% PURE VEGETARIAN &amp; GOURMET LUXURY CATERING ✦</span>
    <h1 class="hero-title">Culinary Excellence for <span>Unforgettable Occasions</span></h1>
    <p class="hero-subtitle">From opulent royal wedding banquets to intimate chef's table galas, s.caters crafts bespoke fine dining experiences with white, mahogany brown, and golden luxury styling.</p>
    <div class="hero-actions">
      <a href="#services-grid" class="btn btn-gold">Explore Packages</a>
      <a href="#calculator" class="btn btn-outline" style="border-color: var(--gold-bright); color: var(--gold-bright);">Calculate Instant Quote</a>
    </div>
  </div>
</section>

<!-- JALI DIVIDER -->
<div class="jali-divider"></div>

<!-- PACKAGES & SERVICES SHOWCASE -->
<section id="services-grid" class="section bg-ivory">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">OUR CURATED TIERS</span>
      <h2 class="section-title">Silver, Gold &amp; <span class="accent">Royal Packages</span></h2>
      <p class="section-desc">Select an exclusive catering tier below or customize your bespoke menu for your special event.</p>
    </div>

    <!-- Category Filter Tabs -->
    <div class="filter-tabs" id="filter-tabs">
      <button class="tab-btn active" data-filter="all">All Packages</button>
      <button class="tab-btn" data-filter="silver">Silver Package</button>
      <button class="tab-btn" data-filter="gold">Gold Package</button>
      <button class="tab-btn" data-filter="royal">Royal Banquet</button>
      <button class="tab-btn" data-filter="custom">Custom Bespoke</button>
    </div>

    <!-- Services Grid -->
    <div class="services-grid" id="packages-container">
      @foreach($packages as $package)
      <div class="service-card" data-category="{{ $package['category'] }}">
        <div class="service-header-bar">
          <h3 class="service-title">{{ $package['title'] }}</h3>
          <span class="service-tag">{{ $package['tag'] }}</span>
        </div>
        <div class="service-body">
          <p class="service-desc">{{ $package['description'] }}</p>
          <ul class="service-features">
            @foreach($package['features'] as $feature)
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>{{ $feature }}</span>
            </li>
            @endforeach
          </ul>
          <div class="service-footer">
            <div class="price-hint">
              <div class="amt">${{ $package['price_per_person'] }}</div>
              <div class="per">per person</div>
            </div>
            <button class="btn btn-gold open-inquiry-btn" data-package="{{ $package['title'] }}">Select Tier</button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- LIVE EXPERIENTIAL ADD-ON COUNTERS -->
<section id="addons" class="section bg-cream">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">INTERACTIVE CULINARY SHOWS</span>
      <h2 class="section-title">Live Experiential <span class="accent">Add-On Counters</span></h2>
      <p class="section-desc">Elevate your guests' experience with interactive live chef stations, mixology lounges, and grand dessert walls.</p>
    </div>

    <div class="addons-grid">
      @foreach($addons as $addon)
      <div class="addon-card">
        <div class="addon-icon">✦</div>
        <h4 class="addon-title">{{ $addon['name'] }}</h4>
        <div class="addon-price">+${{ $addon['price'] }} / person</div>
        <p class="service-desc">Exclusive live experiential station for weddings and grand receptions.</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- INSTANT QUOTE ESTIMATOR -->
<section id="calculator" class="section bg-white">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">TRANSPARENT PRICING</span>
      <h2 class="section-title">Instant Quote <span class="accent">Estimator</span></h2>
      <p class="section-desc">Adjust your guest count, select your tier, and choose live add-on counters for a real-time price calculation.</p>
    </div>

    <div class="calculator-box">
      <div class="calc-grid">
        <div class="calc-inputs">
          <div class="form-group">
            <label class="form-label" for="calc-guests">Guest Count: <span id="guest-count-disp">100</span> guests</label>
            <div class="guest-slider-container">
              <input type="range" id="calc-guests" min="20" max="500" step="5" value="100" class="guest-slider">
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="calc-tier">Catering Tier</label>
            <select id="calc-tier" class="form-select">
              <option value="silver">Silver Package ($45 / guest)</option>
              <option value="gold" selected>Gold Package ($75 / guest)</option>
              <option value="royal">Royal Gold Banquet ($120 / guest)</option>
              <option value="custom">Custom Bespoke ($95 / guest)</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label">Live Add-On Counters</label>
            <div class="checkbox-group">
              <label class="checkbox-item">
                <input type="checkbox" class="addon-chk" value="mixology" data-price="15">
                <span>Gold Artisanal Mixology Bar (+$15/guest)</span>
              </label>
              <label class="checkbox-item">
                <input type="checkbox" class="addon-chk" value="dessert_wall" data-price="12">
                <span>Grand Dessert Wall &amp; Fountain (+$12/guest)</span>
              </label>
              <label class="checkbox-item">
                <input type="checkbox" class="addon-chk" value="live_chaat" data-price="10">
                <span>Royal Chaat Street Counter (+$10/guest)</span>
              </label>
              <label class="checkbox-item">
                <input type="checkbox" class="addon-chk" value="robata" data-price="18">
                <span>Japanese Teppanyaki &amp; Robata (+$18/guest)</span>
              </label>
            </div>
          </div>
        </div>

        <div class="calc-summary">
          <div>
            <h4 style="font-family: var(--font-heading); color: var(--brown-mahogany); font-size: 1.25rem; margin-bottom: 16px;">Estimate Summary</h4>
            <div class="summary-row"><span>Selected Package:</span><strong id="sum-pkg-name">Gold Package</strong></div>
            <div class="summary-row"><span>Base Catering Total:</span><span id="sum-base-total">$7,500</span></div>
            <div class="summary-row"><span>Add-On Counters Total:</span><span id="sum-addon-total">$0</span></div>
            <div class="summary-row"><span>Service Fee (10%):</span><span id="sum-fee">$750</span></div>
            <div class="summary-row total"><span>Estimated Total:</span><span id="sum-grand-total" style="color: var(--gold-metallic);">$8,250</span></div>
          </div>
          <button class="btn btn-gold" id="btn-book-quote" style="width: 100%; margin-top: 24px;">Book Consultation for this Quote</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONSULTATION FORM -->
<section id="inquiry" class="section bg-cream">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow">START PLANNING</span>
      <h2 class="section-title">Book a Culinary <span class="accent">Consultation</span></h2>
      <p class="section-desc">Fill out your event details below to schedule a private tasting and quote review with s.caters head chef.</p>
    </div>

    <div style="max-width: 680px; margin: 0 auto; background: var(--bg-white); border-radius: var(--radius-lg); padding: 40px; border: 1px solid var(--gold-line); box-shadow: var(--shadow-warm);">
      <form action="{{ route('inquiry.store') }}" method="POST" id="inquiry-form">
        @csrf
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
          <div class="form-group">
            <label class="form-label" for="inq-name">Your Full Name *</label>
            <input type="text" name="name" id="inq-name" class="form-control" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="inq-phone">Phone Number *</label>
            <input type="tel" name="phone" id="inq-phone" class="form-control" required>
          </div>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
          <div class="form-group">
            <label class="form-label" for="inq-email">Email Address *</label>
            <input type="email" name="email" id="inq-email" class="form-control" required>
          </div>
          <div class="form-group">
            <label class="form-label" for="inq-date">Event Date *</label>
            <input type="date" name="event_date" id="inq-date" class="form-control" required>
          </div>
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
          <div class="form-group">
            <label class="form-label" for="inq-guests">Guest Estimate</label>
            <input type="number" name="guest_count" id="inq-guests" class="form-control" value="100">
          </div>
          <div class="form-group">
            <label class="form-label" for="inq-service">Interested Package</label>
            <select name="service_package" id="inq-service" class="form-select">
              <option value="Gold Package">Gold Package</option>
              <option value="Silver Package">Silver Package</option>
              <option value="Royal Gold Banquet">Royal Gold Banquet</option>
              <option value="Custom Bespoke Service">Custom Bespoke Service</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label" for="inq-message">Special Dietary Notes</label>
          <textarea name="notes" id="inq-message" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-gold" style="width: 100%;">Submit Consultation Request</button>
      </form>
    </div>
  </div>
</section>
</div>
@endsection
