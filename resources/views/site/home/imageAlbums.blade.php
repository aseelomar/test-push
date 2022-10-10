<section class="widget widget_instagram">
    <div class="section-title">
        <a href="{{route('site.imageAlbums')}}"><h2>مكتبة الصور</h2></a>
    </div>
    <div class="galary-slides owl-carousel owl-theme">
        @foreach(@$albums as $album)
            <div class="video-item">
                <div class="video-news-image">
                    <a href="{{route('site.showAlbumDetails',$album->id)}}">
                        <img src="{{asset('thumb.php?src=storage/albums/' . @$album->cover_photo.'&size=356x292')}}" alt="image">
                    </a>
                    {{--<a href="https://www.youtube.com/watch?v=UG8N5JT4QLc" class="popup-youtube">--}}
                    <i class='bx bx-image'></i>
                    {{--</a>--}}
                </div>
                <div class="video-news-content">
                    <h3>
                        <a href="{{route('site.showAlbumDetails',$album->id)}}">{{@$album->description}}</a>
                    </h3>
                    <span>{{@$album->humansDate}}</span>
                </div>
            </div>

        @endforeach
{{--        <div class="video-item">--}}
{{--            <div class="video-news-image">--}}
{{--                <a href="#">--}}
{{--                    <img src="{{asset('thumb.php?src=assets/img/video-news/video-news-2.jpg&size=413x339')}}" alt="image">--}}
{{--                </a>--}}
{{--                --}}{{--<a href="https://www.youtube.com/watch?v=UG8N5JT4QLc" class="popup-youtube">--}}
{{--                <i class='bx bx-image'></i>--}}
{{--                --}}{{--</a>--}}
{{--            </div>--}}
{{--            <div class="video-news-content">--}}
{{--                <h3>--}}
{{--                    <a href="#">بلدية جباليا النزلة تستحدث بروتوكول مخصص لتجميع وترحيل نفايات البيوت المحجورة بسبب فيروس كورونا</a>--}}
{{--                </h3>--}}
{{--                <span>الأربعاء / 05 يناير, 2021</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="video-item">--}}
{{--            <div class="video-news-image">--}}
{{--                <a href="#">--}}
{{--                    <img src="{{asset('thumb.php?src=assets/img/video-news/video-news-1.jpg&size=413x339')}}" alt="image">--}}
{{--                </a>--}}
{{--                --}}{{--<a href="https://www.youtube.com/watch?v=UG8N5JT4QLc" class="popup-youtube">--}}
{{--                <i class='bx bx-image'></i>--}}
{{--                --}}{{--</a>--}}
{{--            </div>--}}
{{--            <div class="video-news-content">--}}
{{--                <h3>--}}
{{--                    <a href="#">مناشدة بلدية جباليا النزلة</a>--}}
{{--                </h3>--}}
{{--                <span>الأربعاء / 05 يناير, 2021</span>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>
