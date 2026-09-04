<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Volunteering - AQUAMEN</title>
  <meta name="description" content="Join AQUAMEN as a volunteer and contribute to marine conservation and aquatic ecosystem management in Cameroon.">
  <meta name="keywords" content="aquamen, volunteering, join us, marine conservation, volunteer">

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
      <img src="{{asset('img/11.jpg')}}" alt="Volunteering Background" data-aos="fade-in">

      <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <h2 style="font-family: var(--heading-font); color: #fff;">BECOME A <span>VOLUNTEER</span></h2>
            <p>Bring your energy and passion to support marine biodiversity conservation in Cameroon.</p>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- Volunteer Info & Contact Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-6">
            <div class="p-4 rounded shadow" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.3);">
              <h3 style="color: var(--accent-color); font-family: var(--heading-font);" class="mb-3">Why Volunteer With Us?</h3>
              <p style="color: var(--default-color); line-height: 1.8; font-size: 16px;">
                Would you like to join our team to bring a new breath of energy to contribute to sustainable management of our aquatic ecosystem? If you are interested in volunteering with our organization, we would be delighted to welcome you!
              </p>
              <p style="color: var(--default-color); line-height: 1.8; font-size: 16px;">
                There are many opportunities for collaboration, and we need passionate people like you to support our initiatives. Contact us today and let's make an impact together!
              </p>
              <div class="d-flex align-items-center gap-4 mt-4 pt-3" style="border-top: 1px solid rgba(205, 164, 94, 0.2);">
                <a href="tel:+237697497892" class="btn" style="background: var(--accent-color); color: #000; font-weight: 600;"><i class="bi bi-telephone-fill me-2"></i>+237 697 49 78 92</a>
                <a href="mailto:contact@aquamen.org" class="btn" style="border: 1px solid var(--accent-color); color: var(--accent-color); font-weight: 600;"><i class="bi bi-envelope-fill me-2"></i>Email Us</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="p-4 rounded shadow" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.3);">
              <h3 style="color: var(--accent-color); font-family: var(--heading-font);" class="mb-4">Postuler au Bénévolat</h3>
              
              @if(session('success'))
                <div class="alert alert-success border-0 mb-3" style="background: rgba(84, 183, 233, 0.2); color: #fff; border-left: 4px solid #54b7e9 !important; font-size: 14px;">
                  <i class="bi bi-check-circle-fill me-2 text-info"></i>{{ session('success') }}
                </div>
              @endif

              @if ($errors->any())
                <div class="alert alert-danger border-0 mb-3" style="background: rgba(231, 29, 54, 0.2); color: #fff; border-left: 4px solid #e71d36 !important; font-size: 14px;">
                  <ul class="mb-0 ps-3">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <form action="{{ route('volontariat.apply') }}" method="post">
                @csrf
                <div class="mb-3">
                  <input type="text" name="name" class="form-control p-3" placeholder="Votre Nom et Prénom *" required style="background: rgba(255,255,255,0.05); border: 1px solid var(--accent-color); color: #fff;" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                  <input type="email" name="email" class="form-control p-3" placeholder="Votre Adresse E-mail *" required style="background: rgba(255,255,255,0.05); border: 1px solid var(--accent-color); color: #fff;" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                  <input type="text" name="phone" class="form-control p-3" placeholder="Votre Téléphone (Optionnel)" style="background: rgba(255,255,255,0.05); border: 1px solid var(--accent-color); color: #fff;" value="{{ old('phone') }}">
                </div>
                <div class="mb-3">
                  <textarea name="message" rows="4" class="form-control p-3" placeholder="Expliquez-nous comment vous souhaitez contribuer à AQUAMEN..." required style="background: rgba(255,255,255,0.05); border: 1px solid var(--accent-color); color: #fff;">{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn w-100 p-3 shadow-sm" style="background: var(--accent-color); color: #000; font-weight: 700; border-radius: 50px;">
                  <i class="bi bi-send-fill me-2"></i>Envoyer ma Candidature
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Volunteer Section -->

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
