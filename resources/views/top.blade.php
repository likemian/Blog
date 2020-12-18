<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- title name and icon setting -->
    <title>来啦</title>
    <link rel="icon" href="images/title.ico" type="image/x-icon" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
</head>
<body class="body">
    <div class="top-container">
        <div class="circle-center-container">
            <div class="out-circle">
                <div class="in-circle"></div>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="top-title">
                <h1>才疏学浅</h2>
                <p id="top-subtitle">Sun, Moon, You</p>
            </div>
            <div class="menu">
                <a class="nav-menu" href="blog">博客</a>
                <a class="nav-menu" href="life">随笔</a>
                <a class="nav-menu" href="xmind">思维导图</a>
                <a class="nav-menu" href="about">关于</a>
            </div>
        </div>
        <div class="follow-me">
            <span class="social-title">Follow Me |</span>
            <div class="contact">
                <ul>
                    <li>
                        <a href="mailto: 18624269120@163.com">
                            <i class="ion-ios-mail"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/likemian/">
                            <i class="ion ion-logo-github"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>