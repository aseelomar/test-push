@extends('layouts.admin')
@section('title')
    اضافة وتعديل من نحن
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
                            <span class="m-nav__link-text">من نحن</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text"> اضافة</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div>
                <div class=" order-j1 order-xl-2 m--align-right">

                    <button type="submit" class="btn m-btn--pill btn-success save" id="add-about-us">
                            <span>
                                <i class="far fa-newspaper"></i>
                                <span>{{'اضافة -حفظ-'}}</span>
                            </span>
                    </button>
                    <button type="submit"  class="btn m-btn--pill btn-success" id="cancel
">
                        <a href="{{ URL::previous() }}"style="color: white;" >
                            <i class="far fa-newspaper"></i>
                            <span >رجوع </span>
                        </a>
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
        <form class="m-portlet__body" action="{{route('admin.aboutUs.store')}}" id="add-new-about-us" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--bordered m-portlet--unair">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        تحديث بيانات من نحن
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">

                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">ارفع الصورة</label>
                                <div class="custom-file-upload col-4">
                                    <div class="icon text-center">
                                        <img src="/assets/img/cloud-img.png" alt="">
                                        <img width="100%" height="248" src="{{ asset('storage/aboutUS/' . @$aboutInfo->image) }}" alt="" class="img">
                                    </div>
                                    <input name="image" value="{{@$aboutInfo->image}}" accept="image/*" type="file" id="news-img">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">{{ 'ادخل الوصف من نحن' }}</label>
                                <div class="col-10">
                                    <textarea name="description" style="height: 400px" class="summernote" id="m_summernote_1">{{@$aboutInfo->description}}</textarea>
                                </div>
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


    <script src="/demo/public/assets/admin/aboutUs.js" type="text/javascript"></script>

    <script>

        $(document).ready(function () {
            AboutUs.init();
        });
    </script>



@endpush
