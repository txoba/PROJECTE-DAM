<!DOCTYPE html>
<html lang="es-ES" class="no-js">
<!-- Begin Head -->

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GOD Music</title>
    <link rel="canonical" href="http://godmusic.com/" data-ajax-meta="binded">
    <meta name="keywords" content="HTML5 Theme" />
    <meta name="description" content="Megakit - HTML5 Theme">
    <meta name="author" content="keenthemes.com">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

    <!-- Vendor Styles -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css" />
    <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css" />
    <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/global/global.css" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/megakit-master/HTML/img/IconGodMusic.ico" type="image/x-icon">
</head>
<!-- End Head -->

<!-- Body -->

<body>
    <div id="inicio" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content panel panel-login">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="" method="post" role="form" style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember"> Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id="register-form" action="/megakit-master/HTML/index_home2.php" method="POST" role="form" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline">
                                  <input type="radio" name="usu" value="f">Fan
                                </label>
                                    <label class="radio-inline">
                                  <input type="radio" name="usu" value="m">Musico
                                </label>
                                    <label class="radio-inline">
                                  <input type="radio" name="usu" value="l">Local
                                </label>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">

                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== HEADER V2 ==========-->
    <header class="navbar-fixed-top s-header-v2 js__header-sticky">
        <!-- Navbar -->
        <nav class="s-header-v2__navbar">
            <div class="container g-display-table--lg">
                <!-- Navbar Row -->
                <div class="s-header-v2__navbar-row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="s-header-v2__navbar-col">
                        <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                                <span class="s-header-v2__toggle-icon-bar"></span>
                            </button>
                    </div>

                    <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                        <!-- Logo -->
                        <div class="s-header-v2__logo">
                            <a href="index.html" class="s-header-v2__logo-link">
                                <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="/megakit-master/HTML/img/logo.PNG" alt="Dublin Logo" width="255px" high="208px">
                                <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="/megakit-master/HTML/img/logo.PNG" alt="Dublin Logo" width="255px" high="208px">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                            <ul class="s-header-v2__nav">
                                <!-- Home -->
                                <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                    <a href="index.html" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOMEPAGE <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                    <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                        <li><a href="#js__scroll-to-section" class="s-header-v2__dropdown-menu-link">Proximos conciertos</a></li>
                                        <li><a href="#js__scroll-to-section1" class="s-header-v2__dropdown-menu-link">Inscribirse conciertos</a></li>
                                        <li><a href="#js__scroll-to-section2" class="s-header-v2__dropdown-menu-link">Votar Conciertos</a></li>
                                        <li><a href="#js__scroll-to-section3" class="s-header-v2__dropdown-menu-link">Votar Locales</a></li>
                                    </ul>
                                </li>
                                <!-- End Home -->

                                <!-- Profile -->
                                <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                    <a href="javascript:void(0);" class="dropdown-toggle s-header-v2__nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                    <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                        <li><a href="team.html" class="s-header-v2__dropdown-menu-link">Mi Perfil</a></li>
                                        <li><a href="faq.html" class="s-header-v2__dropdown-menu-link">Modificar Perfil</a></li>
                                    </ul>
                                </li>
                                <!-- End Profile -->

                                <li class="s-header-v2__nav-item"><a href="#" class="s-header-v2__nav-link">About</a></li>
                                <li class="s-header-v2__nav-item"><a href="#" class="s-header-v2__nav-link" data-toggle="modal" data-target="#inicio">Login</a></li>

                                <!-- Search -->
                                <li class="s-header-v2__nav-item">
                                    <div class="input-group">
                                        <div class="input-group-btn search-panel">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#contains">Contains</a></li>
                                                <li><a href="#its_equal">It's equal</a></li>
                                                <li><a href="#greather_than">Greather than ></a></li>
                                                <li><a href="#less_than">Less than < </a></li>
                                                <li class="divider"></li>
                                                <li><a href="#all">Anything</a></li>
                                            </ul>
                                        </div>
                                        <input type="hidden" name="search_param" value="all" id="search_param">
                                        <input type="text" class="form-control" name="x" placeholder="Search term...">
                                        <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                        </span>
                                    </div>
                                </li>
                                <!-- End Search -->
                            </ul>
                        </div>
                        <!-- End Nav Menu -->
                    </div>
                </div>
                <!-- End Navbar Row -->
            </div>
        </nav>
        <!-- End Navbar -->
    </header>
    <!--========== END HEADER V2 ==========-->
    

    <!--========== SWIPER SLIDER ==========-->
    <div id="js__scroll-to-section" class="s-swiper js__swiper-slider">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper">
            <div class="g-fullheight--xs g-bg-position--center swiper-slide swip" style="background: url('/megakit-master/HTML/img/1.png');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/2.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/3.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/4.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/5.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/6.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/7.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/8.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/9.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/10.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/12.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/13.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/14.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/15.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/16.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/17.png');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/megakit-master/HTML/img/19.jpg');">
            </div>
        </div>
        <!-- End Swiper Wrapper -->

        <!-- Pagination -->
        <div class="s-swiper__pagination-v1 s-swiper__pagination-v1--bc s-swiper__pagination-v1--white js__swiper-pagination"></div>
    </div>
    <!--========== END SWIPER SLIDER ==========-->

    <!--========== PAGE CONTENT ==========-->

    <!-- Testimonials -->
    <div id="js__scroll-to-section1" class="js__parallax-window" style="background: url(/megakit-master/HTML/img/Forvm/1.png) 50% 0 no-repeat fixed;">
        <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs">Inscribir conciertos</p>

        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Parallax -->
    <div id="js__scroll-to-section2" class="js__parallax-window" style="background: url(/megakit-master/HTML/img/3dDesigns/E3_0028.jpeg) 50% 0 no-repeat fixed;">
        <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
            <a href="http://keenthemes.com/" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">Votar Conciertos</a>
        </div>
    </div>

    <div id="js__scroll-to-section3" class="js__parallax-window" style="background: url(/megakit-master/HTML/img/Macba/macba.gif) 50% 0 no-repeat fixed;">
        <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">Votar locales</h2>
        </div>
    </div>
    <!-- End Parallax -->

    <!-- Form -->
    <div id="js__scroll-to-appointment" class="g-bg-color--sky-light g-padding-y-80--xs g-padding-y-125--sm">
        <div class="container g-bg-color--white g-box-shadow__dark-lightest-v3">
            <div class="row">
                <!-- Form -->
                <div class="col-md-8 js__form-eqaul-height-v1">
                    <div class="g-padding-x-40--xs g-padding-y-50--xs">
                        <h2 class="g-font-size-24--xs g-color--primary g-margin-b-50--xs">Make an Appointment</h2>
                        <form>
                            <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                    <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Full Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Phone Number">
                                </div>
                            </div>
                            <div class="row g-margin-b-50--xs g-margin-b-50--md">
                                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                                    <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Department">
                                </div>
                                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                                    <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Doctor">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* DD/MM/YY">
                                </div>
                            </div>
                            <div class="g-margin-b-50--xs">
                                <textarea class="form-control s-form-v4__input g-padding-l-0--xs" rows="5" placeholder="* What ails you?"></textarea>
                            </div>
                            <div class="g-text-center--xs">
                                <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Form -->

                <!-- Contacts -->
                <div class="col-md-4 g-bg-color--primary-ltr js__form-eqaul-height-v1">
                    <div class="g-overflow--hidden g-padding-x-40--xs g-padding-y-50--xs">
                        <h2 class="g-font-size-24--xs g-color--white g-margin-b-50--xs">Contact Us</h2>
                        <ul class="list-unstyled g-margin-b-70--xs">
                            <li class="clearfix g-color--white g-margin-b-40--xs">
                                <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                    <i class="g-font-size-20--xs g-color--white-opacity-light ti-location-pin"></i>
                                </div>
                                <div class="g-media__body">
                                    277 Bedford Avenue, <br> Brooklyn, NY 11211, New York
                                </div>
                            </li>
                            <li class="clearfix g-color--white g-margin-b-40--xs">
                                <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                    <i class="g-font-size-20--xs g-color--white-opacity-light ti-headphone-alt"></i>
                                </div>
                                <div class="g-media__body">
                                    + (1) 001 389 3720
                                </div>
                            </li>
                            <li class="clearfix g-color--white g-margin-b-40--xs">
                                <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                    <i class="g-font-size-20--xs g-color--white-opacity-light ti-email"></i>
                                </div>
                                <div class="g-media__body">
                                    support@keenthemes.com
                                </div>
                            </li>
                        </ul>
                        <ul class="list-inline g-ul-li-lr-15--xs">
                            <li><a href="#"><i class="g-font-size-20--xs g-color--white-opacity ti-facebook"></i></a></li>
                            <li><a href="#"><i class="g-font-size-20--xs g-color--white-opacity ti-twitter"></i></a></li>
                            <li><a href="#"><i class="g-font-size-20--xs g-color--white-opacity ti-instagram"></i></a></li>
                        </ul>
                        <i class="g-font-size-150--xs g-color--white-opacity-lightest ti-comments" style="position: absolute; bottom: -1.25rem; right: -1.25rem;"></i>
                    </div>
                </div>
                <!-- End Contacts -->
            </div>
        </div>
    </div>
    <!-- End Form -->
    <!--========== END PAGE CONTENT ==========-->

    <!--========== FOOTER ==========-->
    <footer class="g-bg-color--dark">
        <!-- Links -->
        <div class="g-hor-divider__dashed--white-opacity-lightest">
            <div class="container g-padding-y-80--xs">
                <div class="row">
                    <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                        <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Home</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">About</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Work</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                        <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Twitter</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Facebook</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Instagram</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">YouTube</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                        <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Subscribe to Our Newsletter</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Privacy Policy</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                        <h3 class="g-font-size-18--xs g-color--white">Megakit</h3>
                        <p class="g-color--white-opacity">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Links -->

        <!-- Copyright -->
        <div class="container g-padding-y-50--xs">
            <div class="row">
                <div class="col-xs-6">
                    <a href="index.html">
                        <img class="g-width-100--xs g-height-auto--xs" src="img/logo.png" alt="Megakit Logo">
                    </a>
                </div>
                <div class="col-xs-6 g-text-right--xs">
                    <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="http://keenthemes.com/preview/Megakit/">Megakit</a> Theme Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                </div>
            </div>
        </div>
        <!-- End Copyright -->
    </footer>
    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

    <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
    <!-- Vendor -->
    <script type="text/javascript" src="vendor/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
    <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="vendor/masonry/jquery.masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="vendor/masonry/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.equal-height.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

    <!-- General Components and Settings -->
    <script type="text/javascript" src="js/global.min.js"></script>
    <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
    <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
    <script type="text/javascript" src="js/components/swiper.min.js"></script>
    <script type="text/javascript" src="js/components/masonry.min.js"></script>
    <script type="text/javascript" src="js/components/equal-height.min.js"></script>
    <script type="text/javascript" src="js/components/parallax.min.js"></script>
    <script type="text/javascript" src="js/components/wow.min.js"></script>
    <!--========== END JAVASCRIPTS ==========-->

</body>
<!-- End Body -->

</html>
