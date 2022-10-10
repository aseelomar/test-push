@extends('layouts.admin')
@section('title')
    عرض جميع رسائل الاستفسارات والشكاوي
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
                            <span class="m-nav__link-text">لوحة التحكم</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">رسائل الاستفسارات والشكاوي</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection

@section('content')

    @include('admin.includes.error')

    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__body">

            <!--begin: Search Form -->
            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <div class="form-group m-form__group row align-items-center">


                            <div class="col-md-4">
                                <div class="m-input-icon m-input-icon--left">
                                    <input name="title" type="search" class="form-control m-input" placeholder="{{ trans('admin.search') }}..." id="generalSearch">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
															<span><i class="la la-search"></i></span>
														</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <table class="table table-striped table-bordered table-hover table-checkable" id="people_contact_us_table">
                <thead>
                <tr>

                    <th></th>
                    <th>{{ 'الاسم'}}</th>
                    <th>{{ 'الموضوع' }}</th>
                    <th>{{ 'الرسالة ' }} </th>
                    <th>{{ 'تاريخ الإرسال' }} </th>
                    <th>{{ 'الاجراءات' }}</th>
                </tr>
                </thead>
            </table>

        </div>

    </div>
@endsection

@push('scripts')

    <script src="/assets/admin/peopleContactUs.js" type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            PeopleContactUs.init();
        });
    </script>


@endpush
