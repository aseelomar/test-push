@extends('layouts.site')
@section('title','معرض الصور ')
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
                <h2>مكتبة الصور</h2>
                <ul>
                    <li><a href="{{route('site.home')}}">الرئيسية</a></li>
                    <li>عرض ألبومات الصور</li>
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
                @foreach(@$albums  as $album )
                <div class="col-lg-4 col-md-4">
                    <div class="video-item mb-30">
                        <div class="video-news-image">
                            <a href="{{route('site.showAlbumDetails',$album->id)}}">
                                <img src="{{asset('thumb.php?src=storage/albums/' . @$album->cover_photo.'&size=356x290')}}" alt="image">
                            </a>
                            <i class='bx bx-image'></i>

                        </div>
                        <div class="video-news-content">
                            <h3>
                                <a href="{{route('site.showAlbumDetails',$album->id)}}">{{@$image->description}}</a>
                            </h3>
                            <span>{{@$image->humansDate}}</span>
                        </div>
                    </div>
                </div>
                @endforeach

{{--</div>--}}
                {!!  @$albums->links("pagination::bootstrap-4") !!}

            </div>
        </div>
    </section>
    <!-- End Default News Area -->
@endsection
