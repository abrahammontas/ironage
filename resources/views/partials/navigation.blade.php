<!-- Header -->
<header id="header" class="header">
    <div class="container header-inner">

        <!-- Logo -->
        <div class="logo">
            <a href="{{ url('/') }}">
                <img class="logo-light" style="max-width:90%" src="{{ asset('img/IAO/logo-white.png') }}" alt="Iron Age Office" />
                <img class="logo-dark" style="max-width:90%" src="{{ asset('img/IAO/logo-dark.png') }}" alt="Iron Age Office" />
            </a>
        </div>
        <!-- End Logo -->

        <!-- Mobile Navbar Icon -->
        <div class="nav-mobile nav-bar-icon">
            <span></span>
        </div>
        <!-- End Mobile Navbar Icon -->

        <!-- Navbar Navigation -->
        <div class="nav-menu" style="font-weight:100;">
            <ul class="nav-menu-inner">
                <li>
                    <a href="{{ url('/') }}">Home </a>
                </li>
                <li>
                    <a class="menu-has-sub">About Us <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-dropdown dropdown">
                        <li><a href="{{ url('our-story') }}">Our Story</a></li>
                        <li><a href="{{ url('stains') }}">Stains</a></li>
                        <li><a href="{{ url('in-the-news') }}">In The News</a></li>
                        <li><a href="{{ url('getting-started') }}">Getting Started</a></li>
                        <li><a href="{{ url('trade') }}">Trade </a></li>
                        <li><a href="{{ url('blog') }}">Blog </a></li>
                    </ul>
                </li>
                <li>
                    <a class="menu-has-sub">Products <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-dropdown dropdown">
                        <li><a href="{{ url('products/all') }}">All</a></li>
                        <li><a href="{{ url('products/desks') }}">Desks</a></li>
                        <li><a href="{{ url('products/tables') }}">Tables</a></li>
                        <li><a href="{{ url('products/storage') }}">Storage</a></li>
                        <li><a href="{{ url('products/workstations') }}">Workstations</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('commercial') }}">Commercial </a>
                </li>
                <li>
                    <a href="{{ url('gallery') }}">Gallery </a>
                </li>
                <li>
                    <a href="{{ url('contact') }}"><i class="fa fa-envelope-o"></i> Contact</a>
                </li>
            </ul>
        </div>
    </div>
</header>