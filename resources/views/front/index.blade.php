@extends('layouts.main')
@section('content')
    <section class="main-slider-two" id="home">
        <div class="main-slider-two__inner">
            <div class="main-slider-two__inner__bg"
                style="background-image: url(assets/images/shapes/main-slider-shape-bg-2-2.png);"></div>
        </div>
        <div class="main-slider-two__carousel easilon-owl__carousel owl-carousel" data-owl-options='{
        "margin": 0,
        "loop": true,
        "animateIn": "fadeIn",
        "animateOut": "fadeOut",
        "items": 1,
        "autoplay": true,
        "smartSpeed": 1000,
        "nav": false,
        "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
        "dots": false
        }'>
            @foreach($banners as $banner)
            <div class="item">
                <div class="main-slider-two__item">
                    <div class="main-slider-two__bg"
                        style="background-image: url(assets/images/shapes/main-slider-shape-bg-2-1.png);">
                    </div>
                    <div class="main-slider-two__social social-links-two">
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
                    </div>
                    <div class="main-slider-two__container container">
                        <div class="row gutter-y-60 align-items-center">
                            <div class="col-xxl-6 col-xl-7">
                                <div class="main-slider-two__content">
                                    <div class="main-slider-two__top">
                                        <div class="main-slider-two__sub-title-shape">
                                            <div class="main-slider-two__sub-title-shape__one"></div>
                                            <div class="main-slider-two__sub-title-shape__two"></div>
                                        </div>
                                        <h5 class="main-slider-two__sub-title">{{ $banner->title }}</h5>
                                    </div>
                                    <h2 class="main-slider-two__title">{{ $banner->short_description }}</h2>
                                    <div class="main-slider-two__text-box">
                                        <p class="main-slider-two__text">{{ $banner->long_description }}</p>
                                    </div>
                                    <div class="main-slider-two__button">
                                        <a href="{{ $banner->url }}" class="easilon-btn">
                                            <span>Apply Now</span>
                                            <span class="easilon-btn__icon">
                                                <i class="icon-double-right-arrow"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="main-slider-two__content__shape-box">
                                        <div class="main-slider-two__content__shape-circle"></div>
                                        <div class="main-slider-two__content__shape-close"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-5">
                                <div class="main-slider-two__image">
                                    <div class="main-slider-two__image__inner">
                                        <img src="{{ asset( $banner->image) }}" alt="slider image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="company-info-one section-space">
        <div class="container">
            <div class="company-info-one__inner">
                <div class="company-info-one__inner__bg"
                     style="background-image: url(assets/images/backgrounds/company-info-bg-1-1.jpg);"></div>
                <!-- /.company-info-one__inner__bg -->
                <div class="row gutter-y-50">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="company-info-one__item">
                            <div class="company-info-one__item__icon">
                                <span class="icon-rush"></span>
                            </div><!-- /.company-info-one__item__icon -->
                            <h4 class="company-info-one__item__title">fast approvals</h4>
                            <!-- /.company-info-one__item__title -->
                        </div><!-- /.company-info-one__item -->
                    </div><!-- /.col-lg-3 col-sm-6 -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="company-info-one__item">
                            <div class="company-info-one__item__icon">
                                <span class="icon-customer"></span>
                            </div><!-- /.company-info-one__item__icon -->
                            <h4 class="company-info-one__item__title">Happy customers</h4>
                            <!-- /.company-info-one__item__title -->
                        </div><!-- /.company-info-one__item -->
                    </div><!-- /.col-lg-3 col-sm-6 -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="company-info-one__item">
                            <div class="company-info-one__item__icon">
                                <span class="icon-no-money"></span>
                            </div><!-- /.company-info-one__item__icon -->
                            <h4 class="company-info-one__item__title">no payment fees</h4>
                            <!-- /.company-info-one__item__title -->
                        </div><!-- /.company-info-one__item -->
                    </div><!-- /.col-lg-3 col-sm-6 -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="company-info-one__item">
                            <div class="company-info-one__item__icon">
                                <span class="icon-payment-method"></span>
                            </div><!-- /.company-info-one__item__icon -->
                            <h4 class="company-info-one__item__title">flexible payments</h4>
                            <!-- /.company-info-one__item__title -->
                        </div><!-- /.company-info-one__item -->
                    </div><!-- /.col-lg-3 col-sm-6 -->
                </div><!-- /.row gutter-y-50 -->
            </div><!-- /.company-info-one__inner -->
        </div><!-- /.container -->
    </section><!-- /.company-info-one section-space -->

    @include('front.partials.about-section', ['about', $about])

    <section class="services-two section-space" id="services">
        <div class="services-two__bg" style="background-image: url(assets/images/shapes/services-bg-2-1.png);">
        </div>
        <!-- /.services-two__bg -->
        <div class="container">
            <div class="services-two__top">
                <div class="row gutter-y-50 align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="sec-title @@extraClassName">
                            <div class="sec-title__top">
                                <div class="sec-title__shape">
                                    <div class="sec-title__shape__one"></div><!-- /.sec-title__shape__one -->
                                    <div class="sec-title__shape__two"></div><!-- /.sec-title__shape__one -->
                                </div><!-- /.sec-title__shape -->
                                <h6 class="sec-title__tagline">what we”re offering</h6><!-- /.sec-title__tagline -->
                            </div><!-- /.sec-title__top -->
                            <h3 class="sec-title__title">We provide best services <br> for your loan</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                    </div><!-- /.col-xl-9 col-lg-8 -->
                    <div class="col-xl-3 col-lg-4">
                        <div class="services-two__button">
                            <a href="#" class="easilon-btn">
                                <span>our service</span>
                                <span class="easilon-btn__icon">
                                        <i class="icon-double-right-arrow"></i>
                                    </span>
                                <span class="easilon-btn__border"></span>
                            </a><!-- /.easilon-btn -->
                        </div><!-- /.services-two__button -->
                    </div><!-- /.col-xl-3 col-lg-4 -->
                </div><!-- /.row gutter-y-50 -->
            </div><!-- /.services-two__top -->
        </div><!-- /.container -->
        <div class="container-fluid">
            <div class="services-two__carousel easilon-owl__carousel easilon-owl__carousel--basic-nav owl-carousel owl-theme"
                 data-owl-options='{
			"items": 1,
			"margin": 10,
			"loop": true,
            "stagePadding": 370,
			"smartSpeed": 700,
			"nav": false,
			"dots": false,
			"navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
			"autoplay": true,
			"responsive": {
				"0": {
					"items": 1,
                    "stagePadding": 0,
					"nav": true,
					"margin": 10
				},
				"576": {
					"items": 1,
                    "stagePadding": 90,
					"margin": 30
				},
				"768": {
					"items": 1,
                    "stagePadding": 190,
					"margin": 30
				},
				"992": {
					"items": 2,
                    "stagePadding": 130,
					"margin": 30
				},
                "1200": {
                    "items": 2,
                    "stagePadding": 240,
                    "margin": 30
                },
                "1400": {
                    "items": 3,
                    "stagePadding": 100,
                    "margin": 30
                },
                "1600": {
                    "items": 3,
                    "stagePadding": 200,
                    "margin": 30
                },
                "1900": {
                    "items": 3,
                    "stagePadding": 370,
                    "margin": 30
                }
			}
		    }'>
                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="service-card">
                        <a href="{{route('loan-details')}}" class="service-card__image">
                            <img src="{{ asset('assets/images/services/service-2-1.jpg')}}" alt="personal loan">
                        </a><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <h3 class="service-card__title"><a href="{{route('loan-details')}}">personal loan</a>
                            </h3><!-- /.service-card__title -->
                            <a href="#" class="service-card__btn easilon-btn">
                                <span class="easilon-btn__icon"><i class="icon-right-arrow"></i></span>
                            </a><!-- /.service-card__btn -->
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.item -->
                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="service-card">
                        <a href="#" class="service-card__image">
                            <img src="{{ asset('assets/images/services/service-2-2.jpg')}}" alt="auto loan">
                        </a><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <h3 class="service-card__title"><a href="{{route('loan-details')}}">Business loan</a></h3>
                            <!-- /.service-card__title -->
                            <a href="{{route('loan-details')}}" class="service-card__btn easilon-btn">
                                <span class="easilon-btn__icon"><i class="icon-right-arrow"></i></span>
                            </a><!-- /.service-card__btn -->
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.item -->
                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="service-card">
                        <a href="#" class="service-card__image">
                            <img src="{{ asset('assets/images/services/service-2-3.jpg')}}" alt="home loan">
                        </a><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <h3 class="service-card__title"><a href="{{route('loan-details')}}">Salary loan</a></h3>
                            <!-- /.service-card__title -->
                            <a href="{{route('loan-details')}}" class="service-card__btn easilon-btn">
                                <span class="easilon-btn__icon"><i class="icon-right-arrow"></i></span>
                            </a><!-- /.service-card__btn -->
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.item -->
                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="service-card">
                        <a href="#" class="service-card__image">
                            <img src="{{ asset('assets/images/services/service-2-4.jpg')}}" alt="study loan">
                        </a><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <h3 class="service-card__title"><a href="{{route('loan-details')}}">Cooperative loan</a></h3>
                            <!-- /.service-card__title -->
                            <a href="{{route('loan-details')}}" class="service-card__btn easilon-btn">
                                <span class="easilon-btn__icon"><i class="icon-right-arrow"></i></span>
                            </a><!-- /.service-card__btn -->
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.item -->
                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="service-card">
                        <a href="#" class="service-card__image">
                            <img src="{{ asset('assets/images/services/service-2-5.jpg')}}" alt="business loan">
                        </a><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <h3 class="service-card__title"><a href="{{route('loan-details')}}">Emergency loan</a>
                            </h3><!-- /.service-card__title -->
                            <a href="{{route('loan-details')}}" class="service-card__btn easilon-btn">
                                <span class="easilon-btn__icon"><i class="icon-right-arrow"></i></span>
                            </a><!-- /.service-card__btn -->
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.item -->
                <div class="item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="service-card">
                        <a href="#" class="service-card__image">
                            <img src="{{ asset('assets/images/services/service-2-6.jpg')}}" alt="bike loan">
                        </a><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <h3 class="service-card__title"><a href="{{route('loan-details')}}">Asset financing</a></h3>
                            <!-- /.service-card__title -->
                            <a href="{{route('loan-details')}}" class="service-card__btn easilon-btn">
                                <span class="easilon-btn__icon"><i class="icon-right-arrow"></i></span>
                            </a><!-- /.service-card__btn -->
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.item -->

            </div><!-- /.services-two__carousel -->
        </div><!-- /.container-fluid -->

        <section class="loan-two loan-two--services section-space-top">
            <div class="container">
                <div class="loan-two__inner"
                     style="background-image: url(assets/images/resources/loan-bg-1-1.jpg);">
                    <div class="loan-two__form">
                        <div class="loan-two__form__bg"
                             style="background-image: url(assets/images/shapes/loan-calculator-form-bg-1-1.png);">
                        </div>
                        <!-- /.loan-two__form__bg -->
                        <form action="#" id="loan-calculator-01" data-form-direction="ltr" data-interest-rate="15"
                              class="loan-calculator-form wow fadeInUp" data-wow-duration="1500ms">
                            <h3 class="loan-calculator-form__title">How Much Do You Need?</h3>
                            <div class="loan-calculator-form__content">
                                <div class="input-box__top">
                                    <span>₦1000</span>
                                    <span>₦50000</span>
                                </div><!-- /.input-box__top -->
                                <div class="input-box">
                                    <div class="range-slider-count" id="loan-calculator-01-count"></div>
                                    <input type="hidden" value="" class="min-count"
                                           id="loan-calculator-01-min-count">
                                    <input type="hidden" value="" class="max-count"
                                           id="loan-calculator-01-max-count">
                                </div><!-- /.input-box -->
                                <div class="input-box__top input-box__top-border">
                                    <span>1 Month</span>
                                    <span>12 Months</span>
                                </div><!-- /.input-box__top -->
                                <div class="input-box">
                                    <div class="range-slider-month" id="loan-calculator-01-month"></div>
                                    <input type="hidden" value="" class="min-month"
                                           id="loan-calculator-01-min-month">
                                    <input type="hidden" value="" class="max-month"
                                           id="loan-calculator-01-max-month">
                                </div><!-- /.input-box -->
                                <p>
                                    <span>Pay Monthly</span>
                                    <b>₦<i class="loan-monthly-pay"></i></b>
                                </p>
                                <p>
                                    <span>Term of Use</span>
                                    <b><i class="loan-month"></i> Months</b>
                                </p>
                                <p>
                                    <span>Total Pay Back amount</span>
                                    <b>₦<i class="loan-total"></i></b>
                                </p>
                                <button type="submit" class="easilon-btn loan-calculator-form__btn">
                                    <span>Apply for loan</span>
                                    <span class="easilon-btn__icon"><i class="icon-right-arrow"></i></span>
                                </button><!-- /.easilon-btn -->
                            </div><!-- /.loan-calculator-form__content -->
                        </form><!-- /.loan-calculator-form -->
                    </div><!-- /.loan-two__form -->
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="loan-two__video video-popup">
                        <span class="icon-play"></span>
                        <i class="loan-two__video__ripple"></i>
                    </a><!-- /.loan-two__video -->
                </div><!-- /.loan-two__inner -->
            </div><!-- /.container -->
            <img src="{{ asset('assets/images/shapes/loan-money-1-1.png')}}" alt="money" class="loan-two__money">
        </section><!-- /.loan-two section-space-top -->
    </section><!-- /.services-two section-space -->

    <section class="why-choose-one section-space">
        <div class="why-choose-one__bg" style="background-image: url(assets/images/shapes/why-choose-bg-1-1.png);">
        </div>
        <!-- /.why-choose-one__bg -->
        <div class="container">
            <div class="row gutter-y-50 align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-one__content">
                        <div class="sec-title @@extraClassName">
                            <div class="sec-title__top">
                                <div class="sec-title__shape">
                                    <div class="sec-title__shape__one"></div><!-- /.sec-title__shape__one -->
                                    <div class="sec-title__shape__two"></div><!-- /.sec-title__shape__one -->
                                </div><!-- /.sec-title__shape -->
                                <h6 class="sec-title__tagline">our benefits</h6><!-- /.sec-title__tagline -->
                            </div><!-- /.sec-title__top -->
                            <h3 class="sec-title__title">why choose us</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <div class="why-choose-one__text-box wow fadeInUp" data-wow-duration="1500ms">
                            <p class="why-choose-one__text">{{$choose->document_name}}</p>
                            <!-- /.why-choose-one__text -->
                        </div><!-- /.why-choose-one__text-box -->
                        <div class="why-choose-one__list">
                            <div class="why-choose-one__list__item wow fadeInUp" data-wow-duration="1500ms"
                                 data-wow-delay="00ms">
                                    <span class="why-choose-one__list__icon">
                                        <i class="icon-low-price"></i>
                                    </span><!-- /.why-choose-one__list__icon -->
                                Competitive rates
                            </div>
                            <div class="why-choose-one__list__item wow fadeInUp" data-wow-duration="1500ms"
                                 data-wow-delay="100ms">
                                    <span class="why-choose-one__list__icon">
                                        <i class="icon-loan-1"></i>
                                    </span><!-- /.why-choose-one__list__icon -->
                                Quick and hassle-free process
                            </div>
                        </div><!-- /.why-choose-one__list -->

                    </div><!-- /.why-choose-one__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms">
                    <div class="why-choose-one__image">
                        <div class="why-choose-one__image__inner">
                            <div class="why-choose-one__image__one">
                                <img src="{{ asset( $choose->image1) }}" alt="why choose image">
                                <img src="assets/images/shapes/why-choose-shape-1-1.png" alt="shape"
                                     class="why-choose-one__image__one__shape">
                            </div><!-- /.why-choose-one__image__one -->
                            <div class="why-choose-one__image__two">
                                <img src="{{ asset( $choose->image2) }}" alt="why choose image">
                            </div><!-- /.why-choose-one__image__two -->
                        </div><!-- /.why-choose-one__image__inner -->
                    </div><!-- /.why-choose-one__image -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row gutter-y-50 -->
        </div><!-- /.container -->
        <img src="assets/images/shapes/why-choose-shape-1-2.png" alt="shape" class="why-choose-one__shape">
    </section><!-- /.why-choose-one section-space -->

    <section class="work-process-one section-space">
        <div class="container">
            <div class="sec-title sec-title--center">
                <div class="sec-title__top">
                    <div class="sec-title__shape">
                        <div class="sec-title__shape__one"></div><!-- /.sec-title__shape__one -->
                        <div class="sec-title__shape__two"></div><!-- /.sec-title__shape__one -->
                    </div><!-- /.sec-title__shape -->
                    <h6 class="sec-title__tagline">how it works</h6><!-- /.sec-title__tagline -->
                    <div class="sec-title__shape">
                        <div class="sec-title__shape__one"></div><!-- /.sec-title__shape__one -->
                        <div class="sec-title__shape__two"></div><!-- /.sec-title__shape__one -->
                    </div><!-- /.sec-title__shape -->
                </div><!-- /.sec-title__top -->
                <h3 class="sec-title__title">our working process</h3><!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row gutter-y-30">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms"
                     data-wow-delay="00ms">
                    <div class="work-process-one__item">
                        <div class="work-process-one__item__image">
                            <img src="assets/images/working-process/working-process-1-1.png" alt="work process">
                            <div class="work-process-one__item__number">step</div>
                            <!-- /.work-process-one__item__number -->
                            <svg class="work-process-one__item__shape" viewBox="0 0 242 67" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M239.497 33.8939L207.961 65.4318H4L35.5698 33.8939L4 2.35596H207.961L239.497 33.8939Z" />
                            </svg><!-- /.work-process-one__item__shape -->
                            <svg class="work-process-one__item__circle" width="136" height="32" viewBox="0 0 136 32"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M67.9555 0.758301C105.486 0.758301 135.894 7.52133 135.894 15.8938C135.894 24.2491 105.469 31.0292 67.9555 31.0292C30.425 31.0292 7.21871e-06 24.2491 7.21871e-06 15.8938C-0.0171143 7.53845 30.425 0.758301 67.9555 0.758301Z" />
                            </svg><!-- /.work-process-one__item__circle -->
                        </div><!-- /.work-process-one__item__image -->
                        <div class="work-process-one__item__content">
                            <h3 class="work-process-one__item__title">Application submit</h3>
                            <!-- /.work-process-one__item__title -->
                            <p class="work-process-one__item__text">In a free hour, when our power o choice is
                                untrammelled and when nothing prevents</p><!-- /.work-process-one__item__text -->
                        </div><!-- /.work-process-one__item__content -->
                    </div><!-- /.work-process-one__item -->
                </div><!-- /.col-xl-3 col-lg-4 col-md-6 -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms"
                     data-wow-delay="100ms">
                    <div class="work-process-one__item work-process-one__item--down">
                        <div class="work-process-one__item__image">
                            <img src="assets/images/working-process/working-process-1-2.png" alt="work process">
                            <div class="work-process-one__item__number">step</div>
                            <!-- /.work-process-one__item__number -->
                            <svg class="work-process-one__item__shape" viewBox="0 0 242 67" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M239.497 33.8939L207.961 65.4318H4L35.5698 33.8939L4 2.35596H207.961L239.497 33.8939Z" />
                            </svg><!-- /.work-process-one__item__shape -->
                            <svg class="work-process-one__item__circle" width="136" height="32" viewBox="0 0 136 32"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M67.9555 0.758301C105.486 0.758301 135.894 7.52133 135.894 15.8938C135.894 24.2491 105.469 31.0292 67.9555 31.0292C30.425 31.0292 7.21871e-06 24.2491 7.21871e-06 15.8938C-0.0171143 7.53845 30.425 0.758301 67.9555 0.758301Z" />
                            </svg><!-- /.work-process-one__item__circle -->
                        </div><!-- /.work-process-one__item__image -->
                        <div class="work-process-one__item__content">
                            <h3 class="work-process-one__item__title">Review & Verification</h3>
                            <!-- /.work-process-one__item__title -->
                            <p class="work-process-one__item__text">Back to the drawing-board show grit, for we
                                should have a meeting to discuss the details</p>
                            <!-- /.work-process-one__item__text -->
                        </div><!-- /.work-process-one__item__content -->
                    </div><!-- /.work-process-one__item -->
                </div><!-- /.col-xl-3 col-lg-4 col-md-6 -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms"
                     data-wow-delay="200ms">
                    <div class="work-process-one__item">
                        <div class="work-process-one__item__image">
                            <img src="assets/images/working-process/working-process-1-3.png" alt="work process">
                            <div class="work-process-one__item__number">step</div>
                            <!-- /.work-process-one__item__number -->
                            <svg class="work-process-one__item__shape" viewBox="0 0 242 67" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M239.497 33.8939L207.961 65.4318H4L35.5698 33.8939L4 2.35596H207.961L239.497 33.8939Z" />
                            </svg><!-- /.work-process-one__item__shape -->
                            <svg class="work-process-one__item__circle" width="136" height="32" viewBox="0 0 136 32"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M67.9555 0.758301C105.486 0.758301 135.894 7.52133 135.894 15.8938C135.894 24.2491 105.469 31.0292 67.9555 31.0292C30.425 31.0292 7.21871e-06 24.2491 7.21871e-06 15.8938C-0.0171143 7.53845 30.425 0.758301 67.9555 0.758301Z" />
                            </svg><!-- /.work-process-one__item__circle -->
                        </div><!-- /.work-process-one__item__image -->
                        <div class="work-process-one__item__content">
                            <h3 class="work-process-one__item__title">Loan Approval</h3>
                            <!-- /.work-process-one__item__title -->
                            <p class="work-process-one__item__text">Hit the ground running do i have consent to
                                record this meeting quick sync helicopter view</p>
                            <!-- /.work-process-one__item__text -->
                        </div><!-- /.work-process-one__item__content -->
                    </div><!-- /.work-process-one__item -->
                </div><!-- /.col-xl-3 col-lg-4 col-md-6 -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms"
                     data-wow-delay="300ms">
                    <div class="work-process-one__item work-process-one__item--down">
                        <div class="work-process-one__item__image">
                            <img src="assets/images/working-process/working-process-1-4.png" alt="work process">
                            <div class="work-process-one__item__number">step</div>
                            <!-- /.work-process-one__item__number -->
                            <svg class="work-process-one__item__shape" viewBox="0 0 242 67" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M239.497 33.8939L207.961 65.4318H4L35.5698 33.8939L4 2.35596H207.961L239.497 33.8939Z" />
                            </svg><!-- /.work-process-one__item__shape -->
                            <svg class="work-process-one__item__circle" width="136" height="32" viewBox="0 0 136 32"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M67.9555 0.758301C105.486 0.758301 135.894 7.52133 135.894 15.8938C135.894 24.2491 105.469 31.0292 67.9555 31.0292C30.425 31.0292 7.21871e-06 24.2491 7.21871e-06 15.8938C-0.0171143 7.53845 30.425 0.758301 67.9555 0.758301Z" />
                            </svg><!-- /.work-process-one__item__circle -->
                        </div><!-- /.work-process-one__item__image -->
                        <div class="work-process-one__item__content">
                            <h3 class="work-process-one__item__title">Loan disbursement</h3>
                            <!-- /.work-process-one__item__title -->
                            <p class="work-process-one__item__text">Radical candor upsell this is a no-brainer no
                                need to talk to users, just base it on the</p>
                            <!-- /.work-process-one__item__text -->
                        </div><!-- /.work-process-one__item__content -->
                    </div><!-- /.work-process-one__item -->
                </div><!-- /.col-xl-3 col-lg-4 col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.work-process-one section-space -->

    <section class="funfact-one">
        <div class="funfact-one__bg" style="background-image: url(assets/images/shapes/funfact-bg-1-1.jpg);"></div>
        <!-- /.funfact-one__bg -->
        <div class="container">
            <div class="row gutter-y-40">
                <div class="funfact-one__col col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms"
                     data-wow-delay="00ms">
                    <div class="funfact-one__item">
                        <h3 class="funfact-one__item__number count-box">
                            <span class="count-text" data-stop="8.5" data-speed="1500"></span>
                            <span>k</span>
                        </h3>
                        <h4 class="funfact-one__item__title">Happy Customers</h4><!-- /.funfact-one__item__title -->
                    </div><!-- /.funfact-one__item -->
                </div><!-- /.col-lg-3 col-sm-6 -->
                <div class="funfact-one__col col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms"
                     data-wow-delay="100ms">
                    <div class="funfact-one__item">
                        <h3 class="funfact-one__item__number count-box">
                            <span>₦</span>
                            <span class="count-text" data-stop="95" data-speed="4500"></span>
                            <span>M</span>
                        </h3>
                        <h4 class="funfact-one__item__title">Daily Payments</h4><!-- /.funfact-one__item__title -->
                    </div><!-- /.funfact-one__item -->
                </div><!-- /.col-lg-3 col-sm-6 -->
                <div class="funfact-one__col col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms"
                     data-wow-delay="200ms">
                    <div class="funfact-one__item">
                        <h3 class="funfact-one__item__number count-box">
                            <span class="count-text" data-stop="99" data-speed="1500"></span>
                            <span>%</span>
                        </h3>
                        <h4 class="funfact-one__item__title">We Approve Loans</h4>
                        <!-- /.funfact-one__item__title -->
                    </div><!-- /.funfact-one__item -->
                </div><!-- /.col-lg-3 col-sm-6 -->
                <div class="funfact-one__col col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms"
                     data-wow-delay="300ms">
                    <div class="funfact-one__item">
                        <h3 class="funfact-one__item__number count-box">
                            <span class="count-text" data-stop="550" data-speed="1500"></span>
                        </h3>
                        <h4 class="funfact-one__item__title">staff members</h4><!-- /.funfact-one__item__title -->
                    </div><!-- /.funfact-one__item -->
                </div><!-- /.col-lg-3 col-sm-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.funfact-one -->

    <section class="loan-reasons-one section-space">
        <div class="container">
            <div class="loan-reasons-one__row row gutter-y-30">
                <div class="col-xl-8 col-lg-7 col-md-6 wow fadeInLeft" data-wow-duration="1500ms">
                    <div class="loan-reasons-one__image"
                         style="background-image: url({{ $reason->image }});"></div>
                    <!-- /.loan-reasons-one__image -->
                </div><!-- /.col-xl-8 col-lg-7 col-md-6 -->
                <div class="col-xl-4 col-lg-5 col-md-6 wow fadeInRight" data-wow-duration="1500ms">
                    <div class="loan-reasons-one__content">
                        <div class="loan-reasons-one__content__bg"
                             style="background-image: url(assets/images/shapes/loan-reasons-title-bg-1-1.png);">
                        </div>
                        <!-- /.loan-reasons-one__content__bg -->
                        <div class="loan-reasons-one__content__inner">
                            <div class="sec-title @@extraClassName">
                                <div class="sec-title__top">
                                    <div class="sec-title__shape">
                                        <div class="sec-title__shape__one"></div><!-- /.sec-title__shape__one -->
                                        <div class="sec-title__shape__two"></div><!-- /.sec-title__shape__one -->
                                    </div><!-- /.sec-title__shape -->
                                    <h6 class="sec-title__tagline">loan reasons</h6><!-- /.sec-title__tagline -->
                                </div><!-- /.sec-title__top -->
                                <h3 class="sec-title__title">{{$reason->title}}</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <a href="" class="loan-reasons-one__content__btn">
                                <span class="loan-reasons-one__content__btn__icon"><i class="icon-next"></i></span>
                            </a><!-- /.loan-reasons-one__content__btn -->
                        </div><!-- /.loan-reasons-one__content__inner -->
                        <div class="loan-reasons-one__content__box">
                            <img src="assets/images/shapes/loan-reasons-money-1-1.png" alt="money">
                        </div><!-- /.loan-reasons-one__content__box -->
                    </div><!-- /.loan-reasons-one__content -->
                </div><!-- /.col-xl-4 col-lg-5 col-md-6 -->
            </div><!-- /.row gutter-y-30 -->
            <div class="row gutter-y-30">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="loan-reasons-one__card">
                        <div class="loan-reasons-one__card__bg"
                             style="background-image: url(assets/images/shapes/loan-reasons-card-bg-1-1.png);"></div>
                        <!-- /.loan-reasons-one__card__bg -->
                        <div class="loan-reasons-one__card__content">
                            <h3 class="loan-reasons-one__card__title">Need a new car?</h3>
                            <!-- /.loan-reasons-one__card__title -->
                            <p class="loan-reasons-one__card__text">{{$reason->description1}}</p><!-- /.loan-reasons-one__card__text -->
                        </div><!-- /.loan-reasons-one__card__content -->
                    </div><!-- /.loan-reasons-one__card -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="loan-reasons-one__card">
                        <div class="loan-reasons-one__card__bg"
                             style="background-image: url(assets/images/shapes/loan-reasons-card-bg-1-1.png);"></div>
                        <!-- /.loan-reasons-one__card__bg -->
                        <div class="loan-reasons-one__card__content">
                            <h3 class="loan-reasons-one__card__title">Consolidate your debt</h3>
                            <!-- /.loan-reasons-one__card__title -->
                            <p class="loan-reasons-one__card__text">{{$reason->description2}}</p><!-- /.loan-reasons-one__card__text -->
                        </div><!-- /.loan-reasons-one__card__content -->
                    </div><!-- /.loan-reasons-one__card -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="loan-reasons-one__card">
                        <div class="loan-reasons-one__card__bg"
                             style="background-image: url(assets/images/shapes/loan-reasons-card-bg-1-1.png);"></div>
                        <!-- /.loan-reasons-one__card__bg -->
                        <div class="loan-reasons-one__card__content">
                            <h3 class="loan-reasons-one__card__title">Home improvement</h3>
                            <!-- /.loan-reasons-one__card__title -->
                            <p class="loan-reasons-one__card__text">{{$reason->description3}}</p><!-- /.loan-reasons-one__card__text -->
                        </div><!-- /.loan-reasons-one__card__content -->
                    </div><!-- /.loan-reasons-one__card -->
                </div><!-- /.col-lg-4 col-md-6 -->
            </div><!-- /.row gutter-y-30 -->
        </div><!-- /.container -->
    </section><!-- /.loan-reasons-one section-space -->

    <section class="download-app-one" id="download-app">
        <div class="download-app-one__bg"
             style="background-image: url(assets/images/shapes/download-app-bg-1-1.png);"></div>
        <!-- /.download-app-one__bg -->
        <div class="container section-space">
            <div class="row gutter-y-50">
                <div class="col-lg-6">
                    <div class="download-app-one__image wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="assets/images/resources/download-app-mockup-1-1.png" alt="app mockup">
                        <div class="download-app-one__image__shape"></div><!-- /.download-app-one__image__shape -->
                    </div><!-- /.download-app-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="download-app-one__content">
                        <div class="sec-title @@extraClassName">
                            <div class="sec-title__top">
                                <div class="sec-title__shape">
                                    <div class="sec-title__shape__one"></div><!-- /.sec-title__shape__one -->
                                    <div class="sec-title__shape__two"></div><!-- /.sec-title__shape__one -->
                                </div><!-- /.sec-title__shape -->
                                <h6 class="sec-title__tagline">Resolution Finance Limited</h6><!-- /.sec-title__tagline -->
                            </div><!-- /.sec-title__top -->
                            <h3 class="sec-title__title">start your loan <br> application with smartly</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <div class="download-app-one__text-box wow fadeInUp" data-wow-duration="1500ms">
                            <p class="download-app-one__text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum</p>
                            <!-- /.download-app-one__text -->
                        </div><!-- /.download-app-one__text-box -->
                        <ul class="download-app-one__list list-unstyled wow fadeInUp" data-wow-duration="1500ms">
                            <li>
                                    <span class="download-app-one__list__icon">
                                        <i class="icon-check-mark"></i>
                                    </span><!-- /.download-app-one__list__icon -->
                                quick loan process
                            </li>
                            <li>
                                    <span class="download-app-one__list__icon">
                                        <i class="icon-check-mark"></i>
                                    </span><!-- /.download-app-one__list__icon -->
                                very low rates
                            </li>
                        </ul><!-- /.download-app-one__list list-unstyled -->

                        <div class="download-app-one__button">
                            <a href="{{ route('apply')  }}" class="easilon-btn">
                                <span>Apply Now</span>
                                <span class="easilon-btn__icon">
                                                <i class="icon-double-right-arrow"></i>
                                            </span>
                            </a>
                        </div>
                    </div><!-- /.download-app-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row gutter-y-50 -->
        </div><!-- /.container section-space -->
        <img src="assets/images/shapes/download-app-border-1-1.png" alt="border" class="download-app-one__border">
        <div class="download-app-one__shape"></div><!-- /.download-app-one__shape -->
    </section><!-- /.download-app-one -->

    <section class="testimonials-two @@extraClassName" id="testimonials">
        <div class="container">
            <div class="row gutter-y-50 align-items-center">
                <div class="col-xl-6">
                    <div class="testimonials-two__content">
                        <div class="sec-title @@extraClassName">
                            <div class="sec-title__top">
                                <div class="sec-title__shape">
                                    <div class="sec-title__shape__one"></div><!-- /.sec-title__shape__one -->
                                    <div class="sec-title__shape__two"></div><!-- /.sec-title__shape__one -->
                                </div><!-- /.sec-title__shape -->
                                <h6 class="sec-title__tagline">our testimonials</h6><!-- /.sec-title__tagline -->
                            </div><!-- /.sec-title__top -->
                            <h3 class="sec-title__title">peoples talk about <br> easilon service</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <div class="testimonials-two__custome-navs"></div><!-- /.testimonials-two__custome-navs -->
                    </div><!-- /.testimonials-two__content -->
                </div><!-- /.col-xl-6 -->
                <div class="col-xl-6">
                    <div class="easilon-stretch-element-inside-column">
                        <div class="testimonials-two__carousel easilon-owl__carousel owl-theme owl-carousel"
                             data-owl-options='{
                        "items": 1,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "stagePadding": 186,
                        "nav":true,
                        "navContainer": ".testimonials-two__custome-navs",
                        "dots":false,
                        "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items": 1,
                                "stagePadding": 0
                            },
                            "768":{
                                "items": 1,
                                "stagePadding": 100
                            },
                            "992":{
                                "items": 1,
                                "stagePadding": 186
                            },
                            "1200":{
                                "items": 1,
                                "stagePadding": 40
                            },
                            "1350":{
                                "items": 1,
                                "stagePadding": 60
                            },
                            "1400":{
                                "items": 1,
                                "stagePadding": 90
                            },
                            "1600":{
                                "items": 1,
                                "stagePadding": 130
                            },
                            "1800":{
                                "items": 1,
                                "stagePadding": 168
                            }
                        }
                        }'>
                            <div class="item">
                                <div class="testimonial-card-two @@extraClassName">
                                    <div class="testimonial-card-two__inner">
                                        <div class="testimonial-card-two__top">
                                            <div class="testimonial-card-two__image">
                                                <img src="assets/images/testimonials/testimonial-2-1.jpg"
                                                     alt="Michael G. Ware">
                                            </div><!-- /.testimonial-card-two__image -->
                                            <svg class="testimonial-card-two__icon" viewBox="0 0 56 41" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 25.4448H11.1378L3.71254 40.2951H14.8503L22.2756 25.4448V3.16919H0V25.4448Z" />
                                                <path
                                                    d="M29.7004 3.16919V25.4448H40.8382L33.413 40.2951H44.5508L51.976 25.4448V3.16919H29.7004Z" />
                                                <path
                                                    d="M14.307 21.7756H3.66919V0.5H24.9448V22.1576L17.7105 36.6259H7.69075L14.7542 22.4992L15.116 21.7756H14.307Z" />
                                                <path
                                                    d="M44.0082 21.7756H33.3704V0.5H54.646V22.1576L47.4117 36.6259H37.3919L44.4554 22.4992L44.8172 21.7756H44.0082Z" />
                                            </svg><!-- /.testimonial-card-two__icon -->
                                        </div><!-- /.testimonial-card-two__top -->
                                        <p class="testimonial-card-two__quote">I recently worked with
                                            <span>easilon</span> for my home renovation project, and I couldn't be
                                            happier with the results. From the moment I walked into</p>
                                        <!-- /.testimonial-card-two__quote -->
                                        <div class="testimonial-card-two__bottom">
                                            <div class="testimonial-card-two__identity">
                                                <h4 class="testimonial-card-two__name">Michael G. Ware</h4>
                                                <!-- /.testimonial-card-two__name -->
                                                <p class="testimonial-card-two__designation">managing director</p>
                                                <!-- /.testimonial-card-two__designation -->
                                            </div><!-- /.testimonial-card-two__identity -->
                                            <div class="easilon-ratings">
                                                    <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                                <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                                <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                                <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                                <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                            </div><!-- /.product-ratings -->
                                        </div><!-- /.testimonial-card-two__bottom -->
                                    </div><!-- /.testimonial-card-two__inner -->
                                </div><!-- /.testimonial-card-two -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="testimonial-card-two @@extraClassName">
                                    <div class="testimonial-card-two__inner">
                                        <div class="testimonial-card-two__top">
                                            <div class="testimonial-card-two__image">
                                                <img src="assets/images/testimonials/testimonial-2-2.jpg"
                                                     alt="Mike Hardson">
                                            </div><!-- /.testimonial-card-two__image -->
                                            <svg class="testimonial-card-two__icon" viewBox="0 0 56 41" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 25.4448H11.1378L3.71254 40.2951H14.8503L22.2756 25.4448V3.16919H0V25.4448Z" />
                                                <path
                                                    d="M29.7004 3.16919V25.4448H40.8382L33.413 40.2951H44.5508L51.976 25.4448V3.16919H29.7004Z" />
                                                <path
                                                    d="M14.307 21.7756H3.66919V0.5H24.9448V22.1576L17.7105 36.6259H7.69075L14.7542 22.4992L15.116 21.7756H14.307Z" />
                                                <path
                                                    d="M44.0082 21.7756H33.3704V0.5H54.646V22.1576L47.4117 36.6259H37.3919L44.4554 22.4992L44.8172 21.7756H44.0082Z" />
                                            </svg><!-- /.testimonial-card-two__icon -->
                                        </div><!-- /.testimonial-card-two__top -->
                                        <p class="testimonial-card-two__quote">Deploy encourage & support business
                                            growth. Everyone thinks the soup tastes better after pissed in it in an
                                            ideal world, and we need</p><!-- /.testimonial-card-two__quote -->
                                        <div class="testimonial-card-two__bottom">
                                            <div class="testimonial-card-two__identity">
                                                <h4 class="testimonial-card-two__name">Mike Hardson</h4>
                                                <!-- /.testimonial-card-two__name -->
                                                <p class="testimonial-card-two__designation">managing director</p>
                                                <!-- /.testimonial-card-two__designation -->
                                            </div><!-- /.testimonial-card-two__identity -->
                                            <div class="easilon-ratings">
                                                    <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                                <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                                <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                                <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                                <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                            </div><!-- /.product-ratings -->
                                        </div><!-- /.testimonial-card-two__bottom -->
                                    </div><!-- /.testimonial-card-two__inner -->
                                </div><!-- /.testimonial-card-two -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="testimonial-card-two @@extraClassName">
                                    <div class="testimonial-card-two__inner">
                                        <div class="testimonial-card-two__top">
                                            <div class="testimonial-card-two__image">
                                                <img src="assets/images/testimonials/testimonial-2-3.jpg"
                                                     alt="Judith White">
                                            </div><!-- /.testimonial-card-two__image -->
                                            <svg class="testimonial-card-two__icon" viewBox="0 0 56 41" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0 25.4448H11.1378L3.71254 40.2951H14.8503L22.2756 25.4448V3.16919H0V25.4448Z" />
                                                <path
                                                    d="M29.7004 3.16919V25.4448H40.8382L33.413 40.2951H44.5508L51.976 25.4448V3.16919H29.7004Z" />
                                                <path
                                                    d="M14.307 21.7756H3.66919V0.5H24.9448V22.1576L17.7105 36.6259H7.69075L14.7542 22.4992L15.116 21.7756H14.307Z" />
                                                <path
                                                    d="M44.0082 21.7756H33.3704V0.5H54.646V22.1576L47.4117 36.6259H37.3919L44.4554 22.4992L44.8172 21.7756H44.0082Z" />
                                            </svg><!-- /.testimonial-card-two__icon -->
                                        </div><!-- /.testimonial-card-two__top -->
                                        <p class="testimonial-card-two__quote">Churning anomalies we don't want to
                                            boil the ocean hit the ground running, and corporate synergy, and can
                                            you put it into a banner</p><!-- /.testimonial-card-two__quote -->
                                        <div class="testimonial-card-two__bottom">
                                            <div class="testimonial-card-two__identity">
                                                <h4 class="testimonial-card-two__name">Judith White</h4>
                                                <!-- /.testimonial-card-two__name -->
                                                <p class="testimonial-card-two__designation">managing director</p>
                                                <!-- /.testimonial-card-two__designation -->
                                            </div><!-- /.testimonial-card-two__identity -->
                                            <div class="easilon-ratings">
                                                    <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                                <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                                <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                                <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                                <span class="easilon-ratings__icon">
                                                        <i class="fa fa-star"></i>
                                                    </span><!-- /.easilon-ratings__icon -->
                                            </div><!-- /.product-ratings -->
                                        </div><!-- /.testimonial-card-two__bottom -->
                                    </div><!-- /.testimonial-card-two__inner -->
                                </div><!-- /.testimonial-card-two -->
                            </div><!-- /.item -->
                        </div><!-- /.testimonials-two__carousel -->
                    </div><!-- /.easilon-stretch-element-inside-column -->
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row gutter-y-50 -->
        </div><!-- /.container -->
    </section><!-- /.testimonials-two -->

    <section class="quick-loan-one">
        <div class="container">
            <div class="quick-loan-one__inner wow fadeInUp" data-wow-duration="1500ms">
                <div class="quick-loan-one__bg">
                    <div class="quick-loan-one__bg__inner"
                         style="background-image: url(assets/images/resources/quick-loan-1-1-.jpg);"></div>
                    <!-- /.quick-loan-one__bg__inner -->
                </div><!-- /.quick-loan-one__bg -->
                <div class="quick-loan-one__content">
                    <div class="sec-title @@extraClassName">
                        <div class="sec-title__top">
                            <div class="sec-title__shape">
                                <div class="sec-title__shape__one"></div><!-- /.sec-title__shape__one -->
                                <div class="sec-title__shape__two"></div><!-- /.sec-title__shape__one -->
                            </div><!-- /.sec-title__shape -->
                            <h6 class="sec-title__tagline">get a quick loan</h6><!-- /.sec-title__tagline -->
                        </div><!-- /.sec-title__top -->
                        <h3 class="sec-title__title">Get a Business Loans Quickly</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <a href="#" class="easilon-btn easilon-btn--white">
                        <span>Apply for loan</span>
                        <span class="easilon-btn__icon">
                                <i class="icon-double-right-arrow"></i>
                            </span>
                    </a><!-- /.easilon-btn -->
                    <img src="assets/images/shapes/quick-loan-money-1-1.png" alt="money"
                         class="quick-loan-one__money">
                </div><!-- /.quick-loan-one__content -->
            </div><!-- /.quick-loan-one__inner -->
        </div><!-- /.container -->
    </section><!-- /.quick-loan-one -->
@endsection
