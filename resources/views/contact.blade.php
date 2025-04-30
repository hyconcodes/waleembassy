<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Wale Embassy - Book Nigerian Juju Highlife Musician</title>
    <meta name="description" content="Get in touch with Wale Embassy for music bookings, live performances, events, or collaborations. Reach the official management of Nigerian Juju Highlife musician and songwriter.">
    <meta name="keywords" content="Contact Wale Embassy, Book Juju Musician Nigeria, Nigerian Highlife Artist Booking, Yoruba Music Booking, Hire Live Band Nigeria, Wale Embassy Contact Details, Juju Performance Booking, Nigerian Musician for Events">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Contact Wale Embassy - Nigerian Juju Musician Booking">
    <meta property="og:description" content="Contact Wale Embassy for music events, bookings, and live performances. Reach the official team for inquiries.">
    <meta property="og:image" content="{{ asset('assets/img/wale.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Wale Embassy - Live Music & Event Booking">
    <meta name="twitter:description" content="Reach out to Wale Embassy for bookings, music events, or collaborations via official contact channels.">
    <meta name="twitter:image" content="{{ asset('assets/img/wale.jpg') }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "name": "Wale Embassy",
            "alternateName": "Ayodele Busuyi Olawale",
            "jobTitle": "Musician",
            "description": "Nigerian Juju Highlife musician available for bookings, live band performances, and cultural events.",
            "url": "{{ url('/contact') }}",
            "image": "{{ asset('assets/img/wale2.jpg') }}",
            "sameAs": [
                "https://www.facebook.com/share/1924zaWae9/",
                "https://www.instagram.com/waleembassy?igsh=dmU2ZmRodnZ4cXQ="
            ],
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+2347061116222",
                "contactType": "Bookings and Inquiries",
                "availableLanguage": ["English", "Yoruba"]
            }
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

        <!-- Contact Section -->
        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Feel free to reach out via WhatsApp for bookings, collaborations, or inquiries.</p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-5">
                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Location</h3>
                                    <p>Lagos, Nigeria</p>
                                </div>
                            </div>

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-music-note-beamed flex-shrink-0"></i>
                                <div>
                                    <h3>Genre</h3>
                                    <p>Afrobeats | Highlife | Contemporary</p>
                                </div>
                            </div>

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email</h3>
                                    <p>ayodelebusuyi33@gmail.com</p>
                                </div>
                            </div>

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                                <i class="bi bi-whatsapp flex-shrink-0"></i>
                                <div>
                                    <h3>WhatsApp</h3>
                                    <p><a href="https://wa.me/2347061116222" target="_blank">Click here to message</a></p>
                                </div>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                                frameborder="0"
                                style="border: 0; width: 100%; height: 270px"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7 d-flex align-items-center justify-content-center">
                        <a href="https://wa.me/2347061116222" target="_blank" class="btn btn-success btn-lg" style="padding: 12px 30px; font-size: 18px;">
                            Message Me on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact Section -->

        <!-- /Contact Section -->

    </main>

    @include('includes.footer')

</body>

</html>