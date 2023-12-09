<x-base :title='$service->service_title'>
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{$service->service_main_banner_src}}); width:1170px; height:600px">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                    {{$service->service_title}}
                </h2>
                <ul class="thm-breadcrumb wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><span>-</span></li>
                    <li>{{$service->service_title}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->

    <!--Start Service Details -->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <!--Start Service Details Content-->
                <div class="col-xl-8">
                    <div class="service-details__content">
                        <div class="service-details__content-img1">
                            <div class="inner">
                                <img src="{{$service->service_second_banner_src}}" alt="">
                            </div>
                            <div class="icon-box">
                                <span class="icon-creative-idea"></span>
                            </div>
                        </div>

                        <div class="service-details__content-text1">
                            <h2>{{$service->service_title}}</h2>
                            {!! $service->service_description !!}
                        </div>

                        <div class="service-details__content-text2">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="img-box">
                                        <img src="{{$service->service_third_banner_src}}" alt="">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="content-box">
                                        <h2>Why choose?</h2>
                                        {!! $service->why_choose_description !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Service Details -->

                <!--Start Sidebar-->
                <div class="col-xl-4">
                    <div class="sidebar">
                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__services">
                            <ul class="sidebar__services-list">
                                @foreach($allServices as $service)
                                    <li>
                                        <a href="{{route('service.show', $service->id)}}">{{$service->service_title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--End Sidebar Single-->

                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__contact">
                            <div class="sidebar__contact-inner text-center">
                                <div class="title-box">
                                    <h2> Contact Us <br>
                                        to get a qoute !</h2>
                                </div>
                                <a href="tel:{{$companyTel}}">
                                    <div class="icon-box">
                                    <span class="icon-phone-ringing"></span>
                                    <div class="border-left"></div>
                                    <div class="border-right"></div>
                                </div>
                                <div class="text-box">
                                    <p>Click to message us via WhatsApp</p>
                                    <h3>{{$companyTel}}</h3>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!--End Sidebar Single-->
                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </section>
    <!--End Service Details Content-->
</x-base>