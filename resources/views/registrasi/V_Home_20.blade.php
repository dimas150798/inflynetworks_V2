@include('components.layouts.V_Header')
@include('components.layouts.V_Sidebar')

<main id="main">
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

    <section id="infly-regis" class="infly-regis">

        <div class="container">
            @csrf

            <div class="row">
                <div class="col-12 p-4 d-flex justify-content-center">
                    <h3 class="fw-bold">Form Pendaftaran</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 p-2">
                    <label class="col-sm-12 col-form-label fw-bold">Paket Yang Dipilih <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bi bi-wifi"></i></span>
                            <input class="form-control" id="pembelian_paket" name="pembelian_paket"
                                value="{{ $paket }}" readonly />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-2">
                    <label class="col-sm-12 col-form-label fw-bold">Nama Lengkap <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bi bi-person text-black"></i></span>
                            <input class="form-control" id="nama_user" name="nama_user"
                                placeholder="Masukkan Nama Lengkap..." />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 p-2">
                    <label class="col-sm-12 col-form-label fw-bold">NIK KTP <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bi bi-card-checklist text-black"></i></span>
                            <input class="form-control" id="nik_user" name="nik_user"
                                placeholder="Masukkan NIK KTP..." />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-2">
                    <label class="col-sm-12 col-form-label fw-bold">No. Telepon <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bi bi-telephone-fill text-black"></i></span>
                            <input class="form-control" id="tlp_user" name="tlp_user"
                                placeholder="Masukkan No Telepon..." />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 p-2">
                    <label class="col-sm-12 col-form-label fw-bold">Alamat <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bi bi-house-fill"></i></i></span>
                            <input class="form-control" id="alamat_user" name="alamat_user"
                                placeholder="Masukkan Alamat..." />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 p-2">
                    <label class="col-sm-12 col-form-label fw-bold">Kota / Kabupaten :</label>
                    <select name="kota" id="kota" class="form-select">
                        <option value="" disabled required selected>Kota :</option>
                        @foreach ($kota as $value)
                            <option value="{{ $value->id_kota }}">{{ $value->nama_kota }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-lg-12 p-2">
                    <label class="col-sm-12 col-form-label fw-bold">Kecamatan :</label>
                    <select name="kecamatan" id="kecamatan" class="form-select">
                        <option value="" disabled required selected>Kecamatan :</option>
                    </select>
                </div>
                <div class="col-12 col-lg-12 p-2">
                    <label class="col-sm-12 col-form-label fw-bold">Kelurahan :</label>
                    <select name="kelurahan" id="kelurahan" class="form-select">
                        <option value="" disabled required selected>Kelurahan :</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- End Features Section -->

</main>
<!-- End #main -->

@include('components/layouts/V_Footer')
