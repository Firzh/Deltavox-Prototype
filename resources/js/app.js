import './bootstrap';

// resources/js/app.js atau di app.blade.php

document.addEventListener('DOMContentLoaded', () => {
    const animatedElements = document.querySelectorAll('.animate-fade-in-down, .animate-fade-in-right');

    const observerOptions = {
        root: null, // Mengamati viewport
        rootMargin: '0px',
        threshold: 0.1 // Ketika 10% dari elemen terlihat, pemicu callback
    };

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Elemen terlihat
                entry.target.classList.remove('hidden-on-load'); // Hapus kelas tersembunyi
                // Biarkan kelas animasi (animate-fade-in-down/right) tetap ada
                // Agar animasi hanya berjalan sekali, bisa juga hentikan pengamatan:
                observer.unobserve(entry.target);
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    animatedElements.forEach(element => {
        // Tambahkan kelas hidden-on-load pada setiap elemen yang akan dianimasikan
        // Jika belum ditambahkan di HTML
        if (!element.classList.contains('hidden-on-load')) {
            element.classList.add('hidden-on-load');
        }
        observer.observe(element);
    });
});