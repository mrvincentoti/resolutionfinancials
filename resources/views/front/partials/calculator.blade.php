<section class="loan-two loan-two--services section-space-top">
    <div class="container">
        <div class="loan-two__inner"
             style="background-image: url({{ asset('assets/images/resources/loan-bg-1-1.jpg')}});">
            <div class="loan-two__form">
                <div class="loan-two__form__bg"
                     style="background-image: url({{ asset('assets/images/shapes/loan-calculator-form-bg-1-1.png')}});">
                </div>
                <!-- /.loan-two__form__bg -->
                <form action="#" id="loan-calculator-01" data-form-direction="ltr" data-interest-rate="6"
                      class="loan-calculator-form wow fadeInUp" data-wow-duration="1500ms">
                    <h3 class="loan-calculator-form__title">How Much Do You Need?</h3>
                    <div class="loan-calculator-form__content">
                        <div class="input-box__top">
                            <span>₦1000</span>
                            <span>₦5000000</span>
                        </div><!-- /.input-box__top -->
                        <div class="input-box">
                            <div class="range-slider-count" id="loan-calculator-01-count"></div>
                            <input type="hidden" value="" class="min-count"
                                   id="loan-calculator-01-min-count">
                            <input type="hidden" value="" class="max-count"
                                   id="loan-calculator-01-max-count">
                        </div><!-- /.input-box -->
                        <div class="input-box__top input-box__top-border">
                            <span>1 Month</span>
                            <span>12 Months</span>
                        </div><!-- /.input-box__top -->
                        <div class="input-box">
                            <div class="range-slider-month" id="loan-calculator-01-month"></div>
                            <input type="hidden" value="" class="min-month"
                                   id="loan-calculator-01-min-month">
                            <input type="hidden" value="" class="max-month"
                                   id="loan-calculator-01-max-month">
                        </div><!-- /.input-box -->
                        <p>
                            <span>Pay Monthly</span>
                            <b>₦<i class="loan-monthly-pay"></i></b>
                        </p>
                        <p>
                            <span>Term of Use</span>
                            <b><i class="loan-month"></i> Months</b>
                        </p>
                        <p>
                            <span>Total Pay Back amount</span>
                            <b>₦<i class="loan-total"></i></b>
                        </p>
                        <a href="{{ route('apply')  }}" class="easilon-btn loan-calculator-form__btn">
                            <span>Apply for loan</span>
                            <span class="easilon-btn__icon"><i class="icon-right-arrow"></i></span>
                        </a><!-- /.easilon-btn -->
                    </div><!-- /.loan-calculator-form__content -->
                </form><!-- /.loan-calculator-form -->
            </div><!-- /.loan-two__form -->
            <a href="" class="loan-two__video video-popup">
                <span class="icon-play"></span>
                <i class="loan-two__video__ripple"></i>
            </a><!-- /.loan-two__video -->
        </div><!-- /.loan-two__inner -->
    </div><!-- /.container -->
    <img src="{{ asset('assets/images/shapes/loan-money-1-1.png') }}" alt="money" class="loan-two__money">
</section><!-- /.loan-two section-space-top -->
