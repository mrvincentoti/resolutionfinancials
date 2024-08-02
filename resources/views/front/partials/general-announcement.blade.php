<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
    <div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="mb-0">{{$title ?? 'General Announcement'}}</h3>
    </div>
    @foreach($general_announcements as $project)
                @php
        $date = date_create($project->announcement_date);
        //echo date_format($date, "Y/m/d H:i:s");
                @endphp
                <div class="d-flex rounded overflow-hidden mb-3 card-container">
                    <a href=""
                        class="d-flex align-items-center bg-light px-1 w-100 text-decoration-none card-link">
                        <div class="date font-green text-center px-3">
                            <div class="day fw-bold">{{ date_format($date, "d") }}</div>
                            <div class="month-year">{{ date_format($date, "M") }}</div>
                            <div class="month-year">{{ date_format($date, "Y") }}</div>
                        </div>
                        <div class="text-content">
                            <div class="project-title font-green fw-semi-bold mb-0">{{$project->title}}
                            </div>
                            <div class="project-comment text-muted">{{$project->title}}</div>
                        </div>
                    </a>
                </div>
    @endforeach
</div>