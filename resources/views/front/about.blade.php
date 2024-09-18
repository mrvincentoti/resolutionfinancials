@extends('layouts.main')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container" style="margin-top: 120px;">
            <div class="page-header__content">
                <h2 class="page-header__title">About us</h2>
                <ul class="easilon-breadcrumb list-unstyled">
                    <li><a href="{{ route('webhome')  }}">Home</a></li>
                    <li><span>About us</span></li>
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

    @include('front.partials.about-section')

    @include('front.partials.choose', ['choose', $choose])

    @include('front.partials.reason', ['reason', $reason])


    <section class="funfact-one">
        <div class="funfact-one__bg" style="background-image: url(assets/images/shapes/funfact-bg-1-1.jpg);"></div>
        <!-- /.funfact-one__bg -->
        <div class="container">
            <div class="row gutter-y-40">
                <div class="funfact-one__col col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="funfact-one__item">
                        <h3 class="funfact-one__item__number count-box">
                            <span class="count-text" data-stop="8.5" data-speed="1500"></span>
                            <span>k</span>
                        </h3>
                        <h4 class="funfact-one__item__title">Happy Customers</h4><!-- /.funfact-one__item__title -->
                    </div><!-- /.funfact-one__item -->
                </div><!-- /.col-lg-3 col-sm-6 -->
                <div class="funfact-one__col col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="funfact-one__item">
                        <h3 class="funfact-one__item__number count-box">
                            <span>$</span>
                            <span class="count-text" data-stop="95" data-speed="1500"></span>
                            <span>k</span>
                        </h3>
                        <h4 class="funfact-one__item__title">Daily Payments</h4><!-- /.funfact-one__item__title -->
                    </div><!-- /.funfact-one__item -->
                </div><!-- /.col-lg-3 col-sm-6 -->
                <div class="funfact-one__col col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="funfact-one__item">
                        <h3 class="funfact-one__item__number count-box">
                            <span class="count-text" data-stop="99" data-speed="1500"></span>
                            <span>%</span>
                        </h3>
                        <h4 class="funfact-one__item__title">We Approve Loans</h4><!-- /.funfact-one__item__title -->
                    </div><!-- /.funfact-one__item -->
                </div><!-- /.col-lg-3 col-sm-6 -->
                <div class="funfact-one__col col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
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

    @include('front.partials.testimonial', ['testimonials', $testimonials])

    @include('front.partials.quick-loan')
@endsection
