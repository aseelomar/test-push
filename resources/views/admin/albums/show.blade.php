@extends('layouts.admin')
@section('title')
 عرض تفاصيل الألبوم
@endsection

    <style>
        .photo-delete {
            position: absolute;
            color: red;
            font-size: 22px;
            font-weight: bold;
            right: 5px;
            cursor: pointer;
        }

        .photo-item {
            position: relative;
        }
    </style>
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
                            <span class="m-nav__link-text">ألبوم صور</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text"> عرض تفاصيل الألبوم</span>
                        </a>
                    </li>

                </ul>
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



    <div class="m-portlet m-portlet--bordered m-portlet--unair">



            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--bordered m-portlet--unair">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        عرض تفاصيل
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">

                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label  ">وصف الألبوم</label>
                                <div class="col-10">
                                    <input class="form-control m-input "  type="text"
                                           value="{{ @$album->description }}" disabled id="example-text-input">
                                </div>
                            </div>
                            <hr>
                            <div class="">
                                <div class="m-radio-inline">
                                    <label class="m-checkbox m-checkbox">
                                        <input name="show_in_home" disabled {{ @$album->show_in_home  == 1 ? 'checked' : '' }}  type="checkbox">  عرض في السلايدر الرئيسي

                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label  ">صورة الغلاف
                                    للألبوم</label>
                                <div class="custom-file-upload col-4">
                                    <div class="icon text-center">
                                        <img src="/assets/img/cloud-img.png" alt="">
                                        <img width="100%" height="248"
                                             src="{{ asset('storage/albums/' . @$album->cover_photo)  }}" alt=""
                                             class="img">
                                    </div>
                                    <input  disabled accept="image/*" type="file" id="news-img">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group m-form__group row">
                                <label for="example-text-input" class="col-2 col-form-label  "> صور الفرعية
                                    للألبوم</label>

                                @foreach (@$album->photos as $item)
                                <div class="col-2 col-form-label">

                                    <span class="photo-item">
                                        <img  width="150" height="150" src="{{asset('storage/albums/photos/' . @$item->link)}}" alt="">
                                    </span>
                                    </div>
                                @endforeach

                            </div>
                            <hr>
                        </div>


                    </div>
                </div>

            </div>


        </form>
        <!--end::Portlet-->
    </div>
@endsection

@push('scripts')


    <script src="/demo/public/assets/admin/album.js" type="text/javascript"></script>

    <script>

        $(document).ready(function() {
            Album.init();
        });
    </script>



@endpush
