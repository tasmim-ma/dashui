<!doctype html>
<html lang="fr">
<head>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="{{ url('favicon.ico') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script type="text/javascript" src="{{ mix(config('dashui.alpine')) }}" defer></script>
    @stack('head')
    <link rel="stylesheet" href="{{ mix(config('dashui.tailwind')) }}">
    @livewireStyles
</head>
<body class="font-sans @if(\Illuminate\Support\Facades\App::environment('local')) debug-screens @endif">
<div class="flex overflow-hidden h-screen bg-gray-100" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div x-show="sidebarOpen" class="lg:hidden">
        <div class="flex fixed inset-0 z-40">
            <!-- Off-canvas menu overlay, show/hide based on off-canvas menu state. -->
            <div @click="sidebarOpen = false" x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
            </div>
            <!-- Off-canvas menu, show/hide based on off-canvas menu state. -->
            <div x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="flex relative flex-col flex-1 w-full max-w-xs bg-white">
                <div class="absolute top-0 right-0 pt-2 -mr-12">
                    <button x-show="sidebarOpen" @click="sidebarOpen = false" class="flex justify-center items-center ml-1 w-10 h-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                @includeIf(config('dashui.menu'))
            </div>
            <div class="w-14 shrink-0" aria-hidden="true">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>
    </div>
    <!-- Static sidebar for desktop -->
    <div class="hidden lg:flex lg:shrink-0">
        <div class="flex flex-col w-80">
            <div class="flex overflow-y-auto flex-col bg-white border-r border-gray-200 grow">
                @includeIf(config('dashui.menu'))
            </div>
        </div>
    </div>
    <div class="flex overflow-hidden flex-col flex-1 w-0">
        <div class="flex relative z-10 h-16 bg-white shadow shrink-0">
            <button @click.stop="sidebarOpen = true" class="px-4 text-gray-500 border-r border-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500 lg:hidden">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
                </svg>
            </button>
            @includeIf(config('dashui.top-bar'))
        </div>
        <main class="overflow-y-auto relative flex-1 focus:outline-none">
            @yield('content')
        </main>
    </div>
</div>
@livewireScripts
@stack('js')
</body>
</html>
