@extends('layouts.main')
@section('content')

<!-- Anouncement Start -->
<div class="container-fluid py-5 wow fadeInUp mt-5" data-wow-delay="0.1s">
    <div class="container py-5 px-5">
        <div class="row g-5 px-5">
            <!-- Latest project -->
            <div class="col-lg-6">
                    @include('front.partials.projects-announcement', ['data' => $announcements,'title'=>'General Announcement','type'=>'general'])
            </div>
            <!-- Latest project End -->

            <!-- Project Announcements Start -->
            <div class="col-lg-6">
                @include('front.partials.projects-announcement', ['data' => $announcements, 'title' => 'Project Announcement', 'type' => 'project'])
            </div>
            <!-- Project Announcements End -->
        </div>
    </div>
</div>

@endsection