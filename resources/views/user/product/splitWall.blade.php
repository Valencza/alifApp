@extends('layouts.app')

@section('content')

<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div
        class="breadcrumbs d-flex align-items-center"
        style="
          background-image: url('assets/img/product-header.JPG');
        "
      >
        <div
          class="container position-relative d-flex flex-column align-items-center"
        >
          <h1>Products</h1>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="product">Product</a></li>
            <li>Products</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= Products Section ======= -->
      <section id="products" class="products sections-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Products</h2>
            <!-- <p>
              Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum
              nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti
            </p> -->
          </div>

          <div data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul class="products-flters">
                <!-- <li data-filter="*" class="filter-active">All</li> -->
                <li data-filter=".filter-split-wall">Split Wall</li>
                <li data-filter=".filter-ac-combo">AC Combo</li>
                <li data-filter=".filter-standing-floor">Standing Floor</li>
              </ul>
            </div>
            <!-- End Products Filters -->

            <div class="row gy-4 products-container">
              <!-- Split Wall ========================================== -->

              <div class="col-lg-4 col-md-6 products-item filter-split-wall">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/split-wall/gree/c3es-low-watt-series1.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/split-wall/gree/c3es-low-watt-series1.jpg') }}"
                      class="img-fluid"
                      alt="Gree - C3ES Low Watt Series"
                  /></a>
                  <div class="products-info">
                    <h4>Gree - C3ES Low Watt Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div class="col-lg-4 col-md-6 products-item filter-split-wall">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/split-wall/gree/f1s-inverter-series3.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/split-wall/gree/f1s-inverter-series3.jpg') }}"
                      class="img-fluid"
                      alt="Gree - F1S Inverter Series"
                  /></a>
                  <div class="products-info">
                    <h4>Gree - F1S Inverter Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div class="col-lg-4 col-md-6 products-item filter-split-wall">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/split-wall/gree/f5s-inverter-series2.png"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/split-wall/gree/f5s-inverter-series2.png') }}"
                      class="img-fluid"
                      alt="Gree - F5s Inverter Series"
                  /></a>
                  <div class="products-info">
                    <h4>Gree - F5s Inverter Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div class="col-lg-4 col-md-6 products-item filter-split-wall">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/split-wall/gree/moo5s-standard-series1.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/split-wall/gree/moo5s-standard-series1.jpg') }}"
                      class="img-fluid"
                      alt="Gree - MOO5s Standard Series"
                  /></a>
                  <div class="products-info">
                    <h4>Gree - MOO5s Standard Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div class="col-lg-4 col-md-6 products-item filter-split-wall">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/split-wall/gree/p1-portable-series1.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/split-wall/gree/p1-portable-series1.jpg') }}"
                      class="img-fluid"
                      alt="Gree - P1 Portable Series"
                  /></a>
                  <div class="products-info">
                    <h4>Gree - P1 Portable Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <!-- Daikin Split Wall -->
              <div class="col-lg-4 col-md-6 products-item filter-split-wall">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/split-wall/daikin/premium-inverter.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/split-wall/daikin/premium-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Daikin - Premium Inverter FTKM Series"
                  /></a>
                  <div class="products-info">
                    <h4>Daikin - Premium Inverter FTKM Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div class="col-lg-4 col-md-6 products-item filter-split-wall">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/split-wall/daikin/star-inverter.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/split-wall/daikin/star-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Daikin - Star Inverter FTKC Series"
                  /></a>
                  <div class="products-info">
                    <h4>Daikin - Star Inverter FTKC Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div class="col-lg-4 col-md-6 products-item filter-split-wall">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/split-wall/daikin/flash-inverter.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/split-wall/daikin/flash-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Daikin - FLASH Inverter FTKQ Series"
                  /></a>
                  <div class="products-info">
                    <h4>Daikin - FLASH Inverter FTKQ Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div class="col-lg-4 col-md-6 products-item filter-split-wall">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/split-wall/daikin/evo-inverter.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/split-wall/daikin/evo-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Daikin - EVO Inverter FTKF Series"
                  /></a>
                  <div class="products-info">
                    <h4>Daikin - EVO Inverter FTKF Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div class="col-lg-4 col-md-6 products-item filter-split-wall">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/split-wall/daikin/lite-no-inverter.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/split-wall/daikin/lite-no-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Daikin - Super Mini Split FTC Series"
                  /></a>
                  <div class="products-info">
                    <h4>Daikin - Super Mini Split FTC Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div class="col-lg-4 col-md-6 products-item filter-split-wall">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/split-wall/daikin/premium-inverter.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/split-wall/daikin/premium-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Daikin - Lite FTV Series"
                  /></a>
                  <div class="products-info">
                    <h4>Daikin - Lite FTV Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div class="col-lg-4 col-md-6 products-item filter-split-wall">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/split-wall/daikin/breeze-no-inverter.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/split-wall/daikin/breeze-no-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Daikin - Breeze BREEZE Series"
                  /></a>
                  <div class="products-info">
                    <h4>Daikin - Breeze BREEZE Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <!-- ==================End Split Wall============= -->

              <!-- ==================AC Combo=================== -->

              <div class="col-lg-4 col-md-6 products-item filter-ac-combo">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/ac-combo/gree/combo-split-series2.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ac-combo/gree/combo-split-series2.jpg') }}"
                      class="img-fluid"
                      alt="Gree - Combo Split Series"
                  /></a>
                  <div class="products-info">
                    <h4>Gree - Combo Split Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div class="col-lg-4 col-md-6 products-item filter-ac-combo">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/ac-combo/daikin/multi-s-2.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ac-combo/daikin/multi-s-2.jpg') }}"
                      class="img-fluid"
                      alt="Daikin - Multi S 2 MKC Series"
                  /></a>
                  <div class="products-info">
                    <h4>Daikin - Multi S 2 MKC Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div class="col-lg-4 col-md-6 products-item filter-ac-combo">
                <div class="products-wrap">
                  <a
                    href="assets/img/product/ac-combo/daikin/multi-s-3.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ac-combo/daikin/multi-s-3.jpg') }}"
                      class="img-fluid"
                      alt="Daikin - Multi S 3 MKC Series"
                  /></a>
                  <div class="products-info">
                    <h4>Daikin - Multi S 3 MKC Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <!-- ===================End AC Combo=============== -->

              <!-- ==================Standing Floor=================== -->
              <!-- Gree Standing Floor===================== -->
              <div
                class="col-lg-4 col-md-6 products-item filter-standing-floor"
              >
                <div class="products-wrap">
                  <a
                    href="assets/img/product/standing-floor/gree/floor-standing.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/standing-floor/gree/floor-standing.jpg') }}"
                      class="img-fluid"
                      alt="Gree - Floor Standing"
                  /></a>
                  <div class="products-info">
                    <h4>Gree - Floor Standing</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div
                class="col-lg-4 col-md-6 products-item filter-standing-floor"
              >
                <div class="products-wrap">
                  <a
                    href="assets/img/product/standing-floor/gree/floor-standing-10pk1.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/standing-floor/gree/floor-standing-10pk1.jpg') }}"
                      class="img-fluid"
                      alt="Gree - Floor Standing 10PK"
                  /></a>
                  <div class="products-info">
                    <h4>Gree - Floor Standing 10PK</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div
                class="col-lg-4 col-md-6 products-item filter-standing-floor"
              >
                <div class="products-wrap">
                  <a
                    href="assets/img/product/standing-floor/gree/freair-floor-standing-series1.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/standing-floor/gree/freair-floor-standing-series1.jpg') }}"
                      class="img-fluid"
                      alt="Gree - Free Air Floor Standing Series"
                  /></a>
                  <div class="products-info">
                    <h4>Gree - Free Air Floor Standing Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div
                class="col-lg-4 col-md-6 products-item filter-standing-floor"
              >
                <div class="products-wrap">
                  <a
                    href="assets/img/product/standing-floor/gree/sts-floor-standing-series.png"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/standing-floor/gree/sts-floor-standing-series.png') }}"
                      class="img-fluid"
                      alt="Gree - STS Floor Standing Series"
                  /></a>
                  <div class="products-info">
                    <h4>Gree - STS Floor Standing Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->

              <div
                class="col-lg-4 col-md-6 products-item filter-standing-floor"
              >
                <div class="products-wrap">
                  <a
                    href="assets/img/product/standing-floor/gree/ts-floor-standing-series.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/standing-floor/gree/ts-floor-standing-series.jpg') }}"
                      class="img-fluid"
                      alt="Gree - TS Floor Standing Series"
                  /></a>
                  <div class="products-info">
                    <h4>Gree - TS Floor Standing Series</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Products Item -->
              <!-- End Gree Standing Floor===================== -->

              <!-- Daikin Standing Floor===================== -->
              <!-- Daikin - AC Floor Standing Standard Malaysia (Remote Wireless) (3 Phase) - RR71CXY14 -->
              <div
                class="col-lg-4 col-md-6 products-item filter-standing-floor"
              >
                <div class="products-wrap">
                  <a
                    href="assets/img/product/standing-floor/daikin/daikin-floor-standing-standard-malaysia.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/standing-floor/daikin/daikin-floor-standing-standard-malaysia.jpg') }}"
                      class="img-fluid"
                      alt="Daikin - AC Floor Standing Standard Malaysia (Remote
                      Wireless) (3 Phase)"
                  /></a>
                  <div class="products-info">
                    <h4>
                      Daikin - AC Floor Standing Standard Malaysia (Remote
                      Wireless) (3 Phase) - RR71CXY14
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>

              <!-- Daikin - AC Floor Standing Standard Malaysia (Remote Wired) (3 Phase) - RR71CXY14 -->
              <div
                class="col-lg-4 col-md-6 products-item filter-standing-floor"
              >
                <div class="products-wrap">
                  <a
                    href="assets/img/product/standing-floor/daikin/daikin-floor-standing-standard-malaysia.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/standing-floor/daikin/daikin-floor-standing-standard-malaysia.jpg') }}"
                      class="img-fluid"
                      alt=" Daikin - AC Floor Standing Standard Malaysia"
                  /></a>
                  <div class="products-info">
                    <h4>
                      Daikin - AC Floor Standing Standard Malaysia (Remote
                      Wired) (3 Phase) - RR71CXY14
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>

              <!-- Daikin - AC Floor Standing Inverter Thailand (Remote Wireless) - RZF60CVM4 -->
              <div
                class="col-lg-4 col-md-6 products-item filter-standing-floor"
              >
                <div class="products-wrap">
                  <a
                    href="assets/img/product/standing-floor/daikin/daikin-floor-standing-standard-malaysia.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/standing-floor/daikin/daikin-floor-standing-standard-malaysia.jpg') }}"
                      class="img-fluid"
                      alt="Daikin - AC Floor Standing Inverter Thailand"
                  /></a>
                  <div class="products-info">
                    <h4>
                      Daikin - AC Floor Standing Inverter Thailand (Remote
                      Wireless) - RZF60CVM4
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>

              <!-- Daikin - AC Floor Standing Inverter Thailand (Remote Wired) - RZF60CVM4 -->
              <div
                class="col-lg-4 col-md-6 products-item filter-standing-floor"
              >
                <div class="products-wrap">
                  <a
                    href="assets/img/product/standing-floor/daikin/daikin-floor-standing-standard-malaysia.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/standing-floor/daikin/daikin-floor-standing-standard-malaysia.jpg') }}"
                      class="img-fluid"
                      alt=" Daikin - AC Floor Standing Inverter Thailand"
                  /></a>
                  <div class="products-info">
                    <h4>
                      Daikin - AC Floor Standing Inverter Thailand (Remote
                      Wired) - RZF60CVM4
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>

              <!-- Daikin - AC Floor Standing Inverter Thailand (Remote Wired) - RZF60CVM4 -->
              <div
                class="col-lg-4 col-md-6 products-item filter-standing-floor"
              >
                <div class="products-wrap">
                  <a
                    href="assets/img/product/standing-floor/daikin/daikin-ac-packaged-direct-air-blow-inverter.jpg"
                    data-gallery="products-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/standing-floor/daikin/daikin-ac-packaged-direct-air-blow-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Daikin - AC PAckaged Floor Standing Direct Air Blow
                      Inverter Thailand"
                  /></a>
                  <div class="products-info">
                    <h4>
                      Daikin - AC PAckaged Floor Standing Direct Air Blow
                      Inverter Thailand R410A (3 Phase) - RZUR250PY14
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End Daikin Standing Floor===================== -->
              <!-- ==================End Standing Floor=================== -->
            </div>
            <!-- End Products Container -->
          </div>
        </div>
      </section>
      <!-- End Products Section -->

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