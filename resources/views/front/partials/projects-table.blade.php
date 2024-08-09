<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    @if (request()->is('/') || request()->is('/home'))
        <div class="container-fluid py-5">
    @else
        <div class="container-fluid py-5 px-5">
    @endif
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Projects</h5>
        </div>
        <div class="row g-5">
            @if (request()->is('/') || request()->is('/home'))
            <div class="col-lg-2">
            @else
            <div class="col-lg-2">
            @endif
                <div class="row g-5">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Filter by Stage
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-group">
                                        @foreach ($phases as $phase)
                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="{{ $phase->id }}" id="phase{{ $phase->id }}" name="phase">
                                                {{ $phase->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Filter by Sector
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-group">
                                        @foreach ($sectors as $sector)
                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="{{ $sector->id }}" id="sector{{ $sector->id }}" name="sector">
                                                {{ $sector->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Filter by LGA
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-group">
                                        @foreach ($lgas as $lga)
                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value="{{ $lga->id }}" id="lga{{ $lga->id }}" name="lga">
                                                {{ $lga->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @if (request()->is('/') || request()->is('/home'))
            <div class="col-lg-10  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
            @else
            <div class="col-lg-10  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
            @endif
                <table id="example" class="display hover responsive">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>PROJECT NAME</th>
                            <th>SECTOR</th>
                            <th>LOCAL GOVERNMENT</th>
                            <th>PHASE</th>
                            <th>VALUE(MILLION)</th>
                            <th>SUPERVISING AUTHORITY</th>
                            <th>PPP AND CLIMATE SCREENING REPORT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr data-href="{{ route('project.details', $project->slug) }}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$project->project_title}}</td>
                                <td>{{$project->sector->name}}</td>
                                <td>{{$project->lga->name}}</td>
                                <td><span>{{$project->phase->name}}</span></td>
                                <td><span>{{$project->value}}</span></td>
                                <td>{{$project->supervising_authority}}</td>
                                @if (empty($project->screening_report))
                                    <td>NO</td>
                                @else
                                     <td>
                                        <a class="text-green" href="{{ asset($project->screening_report) }}" download>
                                            YES (Click to download)
                                        </a>
                                     </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>PROJECT NAME</th>
                            <th>SECTOR</th>
                            <th>LOCAL GOVERNMENT</th>
                            <th>PHASE</th>
                            <th>VALUE(MILLION)</th>
                            <th>SUPERVISING AUTHORITY</th>
                            <th>PPP AND CLIMATE SCREENING REPORT</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>