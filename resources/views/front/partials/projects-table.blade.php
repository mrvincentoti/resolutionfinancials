<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    @if (request()->is('/') || request()->is('/home'))
        <div class="container py-5">
    @else
        <div class="container-fluid py-5 px-5">
    @endif
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Projects</h5>
        </div>
        <div class="row g-5">
            @if (request()->is('/') || request()->is('/home'))
            <div class="col-lg-3">
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
                                                <input class="form-check-input me-1" type="checkbox" value="{{ $phase->id }}" id="level{{ $phase->id }}" name="level">
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
            <div class="col-lg-9  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
            @else
            <div class="col-lg-10  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
            @endif
                <table id="example" class="display nowrap responsive">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Sector</th>
                            <th>Stage</th>
                            <th>Sponsoring Agency</th>
                            <th>Value(Millions)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{$project->project_title}}</td>
                                <td>{{$project->sector->name}}</td>
                                <td><span>{{$project->phase->name}}</span></td>
                                <td>{{$project->project_title}}</td>
                                <td><span>{{$project->value}}</span></td>
                            </tr>
                        @endforeach
                        <!-- <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td><span>Edinburgh</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$320,800.00</span></td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td><span>Tokyo</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$170,750.00</span></td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$86,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td><span>Edinburgh</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$433,060.00</span></td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td><span>Tokyo</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$162,700.00</span></td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td><span>New York</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$372,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$137,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td><span>Tokyo</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$327,900.00</span></td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$205,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td><span>Edinburgh</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$103,600.00</span></td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td><span>London</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$90,560.00</span></td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td><span>Edinburgh</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$342,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$470,600.00</span></td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td><span>London</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$313,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td><span>London</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$385,750.00</span></td>
                        </tr>
                        <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td><span>London</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$198,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td><span>New York</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$725,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td><span>New York</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$237,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td><span>London</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$132,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td><span>Edinburgh</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$217,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td><span>New York</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$345,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td><span>New York</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$675,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td><span>New York</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$106,450.00</span></td>
                        </tr>
                        <tr>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td><span>Sydney</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$85,600.00</span></td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td><span>London</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$1,200,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td><span>Edinburgh</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$92,575.00</span></td>
                        </tr>
                        <tr>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td><span>Singapore</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$357,650.00</span></td>
                        </tr>
                        <tr>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$206,850.00</span></td>
                        </tr>
                        <tr>
                            <td>Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$850,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td><span>Tokyo</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$163,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td><span>Sydney</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$95,400.00</span></td>
                        </tr>
                        <tr>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td><span>London</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$114,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td><span>London</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$145,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$235,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td><span>Edinburgh</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$324,050.00</span></td>
                        </tr>
                        <tr>
                            <td>Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$85,675.00</span></td>
                        </tr>
                        <tr>
                            <td>Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$164,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$109,850.00</span></td>
                        </tr>
                        <tr>
                            <td>Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$452,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td><span>London</span></td>
                            <td><span class="middleaged">37</span></td>
                            <td><span>$136,200.00</span></td>
                        </tr>
                        <tr>
                            <td>Jackson Bradshaw</td>
                            <td>Director</td>
                            <td><span>New York</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$645,750.00</span></td>
                        </tr>
                        <tr>
                            <td>Olivia Liang</td>
                            <td>Support Engineer</td>
                            <td><span>Singapore</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$234,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td><span>London</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$163,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Support Engineer</td>
                            <td><span>Tokyo</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$139,575.00</span></td>
                        </tr>
                        <tr>
                            <td>Thor Walton</td>
                            <td>Developer</td>
                            <td><span>New York</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$98,540.00</span></td>
                        </tr>
                        <tr>
                            <td>Finn Camacho</td>
                            <td>Support Engineer</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$87,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Serge Baldwin</td>
                            <td>Data Coordinator</td>
                            <td><span>Singapore</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$138,575.00</span></td>
                        </tr>
                        <tr>
                            <td>Zenaida Frank</td>
                            <td>Software Engineer</td>
                            <td><span>New York</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$125,250.00</span></td>
                        </tr>
                        <tr>
                            <td>Zorita Serrano</td>
                            <td>Software Engineer</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$115,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Jennifer Acosta</td>
                            <td>Junior Javascript Developer</td>
                            <td><span>Edinburgh</span></td>
                            <<td>Nigerian Shippers' Council</td>
                                <td><span>$75,650.00</span></td>
                        </tr>
                        <tr>
                            <td>Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td><span>New York</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$145,600.00</span></td>
                        </tr>
                        <tr>
                            <td>Hermione Butler</td>
                            <td>Regional Director</td>
                            <td><span>London</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$356,250.00</span></td>
                        </tr>
                        <tr>
                            <td>Lael Greer</td>
                            <td>Systems Administrator</td>
                            <td><span>London</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$103,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Jonas Alexander</td>
                            <td>Developer</td>
                            <td><span>San Francisco</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$86,500.00</span></td>
                        </tr>
                        <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td><span>Edinburgh</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$183,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td><span>Singapore</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$183,000.00</span></td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td><span>New York</span></td>
                            <td>Nigerian Shippers' Council</td>
                            <td><span>$112,000.00</span></td>
                        </tr> -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Sector</th>
                            <th>Stage</th>
                            <th>Sponsoring Agency</th>
                            <th>Value(Millions)</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>