@extends('layouts.app')

@section('title', 'About - Deltavox')
@section('description', 'Mengenal lebih lanjut apa itu Deltavox.')

@section('content')
<section id="dark-section" class="relative w-full h-[60dvh] md:h-[74dvh] lg:h-[140dvh] xl:h-[120dvh] 2xl:h-[140dvh] bg-[#120E0E] flex items-center justify-center overflow-hidden">
    <div class="container mx-auto px-4 mt-16 mb-6 xl:-mt-40 grid grid-cols-1 items-center gap-6 md:gap-16 lg:gap-24 relative z-20 py-1">

        {{-- Konten Teks --}}
        <div class=" mb-20 -mt-10 md:-mt-10 md:mb-20 lg:mt-30 lg:mb-10 xl:mt-0 xl:mb-10 animate-fade-in animation-delay-200 order-1">
            <h1 class="text-[#FDDA7C] custom-font-bebas-neue-regular-1 font-bold text-center leading-none uppercase text-3xl md:text-6xl lg:text-[132.42px]">
                ABOUT DELTA VOX
            </h1>
            <p class="text-white custom-font-poppins-regular text-center leading-relaxed text-[12px] md:text-[18px] lg:text-[24px] mt-2">
                things that you must know and how it began
            </p>
        </div>

        {{-- Galeri Gambar Telah Disesuaikan untuk Konsistensi --}}
        <div class="w-full flex items-center justify-center relative order-2">
            {{-- Menggunakan grid dengan gap konsisten --}}
            <div class="grid grid-cols-5 gap-4 md:gap-6 lg:gap-8 w-full h-full relative items-center justify-center">

                {{-- Gambar 1: Ukuran kecil, rotasi kiri --}}
                <div class="animate-fade-in-wave-down animation-delay-500">
                    <div class="relative z-20 transform -translate-y-16 md:-translate-y-10 lg:-translate-12 xl:-translate-24 scale-80 md:scale-100 lg:translate-x-2 xl:-translate-x-4 lg:-ml-4">
                        <img src="{{ asset('images/about1.png') }}" alt="Car Part 1" class="w-full h-auto object-cover rounded-[20px] transform scale-[0.8]">
                    </div>
                </div>
                {{-- Gambar 2: Ukuran sedang, rotasi kanan --}}
                <div class="animate-fade-in-wave-up animation-delay-400">
                    <div class="relative z-40 transform -translate-y-16 md:-translate-y-6 lg:-translate-y-12 scale-90 lg:scale-115 md:translate-x- lg:-translate-x-4 xl:-translate-x-10 -ml-4 lg:ml-0">
                        <img src="{{ asset('images/about2.png') }}" alt="Car Part 2" class="w-full h-auto object-cover rounded-[20px] transform scale-[0.9]">
                    </div>
                </div>
                {{-- Gambar 3 (tengah): Ukuran penuh --}}
                <div class="animate-fade-in-wave-down animation-delay-300">
                    <div class="relative transform scale-125 -translate-y-8 md:translate-y-2 z-50">
                        <img src="{{ asset('images/about3.png') }}" alt="Car Part 3" class="w-full h-auto object-cover rounded-[20px] shadow-2xl">
                    </div>
                </div>
                {{-- Gambar 4: Ukuran sedang, rotasi kiri --}}
                <div class="animate-fade-in-wave-up animation-delay-400">
                    <div class="relative z-40 transform -translate-y-16 md:-translate-y-6 lg:-translate-y-12 scale-90 lg:scale-115 md:translate-x- lg:translate-x-4 xl:translate-x-10 -mr-4 lg:mr-2">
                        <img src="{{ asset('images/about4.png') }}" alt="Car Part 4" class="w-full h-auto object-cover rounded-[20px] transform scale-[0.9]">
                    </div>
                </div>
                {{-- Gambar 5: Ukuran kecil, rotasi kanan --}}
                <div class="animate-fade-in-wave-down animation-delay-500">
                    <div class="relative z-20 transform -translate-y-16 md:-translate-y-10 lg:-translate-y-12 xl:-translate-24 scale-80 md:scale-100  lg:-translate-x-4 xl:translate-x-4 lg:-mr-4">
                        <img src="{{ asset('images/about5.png') }}" alt="Car Part 5" class="w-full h-auto object-cover rounded-[20px] transform scale-[0.8]">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="bg-[#120E0E] py-20">
    <div class="max-w-7xl mx-auto px-4">
        {{-- Konten Teks diatur dalam grid satu kolom --}}
        <div class="grid grid-cols-1 gap-4 text-left ml-8 mb-40 mr-8 md:ml-12 lg:ml-8 xl:ml-0">
            <h1 class="text-[#FDDA7C] custom-font-bebas-neue-regular-1 font-bold leading-none uppercase text-2xl md:text-3xl lg:text-[44.66px] animate-fade-in-up-1 animation-delay-200">
                DELTA VOX HISTORY
            </h1>
            <p class="text-white custom-font-poppins-regular leading-relaxed text-xs sm:text-[14px] lg:text-[24px] animate-fade-in-up-1 animation-delay-200">
                Founded in 2022, Delta Vox was born from a shared vision among passionate students aiming to revolutionize energy-efficient mobility.
            </p>
            <p class="text-white custom-font-poppins-regular leading-relaxed text-xs sm:text-[14px] lg:text-[24px] animate-fade-in-up-1 animation-delay-200">
                With a commitment to innovation and sustainability, Delta Vox has continually pushed the boundaries of automotive technology, focusing on the development of fuel-efficient vehicles that redefine the future of transportation.
            </p>
        </div>
    </div>
