<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wale Embassy - Nigerian Juju Highlife Musician & Songwriter | Official Website</title>
    <meta name="description" content="Welcome to the official website of Ayodele Busuyi Olawale (Wale Embassy), a Nigerian Juju Highlife musician, songwriter and performer with years of experience performing locally and internationally.">
    <meta name="keywords" content="Wale Embassy, Ayodele Busuyi Olawale, Juju Music, Nigerian Musician, Highlife Artist, Juju Highlife Nigeria, Nigerian Songwriter, Yoruba Music, Live Band Nigeria, Wale Embassy Music, Nigerian artist biography">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Wale Embassy - Nigerian Juju Highlife Musician">
    <meta property="og:description" content="Explore the musical journey of Wale Embassy, Nigerian Juju Highlife artist and songwriter. Learn more about his albums, performances, and career.">
    <meta property="og:image" content="{{ asset('assets/img/wale.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Wale Embassy - Juju Highlife Musician & Songwriter">
    <meta name="twitter:description" content="Official website of Nigerian musician Wale Embassy. View biography, music albums, awards and more.">
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
            "jobTitle": "Musician",
            "description": "Nigerian Juju Highlife musician and songwriter",
            "image": "{{ asset('assets/img/wale.jpg') }}",
            "url": "{{ url('/') }}",
            "sameAs": [
                "https://www.facebook.com/share/1924zaWae9/",
                "https://www.instagram.com/waleembassy?igsh=dmU2ZmRodnZ4cXQ=",
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

<body class="index-page">

    @include('includes.header')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <img src="assets/img/wale.jpg" alt="Wale Embassy Performing" data-aos="fade-in">

            <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 style="color: #34b7a7;">Wale Embassy – Juju Highlife Musician</h1>
                        <p class="text-white">
                            Welcome to the official site of <strong>Ayodele Busuyi Olawale</strong>, popularly known as <strong>Wale Embassy</strong> – a celebrated <strong>Nigerian Juju Highlife artist</strong>, <strong>songwriter</strong>, and <strong>live performer</strong>.
                        </p>
                        <a href="{{ url('/about') }}" class="btn-get-started">More About Me</a>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

    </main>

    @include('includes.footer')

</body>

</html>