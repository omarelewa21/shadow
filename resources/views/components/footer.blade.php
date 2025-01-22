<!--Start Footer One -->
<footer class="footer-one">
    <!--Start Footer-->
    <div class="footer">
        <div class="container">
            <div class="footer-one__inner">
                <div class="logo-box text-center">
                    <x-logo></x-logo>
                </div>

                <div class="footer-one__contact">
                    <div class="footer-one__contact-bdr"
                        style="background-image: {{$companyInfo->company_logo}};"></div>
                    <ul>
                        <li>
                            <div class="icon-box">
                                <span class="icon-ringing"></span>
                            </div>

                            <div class="text-box">
                                <p>Call anytime</p>
                                <h3><a href="tel:{{$companyInfo->company_phone}}">{{$companyInfo->company_phone}}</a></h3>
                            </div>
                        </li>

                        <li>
                            <div class="icon-box">
                                <span class="icon-message"></span>
                            </div>

                            <div class="text-box">
                                <p>Send email</p>
                                <h3><a href="mailto:{{$companyInfo->company_email}}">{{$companyInfo->company_email}}</a></h3>
                            </div>
                        </li>

                        <li>
                            <div class="icon-box">
                                <span class="icon-placeholder"></span>
                            </div>

                            <div class="text-box">
                                <p>Visit Office</p>
                                <h3>{{$companyInfo->company_address}}</h3>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="footer-one__menu">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        {{-- <li><a href="{{route('about-us')}}">About</a></li> --}}
                        <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                        <li><a href="{{route('service.show', 1)}}">Services</a></li>
                        <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                        <li><a href="{{route('help')}}">Help</a></li>
                    </ul>
                </div>

                <div class="footer-one__social-links">
                    <ul>
                        @foreach($companyInfo->socialLinks() as $socialLink)
                            <li><a href="{{$socialLink['link']}}"><span class="{{$socialLink['icon']}}"></span></a></li>
                        @endforeach
                    </ul>
                    <div class="border-box"></div>
                </div>

                <div class="footer-one__copyright">
                    <p>Copyright © 2023 all rights reserved.</p>
                </div>

                <div class="scroll-to-top-box">
                    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">Back to Top</a>
                    <div class="border-box"></div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer-->
</footer>
<!--End Footer One-->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler">
            <i class="icon-plus"></i>
        </span>
        <div class="logo-box">
            <x-logo></x-logo>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{$companyInfo->company_email}}">{{$companyInfo->company_email}}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:{{$companyInfo->company_phone}}">{{$companyInfo->company_phone}}</a>
            </li>
        </ul>
        <div class="mobile-nav__social">
            @foreach($companyInfo->socialLinks() as $socialLink)
                <a href="{{$socialLink['link']}}" class="{{$socialLink['icon']}}"></a>
            @endforeach
        </div>
    </div>
</div>
