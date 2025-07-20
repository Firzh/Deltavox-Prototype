@extends('layouts.app')

@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('title', 'Beranda - Deltavox')
@section('description', 'Deltavox adalah komunitas mahasiswa yang berdedikasi mengembangkan teknologi mobil listrik dan menciptakan masa depan transportasi berkelanjutan.')

@section('content')
<section class="relative bg-white min-h-screen flex items-center overflow-hidden custom-bg-banner"> {{-- Ubah background dari section, tambahkan overflow-hidden --}}
    {{-- Background utama section yang lebih besar --}}
    {{-- Kelas bg-deep-blue akan menjadi warna utama di bagian atas jika gradien tidak menutupi --}}

    {{-- Div untuk gradien latar belakang - Ukuran W 1440, H 294, menempati bagian bawah --}}
    <div class="absolute bottom-0 left-0 w-full h-[294px] bg-white custom-gradient-bg"></div>
    {{-- Tailwind's w-full set 1440px if the parent is 1440px --}}
    {{-- 'h-[294px]' untuk tinggi 294px --}}
    {{-- 'bottom-0 left-0' untuk menempatkan di bagian bawah --}}
    {{-- 'custom-gradient-bg' adalah kelas CSS kustom untuk gradien --}}

    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 h-[600px] w-[900px] md:h-[700px] md:w-[1050px] lg:h-[750px] lg:w-[1125px] xl:h-[800px] xl:w-[1200px] 2xl:h-[850px] 2xl:w-[1275px] car-image-container z-10">
        <img src="{{ asset('images/car-home.png') }}" alt="Mobil Listrik Deltavox" class="absolute bottom-0 left-0 w-full h-auto object-contain">
    </div>

    {{-- Banner Section --}}
    <div class="relative z-0 mb-auto mt-30 text-center w-full px-4 sm:px-6 lg:px-8"> {{-- Ubah z-30 menjadi z-0 atau z-lowest --}}
        <div class="space-y-10"> {{-- Mengurangi space-y karena ukuran font besar --}}
            <div class="animate-fade-in-down animation-delay-0">
                <p class="text-black custom-font-sans-serif text-2xl md:text-[28.03px] lg:text-[28.03px] font-normal leading-normal tracking-normal mb-2 custom-placement-flow">
                    When focus goes energy flows
                </p>
            </div>
            <div class="animate-fade-in-down animation-delay-300">
                <h1 class="text-black custom-font-anton text-[120px] md:text-[180px] lg:text-[203.96px] font-normal leading-none tracking-tighter custom-letter-spacing">
                    DELTA VOX
                </h1>
            </div>
        </div>
    </div>
</section>

{{-- About Section --}}
<section class="py-45 min-h-screen bg-[#120E0E]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-6">
                <div class="animate-fade-in-down animation-delay-0 hidden-on-load"> {{-- Tambahkan hidden-on-load --}}
                    {{-- "WE ARE DELTA VOX" --}}
                    <h2 class="text-white custom-font-bebas-neue text-[50px] md:text-[80px] lg:text-[119.11px] font-normal leading-none">
                        <span class="block">WE ARE</span>
                        <span class="block">DELTA VOX</span>
                    </h2>
                    {{-- "Energy-Efficient Car Research Team" --}}
                    <h3 class="text-white custom-font-poppins-bold text-[20px] md:text-[25px] lg:text-[29.43px] font-bold leading-normal mb-8">
                        Energy-Efficient Car Research Team
                    </h3>
                </div>
                
                <div class="prose prose-lg text-white space-y-4 animate-fade-in-down animation-delay-300 hidden-on-load"> {{-- Tambahkan hidden-on-load --}}
                    {{-- Paragraf pertama --}}
                    <p class="custom-font-poppins-regular text-[16px] md:text-[18.48px] leading-relaxed">
                        We are currently developing innovative energy-efficient vehicles to drive a sustainable future.
                    </p>
                    
                    {{-- Paragraf kedua --}}
                    <p class="custom-font-poppins-regular text-[16px] md:text-[18.48px] leading-relaxed">
                        Our mission is to design and build cutting-edge mobility solutions, not just to compete, but to make a real impact.
                    </p>
                </div>

                <div class="pt-4 animate-fade-in-down animation-delay-600 hidden-on-load"> {{-- Tambahkan hidden-on-load --}}
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
            <div class="relative flex justify-center items-center h-full animate-fade-in-right animation-delay-300 hidden-on-load"> {{-- Tambahkan hidden-on-load --}}
                {{-- Ini adalah div frame gambar utama --}}
                {{-- Pastikan ini yang menjadi parent relative untuk elips --}}
                <div class="custom-image-frame w-[450px] h-[500px] rounded-[30px] overflow-hidden shadow-2xl -mt-10 ml-15 z-20 relative">
                    <img src="{{ asset('images/blank.png') }}" alt="Team Working" class="w-full h-full object-cover">

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
<section class="py-20 bg-gradient-to-r from-deep-blue to-electric-blue">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-black mb-6">
            Siap Bergabung dengan Revolusi Mobil Listrik?
        </h2>
        <p class="text-xl text-gray-700 mb-8 leading-relaxed">
            Bergabunglah dengan komunitas kami dan jadilah bagian dari perubahan menuju 
            transportasi yang lebih berkelanjutan dan ramah lingkungan.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact.index') }}" 
               class="bg-gray-200 text-deep-blue px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-400 transition duration-300 transform hover:scale-105 shadow-lg">
                Hubungi Kami
            </a>
            <a href="{{ route('projects.index') }}" 
               class="border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-deep-blue transition duration-300 transform hover:scale-105">
                Lihat Proyek
            </a>
        </div>
    </div>
</section>

<style>

/* Custom Styles for Animations */
@keyframes fade-in-down {
    from {
        opacity: 0;
        transform: translateY(-30px); /* Mulai dari sedikit di atas */
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-down {
    animation: fade-in-down 1s ease-out forwards;
}

@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-down {
    animation: fade-in-down 1s ease-out forwards;
}

.animate-fade-in-up {
    animation: fade-in-up 1s ease-out forwards;
}

.animation-delay-300 {
    animation-delay: 0.3s;
    opacity: 0;
}

.animation-delay-600 {  
    animation-delay: 0.6s;
    opacity: 0;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.animate-fade-in-down {
    animation: fade-in-down 1s ease-out forwards;
}

@keyframes fade-in-right {
    from {
        opacity: 0;
        transform: translateX(50px); /* Mulai dari sedikit di kanan */
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.animate-fade-in-right {
    animation: fade-in-right 1s ease-out forwards;
}

/* Hapus opacity: 0 dari sini */
.animation-delay-0 {
    animation-delay: 0s;
    /* opacity: 0; <--- HAPUS BARIS INI */
}

.animation-delay-300 {
    animation-delay: 0.3s;
    /* opacity: 0; <--- HAPUS BARIS INI */
}

.animation-delay-600 {
    animation-delay: 0.6s;
    /* opacity: 0; <--- HAPUS BARIS INI */
}

/* Tambahkan kelas ini untuk menyembunyikan elemen sebelum animasi dimulai */
.hidden-on-load {
    opacity: 0;
    /* Jika Anda ingin juga menyembunyikan pergeseran awal sebelum animasi, tambahkan: */
    /* transform: translateY(-30px); atau translateX(50px); sesuai animasinya */
    /* Namun, Intersection Observer akan langsung menerapkan kelas animasi yang sudah memiliki transform */
}

/* Custom Image Frame */
.custom-image-frame {
    /* Properti dasar untuk frame */
    display: flex;
    justify-content: center;
    align-items: center;
    /* Ubah ini jika Anda ingin menggeser seluruh frame */
    /* Misalnya, jika Anda ingin menggeser seluruh frame ke atas dan kanan: */
    /* margin-top: -60px; */ /* Geser frame ke atas */
    /* margin-left: 100px; */ /* Geser frame ke kanan */
}

/* Penempatan Gambar Elips */
.custom-ellipse-left {
    top: 0;
    height: 50%; /* Elips memanjang penuh tinggi frame */
    width: auto; /* Menjaga rasio aspek */
    object-fit: fill; /* Memastikan elips mengisi tinggi tanpa crop */
    
    /* Pengaturan posisi untuk elips kiri */
    left: 0; /* Menempel ke sisi kiri frame */
    margin-left: px; /* Geser ke luar dari frame sejauh 50px ke kiri */
    /* Sesuaikan nilai -50px ini berdasarkan lebar gambar elips Anda dan seberapa jauh Anda ingin menampilkannya */
}

.custom-ellipse-right {
    top: 0;
    height: 50%; /* Elips memanjang penuh tinggi frame */
    width: auto; /* Menjaga rasio aspek */
    object-fit: fill; /* Memastikan elips mengisi tinggi tanpa crop */
    
    /* Pengaturan posisi untuk elips kanan */
    right: 0; /* Menempel ke sisi kanan frame */
    margin-right: -1.5px; /* Geser ke luar dari frame sejauh 50px ke kanan */
    /* Sesuaikan nilai -50px ini berdasarkan lebar gambar elips Anda dan seberapa jauh Anda ingin menampilkannya */
}

/* Definisi gaya awal (tersembunyi) */
.fade-in-hidden {
    opacity: 0;
    transform: translateY(30px); /* Atau nilai lain untuk efek awal */
}

.fade-in-right-hidden {
    opacity: 0;
    transform: translateX(50px); /* Untuk elemen yang fade-in dari kanan */
}


/* Definisi animasi actual (saat kelas .animate ditambahkan) */
.animate-fade-in {
    animation: fade-in-up 1s ease-out forwards; /* Menggunakan animasi up secara default untuk semua fade-in */
}

.animate-fade-in-right {
    animation: fade-in-right 1s ease-out forwards;
}

/* Definisi keyframes */
@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fade-in-right {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Custom CSS untuk gradien background */
.custom-gradient-bg {
    background: linear-gradient(to top,
        #100C0C 0%,         /* Hitam di bagian paling bawah */
        #6c6c6ca2 37%,         /* Abu-abu sedang di 37% dari bawah */
        #E5E5E5 79%          /* Abu-abu terang di 79% dari bawah */
    );
}

.custom-bg-banner {
    background-color: #E5E5E5
}

.custom-bg-about {
    background-color: #100C0C
}

.custom-placement-flow {
    /* Sesuaikan nilai margin-bottom negatif untuk menarik teks ke bawah */
    /* Mungkin perlu menyesuaikan nilai ini tergantung pada ukuran font h1 dan p */
    margin-bottom: -30px;
    text-align: left; 
    padding-left: 430px;
}

/* Custom fonts */
/* Hapus Anton dari sini jika ingin menghostingnya secara lokal */
/* @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap'); */

/* Aturan @font-face untuk Anton jika di-host secara lokal */
@font-face {
    font-family: 'Anton';
    src: url('../fonts/Anton-Regular.ttf') format('truetype'); /* Pastikan path ini benar */
    font-weight: 400; /* Anton biasanya hanya memiliki satu weight (Regular) */
    font-style: normal;
    font-display: swap;
}

.custom-font-anton {
    font-family: 'Anton', sans-serif;
    letter-spacing: 0.025em;
}

.custom-font-sans-serif {
    font-family: 'Inter', sans-serif; /* Mengasumsikan 'Sans Serif Collection' adalah Inter atau font sans-serif default */
}

@font-face {
    font-family: 'Bebas Neue'; /* Nama untuk font ini */
    src: url('../fonts/BebasNeue-Regular.ttf') format('truetype'); /* Sesuaikan path dan nama file */
    font-weight: normal; /* Bebas Neue biasanya hanya memiliki satu ketebalan */
    font-style: normal;
    font-display: swap; /* Memperbaiki performa loading font */
}
.custom-font-bebas-neue {
    font-family: 'Bebas Neue', sans-serif;
    font-weight: 700;
}

@font-face {
    font-family: 'Poppins'; /* Nama font family */
    src: url('../fonts/poppins/Poppins-Regular.ttf') format('truetype'); /* Path ke file Poppins Regular */
    font-weight: 400; /* Ketebalan untuk Regular */
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Poppins'; /* Nama font family yang sama */
    src: url('../fonts/poppins/Poppins-Bold.ttf') format('truetype'); /* Path ke file Poppins Bold */
    font-weight: 700; /* Ketebalan untuk Bold */
    font-style: normal;
    font-display: swap;
}

.custom-font-poppins-bold {
    font-family: 'Poppins', sans-serif;
    font-weight: 700; /* Bold */
}

.custom-font-poppins-regular {
    font-family: 'Poppins', sans-serif;
    font-weight: 400; /* Regular */
}
</style>

@endsection