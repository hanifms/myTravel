@extends('master.layout')
@section('content')

<main id="main">
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Our Tour Packages</h2>
            <p>Here is the list of available tour packages for you to pick!</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Peninsular Malaysia</li>
                <li data-filter=".filter-card">East Malaysia</li>
                <li data-filter=".filter-web">Asean</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/countries/cameron_highlands.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cameron Highland</h4>
                <p>Peninsular Malaysia</p>
                <a href="assets/img/countries/cameron_highlands.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="{{route('packages_details',1)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/countries/thailand.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Thailand</h4>
                <p>Asean</p>
                <a href="assets/img/countries/thailand.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="{{route('packages_details',2)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/countries/genting_highlands.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Genting Higland</h4>
                <p>Peninsular Malaysia</p>
                <a href="assets/img/countries/genting_highlands.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="{{route('packages_details',3)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/countries/kota_kinabalu.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kota Kinabalu</h4>
                <p>East Malaysia</p>
                <a href="assets/img/countries/kota_kinabalu.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="{{route('packages_details',4)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/countries/vietnam.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vietnam</h4>
                <p>Asean</p>
                <a href="assets/img/countries/vietnam.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="{{route('packages_details',5)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/countries/langkawi.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Langkawi</h4>
                <p>Peninsular Malaysia</p>
                <a href="assets/img/countries/langkawi.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="{{route('packages_details',6)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/countries/tawau.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tawau</h4>
                <p>East Malaysia</p>
                <a href="assets/img/countries/tawau.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="{{route('packages_details',7)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/countries/kuching.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kuching</h4>
                <p>East Malaysia</p>
                <a href="assets/img/countries/kuching.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="{{route('packages_details',8)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/countries/brunei_darussalam.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Brunei Darussalam</h4>
                <p>Asean</p>
                <a href="assets/img/countries/brunei_darussalam.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="{{route('packages_details',9)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

          </div>

        </div>
      </section>

      @endsection
