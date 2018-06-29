@extends('layouts.app')

@section('content')

    {{--<pre>--}}
        {{--{{ dd($products ) }}--}}
    {{--</pre>--}}

    <!--portfolio-->
    <div class="page-content" style="margin-top: 100px;">
        <div class="container">
            <div class="row">

                <!--title-->
                <div class="heading-title border-short-bottom text-center">
                    <h3 class="text-uppercase">{{ ${'category'}->{Config::get('app.locale')} }}</h3>
                    <div class="half-txt">@lang('welcome.recent_sub')</div>
                </div>
                <!--title-->

                <div class=" portfolio-with-title col-3 gutter portfolio-gallery">
                    @if(count($products) == 0)
                        <h3 class="text-center">Bu kategori icin henuz urun bulunmamaktadir!</h3>
                    @endif
                    @foreach($products as $product)
                        <div class="portfolio-item">
                            <div class="thumb">
                                <img src="{{ asset($product->img_path) }}" alt="">
                                <div class="portfolio-hover">
                                    <div class="action-btn">
                                        <a href="{{ asset($product->img_path) }}" class="popup-gallery" title="{{ ${'product'}->{'pdesc_'.Config::get('app.locale')} }}"> <i class="icon-basic_magnifier"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title text-center">
                                <h4><a href="{{ asset($product->img_path) }}" class="popup-gallery2" title="lightbox view">{{ ${'product'}->{'pname_'.Config::get('app.locale')} }}</a></h4>
                                <p>{{ substr(${'product'}->{'pdesc_'.Config::get('app.locale')}, 0, 30) }}{{ strlen(strip_tags(${'product'}->{'pdesc_'.Config::get('app.locale')})) > 30 ? "..." : "" }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
    <!--portfolio-->

@endsection