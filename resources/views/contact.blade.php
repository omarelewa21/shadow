<x-base :title="'Contact Us'">
    <!--Start Contact Page-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <!--Start Contact Page Map-->
                <div class="col-xl-5">
                    <div class="contact-page-google-map">
                        <iframe
                            src={{$companyInfo->company_map_iframe_src}} 
                                class="contact-page-google-map__one" allowfullscreen></iframe>
                    </div>
                </div>
                <!--End Contact Page Map-->

                <!--Start Contact One Form-->
                <div class="col-xl-7">
                    <div class="contact-one__form">
                        <div class="sec-title tg-heading-subheading animation-style2">
                            <div class="sec-title__tagline">
                                <p class="tg-element-title">@lang('CONTACT US')</p>
                                <div class="border-box"></div>
                            </div>
                            <h2 class="sec-title__title tg-element-title">
                                @lang('Join Us To Get Free') <br> @lang('Consultations')
                            </h2>
                        </div>

                        <form method="POST" id="contact-form" class="default-form2 contact-form-validated"
                            action="/contact" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="name" value="" placeholder="NAME *" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="email" name="email" value="" placeholder="EMAIL *" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" placeholder="PHONE *" name="phone">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" placeholder="SUBJECT *" name="subject">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <textarea name="message" placeholder="WRITE YOUR MESSAGE *"></textarea>
                                    </div>
                                </div>

                                <div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>
                                <div id="form-result2" class="alert alert-danger" role="alert" style="display: none;"></div>
                
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-one__form-btn">
                                        <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                            <span class="txt">@lang('Book Now')</span>
                                            <span class="bdrl"></span>
                                            <span class="bdrr"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--End Contact One Form-->
            </div>
        </div>
    </section>
    <!--End Contact Page-->
</x-base>
