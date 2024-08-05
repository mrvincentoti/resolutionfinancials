<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">Add Project</h1>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Project Details
                </p>
                <form method="POST" action="{{ route('admin.project.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="mb-1">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" id="project_title" value="{{ old('project_title') }}" name="project_title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Title of the post" required>
                        </div>
                        <div class="mb-1">
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Image</label>
                            <input type="file" id="project_image" value="{{ old('project_image') }}" name="project_image"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Project Image" required>
                        </div>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="mb-1">
                            <label for="cat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sector</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="selectType" name="sector_id">
                                @foreach ($sectors as $sector)
                                    <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="cat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phase</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="selectType" name="phase_id">
                                @foreach ($phases as $phase)
                                    <option value="{{ $phase->id }}">{{ $phase->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="mb-1">
                            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                            <input type="text" id="slug" value="{{ old('slug') }}" name="slug"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="ex: bla bla bla">
                        </div>
                        <!-- <div class="mb-1">
                                <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                                <input type="text" id="location" value="{{ old('location') }}" name="location"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="ex: bla bla bla">
                        </div> -->
                        <div class="mb-1">
                            <label for="cat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="selectType" name="lga_id">
                                <option>Select Lga</option>
                                @foreach ($lgas as $lga)
                                    <option value="{{ $lga->id }}">{{ $lga->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="value" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Value</label>
                            <input type="text" id="value" value="{{ old('value') }}" name="value"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="ex: bla bla bla">
                        </div>
                        <div class="mb-1">
                            <label for="last_update" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Update</label>
                            <input type="date" id="last_update" value="{{ old('last_update') }}" name="last_update"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="ex: bla bla bla">
                        </div>
                        <div class="mb-1">
                            <label for="supervising_authority" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supervising
                                Authority</label>
                            <input type="text" id="supervising_authority" value="{{ old('supervising_authority') }}"
                                name="supervising_authority"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="ex: bla bla bla">
                        </div>
                        <div class="mb-1">
                            <label for="screening_report" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PPP and Climate
                                Screening Report</label>
                            <input type="file" id="screening_report" value="{{ old('screening_report') }}" name="screening_report"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Screening Report">
                        </div>
                     </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                        <div class="mb-2">
                            <label class="block text-sm text-gray-600" for="message">Project Need</label>
                            <textarea
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="project_need" name="project_need" required>{{ old('project_need') }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm text-gray-600" for="message">Description Of Asset</label>
                            <textarea
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="description_of_asset" name="description_of_asset">{{ old('description_of_asset') }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm text-gray-600" for="message">Description Of Service</label>
                            <textarea
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="description_of_service" name="description_of_service">{{ old('description_of_service') }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm text-gray-600" for="message">Rationale for Selection of PPP Model</label>
                            <textarea id="rationale_for_selection" name="rationale_for_selection"
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('rationale_for_selection') }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm text-gray-600" for="message">Stakeholders Consultation</label>
                            <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="stakeholder_consultations" name="stakeholder_consultations"> {{ old('stakeholder_consultations') }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add Project</button>
                </form>
            </div>
        </main>
    </div>

</x-admin-layout>
