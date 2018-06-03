<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/main.css')}}">

    <script src="{{url('assets/js/modernizr.js')}}"></script> <!-- Modernizr -->

    <title>E-gov System Monitoring</title>
</head>
<body>
<header class="cd-main-header">
    <a href="#" class="cd-logo"></a>
    <div class="cd-search is-hidden">
        <form action="#">
            <input type="search" placeholder="Search...">
        </form>
    </div> <!-- cd-search -->

    <a href="#" class="cd-nav-trigger"><span></span></a>

    <nav class="cd-nav">
        <ul class="cd-top-nav">

            <li class="has-children account">
                <a href="#">
                    <img src="{{url('assets/img/user.png')}}" alt="user">Account</a>
                <ul>

                        <li><a href="{{url('/login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                        <li><a href="{{url('/register')}}"><i class="fa fa-registered" aria-hidden="true"></i> Register</a></li>

                </ul>
            </li>
        </ul>
    </nav>
</header> <!-- .cd-main-header -->
<main class="cd-main-content">
    <div class="container login_container">
        <div class="col-sm-8 col-sm-offset-2 login_cont">

                <h3 class="login-h3">Login</h3>
            <hr class="hor-line">

            <form method="post">
                {{ csrf_field() }}
                @foreach($errors->all() as $error )
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                    </label>
                </div>
                <p><a href="{{url('register')}}">Create a new account?</a></p>
                <br>
                <button type="submit" class="btn btn-login">Login</button>
            </form>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{url('assets/js/jquery.menu-aim.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
<script src="{{url('assets/js/main.js')}}"></script>

</body>
</html>
