<section class="author-area pt-0">
    <div class="container">
        <div class="section-title">
            <h2>كلمة رئيس البلدية</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="author-content">
                    <h3>{{@$boss->name}}</h3>
                    <p>{!! @$boss->description !!}</p>

                    {{--<ul class="author-list">--}}
                    {{--<li>--}}
                    {{--<a href="#"> <i class="bx bx-repost"></i>Total post (135)</a>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                    {{--<a href="#"> <i class="bx bx-comment"></i>5 Comments</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}

                    <ul class="author-social">
                        <li>
                            <a href="{{@$boss->facebook}}"><i class="bx bxl-facebook"></i></a>
                        </li>

                        <li>
                            <a href="{{@$boss->twitter}}"><i class="bx bxl-twitter"></i></a>
                        </li>

                        <li>
                            <a href="{{@$boss->linkedin}}"><i class="bx bxl-linkedin"></i></a>
                        </li>

                        <li>
                            <a href="{{@$boss->instagram}}"><i class="bx bxl-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="author-image">
                    <img src="{{ asset('thumb.php?src=storage/municipalMember/' . @$boss->image.'&size=354x354') }}" alt="image">
                </div>
            </div>


        </div>
    </div>
</section>
<!-- Start Team Area -->
<section class="team-area">

    <div class="container">
        <div class="section-title">
            <h2>المجلس البلدي</h2>
        </div>
        <div class="row">

            <div class="col-lg-2 col-md-6 col-6">
                <div class="single-team-box">
                    <div class="image">
                        <a href="{{ asset('thumb.php?src=storage/municipalMember/' . @$bossVice->image.'&size=300x300') }}" data-fancybox="group" data-caption="أ.{{@$bossVice->name  }} - {{@$bossVice->certification}}">
                            <img src="{{ asset('thumb.php?src=storage/municipalMember/' . @$bossVice->image.'&size=164x164') }}" alt="image">
                        </a>

                        <ul class="social">
                            <li>
                                <a href="{{@$bossVice->facebook}}" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{@$bossVice->twitter}}" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{@$bossVice->linkedin}}" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{@$bossVice->instagram}}" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="content">
                        <h3>أ. {{@$bossVice->name }}</h3>
                        <span>{{@$bossVice->categoryMember->name}}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-6">
                <div class="single-team-box">
                    <div class="image">
                        <a href="{{ asset('thumb.php?src=storage/municipalMember/' . @$secretary->image.'&size=300x300') }}" data-fancybox="group" data-caption="أ.{{@$secretary->name  }} - {{@$secretary->certification}}">
                            <img src="{{ asset('thumb.php?src=storage/municipalMember/' . @$secretary->image.'&size=164x164') }}" alt="image">
                        </a>

                        <ul class="social">
                            <li>
                                <a href="{{@$secretary->facebook}}" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{@$secretary->twitter}}" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{@$secretary->linkedin}}" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{@$secretary->instagram}}" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="content">
                        <h3> {{@$secretary->name  }}</h3>
                        <span>{{@$secretary->categoryMember->name}}</span>
                    </div>
                </div>
            </div>
            @foreach(@$members->take(10) as $member)
            <div class="col-lg-2 col-md-6 col-6">
                <div class="single-team-box">
                    <div class="image">
                        <a href="{{ asset('thumb.php?src=storage/municipalMember/' . @$member->image.'&size=300x300') }}" data-fancybox="group" data-caption="{{@$member->name  }} - {{@$member->certification}}">
                            <img src="{{ asset('thumb.php?src=storage/municipalMember/' . @$member->image.'&size=164x164') }}" alt="image">
                        </a>

                        <ul class="social">
                            <li>
                                <a href="{{@$member->facebook}}" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{@$member->twitter}}" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{@$member->linkedin}}" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{@$member->instagram}}" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="content">
                        <h3>{{@$member->name  }}</h3>
                        <span>{{@$member->categoryMember->name}}</span>
                    </div>
                </div>
            </div>
            @endforeach

            @foreach(@$members->slice(10)->take(2) as $member)

            <div class="col-lg-2 col-md-6 col-6 ms-auto">
                <div class="single-team-box">
                    <div class="image">
                        <a href="{{ asset('thumb.php?src=storage/municipalMember/' . @$member->image.'&size=300x300') }}" data-fancybox="group" data-caption="أ.{{@$member->name  }} - {{@$member->certification}}">
                            <img src="{{ asset('thumb.php?src=storage/municipalMember/' . @$member->image.'&size=164x164') }}" alt="image">
                        </a>

                        <ul class="social">
                            <li>
                                <a href="{{@$member->facebook}}" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{@$member->twitter}}" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{@$member->linkedin}}" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{@$member->instagram}}" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="content">
                        <h3>{{@$member->name  }}</h3>
                        <span>{{@$member->categoryMember->name}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Team Area -->
