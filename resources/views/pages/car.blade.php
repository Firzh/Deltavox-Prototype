@extends('layouts.app')

@section('title', 'Kalimasada - Deltavox Electric Vehicle')
@section('description', 'Informasi detail mengenai mobil listrik Kalimasada, Urban EV Concept dari Deltavox.')

@section('content')
<section id="dark-section" class="relative w-full h-[60dvh] md:h-[74dvh] lg:h-[100dvh] xl:h-[120dvh] 2xl:h-[140dvh] bg-[#120E0E] flex items-center justify-center overflow-hidden">
    <div class="container mx-auto px-4 mt-16 mb-6 lg:-mt-1 xl:-mt-30 grid grid-cols-1 items-center gap-6 md:gap-16 lg:gap-24 relative z-20 py-1">
        {{-- Banner Image (Gambar Mobil) --}}
        <div class="w-full relative order-1 animate-fade-in-down animation-delay-400">
            <img src="{{ asset('images/kalimasada-car.png') }}" alt="Kalimasada Car Banner" class="w-full h-auto object-contain">
        </div>

        {{-- Konten teks --}}
        <div class="text-white text-left ml-2 md:-mt-10 md:ml-6 xl:ml-10 animate-fade-in-up animation-delay-200 order-2">
            {{-- Judul Kalimasada --}}
            <div class="mb-4">
                <h1 class="custom-font-bebas-neue font-normal leading-none uppercase text-xl md:text-2xl lg:text-3xl">
                    KALIMASADA
                </h1>
            </div>

            {{-- Deskripsi --}}
            <div class="max-w-6xl">
                <p class="custom-font-poppins-regular leading-relaxed text-[9px] md:text-[14px]">
                    Proudly presented Delta Vox, an energy-efficient electric vehicle team dedicated to developing sustainable and innovative transportation solutions. With a focus on cutting-edge technology, the team optimizes energy usage to enhance performance while minimizing environmental impact. Through aerodynamic design and advanced engineering, Delta Vox strives to push the boundaries of efficiency and sustainability in electric vehicle development.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Section Kedua - Telah disesuaikan --}}
<section id="car-gallery" class="bg-[#120E0E] py-12 md:py-16">
    <div class="container mx-auto px-8 mt-16 mb-6 lg:-mt-1 xl:-mt-30 grid grid-cols-1 items-center gap-6 md:gap-16 lg:gap-24 relative z-20 py-1">
        {{-- Menggunakan grid untuk menampung semua gambar --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 lg:gap-8">
            
            {{-- Deskripsi --}}
            <div class="col-span-full max-w-6xl animate-fade-in-up-1 animation-delay-200 hidden-on-load">
                <p class="text-white custom-font-bebas-neue ml-6 leading-relaxed text-xl md:text-3xl lg:text-5xl">
                    Photos
                </p>
            </div>

            {{-- Gambar-gambar kecil --}}
            <div class="w-full h-full">
                <img src="{{ asset('images/car1.png') }}" alt="Mobil Deltavox 1" class="w-full h-full object-cover rounded-lg animate-fade-in-down-1 animation-delay-200 hidden-on-load">
            </div>
            <div class="w-full h-full">
                <img src="{{ asset('images/car2.png') }}" alt="Mobil Deltavox 2" class="w-full h-full object-cover rounded-lg animate-fade-in-down-1 animation-delay-200 hidden-on-load">
            </div>
            <div class="w-full h-full">
                <img src="{{ asset('images/car3.png') }}" alt="Mobil Deltavox 3" class="w-full h-full object-cover rounded-lg animate-fade-in-down-1 animation-delay-200 hidden-on-load">
            </div>
            <div class="w-full h-full">
                <img src="{{ asset('images/car4.png') }}" alt="Mobil Deltavox 4" class="w-full h-full object-cover rounded-lg animate-fade-in-down-1 animation-delay-200 hidden-on-load">
            </div>

            {{-- Gambar besar yang menempati seluruh lebar grid --}}
            <div class="col-span-full w-full mt-1 animate-fade-in-up-1 animation-delay-200 hidden-on-load">
                <img src="{{ asset('images/car5.png') }}" alt="Mobil Deltavox Besar" class="w-full h-auto object-cover rounded-lg">
            </div>
        </div>
    </div>
</section>
@endsection