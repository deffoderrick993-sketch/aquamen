<header id="header" class="header fixed-top">

  <div class="topbar d-flex align-items-center" style="background: rgba(11, 26, 38, 0.4); backdrop-filter: blur(4px);">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center text-white"><a href="mailto:contact@aquamen.org" style="color: #ffffff !important;">contact@aquamen.org</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4 text-white"><span style="color: #ffffff !important;">+237 697 49 78 92</span></i>
      </div>
      <div class="languages d-none d-md-flex align-items-center gap-3">
        <ul>
          <li><a href="https://coastalvuln-gulfguinea.com/" target="_blank" style="color: #ffffff !important; font-weight: 600;"><i class="bi bi-geo-fill me-1" style="color: #54b7e9;"></i>Work Map</a></li>
        </ul>
        @auth
          <a href="{{ route('admin') }}" class="btn btn-sm ms-2 shadow-sm" style="background: #54b7e9; color: #0b1a26; font-size: 12px; font-weight: 700; border-radius: 4px; padding: 4px 12px;"><i class="bi bi-speedometer2 me-1"></i>Dashboard Admin</a>
        @else
          <a href="{{ route('login') }}" class="ms-3 text-white" style="font-size: 13px; color: #ffffff !important; font-weight: 600;"><i class="bi bi-lock-fill me-1" style="color: #54b7e9;"></i>Connexion Admin</a>
        @endauth
      </div>
    </div>
  </div><!-- End Top Bar -->

  <div class="branding d-flex align-items-center">

    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="{{route('user')}}" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="{{asset('assets/img/aquamen.png')}}" alt="AQUAMEN Logo" style="max-height: 46px;">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('user')}}" class="{{ request()->routeIs('user') || request()->routeIs('welcome') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{route('aboutus')}}" class="{{ request()->routeIs('aboutus') ? 'active' : '' }}">About</a></li>
          <li><a href="{{route('activite')}}" class="{{ request()->routeIs('activite') ? 'active' : '' }}">Projects</a></li>
          <li><a href="{{route('volontariat')}}" class="{{ request()->routeIs('volontariat') ? 'active' : '' }}">Volunteering</a></li>
          <li><a href="{{route('Aquarticle')}}" class="{{ request()->routeIs('Aquarticle') ? 'active' : '' }}">Articles</a></li>
          <li><a href="{{route('rapport')}}" class="{{ request()->routeIs('rapport') ? 'active' : '' }}">Documents</a></li>
          <li><a href="{{route('gallerys')}}" class="{{ request()->routeIs('gallerys') ? 'active' : '' }}">Gallery</a></li>
          <li><a href="#footer">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="d-flex align-items-center gap-2">
        <a class="btn-book-a-table d-none d-xl-block" href="#" data-bs-toggle="modal" data-bs-target="#donationModal"><i class="bi bi-heart-fill me-1 text-danger"></i>Donation</a>
      </div>

    </div>

  </div>

</header>
