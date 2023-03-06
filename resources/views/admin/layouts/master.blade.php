<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="demo admin panel for us." />
    <meta name="author" content="author" />
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon">

    <link type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <link type="text/css" href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" />
    <link id="app-style" type="text/css" href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" />
</head>

<body data-sidebar="dark" data-layout-mode="light">
    @yield('panel')

    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    @yield('script')
</body>

</html>
