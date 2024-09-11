
<section class="about-one about-one--about section-space">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="about-one__image">
                    <div class="about-one__image__inner">
                        <img src="{{ asset( $about->limage) }}" alt="about image">
                        <img src="{{ asset( $about->simage) }}" alt="slider image" class="
						about-one__image__with-border">
                        <img src="assets/images/shapes/about-shape-1-1.png" alt="shapes" class="about-one__image__shape">
                        <div class="about-one__experience">
                            <div class="about-one__experience__bg" style="background-image: url(assets/images/shapes/about-experience-bg-1-1.png);"></div>
                            <!-- /.about-one__experience__bg -->
                            <div class="about-one__experience__content">
                                <a href="" class="video-btn video-popup">
                                    <i class="icon-play"></i>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a><!-- /.video-btn -->
                                <h3 class="about-one__experience__year">{{$about->years_of_experience}}</h3><!-- /.about-one__experience__year -->
                                <h3 class="about-one__experience__title">year(s) of experience</h3>
                                <!-- /.about-one__experience__title -->
                            </div><!-- /.about-one__experience__content -->
                        </div><!-- /.about-one__experience -->
                    </div><!-- /.about-one__image__inner -->
                </div><!-- /.about-one__image -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="about-one__content">
                    <div class="sec-title @@extraClassName">
                        <div class="sec-title__top">
                            <div class="sec-title__shape">
                                <div class="sec-title__shape__one"></div><!-- /.sec-title__shape__one -->
                                <div class="sec-title__shape__two"></div><!-- /.sec-title__shape__one -->
                            </div><!-- /.sec-title__shape -->
                            <h6 class="sec-title__tagline">welcome to Resolution Finance</h6><!-- /.sec-title__tagline -->
                        </div><!-- /.sec-title__top -->
                        <h3 class="sec-title__title">{{$about->title}}</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <div class="about-one__text-box wow fadeInUp" data-wow-duration="1500ms">
                        <p class="about-one__text">{{$about->content}}</p><!-- /.about-one__text -->
                    </div><!-- /.about-one__text-box -->
                    <div class="about-one__list">
                        <div class="about-one__list__left wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <div class="about-one__list__item">
                                        <span class="about-one__list__icon">
                                            <i class="icon-check-mark"></i>
                                        </span><!-- /.about-one__list__icon -->
                                quick loan process
                            </div>
                            <div class="about-one__list__item">
                                        <span class="about-one__list__icon">
                                            <i class="icon-check-mark"></i>
                                        </span><!-- /.about-one__list__icon -->
                                very low rates
                            </div>
                        </div><!-- /.about-one__list__left -->
                        <div class="about-one__list__right wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                            <div class="about-one__list__item">
                                        <span class="about-one__list__icon">
                                            <i class="icon-check-mark"></i>
                                        </span><!-- /.about-one__list__icon -->
                                small business loan
                            </div>
                            <div class="about-one__list__item">
                                        <span class="about-one__list__icon">
                                            <i class="icon-check-mark"></i>
                                        </span><!-- /.about-one__list__icon -->
                                studying abroad loan
                            </div>
                        </div><!-- /.about-one__list__right -->
                    </div><!-- /.about-one__list -->
{{--                    <div class="about-one__button wow fadeInUp" data-wow-duration="1500ms">--}}
{{--                        <a href="about.html" class="easilon-btn easilon-btn--border">--}}
{{--                            <span>know about us</span>--}}
{{--                            <span class="easilon-btn__icon">--}}
{{--                                        <i class="icon-double-right-arrow"></i>--}}
{{--                                    </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div><!-- /.about-one__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row gutter-y-50 -->
    </div><!-- /.container -->
</section><!-- /.about-one section-space -->
