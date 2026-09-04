<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{$detailactivite->name}} - AQUAMEN Project Details</title>
  <meta name="description" content="Project details for {{$detailactivite->name}} by AQUAMEN.">
  <meta name="keywords" content="aquamen, project details, marine conservation">

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
      <img src="{{asset('img/10.JPG')}}" alt="{{$detailactivite->name}}" data-aos="fade-in">

      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <h2 style="font-family: var(--heading-font); color: #fff;"><span>{{$detailactivite->name}}</span></h2>
            <p>AQUAMEN Field Conservation & Research Project</p>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- Project Detail Content Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-5 text-center">
            <img src="{{asset('images/'.$detailactivite->image)}}" class="img-fluid rounded shadow" alt="{{$detailactivite->name}}" style="border: 2px solid var(--accent-color); max-height: 400px; object-fit: cover; width: 100%;">
          </div>

          <div class="col-lg-7 content p-4 rounded" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.25);">
            <h3 class="mb-4" style="color: var(--accent-color); font-family: var(--heading-font);">Project Overview</h3>
            <p style="color: var(--default-color); line-height: 1.8; font-size: 16px; text-align: justify;">
              {{$detailactivite->description}}
            </p>
            <div class="mt-4">
              <a href="{{route('activite')}}" class="btn" style="background: var(--accent-color); color: #000; font-weight: 600; padding: 10px 24px; border-radius: 50px;"><i class="bi bi-arrow-left me-1"></i> Back to Projects</a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Project Detail Content Section -->

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
