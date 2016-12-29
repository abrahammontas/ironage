<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iron Age Office - @yield('title')</title>

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <body>

        <section id="preloader">
            <div class="loader" id="loader">
                <div class="loader-img"></div>
            </div>
        </section>

        <div class="wrapper">
            @include('partials.navigation')
            @yield('content')
        </div>

        @include('partials.footer')

        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>

        <!-- JS -->
        <script src="{{ asset('js/vendors.js') }}" type="text/javascript"></script>

        @yield('scripts')

    </body>
</html>