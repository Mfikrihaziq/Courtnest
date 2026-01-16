<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>CourtNest | Home</title>

  <link rel="stylesheet" href="{{ asset('css/app1.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  {{-- Only keep this if you REALLY use Vite/Tailwind components --}}
  {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

  <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<header class="nav">
  <div class="container nav-inner">

    <!-- Left: Brand -->
    <div class="brand">
  <img src="{{ asset('assets/img/logo-court.png') }}" alt="CourtNest Logo" class="brand-logo">
  <span class="brand-text">
    <span class="brand-court">Court</span><span class="brand-nest">Nest</span>
  </span>
</div>


    <!-- Right: Navigation + Auth -->
    <div class="nav-right">

      <!-- Main navigation -->
      <nav class="nav-links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('gallery') }}">Gallery</a>
        <a href="#features">Features</a>
        <a href="#courts">Courts</a>
      </nav>

      <!-- Auth actions -->
      <div class="nav-actions">
        <a href="{{ route('login') }}" class="nav-login">Log in</a>
        <a href="{{ route('register') }}" class="btn-signup">Sign up</a>
      </div>

    </div>

  </div>
</header>

  <main>
    <section class="hero">
      <div class="hero-media">
        <div class="hero-content">
          <h1 class="hero-title">
            BOOK YOUR DESIRED COURT<br />
            ANYTIME, ANYWHERE
          </h1>

          <div class="cta-row">
            <a class="btn btn-ghost" href="{{ route('bookings.create') }}">
              Book Now
              <span class="cta-icon">↗</span>
            </a>
          </div>
        </div>
      </div>
    </section>

<section id="features" class="why">  <div class="container">
    <div class="why-head">
      <h2 class="why-title">
        Why Choose <span class="why-accent">CourtNest?</span>
      </h2>
      <p class="why-sub">
        Fast booking, quality courts and a smooth arrival experience.
      </p>
    </div>

   <div class="why-grid why-grid-3">

  <div class="why-item">
    <div class="why-icon">
      <img src="{{ asset('assets/img/high-quality.png') }}" alt="High Quality Courts">
    </div>
    <h4>High Quality Courts</h4>
    <p>Well-maintained courts with excellent lighting and safe playing surfaces.</p>
    <span class="why-line"></span>
  </div>

  <div class="why-item">
    <div class="why-icon">
      <img src="{{ asset('assets/img/quality.png') }}" alt="Instant Booking">
    </div>
    <h4>Book Instantly</h4>
    <p>View availability, book your slot and confirm instantly online.</p>
    <span class="why-line"></span>
  </div>

  <div class="why-item">
    <div class="why-icon">
      <img src="{{ asset('assets/img/tennis-racket.png') }}" alt="Play and Enjoy">
    </div>
    <h4>Play &amp; Enjoy</h4>
    <p>Arrive, check in and start playing without waiting.</p>
    <span class="why-line"></span>
   </div>
  </div>
  </div>
</section>

<section id="courts" class="courts">
  <div class="container">

    <div class="courts-head">
      <h2 class="courts-title">
        AVAILABLE <span class="courts-accent">COURTS</span>
      </h2>
      <div class="courts-divider"></div>
    </div>

    <div class="courts-grid">

      <a href="{{ route('bookings.create') }}" class="court-card">
        <img src="{{ asset('assets/img/badminton.jpg') }}" alt="Badminton Court">
        <div class="court-label">BADMINTON COURT</div>
      </a>

      <a href="{{ route('bookings.create') }}" class="court-card">
        <img src="{{ asset('assets/img/futsal.jpg') }}" alt="Futsal Court">
        <div class="court-label">FUTSAL COURT</div>
      </a>

      <a href="{{ route('bookings.create') }}" class="court-card">
        <img src="{{ asset('assets/img/volley.png') }}" alt="Volleyball Court">
        <div class="court-label">VOLLEYBALL COURT</div>
      </a>

    </div>
  </div>
</section>


<footer class="footer" id="contact">
  <div class="container mx-auto px-6">
    <div class="footer-header">
      <h3>Contact Us</h3>
      <div class="header-line"></div>
    </div>

    <div class="contact-grid">
      <div class="contact-item">
        <div class="icon-pod">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
        </div>
        <span class="label">Our Location</span>
        <a href="https://maps.google.com/?q=Gombak+Selangor" target="_blank" class="value">Gombak, Selangor</a>
      </div>

      <div class="contact-item">
        <div class="icon-pod">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
        </div>
        <span class="label">General Inquiry</span>
        <a href="mailto:courtnest@gmail.com" class="value">courtnest@gmail.com</a>
      </div>

      <div class="contact-item">
        <div class="icon-pod">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
        </div>
        <span class="label">Customer Service</span>
        <a href="tel:+601123456789" class="value">+60 11 2345 6789</a>
      </div>

      <div class="contact-item">
        <div class="icon-pod">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
        <span class="label">Operation Hours</span>
        <span class="value">Daily 8 AM – 10 PM</span>
      </div>
    </div>
  </div>
</footer>

  </main>
  <div class="float-actions">

  <div class="float-actions">

  <!-- WhatsApp (always visible) -->
  <a
    href="https://wa.me/60123455677"
    target="_blank"
    rel="noopener"
    class="float-btn float-whatsapp"
    aria-label="Chat on WhatsApp"
    title="WhatsApp"
  >
    <img
      src="{{ asset('assets/img/whatsapp.png') }}"
      alt="WhatsApp"
      class="whatsapp-icon"
    >
  </a>

  <!-- Back to top -->
  <button
    id="backToTop"
    class="float-btn float-top"
    aria-label="Back to top"
    title="Back to top"
  >
    ↑
  </button>

</div>


<script>
  document.addEventListener("DOMContentLoaded", () => {
  const backToTop = document.getElementById("backToTop");

  // Show only after scrolling down a bit
  const toggleTopBtn = () => {
    if (window.scrollY > 300) backToTop.classList.add("show");
    else backToTop.classList.remove("show");
  };

  toggleTopBtn();
  window.addEventListener("scroll", toggleTopBtn);

  // Smooth scroll to top
  backToTop.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});
</script>
 
<script>
  // Show button when scroll down
  const btn = document.getElementById("backToTop");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 400) btn.classList.add("show");
    else btn.classList.remove("show");
  });

  // Scroll to top smoothly
  btn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
</script>
</body>
</html>
