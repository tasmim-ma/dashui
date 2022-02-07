<div x-show="open" x-cloak @keydown.window.escape="open = false" class="overflow-hidden fixed inset-0 z-10">
    <div class="overflow-hidden absolute inset-0">
        <div x-show="open" x-cloak x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <section @click.away="open = false" class="flex absolute inset-y-0 right-0 pl-10 max-w-full" aria-labelledby="slide-over-heading">
            <div class="w-screen max-w-md" x-show="open" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                <form action="{{ $action }}" method="POST" class="flex flex-col h-full bg-white divide-y divide-gray-200 shadow-xl">
                    <div class="flex overflow-y-scroll flex-col flex-1 py-6 min-h-0">
                        <div class="px-4 sm:px-6">
                            <div class="flex justify-between items-start">
                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ $title }}
                                </h2>
                                <div class="flex items-center ml-3 h-7">
                                    <button @click="open = false" type="button" class="text-gray-400 bg-white rounded-md hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-primary-500">
                                        <span class="sr-only">Fermer</span>
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex-1 px-4 pt-8 mt-6 text-left border-t border-gray-200 sm:px-6">
                           {{ $slot }}
                        </div>
                    </div>
                    <div class="flex justify-end px-4 py-4 shrink-0">
                        <button @click="open = false" type="button" class="btn-subtle">
                            Annuler
                        </button>
                        <button type="submit" class="ml-3 btn">
                            {{ $actionName }}
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
