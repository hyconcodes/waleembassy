<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wale Embassy Portfolio - Performances, Albums & Live Shows</title>
    <meta name="description" content="Explore the musical portfolio of Wale Embassy, showcasing Nigerian Juju Highlife performances, albums, and highlights from local and international shows.">
    <meta name="keywords" content="Wale Embassy Portfolio, Nigerian Juju Music, Live Performance Gallery, Yoruba Music Events, Wale Embassy Shows, Juju Albums, Music Highlights, Nigerian Stage Performances, Highlife Visuals">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Wale Embassy Portfolio - Nigerian Juju Highlife Musician">
    <meta property="og:description" content="View Wale Embassy’s musical journey through albums, performances, and visuals from Nigerian and international shows.">
    <meta property="og:image" content="{{ asset('assets/img/wale.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Wale Embassy Portfolio - Music, Albums & Performances">
    <meta name="twitter:description" content="Explore the official visual and musical portfolio of Nigerian Juju artist Wale Embassy.">
    <meta name="twitter:image" content="{{ asset('assets/img/wale2.jpg') }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "MusicGroup",
            "name": "Wale Embassy",
            "alternateName": "Ayodele Busuyi Olawale",
            "genre": "Juju Highlife",
            "description": "Explore Wale Embassy's music portfolio: performances, albums, videos, and stage appearances.",
            "url": "{{ url('/portfolio') }}",
            "image": "{{ asset('assets/img/wale2.jpg') }}",
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

