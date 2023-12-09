<header class="main-header main-header-two">
    <div class="main-header-two__inner">
        <nav class="main-menu main-menu-one">
            <div class="main-menu__wrapper clearfix">
                <div class="auto-container">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-header-two__left">
                            <div class="logo-box-one">
                                <x-logo></x-logo>
                            </div>
                        </div>

                        <div class="main-menu-box">
                            <a href="#" class="mobile-nav__toggler">
                                <i class="fa fa-bars"></i>
                            </a>

                            <ul class="main-menu__list">
                                <li class="current">
                                    <a href="index.html">Home</a>
                                </li>

                                <li>
                                    <a href="about.html">About</a>
                                </li>

                                <li class="dropdown">
                                    <a href="#">Services</a>
                                    <ul>
                                        @foreach($services as $service)
                                            <li>
                                                <a href="{{route('service.show', $service->id)}}">{{$service->service_title}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="{{route('team')}}">Team</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{route('contact.index')}}">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <div class="main-header-two__right">
                            <div class="side-content-button-box">
                                <div class="side-content-button">
                                    <a class="navSidebar-button" href="#">
                                        <span class="icon-menu"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="stricky-header stricky-header--one stricked-menu main-menu">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->