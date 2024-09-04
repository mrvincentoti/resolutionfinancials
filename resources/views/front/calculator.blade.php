@extends('layouts.main')
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container" style="margin-top: 120px;">
            <div class="page-header__content">
                <h2 class="page-header__title">Loan Eligibility</h2>
                <ul class="easilon-breadcrumb list-unstyled">
                    <li><a href="{{route('webhome')}}">Home</a></li>
                    <li><span>Loan Eligibility</span></li>
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

    <section class="loan-eligibility section-space">
        <div class="container">
            <form action="#" class="loan-eligibility__form">
                <div class="row gutter-y-40">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="loan-eligibility__form__left">
                            <h3 class="loan-eligibility__form__title">Loan Amount</h3>
                            <!-- /.loan-eligibility__form__title -->
                            <div class="loan-eligibility__form__inner">
                                <div class="loan-eligibility__single">
                                    <div class="loan-eligibility__single__top">
                                        <span class="loan-eligibility__single__title">Loan Amount</span>
                                        <span class="loan-eligibility__single__count">&#8358;90000</span>
                                    </div><!-- /.loan-eligibility__single__top -->
                                    <div id="range-slider-loan-amount" class="loan-eligibility__range-slider loan-range" data-range-options='{
                                    "start": 45000,
                                    "step": 100,
                                    "suffix": "$",
                                    "range": {
                                        "min": 100,
                                        "max": 90000
                                    }
                                  }'>
                                    </div>
                                </div><!-- /.loan-eligibility__single -->
                                <div class="loan-eligibility__single">
                                    <div class="loan-eligibility__single__top">
                                        <span class="loan-eligibility__single__title">Gross Income (Monthly)</span>
                                        <span class="loan-eligibility__single__count">&#8358;5000</span>
                                    </div><!-- /.loan-eligibility__single__top -->
                                    <div id="range-slider-gross-income" class="loan-eligibility__range-slider loan-range" data-range-options='{
                                "start": 3500,
                                "step": 100,
                                "suffix": "$",
                                "range": {
                                    "min": 100,
                                    "max": 5000
                                }
                              }'></div>
                                </div><!-- /.loan-eligibility__single -->
                                <div class="loan-eligibility__single">
                                    <div class="loan-eligibility__single__top">
                                        <span class="loan-eligibility__single__title">Tenure (Years)</span>
                                        <span class="loan-eligibility__single__count">5 Year</span>
                                    </div><!-- /.loan-eligibility__single__top -->
                                    <div id="range-slider-tenure" class="loan-eligibility__range-slider  loan-range" data-range-options='{
                                    "start": 4,
                                    "step": 1,
                                    "suffix": " Year",
                                    "range": {
                                        "min": 1,
                                        "max": 10
                                    }
                                }'></div>
                                </div><!-- /.loan-eligibility__single -->
                                <div class="loan-eligibility__single">
                                    <div class="loan-eligibility__single__top">
                                        <span class="loan-eligibility__single__title">Interest Rate</span>
                                        <span class="loan-eligibility__single__count">15%</span>
                                    </div><!-- /.loan-eligibility__single__top -->
                                    <div id="range-slider-interest-rate" class="loan-eligibility__range-slider loan-range" data-range-options='{
                                "start": 7,
                                "step": 1,
                                "suffix": "%",
                                "range": {
                                    "min": 1,
                                    "max": 15
                                }
                            }'></div>
                                </div><!-- /.loan-eligibility__single -->
                                <div class="loan-eligibility__single">
                                    <div class="loan-eligibility__single__top">
                                        <span class="loan-eligibility__single__title">Other EMI (Monthly)</span>
                                        <span class="loan-eligibility__single__count">&#8358;1250</span>
                                    </div><!-- /.loan-eligibility__single__top -->
                                    <div id="range-slider-emi" class="loan-eligibility__range-slider loan-range" data-range-options='{
                            "start": 750,
                            "step": 10,
                            "suffix": "$",
                            "range": {
                                "min": 10,
                                "max": 1500
                            }
                        }'></div>
                                </div><!-- /.loan-eligibility__single -->
                            </div><!-- /.loan-eligibility__form__inner -->
                        </div><!-- /.loan-eligibility__form__left -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="loan-eligibility__form__right">
                            <div class="loan-eligibility__form__right__bg" style="background-image: url(assets/images/shapes/loan-eligibility-content-bg-1-1.png);">
                            </div>
                            <div class="loan-eligibility__content">
                                <div class="loan-eligibility__content__inner">
                                    <div class="loan-eligibility__content__item">
                                        <h2 class="loan-eligibility__content__title">Monthly EMI</h2>
                                        <p class="loan-eligibility__content__amount"><span>&#8358;</span>915.49</p>
                                    </div><!-- /.loan-eligibility__content__item -->
                                    <div class="loan-eligibility__content__item">
                                        <h2 class="loan-eligibility__content__title">Maximum Loan Eligibility</h2>
                                        <p class="loan-eligibility__content__amount"><span>&#8358;</span>21,805,060</p>
                                        <h2 class="loan-eligibility__content__sm-title">/ 221803 EMI</h2>
                                    </div><!-- /.loan-eligibility__content__item -->
                                </div><!-- /.loan-eligibility__content__inner -->
                                <button type="submit" class="loan-eligibility__content__btn easilon-btn">
                                    <span>Apply for loan</span>
                                    <span class="easilon-btn__icon"><i class="icon-right-arrow"></i></span>
                                </button><!-- /.loan-eligibility__content__btn -->
                            </div><!-- /.loan-eligibility__content -->
                        </div><!-- /.loan-eligibility__form__right -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row gutter-y-40 -->
            </form><!-- /.loan-eligibility__form -->
        </div><!-- /.container -->
    </section><!-- /.loan-eligibility section-space -->

@endsection
