
    <style>
     
     
        .fleet-container {
            width: 100%;
            margin: 0 auto;
            padding: 0;
        }

        .fleet-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .carousel-container {
            margin-top: -35px;
            position: relative;
            width: 98.5vw;
            overflow: hidden;
            padding: 0px 0px;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            width: fit-content;
        }

        .vehicle-card {
            flex: 0 0 auto;
            width: calc(100vw / 4);
            margin: 0;
            transition: all 0.3s ease;
            cursor: pointer;
            text-align: center;
        }

        .vehicle-card:hover {
            transform: translateY(-5px);
        }

        .vehicle-image {
            width: 100%;
            height: 200px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .vehicle-image img {
            width: 80%;
            height: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .vehicle-card:hover .vehicle-image img {
            transform: scale(1.05);
        }

        .vehicle-info {
            padding: 20px 10px;
            text-align: center;
        }

        .vehicle-name {
            font-size: 1.4rem;
            font-weight: bold;
            color:#0066ff;
            margin: 0;
    
        }

        .vehicle-type {
            font-size: 0.9rem;
            color: #7f8c8d;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .navigation-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        .nav-arrow {
            color: #060606;
            border: none;
            width: 40px;
            height: 40px;
            cursor: pointer;
            font-size: 2.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-arrow:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        /* Mobile Responsive */
        @media (max-width: 1200px) {
            .vehicle-card {
                width: calc(100vw / 3.5);
            }
        }

        @media (max-width: 768px) {
            .fleet-title {
                font-size: 2rem;
                margin-bottom: -40px;
                padding: 0 20px;
            }

            .vehicle-card {
                width: calc(100vw / 2.5);
            }

            .vehicle-image {
                height: 150px;
            }

            .vehicle-name {
                font-size: 1.2rem;
            }

            .nav-arrow {
                width: 35px;
                height: 35px;
                font-size: 2.5rem;
            }

            .navigation-buttons {
                gap: 12px;
            }
        }

        /* Show single vehicle on small screens */
        @media (max-width: 480px) {
            .vehicle-card {
                width: 100vw;
            }

            .vehicle-image {
                height: 200px;
            }

              .vehicle-image img {
            width: 100%;
          
        }

            .vehicle-info {
                padding: 20px 15px;
            }

            .vehicle-name {
                font-size: 1.3rem;
            }

            .nav-arrow {
                width: 35px;
                height: 35px;
                font-size: 2.5rem;
            }

            .navigation-buttons {
                gap: 15px;
                margin-top: 30px;
            }
        }

        @media (max-width: 320px) {
            .vehicle-card {
                width: 100vw;
            }

            .vehicle-image {
                height: 180px;
            }

            .vehicle-name {
                font-size: 1.2rem;
            }

            .nav-arrow {
                width: 32px;
                height: 32px;
                font-size: 1.1rem;
            }
        }
    </style>

    <div class="fleet-container">
        <h1 class="fleet-title">Meet the  <span style="color:#0066ff;" >Fleet</span> </h1>

        <div class="carousel-container">
            <div class="carousel-track" id="carouselTrack">

                <div class="vehicle-card">
                    <div class="vehicle-image">
                        <img src="./images/car/compact-nissan-versa.avif" alt="Compact Car" />
                    </div>
                    <div class="vehicle-info">
                        <h3 class="vehicle-name">Compact Car</h3>
                    </div>
                </div>

                <div class="vehicle-card">
                    <div class="vehicle-image">
                        <img src="./images/car/luxury-cadi-xts.avif" alt="Luxury Car" />
                    </div>
                    <div class="vehicle-info">
                        <h3 class="vehicle-name">Luxury Car</h3>
                    </div>
                </div>

                <div class="vehicle-card">
                    <div class="vehicle-image">
                        <img src="./images/car/suv-santa-fe.avif" alt="Standard SUV" />
                    </div>
                    <div class="vehicle-info">
                        <h3 class="vehicle-name">Standard SUV</h3>
                    </div>
                </div>

                <div class="vehicle-card">
                    <div class="vehicle-image">
                        <img src="./images/car/van-chrysler-pacifica.avif" alt="Minivan" />
                    </div>
                    <div class="vehicle-info">
                        <h3 class="vehicle-name">Minivan</h3>
                    </div>
                </div>

                <div class="vehicle-card">
                    <div class="vehicle-image">
                        <img src="./images/car/truck-ford-f150.avif" alt="Pickup Truck" />
                    </div>
                    <div class="vehicle-info">
                        <h3 class="vehicle-name">Pickup Truck</h3>
                    </div>
                </div>

                <!-- Duplicate set for infinite scroll -->
                <div class="vehicle-card">
                    <div class="vehicle-image">
                        <img src="./images/car/compact-nissan-versa.avif" alt="Compact Car" />
                    </div>
                    <div class="vehicle-info">
                        <h3 class="vehicle-name">Compact Car</h3>
                    </div>
                </div>

                <div class="vehicle-card">
                    <div class="vehicle-image">
                        <img src="./images/car/luxury-cadi-xts.avif" alt="Luxury Car" />
                    </div>
                    <div class="vehicle-info">
                        <h3 class="vehicle-name">Luxury Car</h3>
                    </div>
                </div>

                <div class="vehicle-card">
                    <div class="vehicle-image">
                        <img src="./images/car/suv-santa-fe.avif" alt="Standard SUV" />
                    </div>
                    <div class="vehicle-info">
                        <h3 class="vehicle-name">Standard SUV</h3>
                    </div>
                </div>

                <div class="vehicle-card">
                    <div class="vehicle-image">
                        <img src="./images/car/van-chrysler-pacifica.avif" alt="Minivan" />
                    </div>
                    <div class="vehicle-info">
                        <h3 class="vehicle-name">Minivan</h3>
                    </div>
                </div>

                <div class="vehicle-card">
                    <div class="vehicle-image">
                        <img src="./images/car/truck-ford-f150.avif" alt="Pickup Truck" />
                    </div>
                    <div class="vehicle-info">
                        <h3 class="vehicle-name">Pickup Truck</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="navigation-buttons">
            <button class="nav-arrow" onclick="prevSlide()">‹</button>
            <button class="nav-arrow" onclick="nextSlide()">›</button>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const track = document.getElementById('carouselTrack');
        const totalCards = 5; // Number of unique vehicles
        let isTransitioning = false;

        // Function to get card width based on screen size
        function getCardWidth() {
            if (window.innerWidth <= 480) {
                return window.innerWidth; // Full width on small screens
            } else if (window.innerWidth <= 1200) {
                return window.innerWidth / 3.5;
            } else {
                return window.innerWidth / 4;
            }
        }

        // Initialize carousel position
        function initializeCarousel() {
            const cardWidth = getCardWidth();
            if (window.innerWidth <= 480) {
                // On small screens, start at first card with no offset
                track.style.transform = `translateX(0px)`;
            } else {
                // On larger screens, show multiple cards with offset
                const initialOffset = -(cardWidth * 0.5);
                track.style.transform = `translateX(${initialOffset}px)`;
            }
        }

        function updateCarousel(animate = true) {
            if (!animate) {
                track.style.transition = 'none';
            } else {
                track.style.transition = 'transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            }

            const cardWidth = getCardWidth();
            let offset;
            
            if (window.innerWidth <= 480) {
                // On small screens, move full card width
                offset = -(currentIndex * cardWidth);
            } else {
                // On larger screens, maintain the original offset logic
                const initialOffset = -(cardWidth * 0.5);
                offset = initialOffset - (currentIndex * cardWidth);
            }
            
            track.style.transform = `translateX(${offset}px)`;

            if (!animate) {
                // Force reflow and restore transition
                track.offsetHeight;
                track.style.transition = 'transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            }
        }

        function nextSlide() {
            if (isTransitioning) return;

            isTransitioning = true;
            currentIndex++;
            updateCarousel();

            // Handle infinite scroll reset
            setTimeout(() => {
                if (currentIndex >= totalCards) {
                    currentIndex = 0;
                    updateCarousel(false);
                }
                isTransitioning = false;
            }, 500);
        }

        function prevSlide() {
            if (isTransitioning) return;

            isTransitioning = true;

            if (currentIndex <= 0) {
                currentIndex = totalCards;
                updateCarousel(false);
                setTimeout(() => {
                    currentIndex = totalCards - 1;
                    updateCarousel();
                    setTimeout(() => {
                        isTransitioning = false;
                    }, 500);
                }, 50);
            } else {
                currentIndex--;
                updateCarousel();
                setTimeout(() => {
                    isTransitioning = false;
                }, 500);
            }
        }

        // Initialize on load
        initializeCarousel();

        // Handle window resize
        window.addEventListener('resize', () => {
            updateCarousel(false);
        });

        // Touch/swipe support for mobile
        let startX = 0;
        let startY = 0;
        let isDown = false;

        track.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
            isDown = true;
        });

        track.addEventListener('touchmove', (e) => {
            if (!isDown) return;
            e.preventDefault();
        });

        track.addEventListener('touchend', (e) => {
            if (!isDown) return;
            isDown = false;

            const endX = e.changedTouches[0].clientX;
            const endY = e.changedTouches[0].clientY;
            const diffX = startX - endX;
            const diffY = startY - endY;

            // Check if horizontal swipe is more prominent than vertical
            if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 50) {
                if (diffX > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
            }
        });
    </script>
