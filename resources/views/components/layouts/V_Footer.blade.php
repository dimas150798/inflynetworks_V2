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
                        <div class="p-2 member col-3  col-lg-3">
                            <div class="member-img d-flex justify-content-center">
                                <img src="{{ asset('assets/img/logo/idnic.png') }}" alt="IDNIC">
                            </div>
                        </div>
                        <!-- gambar 3 -->
                        <div class="p-2 member col-3  col-lg-3">
                            <div class="member-img d-flex justify-content-center">
                                <img src="{{ asset('assets/img/logo/apjii.png') }}" alt="APJII">
                            </div>
                        </div>
                        <!-- gambar 4 -->
                        <div class="p-2 member col-3  col-lg-3">
                            <div class="member-img d-flex justify-content-center">
                                <img src="{{ asset('assets/img/logo/SDI.png') }}" alt="SDI">
                            </div>
                        </div>
                        <!-- gambar 5 -->
                        <div class="p-2 member col-3  col-lg-3">
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
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

{{-- Select2 --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@include('components/select2/registrasi_home')

</body>

</html>
