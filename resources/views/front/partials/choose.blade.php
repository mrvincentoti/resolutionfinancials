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
