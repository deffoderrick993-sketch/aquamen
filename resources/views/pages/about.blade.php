<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About Us - AQUAMEN</title>
  <meta name="description" content="Learn about AQUAMEN history, vision, strategic axes, and executive team.">
  <meta name="keywords" content="aquamen, about us, team, mission, vision, marine conservation">

  <!-- Favicons -->
  <link href="{{asset('assets/img/aquamen.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
</head>

<body class="index-page">

  @include('pages.components.nav')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="{{asset('img/kribi.jpg')}}" alt="Kribi Beach" data-aos="fade-in">

      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <h2 style="font-family: var(--heading-font); color: #fff;">ABOUT <span>AQUAMEN</span></h2>
            <p>Aquatic Environmental Management Association - Protecting Cameroon's Coastal Ecosystems</p>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="p-4 rounded shadow" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.3); height: 100%;">
              <h3 style="color: var(--accent-color); font-family: var(--heading-font);"><i class="bi bi-eye me-2"></i>OUR VISION</h3>
              <p class="mt-3" style="color: var(--default-color); font-size: 16px;">
                To establish a vibrant aquatic ecosystem where biodiversity is restored, supported by sustainable aquatic resource management practices for the benefit of present and future generations.
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="p-4 rounded shadow" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.3); height: 100%;">
              <h3 style="color: var(--accent-color); font-family: var(--heading-font);"><i class="bi bi-bullseye me-2"></i>OUR MISSION</h3>
              <p class="mt-3" style="color: var(--default-color); font-size: 16px;">
                At AQUAMEN, our mission is to conduct in-depth studies in aquatic ecosystems to propose integrated management systems and adapted governance models with the aim of restoring, protecting, and sustainably managing water resources.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Strategic Axes Section -->
    <section id="why-us" class="why-us section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>STRATEGIC AXES</h2>
        <p>Our Four Pillars of Action</p>
      </div>

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item p-4 text-center" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; height: 100%;">
              <span style="color: var(--accent-color); font-size: 32px; font-weight: 700;">01</span>
              <h4 class="mt-2" style="color: var(--heading-color);">Ecological Assessment</h4>
              <p style="font-size: 14px;">AQUA-RESEARCH: In-depth studies to assess and map marine habitats while promoting local traditional knowledge.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item p-4 text-center" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; height: 100%;">
              <span style="color: var(--accent-color); font-size: 32px; font-weight: 700;">02</span>
              <h4 class="mt-2" style="color: var(--heading-color);">Community Awareness</h4>
              <p style="font-size: 14px;">AQUA-COM: Educational programs for local communities on marine conservation and resource management.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item p-4 text-center" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; height: 100%;">
              <span style="color: var(--accent-color); font-size: 32px; font-weight: 700;">03</span>
              <h4 class="mt-2" style="color: var(--heading-color);">Sustainable Livelihoods</h4>
              <p style="font-size: 14px;">AQUA-INVEST: Responsible fishing practices, ecotourism development, and economic empowerment.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item p-4 text-center" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; height: 100%;">
              <span style="color: var(--accent-color); font-size: 32px; font-weight: 700;">04</span>
              <h4 class="mt-2" style="color: var(--heading-color);">Strengthening Governance</h4>
              <p style="font-size: 14px;">AQUA-GO: Monitoring, evaluation mechanisms, and stakeholder collaboration for adaptive governance.</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Strategic Axes Section -->

    <!-- Team Section -->
    <section id="chefs" class="chefs section light-background" style="background-color: #ffffff !important;">
      <div class="container section-title" data-aos="fade-up">
        <h2>OUR TEAM</h2>
        <p>Meet Our Experts & Committee</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          @foreach ($allmenbre as $cons)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member p-4 text-center" style="background: var(--surface-color); border-radius: 8px; border: 1px solid rgba(205, 164, 94, 0.2);">
              <div class="pic mb-3">
                <a href="{{route('detilmembre',$cons->id)}}">
                  <img src="{{asset('profiles/'.$cons->image)}}" class="img-fluid rounded-circle" alt="{{$cons->nom}}" style="width: 160px; height: 160px; object-fit: cover; border: 3px solid var(--accent-color);">
                </a>
              </div>
              <div class="member-info">
                <h4 style="font-family: var(--heading-font);"><a href="{{route('detilmembre',$cons->id)}}" style="color: var(--heading-color);">{{$cons->nom}} {{$cons->prenome}}</a></h4>
                <span style="color: var(--accent-color); font-size: 14px; font-weight: 600;">{{$cons->poste}}</span>
                <div class="social mt-3 d-flex justify-content-center gap-3 fs-5">
                  @if($cons->tel)
                  <a href="tel:{{$cons->tel}}" style="color: var(--accent-color);"><i class="bi bi-phone"></i></a>
                  <a href="https://wa.me/{{$cons->tel}}?text=hello%20{{$cons->prenom}}" target="_blank" style="color: #25D366;"><i class="bi bi-whatsapp"></i></a>
                  @endif
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- /Team Section -->

  </main>

  @include('pages.components.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
