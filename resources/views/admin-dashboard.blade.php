<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>MyTravel</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
<link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

<x-app-layout>
    <x-slot name="header" style="margin-bottom: 0; padding-bottom: 0;">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard of ') }}{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div style="margin-top: 0; padding-top: 0;">
        <!-- Main content -->
        <!-- ======= About Section ======= -->
        <section id="about" style="margin-top: 0; padding-top: 20px;">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 about-img">
                        <img src="assets/img/about-img.jpg" alt="">
                    </div>
                    <div class="col-lg-6 content">
                        <h2>About MyTravel</h2>
                        <h3>MyTravel is your gateway to exploring the world’s most stunning destinations. Our mission is to inspire and guide travelers to create unforgettable experiences.</h3>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Expertly curated travel guides to help you plan the perfect trip.</li>
                            <li><i class="bi bi-check-circle"></i> Insider tips from seasoned travelers to make the most of your journey.</li>
                            <li><i class="bi bi-check-circle"></i> Personalized recommendations to ensure every adventure is uniquely yours.</li>
                        </ul>
                        Discover hidden gems, gain insider tips, and embark on journeys that will leave you with lasting memories. Join our community and let MyTravel be your trusted travel companion, turning your travel dreams into reality.
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Services</h2>
                    <p>Our commitment to providing exceptional experiences is reflected in the variety of services we provide. Whether you're looking to explore tour options, book your next adventure, seek assistance, or share your feedback, we have you covered.</p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title"><a href="">View Tour Packages</a></h4>
                            <p class="description">Explore a wide range of carefully curated tour packages tailored to suit every kind of traveler. Whether you're seeking adventure, relaxation, or cultural immersion, our diverse selection of tours promises unforgettable experiences. Browse through our detailed itineraries, stunning photos, and customer reviews to find your perfect getaway.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <h4 class="title"><a href="">Book Tour Packages</a></h4>
                            <p class="description">Ready to embark on your dream vacation? Booking your tour package with MyTravel is easy and hassle-free. Simply select your desired package, choose your travel dates, and complete the secure booking process. Our user-friendly platform ensures a seamless experience, allowing you to focus on the excitement of your upcoming adventure.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <div class="icon"><i class="bi bi-bar-chart"></i></div>
                            <h4 class="title"><a href="">Inquiries</a></h4>
                            <p class="description">Have questions or need assistance with your travel plans? Our dedicated support team is here to help. Whether you need more information about a tour package, want to customize your itinerary, or have special requests, feel free to reach out. We are committed to providing prompt and personalized responses to ensure your travel experience is flawless.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <div class="icon"><i class="bi bi-binoculars"></i></div>
                            <h4 class="title"><a href="">Submit Rating</a></h4>
                            <p class="description">Your feedback matters to us! Share your travel experiences and help others make informed decisions by submitting ratings and reviews of our tour packages. Your honest opinions not only help us improve our services but also guide fellow travelers in choosing their next adventure. Thank you for being a part of the MyTravel community!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->
    </div>
</x-app-layout>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
