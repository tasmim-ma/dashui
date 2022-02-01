<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <div class="mb-4 border-b border-gray-200">
        <div class="pb-8 sm:flex sm:items-center sm:justify-between">
            <div class="flex-1 min-w-0">
                <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl">
                    {{ $title }}
                </h1>
            </div>
            @if($action)
                <div class="mt-4 flex sm:mt-0 sm:ml-4">
                    <a href="{{ $action }}" class="btn">
                        {{ $button }}
                    </a>
                </div>
            @endif
        </div>
    </div>
    <x-dashui-alert/>
    <x-dashui-message/>
    <div class="-mx-4 sm:-mx-6 lg:-mx-8 h-full">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </div>
</div>
