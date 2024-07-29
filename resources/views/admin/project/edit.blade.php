<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">Add Project</h1>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Project Details
                </p>
                <form method="POST" action="{{ route('admin.project.update', $project->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                        <div class="mb-1">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" id="project_title" value="{{ $project->project_title }}"
                                name="project_title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Title of the post" required>
                        </div>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="mb-1">
                            <label for="cat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sector</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="selectType" name="sector_id">
                                @foreach ($sectors as $sector)
                                    <option value="{{ $sector->id }}" {{ $project->sector->name == "$sector->name" ? 'selected' : ''}}>{{ $sector->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="cat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phase</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="selectType" name="phase_id">
                                @foreach ($phases as $phase)
                                    <option value="{{ $phase->id }}" {{ $project->phase->name == "$phase->name" ? 'selected' : ''}}>{{ $phase->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="mb-1">
                            <label for="slug"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                            <input type="text" id="slug" value="{{ $project->slug }}" name="slug"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="ex: bla bla bla">
                        </div>
                        <div class="mb-1">
                            <label for="location"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                            <input type="text" id="location" value="{{ $project->location }}" name="location"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="ex: bla bla bla">
                        </div>
                        <div class="mb-1">
                            <label for="value"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Value</label>
                            <input type="text" id="value" value="{{ $project->value }}" name="value"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="ex: bla bla bla">
                        </div>
                        <div class="mb-1">
                            <label for="last_update"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Update</label>
                            <input type="text" id="last_update" value="{{ $project->last_update }}" name="last_update"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="ex: bla bla bla">
                        </div>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                        <div class="mb-2">
                            <label class="block text-sm text-gray-600" for="message">Project Need</label>
                            <textarea
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="project_need" name="project_need">{{ $project->project_need }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm text-gray-600" for="message">Description Of Asset</label>
                            <textarea
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="description_of_asset"
                                name="description_of_asset">{{ $project->description_of_asset }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm text-gray-600" for="message">Description Of Service</label>
                            <textarea
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="description_of_service"
                                name="description_of_service">{{ $project->description_of_service }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm text-gray-600" for="message">Rationale for Selection of PPP
                                Model</label>
                            <textarea name="rationale_for_selection" id="rationale_for_selection"
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $project->rationale_for_selection }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label class="block text-sm text-gray-600" for="message">Stakeholders Consultation</label>
                            <textarea
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="stakeholder_consultations"
                                name="stakeholder_consultations"> {{ $project->stakeholder_consultations }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="px-4 py-1 text-white font-light tracking-wider bg-blue-600 rounded">Add
                        Project</button>
                </form>
            </div>
        </main>
    </div>

</x-admin-layout>