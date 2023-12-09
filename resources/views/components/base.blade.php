<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <!-- Favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{$companyInfo->tab_icon}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{$companyInfo->tab_icon}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{$companyInfo->tab_icon}}" />
    <link rel="manifest" href="{{$companyInfo->tab_icon}}" />
    <meta name="description" content="Shadow For Technical Solutions" />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/nice-select/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/thm-icons/style.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/reey-font/stylesheet.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />
    @stack('styles')
</head>

<body>
    <!-- Start Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        @foreach($appName as $char)
                            <span data-text-preloader="{{$char}}" class="letters-loading">{{$char}}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <div class="page-wrapper">

        <x-sidebar></x-sidebar>
        <x-header></x-header>
            {{ $slot }}
        <x-footer></x-footer>

    </div>
    <!-- /.page-wrapper -->

    <script src="{{asset('vendors/jquery/jquery-3.6.0.min.js')}}" ></script>
    <script src="{{asset('vendors/bootstrap/js/bootstrap.bundle.min.js')}}" ></script>
    <script src="{{asset('vendors/bootstrap-select/js/bootstrap-select.min.js')}}" ></script>
    <script src="{{asset('vendors/isotope/isotope.js')}}" ></script>
    <script src="{{asset('vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}" ></script>
    <script src="{{asset('vendors/jquery-appear/jquery.appear.min.js')}}" ></script>
    <script src="{{asset('vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}" ></script>
    <script src="{{asset('vendors/jquery-ui/jquery-ui.js')}}" ></script>
    <script src="{{asset('vendors/jquery-validate/jquery.validate.min.js')}}" ></script>
    <script src="{{asset('vendors/nice-select/jquery.nice-select.min.js')}}" ></script>
    <script src="{{asset('vendors/odometer/odometer.min.js')}}" ></script>
    <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}" ></script>
    <script src="{{asset('vendors/swiper/swiper.min.js')}}" ></script>
    <script src="{{asset('vendors/wnumb/wNumb.min.js')}}" ></script>
    <script src="{{asset('vendors/wow/wow.js')}}" ></script>
    <script src="{{asset('vendors/jarallax/jarallax.min.js')}}" ></script>
    <script src="{{asset('vendors/sidebar-content/jquery-sidebar-content.js')}}" ></script>
    <script src="{{asset('vendors/gsap/gsap.js')}}" ></script>
    <script src="{{asset('vendors/gsap/ScrollTrigger.js')}}" ></script>
    <script src="{{asset('vendors/gsap/SplitText.js')}}" ></script>
    <script src="https://malsup.github.io/jquery.form.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- Template js -->
    <script src="{{asset('js/custom.js')}}" ></script>
    @stack('scripts')
</body>

</html>