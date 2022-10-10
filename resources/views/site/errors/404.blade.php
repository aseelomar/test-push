@extends('layouts.site')

@section('title', __('الصفحة غير موجودة'))
@section('content')
    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">

            <div class="page-title-content">
                <h2>خطأ 404</h2>
                <ul>
                    <li><a href="{{url('/')}}">الرئيسية</a></li>
                    <li>الصفحة غير موجودة</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <!-- Start Error Area -->
    <section class="error-area ptb-50">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="error-content">
                        <img src="{{asset('assets/site/img/404-error.png')}}" alt="خطأ">

                        <h3>خطأ 404: الصفحة غير موجودة</h3>
                        {{--<p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>--}}

                        <a href="{{url('/')}}" class="default-btn">
                            الرجوع إلى الرئيسية
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Error Area -->
    @endsection
{{--@section('code', '404')--}}
{{--@section('message', __('Not Found'))--}}
