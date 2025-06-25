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
                <li><a href="{{ route('surat.index') }}">Lihat Surat<br></a></li>
                <li class="dropdown">
                    <a href="#"><span>Surat</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        @foreach ($jenisSurats as $jenis)
                            <li>
                                <a href="#" class="open-form" data-id="{{ $jenis->id }}"
                                    data-nama="{{ $jenis->nama_surat }}">
                                    {{ $jenis->nama_surat }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>


                <li><a href="#about">Tentang</a></li>
                <!-- <li><a href="contact.html">Contact</a></li> -->
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        @guest
            <a class="btn btn-getstarted" href="{{ url('login') }}">Login</a>
        @endguest

        @auth
            @if (auth()->user()->role == 'mahasiswa')
                <form action="{{ url('logout') }}" method="POST" class="m-0 p-0">
                    @csrf
                    <button type="submit"
                        class="btn btn-getstarted">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        Logout
                    </button>
                </form>
            @else
                <a class="btn btn-getstarted" href="{{ route('dashboard.index') }}">Kembali Ke Dashboard</a>
            @endif
        @endauth


    </div>


</header>
