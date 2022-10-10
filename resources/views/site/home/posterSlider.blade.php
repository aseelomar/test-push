<div class="container">
    <div class="row">
        @foreach(@$posters as $poster)
        <div class="col-lg-6 col-xs-12">
            <a href="{{route('site.posterDetail',@$poster->id)}}"><img data-src="{{asset('assets/img/ads/banner-jabalia-1.gif')}}" style="width: 100%;height: 90px" title="مساحة إعلانية" class="img-fluid mb-3 img_ads" src="{{ asset('thumb.php?src=storage/poster/' . $poster->image.'&size=546x90') }}"></a>
        </div>

        @endforeach
    </div>
</div>
