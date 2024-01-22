<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="<?= url('dashboard/home') ?>">
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
                <li><a class="nav-link scrollto" href="#">Member</a></li>
                <li><a class="nav-link scrollto" href="#">About Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>
<!-- End Header -->
