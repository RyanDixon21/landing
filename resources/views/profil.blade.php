<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings['pt2'] ?? 'Profil' }} - {{ $settings['company_name'] ?? 'Digital Raya Fokus' }}</title>
    <meta name="description" content="{{ $settings['company_description'] ?? '' }}">
    <meta name="keywords" content="{{ $settings['company_keywords'] ?? '' }}">
    <link rel="icon" href="{{ asset($settings['company_logo'] ?? 'asset/logo.png') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/050b5dcfea.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    @include('layouts.header')

    <!-- Hero Section -->
    <section class="pt-28 pb-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center">
                <!-- Text Content -->
                <div class="w-full lg:w-1/2 mb-12 lg:mb-0">
                    <div class="max-w-lg">
                        <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider mb-4 block">Tentang Kami</span>
                        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                            Tentang {{ $settings['company_name'] ?? 'Digital Raya Fokus' }}
                        </h1>
                        <div class="w-20 h-1 bg-blue-600 mb-8"></div>
                        <p class="text-lg text-gray-600 leading-relaxed mb-8">
                            {{ $settings['company_profile'] ?? 'PT Digital Raya Fokus adalah perusahaan teknologi informasi yang berfokus pada penyediaan solusi digital komprehensif untuk mendukung transformasi bisnis.' }}
                        </p>
                        <div class="flex space-x-4">
                            <a href="/contact" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl transition-all duration-300 group">
                                <span>Hubungi Kami</span>
                                <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            <a href="/portofolio" class="inline-flex items-center px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold rounded-xl transition-all duration-300">
                                <span>Portofolio</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="w-full lg:w-1/2">
                    <div class="relative group">
                        <div class="absolute inset-0 rounded-full transform group-hover:scale-105 transition-transform duration-500"></div>
                        @if(isset($settings['company_logo2']) && $settings['company_logo2'])
                <img src="{{ asset('storage/' . $settings['company_logo2']) }}" 
                alt="Logo {{ $settings['company_name'] ?? 'Digital Raya Fokus' }}" 
                     class="relative w-full max-w-lg mx-auto rounded-2xl transform group-hover:-translate-y-2 transition-transform duration-500">
            @else
                <img src="{{ asset('images/card2.jpg') }}" 
                alt="Logo {{ $settings['company_name'] ?? 'Digital Raya Fokus' }}" 
                     class="relative w-full max-w-lg mx-auto rounded-2xl transform group-hover:-translate-y-2 transition-transform duration-500">
            @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Visi & Misi Kami</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Visi -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="relative mb-8">
                        <div class="flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-2xl mb-6 mx-auto transform group-hover:rotate-6 transition-transform duration-300">
                            <i class="fa-solid fa-eye text-2xl"></i>
                        </div>
                        <div class="absolute inset-0 bg-blue-600/20 rounded-2xl blur-2xl -z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 text-center mb-6">Visi</h2>
                    <p class="text-gray-600 leading-relaxed text-center">
                        {{ $settings['company_visi'] ?? 'Menjadi pionir dalam menyediakan solusi teknologi yang inovatif dan memberikan kontribusi positif dalam mengubah lanskap bisnis melalui teknologi informasi.' }}
                    </p>
                </div>

                <!-- Misi -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="relative mb-8">
                        <div class="flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-2xl mb-6 mx-auto transform group-hover:rotate-6 transition-transform duration-300">
                            <i class="fa-solid fa-rocket text-2xl"></i>
                        </div>
                        <div class="absolute inset-0 bg-blue-600/20 rounded-2xl blur-2xl -z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 text-center mb-6">Misi</h2>
                    <ul class="space-y-4 text-gray-600">
                        @php
                            $misiArray = explode('|', $settings['company_misi'] ?? '');
                            if (empty($misiArray[0])) {
                                $misiArray = [
                                    'Memberikan solusi teknologi yang terkini dan inovatif untuk mendukung kebutuhan bisnis pelanggan.',
                                    'Menjadi mitra yang dapat diandalkan dan memberikan layanan berkualitas tinggi.',
                                    'Terus melakukan inovasi dan peningkatan dalam menyediakan solusi teknologi.',
                                    'Membangun hubungan yang saling menguntungkan dengan pelanggan dan mitra.'
                                ];
                            }
                        @endphp
                        @foreach($misiArray as $misi)
                        <li class="flex items-start group/item">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3 group-hover/item:bg-blue-600 group-hover/item:text-white transition-colors">
                                <i class="fa-solid fa-check text-blue-600 group-hover/item:text-white transition-colors"></i>
                            </div>
                            <span>{{ trim($misi) }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>
</html>
