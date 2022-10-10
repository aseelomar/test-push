@extends('layouts.site')
@section('title')
    بلدية جباليا|{{@$service->name}}
@endsection

@section('css')
    <style>
        .news-details-area img{
            width:100%;
        }
    </style>
@stop
@section('content')
    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>تفاصيل الخدمة</h2>
                <ul>
                    <li><a href="{{url('/')}}">الرئيسية</a></li>
                    <li>عرض الخدمة</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start News Details Area -->
    <section class="news-details-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="blog-details-desc">



                        <div class="article-content">
                            <span>{{@$service->humansDate}}</span>
                            <h3>{{@$service->name}}</h3>
                            <div dir="auto" style="box-sizing: inherit; border-width: 0px; border-style: none; margin: 0px 0px 15px; padding: 0px; outline-style: none; outline-width: medium; color: #000000; font-size: 15px;">{!!@$service->description  !!}</div>

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
    <!-- Start News Details Area -->
@endsection
