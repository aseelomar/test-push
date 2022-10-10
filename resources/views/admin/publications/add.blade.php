
@extends('layouts.admin')
@section('title')
    اضافة@if($category->id == $category::TYPE_ADVERTISING)
        اعلانات وعطاءات
    @else
        {{$category->name}}
    @endif
@endsection
@include('admin.publications.parts.sub-header')

@section('content')

    @include('admin.includes.error')

    <ul id="errors"></ul>

    <div class="m-portlet m-portlet--bordered m-portlet--unair">
        <form class="m-portlet__body" action="{{route('admin.publications.store',$category->id)}}" id="add-new-publications" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="category_id" value="{{$category->id}}">
            <div class="row">
                <div class="col-lg-9">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--bordered m-portlet--unair">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">

                                    <h3 class="m-portlet__head-text">اضافة منشور جديد</h3>

                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input"  class="col-2 col-form-label  ">{{ 'ادخل عنوان المنشور' }}</label>
                                    <div class="col-10">
                                        <input class="form-control m-input " placeholder="{{ 'ادخل عنوان المنشور' }}" type="text" value="{{ old('title') }}" name="title" id="example-text-input">
                                   </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input"  class="col-2 col-form-label  ">{{ 'ادخل هدف المنشور' }}</label>
                                    <div class="col-10">
                                        <input class="form-control m-input " placeholder="{{ 'ادخل هدف المنشور' }}" type="text" value="{{ old('goal') }}" name="goal" id="example-text-input">
                                    </div>
                                </div>
                            @if(@$category->id == \App\Models\Category::TYPE_NEWS)
                            <div class="">
                                <div class="m-radio-inline">
                                    <label class="m-checkbox m-checkbox">
                                        <input name="showSlider"   type="checkbox">  عرض في السلايدر الرئيسي
                                        <span></span>
                                    </label>
                                </div>
                            </div>

                            @endif
                            <div class="form-group m-form__group row">
                                    <label for="example-text-input"  class="col-2 col-form-label  ">{{ 'ادخل الوصف' }}</label>
                                </div>
                                    <textarea name="description" style="height: 400px" class="summernote" id="m_summernote_1"></textarea>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3">


                        <div class="m-portlet m-portlet--bordered m-portlet--bordered-semi m-portlet--rounded">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            {{'قم بتحميل الصورة'}}
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

        <script src="/demo/public/assets/admin/publication.js" type="text/javascript"></script>

        <script>
            $(document).ready(function () {
                Publications.init();
            });

        </script>


    @endpush
