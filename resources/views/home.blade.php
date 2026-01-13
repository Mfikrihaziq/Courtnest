<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gallery - Tour Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->


  <!-- Main CSS File -->

   <link rel="stylesheet" href="{{ asset('css/app1.css') }}">
  <script src="{{ asset('js/app.js') }}" defer></script>

   @vite(['resources/css/app.css', 'resources/js/app.js'])

  <header class="nav">
  <div class="container nav-inner">
    <div class="brand">CourtNest</div>

    <div class="nav-right">
      <nav class="nav-links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">About Us</a>

        <a href="{{ route('dashboard') }}">Profile</a>
        <a href="{{ route('login') }}">Log in</a>

      </nav>

      <div class="nav-actions">
        <a href="{{ route('register') }}" class="btn btn-signup">Sign up</a>
      </div>
    </div>
  </div>
</header>


    <main>
      <section class="hero" >
        
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


<section class="why">
  <div class="container">
    <h2 class="why-title">Why Choose CourtNest?</h2>
    <p class="why-sub">Fast booking, quality courts and a smooth arrival experience.</p>

    <div class="features-grid">
      <div class="feature-card">
        <div class="icon">👤</div>
        <h4>High Quality Courts</h4>
        <p>Courts are maintained to their best</p>
      </div>

      <div class="feature-card">
        <div class="icon">⚡</div>
        <h4>Book Instantly</h4>
        <p>Choose a time, confirm, and pay</p>
      </div>

      <div class="feature-card">
        <div class="icon">🎾</div>
        <h4>Play &amp; Enjoy</h4>
        <p>Show your booking code upon arrival</p>
      </div>
    </div>
  </div>
</section>




      <footer class="footer">
        <div class="container">
          <h3>CONTACT US</h3>
          <div class="contact-grid">
            <div class="contact-item">
              <div class="ci-icon">📍</div>
              <div class="label">ADDRESS</div>
              <div class="value">53100, Kuala Lumpur</div>
            </div>

            <div class="contact-item">
              <div class="ci-icon">✉️</div>
              <div class="label">EMAIL</div>
              <div class="value">info@company.com</div>
            </div>

            <div class="contact-item">
              <div class="ci-icon">📞</div>
              <div class="label">PHONE</div>
              <div class="value">+60 12 345 5677</div>
            </div>

            <div class="contact-item">
              <div class="ci-icon">🕒</div>
              <div class="label">WORKING HOURS</div>
              <div class="value">Everyday 4 AM - 11 PM</div>
            </div>
          </div>
        </div>
      </footer>
    </main>
  </div>

  <script src="js/app.js"></script>
</body>
</html>
