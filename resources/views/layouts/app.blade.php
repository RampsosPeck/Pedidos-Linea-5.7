<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Pedidos-Linea</title>

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--     Scripts
    <script src="{{ asset('js/app.js') }}" defer></script>  --}}

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css?v=1.2.1" rel="stylesheet"/>
</head>

<body class="login-page">
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../presentation.html">Material Kit PRO</a>
            </div>

            <div class="collpase navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li>
                            <a href="{{ route('login') }}">{{ __('INGRESAR') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">{{ __('REGISTRARME') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="material-icons">view_day</i> {{ Auth::user()->fullname }}
                                <b class="caret"></b>
                            </a>

                            <ul class="dropdown-menu dropdown-with-icons" >
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header header-filter clear-filter" filter-color="purple" data-parallax="true" style="background-image: url('assets/img/bg0.jpg');">
        @yield('content')
        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                               About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com" target="_blank">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>

</body>
    <!--   Core JS Files   -->
    <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/material.min.js"></script>

    <!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
    <script src="../assets/js/moment.min.js"></script>

    <!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
    <script src="../assets/js/nouislider.min.js" type="text/javascript"></script>

    <!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
    <script src="../assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

    <!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
    <script src="../assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>

    <!--    Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
    <script src="../assets/js/bootstrap-tagsinput.js"></script>

    <!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
    <script src="../assets/js/jasny-bootstrap.min.js"></script>

    <!--    Plugin For Google Maps   -->
    <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
    <script src="../assets/js/material-kit.js?v=1.2.1" type="text/javascript"></script>
</html>



    {{-- <div class="page-header header-filter" filter-color="purple" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">


      <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('assets/img/bg0.jpg');"> --}}








