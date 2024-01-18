<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"rel="stylesheet">

    <link href="https://db.onlinewebfonts.com/c/1c7f14203d028f1c6f8914508f469cb9?family=Arboria-Book" rel="stylesheet">

    <link href="https://db.onlinewebfonts.com/c/dda65d7f418f4ab23abf484c807c9f17?family=Arboria-Medium"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html">
                        <span>
                            <img src="{{ asset('assets/img/logo/Infly_Logo.png') }}" alt="">
                        </span>
                    </a>
                </h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown"><a href="#"><span>Service</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Broadband Internet</a></li>
                            <li><a href="#">Dedicated Internet</a></li>
                            <li><a href="#">Program Kemitraan</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#hero">Member</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>
    <!-- End Header -->

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
                    <img src="{{ asset('assets/img/gallery/header-top.png') }}" class="img-fluid animated"
                        alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch"
                        data-aos="fade-right">
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

                <div class="section-title" data-aos="fade-up">
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
                                <a>
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
                                <a>
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
                                <a>
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
                                <a>
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
                                <a>
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

    <!-- ======= Footer ======= -->
    <div class="container-fluid bg-primary text-light" id="tentangkami">
        <div class="container">
            <div class="row flex-wrap">
                <div class="col-12 col-xl-6 col-lg-6">
                    <div class="d-flex flex-column flex-sm-row">
                        <div class="p-4">
                            <img class="img-size-footerlogo" src="{{ asset('assets/img/logo/logo-white.png') }}"
                                class="img-fluid animated" alt="">
                        </div>
                        <div class="p-3 alamat">
                            <b>Alamat</b> <br>
                            Jl. Hos Cokroaminoto 72, RT 01, RW 11 Kelurahan Kanigaran, Kecamatan Kanigaran Probolinggo,
                            Jawa Timur - 67213, Indonesia
                            <br> <br>
                            <b>Telepon</b> <br>
                            <i class="bi bi-whatsapp"></i> 0838-6556-6635 <br>
                            <i class="bi bi-telephone-fill"></i> 0335-437-766
                            <br> <br>
                            <b>Email</b> <br>
                            <i class="bi bi-envelope"></i> helpdesk@inflynetworks.com <br>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-xl-6 col-lg-6">
                    <div class="d-flex flex-column align-items-center justify-content-center" id="member">
                        <div class="col-12 col-lg-11 col-xl-11 d-flex flex-row flex-wrap justify-content-center">
                            <!-- Judul Gambar -->
                            <div class="p-2 col-12 col-lg-12 d-flex justify-content-center">
                                <h5>Member Of</h5>
                            </div>
                            <!-- gambar 2 -->
                            <div class="p-2 member col-6 col-md-6 col-lg-3">
                                <div class="member-img d-flex justify-content-center">
                                    <img src="{{ asset('assets/img/logo/idnic.png') }}" alt="IDNIC">
                                </div>
                            </div>
                            <!-- gambar 3 -->
                            <div class="p-2 member col-6 col-md-6 col-lg-3">
                                <div class="member-img d-flex justify-content-center">
                                    <img src="{{ asset('assets/img/logo/apjii.png') }}" alt="APJII">
                                </div>
                            </div>
                            <!-- gambar 4 -->
                            <div class="p-2 member col-6 col-md-6 col-lg-3">
                                <div class="member-img d-flex justify-content-center">
                                    <img src="{{ asset('assets/img/logo/SDI.png') }}" alt="SDI">
                                </div>
                            </div>
                            <!-- gambar 5 -->
                            <div class="p-2 member col-6 col-md-6 col-lg-3">
                                <div class="member-img d-flex justify-content-center">
                                    <img src="{{ asset('assets/img/logo/multidata.png') }}" alt="Multidata">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="copyright bg-dark text-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; 2023 Copyright : Infly Networks. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
