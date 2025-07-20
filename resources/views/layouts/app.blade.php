<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Deltavox - Klub Mobil Listrik')</title>
    <meta name="description" content="@yield('description', 'Deltavox adalah komunitas mahasiswa yang fokus pada pengembangan teknologi mobil listrik dan sustainable transportation.')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <!-- Left Navigation Items -->
                <div class="hidden md:flex items-center space-x-20">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'text-electric-blue' : '' }}">
                        Car
                    </a>
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'text-electric-blue' : '' }}">
                        Team
                    </a>
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'text-electric-blue' : '' }}">
                        Activities
                    </a>
                </div>

                <!-- Centered Logo and Brand Name -->
                <div class="flex-shrink-0 absolute left-1/2 transform -translate-x-1/2">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/Logo Merah.png') }}" alt="Deltavox Logo" class="w-16 h-16 rounded-full">
                        {{-- <span class="ml-3 text-xl font-bold text-gray-900">Deltavox</span> --}}
                    </a>
                </div>
                
                <!-- Right Navigation Items -->
                <div class="hidden md:flex items-center space-x-20">
                    <a href="{{ route('events.index') }}" class="nav-link {{ request()->routeIs('events.*') ? 'text-electric-blue' : '' }}">
                        Partners
                    </a>
                    <a href="{{ route('contact.index') }}" class="nav-link {{ request()->routeIs('contact.*') ? 'text-electric-blue' : '' }}">
                        Contact
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white shadow-lg">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-base font-medium nav-link {{ request()->routeIs('home') ? 'text-electric-blue' : '' }}">
                    Beranda
                </a>
                <a href="{{ route('about') }}" class="block px-3 py-2 text-base font-medium nav-link {{ request()->routeIs('about') ? 'text-electric-blue' : '' }}">
                    Tentang Kami
                </a>
                <a href="{{ route('projects.index') }}" class="block px-3 py-2 text-base font-medium nav-link {{ request()->routeIs('projects.*') ? 'text-electric-blue' : '' }}">
                    Proyek
                </a>
                <a href="{{ route('events.index') }}" class="block px-3 py-2 text-base font-medium nav-link {{ request()->routeIs('events.*') ? 'text-electric-blue' : '' }}">
                    Event
                </a>
                <a href="{{ route('contact.index') }}" class="block px-3 py-2 text-base font-medium nav-link {{ request()->routeIs('contact.*') ? 'text-electric-blue' : '' }}">
                    Kontak
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#120E0E] text-white pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center md:items-start space-y-10 md:space-y-0">
            <!-- Navigation -->
            <div class="text-center md:text-left">
                <h4 class="font-bold mb-2">Navigation</h4>
                <ul class="space-y-1">
                    <li><a href="/" class="hover:underline">Home</a></li>
                    <li><a href="/faq" class="hover:underline">FaQ</a></li>
                </ul>
            </div>

            <div class="text-center md:text-left">
            </div>

            <div class="text-center md:text-left">
            </div>            

            <!-- Service -->
            <div class="text-center md:text-left">
                <h4 class="font-bold mb-2">‎ ‎ Service</h4>
                <ul class="space-y-1">
                    <li><a href="#" class="hover:underline">‎ ‎ Send Us a Letter</a></li>
                    <li><a href="#" class="hover:underline">‎ ‎ Visit Us</a></li>
                </ul>
            </div>

            <div class="text-center md:text-left">
            </div>

            <!-- Logo & Location -->
            <div class="flex flex-col items-center space-y-2">
                <img src="/images/Logo Putih.png" alt="Logo" class="w-16 h-16" />
                <div class="flex items-center space-x-1 text-sm">
                    <img src="/images/Logo Location.png" alt="Location"/>
                    <span>UPVJT, East Java</span>
                </div>
            </div>

            <!-- Connect With Us -->
            <div class="text-center">
                <h4 class="font-bold mb-2">Connect With Us</h4>
                <div class="flex space-x-3 justify-center">
                    <a href="#"><img src="/icons/instagram Button.png" class="w-8 h-8" alt="Instagram"></a>
                    <a href="#"><img src="/icons/In Button.png" class="w-8 h-8" alt="LinkedIn"></a>
                    <a href="#"><img src="/icons/TikTok Button.png" class="w-8 h-8" alt="TikTok"></a>
                </div>
            </div>

            <!-- Assistance -->
            <div class="text-center">
                <h4 class="font-bold mb-2">Assistance</h4>
                <a href="#"><img src="/icons/WhatsApp Button.png" class="w-8 h-8 mx-auto" alt="WhatsApp"></a>
            </div>

            <!-- Email -->
            <div class="text-center">
                <h4 class="font-bold mb-2">Send Us an Email</h4>
                <a href="#"><img src="/icons/Mail Button.png" class="w-8 h-8 mx-auto" alt="Email"></a>
            </div>
        </div>

        <!-- Horizontal Line -->
        <hr class="my-6 border-white/50 mx-6" />

        <!-- Copyright -->
        <p class="text-center text-sm">&copy; Copyright 2025 · All Rights Reserved</p>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
