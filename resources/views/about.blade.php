<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Wale Embassy - Nigerian Juju Highlife Musician & Songwriter</title>
    <meta name="description" content="Learn more about Wale Embassy (Ayodele Busuyi Olawale), a legendary Nigerian Juju Highlife musician and songwriter known for his vibrant stage performances, cultural heritage, and timeless music.">
    <meta name="keywords" content="About Wale Embassy, Wale Embassy Biography, Nigerian Juju Highlife Musician, Yoruba Music Artist, Ayodele Busuyi Olawale, Nigerian Songwriter, Juju Music Legend, Live Band Nigeria, Yoruba Cultural Music">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="About Wale Embassy - Nigerian Juju Highlife Artist">
    <meta property="og:description" content="Discover the life and career of Wale Embassy, a celebrated Nigerian Juju Highlife musician known for his inspirational music and cultural impact.">
    <meta property="og:image" content="{{ asset('assets/img/wale.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="profile">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Wale Embassy - Juju Highlife Musician & Cultural Icon">
    <meta name="twitter:description" content="Get to know Nigerian musician Wale Embassy, his journey, music influences, and achievements.">
    <meta name="twitter:image" content="{{ asset('assets/img/wale.jpg') }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "name": "Wale Embassy",
            "alternateName": "Ayodele Busuyi Olawale",
            "birthDate": "1981-08-04",
            "birthPlace": "Ikere, Ekiti State, Nigeria",
            "jobTitle": "Juju Highlife Musician and Songwriter",
            "description": "Celebrated Nigerian musician known for Juju and Highlife performances that preserve Yoruba culture.",
            "image": "{{ asset('assets/img/wale.jpg') }}",
            "url": "{{ url()->current() }}",
            "sameAs": [
                "https://www.facebook.com/share/1924zaWae9/",
                "https://www.instagram.com/waleembassy?igsh=dmU2ZmRodnZ4cXQ="
            ]
        }
    </script>
</head>


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

<body class="about-page">

    @include('includes.header')

    <main class="main">
        <!-- About Section -->
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>
                    Discover the story and soul behind Wale Embassy's music — a legacy rooted in culture, passion, and purpose.
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/img/wale2.jpg') }}" class="img-fluid rounded" alt="Wale Embassy" />
                    </div>
                    <div class="col-lg-8 content">
                        <h2>Nigerian Juju Highlife Musician & Songwriter</h2>
                        <p class="fst-italic py-3">
                            Wale Embassy (Ayodele Busuyi Olawale) is a seasoned artist known for his vibrant fusion of traditional juju and highlife music, touching lives through rhythm and story.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Birthday:</strong> <span>4 August 1981</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Hometown:</strong> <span>Ikere, Ekiti State, Nigeria</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Genre:</strong> <span>Juju, Highlife</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Stage Name:</strong> <span>Wale Embassy</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>{{ \Carbon\Carbon::parse('1981-08-04')->age }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Email:</strong> <span>ayodelebusuyi33@gmail.com</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Available for:</strong> <span>Bookings & Performances</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Website:</strong> <span>www.waleembassy.com.ng</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="py-3">
                            Over the years, Wale Embassy has earned recognition for his dynamic stage presence and inspirational songwriting. Rooted in the cultural depth of Yoruba music, he continues to inspire and entertain audiences across Nigeria and beyond with a sound that blends tradition with modern expression.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- /About Section -->

        <!-- Stats Section -->
        <!-- Stats Section -->
        <section id="stats" class="stats section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Performances</h2>
                <p>
                    A glimpse into the musical journey and achievements of Wale Embassy.
                </p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span
                                data-purecounter-start="0"
                                data-purecounter-end="20"
                                data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Years in Music</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span
                                data-purecounter-start="0"
                                data-purecounter-end="8"
                                data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Albums Released</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span
                                data-purecounter-start="0"
                                data-purecounter-end="150"
                                data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Live Performances</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span
                                data-purecounter-start="0"
                                data-purecounter-end="35"
                                data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Collaborations</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->
                </div>
            </div>
        </section>
        <!-- /Stats Section -->

        <!-- /Stats Section -->
    </main>

    @include('includes.footer')

</body>

</html>