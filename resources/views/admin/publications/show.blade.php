@extends('layouts.admin')
@section('title')
  عرض  {{$publication->slug}}

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
                            <span class="m-nav__link-text">  @if($publication->category->id == \App\Models\Category::TYPE_ADVERTISING)
                                                                                        اعلانات وعطاءات
                                                                                    @else
                                                                                        {{$publication->category->name}}
                                                                                    @endif</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text"> عرض</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div>

            </div>
              <div>
                        <div class=" order-j1 order-xl-2 m--align-right">

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
                                <label for="example-text-input"  class="col-2 col-form-label  ">عنوان المنشور</label>
                                <div class="col-10">
                                    <input class="form-control m-input "  type="text" value="{{@$publication->title}}" disabled id="example-text-input">


                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">هدف المنشور</label>
                                <div class="col-10">
                                    <input class="form-control m-input "  type="text" value="{{@$publication->goal}}" disabled id="example-text-input">

                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">صورة المنشور</label>
                                <div class="col-10">
                                    <img src="{{ asset('storage/publication/' . $publication->image) }}" width="200" height="200" class="img-responsive" align="center" />

                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input"  class="col-2 col-form-label  ">وصف  المنشور</label>
                                <div class="col-10">
                                    <lablel disabled class="form-control m-input" style=" height: 300px;">{!!@$publication->description!!}</lablel>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>

            </div>



        <!--end::Portlet-->
    </div>
@endsection





