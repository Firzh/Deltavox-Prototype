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
    @include('layouts.nav-1 ') {{-- Ini adalah baris baru untuk menyertakan navbar --}}

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
