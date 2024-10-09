<!DOCTYPE html>
<html html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Tayhu &#8211; Comfort &amp; Elegance</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="ZR Themes">
    <meta name="description" content="BuildZone - Construction Building HTML Template">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/logo-title.png">
    <!-- Site All Style Sheet Css -->
    <link href="/assets/stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/stylesheets/swiper.min.css" rel="stylesheet">
    <link href="/assets/stylesheets/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/stylesheets/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/assets/stylesheets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/stylesheets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/assets/stylesheets/animate.min.css" rel="stylesheet">
    <link href="/assets/stylesheets/magnific-popup.css" rel="stylesheet">
    <!-- Site Main Style Sheet Css -->
    <link href="/assets/stylesheets/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../../css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="../../../css2-1?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="../../../css2-2?family=Monoton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/stylesheets/main.css">

</head>

<body>

    <!-- Start Page Preloader Area -->
    <div class="preloader" id="kar-theme-preloader">
        <div class="preloader-wapper">
            <div>
                <div class="spinner-loader">
                    <img src="/assets/images/loader.svg" alt="laoder">
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Preloader Area -->

    @include('components.frontend.header')
    @yield('content')
    <!-- Footer -->
    <footer id="footer" class="footer-section">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="{{route('home')}}" class="logo d-flex align-items-center">
                                    <img src="{{ asset('storage/' . str_replace('\\', '/', $site->logo)) }}" class="white-logo" alt="logo">
                                </a>
                            </div>
                            <div class="footer-text">
                                <p>{!! $site->getTranslatedAttribute('about_text', app()->getLocale()) !!}</p>
                            </div>

                            <div class="footer-social-icon">
                                <a href="{{$site->facebook_link}}"><i class="fa-brands fa-facebook-f facebook-bg"></i></a>
                                <a href="{{$site->telegram_link}}"><i class="fa-brands fa-telegram"></i></a>
                                <a href="{{$site->google_link}}"><i class="fa-brands fa-google google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3><x-translation key="use_link" /></h3>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <ul>
                                        <li><a href="{{ route('catalog') }}"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i><x-translation key="catalog_link" /></a></li>
                                        <li><a href="{{ route('projects') }}"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i><x-translation key="project_link" /></a></li>
                                        <li><a href="{{ route('blog') }}"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i><x-translation key="blog_link" /></a></li>

                                    </ul>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <ul>
                                        <li><a href="{{ route('catalog') }}"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i><x-translation key="catalog_link" /></a></li>
                                        <li><a href="{{ route('contact') }}"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i><x-translation key="contact_link" /></a></li>
                                        <li><a href="{{ route('team') }}"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i><x-translation key="team_link" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3><x-translation key="contact_link" /></h3>
                            </div>
                            <div class="contact-info">
                                <h6><x-translation key="address" /></h6>
                                <p>
                                    <i class="fa fa-map"></i>
                                    <a
                                        href="https://www.google.com/maps/place/Tayhu/@41.3889256,69.2801609,653m/data=!3m2!1e3!4b1!4m6!3m5!1s0x38ae8d4eb3c71ab7:0x29734a4e8feeaa44!8m2!3d41.3889256!4d69.2827358!16s%2Fg%2F11pc4ryj7p?entry=ttu&g_ep=EgoyMDI0MDkyNC4wIKXMDSoASAFQAw%3D%3D"
                                        target="_blank">{!! $site->getTranslatedAttribute('location_1', app()->getLocale()) !!}</a>
                                </p>
                            </div>
                            <div class="contact-info">
                                <h6><x-translation key="phone" /></h6>
                                <p><i class="fa fa-phone"></i> <a href="tel:+998712236508">{{$site->phone_1}}</a></p>
                                <p><i class="fa fa-phone"></i> <a href="tel:+998988888812">{{$site->phone_2}}</a></p>
                            </div>

                            <div class="contact-info">
                                <h6><x-translation key="email" /></h6>
                                <p><i class="fa fa-envelope"></i> <a href="mailto:spektrstar@tayhu.uz">{{$site->email_1}}</a></p>
                                <p><i class="fa fa-envelope"></i> <a href="mailto:spektrstar@tayhu.uz">{{$site->email_2}}</a></p>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-6 mb-50">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-left text-lg-left">
                        <div class="copyright-text">
                            <p>2024 © <a href="https://dora.uz/" target="_blank" style="text-decoration: underline !important;">DORA System</a>. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Back to Top Start -->
    <div class="back-to-top">
        <i class="fa fa-caret-up"></i><i class="fa fa-caret-up"></i>
    </div>
    <!-- Back to Top End -->

    <!-- Site All Jquery Js -->
    <script src="/assets/javascript/jquery-3.5.1.min.js"></script>
    <script src="/assets/javascript/bootstrap.min.js"></script>
    <script src="/assets/javascript/plugins.js"></script>
    <script src="/assets/javascript/swiper.min.js"></script>
    <script src="/assets/javascript/wow.min.js"></script>
    <script src="/assets/javascript/validator.min.js"></script>
    <script src="/assets/javascript/contact.js"></script>
    <script src="/assets/javascript/main.js"></script>
    <script src="/assets/js/nice-select.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/nice-select.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/asset/js/configurator.js"></script>
</body>

</html>