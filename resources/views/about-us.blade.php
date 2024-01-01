<x-base :title="'About Us'">
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{$aboutUs->banner}})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">About us</h2>
                <ul class="thm-breadcrumb wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><span>-</span></li>
                    <li>About us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->

    <!--Start Brand One -->
    <section class="brand-one brand-one--two about">
        <div class="auto-container">
            <div class="brand-one__inner">
                <ul class="row">
                    @foreach ($projects as $project)
                        <li class="col-2">
                            <a style="width: 100%" href="{{$project->link ?? '#'}}">
                                <img src="/storage/{{$project->banner}}" alt="{{$project->title}}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!--End Brand One -->

    <!--Start Advantages One -->
    <section class="advantages-one">
        <div class="container">
            <div class="advantages-one__inner">
                <ul class="row">
                    <li class="col-xl-4">
                        <div class="advantages-one__single">
                            <div class="advantages-one__single-img">
                                <div class="inner">
                                    <img src="/storage/{{$aboutUs->image1}}" alt="#">
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="col-xl-4">
                        <div class="advantages-one__single">
                            <div class="advantages-one__single-content">
                                <div class="tagline">
                                    <a href="#">advantages</a>
                                    <div class="border-box"></div>
                                </div>

                                <div class="title-box">
                                    <h2>Design <br>
                                        <span>Creative</span> <br>
                                        Solutions</h2>
                                </div>

                                <p>{{$aboutUs->advantage_description}}</p>

                                <div class="btn-box">
                                    <a class="thm-btn" href="{{route('protfolio')}}">
                                        <span class="txt">View More</span>
                                        <span class="bdrl"></span>
                                        <span class="bdrr"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="col-xl-4">
                        <div class="advantages-one__single">
                            <div class="advantages-one__single-img">
                                <div class="inner">
                                    <img src="/storage/{{$aboutUs->image2}}" alt="#">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Advantages One -->

    <!--Start Team One -->
    <section class="team-one team-one--about">
        <div class="container">
            <!--Start Team One Top-->
            <div class="team-one__top">
                <div class="container">
                    <div class="team-one__top-inner">
                        <div class="sec-title tg-heading-subheading animation-style2">
                            <div class="sec-title__tagline">
                                <p class="tg-element-title">our professionals</p>
                                <div class="border-box"></div>
                            </div>
                            <h2 class="sec-title__title tg-element-title">Dedicated Our Team
                            </h2>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="{{route('team')}}">
                                <span class="txt">View More Details</span>
                                <span class="bdrl"></span>
                                <span class="bdrr"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Team One Top-->

            <div class="team-one__bottom">
                <div class="container filter-layout masonary-layout">
                    <div class="row">
                        
                        @if ($teamMembers->first())
                            <!--Start Team One Single-->
                            <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                                <div class="team-one__single">
                                    <div class="team-one__single-img">
                                        <div class="inner">
                                            <img src="/storage/{{$teamMembers->first()->image}}" alt="#">
                                            <div class="overlay-content">
                                                <h2><a href="#">{{$teamMembers->first()->name}}</a></h2>
                                                <p>{{$teamMembers->first()->position}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Start Team One Single-->
                        @endif
                        
                        @if ($teamMembers->get(1))
                            <!--Start Team One Single-->
                            <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                                <div class="team-one__single mt40">
                                    <div class="team-one__single-img">
                                        <div class="inner">
                                            <img src="/storage/{{$teamMembers->get(1)->image}}" alt="#">
                                            <div class="overlay-content">
                                                <h2><a href="#">{{$teamMembers->get(1)->name}}</a></h2>
                                                <p>{{$teamMembers->get(1)->position}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Start Team One Single-->
                        @endif

                        @if ($teamMembers->last())
                            <!--Start Team One Single-->
                            <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.5s">
                                <div class="team-one__single mt80">
                                    <div class="team-one__single-img">
                                        <div class="inner">
                                            <img src="/storage/{{$teamMembers->last()->image}}" alt="#">
                                            <div class="overlay-content">
                                                <h2><a href="#">{{$teamMembers->last()->name}}</a></h2>
                                                <p>{{$teamMembers->last()->position}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Start Team One Single-->
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team One -->
</x-base>