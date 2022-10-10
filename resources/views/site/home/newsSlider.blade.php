

                <div class="col-lg-8">

                    <div class="main-news-slides owl-carousel owl-theme">
                        @foreach(@$newsSliders->take(3) as $newsSlider)

                                            <div class="news-slider-item">
                                                <a href="{{route('site.postDetails',@$newsSlider->id)}} ">
                                                    <img src="{{ asset('thumb.php?src=storage/publication/'.@$newsSlider->image.'&size=736x529') }}" class="img-fluid"   alt="image">
{{--                                                    <img src="{{ asset('storage/publication/'.@$newsSlider->image) }}" class="img-fluid"   alt="image">--}}
                                                </a>
                                                <div class="slider-content">
                                                    <div class="tag">أخبار البلدية</div>
                                                    <h3>
                                                        <a href="{{route('site.postDetails',@$newsSlider->id)}}">{{str_limit(@$newsSlider->title, $limit = 100, $end = '....')}}</a>
                                                    </h3>

                                                    <span>{{@$newsSlider->humansDate}} </span>
                                                </div>
                                            </div>
                        @endforeach

                    </div>
                </div>

<div class="col-lg-4">

    <div class="single-main-news-inner">
        <a href="{{route('site.postDetails',@$newsSliders[3]->id)}}">
            <img src="{{ asset('thumb.php?src=storage/publication/' . @$newsSliders[3]->image.'&size=356x238') }}" class="img-fluid" alt="image">
        </a>
        <div class="news-content">
            <div class="tag">أخبار البلدية</div>
            <h3>
                <a href="{{route('site.postDetails',@$newsSliders[3]->id)}}">{{@$newsSliders[3]->title}}</a>
            </h3>
            <span>{{@$newsSliders[3]->humansDate}}</span>
        </div>
    </div>


    @foreach(@$newsSliders->slice(4)->take(2)  as $newsSlider)

        <div class="single-main-news-box">
            <a href="{{route('site.postDetails',@$newsSlider->id)}}">
                <img src="{{ asset('thumb.php?src=storage/publication/'.@$newsSlider->image.'&size=150x150') }}" class="img-fluid" alt="image">
            </a>
            <div class="news-content">
                <div class="tag">أخبار البلدية</div>
                <h3>
                    <a href="{{route('site.postDetails',@$newsSlider->id)}}">{{@$newsSlider->title}}</a>
                </h3>
                <span>{{@$newsSlider->humansDate}}</span>
            </div>
        </div>

    @endforeach



</div>
