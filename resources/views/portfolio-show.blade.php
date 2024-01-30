<x-base :title="$project->home_title">
    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(/storage/{{$project->background_banner}});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">{{$project->home_title}}</h2>
                <ul class="thm-breadcrumb wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><span>-</span></li>
                    <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                    <li><span>-</span></li>
                    <li>{{$project->home_title}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->

    <!--Start Portfolio Details -->
    <div class="portfolio-details">
        <div class="container">
            <div class="portfolio-details__inner">
                <div class="portfolio-details__img1">
                    <img src="/storage/{{$project->main_banner}}" alt="main banner">
                </div>

                <div class="portfolio-details__text1">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="content-box">
                                <h2>Projects Overview</h2>
                                {!! $project->project_overview !!}
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="sidebar-box">
                                <div class="sidebar-box-bg"
                                    style="background-image: url(/storage/{{$project->contact_banner}});">
                                </div>
                                <ul class="sidebar-box-list">
                                    <li>
                                        <h2>Clients:</h2>
                                        <h3>{{$project->client_name}}</h3>
                                    </li>

                                    <li>
                                        <h2>Category:</h2>
                                        <h3>{{$project->category}}</h3>
                                    </li>

                                    <li>
                                        <h2>Date:</h2>
                                        <h3>{{$project->project_date}}</h3>
                                    </li>
                                </ul>
                                <div class="social-links">
                                    @if ($project->twitter)
                                        <a href="{{$project->twitter}}"><span class="icon-twitter"></span></a>
                                    @endif
                                    @if ($project->facebook)
                                        <a href="{{$project->facebook}}"><span class="icon-facebook"></span></a>
                                    @endif
                                    @if ($project->pinterest)
                                        <a href="{{$project->pinterest}}"><span class="icon-pinterest"></span></a>
                                    @endif
                                    @if ($project->instagram)
                                        <a href="{{$project->instagram}}"><span class="icon-instagram"></span></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portfolio-details__btn-box">
                    <div class="previous-btn">
                        <div class="icon">
                            <a href="{{$prevProject ? route('portfolio.show', $prevProject->id) : '#'}}"><span class="icon-arrow-left"></span></a>
                        </div>
                        <div class="text">
                            <a href="{{$prevProject ? route('portfolio.show', $prevProject->id) : '#'}}">Previous post</a>
                        </div>
                    </div>

                    <div class="next-btn">
                        <div class="text">
                            <a href="{{$nextProject ? route('portfolio.show', $nextProject->id) : '#'}}">Next post</a>
                        </div>
                        <div class="icon">
                            <a href="{{$nextProject ? route('portfolio.show', $nextProject->id) : '#'}}"><span class="icon-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Portfolio Details -->

    <!--Start Portfolio One -->
    <section class="portfolio-one">
        <div class="container">
            <div class="row">
                <!--Start Portfolio One Single-->
                @foreach ($project->images as $image)
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="portfolio-one__single">
                            <div class="inner">
                                <img src="{{asset('storage/'.$image->image)}}" alt="">
                                <div class="portfolio-one__link">
                                    <a class="img-popup" href="{{asset('storage/'.$image->image)}}"><span
                                            class="icon-plus-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--End Portfolio One Single-->
            </div>
        </div>
    </section>
    <!--End Portfolio One -->
</x-base>