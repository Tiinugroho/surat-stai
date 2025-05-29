<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
            <h1 style="font-size: .8rem;">STAI Sulthan Syarif Hasyim <br> Siak Sri Indrapura Riau</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="active">Beranda<br></a></li>
                <li class="dropdown"><a href="#"><span>Surat</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Surat Aktif Kuliah</a></li>
                        <li><a href="#">Surat Beasiswa</a></li>
                        <li><a href="#">Surat Izin Magang</a></li>
                        <li><a href="#">Surat Izin Penelitian</a></li>
                        <li><a href="#">Surat Ket. Berkelakuan Baik</a></li>
                        <li><a href="#">Surat Cuti</a></li>
                    </ul>
                </li>
                <li><a href="#about">Tentang</a></li>
                <!-- <li><a href="contact.html">Contact</a></li> -->
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        @guest
        <a class="btn-getstarted" href="{{url('login')}}">LOGIN</a>
        @endguest

        @auth
        <a class="btn-getstarted" href="{{route('dashboard.index')}}">Kembali Ke Dashboard</a>
        @endauth

    </div>
</header>