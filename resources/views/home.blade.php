@extends('layouts.app')

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
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-6">
                <div>
                    <h2 class="text-sm font-semibold text-electric-blue uppercase tracking-wide mb-2">Tentang Deltavox</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        Inovasi untuk Transportasi Berkelanjutan
                    </h3>
                </div>
                
                <div class="prose prose-lg text-gray-600">
                    <p class="text-xl leading-relaxed mb-6">
                        Deltavox adalah komunitas mahasiswa yang berdedikasi untuk mengembangkan 
                        teknologi mobil listrik dan menciptakan solusi transportasi yang ramah lingkungan.
                    </p>
                    
                    <p class="leading-relaxed">
                        Kami percaya bahwa masa depan transportasi terletak pada teknologi yang bersih, 
                        efisien, dan berkelanjutan. Melalui riset, pengembangan, dan kolaborasi, 
                        kami berusaha menciptakan inovasi yang dapat memberikan dampak positif bagi masyarakat.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-electric-blue rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Teknologi Terdepan</h4>
                        <p class="text-gray-600 text-sm">Menggunakan teknologi terbaru dalam pengembangan sistem mobil listrik.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-2">Ramah Lingkungan</h4>
                        <p class="text-gray-600 text-sm">Komitmen untuk menciptakan solusi yang berkelanjutan dan ramah lingkungan.</p>
                    </div>
                </div>

                <div class="pt-4">
                    <a href="{{ route('about') }}" 
                       class="inline-flex items-center text-electric-blue font-semibold hover:text-deep-blue transition duration-300">
                        Pelajari Lebih Lanjut
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="relative">
                <div class="aspect-w-16 aspect-h-12 rounded-2xl overflow-hidden shadow-2xl">
                    <div class="bg-gradient-to-br from-electric-blue to-deep-blue flex items-center justify-center">
                        <div class="text-center text-white p-8">
                            <svg class="w-24 h-24 mx-auto mb-4 opacity-80" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.22.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                            </svg>
                            <h4 class="text-2xl font-bold mb-2">Mobil Listrik Masa Depan</h4>
                            <p class="opacity-90">Teknologi inovatif untuk transportasi berkelanjutan</p>
                        </div>
                    </div>
                </div>
                
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-yellow-400 rounded-full opacity-20"></div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-electric-blue rounded-full opacity-10"></div>
            </div>
        </div>
    </div>
</section>

@if($featuredProjects->isNotEmpty())
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-electric-blue uppercase tracking-wide mb-2">Proyek Unggulan</h2>
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Inovasi Terbaru Kami
            </h3>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Discover our latest breakthrough projects in electric vehicle technology and sustainable transportation solutions.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-500 transform hover:-translate-y-2">
                <div class="aspect-w-16 aspect-h-10">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" 
                             alt="{{ $project->title }}" 
                             class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gradient-to-br from-electric-blue to-deep-blue flex items-center justify-center">
                            <svg class="w-16 h-16 text-white opacity-50" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.22.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>
                            </svg>
                        </div>
                    @endif
                </div>
                
                <div class="p-6">
                    <div class="mb-3">
                        <span class="inline-block px-3 py-1 text-sm font-semibold bg-green-100 text-green-800 rounded-full">
                            {{ ucfirst($project->status) }}
                        </span>
                    </div>
                    
                    <h4 class="text-xl font-bold text-gray-900 mb-3">{{ $project->title }}</h4>
                    <p class="text-gray-600 mb-4 line-clamp-3">{{ $project->description }}</p>
                    
                    @if($project->technologies)
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach(json_decode($project->technologies, true) ?? [] as $tech)
                                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">{{ $tech }}</span>
                            @endforeach
                        </div>
                    @endif
                    
                    <a href="{{ route('projects.show', $project) }}" 
                       class="inline-flex items-center text-electric-blue font-semibold hover:text-deep-blue transition duration-300">
                        Lihat Detail
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('projects.index') }}" 
               class="btn-primary inline-block">
                Lihat Semua Proyek
            </a>
        </div>
    </div>
</section>
@endif

@if($upcomingEvents->isNotEmpty())
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-semibold text-electric-blue uppercase tracking-wide mb-2">Event Mendatang</h2>
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Bergabunglah dengan Kami
            </h3>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Ikuti berbagai kegiatan menarik dan workshop teknologi mobil listrik yang kami selenggarakan.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($upcomingEvents as $event)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-500">
                <div class="aspect-w-16 aspect-h-10">
                    @if($event->image)
                        <img src="{{ asset('storage/' . $event->image) }}" 
                             alt="{{ $event->title }}" 
                             class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white opacity-50" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                            </svg>
                        </div>
                    @endif
                </div>
                
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                        </svg>
                        {{ $event->event_date->format('d M Y, H:i') }}
                    </div>
                    
                    <h4 class="text-xl font-bold text-gray-900 mb-3">{{ $event->title }}</h4>
                    <p class="text-gray-600 mb-4 line-clamp-3">{{ $event->description }}</p>
                    
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        {{ $event->location }}
                    </div>
                    
                    <a href="{{ route('events.show', $event) }}" 
                       class="inline-flex items-center text-electric-blue font-semibold hover:text-deep-blue transition duration-300">
                        Daftar Sekarang
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('events.index') }}" 
               class="btn-primary inline-block">
                Lihat Semua Event
            </a>
        </div>
    </div>
</section>
@endif

<section class="py-20 bg-gradient-to-r from-deep-blue to-electric-blue">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Siap Bergabung dengan Revolusi Mobil Listrik?
        </h2>
        <p class="text-xl text-gray-200 mb-8 leading-relaxed">
            Bergabunglah dengan komunitas kami dan jadilah bagian dari perubahan menuju 
            transportasi yang lebih berkelanjutan dan ramah lingkungan.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact.index') }}" 
               class="bg-white text-deep-blue px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition duration-300 transform hover:scale-105 shadow-lg">
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

/* Custom CSS untuk gradien background */
.custom-gradient-bg {
    background: linear-gradient(to top,
        #000000e7 0%,         /* Hitam di bagian paling bawah */
        #6c6c6ca2 37%,         /* Abu-abu sedang di 37% dari bawah */
        #E5E5E5 79%          /* Abu-abu terang di 79% dari bawah */
    );
}

.custom-bg-banner {
    background-color: #E5E5E5
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
</style>

@endsection