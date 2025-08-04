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

{{-- Section Kedua - Menggabungkan kedua tata letak --}}
<section id="car-gallery" class="bg-[#120E0E] py-12 md:py-16">
    <div class="container mx-auto px-8 mt-16 mb-6 lg:-mt-1 xl:-mt-30 grid grid-cols-1 items-center gap-6 md:gap-16 lg:gap-24 relative z-20 py-1">
        {{-- Menggunakan grid untuk menampung semua gambar --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 lg:gap-8">
            
            {{-- Deskripsi --}}
            <div class="col-span-full max-w-6xl animate-fade-in-up-1 animation-delay-200 hidden-on-load">
                <p class="text-white custom-font-bebas-neue ml-6 leading-relaxed text-xl md:text-3xl lg:text-5xl">
                    Photos
                </p>
            </div>
            
            {{-- Layout untuk Desktop/Tablet (md ke atas): Gambar Individu --}}
            <div class="w-full h-full hidden md:block">
                <img src="{{ asset('images/car1.png') }}" alt="Mobil Deltavox 1" class="w-full h-full object-cover rounded-lg animate-fade-in-down-1 animation-delay-200 hidden-on-load">
            </div>
            <div class="w-full h-full hidden md:block">
                <img src="{{ asset('images/car2.png') }}" alt="Mobil Deltavox 2" class="w-full h-full object-cover rounded-lg animate-fade-in-down-1 animation-delay-200 hidden-on-load">
            </div>
            <div class="w-full h-full hidden md:block">
                <img src="{{ asset('images/car3.png') }}" alt="Mobil Deltavox 3" class="w-full h-full object-cover rounded-lg animate-fade-in-down-1 animation-delay-200 hidden-on-load">
            </div>
            <div class="w-full h-full hidden md:block">
                <img src="{{ asset('images/car4.png') }}" alt="Mobil Deltavox 4" class="w-full h-full object-cover rounded-lg animate-fade-in-down-1 animation-delay-200 hidden-on-load">
            </div>

            {{-- Layout untuk Ponsel (sm ke bawah): Carousel --}}
            <div class="w-full h-auto col-span-1 lg:col-span-1 block md:hidden relative carousel-container-car-1 overflow-hidden rounded-lg animate-fade-in-down-1 animation-delay-200 hidden-on-load" data-interval="3000">
                <div class="carousel-slide-car-1 flex transition-transform duration-500 ease-in-out">
                    <img src="{{ asset('images/car1.png') }}" alt="Mobil Deltavox 1" class="w-full h-full object-cover rounded-lg flex-shrink-0">
                    <img src="{{ asset('images/car2.png') }}" alt="Mobil Deltavox 2" class="w-full h-full object-cover rounded-lg flex-shrink-0">
                </div>
                {{-- <button class="carousel-btn-car-1 prev" aria-label="Previous Slide">&#10094;</button>
                <button class="carousel-btn-car-1 next" aria-label="Next Slide">&#10095;</button> --}}
                {{-- <div class="carousel-dots-car-1 absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                    <span class="dot-car-1 active" data-slide-index="0"></span>
                    <span class="dot-car-1" data-slide-index="1"></span>
                </div> --}}
            </div>

            <div class="w-full h-auto col-span-1 lg:col-span-1 block md:hidden relative carousel-container-car-2 overflow-hidden rounded-lg animate-fade-in-down-1 animation-delay-200 hidden-on-load" data-interval="3100">
                <div class="carousel-slide-car-2 flex transition-transform duration-500 ease-in-out">
                    <img src="{{ asset('images/car3.png') }}" alt="Mobil Deltavox 3" class="w-full h-full object-cover rounded-lg flex-shrink-0">
                    <img src="{{ asset('images/car4.png') }}" alt="Mobil Deltavox 4" class="w-full h-full object-cover rounded-lg flex-shrink-0">
                </div>
                {{-- <button class="carousel-btn-car-2 prev" aria-label="Previous Slide">&#10094;</button>
                <button class="carousel-btn-car-2 next" aria-label="Next Slide">&#10095;</button>
                <div class="carousel-dots-car-2 absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                    <span class="dot-car-2 active" data-slide-index="0"></span>
                    <span class="dot-car-2" data-slide-index="1"></span>
                </div> --}}
            </div>

            {{-- Gambar besar yang menempati seluruh lebar grid --}}
            <div class="col-span-full w-full mt-1 animate-fade-in-up-1 animation-delay-200 hidden-on-load">
                <img src="{{ asset('images/car5.png') }}" alt="Mobil Deltavox Besar" class="w-full h-auto object-cover rounded-lg">
            </div>
        </div>
    </div>
</section>
@endsection