<body class="portfolio-page">

    @include('includes.header')

    <main class="main">
        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Music Portfolio</h2>
                <p>Explore some of my spirit-filled gospel tracks and medleys.</p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                    </ul>
                    <!-- End Portfolio Filters -->

                    <div
                        class="row gy-4 isotope-container"
                        data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img
                                src="assets/img/PRAISE MEDLEY.jpg"
                                class="img-fluid"
                                alt="Praise Medley" />
                            <div class="portfolio-info">
                                <a href="https://audiomack.com/wale-embassy/song/wale-embassy-praise-medley?share-user-id=35893186">PRAISE MEDLEY</a>
                                <p>Wale Embassy</p>
                                <a
                                    href="assets/img/PRAISE MEDLEY.jpg"
                                    title="Praise Medley"
                                    data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a
                                    href="https://audiomack.com/wale-embassy/song/wale-embassy-praise-medley?share-user-id=35893186"
                                    title="Listen on Audiomack"
                                    class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <!-- End Portfolio Item -->

                        <!-- PRAISE MEDLEY -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/img/PRAISE MEDLEY.jpg" class="img-fluid" alt="Praise Medley" />
                            <div class="portfolio-info">
                                <a href="https://audiomack.com/wale-embassy/song/wale-embassy-praise-medley?share-user-id=35893186">PRAISE MEDLEY</a>
                                <p>Wale Embassy</p>
                                <a href="assets/img/PRAISE MEDLEY.jpg" title="Praise Medley" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://audiomack.com/wale-embassy/song/wale-embassy-praise-medley?share-user-id=35893186" class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <!-- APPRECIATION -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="assets/img/APPRECIATION.jpg" class="img-fluid" alt="Appreciation" />
                            <div class="portfolio-info">
                                <a href="https://audiomack.com/wale-embassy/song/3?share-user-id=35893186">APPRECIATION</a>
                                <p>Wale Embassy</p>
                                <a href="assets/img/APPRECIATION.jpg" title="Appreciation" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://audiomack.com/wale-embassy/song/3?share-user-id=35893186" class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <!-- MY IMAGE -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="assets/img/MY IMAGE BY WALE EMBASSY.jpeg" class="img-fluid" alt="MY IMAGE BY WALE EMBASSY" />
                            <div class="portfolio-info">
                                <a href="https://audiomack.com/wale-embassy/song/my-image-by-wale-embassy?share-user-id=35893186">MY IMAGE</a>
                                <p>Wale Embassy</p>
                                <a href="assets/img/MY IMAGE BY WALE EMBASSY.jpeg" title="MY IMAGE BY WALE EMBASSY" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://audiomack.com/wale-embassy/song/my-image-by-wale-embassy?share-user-id=35893186" class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <!-- IN HIS PRESENCE -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/img/IN HIS PRESENCE.jpg" class="img-fluid" alt="In His Presence" />
                            <div class="portfolio-info">
                                <a href="https://audiomack.com/wale-embassy/song/wale-embassyin-his-presence-1?share-user-id=35893186">IN HIS PRESENCE</a>
                                <p>Wale Embassy</p>
                                <a href="assets/img/IN HIS PRESENCE.jpg" title="In His Presence" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://audiomack.com/wale-embassy/song/wale-embassyin-his-presence-1?share-user-id=35893186" class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <!-- ADORATION -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="assets/img/ADORATION.jpg" class="img-fluid" alt="Adoration" />
                            <div class="portfolio-info">
                                <a href="https://audiomack.com/wale-embassy/song/adoration-praise-medley-20-by-wale-embassy?share-user-id=35893186">ADORATION</a>
                                <p>Wale Embassy</p>
                                <a href="assets/img/ADORATION.jpg" title="Adoration" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://audiomack.com/wale-embassy/song/adoration-praise-medley-20-by-wale-embassy?share-user-id=35893186" class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <!-- ARONIPIN COVER -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="assets/img/ARONIPIN COVER.jpg" class="img-fluid" alt="Aronipin Cover" />
                            <div class="portfolio-info">
                                <a href="https://audiomack.com/wale-embassy/song/aronipin-cover?share-user-id=35893186">ARONIPIN COVER</a>
                                <p>Wale Embassy</p>
                                <a href="assets/img/ARONIPIN COVER.jpg" title="Aronipin Cover" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://audiomack.com/wale-embassy/song/aronipin-cover?share-user-id=35893186" class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <!-- OLD TUNES -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/img/OLD TUNES.jpg" class="img-fluid" alt="Old Tunes" />
                            <div class="portfolio-info">
                                <a href="https://audiomack.com/wale-embassy/song/old-tunes-cover-by-wale-embassy?share-user-id=35893186">OLD TUNES</a>
                                <p>Wale Embassy</p>
                                <a href="assets/img/OLD TUNES.jpg" title="Old Tunes" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://audiomack.com/wale-embassy/song/old-tunes-cover-by-wale-embassy?share-user-id=35893186" class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <!-- CHOOSE WISELY -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="assets/img/CHOOSE WISELY.jpg" class="img-fluid" alt="Choose Wisely" />
                            <div class="portfolio-info">
                                <a href="https://audiomack.com/wale-embassy/song/choose-wisely-by-wale-embassy?share-user-id=35893186">CHOOSE WISELY</a>
                                <p>Wale Embassy</p>
                                <img src="{{ asset('assets/img/CHOOSE WISELY.jpg') }}" class="img-fluid" alt="Choose Wisely" />
                                <a href="assets/img/CHOOSE WISELY.jpg" title="Choose Wisely" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://audiomack.com/wale-embassy/song/choose-wisely-by-wale-embassy?share-user-id=35893186" class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <!-- MAJE O JEMI BABA -->
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="assets/img/MAJE O JEMI BABA.jpg" class="img-fluid" alt="Maje o jemi Baba" />
                            <div class="portfolio-info">
                                <a href="https://audiomack.com/wale-embassy/song/17925530?share-user-id=35893186">MAJE O JEMI BABA</a>
                                <p>Wale Embassy</p>
                                <a href="assets/img/MAJE O JEMI BABA.jpg" title="Maje o jemi Baba" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://audiomack.com/wale-embassy/song/17925530?share-user-id=35893186" class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <!-- End Portfolio Item -->
                    </div>
                    <!-- End Portfolio Container -->
                </div>
            </div>
        </section>
        <!-- /Portfolio Section -->
    </main>

    @include('includes.footer')

</body>

</html>