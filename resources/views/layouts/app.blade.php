<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- title name and icon setting -->
    <title>@yield('title')</title>
    <link rel="icon" href="images/title.ico" type="image/x-icon" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-1.7.1.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.pjax.js') }}" defer></script>
    <script src="{{ asset('js/nprogress.js') }}" defer></script>
    <script src="{{ asset('js/searchbox.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Styles -->
    @yield('css')
</head>
<body class="body">
    @yield('content')
</body>
</html>