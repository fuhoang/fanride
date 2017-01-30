<!DOCTYPE html>
<html>
    <head>
        
        <title>Fan Ride</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Fan ride">
        <meta name="author" content="Fan Ride">

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
        <link href="{{ asset('/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
            <div class="container topnav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand topnav" href="/">Fan Ride</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ url('/login') }}">Login</a>
                        </li>
                        <li>
                            <a href="{{ url('/register') }}">Register</a>

                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>

       

        @yield('content')

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-inline">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li class="footer-menu-divider">&sdot;</li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li class="footer-menu-divider">&sdot;</li>
                            <li>
                                <a href="#services">Services</a>
                            </li>
                            <li class="footer-menu-divider">&sdot;</li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                        </ul>
                        <p class="copyright text-muted small">Copyright &copy; Fan Ride 2017. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        
        <script type="text/javascript" src="{{ asset('/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
