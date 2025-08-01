@extends('layouts.app')

@section('title', 'Kalimasada - Deltavox Electric Vehicle')
@section('description', 'Informasi detail mengenai mobil listrik Kalimasada, Urban EV Concept dari Deltavox.')

@section('content')
<section id="dark-section" class="relative w-full h-[60dvh] md:h-[74dvh] lg:h-[100dvh] xl:h-[120dvh] 2xl:h-[140dvh] bg-[#120E0E] flex items-center justify-center overflow-hidden">
    <div class="container mx-auto px-4 mt-16 mb-6 lg:-mt-1 xl:-mt10 grid grid-cols-1 items-center gap-6 md:gap-16 lg:gap-24 relative z-20 py-1">
        {{-- Banner Image (Gambar Mobil) --}}
        <div class="w-full relative order-1 animate-fade-in-down animation-delay-400">
            <img src="{{ asset('images/kalimasada-car.png') }}" alt="Kalimasada Car Banner" class="w-full h-auto object-contain">
        </div>

        {{-- Konten teks --}}
        <div class="text-white text-left ml-2 md:-mt-10 md:ml-6 animate-fade-in-down animation-delay-200 order-2">
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

{{-- Pastikan ada section lain di bawah ini agar halaman tidak kosong setelah section pertama --}}
<section class="bg-gray-900 text-white py-20 text-center">
    <h2 class="text-3xl font-bold">More About Kalimasada</h2>
    <p class="mt-4">Details coming soon...</p>
</section>
@endsection