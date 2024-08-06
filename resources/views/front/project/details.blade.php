@extends('layouts.main')

@section('styles')
<!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/tutorials/timelines/timeline-5/assets/css/timeline-5.css">
<link href="{{ asset('css/project-details.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row mt-5 d-none d-lg-block">
                <div class="col-lg-12">
                    <div class="project-menu  hiddenAtPrint">
                        <ul>
                            <li><a href="#project-info" class="soft-scroll">Basic project information</a></li>
                            <li><a href="#procurement-documents" class="soft-scroll">Procurement documents</a></li>
                            <li><a href="#announcements-section" class="soft-scroll">Announcements</a></li>
                            <li><a href="#gallery" class="soft-scroll">Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row g-5 mt-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{ asset('img/blog-1.jpg')}}" alt="">
                        <h2 class="mb-4">{{ $project->project_title }}</h2>

                        <div class="row mt-5 mb-5">
                            <div class="col-lg-4 col-sm-6 mb-1">
                                <div class="team-item rounded overflow-hidden p-2">
                                    <div class="text-left py-4">
                                        <h5 class="text-primary">Sector</h5>
                                        <p class="text-uppercase m-0">Healthcare</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-1">
                                <div class="team-item  rounded overflow-hidden p-2">
                                    <div class="text-left py-4">
                                        <h5 class="text-primary">Phase</h5>
                                        <p class="text-uppercase m-0">Development</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-1">
                                <div class="team-item rounded overflow-hidden p-2">
                                    <div class="text-left py-4">
                                        <h5 class="text-primary">Location</h5>
                                        <p class="text-uppercase m-0">Designation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-1">
                                <div class="team-item rounded overflow-hidden p-2">
                                    <div class="text-left py-4">
                                        <h5 class="text-primary">Sponsoring Agency</h5>
                                        <p class="text-uppercase m-0">Designation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-1">
                                <div class="team-item rounded overflow-hidden p-2">
                                    <div class="text-left py-4">
                                        <h5 class="text-primary">Indicative Value</h5>
                                        <p class="text-uppercase m-0">Designation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-1">
                                <div class="team-item rounded overflow-hidden p-2">
                                    <div class="text-left py-4">
                                        <h5 class="text-primary">Last Update</h5>
                                        <p class="text-uppercase m-0">Designation</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h5 class="mb-0">Project Need</h5>
                        </div>

                       <p class="d-block text-justify">{!! $project->project_need ?? 'Information will be published as soon as it is available.' !!}</p> 

                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h5 class="mb-0">Description Of Asset</h5>
                        </div>
                        
                        <p>{!! $project->description_of_asset ?? 'Information will be published as soon as it is available.' !!}</p>

                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h5 class="mb-0">Description Of Services</h5>
                        </div>
                        
                        <p>{!! $project->description_of_service ?? 'Information will be published as soon as it is available.' !!}</p>

                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h5 class="mb-0">Rationale for Selection of PPP Model</h5>
                        </div>
                        
                        <p>{!! $project->rationale_for_selection ?? 'Information will be published as soon as it is available.' !!}</p>

                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h5 class="mb-0">Stakeholder Consultations</h5>
                        </div>
                        
                        <p>{!! $project->stakeholder_consultations ?? 'Information will be published as soon as it is available.' !!}</p>
                    </div>
                    <!-- Blog Detail End -->
    
                    <!-- Comment List Start -->
                    <div class="mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">3 Comments</h3>
                        </div>
                        <div class="d-flex mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                                <button class="btn btn-sm btn-light">Reply</button>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                                <button class="btn btn-sm btn-light">Reply</button>
                            </div>
                        </div>
                        <div class="d-flex ms-5 mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                                <button class="btn btn-sm btn-light">Reply</button>
                            </div>
                        </div>
                    </div>
                    <!-- Comment List End -->
    
                    <!-- Comment Form Start -->
                    <div class="bg-light rounded p-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Leave A Comment</h3>
                        </div>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Website"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0" rows="5"
                                        placeholder="Comment"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">    
                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Project Milestones</h3>
                        </div>
                        <!-- Timeline 2 - Bootstrap Brain Component -->
                        <!-- Timeline 5 - Bootstrap Brain Component -->
                        <section class="bsb-timeline-5">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-xl-12">
                        
                                        <ul class="timeline">
                                            <li class="timeline-item">
                                                <span class="timeline-icon">
                                                    <i class="bi-check-lg text-primary"></i>
                                                </span>
                                                <div class="timeline-body">
                                                    <div class="timeline-content">
                                                        <div class="card text-bg-primary">
                                                            <div class="card-header">05 May 2021</div>
                                                            <div class="card-body">
                                                                <h5 class="card-title">Bootstrap 5</h5>
                                                                <p class="card-text">Powerful, extensible, and feature-packed frontend toolkit.
                                                                    Build and customize with Sass, utilize prebuilt grid system and components,
                                                                    and bring projects to life with powerful JavaScript plugins.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                        
                                            <li class="timeline-item">
                                                <span class="timeline-icon">
                                                    <i class="bi-info-lg text-primary"></i>
                                                </span>
                                                <div class="timeline-body">
                                                    <div class="timeline-content">
                                                        <div class="card text-bg-primary">
                                                            <div class="card-header">18 Jan 2018</div>
                                                            <div class="card-body">
                                                                <h5 class="card-title">Bootstrap 4</h5>
                                                                <p class="card-text">Get started with Bootstrap, the world’s most popular
                                                                    framework for building responsive, mobile-first sites, with jsDelivr and a
                                                                    template starter page. Bootstrap 4 has no active support.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                        
                                            <li class="timeline-item">
                                                <span class="timeline-icon">
                                                    <i class="bi-question-lg text-primary"></i>
                                                </span>
                                                <div class="timeline-body">
                                                    <div class="timeline-content">
                                                        <div class="card text-bg-primary">
                                                            <div class="card-header">19 Aug 2013</div>
                                                            <div class="card-body">
                                                                <h5 class="card-title">Bootstrap 3</h5>
                                                                <p class="card-text">Bootstrap is the most popular HTML, CSS, and JS framework
                                                                    for developing responsive, mobile first projects on the web. Bootstrap 3 has
                                                                    no active support.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                        
                                            <li class="timeline-item">
                                                <span class="timeline-icon">
                                                    <i class="bi-exclamation-lg text-primary"></i>
                                                </span>
                                                <div class="timeline-body">
                                                    <div class="timeline-content">
                                                        <div class="card text-bg-primary">
                                                            <div class="card-header">31 Jan 2012</div>
                                                            <div class="card-body">
                                                                <h5 class="card-title">Bootstrap 2</h5>
                                                                <p class="card-text">Sleek, intuitive, and powerful front-end framework for
                                                                    faster and easier web development. Bootstrap 2 is no longer officially
                                                                    supported.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                        
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Category End -->
    
                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Recent Post</h3>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/blog-1.jpg"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum
                                dolor sit amet adipis elit
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/blog-2.jpg"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum
                                dolor sit amet adipis elit
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/blog-3.jpg"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum
                                dolor sit amet adipis elit
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/blog-1.jpg"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum
                                dolor sit amet adipis elit
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/blog-2.jpg"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum
                                dolor sit amet adipis elit
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="img/blog-3.jpg"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum
                                dolor sit amet adipis elit
                            </a>
                        </div>
                    </div>
                    <!-- Recent Post End -->
    
                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->
    
                    <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Tag Cloud</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                        </div>
                    </div>
                    <!-- Tags End -->
    
                    <!-- Plain Text Start -->
                    <div class="wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Plain Text</h3>
                        </div>
                        <div class="bg-light text-center" style="padding: 30px;">
                            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita
                                kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet
                                diam</p>
                            <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                    <!-- Plain Text End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection