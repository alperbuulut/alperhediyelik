@extends('layouts.app')

@section('content')
    <!--hero section-->
    <div class="bs-hero full-screen slide-top-adjust">
        <!--carousel-->
        <div id="carousel-arrow" class="carousel slide carousel-fade full-width" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-arrow" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-arrow" data-slide-to="1"></li>
                <li data-target="#carousel-arrow" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div id="fullscreen-banner" class="carousel-inner fullscreen-banner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('img/decor/banner1.jpg') }}" alt="">

                    <div class="container">
                        <div class="bs-info bs-info-right fashion-title fadeInDown animated">
                            <h1 class="text-uppercase  ">think decor</h1>
                            <h3 class="text-uppercase ls-20">we are massive</h3>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('img/decor/banner2.jpg') }}" alt="">
                    <div class="container">
                        <div class="bs-info bs-info fashion-title fadeInDown animated">
                            <h1 class="text-uppercase light-txt ">think Elegant</h1>
                            <h3 class="text-uppercase light-txt ls-20">we love design</h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('img/decor/banner3.jpg') }}" alt="">
                    <div class="container">
                        <div class="bs-info bs-info-center fashion-title fadeInDown animated">
                            <h1 class="text-uppercase">better living</h1>
                            <h3 class="text-uppercase ls-20">Creative work</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-arrow" role="button" data-slide="prev"></a>
            <a class="right carousel-control" href="#carousel-arrow" role="button" data-slide="next"></a>
        </div>
        <!--carousel-->
    </div>
    <!--hero section-->


    <!--body content start-->
    <section class="body-content">
        <!--category-->
        <div class="page-content p-bot-0">
            <div class="container magazine-grid decor-category">
                <div class="row">
                    <div class="col-md-6">
                        <a href="#" class="fit-img">
                            <img src="{{ asset('img/decor/cat1.jpg') }}" alt="" />
                            <span class="title dark">@lang('app-layout.necklace')</span>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="fit-img">
                            <img src="{{ asset('img/decor/cat2.jpg') }}" alt="" />
                            <span class="title light">@lang('app-layout.earring')</span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="fit-img">
                            <img src="{{ asset('img/decor/cat3.jpg') }}" alt="" />
                            <span class="title dark">@lang('app-layout.ring')</span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="fit-img">
                            <img src="{{ asset('img/decor/cat4.jpg') }}" alt="" />
                            <span class="title light">@lang('app-layout.bracelet')</span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="fit-img">
                            <img src="{{ asset('img/decor/cat5.jpg') }}" alt="" />
                            <span class="title dark">@lang('app-layout.others')</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--category-->


        <!--portfolio-->
        <div class="page-content">
            <div class="container">
                <div class="row">

                    <!--title-->
                    <div class="heading-title border-short-bottom text-center">
                        <h3 class="text-uppercase">@lang('welcome.recent')</h3>
                        <div class="half-txt">@lang('welcome.recent_sub')</div>
                    </div>
                    <!--title-->

                    <div class=" portfolio-with-title col-3 gutter portfolio-gallery">
                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ asset('img/decor/port1.jpg') }}" alt="">
                                <div class="portfolio-hover">
                                    <div class="action-btn">
                                        <a href="{{ asset('img/decor/port1.jpg') }}" class="popup-gallery" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title text-center">
                                <h4><a href="{{ asset('img/decor/port1.jpg') }}" class="popup-gallery2" title="lightbox view">perspiciatis unde omnis</a></h4>
                                <p>$39.99</p>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ asset('img/decor/port2.jpg') }}" alt="">
                                <div class="portfolio-hover">
                                    <div class="action-btn">
                                        <a href="{{ asset('img/decor/port2.jpg') }}" class="popup-gallery" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title text-center">
                                <h4><a href="{{ asset('img/decor/port2.jpg') }}" class="popup-gallery2" title="lightbox view">denouncing pleasure</a></h4>
                                <p>$39.99</p>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ asset('img/decor/port3.jpg') }}" alt="">
                                <div class="portfolio-hover">
                                    <div class="action-btn">
                                        <a href="{{ asset('img/decor/port3.jpg') }}" class="popup-gallery" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title text-center">
                                <h4><a href="{{ asset('img/decor/port3.jpg') }}" class="popup-gallery2" title="lightbox view">annoyances accepted</a></h4>
                                <p>$39.99</p>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ asset('img/decor/port4.jpg') }}" alt="">
                                <div class="portfolio-hover">
                                    <div class="action-btn">
                                        <a href="{{ asset('img/decor/port4.jpg') }}" class="popup-gallery" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title text-center">
                                <h4><a href="{{ asset('img/decor/port4.jpg') }}" class="popup-gallery2" title="lightbox view">annoyances accepted</a></h4>
                                <p>$39.99</p>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ asset('img/decor/port5.jpg') }}" alt="">
                                <div class="portfolio-hover">
                                    <div class="action-btn">
                                        <a href="{{ asset('img/decor/port5.jpg') }}" class="popup-gallery" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title text-center">
                                <h4><a href="{{ asset('img/decor/port5.jpg') }}" class="popup-gallery2" title="lightbox view">annoyances accepted</a></h4>
                                <p>$39.99</p>
                            </div>
                        </div>

                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ asset('img/decor/port6.jpg') }}" alt="">
                                <div class="portfolio-hover">
                                    <div class="action-btn">
                                        <a href="{{ asset('img/decor/port6.jpg') }}" class="popup-gallery" title="lightbox view"> <i class="icon-basic_magnifier"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title text-center">
                                <h4><a href="{{ asset('img/decor/port6.jpg') }}" class="popup-gallery2" title="lightbox view">annoyances accepted</a></h4>
                                <p>$39.99</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--portfolio-->

        <!--parallax-->
        <div class="parallax-inner " style="background-image: url({{ asset('img/copper-workshop.png') }})">
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-6">--}}
                        {{--<div class="heading-title-alt text-left m-bot-0 inline-block">--}}
                            {{--<h1 class="text-uppercase txt-extra-xl light-txt l-weight">30% Discount</h1>--}}
                            {{--<h3 class="text-uppercase light-txt">for this summer only</h3>--}}
                            {{--<a href="#" class="btn btn-medium  btn-light-solid m-top-30"> shop now </a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <!--parallax-->

        <!--blog-->
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <!--post style 6 start-->
                    <div class="post-list-aside">
                        <div class="post-single">
                            <div class="col-md-6">
                                <div class="post-img">
                                    <img src="{{ asset('img/decor/featured_product.jpg') }}" alt="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="post-desk text-center m-top-50">
                                    <span class="theme-color text-uppercase">Featured item</span>
                                    <h4 class="text-uppercase">
                                        <a href="#">antic single sofa</a>
                                    </h4>

                                    <p class="p-top-30">
                                        Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente.
                                    </p>
                                    <div class="theme-color txt-xl">$240</div>

                                    <a href="#" class="btn btn-medium btn-dark-border m-top-30 m-r-0"> Buy now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--post style 6 end-->
                </div>
            </div>
        </div>
        <!--blog-->

        <hr/>
        <!--outlets-->
        <div class="page-content">
            <div class="container">
                <div class="row">

                    <!--title-->
                    <div class="heading-title border-short-bottom text-center">
                        <h3 class="text-uppercase">outlets</h3>
                        <div class="half-txt">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit</div>
                    </div>
                    <!--title-->


                    <div class="col-md-4">
                        <h4 class="text-uppercase">sydney</h4>
                        <address>
                            <p>
                                Upper Level, The Rocks, Sydney 2000 <br/>
                                Phone: +62 500 800 123<br/>
                                Email: testmail@yourdomain.com<br/>
                                <a href="#" class="theme-color text-uppercase"><i class="fa fa-map-marker"></i>  view map</a>
                            </p>
                        </address>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-uppercase">canberra</h4>
                        <address>
                            <p>
                                Upper Level, The Rocks, Sydney 2000 <br/>
                                Phone: +62 500 800 123<br/>
                                Email: testmail@yourdomain.com<br/>
                                <a href="#" class="theme-color text-uppercase"><i class="fa fa-map-marker"></i>  view map</a>
                            </p>
                        </address>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-uppercase">darwin</h4>
                        <address>
                            <p>
                                Upper Level, The Rocks, Sydney 2000 <br/>
                                Phone: +62 500 800 123<br/>
                                Email: testmail@yourdomain.com<br/>
                                <a href="#" class="theme-color text-uppercase"><i class="fa fa-map-marker"></i>  view map</a>
                            </p>
                        </address>
                    </div>

                </div>
            </div>
        </div>
        <!--outlets-->

    </section>
    <!--body content end-->
@endsection