@extends('layouts.main')

@section('styles')
<!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/tutorials/timelines/timeline-5/assets/css/timeline-5.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<link href="{{ asset('css/project-details.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <!-- <div class="row mt-5 d-none d-lg-block">
                <div class="col-lg-12">
                    <div class="project-menu  hiddenAtPrint">
                        <ul>
                            <li><a href="#project-info" class="soft-scroll">Basic project information</a></li>
                            <li><a href="#procurement-documents" class="soft-scroll">PPP and Climate Screening Report</a></li>
                            <li><a href="#announcements-section" class="soft-scroll">Announcements</a></li>
                            <li><a href="#gallery" class="soft-scroll">Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->

            <div class="row g-5 mt-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{ asset($project->project_image) }}" alt="">
                        <h2 class="mb-4">{{ $project->project_title }}</h2>

                        <div class="row mt-5 mb-5" id="project-info">
                            <div class="col-lg-4 col-sm-6 col-6 mb-1">
                                <div class="team-item rounded overflow-hidden p-2">
                                    <div class="text-left py-4">
                                        <h5 class="text-primary">Sector</h5>
                                        <p class="text-uppercase m-0">{{$project->sector->name}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-6 mb-1">
                                <div class="team-item rounded overflow-hidden p-2">
                                    <div class="text-left py-4">
                                        <h5 class="text-primary">Phase</h5>
                                        <p class="text-uppercase m-0">{{$project->phase->name}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-6 mb-1">
                                <div class="team-item rounded overflow-hidden p-2">
                                    <div class="text-left py-4">
                                        <h5 class="text-primary">Location</h5>
                                        <p class="text-uppercase m-0">{{$project->lga->name}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-6 mb-1">
                                <div class="team-item rounded overflow-hidden p-2">
                                    <div class="text-left py-4">
                                        <h5 class="text-primary">Sponsoring Agency</h5>
                                        <p class="text-uppercase m-0">{{$project->supervising_authority}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-6 mb-1">
                                <div class="team-item rounded overflow-hidden p-2">
                                    <div class="text-left py-4">
                                        <h5 class="text-primary">Indicative Value</h5>
                                        <p class="text-uppercase m-0">{{$project->value}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-6 mb-1">
                                <div class="team-item rounded overflow-hidden p-2">
                                    <div class="text-left py-4">
                                        <h5 class="text-primary">Last Update</h5>
                                        <p class="text-uppercase m-0">{{$project->last_update}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h5 class="mb-0">Project Need</h5>
                        </div>

                       <p class="text-justify text-break">{!! $project->project_need ?? 'Information will be published as soon as it is available.' !!}</p> 

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

                        @if($project->screening_report)
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h5 class="mb-0">PPP and Climate Screening Report</h5>
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-sm-6 mb-4 text-center">
                                    <div class="card">
                                        <a href="{{ asset($project->screening_report) }}" data-lightbox="documents" data-title="Document Title 1">
                                            <img src="{{ asset($project->screening_report) }}" class="card-img-top" alt="Document 1">
                                        </a>
                                        <div class="card-body">
                                            <!-- <a href="{{ asset($project->screening_report) }}" class="text-green">Download</a> -->
                                            <a class="text-green" href="{{ asset($project->screening_report) }}" download>
                                                (Click to download)
                                            </a>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                        @endif
                        <!-- <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h5 class="mb-0">Project Summary Documents</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-sm-6 mb-4 text-center">
                                <div class="card">
                                    <a href="{{ asset('img/blog-1.jpg')}}" data-lightbox="documents" data-title="Document Title 1">
                                        <img src="{{ asset('img/blog-1.jpg')}}" class="card-img-top" alt="Document 1">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Document Title 1</h5>
                                        <a href="{{ asset('img/blog-1.jpg')}}" class="btn btn-primary w-100">Download</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-4 text-center">
                                <div class="card">
                                    <a href="{{ asset('img/blog-1.jpg')}}" data-lightbox="documents" data-title="Document Title 2">
                                        <img src="{{ asset('img/blog-1.jpg')}}" class="card-img-top" alt="Document 2">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Document Title 2</h5>
                                        <a href="{{ asset('img/blog-1.jpg')}}" class="btn btn-primary w-100">Download</a>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-3 col-sm-6 mb-4 text-center">
                                <div class="card">
                                    <a href="{{ asset('img/blog-1.jpg')}}" data-lightbox="documents" data-title="Document Title 3">
                                        <img src="{{ asset('img/blog-1.jpg')}}" class="card-img-top" alt="Document 3">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Document Title 3</h5>
                                        <a href="{{ asset('img/blog-1.jpg')}}" class="btn btn-primary w-100">Download</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h5 class="mb-0">Parties</h5>
                        </div>

                        <div class="row">
                         
                            <div class="col-md-3 col-sm-6 mb-4 text-center">
                                <div class="card">
                                    <a href="{{ asset('img/blog-1.jpg')}}" data-lightbox="documents" data-title="Document Title 1">
                                        <img src="{{ asset('img/blog-1.jpg')}}" class="card-img-top" alt="Document 1">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Document Title 1</h5>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6 mb-4 text-center">
                                <div class="card">
                                    <a href="{{ asset('img/blog-1.jpg')}}" data-lightbox="documents" data-title="Document Title 2">
                                        <img src="{{ asset('img/blog-1.jpg')}}" class="card-img-top" alt="Document 2">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Document Title 2</h5>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-3 col-sm-6 mb-4 text-center">
                                <div class="card">
                                    <a href="{{ asset('img/blog-1.jpg')}}" data-lightbox="documents" data-title="Document Title 3">
                                        <img src="{{ asset('img/blog-1.jpg')}}" class="card-img-top" alt="Document 3">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Document Title 3</h5>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h5 class="mb-0">Contract Information</h5>
                        </div>

                        <div class="row">
                        
                            <div class="col-md-3 col-sm-6 mb-4 text-center">
                                <div class="card">
                                    <a href="{{ asset('img/blog-1.jpg')}}" data-lightbox="documents" data-title="Document Title 1">
                                        <img src="{{ asset('img/blog-1.jpg')}}" class="card-img-top" alt="Document 1">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Document Title 1</h5>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-3 col-sm-6 mb-4 text-center">
                                <div class="card">
                                    <a href="{{ asset('img/blog-1.jpg')}}" data-lightbox="documents" data-title="Document Title 2">
                                        <img src="{{ asset('img/blog-1.jpg')}}" class="card-img-top" alt="Document 2">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Document Title 2</h5>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-3 col-sm-6 mb-4 text-center">
                                <div class="card">
                                    <a href="{{ asset('img/blog-1.jpg')}}" data-lightbox="documents" data-title="Document Title 3">
                                        <img src="{{ asset('img/blog-1.jpg')}}" class="card-img-top" alt="Document 3">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Document Title 3</h5>
                                    </div>
                                </div>
                            </div>
                            
                        </div> -->
                    </div>
                </div>
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">    
                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Project Milestones</h3>
                        </div>
                         @if($project->milestones->isEmpty())
                            <p>Information will be published when available</p>
                         @else
                        <section class="bsb-timeline-5">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-xl-12">

                                        <ul class="timeline">
                                            @foreach ($project->milestones as $milestone)
                                            <li class="timeline-item">
                                                <span class="timeline-icon">
                                                    <i class="bi-info-lg text-primary"></i>
                                                </span>
                                                <div class="timeline-body">
                                                    <div class="timeline-content">
                                                        <div class="card text-bg-primary">
                                                            @php
        $date = date_create($milestone->milestone_date);
                                                            @endphp
                                                            <div class="card-header">{{ date_format($date, "d M Y") }}</div>
                                                            <div class="card-body">
                                                                <h5 class="card-title text-light">{{ $milestone->title }}</h5>
                                                                <p class="card-text">{{$milestone->description}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </section>
                        @endif
                    </div>
                    <!-- Category End -->
    
                    <!-- Recent Post Start -->
                    <!-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
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
                    </div> -->
                    <!-- Recent Post End -->
    
                    <!-- Image Start -->
                    <!-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                    </div> -->
                    <!-- Image End -->
    
                    <!-- Tags Start -->
                    <!-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
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
                    </div> -->
                    <!-- Tags End -->
    
                    <!-- Plain Text Start -->
                    <!-- <div class="wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Plain Text</h3>
                        </div>
                        <div class="bg-light text-center" style="padding: 30px;">
                            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita
                                kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet
                                diam</p>
                            <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                        </div>
                    </div> -->
                    <!-- Plain Text End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection