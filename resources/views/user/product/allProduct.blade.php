@extends('layouts.app')

@section('content')

<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div
        class="breadcrumbs d-flex align-items-center"
        style="
          background-image: url('{{asset ('assets/img/product-header.JPG') }}');
        "
      >
        <div
          class="container position-relative d-flex flex-column align-items-center"
        >
          <h1>Product</h1>
          <ol>
            <li><a href="{{route ('home') }}">Home</a></li>
            <li>All Product</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= ProductSection ======= -->
      <section id="product" class="product">
        <!-- Commercial AC -->
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Commercial AC</h2>
          </div>

          <div class="row gy-4">
            <!-- VRV -->
            <div
              class="col-lg-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="product-item">
                <a href="{{route ('product.commercial.vrv') }}">
                  <div class="item-img">
                    <img
                      src="{{asset ('assets/img/product/vrv-product.jpg') }}"
                      class="img-product"
                      alt="Daikin VRV"
                    />
                  </div>
                </a>
                <a href="{{route ('product.commercial.vrv') }}">
                  <div class="item-info">
                    <h4>VRV</h4>
                    <span>VRV Detail</span>
                  </div>
                </a>
              </div>
            </div>
            <!-- End product Member -->

            <!-- VRF -->
            <div
              class="col-lg-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="product-item">
                <!-- Link for the image -->
                <a href="{{route ('product.commercial.vrv') }}">
                  <div class="item-img">
                    <img
                      src="{{asset ('assets/img/product/vrf-product.jpg') }}"
                      class="img-product"
                      alt="VRF Gree"
                    />
                  </div>
                </a>
                <!-- Link for the item info -->
                <a href="{{route ('product.commercial.vrv') }}">
                  <div class="item-info">
                    <h4>VRF</h4>
                    <span>VRF Detail</span>
                  </div>
                </a>
              </div>
            </div>
            <!-- End product Member -->

            <!-- Cassette -->
            <div
              class="col-lg-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="product-item">
                <!-- Link for the image -->
                <a href="{{route ('product.commercial.cassette') }}">
                  <div class="item-img">
                    <img
                      src="{{asset ('assets/img/product/cassette-product.jpg') }}"
                      class="img-product"
                      alt="Coolze Cassette"
                    />
                  </div>
                </a>
                <!-- Link for the item info -->
                <a href="{{route ('product.commercial.cassette') }}">
                  <div class="item-info">
                    <h4>Cassette</h4>
                    <span>Cassette Detail</span>
                  </div>
                </a>
              </div>
            </div>
            <!-- End product Member -->

            <!-- Ducting -->
            <div
              class="col-lg-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="product-item">
                <!-- Link for the image -->
                <a href="{{route ('product.commercial.ducting') }}">
                  <div class="item-img">
                    <img
                      src="{{asset ('assets/img/product/ducting-product.png') }}"
                      class="img-product"
                      alt="Coolze AC Ducting"
                    />
                  </div>
                </a>
                <!-- Link for the item info -->
                <a href="{{route ('product.commercial.ducting') }}">
                  <div class="item-info">
                    <h4>Ducting</h4>
                    <span>Ducting Detail</span>
                  </div>
                </a>
              </div>
            </div>
            <!-- End product Member -->
          </div>
        </div>
      </section>
      <!-- ======End Product Section===== -->

      <!-- ======= ProductSection ======= -->
      <section id="product" class="product">
        <!-- Residential AC -->
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Residential AC</h2>
          </div>

          <div class="row gy-4">
            <!-- Split Wall -->
            <div
              class="col-lg-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="product-item">
                <!-- Link for the image -->
                <a href="{{route ('product.splitWall') }}">
                  <div class="item-img">
                    <img
                      src="{{asset ('assets/img/product/split-wall.jpg') }}"
                      class="img-product"
                      alt="AC Split Wall"
                    />
                  </div>
                </a>
                <!-- Link for the item info -->
                <a href="{{route ('product.splitWall') }}">
                  <div class="item-info">
                    <h4>AC Split Wall</h4>
                    <span>Split Wall Detail</span>
                  </div>
                </a>
              </div>
            </div>
            <!-- End product Member -->

            <!-- AC Combo -->
            <div
              class="col-lg-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="product-item">
                <!-- Link for the image -->
                <a href="{{route ('product.acCombo') }}">
                  <div class="item-img">
                    <img
                      src="{{asset ('assets/img/product/multi-s.jpg') }}"
                      class="img-product"
                      alt="AC Multi S"
                    />
                  </div>
                </a>
                <!-- Link for the item info -->
                <a href="{{route ('product.acCombo') }}">
                  <div class="item-info">
                    <h4>AC Combo</h4>
                    <span>AC Combo Detail</span>
                  </div>
                </a>
              </div>
            </div>
            <!-- End product Member -->

            <!-- Standing Floor -->
            <div
              class="col-lg-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="product-item">
                <!-- Link for the image -->
                <a href="{{route ('product.standingFloor') }}">
                  <div class="item-img">
                    <img
                      src="{{asset ('assets/img/product/floor-standing.jpg') }}"
                      class="img-product"
                      alt="Floor Standing"
                    />
                  </div>
                </a>
                <!-- Link for the item info -->
                <a href="{{route ('product.standingFloor') }}">
                  <div class="item-info">
                    <h4>Standing Floor</h4>
                    <span>Standing Floor</span>
                  </div>
                </a>
              </div>
            </div>
            <!-- End product Member -->
          </div>
        </div>
      </section>
      <!-- ======End Product Section===== -->

      <!-- Brands -->
      <section id="brands" class="brands">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Brand</h2>
            <p>Partner Brand AC Coolze</p>
          </header>

          <div class="brands-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/brand/Gree.png') }}"
                  class="img-fluid"
                  alt="Gree"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/brand/Daikin.png') }}"
                  class="img-fluid"
                  alt="Daikin"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/brand/LG.png') }}"
                  class="img-fluid"
                  alt="LG"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/brand/Mitshubisi.png') }}"
                  class="img-fluid"
                  alt="Mitshubisi"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/brand/Panasonix.png') }}"
                  class="img-fluid"
                  alt="Panasonix"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/brand/Samsung.png') }}"
                  class="img-fluid"
                  alt="Samsung"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/brand/Sharp.png') }}"
                  class="img-fluid"
                  alt="Sharp"
                />
              </div>
              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/brand/Midea.png') }}"
                  class="img-fluid"
                  alt="Midea"
                />
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Brand Section -->

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
                  src="{{asset ('assets/img/clients/client-1.png') }}"
                  class="img-fluid"
                  alt="Japfa Comfeed Indonesia"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-13.png') }}"
                  class="img-fluid"
                  alt="PT. Prima Food International"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-11.png') }}"
                  class="img-fluid"
                  alt="Cooler City"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-12.png') }}"
                  class="img-fluid"
                  alt="Edu Center Indonesia"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-14.png') }}"
                  class="img-fluid"
                  alt="PT. MONIER"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-4.png') }}"
                  class="img-fluid"
                  alt="Divatama Intiperintis Indopaper"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-3.png') }}"
                  class="img-fluid"
                  alt="Old Chang Kee"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-5.png') }}"
                  class="img-fluid"
                  alt="Omija"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-2.png') }}"
                  class="img-fluid"
                  alt="Cipta Perkasa Metalindo"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-6.png') }}"
                  class="img-fluid"
                  alt="Summarecon Mall Serpong"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-7.png') }}"
                  class="img-fluid"
                  alt="Sinarmas Land"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-8.png') }}"
                  class="img-fluid"
                  alt="Triniti Land"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-9.png') }}"
                  class="img-fluid"
                  alt="Ciputra Group"
                />
              </div>

              <div class="swiper-slide">
                <img
                  src="{{asset ('assets/img/clients/client-10.png') }}"
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