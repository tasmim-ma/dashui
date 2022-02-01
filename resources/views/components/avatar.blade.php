<div class="flex items-center">
    @if($image)
        <img src="{{ $image }}" alt="image" class="h-10 w-10 object-cover rounded-full">
    @else
        <div class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-primary-600">
            <div class="text-sm font-bold leading-none text-white">
                {{ strtoupper(substr($name, 0,2)) }}
            </div>
        </div>
    @endif
    <div class="ml-4">
        <a href="{{ route('admin::users.show', $id) }}" class="text-sm font-medium">
            <span class=" text-gray-900">{{ ucwords($name) }}</span>
        </a>
        <div class="text-sm text-gray-500 underline">
            <a href="mailto:{{ $email }}">{{ $email }}</a>
        </div>
    </div>
</div>
