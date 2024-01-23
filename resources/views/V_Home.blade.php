@include('components/layouts/V_Header')
@include('components/layouts/V_Sidebar')

<!-- ======= Hero Section ======= -->
<section id="hero">

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out">
                    <h1>Flat & Unlimited</h1>
                    <h2>Infly Networks hadir untuk menyediakan internet tanpa batas dengan harga terjangkau</h2>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                <img src="{{ asset('assets/img/gallery/header-top.png') }}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="fade-right">
                    <div class="img-enjoy">
                        <img src="{{ asset('assets/img/gallery/bg-enjoy.png') }}" alt="">
                    </div>
                </div>

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                    data-aos="fade-left">

                    <div class="judul-enjoy">
                        <h1>Enjoy Your Digital Experience With Us</h1>

                        <p>Pengalaman digital terbaik melayani semua kebutuhan digital anda dalam gaya hidup,
                            hiburan
                            maupun bisnis</p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><img src="{{ asset('assets/img/ikon/customer_service.png') }}"
                                class="img-fluid" alt=""></div>
                        <h4 class="title"><a href="">24/7 Customer Service</a></h4>
                        <p class="description">Customer Care dan Network Operation Center selalu tersedia 24 x 7
                            melalui telepon, whatsapp atau email</p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><img src="{{ asset('assets/img/ikon/legal_terpecaya.png') }}"
                                class="img-fluid" alt=""></div>
                        <h4 class="title"><a href="">Legal & Terpecaya</a></h4>
                        <p class="description">Kami merupakan Penyedia Jasa Internet (ISP) resmi di Indonesia yang
                            terdaftar di Kominfo (Kementerian Komunikasi dan Informatika Republik Indonesia)</p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><img src="{{ asset('assets/img/ikon/wifi.png') }}" class="img-fluid"
                                alt=""></div>
                        <h4 class="title"><a href="">100% Dedicated</a></h4>
                        <p class="description">Menawarkan berbagai layanan telekomunikasi dan multimedia untuk
                            memenuhi permintaan bisnis dengan kualitas Bandwidth 1:1</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container-fluid">

            <div id="Broadband-Internet" class="section-title" data-aos="fade-up">
                <h2>Infly Home</h2>
                <p>Nikmati Koneksi Infly Home dengan kecepatan hingga 100 Mbps yang hadir di rumah Anda</p>
                <div class="img-section">
                    <img src="{{ asset('assets/img/gallery/bg-section.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="infly-home" class="infly-home">
        <h2>Nikmati pilihan internet terbaikmu hingga 100 Mbps</h2>
    </section>

    <section id="paket-home" class="paket-home">
        <div class="container">

            <div class="row d-flex justify-content-between">
                <div class="col-12 col-sm-12 col-md-12 col-xl-4 col-lg-4 mt-sm-3 mt-md-3 mt-3">
                    <div class="plan-card" id="">
                        <h4>Home 10</h4>
                        <div class="etiquet-price" id="etiquet-price">
                            <p>160.000</p>
                            <div></div>
                        </div>
                        <div class="benefits-list">
                            <ul>
                                <li><i class="bi bi-check-lg"></i><span>Unlimited Tanpa FUP</span></li>
                                <li><i class="bi bi-check-lg"></i><span>Ideal Hingga 3 Perangkat</span></li>
                            </ul>
                        </div>
                        <div class="button button-get-plan" id="one">
                            <a href="<?= url('registrasi/home_10') ?>">
                                <span class="fw-bold text-white">Pilih Paket</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-xl-4 col-lg-4 mt-sm-3 mt-md-3 mt-3">
                    <div class="plan-card" id="">
                        <h4>Home 20</h4>
                        <div class="etiquet-price" id="etiquet-price">
                            <p>200.000</p>
                            <div></div>
                        </div>
                        <div class="benefits-list">
                            <ul>
                                <li><i class="bi bi-check-lg"></i><span>Unlimited Tanpa FUP</span></li>
                                <li><i class="bi bi-check-lg"></i><span>Ideal Hingga 5 Perangkat</span></li>
                            </ul>
                        </div>
                        <div class="button button-get-plan" id="one">
                            <a href="<?= url('registrasi/home_20') ?>">
                                <span class="fw-bold text-white">Pilih Paket</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-xl-4 col-lg-4 mt-sm-3 mt-md-3 mt-3">
                    <div class="plan-card" id="">
                        <h4>Home 30</h4>
                        <div class="etiquet-price" id="etiquet-price">
                            <p>250.000</p>
                            <div></div>
                        </div>
                        <div class="benefits-list">
                            <ul>
                                <li><i class="bi bi-check-lg"></i><span>Unlimited Tanpa FUP</span></li>
                                <li><i class="bi bi-check-lg"></i><span>Ideal Hingga 7 Perangkat</span></li>
                            </ul>
                        </div>
                        <div class="button button-get-plan" id="one">
                            <a href="<?= url('registrasi/home_30') ?>">
                                <span class="fw-bold text-white">Pilih Paket</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-xl-4 col-lg-4 mt-sm-3 mt-md-3 mt-3">
                    <div class="plan-card" id="">
                        <h4>Home 50</h4>
                        <div class="etiquet-price" id="etiquet-price">
                            <p>320.000</p>
                            <div></div>
                        </div>
                        <div class="benefits-list">
                            <ul>
                                <li><i class="bi bi-check-lg"></i><span>Unlimited Tanpa FUP</span></li>
                                <li><i class="bi bi-check-lg"></i><span>Ideal Hingga 10 Perangkat</span></li>
                            </ul>
                        </div>
                        <div class="button button-get-plan" id="one">
                            <a href="<?= url('registrasi/home_50') ?>">
                                <span class="fw-bold text-white">Pilih Paket</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-xl-4 col-lg-4 mt-sm-3 mt-md-3 mt-3">
                    <div class="plan-card" id="">
                        <h4>Home 100</h4>
                        <div class="etiquet-price" id="etiquet-price">
                            <p>499.000</p>
                            <div></div>
                        </div>
                        <div class="benefits-list">
                            <ul>
                                <li><i class="bi bi-check-lg"></i><span>Unlimited Tanpa FUP</span></li>
                                <li><i class="bi bi-check-lg"></i><span>Ideal Hingga 14 Perangkat</span></li>
                            </ul>
                        </div>
                        <div class="button button-get-plan" id="one">
                            <a href="<?= url('registrasi/home_100') ?>">
                                <span class="fw-bold text-white">Pilih Paket</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Features Section -->

</main>
<!-- End #main -->

@include('components/layouts/V_Footer')
