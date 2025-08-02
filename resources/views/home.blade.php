@extends('layouts.app')

@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('title', 'Beranda - Deltavox')
@section('description', 'Deltavox adalah komunitas mahasiswa yang berdedikasi mengembangkan teknologi mobil listrik dan menciptakan masa depan transportasi berkelanjutan.')

@section('content')
<section id="banner-section" class="relative bg-white h-[75vh] md:h-[90vh] lg:h-[100vh]  flex flex-col items-center justify-end overflow-hidden custom-bg-banner">
    
    {{-- Div untuk gradien latar belakang --}}
    <div class="absolute bottom-0 left-0 w-full h-[294px] bg-white custom-gradient-bg z-0"></div>

    {{-- Banner Content --}}
    <div class="relative z-10 w-full px-4 sm:px-6 lg:px-8 flex flex-col items-center">
        <div class="space-y-4 text-center mt-auto -mb-6 md:-mb-10 lg:-mb-4 xl:-mb-28 2xl:-mb-48">
            <div class="animate-fade-in-down animation-delay-0">
                <p class="text-black text-left custom-font-sans-serif text-lg md:text-2xl lg:text-3xl font-normal leading-normal tracking-normal">
                    When focus goes energy flows
                </p>
            </div>
            <div class="animate-fade-in-down animation-delay-300">
                <h1 class="text-black custom-font-anton text-6xl md:text-[160px] lg:text-[180px] xl:text-[203.96px] font-normal leading-none tracking-tighter custom-letter-spacing">
                    DELTA VOX
                </h1>
            </div>
        </div>

        {{-- Car Image --}}
        <div class="w-[100%] md:w-[100%] lg:w-[80%] animate-fade-in-right-1 animation-delay-200 z-10">
            <img src="{{ asset('images/car-home.png') }}" alt="Mobil Listrik Deltavox" class="w-full h-auto object-contain">
        </div>
    </div>
</section>

{{-- About Section --}}
<section id="about-section" class="py-20 min-h-screen bg-[#120E0E]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-6">
                <div class="animate-fade-in-down-1 animation-delay-300 hidden-on-load">
                    {{-- "WE ARE DELTA VOX" --}}
                    <h2 class="text-white custom-font-bebas-neue text-5xl md:text-7xl lg:text-[119.11px] font-normal leading-none">
                        <span class="block">WE ARE</span>
                        <span class="block">DELTA VOX</span>
                    </h2>

                    {{-- "Energy-Efficient Car Research Team" --}}
                    <h3 class="text-white custom-font-poppins-bold animate-fade-in-up animation-delay-300 text-xl md:text-3xl lg:text-[29.43px] font-bold leading-normal mb-8">
                        Energy-Efficient Car Research Team
                    </h3>
                </div>
                
                <div class="prose prose-lg text-white space-y-4 animate-fade-in-up animation-delay-300 hidden-on-load">
                    {{-- Paragraf pertama --}}
                    <p class="custom-font-poppins-regular text-base md:text-lg leading-relaxed">
                        We are currently developing innovative energy-efficient vehicles to drive a sustainable future.
                    </p>
                    
                    {{-- Paragraf kedua --}}
                    <p class="custom-font-poppins-regular text-base md:text-lg leading-relaxed">
                        Our mission is to design and build cutting-edge mobility solutions, not just to compete, but to make a real impact.
                    </p>
                </div>

                <div class="pt-4 animate-fade-in-down-1 animation-delay-600 hidden-on-load">
                    <a href="{{ route('about') }}" 
                       class="bg-[#FF5733] text-white custom-font-sans-serif md:text-lg px-8 py-4 rounded-full font-bold text-lg hover:bg-[#E04422] transition duration-300 transform hover:scale-105 shadow-lg inline-flex items-center">
                        More About Us
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- image section --}}
            <div class="relative flex justify-center items-center h-full animate-fade-in-right animation-delay-300 hidden-on-load">
                <div class="custom-image-frame max-w-sm w-full aspect-[4/5] rounded-[30px] overflow-hidden shadow-2xl z-20 relative">
                    <div class="carousel-container-about-section">
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
                    
                    <img src="{{ asset('images/Ellipse-left.png') }}" alt="Left Ellipse Frame" class="absolute z-10 custom-ellipse-left mt-5">
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
            <div class="text-left animate-fade-in-left animation-delay-300">
                <h2 class="text-6xl md:text-7xl lg:text-[119.11px] custom-font-bebas-neue-1 font-bold text-white leading-none tracking-tight">
                    OUR <br> ACHIEVEMENT
                </h2>
            </div>

            {{-- Right Column: Award Details --}}
            <div class="text-left animate-fade-in-right animation-delay-300 hidden-on-load">
                <h3 class="text-xl md:text-3xl custom-font-bebas-neue-1 font-bold text-white mb-4">
                    THE BEST NEWCOMER TEAM AWARD KMHE - 2022
                </h3>
                <p class="text-base text-gray-300 custom-font-poppins-regular leading-relaxed">
                    Delta Vox, the energy-efficient vehicle team from UPN "Veteran" East Java, made an impressive debut at the 2022 Indonesia Energy-Saving Car Competition (KMHE) by winning the Best Newcomer Team Award. With their first-ever energy-efficient car, Kalimasada
                </p>
            </div>
        </div>

        {{-- Image of the car below the text --}}
        <div class="mt-16 flex justify-center animate-fade-in-up hidden-on-load animation-delay-600">
            <div class="relative custom-image-achievement-wrapper overflow-hidden rounded-xl shadow-lg w-full max-w-5xl h-auto">
                <img src="{{ asset('images/car-achievement.png') }}" alt="Deltavox Car Achievement" class="w-full h-auto object-cover">
                
                <div class="absolute inset-0 bg-transparent flex items-end justify-end p-8 opacity-0 transition-opacity duration-300 ease-in-out custom-overlay">
                    <div class="text-white text-3xl md:text-6xl mb-12 custom-font-bebas-neue-1 font-bold uppercase transition-transform duration-300 ease-in-out transform translate-y-full custom-overlay-text">
                        SEE THE NEWS
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection