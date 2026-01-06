<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'NARO Infohub')</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <style>
    [x-cloak]{ display:none !important; }
    #desktop-nav-items{ display:none; }
    @media (min-width: 768px){
        #mobile-nav-toggle{ display:none !important; }
        #desktop-nav-items{ display:flex !important; }
    }
    </style>

    @stack('styles')
    @livewireStyles
</head>
<body class="antialiased bg-gray-100 text-gray-900">
<div class="min-h-screen">
    <header class="shadow-sm" x-data="{ mobileOpen:false }">
        <div class="bg-white">
            <div class="max-w-6xl mx-auto flex items-center justify-between px-6 py-4">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/naro_logo.png') }}" alt="NARO Logo" class="w-16 h-16 object-contain">
                    <span class="text-2xl font-semibold text-gray-800">NARO <span class="text-green-600">infoHUB</span></span>
                </div>
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="search" class="px-6 py-2 rounded-full bg-gray-300 text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-green-500 w-40">
                </div>
                <div class="flex items-center">
                    @auth
                        <a href="{{ route('admin.topics') }}" class="px-4 py-2 bg-white/10 text-white rounded">Admin</a>
                    @endauth
                </div>
            </div>
        </div>
        <nav style="background:#19b34a;">
            <div class="max-w-6xl mx-auto w-full px-4 sm:px-6 py-3 flex items-center justify-between flex-wrap">
                <button id="mobile-nav-toggle" @click="mobileOpen = !mobileOpen" class="p-2 rounded focus:outline-none focus:ring-2 focus:ring-white" aria-expanded="false" aria-controls="mobile-nav" aria-label="Toggle navigation">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div id="desktop-nav-items" class="items-center space-x-6">
                    <a href="{{ route('livestock.index') }}" class="px-4 py-2 text-lg font-medium text-white {{ request()->routeIs('livestock.*') ? 'underline' : '' }}">Livestock</a>
                    <a href="{{ route('crops.index') }}" class="px-4 py-2 text-lg font-medium text-white {{ request()->routeIs('crops.*') ? 'underline' : '' }}">Crops</a>
                    <a href="{{ route('forestry.index') }}" class="px-4 py-2 text-lg font-medium text-white {{ request()->routeIs('forestry.*') ? 'underline' : '' }}">Forestry</a>
                    <a href="{{ route('fisheries.index') }}" class="px-4 py-2 text-lg font-medium text-white {{ request()->routeIs('fisheries.*') ? 'underline' : '' }}">Fisheries</a>
                    <div class="relative" x-data="{ open:false }">
                        <button @click="open = !open" @click.outside="open = false" class="px-4 py-2 text-lg font-medium text-white flex items-center space-x-1">
                            <span>Facilities</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg z-50 py-2">
                            <a href="{{ route('facilities.anti_tick_vaccine') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Anti-Tick Vaccine</a>
                            <a href="{{ route('facilities.greenhouses') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Aflasafe</a>
                            <a href="{{ route('facilities.libraries') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Libraries</a>
                        </div>
                    </div>
                    <a href="{{ route('media.index') }}" class="px-4 py-2 text-lg font-medium text-white {{ request()->routeIs('media.*') ? 'underline' : '' }}">Media</a>
                    <a href="{{ route('contactus.index') }}" class="px-4 py-2 text-lg font-semibold text-white {{ request()->routeIs('contactus.*') ? 'underline' : '' }}">Contact Us</a>
                </div>
            </div>
            <div id="mobile-nav" x-show="mobileOpen" x-cloak class="md:hidden px-4 sm:px-6 pb-4 space-y-2">
                <a href="{{ route('livestock.index') }}" class="block px-4 py-2 text-base font-medium text-white bg-white/10 rounded">Livestock</a>
                <a href="{{ route('crops.index') }}" class="block px-4 py-2 text-base font-medium text-white bg-white/10 rounded">Crops</a>
                <a href="{{ route('forestry.index') }}" class="block px-4 py-2 text-base font-medium text-white bg-white/10 rounded">Forestry</a>
                <a href="{{ route('fisheries.index') }}" class="block px-4 py-2 text-base font-medium text-white bg-white/10 rounded">Fisheries</a>
                <div x-data="{ open:false }" class="bg-white/10 rounded">
                    <button @click="open = !open" class="w-full px-4 py-2 text-base font-medium text-white flex items-center justify-between">
                        <span>Facilities</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="px-4 pb-2 space-y-2">
                        <a href="{{ route('facilities.anti_tick_vaccine') }}" class="block text-sm text-white/90 hover:text-white">Anti-Tick Vaccine</a>
                        <a href="{{ route('facilities.greenhouses') }}" class="block text-sm text-white/90 hover:text-white">Aflasafe</a>
                        <a href="{{ route('facilities.libraries') }}" class="block text-sm text-white/90 hover:text-white">Libraries</a>
                    </div>
                </div>
                <a href="{{ route('media.index') }}" class="block px-4 py-2 text-base font-medium text-white bg-white/10 rounded">Media</a>
                <a href="{{ route('contactus.index') }}" class="block px-4 py-2 text-base font-medium text-white bg-white/10 rounded">Contact Us</a>
            </div>
        </nav>
    </header>

    @if (trim($__env->yieldContent('hero')))
        @yield('hero')
    @else
        @include('partials.hero')
    @endif

    <main>
        @yield('content')
    </main>

    <footer class="mt-12">
        <div class="bg-[#fff4c5] border-t border-[#e6d48a]">
            <div class="max-w-6xl mx-auto px-6 py-4 flex items-center space-x-3">
                <span class="flex items-center justify-center w-8 h-8 rounded-full border border-[#bfa858] text-[#bfa858] text-lg">i</span>
                <span class="text-gray-700 text-sm">National Agricultural Research Organisation {{ date('Y') }}</span>
            </div>
        </div>
    </footer>
</div>

@livewireScripts
@stack('scripts')
</body>
</html>
