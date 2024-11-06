@extends('layouts.app')

@section('content')

<main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div
        class="breadcrumbs d-flex align-items-center"
        style="
          background-image: url('{{asset ('assets/img/vrf-header.jpg') }}');
        "
      >
        <div
          class="container position-relative d-flex flex-column align-items-center"
        >
          <h1>VRF</h1>
          <ol>
            <li><a href="{{route ('home') }}">Home</a></li>
            <li><a href="{{route ('product.allProduct') }}">Product</a></li>
            <li>VRF</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <section id="vrf" class="vrf">
        <div class="container section-title" data-aos="fade-up">
          <header class="section-header">
            <h2>Gree AC VRF</h2>
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
                width="560"
                height="400"
                src="{{ asset('https://www.youtube.com/embed/xeE4zylOIN4?si=EwLrhzoZUmlBefRP') }}"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
            <div class="col-lg-7 order-lg-2 order-1">
              <div class="content mb-4">
                <p>
                  Teknologi VRF Gree AC menggunakan kompresor inverter DC dan
                  ruang bertekanan tinggi, meningkatkan efisiensi kompresi dan
                  kinerja. Kapasitas maksimum mencapai 88HP, dengan rentang suhu
                  operasi yang luas. Mode tenang tersedia, serta teknologi
                  kontrol pemisahan minyak dua tahap. Modul rotasi memaksimalkan
                  umur layanan sistem. Penggunaan Golden Fin tahan korosi dan
                  desain tekanan statis tinggi pada unit luar. Fungsi operasi
                  darurat untuk memastikan kehandalan AC dengan fitur inspeksi
                  untuk pemeriksaan cepat.
                </p>
                <div class="brand-images">
                  <div class="brand-logo">
                    <img
                      src="{{ asset('{{asset ('assets/img/brand/Gree.png') }}') }}"
                      class="img-fluid brand"
                      alt="Gree"
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
                    <i class="bi bi-check-circle-fill"></i> Wide Range of
                    Operation Condition
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Highly Anticorrosive
                    Golden Fins
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Excellent Emergency
                    Operation Function
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="vrf-values" class="vrf">
        <div class="container section-title mb-4" data-aos="fade-up">
          <div class="brand-images">
            <div class="brand-logo">
              <img
                src="{{ asset('{{asset ('assets/img/brand/Gree.png') }}') }}"
                class="img-fluid brand"
                alt="Gree"
                style="max-width: 100px; height: auto; margin-bottom: 12px"
              />
            </div>
          </div>
          <h3 style="font-weight: bold">GMV Outdoor</h3>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up">
          <div class="row gy-4 mb-2" data-aos="fade-up">
            <div
              class="col-lg-4 order-1 d-flex align-items-center justify-content-center"
            >
              <img
                src="{{ asset('{{asset ('assets/img/product/vrf/gmv-5.jpg') }}') }}"
                class="img-fluid"
                alt="gmv-5"
              />
            </div>
            <div class="col-lg-8 order-2">
              <div class="content ps-lg-5 mb-4">
                <h5 class="mb-3" style="font-weight: bolder">GMV 5</h5>
                <ul>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    Teknologi inverter yang dapat mengontrol kecepatan kompresor
                    secara akurat, sehingga dapat menyesuaikan output sesuai
                    dengan kebutuhan dan menghemat biaya energi.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>Kapasitas yang besar
                    mulai dari 8HP hingga 22HP, sehingga dapat digunakan untuk
                    berbagai kebutuhan pendinginan udara, mulai dari rumah
                    hingga bangunan komersial.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>Operasi yang senyap,
                    sehingga tidak mengganggu kenyamanan pengguna.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>Desain yang kompak
                    dan ringan, sehingga mudah untuk dipasang dan dipindahkan.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>Kontrol cerdas
                    menggunakan aplikasi smartphone atau tablet, sehingga
                    pengguna dapat mengatur suhu dan mode operasi dari mana
                    saja.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>Fitur tambahan
                    seperti auto clean, auto restart, dan self-diagnosis yang
                    dapat meningkatkan kenyamanan dan efisiensi pendinginan
                    udara.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>Garansi yang panjang,
                    sehingga pelanggan dapat merasa yakin dengan kualitas
                    produk.
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
                src="{{ asset('{{asset ('assets/img/product/vrf/gmv-5-max.jpg') }}') }}"
                class="img-fluid"
                alt="gmv-5-max"
              />
            </div>
            <div class="col-lg-8 order-lg-1 order-2">
              <div class="content ps-lg-5 mb-4">
                <h5 class="mb-3" style="font-weight: bolder">GMV 5 Max</h5>
                <ul>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Mode operasi yang
                    lebih lengkap, termasuk mode pendinginan, pemanasan,
                    dehumidifikasi, dan ventilasi.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Operasi yang senyap,
                    sehingga tidak mengganggu kenyamanan pengguna.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Desain yang kompak
                    dan ringan, sehingga mudah untuk dipasang dan dipindahkan.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Teknologi Twin
                    Compressor, yang dapat meningkatkan efisiensi dan kapasitas
                    pendinginan.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Kontrol cerdas
                    menggunakan aplikasi smartphone atau tablet, sehingga
                    pengguna dapat mengatur suhu dan mode operasi dari mana
                    saja.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Fitur tambahan
                    seperti auto clean, auto restart, dan self-diagnosis yang
                    dapat meningkatkan kenyamanan dan efisiensi pendinginan
                    udara.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Teknologi Variable
                    Refrigerant Flow (VRF), yang memungkinkan unit outdoor untuk
                    mengontrol aliran refrigerant ke setiap unit indoor secara
                    individual.
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
                src="{{ asset('{{asset ('assets/img/product/vrf/gmv-5-mini-slim.jpg') }}') }}"
                class="img-fluid"
                alt="gmv-5-mini-slim"
              />
            </div>
            <div class="col-lg-8 order-2">
              <div class="content ps-lg-5 mb-4">
                <h5 class="mb-3" style="font-weight: bolder">
                  GMV 5 Mini & Slim
                </h5>
                <ul>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>Teknologi inverter
                    yang dapat mengontrol kecepatan kompresor secara akurat,
                    sehingga dapat menyesuaikan output sesuai dengan kebutuhan
                    dan menghemat biaya energi.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Kapasitas yang kecil
                    mulai dari 3HP hingga 6HP, sehingga cocok untuk ruangan
                    dengan ukuran kecil hingga sedang.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Desain yang kompak
                    dan ramping, sehingga mudah untuk dipasang dan dipindahkan.
                    merusak ozon.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Kontrol cerdas
                    menggunakan aplikasi smartphone atau tablet, sehingga
                    pengguna dapat mengatur suhu dan mode operasi dari mana
                    saja.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Teknologi Twin
                    Compressor, yang dapat meningkatkan efisiensi dan kapasitas
                    pendinginan.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Mode operasi yang
                    lebih lengkap, termasuk mode pendinginan, pemanasan,
                    dehumidifikasi, dan ventilasi.
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i> Teknologi Variable
                    Refrigerant Flow (VRF), yang memungkinkan unit outdoor untuk
                    mengontrol aliran refrigerant ke setiap unit indoor secara
                    individual.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="vrf" class="vrf">
        <div class="container" data-aos="fade-up">
          <div class="brand-images">
            <div class="brand-logo">
              <img
                src="{{ asset('{{asset ('assets/img/brand/Gree.png') }}') }}"
                class="img-fluid brand"
                alt="Gree"
                style="max-width: 100px; height: auto; margin-bottom: 12px"
              />
            </div>
          </div>
          <h3 style="font-weight: bold; margin-bottom: 25px">VRF Indoor</h3>
          <h5 class="mb-3" style="font-weight: bolder">Wall Mounted</h5>
          <div id="vrfWallMounted"></div>

          <h5 class="mb-3" style="font-weight: bolder">Cassette</h5>
          <div id="vrfCassette"></div>

          <h5 class="mb-3" style="font-weight: bolder">Ceiling Mounted Duct</h5>
          <div id="vrfCeilingMountedDuct"></div>

          <h5 class="mb-3" style="font-weight: bolder">Floor Standing</h5>
          <div id="vrfFloorStanding"></div>
          <h5 class="mb-3" style="font-weight: bolder">Fresh Air</h5>
          <div id="vrfFreshAir"></div>
          <h5 class="mb-3" style="font-weight: bolder">Ventilation</h5>
          <div id="vrfVentilation"></div>
        </div>
      </section>

      <section id="vrf" class="vrf">
        <div class="container" data-aos="fade-up">
          <div class="brand-images">
            <div class="brand-logo">
              <img
                src="{{ asset('assets/img/brand/Gree.png') }}"
                class="img-fluid brand"
                alt="Gree"
                style="max-width: 100px; height: auto; margin-bottom: 12px"
              />
            </div>
          </div>
          <h3 style="font-weight: bold; margin-bottom: 25px">Controllers</h3>
          <h5 class="mb-3" style="font-weight: bolder">
            Individual Control Systems
          </h5>
          <div id="vrfControlIndividual"></div>
          <h5 class="mb-3" style="font-weight: bolder">
            Central Control Systems
          </h5>
          <div id="vrfControlCentral"></div>
        </div>
      </section>
    </main>

@endsection