<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AceTime | Home</title>
  <link rel="stylesheet" href="{{ asset('css/app1.css') }}">
  <script src="{{ asset('js/app.js') }}" defer></script>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="app-frame">

   <header class="nav">
  <div class="container nav-inner">
    <div class="text-2xl font-black tracking-tighter text-white">CourtNest</div>

    <div class="nav-right">
      <nav class="nav-links">
       <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      <a href="{{ route('gallery') }}">About Us</a>
      <a href="{{ route('dashboard') }}">Profile</a>
      <a href="{{ route('login') }}">Log in</a>

      </nav>

      <div class="nav-actions">
        <a href="{{ route('register') }}" class="btn btn-signup">Sign up</a>
      </div>
    </div>
  

  {{-- Page Content --}}
  <main>
    @yield('content')
  </main>

  {{-- Footer --}}
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
</body>
</html>
