<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Deltavox - Klub Mobil Listrik')</title>
    <meta name="description" content="@yield('description', 'Deltavox adalah komunitas mahasiswa yang fokus pada pengembangan teknologi mobil listrik dan sustainable transportation.')">
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    @vite('resources/js/app.js')
</head>
<body class="font-sans antialiased bg-white " data-route-name="{{ Route::currentRouteName() }}">
    @include('layouts.nav-1', ['id' => 'navbar-white']) {{-- Add an ID for easy targeting --}}
    @include('layouts.nav-2', ['id' => 'navbar-dark']) {{-- Add an ID and initially hide it --}}    

    <main class="pt-16 ">
        @yield('content')
    </main>

    <footer class="bg-[#120E0E] text-white pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center md:items-start space-y-10 md:space-y-0">
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

            <div class="text-center md:text-left lg:ml-2">
                <h4 class="font-bold mb-2 "> Service</h4>
                <ul class="space-y-1">
                    <li><a href="#" class="hover:underline"> Send Us a Letter</a></li>
                    <li><a href="#" class="hover:underline">Visit Us</a></li>
                </ul>
            </div>

            <div class="text-center md:text-left">
            </div>

            <div class="flex flex-col items-center space-y-2">
                <img src="/images/Logo Putih.png" alt="Logo" class="w-16 h-16" />
                <div class="flex items-center space-x-1 text-sm">
                    <img src="/images/Logo Location.png" alt="Location"/>
                    <span>UPVJT, East Java</span>
                </div>
            </div>

            <div class="text-center">
                <h4 class="font-bold mb-2">Connect With Us</h4>
                <div class="flex space-x-3 justify-center">
                    <a href="#"><img src="/icons/instagram Button.png" class="w-8 h-8" alt="Instagram"></a>
                    <a href="#"><img src="/icons/In Button.png" class="w-8 h-8" alt="LinkedIn"></a>
                    <a href="#"><img src="/icons/TikTok Button.png" class="w-8 h-8" alt="TikTok"></a>
                </div>
            </div>

            <div class="text-center">
                <h4 class="font-bold mb-2">Assistance</h4>
                <a href="#"><img src="/icons/WhatsApp Button.png" class="w-8 h-8 mx-auto" alt="WhatsApp"></a>
            </div>

            <div class="text-center">
                <h4 class="font-bold mb-2">Send Us an Email</h4>
                <a href="#"><img src="/icons/Mail Button.png" class="w-8 h-8 mx-auto" alt="Email"></a>
            </div>
        </div>

        <hr class="my-6 border-white/50 mx-6" />

        <p class="text-center text-sm">&copy; Copyright 2025 · All Rights Reserved</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbarWhite = document.getElementById('navbar-white');
            const navbarDark = document.getElementById('navbar-dark');
            const targetSection = document.getElementById('about-section'); // Menggunakan dark-section sebagai target scroll
            
            // --- MODIFIKASI DIMULAI DI SINI ---
            // Dapatkan nama rute saat ini dari body element (Anda perlu menambahkan data-route ke body)
            const currentRouteName = document.body.dataset.routeName; 

            // Tentukan halaman mana yang harus dimulai dengan navbar gelap
            const pagesThatStartWithDarkNavbar = ['car', 'team', 'activities.index', 'partners.index', 'about']; // Sesuaikan dengan nama rute Anda

            let startsWithDark = false;
            if (currentRouteName && pagesThatStartWithDarkNavbar.includes(currentRouteName)) {
                startsWithDark = true;
            }

            // Set initial state based on the current page
            if (startsWithDark) {
                if (navbarWhite) {
                    navbarWhite.style.opacity = '0';
                    navbarWhite.style.pointerEvents = 'none';
                }
                if (navbarDark) {
                    navbarDark.style.opacity = '1';
                    navbarDark.style.pointerEvents = 'auto';
                }
            } else {
                // Default: starts with white navbar
                if (navbarWhite) {
                    navbarWhite.style.opacity = '1';
                    navbarWhite.style.pointerEvents = 'auto';
                }
                if (navbarDark) {
                    navbarDark.style.opacity = '0';
                    navbarDark.style.pointerEvents = 'none';
                }
            }
            // --- MODIFIKASI BERAKHIR DI SINI ---

            window.addEventListener('scroll', function() {
                // Logika scroll hanya berlaku jika halaman TIDAK dimulai dengan navbar gelap DAN ada target section
                // Atau berlaku untuk semua halaman jika target section adalah mekanisme utama peralihan
                
                // Jika halaman dimulai dengan navbar gelap, kita mungkin tidak perlu logika scroll ini
                // kecuali ada bagian putih di bawah dark-section yang ingin di-handle.
                // Untuk kesederhanaan, asumsikan logika scroll ini tetap diperlukan untuk transisi balik
                // jika ada targetSection.

                if (targetSection) { // Pastikan targetSection ada di halaman saat ini
                    const targetSectionTop = targetSection.getBoundingClientRect().top;
                    const scrollThreshold = 0; // Anda bisa menyesuaikan ini

                    if (targetSectionTop <= scrollThreshold) {
                        // Navbar Dark aktif
                        if (navbarWhite) {
                            navbarWhite.style.opacity = '0';
                            navbarWhite.style.pointerEvents = 'none';
                        }
                        if (navbarDark) {
                            navbarDark.style.opacity = '1';
                            navbarDark.style.pointerEvents = 'auto';
                        }
                    } else {
                        // Navbar White aktif
                        // Namun, jika halaman dimulai dengan dark, jangan langsung beralih ke putih saat scroll ke atas sedikit
                        // Kecuali memang ada section putih di atas dark-section (yang tidak ada di car.blade)
                        // Logika ini perlu disesuaikan jika home.blade punya dark-section juga.

                        // Untuk car.blade, jika sudah dark, biarkan dark unless you scroll above a very specific point.
                        // Jika Anda ingin navbar tetap hitam di car.blade kecuali ada 'putih-section' di atasnya,
                        // logika ini perlu lebih kompleks. Untuk saat ini, kita akan mempertahankan perilaku awal
                        // jika tidak ada 'dark-section' di atasnya.
                        
                        // Perbaiki logika agar halaman yang defaultnya dark tidak berubah ke putih secara otomatis saat scroll ke atas
                        if (!startsWithDark) { // Hanya beralih ke putih jika halaman awalnya putih
                            if (navbarWhite) {
                                navbarWhite.style.opacity = '1';
                                navbarWhite.style.pointerEvents = 'auto';
                            }
                            if (navbarDark) {
                                navbarDark.style.opacity = '0';
                                navbarDark.style.pointerEvents = 'none';
                            }
                        } else {
                            // Jika halaman dimulai dengan dark, biarkan dark unless a specific condition met
                            // (e.g., scrolling past a 'light-section' which is not present in car.blade's first section)
                            // For car.blade, it will largely remain dark.
                        }
                    }
                }
            });
        });
    </script>
    </body>
</html>