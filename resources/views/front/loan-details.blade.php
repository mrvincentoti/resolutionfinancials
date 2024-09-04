@extends('layouts.main')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container" style="margin-top: 110px;">
            <div class="page-header__content">
                <h2 class="page-header__title">Loan Details</h2>
                <ul class="easilon-breadcrumb list-unstyled">
                    <li><a href="{{route('webhome')}}">Home</a></li>
                    <li><span>our services</span></li>
                    <li><span>personal loan</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.page-header__content -->
        </div><!-- /.container -->
        <div class="page-header__border-box">
            <div class="page-header__border page-header__border--1"></div><!-- /.page-header__border -->
            <div class="page-header__border page-header__border--2"></div><!-- /.page-header__border -->
            <div class="page-header__border page-header__border--3"></div><!-- /.page-header__border -->
            <div class="page-header__border page-header__border--4"></div><!-- /.page-header__border -->
            <div class="page-header__border page-header__border--5"></div><!-- /.page-header__border -->
        </div><!-- /.page-header__border-box -->
    </section><!-- /.page-header -->

    <section class="service-details section-space">
        <div class="container">
            <div class="row gutter-y-50">
                <div class="col-md-12 col-lg-4">
                    <div class="service-sidebar">
                        <div class="service-sidebar__info service-sidebar__single wow fadeInLeft" data-wow-duration="1500ms">
                            <ul class="list-unstyled service-sidebar__nav">
                                <li><a href="{{route('loan-details')}}">home loan <span class="service-sidebar__nav__icon"><i class="icon-double-right-arrow"></i></span></a></li>
                                <li><a href="{{route('loan-details')}}">auto loan <span class="service-sidebar__nav__icon"><i class="icon-double-right-arrow"></i></span></a></li>
                                <li><a href="{{route('loan-details')}}">personal loan <span class="service-sidebar__nav__icon"><i class="icon-double-right-arrow"></i></span></a></li>
                                <li><a href="{{route('loan-details')}}">business loan <span class="service-sidebar__nav__icon"><i class="icon-double-right-arrow"></i></span></a></li>
                                <li><a href="{{route('loan-details')}}">study loan <span class="service-sidebar__nav__icon"><i class="icon-double-right-arrow"></i></span></a></li>
                                <li><a href="{{route('loan-details')}}">bike loan <span class="service-sidebar__nav__icon"><i class="icon-double-right-arrow"></i></span></a></li>
                                <li><a href="{{route('loan-details')}}">property loan <span class="service-sidebar__nav__icon"><i class="icon-double-right-arrow"></i></span></a></li>
                            </ul><!-- /.list-unstyled service-sidebar__nav -->
                        </div><!-- /.service-sidebar__info service-sidebar__single -->
                        <div class="service-sidebar__single">
                            <div class="service-sidebar__contact wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms" style="background-image: url('assets/images/services/service-sidebar-contact-bg.jpg');">
                                <div class="service-sidebar__contact__bg">
                                    <div class="service-sidebar__contact__bg__inner" style="background-image: url('assets/images/shapes/service-sidebar-contact-bg-2.png');"></div><!-- /.service-sidebar__contact__bg__inner -->
                                </div><!-- /.service-sidebar__contact__bg -->
                                <div class="service-sidebar__contact__inner">
                                    <div class="service-sidebar__contact__icon">
                                        <i class="icon-telephone"></i>
                                    </div><!-- /.service-sidebar__contact__icon -->
                                    <div class="service-sidebar__contact__content">
                                        <h4 class="service-sidebar__contact__time">MON-SAT 8:00-9:00</h4><!-- /.service-sidebar__contact__time -->
                                        <h4 class="service-sidebar__contact__number">
                                            <a href="tel:+915698036420">+91 569 803 6420</a>
                                        </h4><!-- /.service-sidebar__contact__number -->
                                    </div><!-- /.service-sidebar__contact__content -->
                                </div><!-- /.service-sidebar__contact__inner -->
                            </div><!-- /.service-sidebar__contact -->
                        </div><!-- /.service-sidebar__single -->
                        <div class="service-sidebar__single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="service-sidebar__appointment">
                                <h3 class="service-sidebar__appointment__title">book an appointment</h3><!-- /.service-sidebar__appointment__title -->
                                <form action="inc/sendemail.php" class="service-sidebar__appointment__form form-one contact-form-validated">
                                    <div class="form-one__group">
                                        <div class="form-one__control form-one__control--full">
                                            <input type="text" name="name" placeholder="Name">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <input type="email" name="email" placeholder="Email Address">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <input type="tel" name="phone-no" placeholder="Phone No">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <button type="submit" class="service-sidebar__appointment__form__btn easilon-btn">
                                                <span>submit now</span>
                                                <span class="easilon-btn__icon">
                                                        <i class="icon-double-right-arrow"></i>
                                                    </span>
                                            </button><!-- /.service-sidebar__appointment__form__btn easilon-btn -->
                                        </div><!-- /.form-one__control -->
                                    </div><!-- /.form-one__group -->
                                </form><!-- /.service-sidebar__appointment__form -->
                            </div><!-- /.service-sidebar__company -->
                        </div><!-- /.service-sidebar__single -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-8">
                    <div class="service-details__content">
                        <div class="service-details__inner">
                            <div class="service-details__thumbnail wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <img src="assets/images/services/service-d-1-3.jpg" alt="personal loan">
                            </div><!-- /.service-details__thumbnail -->
                            <h3 class="service-details__title">personal loan</h3><!-- /.service-details__title -->
                            <p class="service-details__text wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">There are many
                                variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour, or randomised words which don't look even slightly believable. If you are going to use a
                                passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this
                                the first true generator on the Internet. It uses a dictionary of over 200 Latin words,</p>
                            <!-- /.service-details__text -->
                        </div><!-- /.service-details__inner -->
                        <div class="service-details__inner-two">
                            <h3 class="service-details__title service-details__inner-two__title">Where can I get some?</h3>
                            <!-- /.service-details__title -->
                            <p class="service-details__text wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">mistaken idea of
                                denouncing pleasure and praising pain was born and I will give you a complete account of the system, and
                                expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No
                                one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                                how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
                            <!-- /.service-details__text -->
                        </div><!-- /.service-details__inner-two -->
                        <div class="service-details__info wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <ul class="list-unstyled service-details__list">
                                <li>
                                    <span class="service-details__list__icon"><i class="icon-check"></i></span>
                                    Instant Business Growth
                                </li>
                                <li>
                                    <span class="service-details__list__icon"><i class="icon-check"></i></span>
                                    24/7 Quality Service
                                </li>
                                <li>
                                    <span class="service-details__list__icon"><i class="icon-check"></i></span>
                                    Easy Customer Service
                                </li>
                                <li>
                                    <span class="service-details__list__icon"><i class="icon-check"></i></span>
                                    Quality Cost Service
                                </li>
                            </ul><!-- /.list-unstyled team-details__list -->
                            <img src="assets/images/services/service-d-list-1.jpg" alt="service-d-list" class="service-details__info__image">
                        </div><!-- /.service-details__info -->
                        <p class="service-details__text-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">Continually myocardinate holistic mindshare with client-based web services. Assertively e-enable catalysts for change before tested markets. Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently predominate revolutionary quality vectors through future-proof manufactured products. Enthusiastically transform</p><!-- /.service-details__text-two -->
                        <div class="service-details__faq">
                            <h3 class="service-details__faq__title service-details__title">Where can I get some?</h3>
                            <!-- /.service-details__title -->
                            <div class="faq-accordion easilon-accordion" data-grp-name="easilon-accordion">
                                <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <div class="accordion-title">
                                        <h4>
                                            What services does your construction company offer?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordion-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generatio</p>
                                        </div><!-- /.inner -->
                                    </div><!-- /.accordion-content -->
                                </div><!-- /.accordion-item -->
                                <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                    <div class="accordion-title">
                                        <h4>
                                            How do I request a quote for my construction project?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordion-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Prior to joining company, she spent 20+ years at Inmosys, where he held a wide range of global leadership roles, from services to products, and across operations and sales. Most recently, he was SVP & Global Head of the Manufacturing busines.</p>
                                        </div><!-- /.inner -->
                                    </div><!-- /.accordion-content -->
                                </div><!-- /.accordion-item -->
                                <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                    <div class="accordion-title">
                                        <h4>
                                            What is the timeline for a construction project?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordion-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>You can find him dining late at night with the chefs of the hotels where he stays during his travels across operations and sales. Most recently, he was SVP & Global.</p>
                                        </div><!-- /.inner -->
                                    </div><!-- /.accordion-content -->
                                </div><!-- /.accordion-item -->
                            </div><!-- /.faq-accordion -->
                        </div><!-- /.service-details__faq -->
                    </div><!-- /.service-details__content -->
                </div><!-- /.col-md-12 col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-details section-space -->

    <section class="loan-two loan-two--service-details section-space">
        <div class="container">
            <div class="loan-two__inner" style="background-image: url(assets/images/resources/loan-bg-2-1.jpg);">
                <div class="loan-two__form">
                    <div class="loan-two__form__bg" style="background-image: url(assets/images/shapes/loan-calculator-form-bg-1-1.png);"></div>
                    <!-- /.loan-two__form__bg -->
                    <form action="#" id="loan-calculator-01" data-form-direction="ltr" data-interest-rate="15" class="loan-calculator-form wow fadeInUp" data-wow-duration="1500ms">
                        <h3 class="loan-calculator-form__title">How Much Do You Need?</h3>
                        <div class="loan-calculator-form__content">
                            <div class="input-box__top">
                                <span>$1000</span>
                                <span>$50000</span>
                            </div><!-- /.input-box__top -->
                            <div class="input-box">
                                <div class="range-slider-count" id="loan-calculator-01-count"></div>
                                <input type="hidden" value="" class="min-count" id="loan-calculator-01-min-count">
                                <input type="hidden" value="" class="max-count" id="loan-calculator-01-max-count">
                            </div><!-- /.input-box -->
                            <div class="input-box__top input-box__top-border">
                                <span>1 Month</span>
                                <span>12 Months</span>
                            </div><!-- /.input-box__top -->
                            <div class="input-box">
                                <div class="range-slider-month" id="loan-calculator-01-month"></div>
                                <input type="hidden" value="" class="min-month" id="loan-calculator-01-min-month">
                                <input type="hidden" value="" class="max-month" id="loan-calculator-01-max-month">
                            </div><!-- /.input-box -->
                            <p>
                                <span>Pay Monthly</span>
                                <b>$<i class="loan-monthly-pay"></i></b>
                            </p>
                            <p>
                                <span>Term of Use</span>
                                <b><i class="loan-month"></i> Months</b>
                            </p>
                            <p>
                                <span>Total Pay Back amount</span>
                                <b>$<i class="loan-total"></i></b>
                            </p>
                            <button type="submit" class="easilon-btn loan-calculator-form__btn">
                                <span>Apply for loan</span>
                                <span class="easilon-btn__icon"><i class="icon-right-arrow"></i></span>
                            </button><!-- /.easilon-btn -->
                        </div><!-- /.loan-calculator-form__content -->
                    </form><!-- /.loan-calculator-form -->
                </div><!-- /.loan-two__form -->
                <img src="assets/images/shapes/loan-money-2-1.png" alt="money" class="loan-two__money">
            </div><!-- /.loan-two__inner -->
        </div><!-- /.container -->
    </section><!-- /.loan-two section-space -->

@endsection
