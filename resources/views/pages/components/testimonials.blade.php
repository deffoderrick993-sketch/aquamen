@php
    try {
        $dbTestimonials = \App\Models\Testimonial::latest()->get();
    } catch (\Throwable $e) {
        $dbTestimonials = collect([]);
    }
@endphp

<!-- Testimonials & Community Voice Section -->
<section id="testimonials" class="testimonials section light-background py-5" style="background: #f4f8fb;">
    <div class="container section-title text-center mb-5" data-aos="fade-up">
        <span class="text-uppercase fw-bold" style="color: #54b7e9; letter-spacing: 1.5px; font-size: 13px;">VOIX DU TERRAIN & PARTENAIRES</span>
        <h2 class="fw-bold mt-1" style="color: #0b1a26; font-family: var(--heading-font);">TÉMOIGNAGES & ENGAGEMENT</h2>
        <p class="text-muted mx-auto" style="max-width: 650px;">
            Ce que disent les communautés de pêcheurs, chercheurs et partenaires à propos des actions d'AQUAMEN.
        </p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper p-2">
            <script type="application/json" class="swiper-config">
            {
                "loop": true,
                "speed": 800,
                "autoplay": {
                    "delay": 4000,
                    "disableOnInteraction": false
                },
                "slidesPerView": 1,
                "spaceBetween": 20,
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "breakpoints": {
                    "768": {
                        "slidesPerView": 2,
                        "spaceBetween": 30
                    },
                    "1200": {
                        "slidesPerView": 3,
                        "spaceBetween": 30
                    }
                }
            }
            </script>

            <div class="swiper-wrapper py-3">
                @if($dbTestimonials->count() > 0)
                    @foreach($dbTestimonials as $index => $testi)
                        <div class="swiper-slide">
                            <div class="testimonial-item p-4 shadow-sm h-100 position-relative" style="background: #ffffff; border-radius: 14px; border: 1px solid rgba(84, 183, 233, 0.25);">
                                <div class="d-flex align-items-center mb-3">
                                    @if($testi->image)
                                        <img src="{{ asset($testi->image) }}" alt="{{ $testi->name }}" class="rounded-circle me-3 shadow-sm object-fit-cover" style="width: 55px; height: 55px; border: 2px solid #54b7e9; flex-shrink: 0;" />
                                    @else
                                        <div class="avatar-circle me-3 d-flex align-items-center justify-content-center fw-bold text-white shadow-sm" style="width: 55px; height: 55px; border-radius: 50%; background: {{ $index % 3 == 0 ? '#54b7e9' : ($index % 3 == 1 ? '#0b1a26' : '#e71d36') }}; font-size: 18px; flex-shrink: 0;">
                                            {{ $testi->initials ?? strtoupper(substr($testi->name, 0, 2)) }}
                                        </div>
                                    @endif
                                    <div>
                                        <h6 class="fw-bold mb-0 text-dark" style="font-size: 16px;">{{ $testi->name }}</h6>
                                        <small class="text-muted" style="font-size: 12px;">{{ $testi->role_title }}</small>
                                    </div>
                                </div>
                                <div class="stars mb-2 text-warning" style="font-size: 13px;">
                                    @for($i = 0; $i < $testi->stars; $i++)
                                        <i class="bi bi-star-fill"></i>
                                    @endfor
                                </div>
                                <p class="fst-italic text-secondary mb-0" style="font-size: 14px; line-height: 1.6;">
                                    "{{ $testi->quote }}"
                                </p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Fallback Carousel Testimonials -->
                    <div class="swiper-slide">
                        <div class="testimonial-item p-4 shadow-sm h-100 position-relative" style="background: #ffffff; border-radius: 14px; border: 1px solid rgba(84, 183, 233, 0.25);">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-circle me-3 d-flex align-items-center justify-content-center fw-bold text-white shadow-sm" style="width: 55px; height: 55px; border-radius: 50%; background: #54b7e9; font-size: 18px;">
                                    JP
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0 text-dark">Jean-Pierre Nkoa</h6>
                                    <small class="text-muted" style="font-size: 12px;">Représentant des Pêcheurs de Kribi</small>
                                </div>
                            </div>
                            <div class="stars mb-2 text-warning" style="font-size: 13px;">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p class="fst-italic text-secondary mb-0" style="font-size: 14px; line-height: 1.6;">
                                "Grâce aux sensibilisations d'AQUAMEN, nous comprenons mieux le rôle vital des mangroves pour la reproduction des poissons. Nos activités de pêche s'améliorent durablement."
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item p-4 shadow-sm h-100 position-relative" style="background: #ffffff; border-radius: 14px; border: 1px solid rgba(84, 183, 233, 0.25);">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-circle me-3 d-flex align-items-center justify-content-center fw-bold text-white shadow-sm" style="width: 55px; height: 55px; border-radius: 50%; background: #0b1a26; font-size: 18px;">
                                    MM
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0 text-dark">Dr. Marie Mbarga</h6>
                                    <small class="text-muted" style="font-size: 12px;">Enseignante-Chercheure en Océanographie</small>
                                </div>
                            </div>
                            <div class="stars mb-2 text-warning" style="font-size: 13px;">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p class="fst-italic text-secondary mb-0" style="font-size: 14px; line-height: 1.6;">
                                "Les travaux de cartographie et de suivi de la vulnérabilité côtière menés par les ingénieurs d'AQUAMEN fournissent des données scientifiques rigoureuses et essentielles."
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item p-4 shadow-sm h-100 position-relative" style="background: #ffffff; border-radius: 14px; border: 1px solid rgba(84, 183, 233, 0.25);">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar-circle me-3 d-flex align-items-center justify-content-center fw-bold text-white shadow-sm" style="width: 55px; height: 55px; border-radius: 50%; background: #e71d36; font-size: 18px;">
                                    EA
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0 text-dark">E. Abessolo</h6>
                                    <small class="text-muted" style="font-size: 12px;">Bénévole Terrain & Éco-garde</small>
                                </div>
                            </div>
                            <div class="stars mb-2 text-warning" style="font-size: 13px;">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p class="fst-italic text-secondary mb-0" style="font-size: 14px; line-height: 1.6;">
                                "Rejoindre AQUAMEN en tant que volontaire a été une expérience formidable. Participer au reboisement des mangroves et au nettoyage des plages donne un vrai sens à mon engagement."
                            </p>
                        </div>
                    </div>
                @endif
            </div>
            <div class="swiper-pagination mt-4"></div>
        </div>
    </div>
</section>
