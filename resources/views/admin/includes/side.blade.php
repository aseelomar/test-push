<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
{{--        <li class="m-menu__item  m-menu__item--" aria-haspopup="true"><a href="" class="m-menu__link "><span class="m-menu__link-title"> <span class="m-menu__link-wrap"><img class="m-menu__link-text" src="{{  '/assets/logo-1.png' }}">--}}
{{--											<span class="m-menu__link-badge"></span> </span></span></a></li>--}}
            <li class="m-menu__item  m-menu__item--" aria-haspopup="true"><a href="" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">{{'لوحة التحكم' }}</span>
											<span class="m-menu__link-badge"></span> </span></span></a></li>





            <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">التصنيفات</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">{{ 'جميع التصنيفات' }}</span></span></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.categories.all')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">جميع التصنيفات</span></a></li>
                    </ul>
                </div>
            </li>


            <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">الأخبار</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">{{ 'عرض جميع الأخبار' }}</span></span></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.publications.all',\App\Models\Category::TYPE_NEWS)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض جميع الأخبار</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.publications.add',\App\Models\Category::TYPE_NEWS)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافة خبر جديد</span></a></li>
                    </ul>
                </div>
            </li>

         <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">الأنشطة</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">{{ 'عرض جميع الانشطة' }}</span></span></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.publications.all',\App\Models\Category::TYPE_ACTIVITIES)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض جميع الأنشطة</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.publications.add',\App\Models\Category::TYPE_ACTIVITIES)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافة نشاط جديد</span></a></li>
                    </ul>
                </div>
            </li>
        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">الخطة الاستراتيجية و التشغيلية</span><i
                    class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">{{ 'الخطة الاستراتيجية و التشغيلية' }}</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.attachment.all',\App\Models\Category::TYPE_STRATEGIC_PLAN)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض الخطة الاستراتيجية و التشغيلية</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.attachment.add',\App\Models\Category::TYPE_STRATEGIC_PLAN)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافة خطة جديد</span></a></li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">التقارير الادارية والمالية</span><i
                    class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">التقارير الادارية والمالية</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.attachment.all',\App\Models\Category::TYPE_MANAGEMENT_REPORTS)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض الخطة الاستراتيجية و التشغيلية</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.attachment.add',\App\Models\Category::TYPE_MANAGEMENT_REPORTS)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافة تقرير جديد</span></a></li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">الفعاليات</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">{{ 'عرض جميع الفعاليات' }}</span></span></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.publications.all',\App\Models\Category::TYPE_EVENTS)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض جميع الفعاليات</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.publications.add',\App\Models\Category::TYPE_EVENTS)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافة فعالية جديد</span></a></li>
                    </ul>
                </div>
            </li>
        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text"> أعضاء البلدية</span><i
                    class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">أعضاء البلدية</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.municipalMember.all')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض أعضاء البلدية</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.municipalMember.add')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافة عضو بلدية</span></a></li>
                </ul>
            </div>
        </li>

        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">إعلانات وعطاءات</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">{{ 'عرض جميع إعلانات وعطاءات' }}</span></span></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.publications.all',\App\Models\Category::TYPE_ADVERTISING)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض جميع الإعلانات والعطاءات</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.publications.add',\App\Models\Category::TYPE_ADVERTISING)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافة اعلان وعطاء جديد</span></a></li>
                    </ul>
                </div>
        </li>

{{--        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">العطاءات</span><i--}}
{{--                    class="m-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>--}}
{{--                <ul class="m-menu__subnav">--}}
{{--                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">{{ 'عرض جميع العطاءات' }}</span></span></li>--}}
{{--                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.publications.all',\App\Models\Category::TYPE_BIDS)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض جميع العطاءات</span></a></li>--}}
{{--                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.publications.add',\App\Models\Category::TYPE_BIDS)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافة عطاء جديد</span></a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}

        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">ملف هيكلية البلدية</span><i
                    class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">ملف هيكلية البلدية</span></span></li>
{{--                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.publications.all',5)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض الخطة الاستراتيجية و التشغيلية</span></a></li>--}}
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.attachment.add',\App\Models\Category::TYPE_MUNICIPAL_STRUCTURE)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافة ملف هيكلية البلدية</span></a></li>
                </ul>
            </div>
        </li>

        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text">معرض الصور</span><i
                    class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">معرض الصور</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.albums.all')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض جميع الصور</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.albums.add')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافةصورة</span></a></li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text"> معرض الفيديو</span><i
                    class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">معرض الفيديوهات</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.attachment.all',\App\Models\Category::TYPE_VIDEO)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض جميع الفيديوهات</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.attachment.add',\App\Models\Category::TYPE_VIDEO)}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافة فيديو</span></a></li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text"> خدماتنا</span><i
                    class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">أعضاء البلدية</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.services.all')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض خدماتنا</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.services.add')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافة خدمة جديدة</span></a></li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text"> البوستر الاعلاني</span><i
                    class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text"> البوستر الاعلاني</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.poster.all')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض البوسترات الاعلانية</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.poster.add')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافة بوستر اعلاني جديدة</span></a></li>
                </ul>
            </div>
        </li>

        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text"> الوظائف</span><i
                    class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text"> البوستر الاعلاني</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.job.all')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض أرشيف الوظائف</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.job.add')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">اضافة وظيفة جديدة</span></a></li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text"> عرض صندوق الشكاوي والاستفسارات</span><i
                    class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text"> عرض صندوق الشكاوي والاستفسارات</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.peopleContactUs.all')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض صندوق الشكاوي والاستفسارات</span></a></li>
                </ul>
            </div>
        </li>

        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text"> من نحن</span><i
                    class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">من نحن</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.aboutUs.add')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض وتحديث من نحن</span></a></li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item  m-menu__item--" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-analytics"></i><span class="m-menu__link-text"> بيانات تواصل معنا </span><i
                    class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">تواصل معنا</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.connectUs.add')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">عرض وتحديث تواصل معنا</span></a></li>
                </ul>
            </div>
        </li>

    </ul>
</div>
