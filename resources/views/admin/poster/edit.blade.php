@extends('layouts.admin')
@section('title')
   تعديل {{ $poster->slug }}
@endsection
@section('sub-header')
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">لوحة التحكم</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">الرئيسية</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">{{$poster->title}}تعديل </span>
                        </a>
                    </li>


                </ul>
            </div>
            <div>
                <div class=" order-j1 order-xl-2 m--align-right">
                    <button type="submit" class="btn m-btn--pill btn-success" id="update-poster">
                            <span>
                                <i class="la la-plus"></i>
                                <span>تعديل</span>
                            </span>
                    </button>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    @include('admin.includes.error')

    <ul id="errors"></ul>


    <div class="m-portlet m-portlet--bordered m-portlet--unair">
        <form class="m-portlet__body" action="{{route('admin.poster.update',$poster->id)}}" id="update-posters" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--bordered m-portlet--unair">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                       تعديل البوستر الاعلاني
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">

                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">ادخل عنوان البوستر</label>
                                <div class="col-10">
                                    <input class="form-control m-input " placeholder="ادخل عنوان البوستر" type="text" value="{{$poster->title }}" name="title" id="example-text-input">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">ارفع الصورة</label>
                                <div class="custom-file-upload col-4">
                                    <div class="icon text-center">
                                        <img src="/assets/img/cloud-img.png" alt="">
                                        <img width="100%" height="248" src="{{ asset('storage/poster/' . $poster->image) }}" alt="" class="img">
                                    </div>
                                    <input name="image" accept="image/*"  value="{{$poster->image}}" type="file" id="news-img">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">{{ 'ادخل الوصف' }}</label>
                            </div>
                            <textarea name="description" style="height: 400px" class="summernote" id="m_summernote_1">{{$poster->description}}</textarea>
                        </div>

                    </div>



                </div>
            </div>

    </div>


    </form>
    <!--end::Portlet-->
    </div>
@endsection

@push('scripts')


    <script src="/demo/public/assets/admin/poster.js" type="text/javascript"></script>

    <script>

        $(document).ready(function () {
            Poster.init();
        });
    </script>



@endpush
