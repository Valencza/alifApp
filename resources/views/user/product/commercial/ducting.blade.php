@extends('layouts.app')

@section('content')

<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div
        class="breadcrumbs d-flex align-items-center"
        style="
          background-image: url('assets/img/ducting-header.png');
        "
      >
        <div
          class="container position-relative d-flex flex-column align-items-center"
        >
          <h1>Ducting</h1>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="product">Product</a></li>
            <li>Ducting</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= Ducting Section ======= -->
      <section id="ducting" class="ducting sections-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Ducting</h2>
            <!-- <p>
              Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum
              nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti
            </p> -->
          </div>

          <div
            class="ducting-isotope"
            data-ducting-filter="*"
            data-ducting-layout="masonry"
            data-ducting-sort="original-order"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div>
              <div class="col-lg-12 d-flex justify-content-center">
                <ul class="ducting-filters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-daikin">Daikin</li>
                  <li data-filter=".filter-gree">Gree</li>
                </ul>
              </div>
              <!-- End ducting Filters -->
            </div>

            <div class="row gy-4 ducting-container">
              <!-- ==================ducting Gree=================== -->
              <!-- Gree AC Ceiling Ducted Standard 1 PK-GU26PS/A-K-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Ceiling Ducted Standard"
                  /></a>
                  <div class="ducting-info">
                    <h4>Gree AC Ceiling Ducted Standard 1 PK-GU26PS/A-K</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Ceiling Ducted Standard 1 1/2 PK-GU35PS/A-K-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Ceiling Ducted Standard"
                  /></a>
                  <div class="ducting-info">
                    <h4>Gree AC Ceiling Ducted Standard 1 1/2 PK-GU35PS/A-K</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Ceiling Ducted Standard 2 PK-GU50PS/A-K-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Ceiling Ducted Standard"
                  /></a>
                  <div class="ducting-info">
                    <h4>Gree AC Ceiling Ducted Standard 2 PK-GU50PS/A-K</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Ceiling Ducted Inverter 1 PK-GUD35PS/A-S-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-inverter.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-inverter.jpg') }}"
                      class="img-fluid"
                      alt="gree ac ducting inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>Gree AC Ceiling Ducted Inverter 1 PK-GUD35PS/A-S</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Ceiling Ducted Standard 3 PK-GU71PS/A-K-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Ceiling Ducted Standard"
                  /></a>
                  <div class="ducting-info">
                    <h4>Gree AC Ceiling Ducted Standard 3 PK-GU71PS/A-K</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Ceiling Ducted Inverter 2 PK-GUD50PS/A-S-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-inverter.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Ceiling Ducted Inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>Gree AC Ceiling Ducted Inverter 2 PK-GUD50PS/A-S</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Ceiling Ducted Inverter 3 PK-GUD71PS/A-S-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-inverter.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Ceiling Ducted Inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>Gree AC Ceiling Ducted Inverter 3 PK-GUD71PS/A-S</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Ceiling Ducted Standard 4 PK (3 Phase)-GUD100PhS/A-K-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-inverter.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Ceiling Ducted Standard"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Gree AC Ceiling Ducted Standard 4 PK (3
                      Phase)-GUD100PHS/A-K
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Ceiling Ducted Standard 4 1/2 PK (3 Phase)-GUD125PHS/A-K-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-inverter.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Ceiling Ducted Standard"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Gree AC Ceiling Ducted Standard 4 1/2 PK (3
                      Phase)-GUD125PHS/A-K
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Ceiling Ducted Standard 5 PK (3 Phase)-GUD140PHS/A-K-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-inverter.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Ceiling Ducted Standard"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Gree AC Ceiling Ducted Standard 5 PK (3
                      Phase)-GUD140PHS/A-K
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Ceiling Ducted Inverter 4 PK-GUD125PHS/A-S-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-inverter.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Ceiling Ducted Inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>Gree AC Ceiling Ducted Inverter 4 PK-GUD125PHS/A-S</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Ceiling Ducted Standard 6 PK (3 Phase)-GUD160PHS/A-K-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-inverter.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Ceiling Ducted Standard"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Gree AC Ceiling Ducted Standard 6 PK (3
                      Phase)-GUD160PHS/A-K
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Ceiling Ducted Inverter 5 PK-GUD140PHS/A-S-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-inverter.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Ceiling Ducted Inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>Gree AC Ceiling Ducted Inverter 5 PK-GUD140PHS/A-S</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Big Duct Inverter Series R410A 8 PK-FGR20Pd/Dna-X-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-big.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-big.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Big Duct Inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Gree AC Big Duct Inverter Series R410A 8 PK-FGR20Pd/Dna-X
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Big Duct Inverter Series R410A 10 PK-FGR25Pd/Dna-X-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-big.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-big.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Big Duct Inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Gree AC Big Duct Inverter Series R410A 10 PK-FGR25Pd/Dna-X
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Big Duct Inverter Series R410A 12 PK-FGR30Pd/Dna-X-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-big.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-big.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Big Duct Inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Gree AC Big Duct Inverter Series R410A 12 PK-FGR30Pd/Dna-X
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Big Duct Inverter Series R410A 15 PK-FGR40Pd/Dna-X-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-big.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-big.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Big Duct Inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Gree AC Big Duct Inverter Series R410A 15 PK-FGR40Pd/Dna-X
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Big Duct Non Inverter Series R410A 18 PK-FGR50Pd/Bna-M-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-big.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-big.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Big Duct Non Inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Gree AC Big Duct Non Inverter Series R410A 18
                      PK-FGR50Pd/Bna-M
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Gree AC Big Duct Non Inverter Series R410A 18 PK-FGR50Pd/Bna-M-->
              <div class="col-lg-4 col-md-6 ducting-item filter-gree">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/gree-ac-ducting-big.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/gree-ac-ducting-big.jpg') }}"
                      class="img-fluid"
                      alt="Gree AC Big Duct Non Inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Gree AC Big Duct Non Inverter Series R410A 22
                      PK-FGR60Pd/Bna-M
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->
              <!-- ===================End Ducting Gree=============== -->

              <!-- ==================Ducting Daikin=================== -->

              <!-- Daikin AC Ceiling Ducted Standard Thailand (Remote Wired)-->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-ducting-thai.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-ducting-thai.jpg') }}"
                      class="img-fluid"
                      alt="Daikin AC Ceiling Ducted Standard Thailand"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Daikin AC Ceiling Ducted Standard Thailand (Remote Wired)
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Daikin AC Ceiling Ducted Standard Thailand (Remote Wireless)-->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-ducting-thai.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-ducting-thai.jpg') }}"
                      class="img-fluid"
                      alt="Daikin AC Ceiling Ducted Standard Thailand"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Daikin AC Ceiling Ducted Standard Thailand (Remote
                      Wireless)
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Daikin AC Ceiling Ducted Inverter Thailand (Remote Wired)-->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-ducting-inverter-thai.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-ducting-inverter-thai.jpg') }}"
                      class="img-fluid"
                      alt="Daikin AC Ceiling Ducted Inverter Thailand"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Daikin AC Ceiling Ducted Inverter Thailand (Remote Wired)
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Daikin AC Ceiling Ducted Inverter Thailand (Remote Wireless)-->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-ducting-inverter-thai.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-ducting-inverter-thai.jpg') }}"
                      class="img-fluid"
                      alt="Daikin AC Ceiling Ducted Inverter Thailand"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Daikin AC Ceiling Ducted Inverter Thailand (Remote
                      Wireless)
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Daikin AC Ceiling Ducted Malaysia (Remote Wired)-->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-ducting-malaysia.jpeg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-ducting-malaysia.jpeg') }}"
                      class="img-fluid"
                      alt="Daikin AC Ceiling Ducted Malaysia"
                  /></a>
                  <div class="ducting-info">
                    <h4>Daikin AC Ceiling Ducted Malaysia (Remote Wired)</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Daikin AC Ceiling Ducted Malaysia (Remote Wireless)-->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-ducting-malaysia.jpeg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-ducting-malaysia.jpeg') }}"
                      class="img-fluid"
                      alt="Daikin AC Ceiling Ducted Malaysia"
                  /></a>
                  <div class="ducting-info">
                    <h4>Daikin AC Ceiling Ducted Malaysia (Remote Wireless)</h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Daikin AC Packaged Split Duct V Series Vertical Non-Inverter 8PK-10PK R410A -->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-packaged-split-duct-vertikal.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-packaged-split-duct-vertikal.jpg') }}"
                      class="img-fluid"
                      alt="Daikin AC Packaged Split Duct V Series Vertical
                      Non-Inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Daikin AC Packaged Split Duct V Series Vertical
                      Non-Inverter 8PK-10PK R410A
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Daikin AC Packaged Split Duct V Series Vertical Non-Inverter 13PK-15PK R410A -->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-packaged-split-duct-vertikal-2.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-packaged-split-duct-vertikal-2.jpg') }}"
                      class="img-fluid"
                      alt="Daikin AC Packaged Split Duct V Series Vertical
                      Non-Inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Daikin AC Packaged Split Duct V Series Vertical
                      Non-Inverter 13PK-15PK R410A
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Daikin AC Packaged Split Duct V Series Vertical Non-Inverter 2 Kombinasi 20PK-60PK  R410A -->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-packaged-split-duct-vertikal-non-inverter.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-packaged-split-duct-vertikal-non-inverter.jpg') }}"
                      class="img-fluid"
                      alt="Daikin AC Packaged Split Duct V Series Vertical
                      Non-Inverter 2 Kombinasi"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Daikin AC Packaged Split Duct V Series Vertical
                      Non-Inverter 2 Kombinasi 20PK-60PK R410A
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Daikin AC Packaged Air Cooled Rooftop Non Inverter R410A (3 Phase) -->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-packaged-cooled-rooftop.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-packaged-cooled-rooftop.jpg') }}"
                      class="img-fluid"
                      alt="Daikin AC Packaged Air Cooled Rooftop Non Inverter"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Daikin AC Packaged Air Cooled Rooftop Non Inverter R410A
                      (3 Phase)
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Daikin AC Packaged Split Duct Inverter Thailand 8PK-10PK R410A (3 Phase) -->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-packaged-duct-thailand.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-packaged-duct-thailand.jpg') }}"
                      class="img-fluid"
                      alt="Daikin AC Packaged Split Duct Inverter Thailand"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Daikin AC Packaged Split Duct Inverter Thailand 8PK-10PK
                      R410A (3 Phase)
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Daikin AC Packaged Split Duct Inverter Thailand 16PK R410A (3 Phase) -->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-packaged-duct-thailand-16pk.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-packaged-duct-thailand-16pk.jpg') }}"
                      class="img-fluid"
                      alt="Daikin AC Packaged Split Duct Inverter Thailand"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Daikin AC Packaged Split Duct Inverter Thailand 16PK R410A
                      (3 Phase)
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Daikin AC Packaged Split Duct Inverter Thailand 20PK R410A (3 Phase) -->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-packaged-duct-thailand-20pk-up.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-packaged-duct-thailand-20pk-up.jpg') }}"
                      class="img-fluid"
                      alt="Daikin AC Packaged Split Duct Inverter Thailand"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Daikin AC Packaged Split Duct Inverter Thailand 20PK R410A
                      (3 Phase)
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- Daikin AC Packaged Floor Standing Duct Connection Blow Inverter Thailand R410A (3 Phase)-->
              <div class="col-lg-4 col-md-6 ducting-item filter-daikin">
                <div class="ducting-wrap">
                  <a
                    href="assets/img/product/ducting/daikin-ac-packaged-floor-standing-duct.jpg"
                    data-gallery="ducting-gallery-app"
                    class="glightbox"
                    ><img
                      src="{{ asset('assets/img/product/ducting/daikin-ac-packaged-floor-standing-duct.jpg') }}"
                      class="img-fluid"
                      alt="Daikin AC Packaged Floor Standing Duct Connection Blow
                      Inverter Thailand"
                  /></a>
                  <div class="ducting-info">
                    <h4>
                      Daikin AC Packaged Floor Standing Duct Connection Blow
                      Inverter Thailand R410A (3 Phase)
                    </h4>
                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  </div>
                </div>
              </div>
              <!-- End ducting Item -->

              <!-- ==================End Ducting Daikin=================== -->
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
                  src="{{ asset('{{asset ('assets/img/clients/client-10.png') }}') }}"
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