</section>

<section class="bg-[#120E0E] py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8 ml-8 mb-40 mr-8 md:ml-12 lg:ml-8 xl:ml-0">
            {{-- Kolom Pertama: Gambar --}}
            <div class="animate-fade-in-up-1 animation-delay-200 order-1">
                <img src="{{ asset('images/about-part-3.png') }}" alt="Kalimasada Car About" class="w-full h-auto object-contain">
            </div>

            {{-- Kolom Kedua: Teks --}}
            <div class="text-left order-2">
                <p class="text-white custom-font-poppins-regular leading-relaxed text-xs sm:text-[14px] lg:text-[24px] animate-fade-in-right-1 animation-delay-200">
                    From its humble beginnings as a student-led initiative, Delta Vox has grown into a dedicated organization that competes in national and international competitions. 
                </p>
                <p class="text-white custom-font-poppins-regular leading-relaxed text-xs sm:text-[14px] lg:text-[24px] mt-4 animate-fade-in-right-1 animation-delay-200">
                    Through rigorous research, design, and engineering, our team continuously refines and enhances our vehicle prototypes, setting new standards in the field of energy-efficient mobility.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-[#120E0E] py-20">
    <div class="max-w-7xl mx-auto px-4">
        {{-- Menggunakan kelas grid dan spacing yang sama dengan section 3 --}}
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8 ml-8 mb-40 mr-8 md:ml-12 lg:ml-8 xl:ml-0">
            {{-- Kolom Pertama: Gambar --}}
            <div class="animate-fade-in-up-1 animation-delay-200 order-1">
                <img src="{{ asset('images/about-part-4.png') }}" alt="Kalimasada Car About" class="w-full h-auto object-contain">
            </div>

            {{-- Kolom Kedua: Teks --}}
            <div class="text-left order-2">
                <p class="text-white custom-font-poppins-regular leading-relaxed text-xs sm:text-[14px] lg:text-[24px] animate-fade-in-right-1 animation-delay-200">
                    Each milestone achieved reflects our unwavering dedication to progress, collaboration, and excellence. 
                </p>
                <p class="text-white custom-font-poppins-regular leading-relaxed text-xs sm:text-[14px] lg:text-[24px] mt-4 animate-fade-in-right-1 animation-delay-200">
                    As we look toward the future, Delta Vox remains committed to inspiring the next generation of engineers and innovators in creating a more sustainable world.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection