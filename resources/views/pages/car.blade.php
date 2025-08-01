@extends('layouts.app')

@section('title', 'Kalimasada - Deltavox Electric Vehicle')
@section('description', 'Informasi detail mengenai mobil listrik Kalimasada, Urban EV Concept dari Deltavox.')

@section('content')
<section id="dark-section" class="relative w-full h-[80vh] md:h-[90vh] lg:h-[100vh] xl:h-[120vh] 2xl:h-[140vh] bg-[#120E0E] flex items-center justify-center overflow-hidden
-mt-58 
md:-mt-48 
lg:-mt-30 
xl:-mt-36
2xl:-mt-48">
    {{-- Background Image --}}
    <div class="absolute left-1/2 animate-fade-in-down animation-delay-200 transform -translate-x-1/2 car-image-container z-10
    h-[200px] w-[400px] 
    md:h-[300px] md:w-[600px] 
    lg:h-[500px] lg:w-[1000px] 
    xl:h-[700px] xl:w-[1200px]
    2xl:h-[800px] 2xl:w-[1400px]">
        <img src="{{ asset('images/kalimasada-car.png') }}" alt="Kalimasada Car Banner" class="absolute inset-0 w-full h-full object-cover opacity-100">
    </div>

    {{-- Overlay untuk gelap dan teks --}}
    {{-- <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div> --}}

    <div class="absolute z-10 text-white max-w-7xl mx-auto flex flex-col justify-end h-full animate-fade-in-up animation-delay-200 
    -mt-4 ml-16 px-4 pb-16
    sm:-mt-12 sm:ml-30 sm:px-6
    md:mt-12 md:ml-30 md:pb-24
    lg:mt-40 lg:-ml-40 lg:px-10 lg:pb-32
    xl:mt-30 xl:-ml-100
    2xl:mt-20 2xl:-ml-142">
        {{-- Judul Kalimasada --}}
        <div class="text-left mb-6">
            <h1 class="custom-font-bebas-neue  font-normal leading-none uppercase animate-fade-in-down animation-delay-300
            text-xl 
            md:text-2xl
            lg:text-3xl">
                KALIMASADA
            </h1>
        </div>

        {{-- Deskripsi --}}
        <div class="max-w-3xl text-left">
            <p class="custom-font-poppins-regular leading-relaxed animate-fade-in-down animation-delay-300
            text-xs 
            md:text-sm">
                Proudly presented Delta Vox, an energy-efficient electric vehicle team dedicated to developing sustainable and innovative transportation solutions. With a focus on cutting-edge technology, the team optimizes energy usage to enhance performance while minimizing environmental impact. Through aerodynamic design and advanced engineering, Delta Vox strives to push the boundaries of efficiency and sustainability in electric vehicle development.
            </p>
        </div>
    </div>
</section>

{{-- Pastikan ada section lain di bawah ini agar halaman tidak kosong setelah section pertama --}}
{{-- Contoh: --}}
<section class="bg-gray-900 text-white py-20 text-center">
    <h2 class="text-3xl font-bold">More About Kalimasada</h2>
    <p class="mt-4">Details coming soon...</p>
</section>
@endsection