<!doctype html>
<html lang="en">
<head>
    <title>Dashboard </title>
    <script defer data-api="/stats/api/event" data-domain="preview.tabler.io" src="/stats/js/script.js"></script>
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>
    <!-- CSS files -->
    <link href="{{ asset('tabler/css/tabler.min.css?1695847769') }}" rel="stylesheet"/>
    <link href="{{ asset('tabler/css/tabler-flags.min.css?1695847769') }}" rel="stylesheet"/>
    <link href="{{ asset('tabler/css/tabler-payments.min.css?1695847769') }}" rel="stylesheet"/>
    <link href="{{ asset('tabler/css/tabler-vendors.min.css?1695847769') }}" rel="stylesheet"/>
    <link href="{{ asset('tabler/css/demo.min.css?1695847769') }}" rel="stylesheet"/>
    <style>
        @import url('https://rsms.me/inter/inter.css');
        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>
<body>
    <script src="{{ asset('tabler/js/demo-theme.min.js?1695847769') }}"></script>
    <div class="page">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        
        <!-- Navbar -->
        @include('layouts.header')
        <div class="page-wrapper">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h4 class="font-weight-bold mb-0"></h4>
            </div>
            <div>
                <p id="reportButton"></p>
            </div>
        </div>
        
            <!-- isi sesuai dengan dashboard -->

            @yield('content')
            

            @include('layouts.footer')
        </div>
    </div>
    <!-- Libs JS -->
    <script src="{{ asset('tabler/libs/apexcharts/dist/apexcharts.min.js?1695847769') }}" defer></script>
    <script src="{{ asset('tabler/libs/jsvectormap/dist/js/jsvectormap.min.js?1695847769') }}" defer></script>
    <script src="{{ asset('tabler/libs/jsvectormap/dist/maps/world.js?1695847769') }}" defer></script>
    <script src="{{ asset('tabler/libs/jsvectormap/dist/maps/world-merc.js?1695847769') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Tabler Core -->
    <script src="{{ asset('tabler/js/tabler.min.js?1695847769') }}" defer></script>
    <script src="{{ asset('tabler/js/demo.min.js?1695847769') }}" defer></script>
</body>
</html>