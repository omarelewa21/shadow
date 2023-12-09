<x-base :title="'team'">
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">Our Team</h2>
                <ul class="thm-breadcrumb wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><span>-</span></li>
                    <li>Our Team</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->

    <!--Start Gallery Two -->
    <section class="gallery-two">
        <div class="container">
            <div class="sec-title tg-heading-subheading animation-style2">
                <h2 class="sec-title__title tg-element-title">Meet Our Experts</h2>
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

                            <!--Start Gallery Two Single-->
                            @foreach($teamMembers as $teamMember)
                                <div class="gallery-two__single">
                                    <div class="gallery-two__single-img">
                                        <div class="inner">
                                            <img src="{{$teamMember->image}}" alt="{{$teamMember->name}}">
                                            <div class="overlay-content">
                                                <p>{{$teamMember->position}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!--End Gallery Two Single-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Two -->
</x-base>