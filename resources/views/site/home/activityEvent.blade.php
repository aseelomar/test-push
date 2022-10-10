<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="most-popular-news">
                <div class="section-title">
                    <a href="{{route('site.activityEvent')}}"><h2>أنشطة وفعاليات</h2></a>
                </div>

                    <div class="row">
                        <div class="col-lg-6">
                            @foreach($activityEvents->take(2) as $activityEvent)
                                  <div class="single-most-popular-news">
                            <div class="popular-news-image">
                                <a href="{{route('site.postDetails',@$activityEvent->id)}}">
                                    <img src="{{ asset('thumb.php?src=storage/publication/'.@$activityEvent->image.'&size=356x178')}}" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="popular-news-content">
                                <span>{{@$activityEvent->category->name}}</span>
                                <h3>
                                    <a href="{{asset('thumb.php?src=storage/publication/'.@$activityEvent->image.'&size=356x178')}}">{{@$activityEvent->title}}</a>
                                </h3>
                                <p>{{@$activityEvent->humansDate}} </p>
                            </div>
                        </div>
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                        @foreach(@$activityEvents->slice(2) as $activityEvent)
                            <div class="most-popular-post">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="post-image">
                                            <a href="{{route('site.postDetails',@$activityEvent->id)}}">
                                                <img src="{{ asset('thumb.php?src=storage/publication/'.@$activityEvent->image.'&size=102x136.27')}}" class="img-fluid" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        <div class="post-content">
                                            <span>{{@$activityEvent->category->name}}</span>
                                            <h3>
                                                <a href="{{route('site.postDetails',@$activityEvent->id)}}">{{@$activityEvent->title}}</a>
                                            </h3>
                                            <p>{{@$activityEvent->humansDate}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       @endforeach
                        </div>
                     </div>
            </div>
            @include('site.home.video')

        </div>
        <div class="col-lg-4">
            <aside class="widget-area">
                @include('site.home.bidsAdvertising')


                    @include('site.home.services')

                    @include('site.home.imageAlbums')


            </aside>
        </div>
    </div>
</div>
