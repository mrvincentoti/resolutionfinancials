@extends('layouts.main')
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container" style="margin-top: 120px;">
            <div class="page-header__content">
                <h2 class="page-header__title">our FAQ</h2>
                <ul class="easilon-breadcrumb list-unstyled">
                    <li><a href="{{url('webhome')}}">Home</a></li>
                    <li><span>our FAQ</span></li>
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

    <section class="faq-page section-space">
        <div class="container">
            <div class="row gutter-y-50">
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="faq-page__image">
                        <img src="{{ asset('assets/images/faq/faq-2-1.jpg') }}" alt="faq">
                    </div><!-- /.faq-page__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="faq-page__accordion">
                        @foreach($faqs as $faq)
                            <div class="faq-accordion easilon-accordion" data-grp-name="easilon-accordion">
                                <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <div class="accordion-title">
                                        <h4>
                                            {!! $faq->title !!}
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordion-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            {!! $faq->content !!}
                                        </div><!-- /.inner -->
                                    </div><!-- /.accordion-content -->
                                </div>
                            </div><!-- /.faq-accordion -->
                        @endforeach
                    </div><!-- /.faq-page__accordion -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row gutter-y-50 -->
        </div><!-- /.container -->
    </section><!-- /.faq-page section-space -->

@endsection
