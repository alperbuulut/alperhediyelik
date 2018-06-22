<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">

    <title>Alper Hediyelik</title>

    <!--common style-->
    <link href='http://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/elasic-slider/elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/iconmoon/linea-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shortcodes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default-theme.css') }}">
    <!-- endinject -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <!--<script src="assets/vendor/backward/html5shiv.js"></script>-->
    <!--<script src="assets/vendor/backward/respond.min.js"></script>-->
    {{--<![endif]-->--}}
</head>

<body>

<!--  preloader start -->
<div id="tb-preloader">
    <div class="tb-preloader-wave"></div>
</div>
<!-- preloader end -->


<div class="wrapper">

    <!--header start-->
    <header class="l-header l-header_overlay">

        <div class="l-navbar l-navbar_expand l-navbar_t-light-trans js-navbar-sticky">
            <div class="container-fluid">
                <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                    <!--logo start-->
                    <a href="{{ url('/') }}" class="logo-brand">
                        <img class="retina" src="{{ asset('img/logo-main3.png') }}" alt="Massive">
                    </a>
                    <!--logo end-->

                    <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                        <li class="active"><a href="#">@lang('app-layout.home')</a></li>

                        <li class=""><a href="javascript:void(0)">@lang('app-layout.categories')</a>
                            <ul class="dropdown">
                                @foreach($categories as $category)
                                    <li><a href="{{ route('category', $category->slug) }}">{{ ${'category'}->{Config::get('app.locale')}  }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class=""><a href="#">@lang('app-layout.about')</a></li>

                        <li class=""><a href="#">@lang('app-layout.contact')</a></li>

                        <li class="">
                            <a href="javascript:void(0)" data-toggle="dropdown">
                                {{ Config::get('languages')[App::getLocale()] }}
                            </a>
                            <ul class="dropdown">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <li>
                                            <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>

                        @guest
                        @else
                        <li class="nav-divider" aria-hidden="true"><a href="javascript:void(0)">|</a></li>

                        <li class=""><a href="javascript:void(0)">{{ Auth::user()->name }}</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ ('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest

                    </ul>

                </nav>
            </div>
        </div>

    </header>
    <!--header end-->
</div>

<main class="py-4">
    @yield('content')
</main>


<!--footer start -->
<footer id="footer" class="gray footer-3">
    <div class="container">

        <div class="f-logo-center">
            <a href="javascript:void(0)" class="footer-logo">
                <img class="retina" src="{{ asset('img/logo-main1.png') }}" width="100px" height="50px" alt="">
            </a>
        </div>
        <!--<div class="sub-title">THE ULTIMATE THEME WITH MASSIVE COLLECTION</div>-->

        <div class="col-md-6">
            <div class="copyright">
                © AlperHediyelik 2018.
            </div>
            <div class="copyright-sub-title text-uppercase">
                @lang('app-layout.reserved')
            </div>
        </div>
        <div class="col-md-6">
            <div class="social-link pull-right circle ">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

</div>


<script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBvoxNVNChCmTJqmmLFKEu_QyakDi5wOds"></script>

<!-- inject:js -->
<script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>
<script src="{{ asset('vendor/jquery/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-validator/validator.min.js') }}"></script>
<script src="{{ asset('vendor/breakpoint/breakpoint.js') }}"></script>
<script src="{{ asset('vendor/count-to/jquery.countTo.js') }}"></script>
<script src="{{ asset('vendor/countdown/jquery.countdown.js') }}"></script>
<script src="{{ asset('vendor/easing/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('vendor/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('vendor/elasic-slider/jquery.eislideshow.js') }}"></script>
<script src="{{ asset('vendor/flex-slider/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('vendor/gmap/jquery.gmap.min.js') }}"></script>
<script src="{{ asset('vendor/images-loaded/imagesloaded.js') }}"></script>
<script src="{{ asset('vendor/isotope/jquery.isotope.js') }}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendor/mailchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('vendor/menuzord/menuzord.js') }}"></script>
<script src="{{ asset('vendor/nav/jquery.nav.js') }}"></script>
<script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/parallax-js/parallax.min.js') }}"></script>
<script src="{{ asset('vendor/smooth/smooth.js') }}"></script>
<script src="{{ asset('vendor/sticky/jquery.sticky.min.js') }}"></script>
<script src="{{ asset('vendor/touchspin/touchspin.js') }}"></script>
<script src="{{ asset('vendor/typist/typist.js') }}"></script>
<script src="{{ asset('vendor/visible/visible.js') }}"></script>
<script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<!-- endinject -->
</body>

</html>
