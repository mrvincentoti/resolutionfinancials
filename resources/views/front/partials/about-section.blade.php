@if (request()->is('/') || request()->is('/home'))
    <!-- This is the home page about section -->
    <section class="about-two section-space" id="about">
        <div class="container">
            <div class="row gutter-y-60 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                    <div class="about-two__image">
                        <div class="about-two__image__inner">
                            <img src="{{ $about->image }}" alt="about image">
                            <img src="{{ asset('assets/images/about/about-2-2.jpg')}}" alt="about image"
                                 class="about-two__image__two">
                            <div class="about-two__experience">
                                <h3 class="about-two__experience__year">15+</h3>
                                <h3 class="about-two__experience__title">year of experience</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-two__content">
                        <div class="sec-title">
                            <h5 class="sec-title__tagline">{{ $about->top_tag }}</span></h5>
                            <h3 class="sec-title__title">{{ $about->title }}</h3>
                        </div>
                        <div class="about-two__info wow fadeInUp" data-wow-duration="1500ms">
                            <div class="about-two__info__icon">
                                <span class="icon-loan"></span>
                            </div>
                            <p class="about-two__info__text">{{ $about->short_description }}</p>
                        </div>
                        <div class="about-two__text-box wow fadeInUp" data-wow-duration="1500ms">
                            <p class="about-two__text">
                            {!! $about->description !!}
                            </p>
                        </div>
                        <ul class="about-two__list list-unstyled wow fadeInUp" data-wow-duration="1500ms">
                            <li><i class="icon-check-mark"></i> {{ $about->point_one }}</li>
                            <li><i class="icon-check-mark"></i> {{ $about->point_two }}</li>
                        </ul>
                        <div class="about-two__button wow fadeInUp" data-wow-duration="1500ms">
                            <a href="{{route('about')}}" class="easilon-btn">
                                <span>Know about us</span>
                                <span class="easilon-btn__icon"><i class="icon-double-right-arrow"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/shapes/about-shape-2-1.png')}}" alt="shape" class="about-two__shape">
    </section>

@else
    <!-- This is the about page about section -->
    <section class="about-one about-one--about section-space">
        <div class="container">
            <div class="row gutter-y-50">
                <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                    <div class="about-one__image">
                        <div class="about-one__image__inner">
                            <img src="{{ $about->image }}" alt="about image">
                            <img src="{{ asset('assets/images/about/about-1-2.jpg') }}" alt="about image" class="about-one__image__with-border">
                            <img src="{{ asset('assets/images/shapes/about-shape-1-1.png') }}" alt="shapes" class="about-one__image__shape">
                            <div class="about-one__experience">
                                <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-btn video-popup">
                                    <i class="icon-play"></i>
                                </a>
                                <h3 class="about-one__experience__year">15+</h3>
                                <h3 class="about-one__experience__title">year of experience</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-one__content">
                        <div class="sec-title">
                            <h6 class="sec-title__tagline">{{ $about->top_tag }}</h6>
                            <h3 class="sec-title__title">{{ $about->title }}</h3>
                        </div>
                        <div class="about-one__text-box wow fadeInUp" data-wow-duration="1500ms">
                            <p class="about-one__text">
                            {!! $about->description !!}
                            </p>
                        </div>
                        <div class="about-one__list">
                            <div class="about-one__list__left wow fadeInUp">
                                <div class="about-one__list__item"><i class="icon-check-mark"></i> {{ $about->point_one }}</div>
                                <div class="about-one__list__item"><i class="icon-check-mark"></i> {{ $about->point_two }}</div>
                            </div>
                            <div class="about-one__list__right wow fadeInUp">
                                <div class="about-one__list__item"><i class="icon-check-mark"></i> {{ $about->point_three }}</div>
                                <div class="about-one__list__item"><i class="icon-check-mark"></i> {{ $about->point_four }}</div>
                            </div>
                        </div>
                        <div class="about-one__button wow fadeInUp">
                            <a href="{{ route('contact') }}" class="easilon-btn easilon-btn--border">
                                <span>Get Started</span>
                                <span class="easilon-btn__icon"><i class="icon-double-right-arrow"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
