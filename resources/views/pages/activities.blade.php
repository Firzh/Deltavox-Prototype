@extends('layouts.app')

@section('title', 'Activities - Deltavox')
@section('description', 'Lihat berbagai kegiatan dan event yang dilakukan Deltavox.')

@section('content')
<section id="dark-section" class="relative w-full h-[100dvh] md:h-[100dvh] lg:h-[140dvh] xl:h-[120dvh] 2xl:h-[140dvh] bg-[#120E0E] flex items-center justify-center overflow-hidden">
    <div class="container mx-auto px-4 mt-30 mb-6 lg:mt-80 xl:-mt-36 grid-cols-1 lg:grid-cols-2 items-center gap-6 md:gap-16 lg:gap-24 relative z-20 py-1">

    {{-- Gambar-gambar Ellipse di latar belakang --}}
    {{-- beberapa eclipse ada lebih dari 1 buah dengan opacity berbeda untuk menghasilkan efek vignette lingkaran yang halus daripada basic opacity. Jadi tolong perhatikan itu --}}
    <div class="absolute flex justify-center md:justify-start w-full h-full z-10 2xl:-mt-100 xl:ml-10 2xl:-ml-10 xl:pl-12">
        {{-- Eclipse 1 --}}
        <div class="absolute opacity-18 transform -translate-x-46 md:translate-x-1 lg:translate-x-1 xl:-ml-20 xl:translate-x-1/2 2xl:ml-0 2xl:translate-x-2 md:translate-y-36 lg:-translate-y-94 xl:translate-y-10 2xl:translate-y-88 w-24 scale-300 md:scale-400 lg:scale-460 xl:scale-500 2xl:scale-600">
            <img src="{{ asset('images/14.png') }}" alt="Ellipse 1" class="w-full h-auto object-contain">
        </div>

        {{-- Eclipse 2 --}}
        <div class="absolute opacity-50 transform translate-x-20 md:translate-x-70 lg:translate-x-92 xl:translate-x-114 2xl:translate-x-132 translate-y-26 md:translate-y-66 lg:-translate-y-58 xl:translate-y-60 2xl:translate-y-136 w-32 scale-100 md:scale-120 xl:scale-140 2xl:scale-160">
            <img src="{{ asset('images/15.png') }}" alt="Ellipse 2" class="w-full h-auto object-contain">
        </div>
        {{-- opacity 2 - 20 --}}
        <div class="absolute opacity-20 transform translate-x-20 md:translate-x-70 lg:translate-x-92 xl:translate-x-114 2xl:translate-x-132 translate-y-26 md:translate-y-66 lg:-translate-y-58 xl:translate-y-60 2xl:translate-y-136 w-32 sm:scale- md:scale-60 xl:scale-80 2xl:scale-100">
            <img src="{{ asset('images/15.png') }}" alt="Ellipse 2" class="w-full h-auto object-contain">
        </div>

        {{-- Eclipse 3 --}}
        <div class="absolute opacity-51 transform -translate-x-4 md:translate-x-100 lg:translate-x-140 xl:translate-x-160 2xl:translate-x-234 translate-y-60 md:translate-y-18 lg:-translate-y-114 xl:-translate-y-1 2xl:translate-y-54 w-24 scale-160 md:scale-200 xl:scale-220 2xl:scale-250">
            <img src="{{ asset('images/16.png') }}" alt="Ellipse 3" class="w-full h-auto object-contain">
        </div>

        {{-- Eclipse 4 --}}
        <div class="absolute opacity-20 transform -translate-x-20 md:translate-x-134 lg:translate-x-176 xl:translate-x-208 2xl:translate-x-290 translate-y-125 md:translate-y-70 lg:-translate-y-50 xl:translate-y-80 2xl:translate-y-144 w-24 scale-250 md:scale-300 xl:scale-350">
            <img src="{{ asset('images/17.png') }}" alt="Ellipse 4" class="w-full h-auto object-contain">
        </div>

        {{-- Eclipse 5 --}}
        <div class="absolute opacity-24 transform translate-x-30 md:translate-x-174 lg:translate-x-224 xl:translate-x-264 2xl:translate-x-354 translate-y-88 md:translate-y-32 lg:-translate-y-104 xl:translate-y-16 2xl:translate-y-74 w-24 scale-150 md:scale-170 xl:scale-190">
            <img src="{{ asset('images/18.png') }}" alt="Ellipse 5" class="w-full h-auto object-contain">
        </div>
        {{-- opacity 24 --}}
        <div class="absolute opacity-24 transform translate-x-30 md:translate-x-174 lg:translate-x-224 xl:translate-x-264 2xl:translate-x-354 translate-y-88 md:translate-y-32 lg:-translate-y-104 xl:translate-y-16 2xl:translate-y-74 w-24 scale-100 md:scale-120 xl:scale-140">
            <img src="{{ asset('images/18.png') }}" alt="Ellipse 5" class="w-full h-auto object-contain">
        </div>

        <div class="absolute opacity-24 transform translate-x-30 md:translate-x-174 lg:translate-x-224 xl:translate-x-264 2xl:translate-x-354 translate-y-88 md:translate-y-32 lg:-translate-y-104 xl:translate-y-16 2xl:translate-y-74 w-24 scale-60 md:scale-80 xl:scale-100">
            <img src="{{ asset('images/18.png') }}" alt="Ellipse 5" class="w-full h-auto object-contain">
        </div>

        <div class="absolute opacity-24 transform translate-x-30 md:translate-x-174 lg:translate-x-224 xl:translate-x-264 2xl:translate-x-354 translate-y-88 md:translate-y-32 lg:-translate-y-104 xl:translate-y-16 2xl:translate-y-74 w-24 scale-20 md:scale-40 xl:scale-60">
            <img src="{{ asset('images/18.png') }}" alt="Ellipse 5" class="w-full h-auto object-contain">
        </div>
    </div>

    {{-- Kontainer Utama Konten (Teks & Puzzle) --}}
    <div class="container mx-auto px-4 ml:-8 md:ml-8 lg:ml-16 2xl:ml-8 lg:-mt-140 xl:-mt-40 2xl:-mt-70 pl-4 md:pl-8 xl:pl-12 2xl:pl-4 grid grid-cols-1 md:grid-cols-2 items-center gap-6 md:gap-16 lg:gap-24 relative z-20 py-1 ">

        {{-- Kolom Kiri: Teks --}}
        <div class="text-white text-center md:text-left order-1">
            <div class="grid grid-cols-1 gap-4 -ml-4  md:-ml-20 xl:-pl-30">
                <h1 class="custom-font-bebas-neue-regular font-medium leading-none uppercase text-[60.87px] md:text-[121.87px] lg:text-[141.87px] xl:text-[197.19px] -mb-6 md:-mb-10 lg:-mb-10 xl:-mb-14 animate-fade-in-up animation-delay-200">
                    RIDE AND
                </h1>
                <h1 class="custom-font-bebas-neue-regular font-medium leading-none uppercase text-[60.87px] md:text-[111.87px] lg:text-[141.87px] xl:text-[170px] 2xl:text-[197.19px] -mb-6 md:-mb-10 xl:-mb-14 animate-fade-in-up animation-delay-300">
                    GROW WITH
                </h1>
                <h1 class="text-[#FDDA7C] custom-font-bebas-neue-regular font-medium leading-none uppercase text-[60.87px] md:text-[121.87px] lg:text-[141.87px] xl:text-[197.19px] md:mb-10 xl:mb-10 2xl:text-[217.19px] animate-fade-in-up animation-delay-400">
                    DELTA VOX
                </h1>
                <p class="custom-font-bebas-neue-regular leading-none text-[30.77px] lg:text-[38.77px] xl:text-[46.55px] tracking-normal warp-y animate-fade-in-up animation-delay-500">
                    EVERY GREATNESS START<br>WITH ONE LITTLE PIECE
                </p>
            </div>
        </div>

        {{-- Kolom Kanan: Kolase Gambar Puzzle --}}
        <div class="relative w-full h-[400px] md:h-[500px] lg:h-[600px] xl:h-[700px] order-2">
            <div class="absolute w-full h-full flex justify-center md:justify-start">
                {{-- Puzzle Piece 1 img-1 --}}
                <div class="absolute transform -translate-x-16 md:-translate-x-8 lg:-translate-x-16 xl:-translate-x-10 2xl:translate-x-24 md:translate-y-10 lg:translate-y-11 xl:translate-y-20 2xl:translate-y-0 z-20 w-[170px] md:w-[230px] lg:w-[290px] xl:w-[350px] 2xl:w-[400px] animate-fade-in-down animation-delay-500">
                    <img src="{{ asset('images/act-pz-1.png') }}" alt="Puzzle Piece 1" class="w-full h-auto object-contain">
                </div>
                {{-- Puzzle Piece 2 img-2 --}}
                <div class="absolute transform translate-x-14 md:translate-x-33 lg:translate-x-36 xl:translate-x-50 2xl:translate-x-94 translate-y-25 md:translate-y-45 lg:translate-y-54 xl:translate-y-70 2xl:translate-y-58 z-50 w-[170px] md:w-[230px] lg:w-[290px] xl:w-[350px] 2xl:w-[400px] animate-fade-in-up animation-delay-500">
                    <img src="{{ asset('images/act-pz-2.png') }}" alt="Puzzle Piece 2" class="w-full h-auto object-contain">
                </div>
                {{-- Puzzle Piece 3 (Empty) --}}
                <div class="absolute transform -translate-x-16 md:translate-x-5 xl:translate-x-12 2xl:translate-x-55 translate-y-48 md:translate-y-76 lg:translate-y-93 xl:translate-y-118 2xl:translate-y-114 z-0 w-[80px] md:w-[120px] lg:w-[140px] xl:w-[180px] animate-fade-in-up animation-delay-300">
                    <img src="{{ asset('images/act-pz-3.png') }}" alt="Puzzle Piece 3" class="w-full h-auto object-contain">
                </div>
                {{-- Puzzle Piece 4 (Empty) --}}
                <div class="absolute transform translate-x-14 md:translate-x-46 lg:translate-x-53 xl:translate-x-72 2xl:translate-x-118 translate-y-4 md:translate-y-14 lg:translate-y-18 xl:translate-y-24 2xl:translate-y-12 z-0 w-[80px] md:w-[120px] lg:w-[140px] xl:w-[180px] animate-fade-in-down animation-delay-300">
                    <img src="{{ asset('images/act-pz-4.png') }}" alt="Puzzle Piece 4" class="w-full h-auto object-contain">
                </div>
            </div>
        </div>
    </div>
