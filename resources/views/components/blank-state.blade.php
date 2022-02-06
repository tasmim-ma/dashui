<div class="overflow-hidden pb-4 w-full max-w-screen-xl text-left align-bottom bg-white rounded-lg shadow-xl transition-all transform sm:my-8 sm:align-middle">
    <div class="px-4 py-4 sm:px-6 lg:px-8">
        <div class="flex justify-center items-center mx-auto w-12 h-12 bg-green-100 rounded-full">
            {{ $slot }}
        </div>
        <div class="mt-3 text-center sm:mt-5">
            <h3 class="text-lg font-bold leading-6 text-gray-900" id="modal-headline">
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
