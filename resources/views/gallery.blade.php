<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gallery - CourtNest</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="assets/css/gallery.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app1.css') }}"> 
  
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>

<header class="nav">
  <div class="container nav-inner">

    <div class="brand">
      <img src="{{ asset('assets/img/logo-court.png') }}" alt="CourtNest Logo" class="brand-logo">
      <span class="brand-text">
        <span class="brand-court">Court</span><span class="brand-nest">Nest</span>
      </span>
    </div>

    <div class="nav-right">
      <nav class="nav-links">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('gallery') }}">Gallery</a>
        <a href="{{ route('home') }}#features">Features</a>
        <a href="{{ route('home') }}#courts">Courts</a>
      </nav>

      <div class="nav-actions">
        <a href="{{ route('login') }}" class="nav-login">Log in</a>
        <a href="{{ route('register') }}" class="btn-signup">Sign up</a>
      </div>
    </div>

  </div>
</header>

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background arena-hero"
     data-aos="fade"
     style="background-image: url(assets/img/arena.jpg);">

  <div class="container arena-center position-relative">
    <div class="arena-glass-box" data-aos="zoom-in" data-aos-delay="200">
      <span class="category-badge">Premium Facilities</span>

      <h1 class="arena-title">
        Our <span class="highlight">Arena</span>
      </h1>

      <div class="title-divider"></div>

      <p class="arena-description">
        Explore our quality sports facilities, designed to give you the best playing experience.
      </p>

      <div class="arena-stats">
        <span><i class="bi bi-check-circle-fill"></i> High Quality Flooring</span>
        <span><i class="bi bi-check-circle-fill"></i> LED Lighting</span>
        <span><i class="bi bi-check-circle-fill"></i> Proper Ventilation</span>
      </div>
    </div>
  </div>

</div>

<!-- End Page Title -->

    <!-- Gallery Slider Section -->
<section id="gallery-slider" class="gallery-slider section slider-section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- Section heading -->
    <div class="section-head text-center mb-7">
      <h2 class="section-title">Gallery Highlights</h2>
    </div>

    <!-- Card background -->
    <div class="gallery-container slider-card">
      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 800,
            "autoplay": { "delay": 4000 },
            "effect": "coverflow",
            "grabCursor": true,
            "centeredSlides": true,
            "slidesPerView": "auto",
            "coverflowEffect": {
              "rotate": 50,
              "stretch": 0,
              "depth": 100,
              "modifier": 1,
              "slideShadows": true
            },
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "navigation": {
              "nextEl": ".swiper-button-next",
              "prevEl": ".swiper-button-prev"
            },
            "breakpoints": {
              "320": { "slidesPerView": 1, "spaceBetween": 10 },
              "768": { "slidesPerView": 2, "spaceBetween": 20 },
              "1024": { "slidesPerView": 3, "spaceBetween": 30 }
            }
          }
        </script>

        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="gallery-item">
              <div class="gallery-img">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.webp">
                  <img src="assets/img/gallery/gallery-3.webp" class="img-fluid" alt="">
                  <div class="gallery-overlay"><i class="bi bi-plus-circle"></i></div>
                </a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="gallery-item">
              <div class="gallery-img">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.webp">
                  <img src="assets/img/gallery/gallery-1.webp" class="img-fluid" alt="">
                  <div class="gallery-overlay"><i class="bi bi-plus-circle"></i></div>
                </a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="gallery-item">
              <div class="gallery-img">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.webp">
                  <img src="assets/img/gallery/gallery-5.webp" class="img-fluid" alt="">
                  <div class="gallery-overlay"><i class="bi bi-plus-circle"></i></div>
                </a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="gallery-item">
              <div class="gallery-img">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.webp">
                  <img src="assets/img/gallery/gallery-7.webp" class="img-fluid" alt="">
                  <div class="gallery-overlay"><i class="bi bi-plus-circle"></i></div>
                </a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="gallery-item">
              <div class="gallery-img">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.webp">
                  <img src="assets/img/gallery/gallery-2.webp" class="img-fluid" alt="">
                  <div class="gallery-overlay"><i class="bi bi-plus-circle"></i></div>
                </a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="gallery-item">
              <div class="gallery-img">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.webp">
                  <img src="assets/img/gallery/gallery-4.webp" class="img-fluid" alt="">
                  <div class="gallery-overlay"><i class="bi bi-plus-circle"></i></div>
                </a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="gallery-item">
              <div class="gallery-img">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.webp">
                  <img src="assets/img/gallery/gallery-6.webp" class="img-fluid" alt="">
                  <div class="gallery-overlay"><i class="bi bi-plus-circle"></i></div>
                </a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="gallery-item">
              <div class="gallery-img">
                <a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.webp">
                  <img src="assets/img/gallery/gallery-8.webp" class="img-fluid" alt="">
                  <div class="gallery-overlay"><i class="bi bi-plus-circle"></i></div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

      </div>
    </div>

  </div>

