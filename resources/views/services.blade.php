<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Services - Wale Embassy | Book Live Juju Highlife Performances</title>
    <meta name="description" content="Hire Wale Embassy for live band performances, private parties, traditional weddings, and corporate events. Authentic Nigerian Juju Highlife music entertainment.">
    <meta name="keywords" content="Wale Embassy Services, Book Nigerian Band, Juju Highlife Events, Hire Live Band, Yoruba Traditional Music, Wale Embassy Performance, Nigerian Event Entertainment, Juju Musician for Hire">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Hire Wale Embassy for Live Juju Highlife Music">
    <meta property="og:description" content="Book Wale Embassy for events, weddings, parties, and festivals. Authentic Nigerian Juju Highlife entertainment.">
    <meta property="og:image" content="{{ asset('assets/img/wale.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Wale Embassy Services - Live Band for Hire">
    <meta name="twitter:description" content="Authentic Nigerian Juju Highlife music performances for all types of events.">
    <meta name="twitter:image" content="{{ asset('assets/img/wale.jpg') }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "PerformingGroup",
            "name": "Wale Embassy",
            "alternateName": "Ayodele Busuyi Olawale",
            "description": "Nigerian Juju Highlife musician offering live band services for events and celebrations.",
            "serviceType": "Live Music Performance",
            "areaServed": "Nigeria and International",
            "url": "{{ url('/services') }}",
            "image": "{{ asset('assets/img/wale.jpg') }}",
            "sameAs": [
                "https://www.facebook.com/share/1924zaWae9/",
                "https://www.instagram.com/waleembassy?igsh=dmU2ZmRodnZ4cXQ="
            ]
        }
    </script>

    <!-- Fonts & CSS -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Poppins&family=Raleway&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="services-page">

    @include('includes.header')

    <main class="main">

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Delivering excellence in creative media and construction services with passion and professionalism.</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">

                    <!-- Music Production -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <div class="icon">
                                <i class="bi bi-music-note-beamed"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Music Production</h3>
                            </a>
                            <p>Professional music creation, mixing, and mastering tailored to your unique sound and style.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <!-- Video Production -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <div class="icon">
                                <i class="bi bi-camera-reels"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Video Production</h3>
                            </a>
                            <p>Creative video direction, shooting, and editing for commercials, music videos, and events.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <!-- Entertainment Services -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <div class="icon">
                                <i class="bi bi-stars"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Entertainment Services</h3>
                            </a>
                            <p>From event management to talent coordination, we bring your vision to life with flair and fun.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <!-- Music Studio Operation -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-red position-relative">
                            <div class="icon">
                                <i class="bi bi-boombox"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Music Studio</h3>
                            </a>
                            <p>State-of-the-art studio available for recording, rehearsals, and sound engineering services.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <!-- General Contractor -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item item-indigo position-relative">
                            <div class="icon">
                                <i class="bi bi-tools"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>General Contractor</h3>
                            </a>
                            <p>Construction and renovation solutions with a focus on quality craftsmanship and timely delivery.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>
            </div>
        </section><!-- End Services Section -->


    </main>

    @include('includes.footer')

</body>

</html>