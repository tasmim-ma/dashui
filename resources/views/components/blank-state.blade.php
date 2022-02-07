<div class="overflow-hidden pb-4 w-full max-w-screen-xl text-left align-bottom bg-white rounded-lg shadow sm:my-8 sm:align-middle {{ $class }}">
    <div class="px-4 py-4 sm:px-6 lg:px-8">
        <div class="flex justify-center items-center mx-auto w-12 h-12 rounded-lg bg-primary-500">
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                {{ $slot }}
            </svg>
        </div>
        <div class="mt-3 text-center sm:mt-5">
            <h3 class="text-lg font-bold leading-6 text-gray-900">
                {{ $title }}
            </h3>
            <div class="mt-2">
                <p class="text-sm text-gray-500">
                    {{ $message }}
                </p>
            </div>
        </div>
    </div>
</div>
