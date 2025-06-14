<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>STAI | @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('adm/assets/css/core/libs.min.css') }}" />

    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="{{ asset('adm/assets/vendor/aos/dist/aos.css') }}" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{ asset('adm/assets/css/hope-ui.min.css?v=2.0.0') }}" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('adm/assets/css/custom.min.css?v=2.0.0') }}" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="{{ asset('adm/assets/css/dark.min.css') }}" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ asset('adm/assets/css/customizer.min.css') }}" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{ asset('adm/assets/css/rtl.min.css') }}" />


</head>

<body class="">
    @include('admin.partials.aside')
    
    @yield('content')

    <!-- Library Bundle Script -->
    <script src="{{ asset('adm/assets/js/core/libs.min.js') }}"></script>

    <!-- External Library Bundle Script -->
    <script src="{{ asset('adm/assets/js/core/external.min.js') }}"></script>

    <!-- Widgetchart Script -->
    <script src="{{ asset('adm/assets/js/charts/widgetcharts.js') }}"></script>

    <!-- mapchart Script -->
    <script src="{{ asset('adm/assets/js/charts/vectore-chart.js') }}"></script>
    <script src="{{ asset('adm/assets/js/charts/dashboard.js') }}"></script>

    <!-- fslightbox Script -->
    <script src="{{ asset('adm/assets/js/plugins/fslightbox.js') }}"></script>

    <!-- Settings Script -->
    <script src="{{ asset('adm/assets/js/plugins/setting.js') }}"></script>

    <!-- Slider-tab Script -->
    <script src="{{ asset('adm/assets/js/plugins/slider-tabs.js') }}"></script>

    <!-- Form Wizard Script -->
    <script src="{{ asset('adm/assets/js/plugins/form-wizard.js') }}"></script>

    <!-- AOS Animation Plugin-->
    <script src="{{ asset('adm/assets/vendor/aos/dist/aos.js') }}"></script>

    <!-- App Script -->
    <script src="{{ asset('adm/assets/js/hope-ui.js') }}" defer></script>

</body>

</html>
