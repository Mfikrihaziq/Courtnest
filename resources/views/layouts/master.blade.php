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
      <a href="{{ route('gallery') }}">Gallery</a>
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
  </div>

  <script src="js/app.js"></script>
</body>
</html>
</body>
</html>
