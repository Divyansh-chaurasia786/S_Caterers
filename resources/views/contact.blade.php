<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact S. Caterers | Lucknow & Uttar Pradesh</title>
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="Get in touch with S. Caterers by Amit Agrawal. Contact us for premium vegetarian catering inquiries, destination wedding planning, and menu customizations across Lucknow and UP.">
  <meta name="keywords" content="Contact S. Caterers, Catering Office Lucknow, Amit Agrawal Contact, S. Caterers Phone Number, Email S. Caterers">
  <meta name="author" content="Amit Agrawal">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
  <style>
    /* Scoped Contact Page Styles */
    .contact-hero {
      background: linear-gradient(135deg, var(--wine-deep) 0%, var(--wine) 50%, #4A0E17 100%);
      padding: 9.5rem 0 6rem;
      color: var(--ivory);
      position: relative;
      overflow: hidden;
      text-align: center;
    }
    
    .contact-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(rgba(231, 197, 137, 0.08) 1px, transparent 1px);
      background-size: 24px 24px;
      pointer-events: none;
    }
    
    .contact-hero .eyebrow {
      color: var(--gold-bright);
      font-size: 0.8rem;
      letter-spacing: 0.3em;
      margin-bottom: 12px;
      display: inline-block;
    }
    
    .contact-hero h1 {
      font-family: var(--font-heading);
      font-size: clamp(2.5rem, 5vw, 4rem);
      font-weight: 700;
      color: var(--ivory);
      margin-bottom: 1rem;
      line-height: 1.15;
    }
    
    .contact-hero h1 span {
      color: var(--gold-bright);
      font-style: italic;
    }
    
    .contact-hero p {
      font-size: 1.05rem;
      max-width: 650px;
      margin: 0 auto;
      color: var(--ivory-dim);
      opacity: 0.9;
    }
    
    /* Layout Cards & Form */
    .contact-layout-section {
      background-color: var(--ivory);
      padding: 6.5rem 0;
    }
    
    .contact-info-card {
      background: #FFFFFF;
      border: 1px solid var(--gold-line);
      border-radius: 18px;
      padding: 2.5rem;
      box-shadow: 0 8px 30px rgba(32, 28, 26, 0.04);
      height: 100%;
    }
    
    .contact-detail-item {
      display: flex;
      align-items: flex-start;
      gap: 20px;
      margin-bottom: 2rem;
    }
    
    .contact-detail-item:last-child {
      margin-bottom: 0;
    }
    
    .contact-icon-box {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      background: var(--ivory-dim);
      border: 1px solid var(--gold-line);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.25rem;
      color: var(--wine);
      flex-shrink: 0;
    }
    
    .contact-text-box h4 {
      font-size: 1.05rem;
      font-weight: 700;
      color: var(--charcoal);
      margin-bottom: 6px;
    }
    
    .contact-text-box p {
      font-size: 0.92rem;
      color: var(--ink-soft);
      line-height: 1.6;
      margin-bottom: 0;
    }
    
    .contact-text-box a {
      color: var(--wine);
      font-weight: 600;
    }
    
    .contact-text-box a:hover {
      color: var(--gold);
    }
    
    /* Form Wrapper */
    .contact-form-card {
      background: #FFFFFF;
      border: 1px solid var(--gold-line);
      border-radius: 18px;
      padding: 2.5rem;
      box-shadow: 0 8px 30px rgba(32, 28, 26, 0.04);
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
    
    .pricing-help-note {
      font-size: 0.8rem;
      color: var(--wine);
      font-style: italic;
      font-weight: 600;
      margin-bottom: 0;
    }
    
    @media (max-width: 767.98px) {
      .contact-hero {
        padding: 7.5rem 0 4.5rem !important;
      }
      .contact-info-card, 
      .contact-form-card {
        padding: 1.5rem !important;
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
          <li class="nav-item"><a class="nav-link nav-link-custom active" href="#">Contact Us</a></li>
        </ul>
        <div class="d-flex mt-2 mt-lg-0">
          <a href="https://wa.me/919839077960" target="_blank" class="btn-gold"><i class="fa-brands fa-whatsapp me-1"></i> WhatsApp Us</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- ================= CONTACT HERO ================= -->
  <section class="contact-hero">
    <div class="container">
      <span class="eyebrow">HAVE AN EVENT IN MIND?</span>
      <h1>Let's Connect &amp; <span>Discuss</span></h1>
      <p>Reach out to S. Caterers team by Amit Agrawal. Let us help you craft a legendary pure vegetarian dining experience for your guests.</p>
    </div>
  </section>

  <!-- ================= CONTACT LAYOUT ================= -->
  <section class="contact-layout-section">
    <div class="container">
      <div class="row g-5">
        <!-- Contact Information Cards -->
        <div class="col-lg-5">
          <div class="contact-info-card">
            <h3 class="font-display mb-4" style="font-weight: 700; color: var(--wine);">Our Office &amp; Kitchen</h3>
            <p class="text-muted mb-4" style="font-size: 0.92rem;">Feel free to reach out to us directly via phone, email, or WhatsApp, or drop us a message using the form. We are active 24x7 to manage and plan events.</p>
            
            <div class="contact-detail-item">
              <div class="contact-icon-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
              </div>
              <div class="contact-text-box">
                <h4>Main Office &amp; Kitchen</h4>
                <p>Keshav Nagar, Sitapur Road,<br>Lucknow, Uttar Pradesh, India</p>
              </div>
            </div>

            <div class="contact-detail-item">
              <div class="contact-icon-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </div>
              <div class="contact-text-box">
                <h4>Call or WhatsApp Us</h4>
                <p>
                  <a href="tel:+919839077960">+91 98390 77960</a> (Primary)<br>
                  <a href="tel:+919415788950">+91 94157 88950</a>
                </p>
              </div>
            </div>

            <div class="contact-detail-item">
              <div class="contact-icon-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
              </div>
              <div class="contact-text-box">
                <h4>Email Support</h4>
                <p>
                  <a href="mailto:scatererslko@gmail.com">scatererslko@gmail.com</a><br>
                  <a href="mailto:amit1881970@yahoo.in">amit1881970@yahoo.in</a>
                </p>
              </div>
            </div>

            <div class="contact-detail-item">
              <div class="contact-icon-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div class="contact-text-box">
                <h4>Operating Hours</h4>
                <p>Monday - Sunday: 24 Hours Active<br><em>(Support for booked celebrations)</em></p>
              </div>
            </div>
          </div>
          
          <!-- Interactive Google Maps Location Embed -->
          <div class="contact-info-card mt-4 p-0 overflow-hidden" style="height: 250px; border-radius: 18px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14234.62947230489!2d80.9329061!3d26.9143615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd0a51157831%3A0x379afb476865df05!2sKeshav+Nagar%2C+Sitapur+Road%2C+Lucknow!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <!-- General Contact Message Form -->
        <div class="col-lg-7">
          <div class="contact-form-card">
            <h3 class="font-display mb-4" style="font-weight: 700; color: var(--wine);">Send Us a Message</h3>
            
            @if(session('success'))
              <div class="alert alert-success border-0 text-center py-3 mb-4" style="background-color: rgba(40, 167, 69, 0.1); color: #28a745; font-weight: 600; border-radius: 12px;">
                <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
              </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST">
              @csrf
              
              <div class="row">
                <div class="col-md-6 form-group-custom">
                  <label for="c-name">Full Name</label>
                  <input type="text" name="name" id="c-name" placeholder="e.g. Divyansh Chaurasia" required>
                </div>
                <div class="col-md-6 form-group-custom">
                  <label for="c-email">Email Address</label>
                  <input type="email" name="email" id="c-email" placeholder="name@domain.com" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group-custom">
                  <label for="c-phone">Phone Number</label>
                  <input type="text" name="phone" id="c-phone" placeholder="e.g. +91 98390 77960" required>
                </div>
                <div class="col-md-6 form-group-custom">
                  <label for="c-subject">Subject</label>
                  <input type="text" name="subject" id="c-subject" placeholder="e.g. Wedding Catering Inquiry" required>
                </div>
              </div>

              <div class="form-group-custom">
                <label for="c-message">Your Message</label>
                <textarea name="message" id="c-message" rows="5" placeholder="Write details about your event, venue location, or general questions..." required></textarea>
              </div>

              <div class="mb-4">
                <p class="pricing-help-note">*Note: Final pricing depends on menu choices, custom layout requirements, and mutual discussion.</p>
              </div>

              <div class="row g-3">
                <div class="col-sm-6">
                  <button type="submit" class="btn-gold w-100 py-3" style="font-size: 1rem; border-radius: 12px; font-weight: 700;">Send Inquiry</button>
                </div>
                <div class="col-sm-6">
                  <a href="https://wa.me/919839077960" target="_blank" class="btn-outline-wine w-100 py-3 d-flex align-items-center justify-content-center" style="font-size: 1rem; border-radius: 12px; font-weight: 700; border-width: 2px; text-decoration: none;">
                    <i class="fa-brands fa-whatsapp me-2" style="font-size: 1.25rem;"></i> Chat on WhatsApp
                  </a>
                </div>
              </div>
            </form>
          </div>
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
        <div class="col-md-6 col-lg-4">
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
        <span>&copy; 2026 S. Caterers by Amit Agrawal. All rights reserved.</span>
        <span>Designed with devotion for exquisite tastes.</span>
      </div>
    </div>
  </footer>

  <!-- Bootstrap 5 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Form Intercept Logic -->
  <script>
    const form = document.querySelector('.contact-form-card form');
    if (form) {
      form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const name = document.getElementById('c-name').value;
        const email = document.getElementById('c-email').value;
        const phone = document.getElementById('c-phone').value;
        const subject = document.getElementById('c-subject').value;
        const message = document.getElementById('c-message').value;
        
        const formData = new FormData(this);
        
        fetch(this.action, {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          }
        }).then(response => {
          const msg = `Hello S. Caterers! I would like to send a general contact message:\n\n` +
                      `*Name:* ${name}\n` +
                      `*Email:* ${email}\n` +
                      `*Phone:* ${phone}\n` +
                      `*Subject:* ${subject}\n` +
                      `*Message:* ${message}\n\n` +
                      `*(Note: Final pricing depends on menu selections and mutual discussion)*`;
                      
          const waUrl = `https://wa.me/919839077960?text=${encodeURIComponent(msg)}`;
          
          window.open(waUrl, '_blank');
          
          alert("Thank you! Your message has been saved, and you are being redirected to WhatsApp to chat with Amit Agrawal.");
          window.location.reload();
        }).catch(err => {
          console.error("General contact save error:", err);
          const msg = `Hello S. Caterers! I would like to send a general contact message:\n\n` +
                      `*Name:* ${name}\n` +
                      `*Email:* ${email}\n` +
                      `*Phone:* ${phone}\n` +
                      `*Subject:* ${subject}\n` +
                      `*Message:* ${message}`;
          const waUrl = `https://wa.me/919839077960?text=${encodeURIComponent(msg)}`;
          window.open(waUrl, '_blank');
        });
      });
    }
  </script>
  <!-- Floating WhatsApp CTA -->
  <a href="https://wa.me/919839077960" class="floating-whatsapp-cta" target="_blank" aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

</body>
</html>
