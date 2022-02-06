<div {{ $attributes }}>
    <div class="px-4 py-8 sm:px-6 lg:px-8">
        <form action="{{ $action }}" method="POST" class="mx-auto space-y-8 max-w-7xl divide-y divide-gray-200" enctype="multipart/form-data">
            <div class="mb-4">
                <div class="flex justify-between items-center">
                    <div class="flex-1 min-w-0">
                        <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl">
                            {{ $title }}
                        </h1>
                    </div>
                    <div class="mt-4 ml-4 md:mt-0">
                        @if($back)
                            <a href="{{ $back }}" class="btn-subtle">Annuler</a>
                        @endif
                        <button type="submit" class="ml-2 btn">
                            Enregistrer
                        </button>
                    </div>
                </div>
            </div>

            <div class="pt-8">
                <x-dashui-alert/>
                <x-dashui-message/>
                {{ $slot }}
            </div>
        </form>
    </div>
</div>
