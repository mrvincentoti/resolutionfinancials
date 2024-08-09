<div class="section-title section-title-sm position-relative pb-3 mb-4">
    <h3 class="mb-0">Latest Project Updates</h3>
</div>
<div class="row g-5">
    @foreach ($latest_projects as $project)
                <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset($project->project_image) }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">{{$project->sector->name}}</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                @php
                                $date = date_create($project->last_update);
                                //echo date_format($date, "Y/m/d H:i:s");
                                @endphp
                                <small><i class="far fa-calendar-alt text-primary me-2"></i> {{ date_format($date, "d M, Y") }}</small>                        </div>
                            <h4 class="mb-3">{{$project->project_title}}</h4>
                            <p> {!! \Illuminate\Support\Str::limit($project->project_need, 45) !!}</p>
                            <a class="text-uppercase" href="{{ route('project.details', $project->slug) }}">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
    @endforeach
</div>