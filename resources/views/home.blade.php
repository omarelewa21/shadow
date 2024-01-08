<x-base :title="'Home'">
    @push('styles')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        #iconCarousel .carousel-inner .item .col-sm-2 {
            width: 20%; /* For 5 items per slide */
            float: left;
        }
        
        #iconCarousel .carousel-inner .item img {
            max-width: 100%; /* Ensure images take full width of the column */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
    @endpush
    <!--Start Main Slider Two-->
    <section class="main-slider main-slider-two">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 5000
            }}'>
            <div class="swiper-wrapper">

                @foreach ($sliders as $index=>$slider)
                    <!--Start Main Slider Two Single-->
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(/storage/{{$slider->background_image1}});"></div>
                        <div class="main-slider-two__bg"
                            style="background-image: url(/storage/{{$slider->background_image2}});"></div>
                        <div class="auto-container">
                            <div class="main-slider-two__single">
                                <div class="main-slider-two__single-top">
                                    <div class="counter-box">
                                        <div class="number">
                                            <h2>0{{$index+1}}</h2>
                                        </div>
                                        <div class="border-box"></div>
                                    </div>
                                    <div class="text">
                                        <p>{!! $slider->description !!}</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{route('contact.index')}}">Get In Touch</a>
                                    </div>
                                </div>

                                <div class="main-slider-two__single-bottom">
                                    <div class="title-box">
                                        <h2> {!! $slider->title !!} </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Main Slider Two Single-->
                @endforeach
            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-arrow-right"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-arrow-left"></i>
                </div>
            </div>
        </div>
    </section>
    <!--End Main Slider Two-->

    <!--Start Services Two -->
    <section class="services-two">
        <div class="container">
            <div class="sec-title tg-heading-subheading animation-style2">
                <div class="sec-title__tagline">
                    <p class="tg-element-title">our services</p>
                    <div class="border-box"></div>
                </div>
                <h2 class="sec-title__title tg-element-title">What We Offer
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="services-two__inner">
                        <div class="services-two__middle-content">
                            <div class="img-box float-bob-y">
                                <img src="/storage/{{$companyInfo->home_page_service_image}}" alt="Main">
                            </div>

                            <div class="services-two__video">
                                <div class="video-box">
                                    <a class="video-popup" title="Video Gallery"
                                        href="{{$companyInfo->home_page_youtube_link}}"
                                        style="visibility: visible;">
                                        <i class="icon-play-button-1" aria-hidden="true"></i>
                                        <span class="ripple"></span>
                                    </a>
                                </div>

                                <div class="title-box">
                                    <h3>Watch Video</h3>
                                </div>
                            </div>
                        </div>

                            <ul class="services-two__list">
                                @if ($services->has(0))
                                    @php
                                        $service = $services->get(0);
                                    @endphp
                                    <li class="services-two__list-item wow fadeInLeft" data-wow-delay="100ms"
                                        data-wow-duration="1000ms">
                                        <div class="icon-box display-6">
                                            {!! $service->icon !!}
                                        </div>

                                        <div class="content-box">
                                            <h2><a href="#">{{$service->service_title}}</a></h2>
                                            <p>{!! $service->home_description !!}</p>
                                        </div>
                                    </li>
                                @endif

                                @if ($services->has(1))
                                    @php
                                        $service = $services->get(1);
                                    @endphp
                                    <li class="services-two__list-item style2 wow fadeInRight" data-wow-delay="0ms"
                                        data-wow-duration="1000ms">
                                        <div class="icon-box display-6">
                                            {!! $service->icon !!}
                                        </div>

                                        <div class="content-box">
                                            <h2><a href="#">{{$service->service_title}}</a></h2>
                                            <p>{!! $service->home_description !!}</p>
                                        </div>
                                    </li>
                                @endif
                                
                            </ul>

                        <ul class="services-two__list style2">
                            @if ($services->has(2))
                                @php
                                    $service = $services->get(2);
                                @endphp
                                <li class="services-two__list-item wow fadeInLeft" data-wow-delay="100ms"
                                    data-wow-duration="1000ms">
                                    <div class="icon-box display-6">
                                        {!! $service->icon !!}
                                    </div>

                                    <div class="content-box">
                                        <h2><a href="#">{{$service->service_title}}</a></h2>
                                        <p>{!! $service->home_description !!}</p>
                                    </div>
                                </li>
                            @endif

                            @if ($services->has(3))
                                @php
                                    $service = $services->get(3);
                                @endphp
                                <li class="services-two__list-item style2 wow fadeInRight" data-wow-delay="0ms"
                                    data-wow-duration="1000ms">
                                    <div class="icon-box display-6">
                                        {!! $service->icon !!}
                                    </div>

                                    <div class="content-box">
                                        <h2><a href="#">{{$service->service_title}}</a></h2>
                                        <p>{!! $service->home_description !!}</p>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Start Services Two -->

    <!--Start Counter Two -->
    <section class="counter-two">
        <div class="auto-container">
            <div class="counter-two__inner">
                <div class="counter-two__inner-box">
                    <div class="row">
                        @foreach ($stats as $index=>$stat)
                            <!--Start Counter Two Single-->
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="counter-two__single">
                                    <div class="counter-two__single-top">
                                        <div class="count-box">
                                            {{$index + 1}}.
                                        </div>
                                        <div class="counter-box">
                                            <h2>
                                                <span class="odometer" data-count="{{$stat->stat_value}}">00</span>
                                                @if ($stat->add_k_char) <span class="k">k</span> @endif
                                                @if($stat->add_plus_sign) <span class="plus icon-plus-1"></span> @endif
                                            </h2>
                                        </div>
                                    </div>

                                    <div class="counter-two__single-bottom">
                                        <p>{{$stat->stat_name}}</p>
                                    </div>
                                </div>
                            </div>
                        <!--End Counter Two Single-->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Counter Two -->

    <!--Start Gallery Two -->
    <section class="gallery-two">
        <div class="container">
            <div class="sec-title tg-heading-subheading animation-style2">
                <div class="sec-title__tagline">
                    <p class="tg-element-title">latest projects</p>
                    <div class="border-box"></div>
                </div>
                <h2 class="sec-title__title tg-element-title">Our Working Gallery</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery-two__inner">
                        <div class="owl-carousel owl-theme thm-owl__carousel gallery-two__carousel"
                            data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": true,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-right-arrow-1\"></span>","<span class=\"icon-right-arrow-1\"></span>"],
                                "responsive": {
                                        "0": {
                                            "items": 4
                                        },
                                        "768": {
                                            "items": 4
                                        },
                                        "992": {
                                            "items": 4
                                        },
                                        "1200": {
                                            "items": 4
                                        }
                                    }
                                }'>

                                @foreach ($projects as $project)
                                <!--Start Gallery Two Single-->
                                <a href="{{$project->link ?? '#'}}" class="wow animated fadeInUp" data-wow-delay="0.1s">
                                    <div class="gallery-two__single">
                                        <div class="gallery-two__single-img">
                                            <div class="inner">
                                                <img src="/storage/{{$project->banner}}" alt="{{$project->title}}">
                                                <div class="overlay-content">
                                                    <h2 style="color:black">{{$project->title}}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!--End Gallery Two Single-->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Two -->

    <!--Start Brand One -->
    <section class="brand-one brand-one--two">
        <div class="auto-container">
            <div id="iconCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($galleryIcons->chunk(5) as $index => $chunk)
                        <div class="item {{ $index == 0 ? 'active' : '' }}">
                            <div class="d-flex flex-row justify-content-around" style="height: 130px">
                                @foreach ($chunk as $icon)
                                    <div>
                                        <img src="/storage/{{ $icon->gallery_icon }}" alt="" class="img-responsive">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#iconCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#iconCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </section>    
    <!--End Brand One -->

    <!--Start Testimonials Two -->
    <section class="testimonials-two">
        <div class="container">
            <div class="row">
                <!--Start Testimonials Two Left-->
                <div class="col-xl-4">
                    <div class="testimonials-two__left">
                        <div class="sec-title tg-heading-subheading animation-style2">
                            <div class="sec-title__tagline">
                                <p class="tg-element-title">testimonials</p>
                                <div class="border-box"></div>
                            </div>
                            <h2 class="sec-title__title tg-element-title">What Our Clients <br>
                                Say About Us
                            </h2>
                        </div>
                        <div class="testimonials-two__left-text">
                            <p>We always try to provide best solutions to our clients
                                and proud to make them happy with our service.
                            </p>
                            <br>
                            <p>These are our most appreciated testimonials for our values clients</p>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="{{route('testimonials')}}">
                                <span class="txt">View More Details</span>
                                <span class="bdrl"></span>
                                <span class="bdrr"></span>
                            </a>
                        </div>

                    </div>
                </div>
                <!--End Testimonials Two Left-->

                <!--Start Testimonials Two Right-->
                <div class="col-xl-8">
                    <div class="testimonials-two__right">
                        <ul class="testimonials-two__right-list">
                            @foreach ($testimonials as $index=>$testimonial)
                                <li class="testimonials-two__right-list-item wow animated fadeInRight"
                                    data-wow-delay="0.1s">
                                    <div class="testimonials-two__right-list-left">
                                        <div class="count-box">{{$index+1}}.</div>
                                        <div class="title-box">
                                            <h2><span>{{$testimonial->client_name}}</span></h2>
                                            <p>{{$testimonial->client_position}}</p>
                                        </div>
                                    </div>

                                    <div class="testimonials-two__right-list-right">
                                        <p>{{$testimonial->testimonial_text}} </p>
                                    </div>
                                    <div class="testimonials-two__img"><img class="testimonials-two__img-hover"
                                            src="/storage/{{$testimonial->client_image}}" alt="{{$testimonial->client_name}}"></div>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <!--End Testimonials Two Right-->
            </div>
        </div>
    </section>
    <!--End Testimonials Two -->

    <!--Start Team Two -->
    <section class="team-two">
        <div class="container">
            <!--Start Team Two Top-->
            <div class="team-two__top">
                <div class="container">
                    <div class="team-two__top-inner">
                        <div class="sec-title tg-heading-subheading animation-style2">
                            <div class="sec-title__tagline">
                                <p class="tg-element-title">professionals</p>
                                <div class="border-box"></div>
                            </div>
                            <h2 class="sec-title__title tg-element-title">Meet Our Experts
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
            <!--End Team Two Top-->

            <div class="team-two__bottom">
                <div class="container">
                    <div class="row">
                        @foreach ($team as $member)
                            <!--Start Team Two Single-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="team-two__single">
                                    <div class="team-two__single-img">
                                        <div class="inner">
                                            <img src="/storage/{{$member->image}}" alt="{{$member->name}}">
                                        </div>
                                    </div>

                                    <div class="team-two__single-content">
                                        <h2><span>{{$member->name}}</span></h2>
                                        <p>{{$member->position}}</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Team Two Single-->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Two -->

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="feature-one__wrap">
            @foreach($services->take(3) as $service)
                <div class="feature-one__title-box">
                    <h2 class="feature-one__title"><span class="icon-right-arrow-1 icon-one"></span>{{$service->service_title}}</h2>
                </div>
            @endforeach
        </div>
    </section>
    <!--Feature One End-->

    <!--Start Slogan One -->
    <section class="slogan-one">
        <div class="auto-container">
            <div class="slogan-one__inner">
                <div class="container">
                    <div class="slogan-one__content-box">
                        <div class="text-box">
                            <h2>Get In Touch</h2>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="{{route('contact.index')}}">
                                <span class="txt">Send A Message</span>
                                <span class="bdrl"></span>
                                <span class="bdrr"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Slogan One -->
    @push('scripts')
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#iconCarousel').carousel({
                    interval: 4000 // Adjust the interval as needed
                });
            });
        </script>
    @endpush
</x-base>