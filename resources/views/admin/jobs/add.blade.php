
@extends('layouts.admin')
@section('title')
    اضافة وظيفة جديدة
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
                            <span class="m-nav__link-text">اضافة وظيفة جديدة</span>
                        </a>
                    </li>


                </ul>
            </div>
            <div>
                <div class=" order-j1 order-xl-2 m--align-right">

                    <button type="submit" class="btn m-btn--pill btn-success save" id="add-job">
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
        <form class="m-portlet__body" action="{{route('admin.job.store')}}" id="add-new-job" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-9">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--bordered m-portlet--unair">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">

                                    <h3 class="m-portlet__head-text">اضافة وظيفة جديد</h3>

                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">{{ 'ادخل عنوان الوظيفة' }}</label>
                                <div class="col-10">
                                    <input class="form-control m-input " placeholder="{{ 'ادخل عنوان الوظيفة' }}" type="text" value="{{ old('title') }}" name="title" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">{{ 'ادخل رابط الوظيفة' }}</label>
                                <div class="col-10">
                                    <input class="form-control m-input " placeholder="{{ 'ادخل رابط الوظيفة' }}" type="text" value="{{ old('link') }}" name="link" id="example-text-input">
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">{{ 'ادخل وصف الوظيفة' }}</label>
                                <div class="col-10">
                                    <textarea name="description" style="height: 400px" class="summernote" id="m_summernote_1"></textarea>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3">


                    <div class="m-portlet m-portlet--bordered m-portlet--bordered-semi m-portlet--rounded">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        {{' قم بتحميل الصورة '}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div></div>
                        <div class="custom-file-upload">
                            <div class="icon text-center">
                                <img src="/assets/img/cloud-img.png" alt="">
                                <img width="100%" height="248" src="" alt="" class="img">
                            </div>
                            <input name="image" accept="image/*" type="file" id="news-img">
                        </div>

                    </div>

                </div>
            </div>


        </form>
        <!--end::Portlet-->
    </div>
@endsection

@push('scripts')

    <script src="/demo/public/assets/admin/job.js" type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            Job.init();
        });

    </script>


@endpush
