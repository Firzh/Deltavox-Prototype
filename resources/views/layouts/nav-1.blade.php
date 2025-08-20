{{-- resources/views/nav-1.blade.php --}}

<nav id="{{ $id ?? 'navbar-white' }}" class="bg-[#E5E5E5] fixed w-full z-50 top-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="hidden md:flex items-center space-x-20">
                <a href="{{ route('car') }}" class="font-normal hover:font-medium nav-link {{ request()->routeIs('car') ? 'text-electric-blue' : '' }}">
                    Car
                </a>
                <a href="{{ route('team') }}" class="font-normal hover:font-medium nav-link {{ request()->routeIs('team') ? 'text-electric-blue' : '' }}">
                    Team
                </a>
                <a href="{{ route('activities.index') }}" class="font-normal hover:font-medium nav-link {{ request()->routeIs('activities.*') ? 'text-electric-blue' : '' }}">
                    Activities
                </a>
            </div>

            <div class="flex-shrink-0 absolute left-1/2 transform -translate-x-5">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('images/Logo Merah.png') }}" alt="Deltavox Logo" class="w-16 h-16 rounded-full">
                    {{-- <span class="ml-3 text-xl font-bold text-gray-900">Deltavox</span> --}}
                </a>
            </div>
            
            <div class="hidden md:flex items-center space-x-20">
                <a href="{{ route('partners.index') }}" class="font-normal hover:font-medium nav-link {{ request()->routeIs('partners.*') ? 'text-electric-blue' : '' }}">
                    Partners
                </a>
                <a href="{{ route('contact.index') }}" class="font-normal hover:font-medium nav-link {{ request()->routeIs('contact.*') ? 'text-electric-blue' : '' }}">
                    Contact
                </a>
            </div>

            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button-white" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu-white" class="md:hidden hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white shadow-lg">
            <a href="{{ route('car') }}" class="block px-3 py-2 text-base font-normal hover:font-medium nav-link {{ request()->routeIs('car') ? 'text-electric-blue' : '' }}">
                Car
            </a>
            <a href="{{ route('team') }}" class="block px-3 py-2 text-base font-normal hover:font-medium nav-link {{ request()->routeIs('team') ? 'text-electric-blue' : '' }}">
                Team
            </a>
            <a href="{{ route('activities.index') }}" class="block px-3 py-2 text-base font-normal hover:font-medium nav-link {{ request()->routeIs('activities.*') ? 'text-electric-blue' : '' }}">
                Activities
            </a>
            <a href="{{ route('partners.index') }}" class="block px-3 py-2 text-base font-normal hover:font-medium nav-link {{ request()->routeIs('partners.*') ? 'text-electric-blue' : '' }}">
                Partners
            </a>
            <a href="{{ route('contact.index') }}" class="block px-3 py-2 text-base font-normal hover:font-medium nav-link {{ request()->routeIs('contact.*') ? 'text-electric-blue' : '' }}">
                Contact
            </a>
        </div>
    </div>
</nav>

{{-- Script for mobile menu, since it directly interacts with elements within the nav --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button-white');
        const mobileMenu = document.getElementById('mobile-menu-white');

        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                // Optional: Close the other menu if it's open (requires knowing its state)
                // This is less reliable if the other navbar's script isn't coordinated
            });
        }
    });
</script>