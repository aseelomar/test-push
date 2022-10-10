@section('sub-header')
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">

                    <h3 class="m-subheader__title m-subheader__title--separator">
                        @if($category->id == $category::TYPE_ADVERTISING)
                            اعلانات وعطاءات
                        @else
                            {{$category->name}}
                        @endif</h3>

                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">{{ 'لوحة التحكم'}}</span>
                            </a>
                        </li>


                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">

                                    <span class="m-nav__link-text">
                                        @if($category->id == $category::TYPE_ADVERTISING)
                                            اعلانات وعطاءات
                                        @else
                                            {{$category->name}}
                                        @endif</span>


                            </a>
                        </li>
                    </ul>
            </div>
            <div>
                <div class=" order-j1 order-xl-2 m--align-right">

                    <button type="submit" class="btn m-btn--pill btn-success save" id="publications">
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
