<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,jQuery,CSS,HTML,RWD,Dashboard">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>CoreUI - Open Source Bootstrap Admin Template</title>
    <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">☰</button>
    <a class="navbar-brand" href="#"></a>
    <ul class="nav navbar-nav hidden-md-down">
        <li class="nav-item">
            <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="hidden-md-down">admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button type="submit"
                            class="dropdown-item">
                        <i class="fa fa-lock"></i>
                        Logout
                    </button>
                </form>
            </div>
        </li>
    </ul>
</header>

<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html"><i class="icon-speedometer"></i>Dashboard</a>
                </li>

                <li class="nav-title">
                    Pages
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/categories') }}">
                        <i class="icon-speedometer"></i>Categories
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/products') }}">
                        <i class="icon-speedometer"></i>Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/sliders') }}">
                        <i class="icon-speedometer"></i>Sliders
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/orders') }}">
                        <i class="icon-speedometer"></i>Orders
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main content -->
    <main class="main">
        <ol class="breadcrumb"></ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                @yield('content')
            </div>
        </div>
    </main>
</div>


<!-- Bootstrap and necessary plugins -->
<script src="{{ url('bower_components/jquery/dist/jquery.min.js') }}"></script>
{{--<script src="{{ url('bower_components/tether/dist/js/tether.min.js') }}"></script>--}}
<script src="{{ url('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
{{--<script src="{{ url('bower_components/chart.js/dist/Chart.min.js') }}"></script>--}}
<script src="{{ url('js/app.js') }}"></script>
{{--<script src="{{ url('js/views/main.js') }}"></script>--}}
</body>

</html>