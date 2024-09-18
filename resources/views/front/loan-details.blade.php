@extends('layouts.main')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg')}});"></div>
        <!-- /.page-header__bg -->
        <div class="container" style="margin-top: 120px;">
            <div class="page-header__content">
                <h2 class="page-header__title">Loan Details</h2>
                <ul class="easilon-breadcrumb list-unstyled">
                    <li><a href="{{route('webhome')}}">Home</a></li>
                    <li><span>our services</span></li>
                    <li><span>{{$service->project_title}}</span></li>
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
                                @foreach($otherServices as $otherService)
                                    <li><a href="{{ route('loan', $otherService->slug)  }}">{{$otherService->project_title}} <span class="service-sidebar__nav__icon"><i class="icon-double-right-arrow"></i></span></a></li>
                                @endforeach
                            </ul><!-- /.list-unstyled service-sidebar__nav -->
                        </div><!-- /.service-sidebar__info service-sidebar__single -->
                        <div class="service-sidebar__single">
                            <div class="service-sidebar__contact wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms" style="background-image: url('{{ asset('assets/images/services/service-sidebar-contact-bg.jpg')}}');">
                                <div class="service-sidebar__contact__bg">
                                    <div class="service-sidebar__contact__bg__inner" style="background-image: url('{{ asset('assets/images/shapes/service-sidebar-contact-bg-2.png')}}');"></div><!-- /.service-sidebar__contact__bg__inner -->
                                </div><!-- /.service-sidebar__contact__bg -->
                                <div class="service-sidebar__contact__inner">
                                    <div class="service-sidebar__contact__icon">
                                        <i class="icon-telephone"></i>
                                    </div><!-- /.service-sidebar__contact__icon -->
                                    <div class="service-sidebar__contact__content">
                                        <h4 class="service-sidebar__contact__time">MON-FRI 8:00-9:00</h4><!-- /.service-sidebar__contact__time -->
                                        <h4 class="service-sidebar__contact__number">
                                            <a href="tel:+2348056798502">
                                                +234 805 6798 502
                                            </a>
                                        </h4><!-- /.service-sidebar__contact__number -->
                                    </div><!-- /.service-sidebar__contact__content -->
                                </div><!-- /.service-sidebar__contact__inner -->
                            </div><!-- /.service-sidebar__contact -->
                            <a href="{{route('apply')}}" class="easilon-btn loan-calculator-form__btn">
                                <span>Apply for loan</span>
                                <span class="easilon-btn__icon"><i class="icon-right-arrow"></i></span>
                            </a>
                        </div><!-- /.service-sidebar__single -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-8">
                    <div class="service-details__content">
                        <div class="service-details__inner">
                            <div class="service-details__thumbnail wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <img src="{{ asset( $service->project_image) }}" alt="{{$service->project_title}}">
                            </div><!-- /.service-details__thumbnail -->
                            <h3 class="service-details__title">{{$service->project_title}}</h3><!-- /.service-details__title -->
                            <p class="service-details__text wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">{!! $service->project_need !!}</p>
                            <!-- /.service-details__text -->
                        </div><!-- /.service-details__inner -->

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
                            <img src="{{ asset('assets/images/services/service-d-list-1.jpg')}}" alt="service-d-list" class="service-details__info__image">
                        </div><!-- /.service-details__info -->
                    </div><!-- /.service-details__content -->
                </div><!-- /.col-md-12 col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-details section-space -->

    <div class="" style="background-image: url({{ asset('assets/images/shapes/services-bg-2-1.png')}}); margin-bottom: 50px;">
        @include('front.partials.calculator')
    </div>


@endsection
