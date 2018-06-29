
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
                        <img class="retina" src="{{ asset('img/logo-main3.png') }}" alt="alperhediyelik">
                    </a>
                    <!--logo end-->

                    <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="{{ url('/') }}">@lang('app-layout.home')</a></li>
                        @if(isset($categories))
                            <li class="{{ Request::is('category/necklace', 'category/earring', 'category/ring', 'category/bracelet', 'category/other', 'category/lamp') ? "active" : "" }}"><a href="javascript:void(0)">@lang('app-layout.categories')</a>
                                <ul class="dropdown">
                                    @foreach($categories as $category)
                                        <li><a href="{{ route('category.show', $category->slug) }}">{{ ${'category'}->{Config::get('app.locale')}  }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif

                        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="{{ url('about') }}">@lang('app-layout.about')</a></li>

                        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="{{ url('contact') }}">@lang('app-layout.contact')</a></li>

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