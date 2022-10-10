<!doctype html>
<html lang="ar" dir="rtl">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('assets/site/css/bootstrap.rtl.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/site/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/site/css/meanmenu.css')}}">

    <link rel="stylesheet" href="{{asset('assets/site/css/boxicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/site/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/site/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/site/css/magnific-popup.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/site/css/nice-select.min.css')}}">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{asset('assets/site/css/style_.css')}}">

    <link rel="stylesheet" href="{{asset('assets/site/css/responsive_.css')}}">

    <link rel="stylesheet" href="{{asset('assets/site/css/rtl.css')}}">

    <link rel="stylesheet" href="{{asset('assets/site/dinnext/styles.rtl.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">


    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('assets/site/img/favicon.png')}}">
    @yield('css')
    @stack('style')
</head>
<body>

<div class="preloader">
    <div class="loader">
        <div class="wrapper">
            <div class="circle circle-1"></div>
            <div class="circle circle-1a"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>
        <span>جاري تحميل الصفحة...</span>
    </div>
</div>


<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="breaking-news-content">
                    <h6 class="breaking-title">
                        شريط الأخبار:
                    </h6>

                    <div class="breaking-news-slides owl-carousel owl-theme">
                        @foreach(@$lastNews as $lastNew)
                            <div class="single-breaking-news">
                                <p>
                                    <a href="route('post_details')">{{@$lastNew->title}}</a>
                                </p>
                            </div>


                        @endforeach

                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <ul class="top-header-social">
                    <li>
                        <a href="{{@$infoConnectUs->linkYoutube}}" class="linkedin" target="_blank">
                            <i class='bx bxl-youtube'></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{@$infoConnectUs->linkTwitter}}" class="twitter" target="_blank">
                            <i class='bx bxl-twitter'></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{@$infoConnectUs->linkFacebook}}" class="facebook" target="_blank">
                            <i class='bx bxl-facebook'></i>
                        </a>
                    </li>
                    {{--<li>--}}
                    {{--<a href="#" class="pinterest" target="_blank">--}}
                    {{--<i class='bx bxl-instagram'></i>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="#" class="pinterest" target="_blank">--}}
                    {{--<i class='bx bxl-linkedin'></i>--}}
                    {{--</a>--}}
                    {{--</li>--}}


                </ul>


                {{--<ul class="top-header-others">--}}
                {{--<li>--}}
                {{--<div class="languages-list">--}}
                {{--<select>--}}
                {{--<option value="1">English</option>--}}
                {{--<option value="2">العربيّة</option>--}}

                {{--</select>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class='bx bx-user'></i>--}}
                {{--<a href="login.html">Login</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
            </div>
        </div>
    </div>
</div>


<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('assets/site/img/logo-1.png')}}" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}" style="width:20%;">
                    <img src="{{asset('assets/site/img/logo-1.png')}}" alt="image">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link ">
                                الرئيسية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" href="https://ssoidp.gov.ps/sso/module.php/core/loginuserpass.php?AuthState=_8ad1b6d7cb7c8123f09c430a6e86aaa16b18090a0b%3Ahttps%3A%2F%2Fssoidp.gov.ps%2Fsso%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dhttps%253A%252F%252Fmaktabi.mtit.gov.ps%252Fsso%252Fwww%252Fmodule.php%252Fsaml%252Fsp%252Fmetadata.php%252Fdefault-sp%26cookieTime%3D1644138836%26RelayState%3Dhttps%253A%252F%252Fmaktabi.mtit.gov.ps%252F" class="nav-link">
                                الخدمات الإلكترنية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('site.news')}}" class="nav-link ">
                                أخبار البلدية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('site.adsAdvertising')}}" class="nav-link ">
                                إعلانات وعطاءات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('site.imageAlbums')}}" class="nav-link ">
                                صور
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('site.videos')}}" class="nav-link ">
                                فيديو
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                عن البلدية
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('site.aboutUs')}}" class="nav-link ">
                                        من نحن
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('site.plans')}}" class="nav-link ">
                                        الخطط الإستراتيجية والتشغيلية
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('site.reports')}}" class="nav-link " class="nav-link">
                                        التقارير الإدارية والمالية
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ asset('storage/attachment/reportAndPlane/' . @$fileHierarchy->link)}}" target="_blank" title="هيكلية-بلدية-جباليا-النزلة" class="nav-link">
                                        هيكلية البلدية
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://213.6.130.104/gis/" target="_blank" class="nav-link">
                                        الدليل السياحي
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href=" {{route('site.contactUs')}}" class="nav-link ">
                                اتصل بنا
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('site.jobs')}}" class="nav-link ">
                               الوظائف
                            </a>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--<a href="#" class="nav-link">-->
                        <!--News-->
                        <!--<i class='bx bx-chevron-down'></i>-->
                        <!--</a>-->
                        <!--<ul class="dropdown-menu">-->
                        <!--<li class="nav-item">-->
                        <!--<a href="news.html" class="nav-link">-->
                        <!--News-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="news-right-sidebar.html" class="nav-link">-->
                        <!--News right sidebar-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="news-left-sidebar.html" class="nav-link">-->
                        <!--News left sidebar-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="news-without-sidebar.html" class="nav-link">-->
                        <!--News without sidebar-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="#" class="nav-link">-->
                        <!--Post layout-->
                        <!--<i class='bx bx-chevron-right'></i>-->
                        <!--</a>-->
                        <!--<ul class="dropdown-menu">-->
                        <!--<li class="nav-item">-->
                        <!--<a href="news-details-1.html" class="nav-link">-->
                        <!--Post layout 1-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="news-details-2.html" class="nav-link">-->
                        <!--Post layout 2-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="news-details-3.html" class="nav-link">-->
                        <!--Post layout 3-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--</ul>-->
                        <!--</li>-->
                        <!--</ul>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="#" class="nav-link">-->
                        <!--Pages-->
                        <!--<i class='bx bx-chevron-down'></i>-->
                        <!--</a>-->
                        <!--<ul class="dropdown-menu">-->
                        <!--<li class="nav-item">-->
                        <!--<a href="author.html" class="nav-link">-->
                        <!--Author-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="about-us.html" class="nav-link">-->
                        <!--About us-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="our-team.html" class="nav-link">-->
                        <!--Our team-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="fashion.html" class="nav-link">-->
                        <!--Fashion-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="entertainment.html" class="nav-link">-->
                        <!--Entertainment-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="lifestyle.html" class="nav-link">-->
                        <!--Lifestyle-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="international.html" class="nav-link">-->
                        <!--International-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="#" class="nav-link">-->
                        <!--Account-->
                        <!--<i class='bx bx-chevron-down'></i>-->
                        <!--</a>-->
                        <!--<ul class="dropdown-menu">-->
                        <!--<li class="nav-item">-->
                        <!--<a href="login.html" class="nav-link">-->
                        <!--Login-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="register.html" class="nav-link">-->
                        <!--Register-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--</ul>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="error-404.html" class="nav-link">-->
                        <!--404 error-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="terms-of-service.html" class="nav-link">-->
                        <!--Terms of service-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="privacy-policy.html" class="nav-link">-->
                        <!--Privacy policy-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="coming-soon.html" class="nav-link">-->
                        <!--Coming soon-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--<a href="contact.html" class="nav-link">-->
                        <!--Contact-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--</ul>-->
                        <!--</li>-->
                    </ul>

                    {{--<div class="others-options d-flex align-items-center">--}}
                    {{--<div class="option-item">--}}
                    {{--<form class="search-box">--}}
                    {{--<input type="text" class="form-control" placeholder="ابحث..">--}}
                    {{--<button type="submit"><i class='bx bx-search'></i></button>--}}
                    {{--</form>--}}
                    {{--</div>--}}
                    {{--</div>--}}


                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <form class="search-box">
                                <input type="text" class="form-control" placeholder="ابحث..">
                                <button type="submit"><i class='bx bx-search'></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')
