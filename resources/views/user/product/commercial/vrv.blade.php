@extends('layouts.app')

@section('content')

<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div
        class="breadcrumbs d-flex align-items-center"
        style="
          background-image: url('{{asset ('assets/img/vrv-header.jpg') }}');
        "
      >
        <div
          class="container position-relative d-flex flex-column align-items-center"
        >
          <h1>VRV</h1>
          <ol>
            <li><a href="{{route ('home') }}">Home</a></li>
            <li><a href="{{route ('product.allProduct') }}">Product</a></li>
            <li>VRV</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <section id="vrv" class="vrv">
        <div class="container section-title" data-aos="fade-up">
          <header class="section-header">
            <h2>DAIKIN AC VRV</h2>
            <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
          </header>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up">
          <div class="row gy-4" data-aos="fade-up">
            <div
              class="col-lg-5 order-lg-1 order-2 d-flex align-items-center justify-content-center"
            >
              <iframe
                width="560px"
                height="400px"
                src="https://www.youtube.com/embed/pp_Sx5Oz578?si=YLsrSO0Bh4VneIni"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
            <div class="col-lg-7 order-lg-2 order-1">
              <div class="content mb-4">
                <p>
                  Teknologi VRV Daikin AC menciptakan efisiensi energi tinggi
                  dan kenyamanan optimal dengan gabungan perangkat keras dan
                  perangkat lunak canggih. Uji operasi presisi, kemudahan
                  komisioning, dan kemampuan penyesuaian konsumsi daya hingga 11
                  tingkat meningkatkan kinerja di berbagai kondisi. Sistem ini
                  juga dilengkapi dengan operasi pencadangan ganda untuk
                  stabilitas dan kemudahan perawatan, memastikan solusi AC yang
                  andal dan efisien.
                </p>
                <div class="brand-images">
                  <div class="brand-logo">
                    <img
                      src="{{asset ('assets/img/brand/Daikin.png') }}"
                      class="img-fluid brand"
                      alt="Daikin"
                      style="
                        max-width: 100px;
                        height: auto;
                        margin-bottom: 12px;
                      "
                    />
                  </div>
                </div>

                <ul>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Advanced Energy
                    Saver
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Ease of Maintenance
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Redundant Backup
                    Operation Capabilities
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="vrv-values" class="vrv">
        <div class="container section-title mb-4" data-aos="fade-up">
          <div class="brand-images">
            <div class="brand-logo">
              <img
                src="{{asset ('assets/img/brand/Daikin.png') }}"
                class="img-fluid brand"
                alt="Daikin"
                style="max-width: 100px; height: auto; margin-bottom: 12px"
              />
            </div>
          </div>
          <h3 style="font-weight: bold">VRV Outdoor</h3>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up">
          <div class="row gy-4 mb-2" data-aos="fade-up">
            <div
              class="col-lg-4 order-1 d-flex align-items-center justify-content-center"
            >
              <img
                src="{{asset ('assets/img/product/vrv/daikin/vrv-x.png') }}"
                class="img-fluid"
                alt="vrv-x"
              />
            </div>
            <div class="col-lg-8 order-2">
              <div class="content ps-lg-5 mb-4">
                <h5 class="mb-3" style="font-weight: bolder">VRV X</h5>
                <ul>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Menggunakan teknologi inverter canggih untuk mengurangi
                    konsumsi energi dibandingkan dengan sistem HVAC tradisional.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>Memungkinkan kontrol
                    suhu yang tepat di setiap zona atau ruangan, meningkatkan
                    kenyamanan dan menghemat energi.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Didisain untuk kehandalan tinggi dan kinerja stabil, bahkan
                    dalam kondisi cuaca ekstrem.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Beroperasi dengan suara yang minim, menciptakan lingkungan
                    dalam yang tenang dan nyaman.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>Dilengkapi dengan
                    sistem kontrol cerdas untuk memantau dan mengendalikan
                    beberapa unit indoor secara terpusat.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Desain modular yang kompak memaksimalkan penggunaan ruang,
                    cocok untuk instalasi di ruang terbatas.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>Menggunakan
                    refrigeran R-32 dengan GWP (Global Warming Potential) lebih
                    rendah, menciptakan sistem yang lebih ramah lingkungan.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row gy-4 mb-2" data-aos="fade-up">
            <div
              class="col-lg-4 order-lg-2 order-1 d-flex align-items-center justify-content-center"
            >
              <img
                src="{{asset ('assets/img/product/vrv/daikin/vrv-a.png') }}"
                class="img-fluid"
                alt="vrv-a"
              />
            </div>
            <div class="col-lg-8 order-lg-1 order-2">
              <div class="content ps-lg-5 mb-4">
                <h5 class="mb-3" style="font-weight: bolder">VRV A</h5>
                <ul>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Menyediakan
                    kapasitas pendinginan dan pemanasan yang luas, cocok untuk
                    berbagai jenis bangunan dan aplikasi.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Menggunakan
                    teknologi inverter untuk mengatur kecepatan kompresor,
                    mengoptimalkan efisiensi energi dan kenyamanan.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Desain modular
                    memungkinkan penambahan atau pengurangan unit dengan mudah
                    sesuai dengan kebutuhan ruang.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Menggunakan
                    refrigeran R-410A yang ramah lingkungan dan memiliki
                    efisiensi termal tinggi.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Memiliki kontrol
                    suhu yang tepat dan stabil di setiap zona, meningkatkan
                    kenyamanan dan efisiensi.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Dapat terhubung
                    dengan sistem pintar untuk mengontrol AC melalui perangkat
                    mobile, memberikan fleksibilitas dan kenyamanan.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Dilengkapi dengan
                    lapisan anti-korosi untuk memastikan umur panjang dan
                    kinerja optimal, bahkan di lingkungan yang korosif.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row gy-4 mb-2" data-aos="fade-up">
            <div
              class="col-lg-4 order-1 d-flex align-items-center justify-content-center"
            >
              <img
                src="{{asset ('assets/img/product/vrv/daikin/vrv-q.png') }}"
                class="img-fluid"
                alt="vrv-q"
              />
            </div>
            <div class="col-lg-8 order-2">
              <div class="content ps-lg-5 mb-4">
                <h5 class="mb-3" style="font-weight: bolder">VRV Q</h5>
                <ul>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>Dirancang untuk
                    kapasitas pendinginan dan pemanasan yang tinggi, cocok untuk
                    bangunan dengan beban termal yang signifikan.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Menggunakan
                    teknologi inverter canggih untuk mengoptimalkan operasi
                    kompresor, meningkatkan efisiensi energi dan kinerja sistem.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Menggunakan
                    refrigeran R-410A, yang memiliki efisiensi tinggi dan tidak
                    merusak ozon.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Dilengkapi dengan
                    sistem pengendalian cerdas untuk memantau dan mengatur suhu
                    secara optimal, memastikan kenyamanan dan efisiensi.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Desain modular
                    memungkinkan penyesuaian sesuai kebutuhan, mempermudah
                    perluasan atau pengurangan unit.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Dilengkapi dengan
                    perlindungan anti-korosi untuk memastikan umur panjang dan
                    kinerja optimal bahkan di lingkungan yang keras.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row gy-4 mb-2" data-aos="fade-up">
            <div
              class="col-lg-4 order-lg-2 order-1 d-flex align-items-center justify-content-center"
            >
              <img
                src="{{asset ('assets/img/product/vrv/daikin/vrv-iv-s.png') }}"
                class="img-fluid"
                alt="vrv-iv-s"
              />
            </div>
            <div class="col-lg-8 order-lg-1 order-2">
              <div class="content ps-lg-5 mb-4">
                <h5 class="mb-3" style="font-weight: bolder">VRV IV S</h5>
                <ul>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Dirancang dengan
                    teknologi inverter canggih untuk mengoptimalkan konsumsi
                    energi dan meningkatkan efisiensi sistem HVAC.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Menggunakan
                    refrigeran R-410A yang ramah lingkungan dan efisien dalam
                    kinerja termal.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Desain kompak
                    memudahkan instalasi bahkan di ruang terbatas dan mengurangi
                    beban struktural bangunan.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Memiliki kemampuan
                    untuk mengatur suhu dengan tepat di setiap zona, memberikan
                    kenyamanan individu yang optimal.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Dilengkapi dengan
                    sistem pengendalian cerdas untuk mengoptimalkan operasi dan
                    meningkatkan efisiensi energi.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Beroperasi dengan
                    tingkat kebisingan rendah, menciptakan lingkungan yang
                    tenang dan nyaman.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Mampu terhubung
                    dengan sistem pintar dan kontrol jarak jauh, memungkinkan
                    pengawasan dan pengendalian yang mudah.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row gy-4 mb-2" data-aos="fade-up">
            <div
              class="col-lg-4 order-1 d-flex align-items-center justify-content-center"
            >
              <img
                src="{{asset ('assets/img/product/vrv/daikin/vrv-iv-w.png') }}"
                class="img-fluid"
                alt="vrv-iv-w"
              />
            </div>
            <div class="col-lg-8 order-2">
              <div class="content ps-lg-5 mb-4">
                <h5 class="mb-3" style="font-weight: bolder">VRV IV W</h5>
                <ul>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Menggunakan
                    teknologi pompa panas udara-air yang efisien untuk pemanasan
                    dan pendinginan ruangan.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Menggunakan
                    refrigeran R-410A yang ramah lingkungan dan memiliki
                    efisiensi tinggi.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Desain modular
                    memudahkan penambahan atau pengurangan unit sesuai
                    kebutuhan, memberikan fleksibilitas dalam desain sistem.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Memiliki kemampuan
                    untuk mengatur suhu dengan presisi di setiap zona,
                    memastikan kenyamanan penghuni.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Dilengkapi dengan
                    sistem pengendalian cerdas untuk memantau dan mengoptimalkan
                    operasi secara efisien.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Beroperasi dengan
                    tingkat kebisingan rendah, menciptakan lingkungan yang
                    tenang dan nyaman.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Dapat diintegrasikan
                    dengan sistem kontrol pintar untuk pemantauan dan
                    pengendalian jarak jauh.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row gy-4 mb-2" data-aos="fade-up">
            <div
              class="col-lg-4 order-lg-2 order-1 d-flex align-items-center justify-content-center"
            >
              <img
                src="{{asset ('assets/img/product/vrv/daikin/vrv-hrhw.png') }}"
                class="img-fluid"
                alt="vrv-hrhw"
              />
            </div>
            <div class="col-lg-8 order-lg-1 order-2">
              <div class="content ps-lg-5 mb-4">
                <h5 class="mb-3" style="font-weight: bolder">VRV HRHW</h5>
                <ul>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Menggunakan
                    refrigerant R32 yang lebih ramah lingkungan daripada
                    refrigerant R410A yang sebelumnya digunakan.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Refrigerant R32
                    memiliki potensi pemanasan global yang lebih rendah dan
                    tidak mengandung CFC atau HFC.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Daikin VRV HRHW
                    memiliki desain yang elegan dan modern yang dapat
                    mempercantik interior ruangan.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Daikin VRV HRHW
                    dilengkapi dengan garansi yang panjang, sehingga pelanggan
                    dapat merasa yakin dengan kualitas produk.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Pendingin udara yang
                    dapat Anda kendalikan dari mana saja.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Pendingin udara yang
                    senyap dan elegan.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="vrv" class="vrv">
        <div class="container" data-aos="fade-up">
          <div class="brand-images">
            <div class="brand-logo">
              <img
                src="{{asset ('assets/img/brand/Daikin.png') }}"
                class="img-fluid brand"
                alt="Daikin"
                style="max-width: 100px; height: auto; margin-bottom: 12px"
              />
            </div>
          </div>
          <h3 style="font-weight: bold; margin-bottom: 25px">VRV Indoor</h3>
          <h5 class="mb-3" style="font-weight: bolder">Wall Mounted</h5>
          <div id="vrvWallMounted"></div>

          <h5 class="mb-3" style="font-weight: bolder">Cassette</h5>
          <div id="vrvCassette"></div>

          <h5 class="mb-3" style="font-weight: bolder">Ceiling Mounted Duct</h5>
          <div id="vrvCeilingMountedDuct"></div>

          <h5 class="mb-3" style="font-weight: bolder">Ceiling Suspended</h5>
          <div id="vrvCeilingSuspended"></div>
          <h5 class="mb-3" style="font-weight: bolder">Floor Standing</h5>
          <div id="vrvFloorStanding"></div>
          <h5 class="mb-3" style="font-weight: bolder">Floor Standing Duct</h5>
          <div id="vrvFloorStandingDuct"></div>
          <h5 class="mb-3" style="font-weight: bolder">Air Handling Unit</h5>
          <div id="vrvAirHandlingUnit"></div>
          <h5 class="mb-3" style="font-weight: bolder">
            Air Treatment Equipment
          </h5>
          <div id="vrvAirTreatment"></div>
        </div>
      </section>

      <section id="vrv" class="vrv">
        <div class="container" data-aos="fade-up">
          <div class="brand-images">
            <div class="brand-logo">
              <img
                src="{{asset ('assets/img/brand/Daikin.png') }}"
                class="img-fluid brand"
                alt="Daikin"
                style="max-width: 100px; height: auto; margin-bottom: 12px"
              />
            </div>
          </div>
          <h3 style="font-weight: bold; margin-bottom: 25px">Controllers</h3>
          <h5 class="mb-3" style="font-weight: bolder">
            Individual Control Systems
          </h5>
          <div id="vrvControlIndividual"></div>
          <h5 class="mb-3" style="font-weight: bolder">
            Central Control Systems
          </h5>
          <div id="vrvControlCentral"></div>
        </div>
      </section>
    </main>

@endsection