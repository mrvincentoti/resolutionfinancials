<x-admin-layout>
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="w-full text-3xl text-black pb-6">Edit Contract Information</h1>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Contract Details
                </p>
                <form method="POST" action="{{ route('admin.contract.update', $contract->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                        <!-- File Input Fields -->
                        @php
                            $fileFields = [
                                'redacted_ppp_agreement' => 'Redacted PPP Agreement',
                                'financial_structure' => 'Financial Agreement',
                                'risk' => 'Risk',
                                'government_support' => 'Government Support',
                                'tariff' => 'Tariff',
                                'termination_provisions' => 'Termination Provisions',
                                'renegotiations' => 'Renegotiations'
                            ];
                        @endphp

                        @foreach($fileFields as $field => $label)
                            <div class="file-input-wrapper mb-1">
                                <button type="button" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full text-center">
                                    {{ $label }}
                                </button>
                                <input type="file" id="{{ $field }}" name="{{ $field }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($contract->$field)
                                    <div class="mt-2">
                                        <a href="{{ asset('storage/' . $contract->$field) }}" target="_blank" class="text-blue-500">
                                            View Current {{ $label }}
                                        </a>
                                    </div>
                                @endif
                            </div>
                        @endforeach

                        <input type="hidden" name="project_id" value="{{ $contract->project_id }}">
                    </div>
                    <button type="submit" class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded w-full">
                        Update Contract Information
                    </button>
                </form>
            </div>
        </main>
    </div>
</x-admin-layout>
