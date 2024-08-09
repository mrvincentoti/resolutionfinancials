{{-- @extends('admin.layouts.admin') --}}

{{-- @section('content') --}}
<x-admin-layout>
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <p class="pl-10 text-xl flex items-center">
                <i class="fas fa-list mr-3"></i> Statistics
            </p>
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-6">

                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white ">
                    <div class="px-10 py-6">
                        <div class="font-bold text-xl mb-2 text-center">Total Projects</div>
                        <p class="text-gray-700 text-5xl text-center">
                            {{ $projects }}
                        </p>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white ">
                    <div class="px-10 py-6">
                        <div class="font-bold text-xl mb-2 text-center">Preparation</div>
                        <p class="text-gray-700 text-5xl text-center">
                            {{ $prep_projects }}
                        </p>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white ">
                    <div class="px-10 py-6">
                        <div class="font-bold text-xl mb-2 text-center">Procurement</div>
                        <p class="text-gray-700 text-5xl text-center">
                            {{ $pro_projects }}
                        </p>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white ">
                    <div class="px-10 py-6">
                        <div class="font-bold text-xl mb-2 text-center">Implementation</div>
                        <p class="text-gray-700 text-5xl text-center">
                            {{ $imp_projects }}
                        </p>
                    </div>
                </div>

                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white ">
                    <div class="px-10 py-6">
                        <div class="font-bold text-xl mb-2 text-center">Development</div>
                        <p class="text-gray-700 text-5xl text-center">
                            {{ $dev_projects }}
                        </p>
                    </div>
                </div>

            </div>
        </main>
    </div>

</x-admin-layout>

{{-- @endsection --}}
