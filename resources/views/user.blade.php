<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>AQUAMEN - User Portal</title>
  <meta name="description" content="AQUAMEN Aquatic Environmental Management Association - User Portal">
  <meta name="keywords" content="aquamen, marine conservation, cameroon">

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

    <!-- Hero Background Carousel Section -->
    @include('pages.components.carousel')



    <!-- Modal Donation -->
    <div class="modal fade" id="donation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="donationLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: var(--surface-color); border: 1px solid var(--accent-color); color: #fff;">
          <div class="modal-header" style="border-bottom: 1px solid rgba(205, 164, 94, 0.3);">
            <h5 class="modal-title" id="donationLabel" style="color: var(--accent-color); font-family: var(--heading-font);">Support AQUAMEN</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center p-4">
            <p class="mb-4">Your contributions directly support our scientific research and community marine conservation efforts along the Cameroonian coast.</p>
            <a href="https://www.paypal.me/Dadjeu/10" target="_blank" class="btn p-3" style="background: var(--accent-color); color: #000; font-weight: 700; border-radius: 30px;">
              <img src="{{asset('img/paypal.jpg')}}" alt="PayPal Donation" width="120" class="img-fluid rounded">
              <div class="mt-2">Donate via PayPal</div>
            </a>
          </div>
        </div>
      </div>
    </div><!-- /Modal Donation -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{asset('img/acc.jpg')}}" class="img-fluid about-img rounded shadow" alt="AQUAMEN Team">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content">
            <h3 style="color: var(--accent-color); font-family: var(--heading-font);">ABOUT US</h3>
            <div class="border rounded p-4 mb-3" style="background: var(--surface-color); border-color: rgba(205,164,94,0.3) !important;">
              <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist" style="border-bottom: 1px solid var(--accent-color);">
                  <button class="nav-link active" id="nav-story-tab" data-bs-toggle="tab" data-bs-target="#nav-story" type="button" role="tab" style="color: var(--accent-color); font-weight: 600;">Story</button>
                  <button class="nav-link" id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission" type="button" role="tab" style="color: #fff; font-weight: 600;">Vision</button>
                  <button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision" type="button" role="tab" style="color: #fff; font-weight: 600;">Assignment</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent" style="color: var(--default-color);">
                <div class="tab-pane fade show active" id="nav-story" role="tabpanel">
                  <p>The Aquatic Environmental Management Association (AQUAMEN) was born in 2016 from the vision of four young engineering students specializing in fisheries, wishing to improve aquatic resource management on the Cameroonian coast. After graduating, these professionals spent eight years strengthening their skills in scientific research, management and governance of aquatic resources.</p>
                </div>
                <div class="tab-pane fade" id="nav-mission" role="tabpanel">
                  <p>Our vision is to establish a vibrant aquatic ecosystem where biodiversity is restored, supported by sustainable aquatic resource management practices for the benefit of all.</p>
                </div>
                <div class="tab-pane fade" id="nav-vision" role="tabpanel">
                  <p>At AQUAMEN, our mission is to conduct in-depth studies in the aquatic ecosystem to propose integrated management systems and adapted governance models with the aim of restoring, protecting and sustainably managing water resources.</p>
                </div>
              </div>
            </div>
            <a href="{{route('aboutus')}}" class="btn" style="background: var(--accent-color); color: #000; font-weight: 600; padding: 10px 24px; border-radius: 50px;">Read More <i class="bi bi-arrow-right me-1"></i></a>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Strategic Axes Section -->
    <section id="why-us" class="why-us section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>STRATEGIC AXES</h2>
        <p>Our Action Programs</p>
      </div>

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item p-4 text-center" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; height: 100%;">
              <span style="color: var(--accent-color); font-size: 32px; font-weight: 700;">01</span>
              <h4 class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color: var(--heading-color);">Ecological Assessment</a></h4>
              <p style="font-size: 14px;">AQUA-RESEARCH: Mapping coastal marine habitats essential to biodiversity while promoting traditional knowledge.</p>
              <button class="btn btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="border: 1px solid var(--accent-color); color: var(--accent-color);">Read</button>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item p-4 text-center" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; height: 100%;">
              <span style="color: var(--accent-color); font-size: 32px; font-weight: 700;">02</span>
              <h4 class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" style="color: var(--heading-color);">Community Awareness</a></h4>
              <p style="font-size: 14px;">AQUA-COM: Educational programs for local communities on marine conservation and resource management.</p>
              <button class="btn btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" style="border: 1px solid var(--accent-color); color: var(--accent-color);">Read</button>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item p-4 text-center" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; height: 100%;">
              <span style="color: var(--accent-color); font-size: 32px; font-weight: 700;">03</span>
              <h4 class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop4" style="color: var(--heading-color);">Sustainable Livelihoods</a></h4>
              <p style="font-size: 14px;">AQUA-INVEST: Training in responsible fishing practices, ecotourism, and community growth.</p>
              <button class="btn btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop4" style="border: 1px solid var(--accent-color); color: var(--accent-color);">Read</button>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item p-4 text-center" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; height: 100%;">
              <span style="color: var(--accent-color); font-size: 32px; font-weight: 700;">04</span>
              <h4 class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop3" style="color: var(--heading-color);">Governance & Policy</a></h4>
              <p style="font-size: 14px;">AQUA-GO: Integrated approach for monitoring mechanisms and biodiversity governance.</p>
              <button class="btn btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop3" style="border: 1px solid var(--accent-color); color: var(--accent-color);">Read</button>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Strategic Axes Section -->

    <!-- Modals -->
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: var(--surface-color); border: 1px solid var(--accent-color); color: #fff;">
          <div class="modal-header" style="border-bottom: 1px solid rgba(205, 164, 94, 0.3);">
            <h5 class="modal-title" style="color: var(--accent-color);">Ecological Assessment</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="{{asset('img/activite.jpg')}}" class="img-fluid rounded mb-3" alt="">
            <p>Implement in-depth studies to assess, identify and map coastal marine habitats essential to biodiversity while promoting the traditional knowledge of coastal communities. This axis is the abbreviated AQUA-RESEARCH program.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: var(--surface-color); border: 1px solid var(--accent-color); color: #fff;">
          <div class="modal-header" style="border-bottom: 1px solid rgba(205, 164, 94, 0.3);">
            <h5 class="modal-title" style="color: var(--accent-color);">Community Awareness</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="{{asset('img/ens.jpg')}}" class="img-fluid rounded mb-3" alt="">
            <p>Develop educational programs to raise awareness among local communities and the general public of the importance of marine conservation and good resource management practices. This axis is the abbreviated AQUA-COM program.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="staticBackdrop4" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: var(--surface-color); border: 1px solid var(--accent-color); color: #fff;">
          <div class="modal-header" style="border-bottom: 1px solid rgba(205, 164, 94, 0.3);">
            <h5 class="modal-title" style="color: var(--accent-color);">Sustainable Livelihoods</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="{{asset('img/11.jpg')}}" class="img-fluid rounded mb-3" alt="">
            <p>Implement an integrated approach that favors training in responsible fishing practices, eco-tourism and the development of natural resources in order to contribute to harmonious and environmentally friendly development. This axis is the abbreviated AQUA-INVEST program.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="staticBackdrop3" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: var(--surface-color); border: 1px solid var(--accent-color); color: #fff;">
          <div class="modal-header" style="border-bottom: 1px solid rgba(205, 164, 94, 0.3);">
            <h5 class="modal-title" style="color: var(--accent-color);">Strengthening Governance</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="{{asset('img/10.jpg')}}" class="img-fluid rounded mb-3" alt="">
            <p>Adopting an integrated approach combining the collaboration of stakeholders, the establishment of monitoring and evaluation mechanisms will make it possible to identify threats to aquatic ecosystems and adjust conservation strategies accordingly. This axis is the abbreviated AQUA-GO program.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Leaders Section -->
    <section id="chefs" class="chefs section light-background" style="background-color: #ffffff !important;">
      <div class="container section-title" data-aos="fade-up">
        <h2>OUR TEAM</h2>
        <p>Leaders</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          @foreach ($membre as $memb)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member text-center p-4" style="background: var(--surface-color); border-radius: 8px; border: 1px solid rgba(205, 164, 94, 0.2);">
              <div class="pic mb-3">
                <a href="{{route('detilmembre',$memb->id)}}">
                  <img src="{{asset('profiles/'.$memb->image)}}" class="img-fluid rounded-circle" alt="{{$memb->nom}}" style="width: 180px; height: 180px; object-fit: cover; border: 3px solid var(--accent-color);">
                </a>
              </div>
              <div class="member-info">
                <h4 style="font-family: var(--heading-font);"><a href="{{route('detilmembre',$memb->id)}}" style="color: var(--heading-color);">{{$memb->nom}} {{$memb->prenome}}</a></h4>
                <span style="color: var(--accent-color); font-size: 14px; font-weight: 600;">{{$memb->info}}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- /Leaders Section -->

    <!-- Projects Section -->
    <section id="specials" class="specials section">
      <div class="container section-title" data-aos="fade-up">
        <h2>OUR PROJECTS</h2>
        <p>Featured Projects</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          @foreach ($activitesrecentes as $recent)
          <div class="col-lg-4 col-md-6">
            <div class="card h-100" style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; overflow: hidden;">
              <img src="{{asset('/images/'.$recent->image)}}" class="card-img-top" alt="{{$recent->name}}" style="height: 220px; object-fit: cover;">
              <div class="card-body d-flex flex-column text-center p-4">
                <h5 class="card-title" style="color: var(--heading-color); font-family: var(--heading-font);">{{$recent->name}}</h5>
                <div class="mt-auto pt-3">
                  <a href="{{route('detailactivite',$recent->id)}}" class="btn w-100" style="background: transparent; border: 1px solid var(--accent-color); color: var(--accent-color); font-weight: 600;">Read More <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    <!-- Featured Research Swiper Slider with all 9 slides -->
    @include('pages.components.research_slider')

    <!-- Impact Metrics Dashboard Section -->
    @include('pages.components.impact')

    <!-- Interactive Map & Coastal Incident Reporting Section -->
    @include('pages.components.map_reporting')

    <!-- Community & Partner Testimonials Section -->
    @include('pages.components.testimonials')

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
