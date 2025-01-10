<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>
    @vite('resources/css/app.css') <!-- Include Tailwind CSS -->
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Include Header -->
    @include('layouts.header')

   <!-- Hero Section -->
<!-- Hero Section -->
<section class="bg-gray-100 py-12 mt-20">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
        <!-- Left Section -->
        <div class="md:w-1/3 text-center md:text-left">
            <h1 class="text-3xl font-bold text-blue-800">Layanan Kami</h1>
            <p class="mt-4 text-gray-600">
                Dengan layanan Digital Raya, perusahaan mendapatkan keunggulan kompetitif di era digital dengan memanfaatkan teknologi terbaru dan terus berinovasi untuk memenuhi tuntutan pasar yang terus berkembang.
            </p>
        </div>
        <!-- Right Section -->
        <div class="md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-8 mt-8 md:mt-0">
            <!-- Service 1 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h2 class="text-xl font-bold text-blue-800">Pembuatan Aplikasi Web, Android & iOS</h2>
                <p class="mt-4 text-gray-600">
                    Membangun aplikasi web, mobile Android, iOS, dan teknologi terbaru lainnya untuk memenuhi kebutuhan bisnis klien.
                </p>
            </div>
            <!-- Service 2 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h2 class="text-xl font-bold text-blue-800">Transformasi Proses Bisnis</h2>
                <p class="mt-4 text-gray-600">
                    Mengidentifikasi proses-proses existing yang dapat diotomatisasi untuk meningkatkan efisiensi dan produktivitas.
                </p>
            </div>
            <!-- Service 3 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h2 class="text-xl font-bold text-blue-800">Konsultasi dan Strategi Digital</h2>
                <p class="mt-4 text-gray-600">
                    Memberikan panduan strategis untuk mengintegrasikan teknologi baru untuk merumuskan strategi inovatif.
                </p>
            </div>
            <!-- Service 4 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h2 class="text-xl font-bold text-blue-800">Desain & Pembuatan Website</h2>
                <p class="mt-4 text-gray-600">
                    Wujudkan website profesional untuk berbagai kebutuhan dengan tampilan, fitur, dan teknologi terbaru.
                </p>
            </div>
            <!-- Service 5 -->
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h2 class="text-xl font-bold text-blue-800">Pelatihan dan Sertifikasi</h2>
                <p class="mt-4 text-gray-600">
                    Memberikan pelatihan teknis dan sertifikasi untuk meningkatkan keterampilan SDM.
                </p>
            </div>
        </div>
    </div>
</section>
    <!-- Include Footer -->
    @include('layouts.footer')
</body>
</html>
