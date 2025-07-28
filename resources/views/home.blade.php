@extends('layouts.app')

@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('title', 'Beranda - Deltavox')
@section('description', 'Deltavox adalah komunitas mahasiswa yang berdedikasi mengembangkan teknologi mobil listrik dan menciptakan masa depan transportasi berkelanjutan.')

@section('content')
<section id="banner-section" class="relative bg-white h-[70vh] md:h-[90vh] lg:h-[100vh] xl:h-[100vh] 2xl:h-[100vh] flex items-center overflow-hidden custom-bg-banner">
    
    {{-- Ubah background dari section, tambahkan overflow-hidden --}}
    {{-- Background utama section yang lebih besar --}}
    {{-- Kelas bg-deep-blue akan menjadi warna utama di bagian atas jika gradien tidak menutupi --}}

    {{-- Div untuk gradien latar belakang - Ukuran W 1440, H 294, menempati bagian bawah --}}
    <div class="absolute bottom-0 left-0 w-full h-[294px] bg-white custom-gradient-bg"></div>
    {{-- Tailwind's w-full set 1440px if the parent is 1440px --}}
    {{-- 'h-[294px]' untuk tinggi 294px --}}
    {{-- 'bottom-0 left-0' untuk menempatkan di bagian bawah --}}
    {{-- 'custom-gradient-bg' adalah kelas CSS kustom untuk gradien --}}

    <div class="absolute bottom-0 left-1/2 animate-fade-in-right-1 animation-delay-200 transform -translate-x-1/2 car-image-container z-10
    h-[300px] w-[600px] 
    md:h-[700px] md:w-[1050px] 
    lg:h-[850px] lg:w-[1275px] ">
        <img src="{{ asset('images/car-home.png') }}" alt="Mobil Listrik Deltavox" class="absolute bottom-0 left-0 w-full h-auto object-contain">
    </div>

    {{-- Banner Section --}}
    <div class="relative z-0 mb-48 sm:mb-50 md:mb-96 lg:mb-120 mt-30 text-center w-full px-4 sm:px-6 lg:px-8"> {{-- Ubah z-30 menjadi z-0 atau z-lowest --}}
        <div class="space-y-10 "> {{-- Mengurangi space-y karena ukuran font besar --}}
            <div class="animate-fade-in-down animation-delay-0">
                <p class="text-black custom-font-sans-serif text-lg md:text-[28.03px] lg:text-[28.03px] font-normal leading-normal tracking-normal -mb-8 sm:-ml-0 md:-ml-68 lg:-ml-105">
                    When focus goes energy flows
                </p>
            </div>
            <div class="animate-fade-in-down animation-delay-300">
                <h1 class="text-black custom-font-anton text-[60px] md:text-[166px] lg:text-[203.96px] font-normal leading-none tracking-tighter custom-letter-spacing">
                    DELTA VOX
                </h1>
            </div>
        </div>
    </div>
</section>

{{-- About Section --}}
<section id="about-section" class="py-45 min-h-screen bg-[#120E0E]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-6">
                <div class="animate-fade-in-down-1 animation-delay-300 hidden-on-load"> {{-- Tambahkan hidden-on-load --}}

                    {{-- "WE ARE DELTA VOX" --}}
                    <h2 class="text-white custom-font-bebas-neue text-[50px] md:text-[80px] lg:text-[119.11px] font-normal leading-none">
                        <span class="block">WE ARE</span>
                        <span class="block">DELTA VOX</span>
                    </h2>

                    {{-- "Energy-Efficient Car Research Team" --}}
                    <h3 class="text-white custom-font-poppins-bold animate-fade-in-up animation-delay-300 text-[20px] md:text-[25px] lg:text-[29.43px] font-bold leading-normal mb-8 ">
                        Energy-Efficient Car Research Team
                    </h3>
                </div>
                
                <div class="prose prose-lg text-white space-y-4 animate-fade-in-up animation-delay-300 hidden-on-load"> {{-- Tambahkan hidden-on-load --}}
                    {{-- Paragraf pertama --}}
                    <p class="custom-font-poppins-regular text-[16px] md:text-[18.48px] leading-relaxed ">
                        We are currently developing innovative energy-efficient vehicles to drive a sustainable future.
                    </p>
                    
                    {{-- Paragraf kedua --}}
                    <p class="custom-font-poppins-regular text-[16px] md:text-[18.48px] leading-relaxed ">
                        Our mission is to design and build cutting-edge mobility solutions, not just to compete, but to make a real impact.
                    </p>
                </div>

                <div class="pt-4 animate-fade-in-down-1 animation-delay-600 hidden-on-load"> {{-- Tambahkan hidden-on-load --}}
                    <a href="{{ route('about') }}" 
                       class="bg-[#FF5733] text-white custom-font-sans-serif md:text-[20.48px] px-8 py-4 rounded-full font-bold text-lg hover:bg-[#E04422] transition duration-300 transform hover:scale-105 shadow-lg inline-flex items-center">
                        More About Us
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- image section --}}
            <div class="relative flex justify-center items-center h-full animate-fade-in-right animation-delay-300 hidden-on-load lg:ml-20 lg:-mr-10 md:mx-auto"> {{-- Modifikasi di sini --}}
                {{-- Ini adalah div frame gambar utama --}}
                <div class="custom-image-frame w-[450px] h-[500px] rounded-[30px] overflow-hidden shadow-2xl -mt-10 z-20 relative">
                    {{-- Ganti img src="images/blank.png" dengan kode carousel --}}
                    <div class="carousel-container-about-section"> {{-- Wrapper baru untuk carousel, akan di-style untuk mengisi custom-image-frame --}}
                        <div class="carousel-slide-about-section">
                            <img src="{{ asset('images/photo1.png') }}" alt="Photo 1">
                            <img src="{{ asset('images/photo2.png') }}" alt="Photo 2">
                            <img src="{{ asset('images/photo3.png') }}" alt="Photo 3">
                            <img src="{{ asset('images/photo4.png') }}" alt="Photo 4">
                        </div>

                        <button class="carousel-btn-about-section prev" aria-label="Previous Slide">&#10094;</button>
                        <button class="carousel-btn-about-section next" aria-label="Next Slide">&#10095;</button>

                        <div class="carousel-dots-about-section">
                            <span class="dot-about-section active" data-slide-index="0"></span>
                            <span class="dot-about-section" data-slide-index="1"></span>
                            <span class="dot-about-section" data-slide-index="2"></span>
                            <span class="dot-about-section" data-slide-index="3"></span>
                        </div>
                    </div>

                    {{-- Gambar Elips Kiri (sekarang relatif terhadap custom-image-frame) --}}
                    <img src="{{ asset('images/Ellipse-left.png') }}" alt="Left Ellipse Frame" class="absolute z-10 custom-ellipse-left mt-5">
                    
                    {{-- Gambar Elips Kanan (sekarang relatif terhadap custom-image-frame) --}}
                    <img src="{{ asset('images/Ellipse-right.png') }}" alt="Right Ellipse Frame" class="absolute z-10 custom-ellipse-right mt-55">
                </div>
            </div>        
        </div>
    </div>
