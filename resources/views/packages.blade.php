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
              <img src="assets/img/countries/cameron-highlands.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cameron Highland</h4>
                <p>Peninsular Malaysia</p>
                <a href="assets/img/countries/cameron-highlands.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/countries/thailand.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Thailand</h4>
                <p>Asean</p>
                <a href="assets/img/countries/thailand.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/countries/genting-highlands.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Genting Higland</h4>
                <p>Peninsular Malaysia</p>
                <a href="assets/img/countries/genting-highlands.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/countries/kota-kinabalu.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kota Kinabalu</h4>
                <p>East Malaysia</p>
                <a href="assets/img/countries/kota-kinabalu.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/countries/vietnam.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Vietnam</h4>
                <p>Asean</p>
                <a href="assets/img/countries/vietnam.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/countries/langkawi.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Langkawi</h4>
                <p>Peninsular Malaysia</p>
                <a href="assets/img/countries/langkawi.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tawau</h4>
                <p>East Malaysia</p>
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kuching</h4>
                <p>East Malaysia</p>
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Brunei Darussalam</h4>
                <p>Asean</p>
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

          </div>

        </div>
      </section>

      @endsection
