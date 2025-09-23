    <header class="slider-container" id="slider-container">
        <div class="hero">
            <div class="slider-wrapper">
                <div class="slider-slide">
                    <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600"
                        alt="Pemandangan Alam 1" class="slider-image">
                </div>
                <div class="slider-slide">
                    <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600"
                        alt="Pemandangan Alam 2" class="slider-image">
                </div>
                <div class="slider-slide">
                    <img src="https://images.unsplash.com/photo-1470770841072-f978cf4d019e?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600"
                        alt="Pemandangan Alam 3" class="slider-image">
                </div>
            </div>
        </div>

        <button id="prev-button" class="prev-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="slider-icon" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button id="next-button" class="next-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="slider-icon" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <div id="slider-dots" class="slider-dots">
        </div>
    </header>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sliderWrapper = document.querySelector('.slider-wrapper');
            const slides = document.querySelectorAll('.slider-slide');
            const prevButton = document.getElementById('prev-button');
            const nextButton = document.getElementById('next-button');
            const dotsContainer = document.getElementById('slider-dots');

            let currentIndex = 0;
            const totalSlides = slides.length;

            // Membuat dots indikator
            for (let i = 0; i < totalSlides; i++) {
                const dot = document.createElement('button');
                dot.classList.add('slider-dot');
                dot.addEventListener('click', () => {
                    goToSlide(i);
                });
                dotsContainer.appendChild(dot);
            }
            const dots = dotsContainer.querySelectorAll('button');

            function updateDots() {
                dots.forEach((dot, index) => {
                    if (index === currentIndex) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
            }

            function goToSlide(index) {
                if (index < 0) {
                    currentIndex = totalSlides - 1;
                } else if (index >= totalSlides) {
                    currentIndex = 0;
                } else {
                    currentIndex = index;
                }
                sliderWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
                updateDots();
            }

            nextButton.addEventListener('click', () => {
                goToSlide(currentIndex + 1);
            });

            prevButton.addEventListener('click', () => {
                goToSlide(currentIndex - 1);
            });

            // Auto-play slider (opsional)
            let autoPlayInterval = setInterval(() => {
                goToSlide(currentIndex + 1);
            }, 5000); // Ganti slide setiap 5 detik

            // Hentikan auto-play saat mouse di atas slider
            const sliderContainer = document.getElementById('slider-container');
            sliderContainer.addEventListener('mouseenter', () => {
                clearInterval(autoPlayInterval);
            });

            // Lanjutkan auto-play saat mouse keluar dari slider
            sliderContainer.addEventListener('mouseleave', () => {
                autoPlayInterval = setInterval(() => {
                    goToSlide(currentIndex + 1);
                }, 5000);
            });

            goToSlide(0);
        });
    </script>
