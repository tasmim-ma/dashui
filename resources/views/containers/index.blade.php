<div class="px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="mb-4 border-b border-gray-200">
        <div class="pb-8 sm:flex sm:items-center sm:justify-between">
            <div class="flex-1 min-w-0">
                <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl">
                    {{ $title }}
                </h1>
            </div>
            @if($action)
                <div class="flex mt-4 sm:mt-0 sm:ml-4">
                    <a href="{{ $action }}" class="btn">
                        {{ $button }}
                    </a>
                </div>
            @endif
        </div>
    </div>
    <x-dashui-alert/>
    <x-dashui-message/>
    <div class="-mx-4 h-full sm:-mx-6 lg:-mx-8">
        <div class="inline-block py-2 min-w-full align-middle sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </div>
</div>
