<x-admin-layout>

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="w-full mt-12">
                <form action="#" class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                    <div class="mx-auto max-w-6xl">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Request Details</h2>
                        <div class="mt-4 space-y-6">
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white">Personal Information</h4>
                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-gray-500 dark:text-gray-400">First Name</dt>
                                        <dd class="text-base font-medium text-gray-900 dark:text-white">John</dd>
                                    </dl>

                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-gray-500 dark:text-gray-400">Last Name</dt>
                                        <dd class="text-base font-medium text-green-500">Doe</dd>
                                    </dl>

                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-gray-500 dark:text-gray-400">Gender</dt>
                                        <dd class="text-base font-medium text-gray-900 dark:text-white">M</dd>
                                    </dl>

                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-gray-500 dark:text-gray-400">Email</dt>
                                        <dd class="text-base font-medium text-gray-900 dark:text-white">test@demo.com</dd>
                                    </dl>

                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-gray-500 dark:text-gray-400">Phone</dt>
                                        <dd class="text-base font-medium text-gray-900 dark:text-white">+234 809 4540 1606</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 space-y-4 border-b border-t border-gray-200 py-8 dark:border-gray-700 sm:mt-8">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Address</h4>

                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-medium text-gray-900 dark:text-white">House Number</dt>
                                <dd class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">3454</dd>
                            </dl>
                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-medium text-gray-900 dark:text-white">Street</dt>
                                <dd class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">Scott Street</dd>
                            </dl>
                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-medium text-gray-900 dark:text-white">State</dt>
                                <dd class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">Cross River</dd>
                            </dl>
                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-medium text-gray-900 dark:text-white">LGA</dt>
                                <dd class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">Bwari</dd>
                            </dl>
                        </div>

                        <div class="mt-6 sm:mt-8">
                            <div class="relative overflow-x-auto border-b border-gray-200 dark:border-gray-800">
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Document</h4>

                                <div class="grid grid-cols-6 gap-6">
                                    @if($request->account_statement)
                                        <div>
                                            <a href="{{ asset($request->account_statement) }}" target="_blank">
                                                <figure class="max-w-lg">
                                                    <img class="h-auto max-w-full rounded-lg" src="{{ asset($request->account_statement)}}" alt="Account Statement">
                                                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Account Statement</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                    @endif

                                    @if($request->work_id)
                                        <div>
                                            <a href="{{ asset($request->work_id) }}" target="_blank">
                                                <figure class="max-w-lg">
                                                    <img class="h-auto max-w-full rounded-lg" src="{{ asset($request->work_id)}}" alt="Work ID">
                                                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Work ID</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                    @endif

                                    @if($request->employment_letter)
                                        <div>
                                            <a href="{{ asset($request->employment_letter) }}" target="_blank">
                                                <figure class="max-w-lg">
                                                    <img class="h-auto max-w-full rounded-lg" src="{{ asset($request->employment_letter)}}" alt="Employment Letter">
                                                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Employment Letter</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                    @endif

                                    @if($request->passport)
                                        <div>
                                            <a href="{{ asset($request->passport) }}" target="_blank">
                                                <figure class="max-w-lg">
                                                    <img class="h-auto max-w-full rounded-lg" src="{{ asset($request->passport)}}" alt="Passport">
                                                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Passport</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                    @endif

                                    @if($request->application_form)
                                        <div>
                                            <a href="{{ asset($request->application_form) }}" target="_blank">
                                                <figure class="max-w-lg">
                                                    <img class="h-auto max-w-full rounded-lg" src="{{ asset($request->application_form)}}" alt="Application Form">
                                                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Application Form</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                    @endif

                                    @if($request->utility_bill)
                                        <div>
                                            <a href="{{ asset($request->utility_bill) }}" target="_blank">
                                                <figure class="max-w-lg">
                                                    <img class="h-auto max-w-full rounded-lg" src="{{ asset($request->utility_bill)}}" alt="Utility Bill">
                                                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Utility Bill</figcaption>
                                                </figure>
                                            </a>
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
</x-admin-layout>
