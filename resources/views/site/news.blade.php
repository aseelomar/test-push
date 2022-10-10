@extends('layouts.site')
@section('title','عرض الأخبار')
@push('style')

    <style>
        .news-details-area img{
            width:100%;
        }

        .page-item.active .page-link {
            background-color: red;
            border-color: red;
        }

        .news-details-area img{
            width:100%;
        }

        .page-link {
            color: black;
        }
    </style>



@endpush
@section('content')
    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>قائمة الأخبار</h2>
                <ul>
                    <li><a href="{{route('site.home')}}">الرئيسية</a></li>
                    <li>عرض الأخبار</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start News Area -->
    <section class="news-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach(@$publications as $publication)
                        <div class="single-news-item">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="news-image">
                                        <a href="{{route('site.postDetails',@$publication->id)}}">
                                            <img src="{{ asset('thumb.php?src=storage/publication/' . @$publication->image.'&size=229x188') }}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="news-content">
                                        <span>{{@$publication->category->name}} البلدية</span>
                                        <h3>
                                            <a href="{{route('site.postDetails',@$publication->id)}}">{{@$publication->title}}</a>
                                        </h3>
                                        <p ><a href="{{route('site.postDetails',@$publication->id)}}">{{str_limit(strip_tags(@$publication->description), $limit = 20, $end = '....') }} </a> </p>
                                        <p> {{@$publication->humansDate}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach

                        {!!  $publications->links("pagination::bootstrap-4") !!}


                </div>

                <div class="col-lg-4">
                    <aside class="widget-area">
                        <section class="widget widget_latest_news_thumb">
                            <a href="{{route('site.adsAdvertising')}}"><h3 class="widget-title">إعلانات وعطاءات</h3></a>
                            @foreach(@$bidsAdvertisings as $bidsAdvertising)
                                <article class="item">
                                    <a href="{{route('site.postDetails',@$bidsAdvertising->id)}}" class="thumb">
                                        <img class="fullimage cover" src="{{ asset('thumb.php?src=storage/publication/'.@$bidsAdvertising->image.'&size=80x80')}}" class="img-fluid" alt="image">
                                    </a>
                                    <div class="info">
                                        <h4 class="title usmall"><a href="{{route('site.postDetails',@$bidsAdvertising->id)}}">{{@$bidsAdvertising->title}}</a></h4>
                                        <span>{{@$bidsAdvertising->humansDate}}</span>
                                    </div>
                                </article>

                            @endforeach

                        </section>
                        @include('site.include.image')


                        @include('site.include.service')



                        @include('site.include.hashtag')

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Area -->
@endsection
