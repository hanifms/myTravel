<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Reveal Bootstrap Template</title>
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

 <!-- Retain the authentication links -->
 @if (Route::has('login'))
 <div class="top-right links">
     @auth
         <a href="{{ url('/dashboard') }}">Dashboard</a>
     @else
         <!-- ======= hero Section ======= -->
         <section id="hero">

             <div class="hero-content" data-aos="fade-up">
                 <h2>Making <span>your ideas</span><br>happen!</h2>
                 <div>
                     <a href="{{ route('login') }}" class="btn-get-started scrollto">Login</a>
                     @if (Route::has('register'))
                         <a href="{{ route('register') }}" class="btn-projects scrollto">Register</a>
                     @endif
                 </div>
             </div>

             <div class="hero-slider swiper">
                 <div class="swiper-wrapper">
                     <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/1.jpg');"></div>
                     <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/2.jpg');"></div>
                     <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/3.jpg');"></div>
                     <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/4.jpg');"></div>
                     <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/5.jpg');"></div>
                 </div>
             </div>

         </section><!-- End Hero Section -->
     @endauth
 </div>
 @endif

