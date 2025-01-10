<!DOCTYPE html>
<script src="https://kit.fontawesome.com/050b5dcfea.js" crossorigin="anonymous"></script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan</title>
    <link rel="icon" href="asset/logo.png" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body class="pt-24"> <!-- Adjusted padding to prevent navbar overlap -->
    @include('layouts.header')

    <section id="about-page" class="pt-12 pb-28 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-12">
            <!-- Bagian Tentang Perusahaan -->
            <div class="flex flex-wrap items-center mb-16"> <!-- Sudah ada mb-16 -->
                <!-- Bagian Kiri -->
                <div class="w-full lg:w-6/12 mb-8 lg:mb-0">
                    <div class="section-title">
                        <h3 class="text-3xl md:text-4xl font-bold text-green-500 leading-snug">Tentang Kami</h3>
                    </div>
                    <div class="about-cont mt-6">
                        <p class="text-gray-600 leading-relaxed text-justify">
                           <b> PT Digital Raya Fokus </b> adalah sebuah perusahaan baru yang bergerak di bidang teknologi informasi dan komunikasi. Meskipun baru didirikan pada tahun 2024, kami memiliki tim yang berpengalaman dan berdedikasi untuk memberikan solusi teknologi yang inovatif kepada pelanggan kami. Kami berkomitmen untuk menjadi mitra terpercaya dalam membantu perusahaan-perusahaan menghadapi tantangan dalam transformasi digital.
                        </p>
                        <button class="mt-4 px-4 py-1 bg-green-500 hover:bg-green-800 text-white font-semibold text-lg rounded-md block text-center animate-fade-in-up">
                          <a href="/contact" >  Hubungi Kami </a>
                        </button>
                    </div>
                </div>
            
                <!-- Bagian Kanan -->
                <div class="w-full lg:w-6/12 mt-8 lg:mt-0 flex justify-center mb-8">
                    <div class="about-image">
                        <img src="asset/logof.png" alt="Logo PT Digital Raya Fokus" class="h-80 object-contain w-full max-w-xs lg:max-w-md">
                    </div>
                </div>
            </div>
            

<!-- Bagian Visi dan Misi -->
<div class="about-items pt-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Visi -->
        <div class="bg-white shadow-lg p-6 rounded-lg text-center">
            <div class="flex items-center justify-center w-24 h-24 mb-4 bg-green-100 text-green-500 rounded-full mx-auto">
                <i class="fa-solid fa-crosshairs text-4xl"></i>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 mb-2">Visi</h4>
            <p class="text-gray-600 leading-relaxed">
                Menjadi pionir dalam menyediakan solusi teknologi yang inovatif dan memberikan kontribusi positif dalam mengubah lanskap bisnis melalui teknologi informasi.
            </p>
        </div>

        <!-- Misi -->
        <div class="bg-white shadow-lg p-6 rounded-lg text-center">
            <div class="flex items-center justify-center w-24 h-24 mb-4 bg-blue-100 text-blue-500 rounded-full mx-auto">
                <i class="fa-solid fa-rocket text-4xl"></i>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 mb-2">Misi</h4>
            <ol class="list-decimal text-gray-600 leading-relaxed space-y-2 text-justify pl-6">
                <li>Memberikan solusi teknologi yang terkini dan inovatif untuk mendukung kebutuhan bisnis pelanggan.</li>
                <li>Menjadi mitra yang dapat diandalkan dan memberikan layanan berkualitas tinggi serta dukungan teknis yang handal.</li>
                <li>Terus melakukan inovasi dan peningkatan dalam menyediakan solusi teknologi yang relevan dengan perkembangan industri.</li>
                <li>Membangun hubungan yang saling menguntungkan dengan pelanggan, mitra, dan pihak terkait lainnya.</li>
            </ol>
        </div>
    </div>
</div>

    </section>

    @include('layouts.footer')
</body>
</html>
