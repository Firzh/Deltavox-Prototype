document.addEventListener('DOMContentLoaded', () => {

    function setupCarousel(containerSelector, slideSelector, prevBtnSelector, nextBtnSelector, dotsContainerSelector, dotSelector) {
        const carouselContainer = document.querySelector(containerSelector);
        if (!carouselContainer) return;

        const carouselSlide = carouselContainer.querySelector(slideSelector);
        const carouselImages = carouselContainer.querySelectorAll(`${slideSelector} img`);
        const prevBtn = carouselContainer.querySelector(prevBtnSelector);
        const nextBtn = carouselContainer.querySelector(nextBtnSelector);
        const dotsContainer = carouselContainer.querySelector(dotsContainerSelector);
        const dots = carouselContainer.querySelectorAll(dotSelector);

        let counter = 0;
        let size = carouselImages[0] ? carouselImages[0].clientWidth : 0;
        let slideInterval;
        const interval = parseInt(carouselContainer.dataset.interval);

        function updateDots() {
            dots.forEach(dot => dot.classList.remove('active'));
            if (dots[counter]) {
                dots[counter].classList.add('active');
            }
        }

        function nextSlide() {
            if (counter >= carouselImages.length - 1) {
                counter = 0;
            } else {
                counter++;
            }
            carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
            updateDots();
        }

        function prevSlide() {
            if (counter <= 0) {
                counter = carouselImages.length - 1;
            } else {
                counter--;
            }
            carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
            updateDots();
        }

        function resetAutoSlide() {
            if (interval > 0) {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, interval);
            }
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetAutoSlide();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetAutoSlide();
            });
        }

        if (dotsContainer) {
            dotsContainer.addEventListener('click', (e) => {
                if (e.target.classList.contains(dotSelector.slice(1))) {
                    const slideIndex = parseInt(e.target.dataset.slideIndex);
                    counter = slideIndex;
                    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
                    updateDots();
                    resetAutoSlide();
                }
            });
        }
        
        // Mulai pengguliran otomatis
        resetAutoSlide();

        window.addEventListener('resize', () => {
            if (carouselImages[0]) {
                size = carouselImages[0].clientWidth;
                carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
            }
        });

        updateDots();
    }

    // Panggilan untuk carousel home.blade (jika ada, Anda perlu memastikan kelasnya unik)
    // setupCarousel('.carousel-container-about-section', '.carousel-slide-about-section', '.carousel-btn-about-section.prev', '.carousel-btn-about-section.next', '.carousel-dots-about-section', '.dot-about-section');

    // Panggilan untuk carousel car.blade
    setupCarousel('.carousel-container-car-1', '.carousel-slide-car-1', '.carousel-btn-car-1.prev', '.carousel-btn-car-1.next', '.carousel-dots-car-1', '.dot-car-1');
    setupCarousel('.carousel-container-car-2', '.carousel-slide-car-2', '.carousel-btn-car-2.prev', '.carousel-btn-car-2.next', '.carousel-dots-car-2', '.dot-car-2');
});