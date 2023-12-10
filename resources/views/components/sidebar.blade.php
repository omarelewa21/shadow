<!-- Start sidebar widget content -->
<div class="xs-sidebar-group info-group info-sidebar">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">X</a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <x-logo></x-logo>
                        <div class="content-box">
                            <h4>About Us</h4>
                            <div class="inner-text">
                                <p>{{$aboutUs}}</p>
                            </div>
                        </div>

                        <div class="form-inner">
                            <h4>Get a free quote</h4>
                            <form id="sidebar-contact-form" action="/contact" method="post" class="contact-form-validated">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="PHONE *" name="phone">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="SUBJECT *" name="subject">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Message..."></textarea>
                                </div>
                                <div id="sidebar-form-result" class="alert alert-success" role="alert" style="display: none;"></div>
                                <div id="sidebar-form-result2" class="alert alert-danger" role="alert" style="display: none;"></div>
                                <div class="form-group message-btn">
                                    <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                        <span class="txt">Submit Now</span>
                                        <span class="bdrl"></span>
                                        <span class="bdrr"></span>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="sidebar-contact-info">
                            <h4>Contact Info</h4>
                            <ul>
                                <li>
                                    <span class="icon-placeholder-1"></span> {{$companyInfo->company_address}}
                                </li>
                                <li>
                                    <span class="icon-phone-ringing"></span>
                                    <a href="tel:{{$companyInfo->company_phone}}">{{$companyInfo->company_phone}}</a>
                                </li>
                                <li>
                                    <span class="fa fa-envelope"></span>
                                    <a href="mailto:{{$companyInfo->company_email}}">{{$companyInfo->company_email}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="thm-social-link1">
                            <ul class="social-box">
                                @foreach($companyInfo->socialLinks() as $socialLink)
                                    <a href="{{$socialLink['link']}}" class="{{$socialLink['icon']}}"></a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End sidebar widget content -->