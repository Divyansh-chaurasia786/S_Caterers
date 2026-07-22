<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale() ?? 'en') }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'S.Caters | Luxury Pure Vegetarian Catering & Event Culinary Design')</title>
  <meta name="description" content="@yield('meta_description', 'S.Caters offers luxury 100% pure vegetarian catering packages, live juice bars, mixology lounges, and chocolate dessert counters.')">

  <!-- Reference Fonts: Playfair Display & Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,500&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Public Asset Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

  @stack('styles')
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
          <li class="nav-item"><a class="nav-link nav-link-custom {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom {{ request()->routeIs('services.index') ? 'active' : '' }}" href="{{ route('services.index') }}">Services</a></li>
          <li class="nav-item"><a class="nav-link nav-link-custom" href="{{ route('services.index') }}#inquiry">Contact Us</a></li>
        </ul>
        <div class="d-flex mt-2 mt-lg-0">
          <a href="{{ route('services.index') }}" class="btn-gold">Explore Packages</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- MAIN CONTENT VIEW SLOT -->
  <div class="services-page-content">
    <main>
      @yield('content')
    </main>

    <!-- MODAL POPUP FOR INQUIRIES (STORED TO MYSQL DATABASE) -->
    <div id="inquiryModal" class="modal-overlay">
      <div class="modal-box">
        <button class="modal-close">&times;</button>
        <h3 style="font-family: var(--font-heading); font-size:1.8rem; margin-bottom: 8px; color: var(--gold-bright);">Request Event Quote</h3>
        <p style="font-size: 0.9rem; color: #C9BEB5; margin-bottom: 24px;">Share your event details and S.Caters executive team will contact you promptly.</p>
        
        <form id="inquiryForm" action="{{ route('inquiries.store') }}" method="POST">
          @csrf
          <div class="form-group" style="margin-bottom: 16px;">
            <label for="modalServiceField" style="font-size:0.75rem; text-transform:uppercase; color:var(--gold-bright); font-weight:600; display:block; margin-bottom:4px;">Selected Service</label>
            <input type="text" id="modalServiceField" name="selected_service" readonly style="color: var(--gold-bright); background:rgba(255,255,255,0.05);" value="General Consultation">
          </div>

          <div class="form-group" style="margin-bottom: 16px;">
            <label for="modalName" style="font-size:0.75rem; text-transform:uppercase; color:var(--gold-bright); font-weight:600; display:block; margin-bottom:4px;">Full Name</label>
            <input type="text" id="modalName" name="client_name" placeholder="e.g. Eleanor Vance" required>
          </div>

          <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom: 16px;">
            <div class="form-group">
              <label for="modalEmail" style="font-size:0.75rem; text-transform:uppercase; color:var(--gold-bright); font-weight:600; display:block; margin-bottom:4px;">Email Address</label>
              <input type="email" id="modalEmail" name="client_email" placeholder="name@domain.com" required>
            </div>
            <div class="form-group">
              <label for="modalDate" style="font-size:0.75rem; text-transform:uppercase; color:var(--gold-bright); font-weight:600; display:block; margin-bottom:4px;">Event Date</label>
              <input type="text" id="modalDate" name="event_date" placeholder="YYYY-MM-DD" required>
            </div>
          </div>

          <div class="form-group" style="margin-bottom: 24px;">
            <label for="modalNotes" style="font-size:0.75rem; text-transform:uppercase; color:var(--gold-bright); font-weight:600; display:block; margin-bottom:4px;">Special Requests / Venue</label>
            <textarea id="modalNotes" name="notes" rows="3" placeholder="Tell us about your venue, guest count, dietary preferences..."></textarea>
          </div>

          <button type="submit" class="btn btn-gold" style="width: 100%;">Submit Inquiry (MySQL)</button>
        </form>
      </div>
    </div>
  </div>

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
          <a href="{{ route('services.index') }}">Our Packages</a>
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

  <!-- Public Asset Script -->
  <script src="{{ asset('js/script.js') }}"></script>
  @stack('scripts')
</body>
</html>
