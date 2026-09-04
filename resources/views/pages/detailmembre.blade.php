<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{$onemenbre->nom}} {{$onemenbre->prenome}} - AQUAMEN Member</title>
  <meta name="description" content="Profile of {{$onemenbre->nom}} {{$onemenbre->prenome}} at AQUAMEN.">
  <meta name="keywords" content="aquamen, member, team">

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
      <img src="{{asset('img/kribi.jpg')}}" alt="{{$onemenbre->nom}}" data-aos="fade-in">

      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <h2 style="font-family: var(--heading-font); color: #fff;">{{$onemenbre->nom}} <span>{{$onemenbre->prenome}}</span></h2>
            <p>{{$onemenbre->poste ?? 'Team Member'}}</p>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- Member Details Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center align-items-center">
          <div class="col-lg-4 text-center">
            <img src="{{asset('profiles/'.$onemenbre->image)}}" class="img-fluid rounded-circle shadow" alt="{{$onemenbre->nom}}" style="width: 250px; height: 250px; object-fit: cover; border: 4px solid var(--accent-color);">
          </div>

          <div class="col-lg-7 content p-4 rounded" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.25);">
            <h3 style="color: var(--accent-color); font-family: var(--heading-font);">{{$onemenbre->nom}} {{$onemenbre->prenome}}</h3>
            @if($onemenbre->poste)
            <p class="fst-italic" style="color: var(--accent-color); font-weight: 600;">{{$onemenbre->poste}}</p>
            @endif
            <p style="color: var(--default-color); line-height: 1.8; font-size: 16px;" class="mt-3">
              {{$onemenbre->info}}
            </p>
            @if($onemenbre->tel)
            <div class="mt-4 pt-3" style="border-top: 1px solid rgba(205, 164, 94, 0.2);">
              <a href="tel:{{$onemenbre->tel}}" class="btn btn-sm me-2" style="background: var(--accent-color); color: #000; font-weight: 600;"><i class="bi bi-phone me-1"></i> Call {{$onemenbre->tel}}</a>
              <a href="https://wa.me/{{$onemenbre->tel}}" target="_blank" class="btn btn-sm" style="border: 1px solid #25D366; color: #25D366; font-weight: 600;"><i class="bi bi-whatsapp me-1"></i> WhatsApp</a>
            </div>
            @endif
            <div class="mt-4">
              <a href="{{route('aboutus')}}" class="btn btn-sm" style="border: 1px solid var(--accent-color); color: var(--accent-color);"><i class="bi bi-arrow-left me-1"></i> Back to About Us</a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Member Details Section -->

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
