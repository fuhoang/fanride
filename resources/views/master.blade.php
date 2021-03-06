<!DOCTYPE html>
<html lang="{{ config('app.locale')  }}">
    <head>
        
        <title>{{ config('app.name', 'FanRide') }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Fan ride">
        <meta name="author" content="Fan Ride">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
        <link href="{{ asset('/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

    </head>
    <body>
        <!-- HEADER START -->
        <div class="main-navigation navbar-fixed-top">
            <nav class="navbar navbar-default">
                <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand topnav" href="/">
                        {{ config('app.name', 'FanRide') }}
                  </a>
                </div>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                  @if(Auth::check())
                  <ul class="nav navbar-nav navbar-left">
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ url('/findaride') }}">Find a ride</a></li>
                    <li><a href="{{ url('/match') }}">Offer a ride</a></li>
                    <li><a href="{{ url('/account/' . Auth::user()->id . '/edit') }}">Account</a></li>
                    <li><a href="{{ url('/help') }}">Help</a></li>
                   </ul>
                   @endif


                  <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())

                    <li><a href="{{ url('/findaride') }}">Find a ride</a></li>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endif
                 </ul>
                </div>
              </div>

            </nav>
        </div>
        <!--HEADER END-->


        <div class="content-section">
        @yield('content')
        </div>
        

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
        <script type="text/javascript" src="{{ asset('/js/bootstrap-datepicker.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/bootstrap-select.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>



        <script type="text/javascript">
        
        var date = new Date();
    
        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            todayHighlight:true,
            startView:0,
            startDate:date
        });
           
    </script>
    </body>
</html>