</section>  

{{-- Achivement Section --}}
<section class="py-20 bg-[#120E0E]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:-mt-50">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            
            {{-- Left Column: OUR ACHIEVEMENT --}}
            <div class="text-left animate-fade-in-left-1 animation-delay-300 hidden-on-load">
                <h2 class="text-6xl md:text-7xl lg:text-[100px] xl:text-[119.11px] custom-font-bebas-neue-1 font-bold text-white leading-none tracking-tight">
                    OUR <br> ACHIEVEMENT
                </h2>
            </div>

            {{-- Right Column: Award Details --}}
            <div class="text-left animate-fade-in-right-1 animation-delay-300 hidden-on-load">
                <h3 class="text-xl md:text-3xl custom-font-bebas-neue-1 font-bold text-white mb-4">
                    THE BEST NEWCOMER TEAM AWARD KMHE - 2022
                </h3>
                <p class="text-base text-gray-300 custom-font-poppins-regular leading-relaxed">
                    Delta Vox, the energy-efficient vehicle team from UPN "Veteran" East Java, made an impressive debut at the 2022 Indonesia Energy-Saving Car Competition (KMHE) by winning the Best Newcomer Team Award. With their first-ever energy-efficient car, Kalimasada
                </p>
            </div>
        </div>

        {{-- Image of the car below the text --}}
        <div class="mt-16 flex justify-center animate-fade-in-up-1 hidden-on-load animation-delay-600">
            <div class="relative custom-image-achievement-wrapper overflow-hidden rounded-xl shadow-lg w-full max-w-7xl h-auto">
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

