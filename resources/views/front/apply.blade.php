@extends('layouts.main')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container" style="margin-top: 120px;">
            <div class="page-header__content">
                <h2 class="page-header__title">apply loan</h2>
                <ul class="easilon-breadcrumb list-unstyled">
                    <li><a href="{{ route('webhome')  }}">Home</a></li>
                    <li><span>apply loan</span></li>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <!-- Loan Details -->
                    <div class="apply-loan__details">
                        <h2 class="apply-loan__details__title">How to apply for a Loan</h2>
                        <div class="apply-loan__form__row row">
                            <div class="wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="00ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                <ul class="list-unstyled service-details__list">
                                    <li>
                                        <span class="service-details__list__icon"><i class="icon-check"></i></span>
                                        Click <a href="{{route('apply')  }}}">here</a> to download the application form.
                                    </li>
                                    <li>
                                        <span class="service-details__list__icon"><i class="icon-check"></i></span>
                                        Fill the application form you downloaded
                                    </li>
                                    <li>
                                        <span class="service-details__list__icon"><i class="icon-check"></i></span>
                                        Complete the online application form and upload all the necessary documents.
                                    </li>
                                    <li>
                                        <span class="service-details__list__icon"><i class="icon-check"></i></span>
                                        Click the submit button.
                                    </li>
                                </ul><!-- /.list-unstyled team-details__list -->
                            </div>
                        </div><!-- /.pply-loan__form -->
                    </div><!-- /.apply-loan__details -->
                </div>
                <div class="col-md-8">
                    <form method="POST" action="{{ route('apply.post') }}" enctype="multipart/form-data" class="apply-loan__form">
                        @csrf
                        <!-- Loan Details -->
                        <!-- Personal Details -->
                        <div class="apply-loan__details">
                            <h2 class="apply-loan__details__title">Online application form</h2>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger text-center" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                            @if(session()->has('message'))
                                <div class="alert alert-success text-center">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="apply-loan__form__row row">
                                <div class="col-md-6">
                                    <div class="apply-loan__form__control">
                                        <label for="full-name">First Name*</label>
                                        <input type="text" id="fname" name="fname" placeholder="First Name" required="">
                                    </div><!-- /.pply-loan__form__control -->
                                </div>
                                <div class="col-md-6">
                                    <div class="apply-loan__form__control">
                                        <label for="full-name">Last Name*</label>
                                        <input type="text" id="lname" name="lname" placeholder="Last Name" required="">
                                    </div><!-- /.pply-loan__form__control -->
                                </div>
                                <div class="col-md-4">
                                    <div class="apply-loan__form__control">
                                        <label>Gender*</label>
                                        <select name="gender" class="selectpicker" aria-label="Default select example">
                                            <option selected="">Marital Status</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </div><!-- /.pply-loan__form__control -->
                                </div>
                                <div class="col-md-4">
                                    <div class="apply-loan__form__control">
                                        <label for="enter-email">Email*</label>
                                        <input type="email" id="enter-email" name="email" placeholder="Enter Email" required="">
                                    </div><!-- /.pply-loan__form__control -->
                                </div>
                                <div class="col-md-4">
                                    <div class="apply-loan__form__control">
                                        <label for="mobile-number">Mobile Number*</label>
                                        <input type="tel" id="mobile-number" name="mobile" placeholder="Mobile Number" required="">
                                    </div><!-- /.pply-loan__form__control -->
                                </div>
                            </div><!-- /.pply-loan__form -->
                        </div><!-- /.apply-loan__details -->

                        <!-- Address Details -->
                        <div class="apply-loan__details">
                            <h2 class="apply-loan__details__title">Address Details</h2>
                            <div class="apply-loan__form__row row">
                                <div class="col-md-6">
                                    <div class="apply-loan__form__control">
                                        <label for="house-info">House No/Name*</label>
                                        <input type="text" id="house-info" name="house_number" placeholder="House No/Name">
                                    </div><!-- /.pply-loan__form__control -->
                                </div>
                                <div class="col-md-6">
                                    <div class="apply-loan__form__control">
                                        <label for="street">Street*</label>
                                        <input type="text" id="street" name="street" required="">
                                    </div><!-- /.pply-loan__form__control -->
                                </div>
                                <div class="col-md-6">
                                    <div class="apply-loan__form__control">
                                        <label for="house-info">State*</label>
                                        <input type="text" id="state" name="state" placeholder="State" required="">
                                    </div><!-- /.pply-loan__form__control -->
                                </div>
                                <div class="col-md-6">
                                    <div class="apply-loan__form__control">
                                        <label for="city">LGA*</label>
                                        <input type="text" id="lga" name="lga" placeholder="LGA" required="">
                                    </div><!-- /.pply-loan__form__control -->
                                </div>
                            </div><!-- /.pply-loan__form -->
                        </div><!-- /.apply-loan__details -->

                        <!-- Other Details -->
                        <div class="apply-loan__details">
                            <h2 class="apply-loan__details__title">Documents</h2>
                            <div class="apply-loan__form__row row">
                                <div class="col-md-6">
                                    <div class="apply-loan__form__control file-input-wrapper mb-1">
                                        <label for="account_statement">Account Statement</label>
                                        <button type="button"
                                                class="btn btn-primary font-bold py-2 px-4 rounded w-full text-center">
                                            Select File
                                        </button>
                                        <input type="file" id="account_statement" name="account_statement">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="apply-loan__form__control file-input-wrapper mb-1">
                                        <label for="work_id">Work ID</label>
                                        <button type="button"
                                                class="btn btn-primary font-bold py-2 px-4 rounded w-full text-center">
                                            Select File
                                        </button>
                                        <input type="file" id="work_id" name="work_id">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="apply-loan__form__control file-input-wrapper mb-1">
                                        <label for="employment_letter">Employment Letter</label>
                                        <button type="button"
                                                class="btn btn-primary font-bold py-2 px-4 rounded w-full text-center">
                                            Select File
                                        </button>
                                        <input type="file" id="employment_letter" name="employment_letter">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="apply-loan__form__control file-input-wrapper mb-1">
                                        <label for="utility_bill">Utility Bill</label>
                                        <button type="button"
                                                class="btn btn-primary font-bold py-2 px-4 rounded w-full text-center">
                                            Select File
                                        </button>
                                        <input type="file" id="utility_bill" name="utility_bill">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="apply-loan__form__control file-input-wrapper mb-1">
                                        <label for="passport">Passport Photograph</label>
                                        <button type="button"
                                                class="btn btn-primary font-bold py-2 px-4 rounded w-full text-center">
                                            Select File
                                        </button>
                                        <input type="file" id="passport_photograph" name="passport">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="apply-loan__form__control file-input-wrapper mb-1">
                                        <label for="application_form">Application Form</label>
                                        <button type="button"
                                                class="btn btn-primary font-bold py-2 px-4 rounded w-full text-center">
                                            Select File
                                        </button>
                                        <input type="file" id="application_form" name="application_form">
                                    </div>
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
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.apply-loan section-space -->
    @include('front.partials.quick-loan')
@endsection
