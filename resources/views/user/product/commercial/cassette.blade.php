@extends('layouts.app')

@section('content')

<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div
        class="breadcrumbs d-flex align-items-center"
        style="
          background-image: url('assets/img/cassette-header.jpg');
        "
      >
        <div
          class="container position-relative d-flex flex-column align-items-center"
        >
          <h1>Cassette</h1>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="product">Product</a></li>
            <li>Cassette</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= cassette Section ======= -->
      <section id="cassette" class="cassette sections-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Cassette</h2>
            <!-- <p>
              Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum
              nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti
            </p> -->
          </div>

          <div
            class="cassette-isotope"
            data-cassette-filter="*"
            data-cassette-layout="masonry"
            data-cassette-sort="original-order"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div>
              <div class="col-lg-12 d-flex justify-content-center">
                <ul class="cassette-filters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-daikin">Daikin</li>
                  <li data-filter=".filter-gree">Gree</li>
                </ul>
              </div>
              <!-- End cassette Filters -->
            </div>

            <div class="row gy-4 cassette-container">
              <!-- ==================Cassette Gree=================== -->
              <!-- GUD50T/A-K -->
              <div class="col-lg-4 col-md-6 cassette-item filter-gree">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/gree/cassette.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/gree/cassette.jpg') }}"
                      class="img-fluid"
                      alt="cassette gree non inverter"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Gree AC Cassette Standard Non Inverter 2 PK-GUD50T/A-K
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- GUD35T/A-S -->
              <div class="col-lg-4 col-md-6 cassette-item filter-gree">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/gree/cassette-inverter.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/gree/cassette-inverter.jpg') }}"
                      class="img-fluid"
                      alt="cassette gree inverter"
                  /></a>
                  <div class="cassette-info">
                    <h4>Gree AC Cassette Inverter 1 1/2 PK-GUD35T/A-S</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- GUD71T/A-K -->
              <div class="col-lg-4 col-md-6 cassette-item filter-gree">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/gree/cassette.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/gree/cassette.jpg') }}"
                      class="img-fluid"
                      alt="cassette gree non inverter"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Gree AC Cassette Standard Non Inverter 3 PK-GUD71T/A-K
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- GUD50T/A-S -->
              <div class="col-lg-4 col-md-6 cassette-item filter-gree">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/gree/cassette-inverter.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/gree/cassette-inverter.jpg') }}"
                      class="img-fluid"
                      alt="cassette gree inverter"
                  /></a>
                  <div class="cassette-info">
                    <h4>Gree AC Cassette Inverter 2 PK-GUD50T/A-S</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- GUD71T/A-S -->
              <div class="col-lg-4 col-md-6 cassette-item filter-gree">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/gree/cassette-inverter.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/gree/cassette-inverter.jpg') }}"
                      class="img-fluid"
                      alt="cassette gree inverter"
                  /></a>
                  <div class="cassette-info">
                    <h4>Gree AC Cassette Inverter 3 PK-GUD71T/A-S</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- GUD100T/A-K -->
              <div class="col-lg-4 col-md-6 cassette-item filter-gree">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/gree/cassette.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/gree/cassette.jpg') }}"
                      class="img-fluid"
                      alt="cassette gree non inverter"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Gree AC Cassette Standard Non Inverter 4 PK (3
                      Phase)-GUD100T/A-K
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- GUD125T/A-K -->
              <div class="col-lg-4 col-md-6 cassette-item filter-gree">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/gree/cassette.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/gree/cassette.jpg') }}"
                      class="img-fluid"
                      alt="cassette gree non inverter"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Gree AC Cassette Standard Non Inverter 4 1/2 PK (3
                      Phase)-GUD125T/A-K
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- GUD125T/A-S -->
              <div class="col-lg-4 col-md-6 cassette-item filter-gree">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/gree/cassette-inverter.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/gree/cassette-inverter.jpg') }}"
                      class="img-fluid"
                      alt="cassette gree inverter"
                  /></a>
                  <div class="cassette-info">
                    <h4>Gree AC Cassette Inverter 4 1/2 PK-GUD125T/A-S</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- GUD140T/A-K -->
              <div class="col-lg-4 col-md-6 cassette-item filter-gree">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/gree/cassette.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/gree/cassette.jpg') }}"
                      class="img-fluid"
                      alt="cassette gree non inverter"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Gree AC Cassette Standard Non Inverter 5 PK (3
                      Phase)-GUD140T/A-K
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- GUD160T/A-K -->
              <div class="col-lg-4 col-md-6 cassette-item filter-gree">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/gree/cassette.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/gree/cassette.jpg') }}"
                      class="img-fluid"
                      alt="cassette gree non inverter"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Gree AC Cassette Standard Non Inverter 6 PK (3
                      Phase)-GUD160T/A-K
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- GUD140T/A-S -->
              <div class="col-lg-4 col-md-6 cassette-item filter-gree">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/gree/cassette-inverter.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/gree/cassette-inverter.jpg') }}"
                      class="img-fluid"
                      alt="cassette gree inverter"
                  /></a>
                  <div class="cassette-info">
                    <h4>Gree AC Cassette Inverter 5 PK-GUD140T/A-S</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->
              <!-- ===================End Cassette Gree=============== -->

              <!-- ==================Cassette Daikin=================== -->

              <!-- Standard Thailand (Remote Wired)-->
              <div class="col-lg-4 col-md-6 cassette-item filter-daikin">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/Daikin/cassette-thailand.jpeg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/Daikin/cassette-thailand.jpeg') }}"
                      class="img-fluid"
                      alt="Cassette daikin standard thailand"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Daikin AC Cassette Standard Thailand (Remote
                      Wired)-FCNQ13MV14 + RNQ13MV14
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- Daikin AC Cassette Standard Thailand (Remote Wireless) -->
              <div class="col-lg-4 col-md-6 cassette-item filter-daikin">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/Daikin/cassette-thailand.jpeg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/Daikin/cassette-thailand.jpeg') }}"
                      class="img-fluid"
                      alt="Cassette daikin standard thailand"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Daikin AC Cassette Standard Thailand (Remote
                      Wireless)-FCNQ13MV14 + RNQ13MV14
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- Daikin AC Cassette Inverter Thailand (Remote Wired) -->
              <div class="col-lg-4 col-md-6 cassette-item filter-daikin">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/Daikin/cassette-inverter-thailand.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/Daikin/cassette-inverter-thailand.jpg') }}"
                      class="img-fluid"
                      alt="Cassette daikin standard thailand"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Daikin AC Cassette Inverter Thailand (Remote
                      Wired)-FCFC40DVM4+RZFC40DVM4
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- Daikin AC Cassette Inverter Thailand (Remote Wireless) -->
              <div class="col-lg-4 col-md-6 cassette-item filter-daikin">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/Daikin/cassette-inverter-thailand.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/Daikin/cassette-inverter-thailand.jpg') }}"
                      class="img-fluid"
                      alt="Cassette daikin Inverter thailand"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Daikin AC Cassette Inverter Thailand (Remote
                      Wireless)-FCFC40DVM4+RZFC40DVM4
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- Daikin AC Cassette Standard Malaysia (Remote Wired) -->
              <div class="col-lg-4 col-md-6 cassette-item filter-daikin">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/Daikin/cassette-malaysia-standard.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/Daikin/cassette-malaysia-standard.jpg') }}"
                      class="img-fluid"
                      alt="Cassette daikin standard Malaysia"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Daikin AC Cassette Standard Malaysia (Remote
                      Wired)-FCC50AV14+RC50AV14
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- Daikin AC Cassette Standard Malaysia (Remote Wireless) -->
              <div class="col-lg-4 col-md-6 cassette-item filter-daikin">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/Daikin/cassette-malaysia-standard.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/Daikin/cassette-malaysia-standard.jpg') }}"
                      class="img-fluid"
                      alt="Cassette daikin standard Malaysia"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Daikin AC Cassette Standard Malaysia (Remote
                      Wireless)-FCC60AV14+RC60AV14
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- Daikin AC Surround Cassette Kiriu Malaysia (Remote Wired) -->
              <div class="col-lg-4 col-md-6 cassette-item filter-daikin">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/Daikin/cassette-kiriu-malaysia.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/Daikin/cassette-kiriu-malaysia.jpg') }}"
                      class="img-fluid"
                      alt="surrond Cassette 360 daikin kiriu skyair inverter"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Daikin AC Surround Cassette Kiriu SkyAir Smart Inverter
                      Malaysia R32 (Remote Wired)-FCFG50AV14+RZFG50AGV14
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->

              <!-- Daikin AC Cassette Standard Malaysia (Remote Wireless) -->
              <div class="col-lg-4 col-md-6 cassette-item filter-daikin">
                <div class="cassette-wrap">
                  <a
                    href="assets/img/product/cassette/Daikin/cassette-kiriu-malaysia.jpg"
                    data-gallery="cassette-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/cassette/Daikin/cassette-kiriu-malaysia.jpg') }}"
                      class="img-fluid"
                      alt="surrond Cassette 360 daikin kiriu skyair inverter"
                  /></a>
                  <div class="cassette-info">
                    <h4>
                      Daikin AC Surround Cassette Kiriu SkyAir Smart Inverter
                      Malaysia R32 (Remote Wireless)-FCFG50AV14+RZFG50AGV14
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End cassette Item -->
              <!-- ==================End Cassette Daikin=================== -->
            </div>
            <!-- End commercial Container -->
            <!-- <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div> -->
            <!-- End blog pagination -->
          </div>
        </div>
      </section>
      <!-- End commercial Section -->

      <!-- Client -->
      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Our Clients</h2>
            <p>Pelanggan Setia Coolze</p>
          </header>

          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-1.png') }}"
                  class="img-fluid"
                  alt="Japfa Comfeed Indonesia"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-13.png') }}"
                  class="img-fluid"
                  alt="PT. Prima Food International"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-11.png') }}"
                  class="img-fluid"
                  alt="Cooler City"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-12.png') }}"
                  class="img-fluid"
                  alt="Edu Center Indonesia"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-14.png') }}"
                  class="img-fluid"
                  alt="PT. MONIER"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-4.png') }}"
                  class="img-fluid"
                  alt="Divatama Intiperintis Indopaper"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-3.png') }}"
                  class="img-fluid"
                  alt="Old Chang Kee"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-5.png') }}"
                  class="img-fluid"
                  alt="Omija"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-2.png') }}"
                  class="img-fluid"
                  alt="Cipta Perkasa Metalindo"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-6.png') }}"
                  class="img-fluid"
                  alt="Summarecon Mall Serpong"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-7.png') }}"
                  class="img-fluid"
                  alt="Sinarmas Land"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-8.png') }}"
                  class="img-fluid"
                  alt="Triniti Land"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-9.png') }}"
                  class="img-fluid"
                  alt="Ciputra Group"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{ asset('assets/img/clients/client-10.png') }}"
                  class="img-fluid"
                  alt="Paramount Land"
                />
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Clients Section -->
    </main>

@endsection