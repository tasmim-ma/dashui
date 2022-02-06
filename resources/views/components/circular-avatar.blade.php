@if($image)
    <img class="{{ $class }} rounded-full" src="{{ $image }}" alt="{{ ucwords($name) }}">
@else
    <span class="inline-flex justify-center items-center {{ $class }} rounded-full bg-primary-500">
        <span class="font-medium leading-none text-white">{{ strtoupper(substr($name, 0,2)) }}</span>
    </span>
@endif
