@if ($errors->any())
    <div class="p-4 my-4 bg-red-50 rounded-md" x-data="{ close: false}" x-show="!close">
        <div class="flex">
            <div class="shrink-0">
                <svg class="w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-red-800">
                    Erreurs
                </h3>
                <div class="mt-2 text-sm text-red-700">
                    <ul class="pl-5 space-y-1 list-disc">
                        @foreach ($errors->all() as $error)
                           <li> {{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="-mx-2 mt-4">
                    <button @click="close=true" type="button" class="px-2 py-1.5 rounded-md text-sm font-medium text-red-800 hover:text-red-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-50 focus:ring-red-600">
                        Ignorer
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
