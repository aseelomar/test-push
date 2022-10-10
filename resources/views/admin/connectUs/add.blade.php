@extends('layouts.admin')
@section('title')
    اضافة|تعديل تواصل معنا
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
                            <span class="m-nav__link-text">تواصل معنا</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text"> اضافة |تعديل</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div>
                <div class=" order-j1 order-xl-2 m--align-right">

                    <button type="submit" class="btn m-btn--pill btn-success save" id="add-connect-us">
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
        <form class="m-portlet__body" action="{{route('admin.connectUs.store')}}" id="add-new-connect-us" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--bordered m-portlet--unair">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        اضافة |تعديل تواصل معنا</span>
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">

                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">ادخل لينك الفيسبوك </label>
                                <div class="col-10">
                                    <input class="form-control m-input " placeholder="ادخل لينك الفيسبوك " type="text" value="{{ @$connectInfo->linkFacebook }}" name="linkFacebook" id="example-text-input">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">ادخل لينك التويتر</label>
                                <div class="col-10">
                                    <input class="form-control m-input " placeholder="ادخل لينك التويتر" type="text" value="{{ @$connectInfo->linkTwitter}}" name="linkTwitter" id="example-text-input">

                                </div>
                            </div>
                            <hr>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">ادخل لينك اليوتيوب</label>
                                <div class="col-10">
                                    <input class="form-control m-input " placeholder="ادخل لينك اليوتيوب" type="text" value="{{ @$connectInfo->linkYoutube }}" name="linkYoutube" id="example-text-input">

                                </div>
                            </div>
                            <hr>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">ادخل عنوان المقر الرئيسي</label>
                                <div class="col-10">
                                    <input class="form-control m-input " placeholder="ادخل العنوان(المدينة - المنطقة-الحي-الشارع-أقرب مكان)" type="text" value="{{ @$connectInfo->address }}" name="address" id="example-text-input">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">ادخل الرقم المجاني</label>
                                <div class="col-10">
                                    <input class="form-control m-input " placeholder="ادخل الرقم المجاني" type="text" value="{{ @$connectInfo->phone }}" name="phone" id="example-text-input">
                                </div>
                            </div>
                            <hr>

                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">أدخل نبذة مختصرة عن بلدية</label>
                                <div class="col-10">
                                    <textarea name="aboutUs" style="height: 400px" class="summernote" id="m_summernote_1">{{@$connectInfo->aboutUs}}</textarea>
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


    <script src="/demo/public/assets/admin/connectUs.js" type="text/javascript"></script>

    <script>

        $(document).ready(function () {
            ConnectUs.init();
        });
    </script>



@endpush
