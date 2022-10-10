@extends('layouts.site')
@section('title','تفاصيل الوظيفة ')
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
                <h2>{{@$job->title}} </h2>
                <ul>
                    <li><a href="{{url('site.home')}}">الرئيسية</a></li>
                    <li>الوظايف</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start About Area -->
    <section class="about-area ptb-50">


        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="blog-details-desc">

                        <div class="article-image">
                            <center>   <img src="{{ asset('storage/job/'.@$job->image) }}" class="img-fluid" alt="image">
                            </center></div>

                        <div class="article-content">
                            <span>{{@$job->humansDate}}</span>
                            <h3>{{@$job->title}}</h3>
                            <div dir="auto" style="box-sizing: inherit; border-width: 0px; border-style: none; margin: 0px 0px 15px; padding: 0px; outline-style: none; outline-width: medium; color: #000000; font-size: 15px;">{!!$job->description  !!}</div>
                            <h5>لتقديم للوظيفة:<a href="{{$job->link}}" target="_blank" >اضغط هنا</a></h5>
                        </div>

                        <div class="article-footer">
                            <div class="article-share">
                                <ul class="social">
                                    <li><span>مشاركة:</span></li>
                                    <li>
                                        <a href="http://www.facebook.com/sharer.php?u={{ url()->full()}}" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://twitter.com/intent/tweet/?url={{url()->full()}}" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{url()->full()}}" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->
@endsection
