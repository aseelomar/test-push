@extends('layouts.site')
@section('title','التقارير الإدارية والمالية ')
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
                <h2>التقارير الإدارية والمالية</h2>
                <ul>
                    <li><a href="{{url('site.home')}}">الرئيسية</a></li>
                    <li>عرض التقارير</li>
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
                <th>عنوان التقرير</th>
                <th>التحميل</th>
                </thead>
                <tbody>
                @foreach(@$reports as $report)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{@$report->description}}</td>
                        <td><a href="{{asset('storage/attachment/reportAndPlane/' . @$report->link)}}" target="_blank" title="الخطة الاستراتيجية لمدينة جباليا النزلة 2018-2021">اضغط هنا</a></td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </section>
    <!-- End About Area -->
@endsection
