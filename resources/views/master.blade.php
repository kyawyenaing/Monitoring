<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="icon/image" href="{{asset('img/monitor.png')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datepicker3.min.css')}}">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/progressbar.css')}}">
     <link rel="stylesheet" href="{{url('assets/css/tab.css')}}">

    <script src="{{url('assets/js/modernizr.js')}}"></script> <!-- Modernizr -->

    <title>E-gov System Monitoring | @yield('title')</title>
</head>
<body >
<div class="spinner"><i class="fa fa-spinner" aria-hidden="true"></i></div>
<header class="cd-main-header">

    <a href="#" class="cd-logo"><h3>System Monitoring</h3></a>

     

    <a href="#" class="cd-nav-trigger"><span></span></a>

    <nav class="cd-nav">
        <ul class="cd-top-nav">

            <li class="has-children account">
                <a href="#">
                    <img src="{{url('assets/img/user.png')}}" alt="user">{{ Auth::user()->name }}
                </a>
                <ul>
                        <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>

                </ul>
            </li>
        </ul>
    </nav>
   
</header> <!-- .cd-main-header -->
<main class="cd-main-content">
    <nav class="cd-side-nav">
        <ul style="min-height:615px;">
            <li class="cd-label">System Monitoring</li>
            <li class="@yield('active_dash')"><a href="{{url('/')}}"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
            <li class="@yield('active_eoffice')"><a href="{{url('/e-office')}}"><i class="fa fa-building-o" aria-hidden="true"></i> E-Office</a>

            </li>
            <li class="@yield('active_web')"><a href="{{url('/web-portal')}}"><i class="fa fa-building-o" aria-hidden="true"></i> Web Portal</a></li>
            <li class="@yield('active_server')"><a href="{{url('/server')}}"><i class="fa fa-server" aria-hidden="true"></i> Server</a></li>

        </ul>

    </nav>


    @yield('content')
</main>

<script src="{{url('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('assets/js/jquery.menu-aim.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{url('assets/js/socket.io.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/loader.js')}}"></script>
<script src="{{url('assets/js/main.js')}}"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('.spinner').fadeOut(1000);
    });
</script>
@yield('script')
</body>
</html>