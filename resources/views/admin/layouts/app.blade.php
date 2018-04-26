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
                <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="hidden-md-down">admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">

                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <div class="dropdown-header text-center">
                    <strong>Settings</strong>
                </div>

                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-default">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
                <div class="divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
                <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
            </div>
        </li>
        <li class="nav-item hidden-md-down">
            <a class="nav-link navbar-toggler aside-menu-toggler" href="#">☰</a>
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
                    <a class="nav-link" href="{{ url('admin/products') }}">
                        <i class="icon-speedometer"></i>Products
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