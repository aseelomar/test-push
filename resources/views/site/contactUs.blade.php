
@extends('layouts.site')
@section('css')

@stop
@section('content')
    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>اتصل بنا</h2>
                <ul>
                    <li><a href="{{url('/')}}">الرئيسية</a></li>
                    <li>تواصل معنا</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-map">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=34.484378099441535%2C31.531835881225447%2C34.488857388496406%2C31.533721960743033&amp;layer=mapnik" ></iframe>
                        {{--<br/><small><a href="https://www.openstreetmap.org/#map=19/31.53278/34.48662">عرض خريطة بحجم أكبر</a></small>--}}
                        {{--<iframe src="https://www.openstreetmap.org/#map=18/31.53272/34.48698"></iframe>--}}
                    </div>

                    <ul class="contact-info">
                        <li>
                            <span>المقر الرئيسي:</span>
                          {{ @$infoConnectUs->address}}
                      </li>
                        <li>
                            <span>الرقم المجاني:</span>
                            <a href="tel:{{@$infoConnectUs->phone}}">{{ @$infoConnectUs->phone}}</a>
                        </li>
                    </ul>

                    <div class="contact-form">
                        <div class="title">
                            <h3>تواصل معنا</h3>
                        </div>
                        @if(session()->has('status'))
                            <p class="alert alert-success">{{session('status')}}</p>
                        @endif
                        <form id="contactForm" action="{{route('site.peopleContact')}}" method="POST" id="contactUS">
                            <meta name="csrf_token" content="{{ csrf_token() }}" />
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" required data-error="الرجاء إدخال الاسم" placeholder="الاسم">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email" required data-error="الرجاء إدخال البريد الاكتروني" placeholder="البريد الالكتروني">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="الرجاء إدخال الموبايل" placeholder="الموبايل">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" id="subject" required data-error="الرجاء إدخال الموضوع" placeholder="الموضوع">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="messageSubject" class="form-control" cols="30" rows="6" required data-error="الرجاء كتابة نص الرسالة" placeholder="اكتب رسالتك..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>



                                <div class="col-lg-12 col-md-12">
                                    <button type="submit"  class="default-btn">أرسل الرسالة</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="widget-area">
                        @include('site.home.services')


                        <section class="widget widget_newsletter">
                            <div class="newsletter-content">
                                <h3>الاشتراك في القائمة البريدية</h3>
                            </div>

                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="input-newsletter" style="direction: rtl" placeholder="أدخل البريد الاكتروني" name="email" required autocomplete="off">

                                <button type="submit">اشترك</button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
@endsection

@push('js')
    <script src="/assets/site/js/contact-form-script.js" type="text/javascript"></script>
@endpush
