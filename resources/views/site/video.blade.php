@extends('layouts.site')
@section('title','معرض الفيديو ')
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
                <h2>مكتبة الفيديو</h2>
                <ul>
                    <li><a href="{{route('site.home')}}">الرئيسية</a></li>
                    <li>عرض مكتبة الفيديو</li>
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
                @foreach(@$videos as $video)
                <div class="col-lg-4 col-md-4">
                    <div class="video-item mb-30">
                        <div class="video-news-image">
                            <a href="#">
                                <img src="{{ asset('thumb.php?src=storage/attachment/video/' . @$video->image.'&size=356x290') }}" alt="image">
                            </a>
                            <a href="{{$video->link}}" class="popup-youtube">
                                <i class='bx bx-play-circle'></i>
                            </a>
                        </div>
                        <div class="video-news-content">
                            <h3>
                                <a href="{{$video->link}}">{{@$video->description}}</a>
                            </h3>
                            <span>{{@$video->humansDate}}</span>
                        </div>
                    </div>
                </div>
                @endforeach


                {!!  @$videos->links("pagination::bootstrap-4") !!}

                {{--</div>--}}

            </div>
        </div>
    </section>
    <!-- End Default News Area -->
@endsection
