<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('frontend') }}/img/favicon.png" type="image/png">
    <title>@yield('title') || Portfolio</title>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/linericon/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/nice-select/css/nice-select.css">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
</head>

<body>

<!--================ Start Header Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="{{ asset('frontend') }}/img/logo.png" alt=""></a>
                <a class="navbar-brand logo_inner_page" href="/"><img src="{{ asset('frontend') }}/img/logo2.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="portfolio-details.html">Portfolio Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Area =================-->
@yield('content')
<!--================ Start Brands Area =================-->
<section class="brands-area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="owl-carousel brand-carousel">
                    <!-- single-brand -->
                    <div class="single-brand-item d-table">
                        <div class="d-table-cell">
                            <img src="{{ asset('frontend') }}/img/brands/logo1.png" alt="">
                        </div>
                    </div>
                    <!-- single-brand -->
                    <div class="single-brand-item d-table">
                        <div class="d-table-cell">
                            <img src="{{ asset('frontend') }}/img/brands/logo2.png" alt="">
                        </div>
                    </div>
                    <!-- single-brand -->
                    <div class="single-brand-item d-table">
                        <div class="d-table-cell">
                            <img src="{{ asset('frontend') }}/img/brands/logo3.png" alt="">
                        </div>
                    </div>
                    <!-- single-brand -->
                    <div class="single-brand-item d-table">
                        <div class="d-table-cell">
                            <img src="{{ asset('frontend') }}/img/brands/logo4.png" alt="">
                        </div>
                    </div>
                    <!-- single-brand -->
                    <div class="single-brand-item d-table">
                        <div class="d-table-cell">
                            <img src="{{ asset('frontend') }}/img/brands/logo5.png" alt="">
                        </div>
                    </div>
                    <!-- single-brand -->
                    <div class="single-brand-item d-table">
                        <div class="d-table-cell">
                            <img src="{{ asset('frontend') }}/img/brands/logo3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Brands Area =================-->

<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="footer_top flex-column">
                    <div class="footer_logo">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/img/logo2.png" alt="">
                        </a>
                        <div class="d-lg-block d-none">
                            <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                                <div class="collapse navbar-collapse offset">
                                    <ul class="nav navbar-nav menu_nav mx-auto">
                                        <li class="nav-item"><a class="nav-link text-white" href="index.html">Home</a></li>
                                        <li class="nav-item"><a class="nav-link text-white" href="about.html">About</a></li>
                                        <li class="nav-item"><a class="nav-link text-white" href="portfolio.html">Portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link text-white" href="blog.html">BLog</a></li>
                                        <li class="nav-item"><a class="nav-link text-white" href="services.html">Services </a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="footer_social mt-lg-0 mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-skype"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer_bottom justify-content-center">
            <p class="col-lg-8 col-sm-12 footer-text">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://github.com/zaman7" target="_blank">Zaman</a>
            </p>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('frontend') }}/js/jquery-3.2.1.min.js"></script>
<script src="{{ asset('frontend') }}/js/popper.js"></script>
<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend') }}/js/stellar.js"></script>
<script src="{{ asset('frontend') }}/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('frontend') }}/vendors/isotope/isotope-min.js"></script>
<script src="{{ asset('frontend') }}/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{ asset('frontend') }}/js/mail-script.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{ asset('frontend') }}/js/gmaps.min.js"></script>
<script src="{{ asset('frontend') }}/js/theme.js"></script>
</body>

</html>