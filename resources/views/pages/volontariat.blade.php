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
              <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(84, 183, 233, 0.15); border: 1px solid #54b7e9; color: #54b7e9; font-size: 13px; font-weight: 600;">
                <i class="bi bi-telephone-fill"></i> Candidature par appel téléphonique uniquement
              </div>

              <h3 style="color: var(--accent-color); font-family: var(--heading-font);" class="mb-3">Comment Postuler ?</h3>
              
              <p style="color: var(--default-color); line-height: 1.8; font-size: 15px;">
                Pour rejoindre l'équipe de bénévoles d'AQUAMEN, <strong>aucun formulaire écrit n'est requis</strong>. Nous privilégions le contact humain direct pour échanger sur votre profil, vos motivations et vos disponibilités de terrain.
              </p>

              <div class="my-4 p-4 rounded text-center" style="background: rgba(255,255,255,0.03); border: 1px dashed var(--accent-color);">
                <p class="mb-2 text-white-50" style="font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">Contactez directement notre coordination :</p>
                <div class="d-flex justify-content-center align-items-center mb-3">
                  <a href="tel:+237697497892" class="h3 fw-bold text-decoration-none" style="color: var(--accent-color); font-family: var(--heading-font);">
                    <i class="bi bi-telephone-outbound-fill me-2 fs-4"></i>+237 697 49 78 92
                  </a>
                </div>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                  <a href="tel:+237697497892" class="btn px-4 py-2" style="background: var(--accent-color); color: #000; font-weight: 700; border-radius: 50px;">
                    <i class="bi bi-telephone-fill me-2"></i>Appeler maintenant
                  </a>
                  <a href="https://wa.me/237697497892?text=Bonjour,%20je%20souhaite%20proposer%20ma%20candidature%20comme%20bénévole%20pour%20AQUAMEN." target="_blank" class="btn px-4 py-2" style="background: #25D366; color: #fff; font-weight: 700; border-radius: 50px;">
                    <i class="bi bi-whatsapp me-2"></i>WhatsApp
                  </a>
                </div>
              </div>

              <div class="pt-3" style="border-top: 1px solid rgba(205, 164, 94, 0.2); font-size: 14px; color: var(--default-color);">
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-clock me-2" style="color: var(--accent-color);"></i>
                  <span><strong>Disponibilité :</strong> Du lundi au samedi, 08h00 - 18h00</span>
                </div>
                <div class="d-flex align-items-center">
                  <i class="bi bi-geo-alt me-2" style="color: var(--accent-color);"></i>
                  <span><strong>Base :</strong> BOCOM, Entrée Elécam, Kribi - Cameroun</span>
                </div>
              </div>
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
