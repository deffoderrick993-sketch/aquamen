<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>AQUAMEN - Aquatic Environmental Management Association</title>
    <meta name="description"
        content="AQUAMEN is dedicated to the sustainable management and conservation of marine and aquatic ecosystems on the Cameroonian coast.">
    <meta name="keywords"
        content="aquamen, aquatic environment, marine conservation, cameroon, oceanography, mangroves, coastal biodiversity">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/aquamen.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    @include('pages.components.nav')

    <main class="main">

        <!-- Hero Background Carousel Section -->
        @include('pages.components.carousel')



        <!-- Modal Donation -->
        <div class="modal fade" id="donation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="donationLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content"
                    style="background-color: var(--surface-color); border: 1px solid var(--accent-color); color: #fff;">
                    <div class="modal-header" style="border-bottom: 1px solid rgba(205, 164, 94, 0.3);">
                        <h5 class="modal-title" id="donationLabel"
                            style="color: var(--accent-color); font-family: var(--heading-font);">Support AQUAMEN</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center p-4">
                        <p class="mb-4">Your contributions directly support our scientific research and community
                            marine conservation efforts along the Cameroonian coast.</p>
                        <a href="https://www.paypal.me/Dadjeu/10" target="_blank" class="btn p-3"
                            style="background: var(--accent-color); color: #000; font-weight: 700; border-radius: 30px;">
                            <img src="{{ asset('img/paypal.jpg') }}" alt="PayPal Donation" width="120"
                                class="img-fluid rounded">
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
                        <img src="{{ asset('img/acc.jpeg') }}" class="img-fluid about-img rounded shadow"
                            alt="AQUAMEN Team">
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 content">
                        <h3 style="color: var(--accent-color); font-family: var(--heading-font);">OUR STORY & MISSION
                        </h3>
                        <p class="fst-italic" style="color: var(--default-color);">
                            The Aquatic Environmental Management Association (AQUAMEN) was born in 2016 from the vision
                            of four young engineering students specializing in fisheries, wishing to improve aquatic
                            resource management on the Cameroonian coast.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all" style="color: var(--accent-color);"></i> <span>8+ years of
                                    dedicated scientific research in oceanography, limnology, and hydrology.</span></li>
                            <li><i class="bi bi-check2-all" style="color: var(--accent-color);"></i> <span>Community
                                    awareness programs for coastal populations along the Gulf of Guinea.</span></li>
                            <li><i class="bi bi-check2-all" style="color: var(--accent-color);"></i> <span>Sustainable
                                    livelihood development and protection of essential marine habitats.</span></li>
                        </ul>
                        <p>
                            Thanks to specialized knowledge, AQUAMEN is committed to increasing the awareness of local
                            communities on resource health and executing concrete actions to preserve biodiversity and
                            optimize governance.
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('aboutus') }}" class="btn"
                                style="background: var(--accent-color); color: #000; font-weight: 600; padding: 10px 24px; border-radius: 50px;">Read
                                Full Story <i class="bi bi-arrow-right me-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- Why Us / Strategic Axes Section -->
        <section id="why-us" class="why-us section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>STRATEGIC AXES</h2>
                <p>Our Core Programs & Action Areas</p>
            </div>

            <div class="container">
                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item p-4 text-center"
                            style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; height: 100%;">
                            <span
                                style="color: var(--accent-color); font-size: 32px; font-weight: 700; font-family: var(--heading-font);">01</span>
                            <h4 class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#axis1Modal"
                                    style="color: var(--heading-color);">Ecological Assessment</a></h4>
                            <p style="font-size: 14px;">AQUA-RESEARCH: Mapping coastal marine habitats essential to
                                biodiversity while integrating local traditional knowledge.</p>
                            <button class="btn btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#axis1Modal"
                                style="border: 1px solid var(--accent-color); color: var(--accent-color);">Learn
                                More</button>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item p-4 text-center"
                            style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; height: 100%;">
                            <span
                                style="color: var(--accent-color); font-size: 32px; font-weight: 700; font-family: var(--heading-font);">02</span>
                            <h4 class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#axis2Modal"
                                    style="color: var(--heading-color);">Community Awareness</a></h4>
                            <p style="font-size: 14px;">AQUA-COM: Educational initiatives to raise awareness among
                                coastal populations on marine conservation and resource stewardship.</p>
                            <button class="btn btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#axis2Modal"
                                style="border: 1px solid var(--accent-color); color: var(--accent-color);">Learn
                                More</button>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-item p-4 text-center"
                            style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; height: 100%;">
                            <span
                                style="color: var(--accent-color); font-size: 32px; font-weight: 700; font-family: var(--heading-font);">03</span>
                            <h4 class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#axis3Modal"
                                    style="color: var(--heading-color);">Sustainable Livelihoods</a></h4>
                            <p style="font-size: 14px;">AQUA-INVEST: Training in responsible fishing practices,
                                ecotourism, and sustainable development for riverside communities.</p>
                            <button class="btn btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#axis3Modal"
                                style="border: 1px solid var(--accent-color); color: var(--accent-color);">Learn
                                More</button>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-item p-4 text-center"
                            style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; height: 100%;">
                            <span
                                style="color: var(--accent-color); font-size: 32px; font-weight: 700; font-family: var(--heading-font);">04</span>
                            <h4 class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#axis4Modal"
                                    style="color: var(--heading-color);">Governance & Policy</a></h4>
                            <p style="font-size: 14px;">AQUA-GO: Strengthening aquatic biodiversity governance,
                                monitoring, and evaluation mechanisms across decision levels.</p>
                            <button class="btn btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#axis4Modal"
                                style="border: 1px solid var(--accent-color); color: var(--accent-color);">Learn
                                More</button>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /Why Us Section -->

        <!-- Modals for Strategic Axes -->
        <div class="modal fade" id="axis1Modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content"
                    style="background-color: var(--surface-color); border: 1px solid var(--accent-color); color: #fff;">
                    <div class="modal-header" style="border-bottom: 1px solid rgba(205, 164, 94, 0.3);">
                        <h5 class="modal-title" style="color: var(--accent-color);">Ecological Assessment
                            (AQUA-RESEARCH)</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ asset('img/activite.jpg') }}" class="img-fluid rounded mb-3"
                            alt="Ecological assessment">
                        <p>Implement in-depth scientific studies to assess, identify, and map coastal marine habitats
                            essential to biodiversity while promoting the traditional knowledge of coastal communities.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="axis2Modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content"
                    style="background-color: var(--surface-color); border: 1px solid var(--accent-color); color: #fff;">
                    <div class="modal-header" style="border-bottom: 1px solid rgba(205, 164, 94, 0.3);">
                        <h5 class="modal-title" style="color: var(--accent-color);">Community Awareness (AQUA-COM)
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ asset('img/ens.jpg') }}" class="img-fluid rounded mb-3"
                            alt="Community Awareness">
                        <p>Develop educational programs to raise awareness among local communities and the general
                            public of the importance of marine conservation and good resource management practices.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="axis3Modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content"
                    style="background-color: var(--surface-color); border: 1px solid var(--accent-color); color: #fff;">
                    <div class="modal-header" style="border-bottom: 1px solid rgba(205, 164, 94, 0.3);">
                        <h5 class="modal-title" style="color: var(--accent-color);">Sustainable Livelihoods
                            (AQUA-INVEST)</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ asset('img/11.jpg') }}" class="img-fluid rounded mb-3"
                            alt="Sustainable Livelihoods">
                        <p>Implement an integrated approach favoring training in responsible fishing practices,
                            ecotourism, and the development of natural resources to support environmentally friendly
                            growth.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="axis4Modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content"
                    style="background-color: var(--surface-color); border: 1px solid var(--accent-color); color: #fff;">
                    <div class="modal-header" style="border-bottom: 1px solid rgba(205, 164, 94, 0.3);">
                        <h5 class="modal-title" style="color: var(--accent-color);">Governance & Management (AQUA-GO)
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ asset('img/10.jpg') }}" class="img-fluid rounded mb-3" alt="Governance">
                        <p>Adopting an integrated approach combining stakeholder collaboration and monitoring mechanisms
                            to identify threats to aquatic ecosystems and adjust conservation strategies accordingly.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Projects Section -->
        <section id="specials" class="specials section">
            <div class="container section-title" data-aos="fade-up">
                <h2>PROJECTS & ACTIVITIES</h2>
                <p>Recent Conservation Initiatives</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    @foreach ($activitesrecentes as $recent)
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100"
                                style="background: var(--surface-color); border: 1px solid rgba(205, 164, 94, 0.2); border-radius: 8px; overflow: hidden;">
                                <img src="{{ asset('/images/' . $recent->image) }}" class="card-img-top"
                                    alt="{{ $recent->name }}" style="height: 220px; object-fit: cover;">
                                <div class="card-body d-flex flex-column text-center p-4">
                                    <h5 class="card-title"
                                        style="color: var(--heading-color); font-family: var(--heading-font);">
                                        {{ $recent->name }}</h5>
                                    <div class="mt-auto pt-3">
                                        <a href="{{ route('detailactivite', $recent->id) }}" class="btn w-100"
                                            style="background: transparent; border: 1px solid var(--accent-color); color: var(--accent-color); font-weight: 600;">Read
                                            More <i class="bi bi-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-5">
                    <a href="{{ route('activite') }}" class="btn"
                        style="background: var(--accent-color); color: #000; font-weight: 700; padding: 12px 30px; border-radius: 50px;">View
                        All Projects</a>
                </div>
            </div>
        </section><!-- /Projects Section -->

        <!-- Team / Leaders Section -->
        <section id="chefs" class="chefs section light-background" style="background-color: #ffffff !important;">
            <div class="container section-title" data-aos="fade-up">
                <h2>EXECUTIVE BOARD</h2>
                <p>Our Dedicated Leadership</p>
            </div>

            <div class="container">
                <div class="row gy-4">
                    @foreach ($membre as $memb)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="member"
                                style="background: var(--surface-color); border-radius: 8px; overflow: hidden; border: 1px solid rgba(205, 164, 94, 0.2);">
                                <div class="pic text-center p-3">
                                    <img src="{{ asset('profiles/' . $memb->image) }}" class="img-fluid rounded-circle"
                                        alt="{{ $memb->nom }}"
                                        style="width: 180px; height: 180px; object-fit: cover; border: 3px solid var(--accent-color);">
                                </div>
                                <div class="member-info text-center p-4">
                                    <h4 style="color: var(--heading-color); font-family: var(--heading-font);"><a
                                            href="{{ route('detilmembre', $memb->id) }}"
                                            style="color: var(--heading-color);">{{ $memb->nom }}
                                            {{ $memb->prenome }}</a></h4>
                                    <span
                                        style="color: var(--accent-color); font-size: 14px; font-weight: 600;">{{ $memb->info }}</span>
                                    <div class="mt-3">
                                        <a href="{{ route('detilmembre', $memb->id) }}" class="btn btn-sm"
                                            style="border: 1px solid var(--accent-color); color: var(--accent-color);">Profile
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- /Team Section -->

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
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
