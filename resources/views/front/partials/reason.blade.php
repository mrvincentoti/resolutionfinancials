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
