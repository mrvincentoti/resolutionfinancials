<x-admin-layout>
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
             <p class="pl-10 text-xl flex items-center mb-5">
                <i class="fas fa-list mr-3"></i> {{strtoupper($project->project_title)}} Details
            </p>
            <div class="grid grid-cols-1 md:grid-cols-1 gap-3">
                @if (session('success'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <span class="font-medium">Success alert!</span> {{ session('success') }}
                    </div>
                @endif
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                <div class="grid gap-3">
                    <div>
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white ">
                            <div class="px-10 py-6">
                                <div class="font-bold text-xl mb-2">
                                    General Information
                                    <hr>
                                    <hr>
                                </div>
                                <div class="w-full bg-white mb-2">
                                    <img class="mb-5 mt-5" src="{{ asset($project->project_image) }}"/>
                                    <hr>
                                    <hr>
                                </div>
                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Name:</b></span> <span>{{$project->project_title}}</span></div>
                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Sector:</b></span> <span>{{$project->sector->name}}</span></div>
                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Phase:</b></span> <span>{{$project->phase->name}}</span></div>
                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Local Government:</b></span><span>{{$project->lga->name}}</span></div>
                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Value:</b></span><span>{{$project->value}}</span></div>
                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Last Update:</b></span><span>{{$project->last_update}}</span></div>
                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Supervising Authority:</b></span><span>{{$project->supervising_authority}}</span></div>

                                @if (empty($project->screening_report))
                                    <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>NO:</b></span>></div>
                                @else
                                    <div class="w-full bg-white mb-2">
                                        <span class="text-gray-700 text-xl"><b>Supervising Authority:</b></span>
                                        <a class="text-green" href="{{ asset($project->screening_report) }}" download>
                                            YES (Click to download)
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <!-- <div class="px-10 py-6">
                                <div class="font-bold text-xl mb-2">General Information</div>
                                <hr>
                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl">Title:</span>
                                    <span>{{$project->project_title}}</span></div>
                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl">Sector:</span>
                                    <span>{{$project->sector->name}}</span></div>
                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl">Phase:</span>
                                    <span>{{$project->phase->name}}</span></div>
                                <div class="w-full bg-white mb-2"><span
                                        class="text-gray-700 text-xl">Location:</span><span>{{$project->location}}</span></div>
                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl">Value:</span><span>{{$project->value}}</span>
                                </div>
                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl">Last
                                        Update:</span><span>{{$project->last_update}}</span></div>
                            </div> -->
                        </div>
                        <!--end-->
                    </div>
                    <div>
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <div class="px-10 py-6">
                                <div class="font-bold text-xl mb-2">Summary Documents</div>
                                <hr>
                                <!-- Start of Rows -->
                                <form method="POST" action="{{ route('admin.summary.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                                        <div class="mb-1">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                            <input type="text" id="title" value="{{ old('title') }}" name="title"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Title of the post" required>
                                        </div>
                                        <!-- <div class="mb-1">
                                            <label class="block text-sm text-gray-600" for="message">Image</label>
                                            <input type="file" id="myimage" name="image">
                                            <input type="hidden"  name="project_id" value="{{ $project->id}}">
                                        </div> -->
                                        <div class="file-input-wrapper mb-1">
                                            <button type="button"
                                                class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                Select Image
                                            </button>
                                            <input type="file" id="myimage" name="image" required>
                                            <input type="hidden" name="project_id" value="{{ $project->id}}">
                                        </div>
                                    </div>
                                    <!-- <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add</button> -->
                                    <button type="submit" id="add-row" class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded add-row-button w-full">
                                        Add Summary
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                    </div> -->
                </div>
                <div class="grid gap-3">
                    <div>
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <div class="px-10 py-6">
                                <div class="font-bold text-xl mb-2">Sponsoring Agency</div>
                                <hr>
                                <!-- Start of Rows -->
                                <div class="mt-4">
                                    <form method="POST" action="{{ route('admin.agency.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="grid gap-6 mb-6 md:grid-cols-1">
                                            <div class="mb-1">
                                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                                <input type="text" id="title" value="{{ old('title') }}" name="title"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Title of the post" required>
                                            </div>
                                            <!-- <div class="mb-1">
                                                <label class="block text-sm text-gray-600" for="message">Image</label>
                                                <input type="file" id="myimage" name="image">
                                                <input type="hidden"  name="project_id" value="{{ $project->id}}">
                                            </div> -->
                                            <div class="file-input-wrapper mb-1">
                                                <button type="button"
                                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                    Select Image
                                                </button>
                                                <input type="file" id="myimage" name="image" required>
                                                <input type="hidden" name="project_id" value="{{ $project->id}}">
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add</button> -->
                                        <button type="submit" id="add-row" class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded add-row-button w-full">
                                            Add Sponsor
                                        </button>
                                    </form>
                                </div>
                                <!-- End of Rows -->
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <div class="px-10 py-6">
                                <div class="font-bold text-xl mb-2">Project Milestone</div>
                                <hr>
                                <form method="POST" action="{{ route('admin.milestone.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                                        <div class="mb-1">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                            <input type="text" id="title" value="{{ old('title') }}" name="title"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Title of the post" required>
                                        </div>
                                        <div class="mb-1">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                            <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="description" name="description">{{ old('description') }}</textarea>
                                        </div>
                                        <!-- <div class="mb-1">
                                            <label class="block text-sm text-gray-600" for="message">Image</label>
                                            <input type="file" id="myimage" name="document">
                                            <input type="hidden" name="project_id" value="{{ $project->id}}">
                                        </div> -->
                                        <div class="mb-1">
                                            <label for="milestone_date"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Milestone Date</label>
                                            <input type="date" id="milestone_date" value="{{ old('milestone_date') }}" name="milestone_date"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Title of the post" required>
                                                <input type="hidden" name="project_id" value="{{ $project->id}}">
                                        </div>
                                    </div>
                                    <!-- <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add</button> -->
                                    <button type="submit" id="add-row"
                                        class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded add-row-button w-full">
                                        Add Milestone
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                     <div>
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <div class="px-10 py-6">
                                <div class="font-bold text-xl mb-2">Procurement Documents</div>
                                <hr>
                                <!-- Start of Rows -->
                                <form method="POST" action="{{ route('admin.procurement.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                                        <div class="mb-1">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Document Name</label>
                                            <input type="text" id="title" value="{{ old('document_name') }}" name="document_name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Name of the Document" required>
                                        </div>
                                        <!-- <div class="mb-1">
                                            <label class="block text-sm text-gray-600" for="message">Image</label>
                                            <input type="file" id="myimage" name="image">
                                            <input type="hidden"  name="project_id" value="{{ $project->id}}">
                                        </div> -->

                                        <div class="file-input-wrapper mb-1">
                                            <button type="button"
                                                class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                Select Image
                                            </button>
                                            <input type="file" id="myimage" name="image" required>
                                            <input type="hidden" name="project_id" value="{{ $project->id}}">
                                        </div>
                                    </div>
                                    <!-- <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add</button> -->
                                    <button type="submit" id="add-row" class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded add-row-button w-full">
                                        Add Procurement
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                    </div> -->
                </div>
                <div class="grid gap-3">

                    <div>
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <div class="px-10 py-6">
                                <div class="font-bold text-xl mb-2">Project Announcement</div>
                                <hr>
                                <!-- Start of Rows -->
                                <form method="POST" action="{{ route('admin.announcement.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                                        <div class="mb-1">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                            <input type="text" id="announcement_title" value="{{ old('title') }}" name="title"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Title of the post" required>
                                        </div>
                                        <div class="mb-1">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                                            <input type="text" id="slug" value="{{ old('slug') }}" name="slug"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Slug of the post" required>
                                        </div>
                                        <div class="mb-1">
                                            <label for="cat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Announcement Type</label>
                                            <select
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                id="selectType" name="announcement_type_id">
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- <div class="mb-1">
                                            <label class="block text-sm text-gray-600" for="message">Image</label>
                                            <input type="file" id="myimage" name="document">
                                            <input type="hidden" name="project_id" value="{{ $project->id}}">
                                        </div> -->
                                        <div class="file-input-wrapper mb-1">
                                            <button type="button"
                                                class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                Select Image
                                            </button>
                                            <input type="file" id="myimage" name="document" required>
                                            <input type="hidden" name="project_id" value="{{ $project->id}}">
                                        </div>
                                        <div class="mb-1">
                                            <label for="announcement_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Announcement Date</label>
                                            <input type="date" id="announcement_date" value="{{ old('announcement_date') }}" name="announcement_date"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Title of the post" required>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Performance Assesment</label>
                                            <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="content" name="content">{{ old('content') }}</textarea>
                                    </div>
                                    <!-- <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add</button> -->
                                    <button type="submit" id="add-row"
                                        class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded add-row-button w-full">
                                        Add Announcement
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <div class="px-10 py-6">
                                <div class="font-bold text-xl mb-2">Contract Information</div>
                                <hr>
                                <!-- Start of Rows -->
                                <form method="POST" action="{{ route('admin.contract.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                                        <!-- <div class="mb-1">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                            <input type="text" id="title" value="{{ old('title') }}" name="title"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Title of the post" required>
                                        </div> -->
                                        <div class="file-input-wrapper mb-1">
                                            <button type="button" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                Redacted PPP Agreement
                                            </button>
                                            <input type="file" id="redacted_ppp_agreement" name="redacted_ppp_agreement" required>
                                        </div>
                                        <div class="file-input-wrapper mb-1">
                                            <button type="button"
                                                class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                Financial Agreement
                                            </button>
                                            <input type="file" id="financial_structure" name="financial_structure" required>
                                        </div>
                                        <div class="file-input-wrapper mb-1">
                                            <button type="button"
                                                class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                               Risk
                                            </button>
                                            <input type="file" id="risk" name="risk" required>
                                        </div>
                                        <div class="file-input-wrapper mb-1">
                                            <button type="button"
                                                class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                Government Support
                                            </button>
                                            <input type="file" id="government_support" name="government_support" required>
                                        </div>
                                        <div class="file-input-wrapper mb-1">
                                            <button type="button"
                                                class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                Tariff
                                            </button>
                                            <input type="file" id="tariff" name="tariff" required>
                                        </div>
                                        <div class="file-input-wrapper mb-1">
                                            <button type="button"
                                                class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                Termination Provisions
                                            </button>
                                            <input type="file" id="termination_provisions" name="termination_provisions" required>
                                        </div>
                                        <div class="file-input-wrapper mb-1">
                                            <button type="button"
                                                class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                Renegotiations
                                            </button>
                                            <input type="file" id="renegotiations" name="renegotiations" required>
                                        </div>
                                        <hr/>
                                    </div>
                                    <input type="hidden" name="project_id" value="{{ $project->id }}">
                                    <button type="submit" id="add-row" class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded w-full">
                                        Add Contract Information
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <div class="px-10 py-6">
                                <div class="font-bold text-xl mb-2">Performance Information</div>
                                <hr>
                                <!-- Start of Rows -->
                                <form method="POST" action="{{ route('admin.performance.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                                        <div class="mb-1">
                                            <label for="kpi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Key Performance Indicators</label>
                                            <input type="text" id="kpi" value="{{ old('key_performance_indicators') }}" name="key_performance_indicators"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Key Performance Indicators" required>
                                        </div>
                                        <div class="mb-1">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Performance Failures</label>
                                            <input type="text" id="title" value="{{ old('performance_failures') }}" name="performance_failures"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Performance Failures" required>
                                        </div>
                                        <div class="mb-1">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Performance Assesment</label>
                                            <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="description" name="performance_assessment">{{ old('performance_assessment') }}</textarea>
                                        </div>
                                        <input type="hidden" name="project_id" value="{{ $project->id}}">
                                        <!-- <div class="mb-1">
                                            <label class="block text-sm text-gray-600" for="message">Image</label>
                                            <input type="file" id="myimage" name="document">
                                            <input type="hidden" name="project_id" value="{{ $project->id}}">
                                        </div> -->
                                    </div>
                                    <!-- <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add</button> -->
                                    <button type="submit" id="add-row"
                                        class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded add-row-button w-full">
                                        Add Performance
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                    </div> -->
                </div>
                <!-- <div class="grid gap-3">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                    </div>
                </div> -->
            </div>

        </main>
    </div>
</x-admin-layout>
