<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Gallery - AQUAMEN</title>
    <meta name="description"
        content="AQUAMEN photo gallery of aquatic environmental research, field activities, and community initiatives.">
    <meta name="keywords" content="aquamen, gallery, photos, field work, marine research">

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

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ asset('img/gal.jpeg') }}" alt="Gallery Background" data-aos="fade-in">

            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <h2 style="font-family: var(--heading-font); color: #fff;">PHOTO <span>GALLERY</span></h2>
                        <p>Visual highlights of our marine ecosystem projects & community engagement.</p>
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">
            <div class="container section-title" data-aos="fade-up">
                <h2>GALLERY</h2>
                <p>Some Photos From Our Projects</p>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-2">
                    @foreach ($allgallery as $gallery)
                        @for ($i = 1; $i <= 10; $i++)
                            @php
                                $imgField = 'image' . $i;
                                $fileName = $gallery->$imgField;
                                $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                                $isVideo = in_array($ext, ['mp4', 'webm', 'mov', 'avi', 'mkv']);
                            @endphp
                            @if (!empty($fileName))
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="gallery-item position-relative"
                                        style="border: 2px solid var(--accent-color); border-radius: 6px; overflow: hidden; background: #000;">
                                        @if ($isVideo)
                                            <video src="{{ asset('gallery/' . $fileName) }}" controls class="w-100"
                                                style="height: 220px; object-fit: cover;"></video>
                                        @else
                                            <a href="{{ asset('gallery/' . $fileName) }}" class="glightbox"
                                                data-gallery="images-gallery">
                                                <img src="{{ asset('gallery/' . $fileName) }}" alt="AQUAMEN Gallery"
                                                    class="img-fluid w-100" style="height: 220px; object-fit: cover;">
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endfor
                    @endforeach
                </div>
            </div>
        </section><!-- /Gallery Section -->

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
