<x-base :title="'Portfolio'">
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">Our Portfolio</h2>
                <ul class="thm-breadcrumb wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><span>-</span></li>
                    <li>Our Portfolio</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->

    <!--Start Gallery Two -->
    <section class="gallery-two gallery-two--portfolio">
        <div class="container">
            <div class="sec-title text-center tg-heading-subheading animation-style2">
                <div class="sec-title__tagline">
                    <p class="tg-element-title">latest projects</p>
                    <div class="border-box"></div>
                </div>
                <h2 class="sec-title__title tg-element-title">Our Working Gallery</h2>
            </div>

            <div class="row">
                @foreach ($projects as $project)
                    <!--Start Gallery Two Single-->
                    <a href="{{$project->link}}" class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="gallery-two__single">
                            <div class="gallery-two__single-img">
                                <div class="inner">
                                    <img src="{{$project->banner}}" alt="{{$project->title}}">
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
    </section>
    <!--End Gallery Two -->
</x-base>