<section class="widget widget_latest_news_thumb">
    <a href="{{route('site.adsAdvertising')}}">  <h3 class="widget-title">إعلانات وعطاءات</h3></a>
    @foreach(@$bidsAdvertisings as $bidsAdvertising )
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
