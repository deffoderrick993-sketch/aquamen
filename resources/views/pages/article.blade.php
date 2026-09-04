<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Articles - AQUAMEN</title>
  <meta name="description" content="Read and download AQUAMEN research articles and publications.">
  <meta name="keywords" content="aquamen, articles, publications, research">

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
      <img src="{{asset('img/bg.png')}}" alt="Articles Background" data-aos="fade-in">

      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <h2 style="font-family: var(--heading-font); color: #fff;">SCIENTIFIC <span>ARTICLES</span></h2>
            <p>Read research papers and publications produced by AQUAMEN experts.</p>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- Articles Section -->
    <section id="specials" class="specials section">
      <div class="container section-title" data-aos="fade-up">
        <h2>ARTICLES</h2>
        <p>Scientific Publications</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          @foreach ($article as $rap)
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 p-4 text-center" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.25); border-radius: 8px;">
              <div class="mb-3">
                <i class="bi bi-file-earmark-text fs-1" style="color: var(--accent-color);"></i>
              </div>
              <h5 class="mb-3" style="color: var(--heading-color); font-family: var(--heading-font);">{{$rap->name}}</h5>
              <div class="mt-auto pt-3">
                <a href="{{route('downloadrapport',$rap->id)}}" class="btn w-100" style="background: var(--accent-color); color: #000; font-weight: 700;">Download Article <i class="bi bi-download ms-1"></i></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- /Articles Section -->

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
