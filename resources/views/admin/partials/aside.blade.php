        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>{{ Auth::user()->name }}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                    class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN MENU</li>
                    <li>
                        <a href="pages/widgets.html">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <small
                                class="label pull-right bg-green">new</small>
                        </a>
                    </li>
                    <li>
                        <a href="pages/widgets.html">
                            <i class="fa fa-file"></i> <span>Template Surat</span> <small
                                class="label pull-right bg-green">new</small>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-archive"></i>
                            <span>Jenis Surat</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Surat Aktif
                                    Kuliah</a></li>
                            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Surat Beasiswa</a>
                            </li>
                            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Surat Izin Magang</a>
                            </li>
                            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Surat Izin
                                    Penelitian</a></li>
                            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Surat ket. Berkelakuan
                                    Baik</a></li>
                            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Surat Cuti</a></li>
                        </ul>
                    </li>
                    <li class="header">MANAGEMENT DATA</li>
                    <li>
                        <a href="{{ url('admin/import-users') }}">
                            <i class="fa fa-file"></i> <span>Import Data</span> <small
                                class="label pull-right bg-green">new</small>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Management User</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Tenaga Pendidik</a>
                            </li>
                            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Dosen</a></li>
                            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Mahasiswa</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-copy"></i>
                            <span>Management Surat</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Surat Masuk</a></li>
                            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Surat Keluar</a></li>
                            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Surat Tolak</a></li>
                            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Arsip Surat</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
