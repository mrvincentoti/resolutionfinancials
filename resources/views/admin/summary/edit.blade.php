<x-admin-layout>
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">Edit Summary Document</h1>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Summary Document Details
                </p>
                <form method="POST" action="{{ route('admin.summary.update', $summary->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                        <div class="mb-1">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" id="title" value="{{ $summary->title }}" name="title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Title of the summary document" required>
                        </div>
                        <div class="file-input-wrapper mb-1">
                            <button type="button"
                                class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                Select Image
                            </button>
                            <input type="file" id="myimage" name="image">
                        </div>
                        <div class="mb-1">
                            <label for="existing_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Existing Image</label>
                            <div>
                                <img src="{{ asset('storage/' . $summary->image) }}" alt="{{ $summary->title }}" class="w-32 h-32 object-cover">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded w-full">
                        Update Summary Document
                    </button>
                </form>
            </div>
        </main>
    </div>
</x-admin-layout>
