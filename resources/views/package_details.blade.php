@extends('master.layout')
@section('content')


<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Package Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li><a href="portfolio.html">Packages</a></li>
          <li>{{$tour_packages->packageName}}</li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/countries/langkawi.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/countries/langkawi.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/countries/langkawi.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Package information</h3>
            <ul>
              <li><strong>Description</strong>:{{ $tour_packages->description }}</li>
              <li><strong>Price (per pax)</strong>: {{ $tour_packages->price }}</li>
              <li><strong>Duration</strong>: {{ $tour_packages->duration }}</li>
              <li><strong>Availability</strong>: Available</li>
            </ul>
            <a href="{{ route('booking.create', $tour_packages->id) }}">Book Now</a>
          </div>
          <div class="portfolio-description">
            <h2>Package Itinerary</h2>
            <p>
                Itinerary: {{ $tour_packages->itinerary }}
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection
