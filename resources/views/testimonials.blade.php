<x-base :title="'Testimonials'">
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">Testimonial</h2>
                <ul class="thm-breadcrumb wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><span>-</span></li>
                    <li>Testimonial</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->

    <!--Start Testimonials One -->
    <section class="testimonials-one testimonials-one--testimonials">
        <div class="container">
            <div class="testimonials-one__top">
                <div class="sec-title tg-heading-subheading animation-style2">
                    <div class="sec-title__tagline">
                        <p class="tg-element-title">Testimonials</p>
                        <div class="border-box"></div>
                    </div>
                    <h2 class="sec-title__title tg-element-title">Our Expert Clients
                    </h2>
                </div>

                <div class="btn-box">
                    <a class="thm-btn" href="{{route('contact.index')}}">
                        <span class="txt">Give Feedback</span>
                        <span class="bdrl"></span>
                        <span class="bdrr"></span>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonials-one__inner">
                        <div class="owl-carousel owl-theme thm-owl__carousel testimonials-one__carousel"
                            data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": true,
                                "dots": true,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-arrow-right\"></span>","<span class=\"icon-arrow-left\"></span>"],
                                "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 1
                                        },
                                        "1200": {
                                            "items": 1
                                        }
                                    }
                                }'>
                            
                            @foreach ($testimonials as $testimonial)
                                <!--Start Testimonials One Single-->
                                <div class="testimonials-one__single">
                                    <div class="left-content">
                                        <div class="icon-box">
                                            <span class="icon-left-quote"></span>
                                        </div>
                                        <div class="text-box">
                                            <p>{{$testimonial->client_name}}</p>
                                            <span>{{$testimonial->client_position}}</span>
                                        </div>
                                    </div>

                                    <div class="right-content">
                                        <div class="text-box">
                                            <p>{{$testimonial->testimonial_text}}</p>
                                        </div>

                                        <div class="rating-box">
                                            <ul>
                                                @for ($i = 0; $i < $testimonial->rating; $i++)
                                                    <li>
                                                        <span class="icon-pointed-star"></span>
                                                    </li>
                                                @endfor
                                            </ul>
                                        </div>
                                        <div class="img-box">
                                            <img src="/storage/{{$testimonial->client_image}}" alt="Client Image">
                                        </div>
                                    </div>
                                </div>
                                <!--End Testimonials One Single-->
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonials One -->

    <!--Start Counter Two -->
    <section class="counter-two counter-two--testimonials">
        <div class="auto-container">
            <div class="counter-two__inner">
                <div class="row">
                    @foreach ($testimonialStats as $index=>$stat)
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
                                            <span class="plus icon-plus-1"></span>
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
    </section>
    <!--End Counter Two -->
</x-base>