@extends('layouts.main')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container" style="margin-top: 120px;">
            <div class="page-header__content">
                <h2 class="page-header__title">Upload application form</h2>
                <ul class="easilon-breadcrumb list-unstyled">
                    <li><a href="{{ route('webhome')  }}">Home</a></li>
                    <li><span>upload application form</span></li>
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

    <section class="apply-loan section-space">
        <div class="container">
            <form action="#" class="apply-loan__form">
                <!-- Loan Details -->
                <div class="apply-loan__details">
                    <h2 class="apply-loan__details__title">Personal Details</h2>
                    <div class="apply-loan__form__row row">
                        <div class="col-md-4">
                            <div class="apply-loan__form__control">
                                <label for="loan-amount">Full Name*</label>
                                <input type="text" id="fname" name="fname" placeholder="Your full name" required="">
                            </div><!-- /.pply-loan__form__control -->
                        </div>
                        <div class="col-md-4">
                            <div class="apply-loan__form__control">
                                <label for="monthly-income">Phone*</label>
                                <input type="text" id="text" placeholder="+234 804 340 2904" required="">
                            </div><!-- /.pply-loan__form__control -->
                        </div>
                        <div class="col-md-4">
                            <div class="apply-loan__form__control">
                                <label for="monthly-income">Email*</label>
                                <input type="email" id="email" placeholder="email@example.com" required="">
                            </div><!-- /.pply-loan__form__control -->
                        </div>
                    </div><!-- /.pply-loan__form -->
                </div><!-- /.apply-loan__details -->

                <!-- Personal Details -->
                <div class="apply-loan__details">
                    <h2 class="apply-loan__details__title">Documents</h2>
                    <div class="apply-loan__form__row row">
                        <div class="col-md-4">
                            <div class="apply-loan__form__control">
                                <label for="full-name">Account Statement*</label>
                                <input type="file" id="account-statement" name="account-statement" placeholder="Account Statement" required="">
                            </div><!-- /.pply-loan__form__control -->
                        </div>
                        <div class="col-md-4">
                            <div class="apply-loan__form__control">
                                <label for="enter-email">Work ID*</label>
                                <input type="file" id="work-id" name="work-id" placeholder="Work ID" required="">
                            </div><!-- /.pply-loan__form__control -->
                        </div>
                        <div class="col-md-4">
                            <div class="apply-loan__form__control">
                                <label for="mobile-number">Utility Bill*</label>
                                <input type="file" id="bill" name="bill" placeholder="Utility Bill" required="">
                            </div><!-- /.pply-loan__form__control -->
                        </div>
                        <div class="col-md-4">
                            <div class="apply-loan__form__control">
                                <label for="mobile-number">Employment Letter*</label>
                                <input type="file" id="employement-letter" name="employement-letter" placeholder="Employment Letter" required="">
                            </div><!-- /.pply-loan__form__control -->
                        </div>
                        <div class="col-md-4">
                            <div class="apply-loan__form__control">
                                <label for="mobile-number">Passport Photograph*</label>
                                <input type="file" id="photograph" name="photograph" placeholder="Passport Photograph" required="">
                            </div><!-- /.pply-loan__form__control -->
                        </div>

                        <div class="col-md-4">
                            <div class="apply-loan__form__control">
                                <label for="mobile-number">Application Letter*</label>
                                <input type="file" id="letter" name="letter" placeholder="Application Letter" required="">
                            </div><!-- /.pply-loan__form__control -->
                        </div>

                    </div><!-- /.pply-loan__form -->
                </div><!-- /.apply-loan__details -->

                <button type="submit" class="apply-loan__form__btn easilon-btn">
                    <span>submit now</span>
                    <span class="easilon-btn__icon">
                            <i class="icon-double-right-arrow"></i>
                        </span>
                </button><!-- /.apply-loan__form__btn easilon-btn -->
            </form><!-- /.apply-loan__form -->
        </div><!-- /.container -->
    </section><!-- /.apply-loan section-space -->
@endsection
