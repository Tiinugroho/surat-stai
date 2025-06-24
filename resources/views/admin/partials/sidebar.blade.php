<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <!-- Sidebar Header -->
        <div class="sidebar-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/logo2.png') }}" class="w-100 h-100" alt="Logo">
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block">
                        <i class="bi bi-x-lg"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <div class="sidebar-menu">
            <hr>
            <p class="menu m-0">Hello, {{ Auth::user()->name }}</p>
            <hr>
            <ul class="menu">
                <li class="sidebar-title">Dashboard</li>
                <li class="sidebar-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ url('admin/dashboard') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill me-2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Master Data</li>

                <li class="sidebar-item has-sub {{ request()->is('admin/surat*') ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-file-earmark-spreadsheet-fill me-2"></i>
                        <span>Surat</span>
                    </a>
                    <ul class="submenu" style="{{ request()->is('admin/surat*') ? 'display: block;' : '' }}">
                        <li class="submenu-item {{ request()->is('admin/surat/jenis') ? 'active' : '' }}">
                            <a href="{{ url('admin/surat/jenis') }}">Jenis Surat</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item has-sub {{ request()->is('admin/user*') ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-person-badge-fill me-2"></i>
                        <span>User</span>
                    </a>
                    <ul class="submenu" style="{{ request()->is('admin/user*') ? 'display: block;' : '' }}">
                        <li class="submenu-item {{ request()->is('admin/user/staff') ? 'active' : '' }}">
                            <a href="{{ url('admin/user/staff') }}">Staff</a>
                        </li>
                        <li class="submenu-item {{ request()->is('admin/user/dosen') ? 'active' : '' }}">
                            <a href="{{ url('admin/user/dosen') }}">Dosen</a>
                        </li>
                        <li class="submenu-item {{ request()->is('admin/user/mahasiswa') ? 'active' : '' }}">
                            <a href="{{ url('admin/user/mahasiswa') }}">Mahasiswa</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Verifikasi</li>

                <li class="sidebar-item {{ request()->is('admin/surat-masuk') ? 'active' : '' }}">
                    <a href="{{ url('admin/surat/masuk') }}" class="sidebar-link">
                        <i class="bi bi-envelope-open-fill me-2"></i>
                        <span>Surat Masuk</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub {{ request()->is('admin/proses*') ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-pencil-square me-2"></i>
                        <span>Surat Proses</span>
                    </a>
                    <ul class="submenu" style="{{ request()->is('admin/proses*') ? 'display: block;' : '' }}">
                        <li class="submenu-item {{ request()->is('admin/proses/kaprodi') ? 'active' : '' }}">
                            <a href="{{ url('admin/proses/kaprodi') }}">Proses Kaprodi</a>
                        </li>
                        <li class="submenu-item {{ request()->is('admin/proses/lektor') ? 'active' : '' }}">
                            <a href="{{ url('admin/proses/lektor') }}">Proses Lektor</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ request()->is('admin/surat-keluar') ? 'active' : '' }}">
                    <a href="{{ url('admin/surat/keluar') }}" class="sidebar-link">
                        <i class="bi bi-envelope-fill me-2"></i>
                        <span>Surat Keluar</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <form action="{{ url('logout') }}" method="POST" class="m-0 p-0">
                        @csrf
                        <button type="submit"
                            class="sidebar-link border-0 bg-transparent w-100 text-start d-flex align-items-center">
                            <i class="bi bi-box-arrow-right me-2"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>

        <!-- Sidebar Toggler -->
        <button class="sidebar-toggler btn x">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>
</div>
