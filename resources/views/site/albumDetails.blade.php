@extends('layouts.site')
@section('title','تفاصيل الألبوم ')
@section('css')

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
@stop
@section('content')
    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>تفاصيل الألبوم </h2>
                <ul>
                    <li><a href="{{route('site.home')}}">الرئيسية</a></li>
                    <li>عرض صور الألبوم</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Default News Area -->
    <section class="default-news-area ptb-50">
        <div class="container">
            <div class="row">
                {{--<div class="col-lg-12">--}}
                @foreach(@$album->photos  as $photo )
                    <div class="col-lg-4 col-md-4">
                        <div class="single-team-box">
                            <div class="image">
                                <a href="{{asset('thumb.php?src=storage/albums/photos/' . @$photo->link.'&size=356x290') }}" data-fancybox="group" data-caption="">
                                    <img src="{{ asset('thumb.php?src=storage/albums/photos/' . @$photo->link.'&size=356x290') }}" alt="image">
                                </a>


                            </div>

                            <div>

                                <span>{{@$photo->humansDate}}</span>
                            </div>
                        </div>

                    </div>
                @endforeach
{{--                {!!  $link->links("pagination::bootstrap-4") !!}--}}

                {{--</div>--}}

            </div>
        </div>
    </section>
    <!-- End Default News Area -->
@endsection