<section class="footer-area pt-50" style="padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <a href="{{url('/')}}">
                        <img src="{{asset('assets/site/img/logo-3.png')}}" style="width: 80%;" alt="image">
                    </a>
                    <p style="padding-left: 35px;">{!!@$infoConnectUs->aboutUs !!}</p>
                    <ul class="social">
                        <li>
                            <a href="{{@$infoConnectUs->linkFacebook}}" class="facebook" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        {{--<li>--}}
                        {{--<a href="#" class="twitter" target="_blank">--}}
                        {{--<i class='bx bxl-instagram'></i>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="#" class="pinterest" target="_blank">--}}
                        {{--<i class='bx bxl-linkedin'></i>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="{{@$infoConnectUs->linkTwitter}}" class="linkedin" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{@$infoConnectUs->linkYoutube}}" class="linkedin" target="_blank">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget" style="margin-top: 20px">
                    <h2>روابـــــط سـريعـــــة</h2>

                    <ul class="useful-links-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <li>
                                    <a target="_blank" href="https://ssoidp.gov.ps/sso/module.php/core/loginuserpass.php?AuthState=_8ad1b6d7cb7c8123f09c430a6e86aaa16b18090a0b%3Ahttps%3A%2F%2Fssoidp.gov.ps%2Fsso%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dhttps%253A%252F%252Fmaktabi.mtit.gov.ps%252Fsso%252Fwww%252Fmodule.php%252Fsaml%252Fsp%252Fmetadata.php%252Fdefault-sp%26cookieTime%3D1644138836%26RelayState%3Dhttps%253A%252F%252Fmaktabi.mtit.gov.ps%252F">الخدمات الإلكترونية</a>
                                </li>
                                <li>
                                    <a href="{{route('site.adsAdvertising')}}">إعلانات وعطاءات</a>
                                </li>
                                <li>
                                    <a href="{{route('site.imageAlbums')}}">مكتبــة الصور</a>
                                </li>
                                <li>
                                    <a href="{{route('site.contactUs')}}">اتصـــــــل بنـــــــــا</a>
                                </li>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <li>
                                    <a href="{{route('site.activityEvent')}}">أنشطة وفعاليات</a>
                                </li>
                                <li>
                                    <a href="{{route('site.news')}}">أخبار البلدية</a>
                                </li>
                                <li>
                                    <a href="{{route('site.videos')}}">مكتبــة الفيديو</a>
                                </li>
                                <li>
                                    <a href="{{route('site.aboutUs')}}">من نحــــن</a>
                                </li>

                            </div>
                        </div>


                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget" style="margin-top: 20px">
                    <h2>الاشتراك في القائمة البريدية</h2>
                    <div class="widget-subscribe-content">
                        <p>اشترك ليصلك أحدث الأخبار والأنشطة من موقع البلدية</p>
                        <form class="newsletter-form">
                            <input type="email" class="input-newsletter" placeholder="أدخل البريد الالكتروني" name="EMAIL" required>
                            <button type="submit">اشترك</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="copyright-area">
    <div class="container">
        <div class="copyright-area-content">
            <p>
                جميع الحقوق محفوظة لبلدية جباليا النزلة © 2022
                <a href="" target="_blank"></a>
            </p>
        </div>
    </div>
</div>


<div class="go-top">
    <i class='bx bx-up-arrow-alt'></i>
</div>


<script src="{{asset('assets/site/js/jquery.min.js')}}"></script>

<script src="{{asset('assets/site/js/popper.min.js')}}"></script>

<script src="{{asset('assets/site/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/site/js/jquery.meanmenu.js')}}"></script>

<script src="{{asset('assets/site/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/site/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('assets/site/js/nice-select.min.js')}}"></script>

<script src="{{asset('assets/site/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('assets/site/js/form-validator.min.js')}}"></script>

<script src="{{asset('assets/site/js/contact-form-script.js')}}"></script>

<script src="{{asset('assets/site/js/wow.min.js')}}"></script>

<script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>

<script src="{{asset('assets/site/js/main.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
@yield('js')
</body>
</html>
