<div class="video-news">
    <div class="section-title">
        <a href="{{route('site.videos')}}">  <h2>مكتبة الفيديو</h2></a>
    </div>
    <div class="video-slides owl-carousel owl-theme">
        @foreach(@$videos as $video)
            <div class="video-item">
                <div class="video-news-image">
                    <a href="#">
                        <img src="{{ asset('thumb.php?src=storage/attachment/video/' . @$video->image.'&size=356x292') }}" alt="image">
                    </a>
                    <a href="{{@$video->link}}" class="popup-youtube">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
                <div class="video-news-content">
                    <h3>
                        <a href="#">{{@$video->description}}</a>
                    </h3>
                    <span>{{@$video->humansDate}}</span>
                </div>
            </div>

        @endforeach
{{--        <div class="video-item">--}}
{{--            <div class="video-news-image">--}}
{{--                <a href="#">--}}
{{--                    <img src="{{asset('thumb.php?src=assets/img/video-news/video-news-2.jpg&size=413x339')}}" alt="image">--}}
{{--                </a>--}}
{{--                <a href="https://www.youtube-nocookie.com/embed/2DVb2syyioE" class="popup-youtube">--}}
{{--                    <i class='bx bx-play-circle'></i>--}}
{{--                </a>--}}
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
{{--                    <img src="{{asset('thumb.php?src=assets/img/video-news/video-news-3.jpg&size=413x339')}}" alt="image">--}}
{{--                </a>--}}
{{--                <a href="https://www.youtube-nocookie.com/embed/41Dy0aIUYsA" class="popup-youtube">--}}
{{--                    <i class='bx bx-play-circle'></i>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="video-news-content">--}}
{{--                <h3>--}}
{{--                    <a href="#">بيان صادر عن رؤساء بلديات شمال قطاع غزة بخصوص مواجهة فايروس كورونا</a>--}}
{{--                </h3>--}}
{{--                <span>الأربعاء / 05 يناير, 2021</span>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
