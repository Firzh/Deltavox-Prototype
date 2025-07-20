{{-- resources/views/nav-1.blade.php --}}

<nav class="bg-[#1C1C1C] fixed w-full z-50 top-0"> {{-- Warna background diubah menjadi hitam gelap, shadow dihapus --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="hidden md:flex items-center space-x-20"> {{-- space-x-20 untuk jarak antar item --}}
                <a href="{{ route('home') }}" class="text-white hover:text-gray-300 transition duration-300"> {{-- Warna teks putih --}}
                    Car
                </a>
                <a href="{{ route('about') }}" class="text-white hover:text-gray-300 transition duration-300">
                    Team
                </a>
                <a href="{{ route('about') }}" class="text-white hover:text-gray-300 transition duration-300">
                    Activities
                </a>
            </div>

            <div class="flex-shrink-0 absolute left-1/2 transform -translate-x-1/2">
                <a href="{{ route('home') }}" class="flex flex-col items-center"> {{-- Menggunakan flex-col untuk logo dan teks --}}
                    <img src="{{ asset('images/Logo Putih.png') }}" alt="Deltavox Logo" class="w-16 h-16 mb-1"> {{-- Ukuran disesuaikan, logo putih --}}
                    {{-- <span class="text-white text-xs font-bold tracking-widest leading-none">DELTA VOX</span> --}}
                </a>
            </div>
            
            <div class="hidden md:flex items-center space-x-20"> {{-- space-x-20 untuk jarak antar item --}}
                <a href="{{ route('events.index') }}" class="text-white hover:text-gray-300 transition duration-300">
                    Partners
                </a>
                <a href="{{ route('contact.index') }}" class="text-white hover:text-gray-300 transition duration-300">
                    Contact
                </a>
            </div>

            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-300 hover:text-white focus:outline-none focus:text-white"> {{-- Warna ikon mobile menu disesuaikan --}}
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-[#2A2A2A] shadow-lg"> {{-- Warna background mobile menu disesuaikan --}}
            <a href="{{ route('home') }}" class="block px-3 py-2 text-base font-medium text-white hover:bg-gray-700 transition duration-300">
                Beranda
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 text-base font-medium text-white hover:bg-gray-700 transition duration-300">
                Tentang Kami
            </a>
            <a href="{{ route('projects.index') }}" class="block px-3 py-2 text-base font-medium text-white hover:bg-gray-700 transition duration-300">
                Proyek
            </a>
            <a href="{{ route('events.index') }}" class="block px-3 py-2 text-base font-medium text-white hover:bg-gray-700 transition duration-300">
                Event
            </a>
            <a href="{{ route('contact.index') }}" class="block px-3 py-2 text-base font-medium text-white hover:bg-gray-700 transition duration-300">
                Kontak
            </a>
        </div>
    </div>
</nav>

{{-- Script for mobile menu, since it directly interacts with elements within the nav --}}
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>