</section>
<!-- /Gallery Slider Section -->


    <!-- Gallery Section -->
<section id="gallery" class="gallery section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <ul class="gallery-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-badminton">Badminton</li>
        <li data-filter=".filter-futsal">Futsal</li>
        <li data-filter=".filter-volleyball">Volleyball</li>
      </ul>

      <div class="row gallery-grid isotope-container">

        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-badminton">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/gallery-1.webp" class="img-fluid" alt="">
            </div>
            <div class="gallery-overlay">
              <div class="gallery-actions">
                <a href="assets/img/gallery/gallery-1.webp" title="View Image" class="glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-badminton">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/gallery-2.webp" class="img-fluid" alt="">
            </div>
            <div class="gallery-overlay">
              <div class="gallery-actions">
                <a href="assets/img/gallery/gallery-2.webp" title="View Image" class="glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-badminton">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/gallery-3.webp" class="img-fluid" alt="">
            </div>
            <div class="gallery-overlay">
              <div class="gallery-actions">
                <a href="assets/img/gallery/gallery-3.webp" title="View Image" class="glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-futsal">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/gallery-4.webp" class="img-fluid" alt="">
            </div>
            <div class="gallery-overlay">
              <div class="gallery-actions">
                <a href="assets/img/gallery/gallery-4.webp" title="View Image" class="glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-futsal">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/gallery-5.webp" class="img-fluid" alt="">
            </div>
            <div class="gallery-overlay">
              <div class="gallery-actions">
                <a href="assets/img/gallery/gallery-5.webp" title="View Image" class="glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-futsal">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/gallery-6.webp" class="img-fluid" alt="">
            </div>
            <div class="gallery-overlay">
              <div class="gallery-actions">
                <a href="assets/img/gallery/gallery-6.webp" title="View Image" class="glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-volleyball">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/gallery-7.webp" class="img-fluid" alt="">
            </div>
            <div class="gallery-overlay">
              <div class="gallery-actions">
                <a href="assets/img/gallery/gallery-7.webp" title="View Image" class="glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-xl-3 col-md-4 col-sm-6 gallery-item isotope-item filter-volleyball">
          <div class="gallery-card">
            <div class="gallery-image">
              <img src="assets/img/gallery/gallery-8.webp" class="img-fluid" alt="">
            </div>
            <div class="gallery-overlay">
              <div class="gallery-actions">
                <a href="assets/img/gallery/gallery-8.webp" title="View Image" class="glightbox">
                  <i class="bi bi-eye"></i>
                </a>
              </div>
            </div>
          </div>
        </div><!-- End Gallery Item -->

      </div>
    </div>

  </div>

</section>
<!-- /Gallery Section -->


          </div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

  </main>

 <!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<footer class="footer position-relative" id="contact">
  <div class="container">

    <div class="footer-header">
      <h3>Contact Us</h3>
      <div class="header-line"></div>
    </div>

    <div class="contact-grid">

      <div class="contact-item">
        <div class="icon-pod">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
        </div>
        <span class="label">Our Location</span>
        <a href="https://maps.google.com/?q=Gombak+Selangor" target="_blank" class="value" rel="noopener">
          Gombak, Selangor
        </a>
      </div>

      <div class="contact-item">
        <div class="icon-pod">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
          </svg>
        </div>
        <span class="label">General Inquiry</span>
        <a href="mailto:courtnest@gmail.com" class="value">courtnest@gmail.com</a>
      </div>

      <div class="contact-item">
        <div class="icon-pod">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
          </svg>
        </div>
        <span class="label">Customer Service</span>
        <a href="tel:+601123456789" class="value">+60 11 2345 6789</a>
      </div>

      <div class="contact-item">
        <div class="icon-pod">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <span class="label">Operation Hours</span>
        <span class="value">Daily 8 AM – 10 PM</span>
      </div>

    </div>
  </div>
</footer>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/gallery.js"></script>

</body>

</html>


