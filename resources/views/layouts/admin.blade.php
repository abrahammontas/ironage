<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cash To Crypto - Admin</title>

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/admin/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <body style="background-color: #fcfcfc;">

        @include('admin.partials.navigation')

        <div id="wrapper" style="margin-bottom:60px;">
            <div class="container-fluid">

                @yield('content')

            </div>
        </div>

        <!-- javascript -->
        <script src="{{ asset('js/admin/vendors.js') }}"></script>
        <script src="{{ asset('js/admin/custom.js') }}"></script>

        @yield('footer')

        @yield('scripts')

    </body>
</html>
