<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda')</title>
    @vite('resources/css/app.css')
</head>
<body class="pt-18">
    @include('layouts.header')

    <style>
        /* Custom animation for text */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-down {
            animation: fadeInDown 1s ease-out;
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out;
        }
        
        /* Slider Button Styles */
        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            color: white;
            background: transparent;
            border: none;
            cursor: pointer;
            z-index: 10;
            padding: 0.5rem 1rem;
            transition: background 0.3s ease, transform 0.3s ease, color 0.3s ease;
            outline: none; /* Menghilangkan border fokus default */
        }
        
        /* Posisi tombol kiri dan kanan */
        .slider-btn.left {
            left: 1rem;
        }
        
        .slider-btn.right {
            right: 1rem;
        }
        
        /* Hover efek untuk background cerah */
        .slider-btn:hover {
            background: #2392f9; /* Warna kuning cerah */
            transform: scale(1.1);
            color: #0f172a; /* Warna teks jadi gelap untuk kontras */
        }
        
        /* Saat fokus menggunakan keyboard (tidak ada bekas tombol yang ditekan) */
        .slider-btn:focus {
            outline: none;
            box-shadow: none; /* Hilangkan efek visual */
        }
        </style>
        
        <!-- Slider Section -->
        <div class="relative h-screen mt-16 md:mt-0 overflow-hidden">
            <div class="absolute inset-0 h-full flex items-center justify-center">
                <!-- Slide 1 -->
                <div class="slide opacity-0 transition-opacity duration-700 ease-in-out relative w-full h-full hidden">
                    <img src="asset/image1.jpeg" alt="Image 1" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-blue-500 opacity-50"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 animate-slide">
                        <h2 class="text-2xl md:text-5xl font-bold text-white animate-fade-in-down">Selamat Datang di PT. Digital Raya Fokus</h2>
                        <p class="text-md md:text-xl text-white mt-2 animate-fade-in-up">Mitra terpercaya Anda untuk solusi IT yang inovatif dan profesional.</p>
                    </div>
                </div>
        
                <!-- Slide 2 -->
                <div class="slide opacity-0 transition-opacity duration-700 ease-in-out relative w-full h-full hidden">
                    <img src="asset/image2.jpeg" alt="Image 2" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-blue-500 opacity-50"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 animate-slide">
                        <h2 class="text-2xl md:text-5xl font-bold text-white animate-fade-in-down">Inovasi untuk Bisnis Anda</h2>
                        <p class="text-md md:text-xl text-white mt-2 animate-fade-in-up">Kami membantu meningkatkan efisiensi dan produktivitas bisnis Anda.</p>
                    </div>
                </div>
        
                <!-- Slide 3 -->
                <div class="slide opacity-0 transition-opacity duration-700 ease-in-out relative w-full h-full hidden">
                    <img src="asset/image3.jpeg" alt="Image 3" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-blue-500 opacity-50"></div>
                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 animate-slide">
                        <h2 class="text-2xl md:text-5xl font-bold text-white animate-fade-in-down">Solusi IT untuk Masa Depan</h2>
                        <p class="text-md md:text-xl text-white mt-2 animate-fade-in-up">Bersama PT. Digital Raya Fokus, capai tujuan digital Anda dengan mudah.</p>
                    </div>
                </div>
        
                <!-- Arrow Navigation with Animated Buttons -->
                <button class="slider-btn left" onclick="prevSlide()">&#10094;</button>
                <button class="slider-btn right" onclick="nextSlide()">&#10095;</button>
            </div>
        </div>
        
        <script>
            let slideIndex = 0;
            const slides = document.querySelectorAll('.slide');
        
            // Function to show the slide with fade animation
            function showSlides(index) {
                slides.forEach((slide, i) => {
                    slide.classList.add('opacity-0', 'hidden');
                    slide.classList.remove('opacity-100');
                    if (i === index) {
                        slide.classList.remove('hidden');
                        setTimeout(() => {
                            slide.classList.add('opacity-100');
                            slide.classList.remove('opacity-0');
                        }, 10);
                    }
                });
            }
        
            // Next/Previous controls
            function nextSlide() {
                slideIndex = (slideIndex + 1) % slides.length;
                showSlides(slideIndex);
            }
        
            function prevSlide() {
                slideIndex = (slideIndex - 1 + slides.length) % slides.length;
                showSlides(slideIndex);
            }
        
            // Initialize slider
            showSlides(slideIndex);
        
            // Keyboard navigation
            document.addEventListener('keydown', function (event) {
                if (event.key === 'ArrowRight') {
                    nextSlide();
                } else if (event.key === 'ArrowLeft') {
                    prevSlide();
                }
            });
        </script>
        


    @include('layouts.footer')
</body>
</html>
