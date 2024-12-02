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
    
        /* Slider Styles */
        .slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
    
        .slide.opacity-100 {
            opacity: 1;
        }
    
        .slide.hidden {
            display: none;
        }
    </style>
    
    <!-- Slider Section -->
    <div class="relative h-screen mt-16 md:mt-0 overflow-hidden">
        <div class="absolute inset-0 h-full flex items-center justify-center">
            <!-- Slide 1 -->
            <div class="slide opacity-0 hidden">
                <img src="asset/image1.jpeg" alt="Image 1" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-head opacity-30"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 animate-slide">
                    <h2 class="text-2xl md:text-5xl font-bold text-white animate-fade-in-down">Selamat Datang di PT. Digital Raya Fokus</h2>
                    <p class="text-md md:text-xl text-white mt-2 animate-fade-in-up">Mitra terpercaya Anda untuk solusi IT yang inovatif dan profesional.</p>
                </div>
            </div>
    
            <div class="slide opacity-0 hidden">
                <img src="asset/image2.jpeg" alt="Image 2" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-head opacity-30"></div>
                <div class="absolute inset-0 flex items-center px-8 md:px-16">
                    <div class="max-w-sm">
                        <h2 class="text-2xl md:text-4xl font-bold text-white animate-fade-in-down leading-snug">
                            Konsultasikan Kebutuhan Anda dan Dapatkan Solusi Terbaik
                        </h2>
                        <a href="/kontak" class="mt-6 px-6 py-3 bg-head hover:bg-mint text-white font-semibold text-lg rounded-md block text-center animate-fade-in-up">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
            
        </div>            
    
    </div>
    
    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const slideDuration = 10000; // 10 seconds
    
        // Function to show the current slide
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
    
        // Function to navigate slides
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
    
        // Automatic slide transition
        setInterval(nextSlide, slideDuration);
    
        // Keyboard navigation
        document.addEventListener('keydown', function (event) {
            if (event.key === 'ArrowRight') {
                nextSlide();
            } else if (event.key === 'ArrowLeft') {
                prevSlide();
            }
        });
</script>    

<section class="py-16 bg-gray-100">
    <!-- Judul -->
    <div class="text-center mb-12">
        <h3 class="text-3xl md:text-5xl font-bold text-head">
            Solusi untuk Segala<br> Kebutuhan Anda
        </h3>
    </div>

    <!-- Card Section -->
    <div class="container mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="mb-4">
                <img src="asset/feature1.svg" alt="Feature 1" class="w-16 h-16 mx-auto">
            </div>
            <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">
                Fitur 1
            </h3>
            <p class="text-gray-600 text-center">
                Deskripsi singkat fitur 1 yang akan ditampilkan di sini.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="mb-4">
                <img src="asset/feature2.svg" alt="Feature 2" class="w-16 h-16 mx-auto">
            </div>
            <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">
                Fitur 2
            </h3>
            <p class="text-gray-600 text-center">
                Deskripsi singkat fitur 2 yang akan ditampilkan di sini.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="mb-4">
                <img src="asset/feature3.svg" alt="Feature 3" class="w-16 h-16 mx-auto">
            </div>
            <h3 class="text-xl font-semibold text-gray-800 text-center mb-2">
                Fitur 3
            </h3>
            <p class="text-gray-600 text-center">
                Deskripsi singkat fitur 3 yang akan ditampilkan di sini.
            </p>
        </div>
    </div>
</section>

        <!-- Section Visi dan Misi -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Card Visi -->
            <div class="bg-white rounded-lg shadow-md p-6 group hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center space-x-6">
                    <!-- Icon -->
                    <img src="crosshair.png" alt="Crosshair Icon" class="w-16 h-16 object-contain transition-transform duration-300 group-hover:scale-110">
                    <!-- Text -->
                    <div>
                        <h3 class="text-3xl font-semibold text-blue-700 group-hover:text-blue-500 group-hover:translate-x-1 transition-all duration-300">Visi</h3>
                        <p class="mt-4 text-lg text-gray-700 group-hover:text-gray-900 group-hover:translate-y-1 transition-all duration-300">
                            Menjadi penyedia layanan perpustakaan digital terbaik yang memudahkan akses ilmu pengetahuan bagi semua kalangan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card Misi -->
            <div class="bg-white rounded-lg shadow-md p-6 group hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center space-x-6">
                    <!-- Icon -->
                    <img src="rocket.png" alt="Rocket Icon" class="w-16 h-16 object-contain transition-transform duration-300 group-hover:scale-110">
                    <!-- Text -->
                    <div>
                        <h3 class="text-3xl font-semibold text-green-700 group-hover:text-green-500 group-hover:translate-x-1 transition-all duration-300">Misi</h3>
                        <ul class="mt-4 text-lg text-gray-700 group-hover:text-gray-900 group-hover:translate-y-1 transition-all duration-300 space-y-2">
                            <li>- Menyediakan koleksi buku digital yang beragam dan up-to-date.</li>
                            <li>- Memberikan layanan pencarian yang cepat dan mudah.</li>
                            <li>- Mengintegrasikan teknologi modern untuk meningkatkan pengalaman pengguna.</li>
                            <li>- Mendorong budaya membaca di era digital.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    @include('layouts.footer')
</body>
</html>
