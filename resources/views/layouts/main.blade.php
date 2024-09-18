<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Resolutionfinancials | Modern Loan Company</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <meta name="description"
          content="Resolutionfinancials a Modern Loan Company, your one stop shop for quick financing" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/easilon-icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/slick/slick.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/easilon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
</head>


<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

<div class="preloader">
    <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
</div>
<!-- /.preloader -->
<div class="page-wrapper">
    <header class="main-header main-header--two sticky-header sticky-header--two sticky-header--normal">
        <div class="container-fluid">
            <div class="main-header__inner">
                <div class="main-header__logo logo-retina">
                    <a href="index.html">
                        <img src="{{asset('assets/images/rfl-logo-6.png')}}" alt="ResolutionFinance" width="250"
                             class="main-header__logo__light">
                        <img src="{{asset('assets/images/rfl-logo-6.png')}}" alt="ResolutionFinance" width="250"
                             class="main-header__logo__dark">
                    </a>
                </div><!-- /.main-header__logo -->
                <div class="main-header__right-wrap">
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">

                            <li class="megamenu">
                                <a href="{{route('webhome')}}">Home</a>
                            </li>


                            <li>
                                <a href="{{ route('about')  }}">About Us</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Loan</a>
                                <ul>
                                    <li><a href="{{ route('apply')  }}">Apply for a Loan</a></li>
{{--                                    <li><a href="{{ route('upload-loan-form')  }}">Upload completed Application form</a></li>--}}
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('calculator')  }}">Loan Calculator</a>
                            </li>

                            <li>
                                <a href="{{route('contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <div class="main-header__call">
                                <span class="main-header__call__icon">
                                    <i class="icon-telephone"></i>
                                </span><!-- /.main-header__call__icon -->
                            <h3 class="main-header__call__number">
                                <a href="tel:+91526420009">+234 805 6798 502</a>
                            </h3><!-- /.main-header__call__number -->
                        </div><!-- /.main-header__call -->
                        <div class="main-header__sidebar-btn sidebar-btn__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.main-header__sidebar-btn -->
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__right-wrap -->
            </div><!-- /.main-header__inner -->
        </div><!-- /.container-fluid -->
    </header><!-- /.main-header -->

    @yield('content')

    <footer class="main-footer main-footer--home">
        <div class="main-footer__bg" style="background-image: url(assets/images/shapes/footer-bg-1-1.png);"></div>
        <!-- /.main-footer__bg -->
        <div class="main-footer__top">
            <div class="container">
                <div class="row gutter-y-40">
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="footer-widget footer-widget--about">
                            <a href="" class="footer-widget__logo">
                                <img src="{{ asset('assets/images/rfl-logo-7.png')}}" width="200" alt="ResolutionFinance Template">
                            </a>
                            <p class="footer-widget__about-text">Resolution Finance Limited is a financial service provider incorporated in Nigeria and licensed by the Central Bank of Nigeria (CBN) to offer and provide world- class financial services.</p>
                            <!-- /.footer-widget__about-text -->
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-xl-4 col-lg-6 -->
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms"
                         data-wow-delay="100ms">
                        <div class="footer-widget footer-widget--links footer-widget--links-one">
                            <h2 class="footer-widget__title">Explore</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="">Our Services</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('faq')}}">FAQ</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-xl-2 col-lg-3 col-md-3 col-sm-6 -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms"
                         data-wow-delay="200ms">
                        <div class="footer-widget footer-widget--links footer-widget--links-two">
                            <h2 class="footer-widget__title">Loan Services</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="#">Business loan</a></li>
                                <li><a href="#">Salary/Cash Advances</a></li>
                                <li><a href="#">Asset Financing</a></li>
                                <li><a href="#">Emergency loan</a></li>
                                <li><a href="#">Personal loan</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-xl-3 col-lg-3 col-md-4 col-sm-6 -->
                    <div class="col-xl-3 col-lg-6 col-md-5 wow fadeInUp" data-wow-duration="1500ms"
                         data-wow-delay="300ms">
                        <div class="footer-widget footer-widget--contact">
                            <h2 class="footer-widget__title">Get inTouch</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__info">
                                <li><a href="https://www.google.com/maps">8th Floor, New Africa House, 31 Marina, Lagos.</a>
                                </li>
                                <li>
                                    <span class="footer-widget__info__icon"><i class="icon-paper-plane"></i></span>
                                    <a href="mailto:needhelp@company.com">contact@resolutionfinancelimted.com</a>
                                </li>
                                <li>
                                    <span class="footer-widget__info__icon"><i class="icon-telephone"></i></span>
                                    <a href="tel:+9156980036420">+234 805 6798 502, +234 909 9840 180, +234 909 9840 147, +234 909 9840 098, +234 909 9840 188</a>
                                </li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-xl-3 col-lg-6 col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-footer__top -->
        <div class="main-footer__bottom">
            <div class="container">
                <div class="main-footer__bottom__inner">
                    <div class="row gutter-y-40 align-items-center">
                        <div class="col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                            <div class="main-footer__social social-links-two">
                                <a href="https://facebook.com">
                                        <span class="social-links-two__icon">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        </span><!-- /.social-links-two__icon -->
                                    <span class="sr-only">Facebook</span>
                                </a>
                                <a href="https://twitter.com">
                                        <span class="social-links-two__icon">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </span><!-- /.social-links-two__icon -->
                                    <span class="sr-only">Twitter</span>
                                </a>
                                <a href="https://instagram.com">
                                        <span class="social-links-two__icon">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </span><!-- /.social-links-two__icon -->
                                    <span class="sr-only">Instagram</span>
                                </a>
                                <a href="https://youtube.com">
                                        <span class="social-links-two__icon">
                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                        </span><!-- /.social-links-two__icon -->
                                    <span class="sr-only">Youtube</span>
                                </a>
                            </div><!-- /.main-footer__social -->
                        </div><!-- /.col-md-5 -->
                        <div class="col-md-7 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                            <div class="main-footer__bottom__copyright">
                                <p class="main-footer__copyright">
                                    &copy; Copyright <span class="dynamic-year"></span> by ResolutionFinance.
                                </p>
                            </div><!-- /.main-footer__bottom__copyright -->
                        </div><!-- /.col-md-7 -->
                    </div><!-- /.row -->
                </div><!-- /.main-footer__inner -->
            </div><!-- /.container -->
        </div><!-- /.main-footer__bottom -->
    </footer><!-- /.main-footer -->

