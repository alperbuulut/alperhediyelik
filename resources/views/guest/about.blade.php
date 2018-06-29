@extends('layouts.app')

@section('content')

    <div class="page-content" style="margin-top: 100px;">

        <div class="container">
            <div class="row">
                <!--title-->
                <div class="heading-title border-short-bottom text-center">
                    <h3 class="text-uppercase">@lang('app-layout.about')</h3>
                    <div class="half-txt">Alper Hediyelik</div>
                </div>
                <!--title-->

                <div class=" portfolio-with-title col-3 gutter portfolio-gallery">
                    <div class="col-md-10 col-md-offset-1">
                        <p class="about">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
        </div>

    </div>

@endsection