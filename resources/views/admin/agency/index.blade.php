{{--<x-admin-layout>--}}

{{--    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">--}}
{{--        <main class="w-full flex-grow p-6">--}}
{{--            <h1 class="w-full text-3xl text-black pb-6">Sponsoring Agency</h1>--}}

{{--            <div class="w-full mt-12">--}}
{{--                <p class="text-xl pb-3 flex items-center">--}}
{{--                    <i class="fas fa-list mr-3"></i> Sponsoring Agency Records--}}
{{--                </p>--}}
{{--                <!-- @can('create', 'App\Models\SponsoringAgency')--}}
{{--                    <button class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded mb-2"--}}
{{--                        onclick="location.href='{{ route('admin.agency.create') }}';">Add Sponsoring Agency</button>--}}
{{--                @endcan -->--}}
{{--                <div class="bg-white overflow-auto">--}}
{{--                    <table class="text-left w-full border-collapse">--}}
{{--                        <thead>--}}
{{--                            <tr>--}}
{{--                                <th--}}
{{--                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">--}}
{{--                                    ID</th>--}}
{{--                                <th--}}
{{--                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">--}}
{{--                                    Title</th>--}}
{{--                                <!-- <th--}}
{{--                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">--}}
{{--                                    Short Description</th>--}}
{{--                                <th--}}
{{--                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">--}}
{{--                                    Long Description</th> -->--}}
{{--                                 <!-- <th--}}
{{--                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">--}}
{{--                                    Views</th> -->--}}
{{--                                <!-- <th--}}
{{--                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">--}}
{{--                                    Added by</th> -->--}}
{{--                                <th--}}
{{--                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">--}}
{{--                                    Manage</th>--}}
{{--                            </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                            @foreach ($agencies as $agency)--}}
{{--                                <tr class="hover:bg-grey-lighter">--}}
{{--                                    <td class="py-4 px-6 border-b border-grey-light">{{ $agency->id }}</td>--}}
{{--                                    <td class="py-4 px-6 border-b border-grey-light">{{ $agency->title }}</td>       --}}
{{--                                    <td class="py-4 px-6 border-b border-grey-light">--}}
{{--                                        @can('update', $agency)--}}
{{--                                            <button--}}
{{--                                                class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded"--}}
{{--                                                type="button"--}}
{{--                                                onclick="location.href='{{ route('admin.agency.edit', $agency->id) }}';">Edit</button>--}}
{{--                                        @endcan--}}
{{--                                        @can('delete', $agency)--}}
{{--                                            <form type="submit" method="POST" style="display: inline"--}}
{{--                                                action="{{ route('admin.agency.destroy', $agency->id) }}"--}}
{{--                                                onsubmit="return confirm('Are you sure?')">--}}
{{--                                                @csrf--}}
{{--                                                @method('DELETE')--}}
{{--                                                <button--}}
{{--                                                    class="px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded"--}}
{{--                                                    type="submit">Delete</button>--}}
{{--                                            </form>--}}
{{--                                        @endcan--}}


{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--                {!! $agencies->links() !!}--}}
{{--        </main>--}}
{{--    </div>--}}
{{--</x-admin-layout>--}}




<x-admin-layout>
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <p class="pl-10 text-xl flex items-center mb-5">
                <i class="fas fa-list mr-3"></i> About RFL
            </p>
{{--            <div class="grid grid-cols-1 md:grid-cols-1 gap-3">--}}
{{--                @if (session('success'))--}}
{{--                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">--}}
{{--                        <span class="font-medium">Success alert!</span> {{ session('success') }}--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            </div>--}}
            <div class="grid grid-cols-6 md:grid-cols-3 gap-6">
                <div class="grid gap-3">
{{--                    <div>--}}
{{--                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white ">--}}
{{--                            <div class="px-10 py-6">--}}
{{--                                <div class="font-bold text-xl mb-2">--}}
{{--                                    General Information--}}
{{--                                    <hr>--}}
{{--                                    <hr>--}}
{{--                                </div>--}}
{{--                                <div class="w-full bg-white mb-2">--}}
{{--                                    <img class="mb-5 mt-5" src=""/>--}}
{{--                                    <hr>--}}
{{--                                    <hr>--}}
{{--                                </div>--}}
{{--                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Name:</b></span> <span>Test</span></div>--}}
{{--                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Sector:</b></span> <span>Test</span></div>--}}
{{--                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Phase:</b></span> <span>Test</span></div>--}}
{{--                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Local Government:</b></span><span>Test</span></div>--}}
{{--                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Value:</b></span><span>Test</span></div>--}}
{{--                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Last Update:</b></span><span>Test</span></div>--}}
{{--                                <div class="w-full bg-white mb-2"><span class="text-gray-700 text-xl"><b>Supervising Authority:</b></span><span>Test</span></div>--}}


{{--                                    <div class="w-full bg-white mb-2">--}}
{{--                                        <span class="text-gray-700 text-xl"><b>Supervising Authority:</b></span>--}}
{{--                                        <a class="text-green" href="" download>--}}
{{--                                            YES (Click to download)--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
                    <div>
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <div class="px-10 py-6">
                                <div class="font-bold text-xl mb-2">About Us</div>
                                <hr>
                                <!-- Start of Rows -->
                                <form method="POST" action="{{ route('admin.agency.update', $about->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                                        <div class="mb-1">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                            <input type="text" id="title" value="{{ $about->title}}" name="title"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Title of the post" required>
                                        </div>
                                        <div class="mb-1">
                                            <label for="years_of_experience" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Years Of Experience</label>
                                            <input type="number" id="years_of_experience" value="{{ $about->years_of_experience}}" name="years_of_experience"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Years Of Experience" required>
                                        </div>

                                        <div class="mb-1">
                                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                                            <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="content" name="content">{{ $about->content }}</textarea>
                                        </div>

                                        <div class="file-input-wrapper mb-1">
                                            <button type="button"
                                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                Large Image
                                            </button>
                                            <input type="file" id="myimage" name="limage">
                                            <input type="hidden" name="project_id" value="1">
                                        </div>
                                        <div class="file-input-wrapper mb-1">
                                            <button type="button"
                                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                Small Image
                                            </button>
                                            <input type="file" id="myimage" name="simage">
                                            <input type="hidden" name="project_id" value="4">
                                        </div>
                                    </div>
                                    <!-- <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add</button> -->
                                    <button type="submit" id="add-row" class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded add-row-button w-full">
                                        Add
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
                                <div class="font-bold text-xl mb-2">Why Choose Us</div>
                                <hr>
                                <!-- Start of Rows -->
                                <div class="mt-4">
                                    <form method="POST" action="{{ route('admin.procurement.update', $choose->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="grid gap-6 mb-6 md:grid-cols-1">
                                            <div class="mb-1">
                                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                                <input type="text" id="title" value="{{ $choose->title }}" name="title"
                                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                       placeholder="Title of the post" required>
                                            </div>
                                            <div class="mb-1">
                                                <label for="document_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                                                <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="document_name" name="document_name">{{ $choose->document_name }}</textarea>
                                            </div>

                                            <div class="file-input-wrapper mb-1">
                                                <button type="button"
                                                        class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                    Image 1
                                                </button>
                                                <input type="file" id="myimage" name="image1">
                                                <input type="hidden" name="project_id" value="1">
                                            </div>
                                            <div class="file-input-wrapper mb-1">
                                                <button type="button"
                                                        class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                    Image 2
                                                </button>
                                                <input type="file" id="myimage" name="image2">
                                                <input type="hidden" name="project_id" value="4">
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add</button> -->
                                        <button type="submit" id="add-row" class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded add-row-button w-full">
                                            Add
                                        </button>
                                    </form>
                                </div>
                                <!-- End of Rows -->
                            </div>
                        </div>
                    </div>
{{--                    <div>--}}
{{--                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">--}}
{{--                            <div class="px-10 py-6">--}}
{{--                                <div class="font-bold text-xl mb-2">Project Milestone</div>--}}
{{--                                <hr>--}}
{{--                                <form method="POST" action="{{ route('admin.milestone.store') }}" enctype="multipart/form-data">--}}
{{--                                    @csrf--}}
{{--                                    <div class="grid gap-6 mb-6 md:grid-cols-1">--}}
{{--                                        <div class="mb-1">--}}
{{--                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>--}}
{{--                                            <input type="text" id="title" value="{{ old('title') }}" name="title"--}}
{{--                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
{{--                                                   placeholder="Title of the post" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-1">--}}
{{--                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>--}}
{{--                                            <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="description" name="description">{{ old('description') }}</textarea>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-1">--}}
{{--                                            <label for="milestone_date"--}}
{{--                                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Milestone Date</label>--}}
{{--                                            <input type="date" id="milestone_date" value="{{ old('milestone_date') }}" name="milestone_date"--}}
{{--                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
{{--                                                   placeholder="Title of the post" required>--}}
{{--                                            <input type="hidden" name="project_id" value="1">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add</button> -->--}}
{{--                                    <button type="submit" id="add-row"--}}
{{--                                            class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded add-row-button w-full">--}}
{{--                                        Add Milestone--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">--}}
{{--                            <div class="px-10 py-6">--}}
{{--                                <div class="font-bold text-xl mb-2">Procurement Documents</div>--}}
{{--                                <hr>--}}
{{--                                <!-- Start of Rows -->--}}
{{--                                <form method="POST" action="{{ route('admin.procurement.store') }}" enctype="multipart/form-data">--}}
{{--                                    @csrf--}}
{{--                                    <div class="grid gap-6 mb-6 md:grid-cols-1">--}}
{{--                                        <div class="mb-1">--}}
{{--                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Document Name</label>--}}
{{--                                            <input type="text" id="title" value="{{ old('document_name') }}" name="document_name"--}}
{{--                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
{{--                                                   placeholder="Name of the Document" required>--}}
{{--                                        </div>--}}


{{--                                        <div class="file-input-wrapper mb-1">--}}
{{--                                            <button type="button"--}}
{{--                                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">--}}
{{--                                                Select Image--}}
{{--                                            </button>--}}
{{--                                            <input type="file" id="myimage" name="image" required>--}}
{{--                                            <input type="hidden" name="project_id" value="1">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add</button> -->--}}
{{--                                    <button type="submit" id="add-row" class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded add-row-button w-full">--}}
{{--                                        Add Procurement--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
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
                                <div class="font-bold text-xl mb-2">Loan Reason</div>
                                <hr>
                                <!-- Start of Rows -->
                                <form method="POST" action="{{ route('admin.milestone.update', $reason->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                                        <div class="mb-1">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                            <input type="text" id="announcement_title" value="{{ $reason->title }}" name="title"
                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                   placeholder="Title of the post" required>
                                        </div>
                                        <div class="mb-1">
                                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reason 1</label>
                                            <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="description1" name="description1">{{ $reason->description1 }}</textarea>
                                        </div>
                                        <div class="mb-1">
                                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reason 2</label>
                                            <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="description2" name="description2">{{ $reason->description2 }}</textarea>
                                        </div>
                                        <div class="mb-1">
                                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reason 3</label>
                                            <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="description3" name="description3">{{ $reason->description3 }}</textarea>
                                        </div>

                                        <div class="file-input-wrapper mb-1">
                                            <button type="button"
                                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                                Select Image
                                            </button>
                                            <input type="file" id="myimage" name="image" required>
                                            <input type="hidden" name="project_id" value="4">
                                        </div>
                                    </div>
                                    <!-- <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add</button> -->
                                    <button type="submit" id="add-row"
                                            class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded add-row-button w-full">
                                        Add
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
{{--                    <div>--}}
{{--                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">--}}
{{--                            <div class="px-10 py-6">--}}
{{--                                <div class="font-bold text-xl mb-2">Contract Information</div>--}}
{{--                                <hr>--}}

{{--                                <form method="POST" action="{{ route('admin.contract.store') }}" enctype="multipart/form-data">--}}
{{--                                    @csrf--}}
{{--                                    <div class="grid gap-6 mb-6 md:grid-cols-1">--}}
{{--                                        <div class="file-input-wrapper mb-1">--}}
{{--                                            <button type="button" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">--}}
{{--                                                Redacted PPP Agreement--}}
{{--                                            </button>--}}
{{--                                            <input type="file" id="redacted_ppp_agreement" name="redacted_ppp_agreement" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="file-input-wrapper mb-1">--}}
{{--                                            <button type="button"--}}
{{--                                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">--}}
{{--                                                Financial Agreement--}}
{{--                                            </button>--}}
{{--                                            <input type="file" id="financial_structure" name="financial_structure" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="file-input-wrapper mb-1">--}}
{{--                                            <button type="button"--}}
{{--                                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">--}}
{{--                                                Risk--}}
{{--                                            </button>--}}
{{--                                            <input type="file" id="risk" name="risk" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="file-input-wrapper mb-1">--}}
{{--                                            <button type="button"--}}
{{--                                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">--}}
{{--                                                Government Support--}}
{{--                                            </button>--}}
{{--                                            <input type="file" id="government_support" name="government_support" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="file-input-wrapper mb-1">--}}
{{--                                            <button type="button"--}}
{{--                                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">--}}
{{--                                                Tariff--}}
{{--                                            </button>--}}
{{--                                            <input type="file" id="tariff" name="tariff" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="file-input-wrapper mb-1">--}}
{{--                                            <button type="button"--}}
{{--                                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">--}}
{{--                                                Termination Provisions--}}
{{--                                            </button>--}}
{{--                                            <input type="file" id="termination_provisions" name="termination_provisions" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="file-input-wrapper mb-1">--}}
{{--                                            <button type="button"--}}
{{--                                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">--}}
{{--                                                Renegotiations--}}
{{--                                            </button>--}}
{{--                                            <input type="file" id="renegotiations" name="renegotiations" required>--}}
{{--                                        </div>--}}
{{--                                        <hr/>--}}
{{--                                    </div>--}}
{{--                                    <input type="hidden" name="project_id" value="1">--}}
{{--                                    <button type="submit" id="add-row" class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded w-full">--}}
{{--                                        Add Contract Information--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">--}}
{{--                            <div class="px-10 py-6">--}}
{{--                                <div class="font-bold text-xl mb-2">Performance Information</div>--}}
{{--                                <hr>--}}
{{--                                <!-- Start of Rows -->--}}
{{--                                <form method="POST" action="{{ route('admin.performance.store') }}" enctype="multipart/form-data">--}}
{{--                                    @csrf--}}
{{--                                    <div class="grid gap-6 mb-6 md:grid-cols-1">--}}
{{--                                        <div class="mb-1">--}}
{{--                                            <label for="kpi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Key Performance Indicators</label>--}}
{{--                                            <input type="text" id="kpi" value="{{ old('key_performance_indicators') }}" name="key_performance_indicators"--}}
{{--                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
{{--                                                   placeholder="Key Performance Indicators" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-1">--}}
{{--                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Performance Failures</label>--}}
{{--                                            <input type="text" id="title" value="{{ old('performance_failures') }}" name="performance_failures"--}}
{{--                                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
{{--                                                   placeholder="Performance Failures" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-1">--}}
{{--                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Performance Assesment</label>--}}
{{--                                            <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="description" name="performance_assessment">{{ old('performance_assessment') }}</textarea>--}}
{{--                                        </div>--}}
{{--                                        <input type="hidden" name="project_id" value="1">--}}
{{--                                    </div>--}}
{{--                                    <!-- <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add</button> -->--}}
{{--                                    <button type="submit" id="add-row"--}}
{{--                                            class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded add-row-button w-full">--}}
{{--                                        Add Performance--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
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
