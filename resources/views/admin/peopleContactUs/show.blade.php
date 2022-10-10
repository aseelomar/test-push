@extends('layouts.admin')
@section('title')
{{@$infoContactUs->name}} عرض التفاصيل
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

                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">عرض تفاصيل الشكوى </span>
                        </a>
                    </li>


                </ul>
            </div>
            <div>

            </div>
        </div>
    </div>
@endsection

@section('content')

    @include('admin.includes.error')

    <ul id="errors"></ul>


    <div class="m-portlet m-portlet--bordered m-portlet--unair">

        <div class="row">
            <div class="col-lg-12">
                <!--begin::Portlet-->
                <div class="m-portlet m-portlet--bordered m-portlet--unair">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    عرض التفاصيل

                                </h3>

                            </div>
                        </div>
                    </div>
                                <div class="m-portlet__body">

                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input"  class="col-2 col-form-label  "> الاسم </label>
                                        <div class="col-10">
                                            <input class="form-control m-input " type="text" disabled value="{{@$infoContactUs->name}}" id="example-text-input">
                                        </div>
                                    </div>
                                    <hr>
                                     <div class="form-group m-form__group row">
                                        <label for="example-text-input"  class="col-2 col-form-label  "> الايميل </label>
                                        <div class="col-10">
                                            <input class="form-control m-input " type="text" disabled value="{{@$infoContactUs->email}}" id="example-text-input">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input"  class="col-2 col-form-label  "> الموضوع </label>
                                        <div class="col-10">
                                            <input class="form-control m-input " type="text" disabled value="{{@$infoContactUs->subject}}" id="example-text-input">
                                        </div>
                                    </div>
                                    <hr>
                                      <div class="form-group m-form__group row">
                                        <label for="example-text-input"  class="col-2 col-form-label  "> رقم الهاتف </label>
                                        <div class="col-10">
                                            <input class="form-control m-input " type="text" disabled value="{{@$infoContactUs->phone}}" id="example-text-input">
                                        </div>
                                    </div>
                                    <hr>


                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input"  class="col-2 col-form-label  ">  تفاصيل الرسالة</label>
                                        <div class="col-10">
                                            <textarea disabled class="form-control m-input" style=" height: 300px;">{{@$infoContactUs->message}}</textarea>
                                        </div>
                                    </div>


                                </div>



                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>



        <!--end::Portlet-->
    </div>
@endsection





