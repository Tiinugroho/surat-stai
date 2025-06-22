<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | STAI Sulthan Syarif Hasyim</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('adm/dist/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('adm/dist/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('adm/dist/assets/vendors/simple-datatables/style.css') }}">

    <link rel="stylesheet" href="{{ asset('adm/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('adm/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('adm/dist/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        @include('admin.partials.sidebar')
        @yield('content')
    </div>
    <script src="{{ asset('adm/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('adm/dist/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('adm/dist/assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('adm/dist/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('adm/dist/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="{{ asset('adm/dist/assets/js/main.js') }}"></script>
</body>

</html>