</section>

{{-- Achivement Section --}}
<section class="py-20 bg-[#120E0E]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            
            {{-- Left Column: OUR ACHIEVEMENT --}}
            <div class="text-left animate-fade-in-left animation-delay-300"> {{-- Tambahkan animasi fade-in-left --}}
                <h2 class="text-7xl md:text-8xl lg:text-[119.11px] custom-font-bebas-neue-1 font-bold text-white leading-none tracking-tight">
                    OUR <br> ACHIEVEMENT
                </h2>
            </div>

            {{-- Right Column: Award Details --}}
            <div class="text-left animate-fade-in-right animation-delay-300 hidden-on-load"> {{-- Tambahkan animasi fade-in-right --}}
                <h3 class="text-xl md:text-4xl custom-font-bebas-neue-1 font-bold text-white mb-4">
                    THE BEST NEWCOMER TEAM AWARD KMHE - 2022
                </h3>
                <p class="text-base text-gray-300 custom-font-poppins-regular leading-relaxed ">
                    Delta Vox, the energy-efficient vehicle team from UPN "Veteran" East Java, made an impressive debut at the 2022 Indonesia Energy-Saving Car Competition (KMHE) by winning the Best Newcomer Team Award. With their first-ever energy-efficient car, Kalimasada
                </p>
            </div>
        </div>

        {{-- Image of the car below the text --}}
        <div class="mt-16 flex justify-center animate-fade-in-up hidden-on-load animation-delay-600"> {{-- Tambahkan animasi fade-in-up (dari bawah) --}}
            <div class="relative custom-image-achievement-wrapper overflow-hidden rounded-xl shadow-lg
            h-[400px] w-[1200px] 
            md:h-[500px] md:w-[1300px] 
            lg:h-[600px] lg:w-[1400px]
            ">
                <img src="{{ asset('images/car-achievement.png') }}" alt="Deltavox Car Achievement" class="w-full h-full object-cover">

                {{-- Overlay Gradien dan Teks saat Hover --}}
                <div class="absolute inset-0 bg-transparent flex items-end justify-end p-8 opacity-0 transition-opacity duration-300 ease-in-out custom-overlay">
                    <div class="text-white text-4xl md:text-8xl mb-12 custom-font-bebas-neue-1 font-bold uppercase transition-transform duration-300 ease-in-out transform translate-y-full custom-overlay-text">
                        SEE THE NEWS
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection