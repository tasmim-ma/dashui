<div class="max-w-screen-xl w-full align-bottom bg-white rounded-lg pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle">
    <div class="px-4 py-4 sm:px-6 lg:px-8">
        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
            {{ $icon??'' }}
        </div>
        <div class="mt-3 text-center sm:mt-5">
            <h3 class="text-lg leading-6 font-bold text-gray-900" id="modal-headline">
                {{ $heading??'' }}
            </h3>
            <div class="mt-2">
                <p class="text-sm text-gray-500">
                    {{ $slot }}
                </p>
            </div>
        </div>
    </div>
</div>
