<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - AdminPanel STAI Sulthan Syarif Hasyim Siak Sri Indrapura Riau</title>

    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('adminlte/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Theme style -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/skins/_all-skins.min.css') }}">
    <link href="{{asset('/img/logo.png')}}" rel="icon">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">


        @include('admin.partials.header')
        @include('admin.partials.aside')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        @include('admin.partials.footer')
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('adminlte/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset('adminlte/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('adminlte/plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/app.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('adminlte/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{ asset('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{ asset('adminlte/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="{{ asset('adminlte/plugins/chartjs/Chart.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('adminlte/dist/js/pages/dashboard2.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminlte/dist/js/demo.js')}}"></script>
    <script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
    </script>
</body>

</html>