@extends('layouts.site')
@section('title','الخطط الإستراتيجية والتشغيلية ')
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
                <h2>الخطط الاستراتيجية والتشغيلية</h2>
                <ul>
                    <li><a href="{{url('site.home')}}">الرئيسية</a></li>
                    <li>عرض الخطط</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start About Area -->
    <section class="about-area ptb-50">
        <div class="container">
            <table class="table">
                <thead>
                <th>#</th>
                <th>عنوان الخطة</th>
                <th>التحميل</th>
                </thead>
                <tbody>
                @foreach(@$plans as $plan)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{@$plan->description}}</td>
                        <td><a href="{{asset('storage/attachment/reportAndPlane/' . @$plan->link)}}" target="_blank" title="الخطة الاستراتيجية لمدينة جباليا النزلة 2018-2021">اضغط هنا</a></td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </section>
    <!-- End About Area -->
@endsection
