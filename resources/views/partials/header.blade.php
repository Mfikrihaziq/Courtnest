<header class="nav">
  <div class="container nav-inner">

    <a href="{{ route('home') }}" class="brand">
      <img src="{{ asset('assets/img/logo-court.png') }}" class="brand-logo">
      <span class="brand-text">
        <span class="brand-court">Court</span><span class="brand-nest">Nest</span>
      </span>
    </a>

    <div class="nav-right">
      <nav class="nav-links">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('bookings.create') }}">Booking</a>

        <div class="profile-menu">
          <a class="profile-btn">
            Profile <i class="bi bi-chevron-down"></i>
          </a>

          <div class="profile-dd">
            <a href="{{ route('profile.show') }}">Manage Profile</a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit">Log Out</button>
            </form>
          </div>
        </div>
      </nav>
    </div>

  </div>
</header>

