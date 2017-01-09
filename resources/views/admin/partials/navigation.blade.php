<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color:white;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/" style="padding-left:45px; padding-right:45px;">Iron Age Office</a>
    </div>
    <!-- /.navbar-header -->

    <!-- menu items -->
    <div class="collapse navbar-collapse" style="padding-right: 45px;">
        <ul class="nav navbar-nav navbar-right">
            {{--<li>--}}
                {{--<a href="{{ route('admin.dashboard') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>--}}
            {{--</li>--}}
            {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-list"></i> Orders <i class="fa fa-fw fa-caret-down"></i></a>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<li>--}}
                        {{--<a href="#">All Orders</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Pending Orders</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Completed Orders</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Issue Orders</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-fw fa-bank"></i> Banks</a>--}}
            {{--</li>--}}
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-fw fa-bars"></i>
                    Categories
                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('admin/categories/create') }}">Add</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/categories') }}">List</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-fw fa-image"></i>
                    Gallery
                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('admin/gallery/create') }}">Add</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/gallery') }}">List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('logout') }}">Logout</a>
            </li>
        </ul>
    </div>
    <!-- end menu items -->
</nav>