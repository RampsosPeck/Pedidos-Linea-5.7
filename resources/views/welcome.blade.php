<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Pedidos-Linea</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css?v=1.2.1" rel="stylesheet"/>
</head>

<body class="landing-page">
    <nav class="navbar navbar-danger navbar-transparent navbar-absolute">
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

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @auth
                        <li>
                            <a href="{{ url('/home') }}">
                                <i class="material-icons">apps</i> ESCRITORIO
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}">
                                <i class="material-icons">apps</i> INGRESAR
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">
                                    <i class="material-icons">apps</i> REGISTRAR
                                </a>
                            </li>
                        @endif
                    @endauth

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">view_day</i> Sections
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href="../sections.html#headers">
                                    <i class="material-icons">dns</i> Headers
                                </a>
                            </li>
                            <li>
                                <a href="../sections.html#features">
                                    <i class="material-icons">build</i> Features
                                </a>
                            </li>
                            <li>
                                <a href="../sections.html#blogs">
                                    <i class="material-icons">list</i> Blogs
                                </a>
                            </li>
                            <li>
                                <a href="../sections.html#teams">
                                    <i class="material-icons">people</i> Teams
                                </a>
                            </li>
                            <li>
                                <a href="../sections.html#projects">
                                    <i class="material-icons">assignment</i> Projects
                                </a>
                            </li>
                            <li>
                                <a href="../sections.html#pricing">
                                    <i class="material-icons">monetization_on</i> Pricing
                                </a>
                            </li>
                            <li>
                                <a href="../sections.html#testimonials">
                                    <i class="material-icons">chat</i> Testimonials
                                </a>
                            </li>
                            <li>
                                <a href="../sections.html#contactus">
                                    <i class="material-icons">call</i> Contacts
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">view_carousel</i> Examples
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href="../examples/about-us.html">
                                    <i class="material-icons">account_balance</i> About Us
                                </a>
                            </li>
                            <li>
                                <a href="../examples/blog-post.html">
                                    <i class="material-icons">art_track</i> Blog Post
                                </a>
                            </li>
                            <li>
                                <a href="../examples/blog-posts.html">
                                    <i class="material-icons">view_quilt</i> Blog Posts
                                </a>
                            </li>
                            <li>
                                <a href="../examples/contact-us.html">
                                    <i class="material-icons">location_on</i> Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="../examples/landing-page.html">
                                    <i class="material-icons">view_day</i> Landing Page
                                </a>
                            </li>
                            <li>
                                <a href="../examples/login-page.html">
                                    <i class="material-icons">fingerprint</i> Login Page
                                </a>
                            </li>
                            <li>
                                <a href="../examples/pricing.html">
                                    <i class="material-icons">attach_money</i> Pricing Page
                                </a>
                            </li>
                            <li>
                                <a href="../examples/ecommerce.html">
                                    <i class="material-icons">shop</i> Ecommerce Page
                                </a>
                            </li>
                            <li>
                                <a href="../examples/product-page.html">
                                    <i class="material-icons">beach_access</i> Product Page
                                </a>
                            </li>
                            <li>
                                <a href="../examples/profile-page.html">
                                    <i class="material-icons">account_circle</i> Profile Page
                                </a>
                            </li>
                            <li>
                                <a href="../examples/signup-page.html">
                                    <i class="material-icons">person_add</i> Signup Page
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="http://www.creative-tim.com/buy/material-kit-pro?ref=presentation" target="_blank" class="btn btn-white btn-simple">
                            <i class="material-icons">shopping_cart</i> Buy Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/bg8.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Your Story Starts With Us.</h1>
                    <h4>Every landing page needs a small description after the big bold title, that's why we added this text here. Add here all the information that can make you or your product create the first impression.</h4>
                    <br />
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
                        <i class="fa fa-play"></i> Watch video
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Let's talk product</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                    </div>
                </div>

                <div class="section">
                       <div class="container">
                           <h2 class="section-title">Latest Offers</h2>
                           <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-3">
                                    <div class="card card-product card-plain">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img src="../assets/img/examples/gucci.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="#pablo"> {{ $product->name }} </a>
                                            </h4>
                                            <p class="card-description"> {{ $product->description }} </p>
                                            <div class="footer">
                                                <div class="price-container">
                                                    <span class="price price-old"> &euro;1,430</span>
                                                    <span class="price price-new"> &euro;743</span>
                                                </div>
                                                <div class="stats">
                                                    <button type="button" rel="tooltip" title="" class="btn btn-just-icon btn-simple btn-rose" data-original-title="Saved to Wishlist">
                                                       <i class="material-icons">favorite</i>
                                                   </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                           </div>
                       </div>
                </div>

                <div class="features">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="material-icons">chat</i>
                                </div>
                                <h4 class="info-title">Free Chat</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">verified_user</i>
                                </div>
                                <h4 class="info-title">Verified Users</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">fingerprint</i>
                                </div>
                                <h4 class="info-title">Fingerprint</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section text-center">
                <h2 class="title">Here is our team</h2>

                <div class="team">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="col-md-5">
                                    <div class="card-image">
                                        <a href="#pablo">
                                            <img class="img" src="../assets/img/faces/card-profile1-square.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-content">
                                        <h4 class="card-title">Alec Thompson</h4>
                                        <h6 class="category text-muted">Founder</h6>

                                        <p class="card-description">
                                            Don't be scared of the truth because we need to restart the human foundation in truth...
                                        </p>

                                        <div class="footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="col-md-5">
                                    <div class="card-image">
                                        <a href="#pablo">
                                            <img class="img" src="../assets/img/faces/card-profile6-square.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-content">
                                        <h4 class="card-title">Kendall Andrew</h4>
                                        <h6 class="category text-muted">Graphic Designer</h6>

                                        <p class="card-description">
                                            Don't be scared of the truth because we need to restart the human foundation in truth...
                                        </p>

                                        <div class="footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="col-md-5">
                                    <div class="card-image">
                                        <a href="#pablo">
                                            <img class="img" src="../assets/img/faces/card-profile4-square.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-content">
                                        <h4 class="card-title">Gina Andrew</h4>
                                        <h6 class="category text-muted">Web Designer</h6>

                                        <p class="card-description">
                                            I love you like Kanye loves Kanye. Don't be scared of the truth.
                                        </p>

                                        <div class="footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-youtube"><i class="fa fa-youtube-play"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-instagram"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="col-md-5">
                                    <div class="card-image">
                                        <a href="#pablo">
                                            <img class="img" src="../assets/img/faces/card-profile2-square.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-content">
                                        <h4 class="card-title">George West</h4>
                                        <h6 class="category text-muted">Backend Hacker</h6>

                                        <p class="card-description">
                                            I love you like Kanye loves Kanye. Don't be scared of the truth because we need to restart the human foundation.
                                        </p>

                                        <div class="footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <div class="section section-contacts">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center title">Work with us</h2>
                        <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Name</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group label-floating">
                                <label class="control-label">Your Messge</label>
                                <textarea class="form-control" rows="4"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    <button class="btn btn-primary btn-raised">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

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
                &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
            </div>
        </div>
    </footer>

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