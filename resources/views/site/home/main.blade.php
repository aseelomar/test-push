@extends('layouts.site')
@section('title','الرئيسية')
@section('css')
    <style>
        .fancybox-caption__body {
            direction: rtl;
            font-size: 16px;
        }
    </style>
@stop
@section('content')
    <section class="main-news-area">
        <div class="container">
            <div class="row">
                @include('site.home.newsSlider')

            </div>
        </div>
    </section>
    <section class="ads__ mb-4">
        @include('site.home.posterSlider')

    </section>
    <section class="default-news-area pb-0">
        @include('site.home.activityEvent')

    </section>
    @include('site.home.municipalCouncilMember')


@endsection