</div><!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="icon-close"></i></span>
        <div class="logo-box logo-retina">
            <a href="index.html" aria-label="logo image"><img src="assets/images/rfl-logo-2.png" width="155"
                                                              alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <span class="mobile-nav__contact__icon"><i class="fa fa-envelope"></i></span>
                <a href="mailto:needhelp@easilon.com">contact@resolutionfinancelimted.com</a>
            </li>
            <li>
                <span class="mobile-nav__contact__icon"><i class="fa fa-phone-alt"></i></span>
                <a href="tel:+9156980036420">+234 805 6798 502</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">
            <a href="https://facebook.com">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="https://twitter.com">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
            <a href="https://instagram.com">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>
            <a href="https://youtube.com">
                <i class="fab fa-youtube" aria-hidden="true"></i>
                <span class="sr-only">Youtube</span>
            </a>
        </div><!-- /.mobile-nav__social -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="easilon-btn">
                <span class="easilon-btn__icon"><i class="icon-search"></i></span>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->
<aside class="sidebar-one">
    <div class="sidebar-one__overlay sidebar-btn__toggler"></div><!-- /.siderbar-ovarlay -->
    <div class="sidebar-one__content">
        <span class="sidebar-one__close sidebar-btn__toggler"><i class="icon-close"></i></span>
        <div class="sidebar-one__logo sidebar-one__item logo-retina">
            <a href="index.html" aria-label="logo image"><img src="assets/images/rfl-logo-7.png" width="170"
                                                              alt="logo" /></a>
        </div><!-- /.sidebar-one__logo -->
        <div class="sidebar-one__about sidebar-one__item">
            <p class="sidebar-one__about__text">
                Resolution Finance Limited is a financial service provider incorporated in Nigeria and licensed by the Central Bank of Nigeria (CBN) to offer and provide world- class financial services.
            </p>
        </div><!-- /.sidebar-one__about -->
        <div class="sidebar-one__info sidebar-one__item">
            <h4 class="sidebar-one__title">Contact Us</h4>
            <ul class="sidebar-one__info__list">
                <li>
                        <span class="sidebar-one__info__icon">
                            <i class="icon-location"></i>
                        </span>
                    <address>
                        8th Floor, New Africa House, 31 Marina, Lagos.
                    </address>
                </li>
                <li>
                        <span class="sidebar-one__info__icon">
                            <i class="icon-paper-plane"></i>
                        </span>
                    <a href="mailto:contact@resolutionfinancelimted.com">contact@resolutionfinancelimted.com</a>
                </li>
                <li>
                        <span class="sidebar-one__info__icon">
                            <i class="icon-telephone"></i>
                        </span>
                    <a href="tel:+9156980036420">+234 805 6798 502</a>
                </li>
            </ul><!-- /.sidebar-one__info__list -->
        </div><!-- /.sidebar-one__info -->
        <div class="sidebar-one__social social-links-two sidebar-one__item">
            <a href="https://facebook.com">
                    <span class="social-links-two__icon">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </span><!-- /.social-links-two__icon -->
                <span class="sr-only">Facebook</span>
            </a>
            <a href="https://twitter.com">
                    <span class="social-links-two__icon">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                    </span><!-- /.social-links-two__icon -->
                <span class="sr-only">Twitter</span>
            </a>
            <a href="https://instagram.com">
                    <span class="social-links-two__icon">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </span><!-- /.social-links-two__icon -->
                <span class="sr-only">Instagram</span>
            </a>
            <a href="https://youtube.com">
                    <span class="social-links-two__icon">
                        <i class="fab fa-youtube" aria-hidden="true"></i>
                    </span><!-- /.social-links-two__icon -->
                <span class="sr-only">Youtube</span>
            </a>
        </div><!-- /sidebar-one__social -->
{{--        <div class="sidebar-one__newsletter sidebar-one__item">--}}
{{--            <label class="sidebar-one__title" for="sidebar-email">Newsletter</label>--}}
{{--            <form action="#" class="sidebar-one__newsletter__inner mc-form" data-url="MAILCHIMP_FORM_URL">--}}
{{--                <input type="email" name="EMAIL" id="sidebar-email" class="sidebar-one__newsletter__input"--}}
{{--                       placeholder="Email Address">--}}
{{--                <button type="submit" class="sidebar-one__newsletter__btn"><span class="icon-mail-2"--}}
{{--                                                                                 aria-hidden="true"></span></button>--}}
{{--            </form>--}}
{{--            <div class="mc-form__response"></div>--}}
{{--        </div>--}}
    </div><!-- /.sidebar__content -->
</aside><!-- /.sidebar-one -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>
<script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendors/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
<script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
<!-- template js -->
<script src="{{ asset('assets/js/easilon.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Select all file input wrappers
        const fileInputWrappers = document.querySelectorAll('.file-input-wrapper');

        // Add event listeners to each file input and button pair
        fileInputWrappers.forEach(wrapper => {
            const fileInput = wrapper.querySelector('input[type=file]');
            const fileInputButton = wrapper.querySelector('button');

            fileInputButton.addEventListener('click', function () {
                fileInput.click();
            });

            fileInput.addEventListener('change', function () {
                const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : 'Choose a file';
                fileInputButton.textContent = fileName;
            });
        });
    });
</script>

</body>

</html>
