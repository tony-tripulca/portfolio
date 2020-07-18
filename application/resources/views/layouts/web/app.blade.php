<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="language" content="English">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="title" content="Serenade's Crib">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta property="og:type" content="website">
    <meta property="og:url" content="http://nadescrib.com">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Serenade's Crib">
    <meta property="og:title" content="Serenade's Crib">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    @yield('meta')

    <link rel="stylesheet" type="text/css" href="{{ asset('icons/materialize-icons/iconfont/material-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('icons/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/hamburgers/dist/hamburgers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/rippler/dist/css/rippler.min.css') }}">

    @yield('plugin-styles')

    @if(config('app.env') == "production")
        <link rel="stylesheet" type="text/css" href="{{ asset('css/utilities.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/preloader.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/main.min.css') }}">
    @else
        <link rel="stylesheet" type="text/css" href="{{ asset('css/utilities.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/preloader.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/main.css') }}">
    @endif

    @yield('module-styles')

    <title>{{ $tab_title }}</title>
</head>

<body>
    <div class="preloader">
        
    </div>
    <div class="wrapper">
        <header>
            @yield('navbar')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @yield('footer')
        </footer>
    </div>

    @yield('modal')

    <script type="text/javascript">function url() { return "{{ url('/') }}"; }</script>
    <script type="text/javascript">function asset() { return "{{ url('/') }}/application/public"; }</script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/popper/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/rippler/dist/js/jquery.rippler.min.js') }}"></script>
    
    @yield('plugin-scripts')
    
    @if(config('app.env') == "production")
        <script type="text/javascript" src="{{ asset('js/web/preloader.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/web/main.min.js') }}"></script>
    @else
        <script type="text/javascript" src="{{ asset('js/web/preloader.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/web/main.js') }}"></script>
    @endif
    
    @yield('module-scripts')
</body>

</html>