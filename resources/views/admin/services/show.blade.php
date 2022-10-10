@extends('layouts.admin')
@section('title')
تفاصيل خدمة  {{@$service->name}}
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
                            <span class="m-nav__link-text"> خدماتنا</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">تفاصيل خدمة  {{@$service->name}}</span>
                        </a>
                    </li>

                </ul>
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
                                        عرض تفاصيل الخدمة</span>
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">

                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  "> اسم الخدمة</label>
                                <div class="col-10">
                                    <input class="form-control m-input " disabled type="text" value="{{ $service->name }}"  id="example-text-input">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">{{ ' وصف الخدمة' }}</label>
                                <div class="col-10">
                                    <textarea disabled class="form-control m-input" style=" height: 300px;">{{@$service->description}}</textarea>
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