{{-- Our Current Project Section --}}
<section class="py-20 bg-[#120E0E]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:mt-30">
        {{-- Main Column: OUR ACHIEVEMENT --}}
        <div class="text-center animate-fade-in-up-1 animation-delay-300 hidden-on-load">
            <h2 class="text-6xl md:text-7xl lg:text-[100px] xl:text-[119.11px] custom-font-bebas-neue-1 font-light text-white leading-none tracking-tight">
                Our Current <br> Project
            </h2>
        </div>

        <div class="grid grid-cols-2 gap-8 items-center">
            
            

            {{-- Right Column: Award Details --}}
            <div class="text-left animate-fade-in-right-1 animation-delay-300 hidden-on-load">
                <h3 class="text-xl md:text-3xl custom-font-bebas-neue-1 font-bold text-white mb-4">
                    THE BEST NEWCOMER TEAM AWARD KMHE - 2022
                </h3>
                <p class="text-base text-gray-300 custom-font-poppins-regular leading-relaxed">
                    Delta Vox, the energy-efficient vehicle team from UPN "Veteran" East Java, made an impressive debut at the 2022 Indonesia Energy-Saving Car Competition (KMHE) by winning the Best Newcomer Team Award. With their first-ever energy-efficient car, Kalimasada
                </p>
            </div>
        </div>

        {{-- Image of the car below the text --}}
        <div class="mt-16 flex justify-center animate-fade-in-up-1 hidden-on-load animation-delay-600">
            <div class="relative custom-image-achievement-wrapper overflow-hidden rounded-xl shadow-lg w-full max-w-7xl h-auto">
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