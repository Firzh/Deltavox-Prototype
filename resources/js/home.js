    document.addEventListener('DOMContentLoaded', () => {
    // KODE JAVASCRIPT LAMA UNTUK ANIMASI FADE-IN SAAT SCROLL DI SINI...
    const animatedElements = document.querySelectorAll('.animate-fade-in-down, .animate-fade-in-right, .animate-fade-in-up');

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('hidden-on-load');
                observer.unobserve(entry.target);
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    animatedElements.forEach(element => {
        if (!element.classList.contains('hidden-on-load')) {
            element.classList.add('hidden-on-load');
        }
        observer.observe(element);
    });

    // KODE JAVASCRIPT BARU UNTUK CAROUSEL DIMULAI DI SINI
    const carouselSlideAbout = document.querySelector('.carousel-slide-about-section');
    const carouselImagesAbout = document.querySelectorAll('.carousel-slide-about-section img');
    const prevBtnAbout = document.querySelector('.carousel-btn-about-section.prev');
    const nextBtnAbout = document.querySelector('.carousel-btn-about-section.next');
    const dotsContainerAbout = document.querySelector('.carousel-dots-about-section');
    const dotsAbout = document.querySelectorAll('.dot-about-section');

    let counterAbout = 0;
    // Pastikan size dihitung setelah gambar dimuat atau pada resize
    let sizeAbout = carouselImagesAbout[0] ? carouselImagesAbout[0].clientWidth : 0; 

    // Set posisi awal carousel
    if (carouselSlideAbout && sizeAbout > 0) {
        carouselSlideAbout.style.transform = 'translateX(' + (-sizeAbout * counterAbout) + 'px)';
    }

    // Fungsi untuk memperbarui indikator titik
    function updateDotsAbout() {
        dotsAbout.forEach(dot => dot.classList.remove('active'));
        if (dotsAbout[counterAbout]) { // Tambahkan pengecekan null/undefined
            dotsAbout[counterAbout].classList.add('active');
        }
    }

    // Fungsi untuk menggeser slide ke depan
    function nextSlideAbout() {
        if (counterAbout >= carouselImagesAbout.length - 1) {
            counterAbout = 0;
        } else {
            counterAbout++;
        }
        carouselSlideAbout.style.transform = 'translateX(' + (-sizeAbout * counterAbout) + 'px)';
        updateDotsAbout();
    }

    // Fungsi untuk menggeser slide ke belakang
    function prevSlideAbout() {
        if (counterAbout <= 0) {
            counterAbout = carouselImagesAbout.length - 1;
        } else {
            counterAbout--;
        }
        carouselSlideAbout.style.transform = 'translateX(' + (-sizeAbout * counterAbout) + 'px)';
        updateDotsAbout();
    }

    // Tombol Next
    if (nextBtnAbout) { // Pastikan tombol ada sebelum menambahkan event listener
        nextBtnAbout.addEventListener('click', () => {
            nextSlideAbout();
            resetAutoSlideAbout();
        });
    }

    // Tombol Previous
    if (prevBtnAbout) { // Pastikan tombol ada sebelum menambahkan event listener
        prevBtnAbout.addEventListener('click', () => {
            prevSlideAbout();
            resetAutoSlideAbout();
        });
    }

    // Navigasi dengan titik
    if (dotsContainerAbout) { // Pastikan container dots ada
        dotsContainerAbout.addEventListener('click', (e) => {
            if (e.target.classList.contains('dot-about-section')) {
                const slideIndex = parseInt(e.target.dataset.slideIndex);
                counterAbout = slideIndex;
                carouselSlideAbout.style.transform = 'translateX(' + (-sizeAbout * counterAbout) + 'px)';
                updateDotsAbout();
                resetAutoSlideAbout();
            }
        });
    }

    const autoSlideIntervalAbout = 3000;
    let slideIntervalAbout = setInterval(nextSlideAbout, autoSlideIntervalAbout);

    function resetAutoSlideAbout() {
        clearInterval(slideIntervalAbout);
        slideIntervalAbout = setInterval(nextSlideAbout, autoSlideIntervalAbout);
    }

    // Opsional: Respon terhadap perubahan ukuran window (untuk update ukuran slide)
    window.addEventListener('resize', () => {
        if (carouselImagesAbout[0]) { // Pastikan ada gambar sebelum mengakses clientWidth
            sizeAbout = carouselImagesAbout[0].clientWidth;
            if (carouselSlideAbout) {
                 carouselSlideAbout.style.transform = 'translateX(' + (-sizeAbout * counterAbout) + 'px)';
            }
        }
    });

    // Panggil updateDotsAbout() saat inisialisasi untuk memastikan titik aktif diatur dengan benar
    updateDotsAbout();
});
