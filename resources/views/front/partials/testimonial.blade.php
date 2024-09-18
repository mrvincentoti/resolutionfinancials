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
                        <h3 class="sec-title__title">peoples talk about <br> Resolution Finance Limited</h3>
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
                        @foreach($testimonials as $testimonial)
                            <div class="item">
                                <div class="testimonial-card-two @@extraClassName">
                                    <div class="testimonial-card-two__inner">
                                        <div class="testimonial-card-two__top">
                                            <div class="testimonial-card-two__image">
                                                <img src="{{ asset( $testimonial->document) }}" alt="slider image">
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
                                        <p class="testimonial-card-two__quote">{!!html_entity_decode($testimonial->content)!!}</p>
                                        <div class="testimonial-card-two__bottom">
                                            <div class="testimonial-card-two__identity">
                                                <h4 class="testimonial-card-two__name">{{$testimonial->title}}</h4>
                                                <!-- /.testimonial-card-two__name -->
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
                        @endforeach
                    </div><!-- /.testimonials-two__carousel -->
                </div><!-- /.easilon-stretch-element-inside-column -->
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row gutter-y-50 -->
    </div><!-- /.container -->
</section><!-- /.testimonials-two -->
