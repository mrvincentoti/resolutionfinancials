@extends('layouts.main')

@section('content')
<!-- <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $announcement->title }}</h1>
            <p><strong>Announcement Date:</strong> {{ $announcement->announcement_date }}</p>
            <p><strong>Content:</strong> {{ $announcement->content }}</p>
            @if($announcement->document)
                <p><strong>Document:</strong> <a href="{{ asset('storage/' . $announcement->document) }}" target="_blank">View Document</a></p>
            @endif
        </div>
    </div>
</div> -->

<div class="container-fluid py-5 wow fadeInUp mt-5" data-wow-delay="0.1s">
    <div class="container py-5 px-5">
        <div class="row g-5 px-5">
            <div class="col-lg-12">
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">{{$announcement->title}}</h3>
                    </div>
                    @php
                        $date = date_create($announcement->announcement_date);
                    @endphp
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <h6 class="project-comment text-muted">{{ $announcement->content }}</h6>
                            <a class="btn btn-primary my-4" href="{{ asset($announcement->document) }}" download target="_blank">Download Document</a>
                        </div>
                        <div class="card-footer bg-primary text-white text-center w-100 p-2">
                            {{ date_format($date, "D, M d, Y g:i A") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="card p-3 m-5">
    <div class="title">
        <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, quam cumque possimus repellat laborum maxime, temporibus reprehenderit velit ab aspernatur deleniti numquam magnam eaque, fuga vitae corrupti quidem illum ipsam?</h6>
        <button class="my-4 bg-primary text-white p-2">Download document</button>
        <div class="card-footer bg-primary text-white w-100"> Thu, Mar 28, 2019 1:53 PM</div>
    </div>
</div> -->
@endsection
