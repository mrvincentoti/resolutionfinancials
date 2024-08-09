<x-admin-layout>
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">Edit Announcement</h1>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Announcement Details
                </p>
                <form method="POST" action="{{ route('admin.announcement.update', $announcement->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                        <div class="mb-1">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" id="announcement_title" value="{{ old('title', $announcement->title) }}" name="title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Title of the announcement document" required>
                        </div>
                        <div class="mb-1">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                            <input type="text" id="slug" value="{{ old('slug', $announcement->slug) }}" name="slug"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Slug of the announcement document" required readonly>
                        </div>
                        <div class="mb-1">
                            <label for="announcement_type_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Announcement Type</label>
                            <select id="announcement_type_id" name="announcement_type_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}" {{ $type->id == old('announcement_type_id', $announcement->announcement_type_id) ? 'selected' : '' }}>
                                        {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="document"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Document</label>
                            <div class="file-input-wrapper">
                                <button type="button"
                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                    Select Document
                                </button>
                                <input type="file" id="document" name="document"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <input type="hidden" name="project_id" value="{{ $announcement->project_id }}">
                            </div>
                            @if($announcement->document)
                                <div class="mt-2">
                                    <a href="{{ asset($announcement->document) }}" target="_blank" class="text-blue-500">
                                        View Current Document
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="mb-1">
                            <label for="announcement_date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Announcement Date</label>
                            <input type="date" id="announcement_date" value="{{ old('announcement_date', $announcement->announcement_date) }}" name="announcement_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <div class="mb-1">
                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                            <textarea class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="content" name="content">{{ old('content', $announcement->content) }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded w-full">
                        Update Announcement Document
                    </button>
                </form>
            </div>
        </main>
    </div>
</x-admin-layout>
