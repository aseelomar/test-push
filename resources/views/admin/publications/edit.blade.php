
@extends('layouts.admin')
@section('title')
  تعديل  {{$publication->slug}}
@endsection
@section('sub-header')
    @include('admin.publications.parts.edit-sub-header')

@endsection

@section('content')

    @include('admin.includes.error')


    <div class="m-portlet m-portlet--bordered m-portlet--unair">
        <form class="m-portlet__body" action="{{route('admin.publications.update',$publication->id)}}" id="update-data-publication"method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-9">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--bordered m-portlet--unair">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                      تعديل
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">عنوان المنشور</label>
                                <div class="col-10">
                                    <input class="form-control m-input " placeholder="عنوان المنشور" type="text" value="{{$publication->title}}" name="title" id="example-text-input">


                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">هدف المنشور</label>
                                <div class="col-10">
                                    <input class="form-control m-input " placeholder="هدف منشور" type="text" value="{{$publication->goal}}" name="goal" id="example-text-input">


                                </div>
                            </div>
                            @if(@$publication->category_id == \App\Models\Category::TYPE_NEWS)
                                <div class="">
                                    <div class="m-radio-inline">
                                        <label class="m-checkbox m-checkbox">
                                            <input name="showSlider"  {{ @$publication->showSlider  == 1 ? 'checked' : '' }}  type="checkbox">  عرض في السلايدر الرئيسي
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                              
                            @endif

                            <input type="text" hidden value="{{$publication->category_id}}" id="category_id">
                            <textarea name="description" style="height: 400px" class="summernote" id="m_summernote_1">{{$publication->description}}</textarea>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="m-portlet m-portlet--bordered m-portlet--bordered-semi m-portlet--rounded">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        {{'اضافة صورة'}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div></div>
                        <div class="custom-file-upload">
                            <div class="icon text-center">
                                <img src="/cloud-img.png" alt="">
                                <img width="100%" height="248" src="{{ asset('storage/publication/' . $publication->image) }}" alt="" class="img">
                            </div>
                            <input name="image" value="{{$publication->image }}" accept="image/*" type="file" id="news-img">
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
