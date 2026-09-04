<!-- Hero Background Carousel Component -->
<section id="hero" class="hero section dark-background p-0"
    style="position: relative; overflow: hidden;">

    <!-- Carousel Background Slider -->
    <div id="hero-carousel" class="carousel slide carousel-fade w-100 h-100" data-bs-ride="carousel"
        data-bs-interval="5500">

        <!-- Carousel Indicators -->
        <div class="carousel-indicators mb-4" style="z-index: 15;">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>

        <!-- Slides with Unique Multi-Directional Animated Content & Overlay Layering -->
        <div class="carousel-inner w-100 h-100">

            <!-- Slide 1 (ONLY slide with WELCOME TO AQUAMEN - Perfectly spaced below navbar) -->
            <div class="carousel-item active w-100 h-100 position-relative">
                <img src="{{ asset('assets/img/examples/ca1.jpeg') }}" alt="AQUAMEN Coast" class="d-block w-100 h-100"
                    style="object-fit: cover;">
                <!-- Dark Overlay behind content -->
                <div class="position-absolute" style="inset: 0; background: rgba(11, 26, 38, 0.55); z-index: 2;"></div>
                <!-- Content ABOVE dark overlay with navbar top offset -->
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100"
                    style="inset: 0; background: transparent; z-index: 10; padding-top: 110px; padding-bottom: 60px;">
                    <div class="container text-center">
                        <h2 class="display-3 fw-bold text-white mb-3 welcome-title"
                            style="font-family: var(--heading-font); text-shadow: 0 6px 25px rgba(0,0,0,0.95); letter-spacing: 1.5px;">
                            WELCOME TO <span
                                style="color: #54b7e9; text-shadow: 0 0 20px rgba(84, 183, 233, 0.8);">AQUAMEN</span>
                        </h2>
                        <p class="lead text-white mb-4 text-center mx-auto anim-top"
                            style="max-width: 850px; text-shadow: 0 3px 12px rgba(0,0,0,0.95); font-size: 21px; line-height: 1.5; font-weight: 500;">
                            Aquatic Environmental Management Association - Protecting Cameroon's Coastal Ecosystems
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-3 mb-3 anim-top">
                            <a href="{{ route('activite') }}" class="cta-btn px-4 py-2 fw-bold shadow-lg"
                                style="background: #54b7e9; color: #080e14; border: 2px solid #54b7e9; border-radius: 50px; font-size: 15px;">
                                Our Projects <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                        <div class="d-flex justify-content-center anim-top">
                            <a href="{{ route('gallerys') }}" class="pulsating-play-btn shadow-lg"
                                aria-label="View Media Gallery"></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 (Glissement depuis le Bas) -->
            <div class="carousel-item w-100 h-100 position-relative">
                <img src="{{ asset('assets/img/examples/example1.jpeg') }}" alt="AQUAMEN Marine Research"
                    class="d-block w-100 h-100" style="object-fit: cover;">
                <!-- Dark Overlay behind content -->
                <div class="position-absolute" style="inset: 0; background: rgba(11, 26, 38, 0.55); z-index: 2;"></div>
                <!-- Content ABOVE dark overlay -->
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100"
                    style="inset: 0; background: transparent; z-index: 10; padding-top: 110px; padding-bottom: 60px;">
                    <div class="container text-center">
                        <h2 class="display-3 fw-bold text-white mb-3 anim-bottom"
                            style="font-family: var(--heading-font); text-shadow: 0 6px 25px rgba(0,0,0,0.95); letter-spacing: 1px;">
                            Field Research & Coastal Management
                        </h2>
                        <p class="lead text-white mb-4 text-center mx-auto anim-bottom"
                            style="max-width: 850px; text-shadow: 0 3px 12px rgba(0,0,0,0.95); font-size: 21px; line-height: 1.5; font-weight: 500;">
                            Discover our field research, habitat restoration, and coastal management initiatives
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-3 mb-3 anim-bottom">
                            <a href="{{ route('activite') }}" class="cta-btn px-4 py-2 fw-bold shadow-lg"
                                style="background: #54b7e9; color: #080e14; border: 2px solid #54b7e9; border-radius: 50px; font-size: 15px;">
                                Our Initiatives <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 (Glissement depuis la Gauche) -->
            <div class="carousel-item w-100 h-100 position-relative">
                <img src="{{ asset('assets/img/examples/sea-turtle-and-fish-swimming-in-the-sea-wallpaper-750x1334_164.jpg') }}"
                    alt="AQUAMEN Biodiversity" class="d-block w-100 h-100" style="object-fit: cover;">
                <!-- Dark Overlay behind content -->
                <div class="position-absolute" style="inset: 0; background: rgba(11, 26, 38, 0.55); z-index: 2;"></div>
                <!-- Content ABOVE dark overlay -->
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100"
                    style="inset: 0; background: transparent; z-index: 10; padding-top: 110px; padding-bottom: 60px;">
                    <div class="container text-center">
                        <h2 class="display-3 fw-bold text-white mb-3 anim-left"
                            style="font-family: var(--heading-font); text-shadow: 0 6px 25px rgba(0,0,0,0.95); letter-spacing: 1px;">
                            Marine Biodiversity Conservation
                        </h2>
                        <p class="lead text-white mb-4 text-center mx-auto anim-left"
                            style="max-width: 850px; text-shadow: 0 3px 12px rgba(0,0,0,0.95); font-size: 21px; line-height: 1.5; font-weight: 500;">
                            Bring your energy and passion to support marine biodiversity conservation in Cameroon
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-3 mb-3 anim-left">
                            <a href="{{ route('volontariat') }}" class="cta-btn px-4 py-2 fw-bold shadow-lg"
                                style="background: #54b7e9; color: #080e14; border: 2px solid #54b7e9; border-radius: 50px; font-size: 15px;">
                                Join Our Team <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4 (Glissement depuis la Droite) -->
            <div class="carousel-item w-100 h-100 position-relative">
                <img src="{{ asset('assets/img/examples/example2.jpeg') }}" alt="AQUAMEN Community"
                    class="d-block w-100 h-100" style="object-fit: cover;">
                <!-- Dark Overlay behind content -->
                <div class="position-absolute" style="inset: 0; background: rgba(11, 26, 38, 0.55); z-index: 2;">
                </div>
                <!-- Content ABOVE dark overlay -->
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100"
                    style="inset: 0; background: transparent; z-index: 10; padding-top: 110px; padding-bottom: 60px;">
                    <div class="container text-center">
                        <h2 class="display-3 fw-bold text-white mb-3 anim-right"
                            style="font-family: var(--heading-font); text-shadow: 0 6px 25px rgba(0,0,0,0.95); letter-spacing: 1px;">
                            Research & Publications
                        </h2>
                        <p class="lead text-white mb-4 text-center mx-auto anim-right"
                            style="max-width: 850px; text-shadow: 0 3px 12px rgba(0,0,0,0.95); font-size: 21px; line-height: 1.5; font-weight: 500;">
                            Read research papers and publications produced by AQUAMEN experts
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-3 mb-3 anim-right">
                            <a href="{{ route('rapport') }}" class="cta-btn px-4 py-2 fw-bold shadow-lg"
                                style="background: #54b7e9; color: #080e14; border: 2px solid #54b7e9; border-radius: 50px; font-size: 15px;">
                                Read Reports <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 5 (Glissement Diagonale Haut-Gauche) -->
            <div class="carousel-item w-100 h-100 position-relative">
                <img src="{{ asset('assets/img/examples/example3.jpeg') }}" alt="AQUAMEN Ecosystem"
                    class="d-block w-100 h-100" style="object-fit: cover;">
                <!-- Dark Overlay behind content -->
                <div class="position-absolute" style="inset: 0; background: rgba(11, 26, 38, 0.55); z-index: 2;">
                </div>
                <!-- Content ABOVE dark overlay -->
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100"
                    style="inset: 0; background: transparent; z-index: 10; padding-top: 110px; padding-bottom: 60px;">
                    <div class="container text-center">
                        <h2 class="display-3 fw-bold text-white mb-3 anim-top-left"
                            style="font-family: var(--heading-font); text-shadow: 0 6px 25px rgba(0,0,0,0.95); letter-spacing: 1px;">
                            Scientific Articles & Findings
                        </h2>
                        <p class="lead text-white mb-4 text-center mx-auto anim-top-left"
                            style="max-width: 850px; text-shadow: 0 3px 12px rgba(0,0,0,0.95); font-size: 21px; line-height: 1.5; font-weight: 500;">
                            Access our scientific articles, project reports, and official publications
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-3 mb-3 anim-top-left">
                            <a href="{{ route('Aquarticle') }}" class="cta-btn px-4 py-2 fw-bold shadow-lg"
                                style="background: #54b7e9; color: #080e14; border: 2px solid #54b7e9; border-radius: 50px; font-size: 15px;">
                                Read Articles <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 6 (Glissement Diagonale Bas-Droite) -->
            <div class="carousel-item w-100 h-100 position-relative">
                <img src="{{ asset('assets/img/examples/example8.jpeg') }}" alt="AQUAMEN Governance"
                    class="d-block w-100 h-100" style="object-fit: cover;">
                <!-- Dark Overlay behind content -->
                <div class="position-absolute" style="inset: 0; background: rgba(11, 26, 38, 0.55); z-index: 2;">
                </div>
                <!-- Content ABOVE dark overlay -->
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100"
                    style="inset: 0; background: transparent; z-index: 10; padding-top: 110px; padding-bottom: 60px;">
                    <div class="container text-center">
                        <h2 class="display-3 fw-bold text-white mb-3 anim-bottom-right"
                            style="font-family: var(--heading-font); text-shadow: 0 6px 25px rgba(0,0,0,0.95); letter-spacing: 1px;">
                            Media Gallery & Community Action
                        </h2>
                        <p class="lead text-white mb-4 text-center mx-auto anim-bottom-right"
                            style="max-width: 850px; text-shadow: 0 3px 12px rgba(0,0,0,0.95); font-size: 21px; line-height: 1.5; font-weight: 500;">
                            Visual highlights of our marine ecosystem projects & community engagement
                        </p>
                        <div class="d-flex flex-wrap justify-content-center gap-3 mb-3 anim-bottom-right">
                            <a href="{{ route('gallerys') }}" class="cta-btn px-4 py-2 fw-bold shadow-lg"
                                style="background: #54b7e9; color: #080e14; border: 2px solid #54b7e9; border-radius: 50px; font-size: 15px;">
                                Explore Gallery <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Minimalist Navigation Controls ABOVE Overlay -->
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev"
            style="z-index: 15; width: 5%;">
            <span class="carousel-control-prev-icon p-3" aria-hidden="true"
                style="filter: drop-shadow(0 2px 5px rgba(0,0,0,0.8));"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next"
            style="z-index: 15; width: 5%;">
            <span class="carousel-control-next-icon p-3" aria-hidden="true"
                style="filter: drop-shadow(0 2px 5px rgba(0,0,0,0.8));"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</section>
