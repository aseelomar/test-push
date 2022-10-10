<section class="widget widget_instagram">
    <div class="section-title">
        <a href="route('albums')"><h2>مكتبة الصور</h2></a>
    </div>
    <div class="galary-slides owl-carousel owl-theme">
        @foreach(@$images as $image)

            <div class="video-item">
                <div class="video-news-image">
                    <a href="#">
                        <img src="{{asset('thumb.php?src=storage/attachment/media/'.@$image->link.'&size=356x292')}}" alt="image">
                    </a>

                </div>
                <div class="video-news-content">
                    <h3>
                        <a href="#">{{@$image->description}}</a>
                    </h3>
                    <span>{{@$image->humansDate}}</span>
                </div>
            </div>

        @endforeach
    </div>
</section>
