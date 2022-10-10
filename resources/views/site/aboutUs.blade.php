@extends('layouts.site')
@section('title','من نحن ')
@section('css')

    .news-details-area img{
    width:100%;
    }

@stop
@section('content')
    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>من نحن</h2>
                <ul>
                    <li><a href="{{url('site.home')}}">الرئيسية</a></li>
                    <li>من نحن</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start About Area -->
    <section class="about-area ptb-50">
        <div class="container">
            <div class="about-image">
                <img src="{{ asset('thumb.php?src=storage/aboutUS/' . @$aboutUsInfo->image.'&size=1116x646') }}" class="img-fluid" alt="جباليا النزلة">
            </div>

            <div class="about-content">
              <p>{!!  @$aboutUsInfo->description!!}</p>
            </div>
        </div>
    </section>
    <!-- End About Area -->
@endsection
