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
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
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
                            <img src="{{ asset('assets/img/logo/logo_infly.png') }}" alt="">
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
                        <div class="hero-judul">
                            <h1 class="flat">Flat & Unlimited</h1>
                        </div>
                        <h2>Infly Networks hadir untuk menyediakan internet tanpa batas dengan harga terjangkau</h2>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('assets/img/gallery/header-top.png') }}" class="img-fluid animated"
                        alt="">
                </div>
            </div>
        </div>

        {{-- <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg> --}}

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
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Infly Home</h2>
                    <p>Nikmati Koneksi Infly Home dengan kecepatan hingga 100 Mbps yang hadir di rumah Anda</p>
                </div>

                <div class="row" data-aos="fade-left">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                            <h3><a href="">Lorem Ipsum</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                            <h3><a href="">Dolor Sitema</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                            <h3><a href="">Sed perspiciatis</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                            <h3><a href="">Magni Dolores</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
                            <i class="ri-database-2-line" style="color: #47aeff;"></i>
                            <h3><a href="">Nemo Enim</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                            <h3><a href="">Eiusmod Tempor</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
                            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                            <h3><a href="">Midela Teren</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                            <h3><a href="">Pira Neve</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
                            <i class="ri-anchor-line" style="color: #b2904f;"></i>
                            <h3><a href="">Dirada Pack</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
                            <i class="ri-disc-line" style="color: #b20969;"></i>
                            <h3><a href="">Moton Ideal</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
                            <i class="ri-base-station-line" style="color: #ff5828;"></i>
                            <h3><a href="">Verdo Park</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
                            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                            <h3><a href="">Flavor Nivelanda</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->


    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Bootslander</h3>
                            <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam
                                    excepturi quod.</em></p>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Bootslander</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

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
