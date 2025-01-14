<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings['company_name'] }} - Layanan</title>
    <meta name="description" content="Layanan teknologi informasi komprehensif untuk mendukung transformasi digital bisnis Anda">
    <script src="https://kit.fontawesome.com/050b5dcfea.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-white">
    @include('layouts.header')

    <!-- Hero Section -->
    <section class="pt-28 pb-20 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
        <div class="absolute inset-0 bg-grid-gray-100 opacity-20"></div>
        <div class="container mx-auto px-4 relative">
            <div class="text-center max-w-4xl mx-auto">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider mb-4 block">Layanan Kami</span>
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                    Solusi Digital untuk Bisnis Anda
                </h1>
                <div class="w-20 h-1 bg-blue-600 mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 leading-relaxed mb-12">
                    Kami menyediakan berbagai layanan teknologi informasi yang komprehensif untuk mendukung transformasi digital bisnis Anda
                </p>
            </div>

            <!-- Service Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
                <!-- Konsultasi Teknologi -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/5 to-green-500/5 transform -skew-y-12 group-hover:skew-y-0 transition-transform duration-500"></div>
                    <div class="relative">
                        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl mb-6 transform group-hover:rotate-6 transition-transform duration-300">
                            <i class="fa-regular fa-handshake text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">
                            Konsultasi Teknologi
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Dapatkan solusi tepat untuk kebutuhan bisnis Anda dengan bantuan ahli teknologi kami.
                        </p>
                        <a href="{{ route('layanan.show', 'konsultasi') }}" class="inline-flex items-center text-blue-600 font-semibold group-hover:text-blue-700 transition-colors">
                            <span>Pelajari Lebih Lanjut</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Software Development -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/5 to-green-500/5 transform -skew-y-12 group-hover:skew-y-0 transition-transform duration-500"></div>
                    <div class="relative">
                        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl mb-6 transform group-hover:rotate-6 transition-transform duration-300">
                            <i class="fa-solid fa-code text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">
                            Software Development
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Kami mengembangkan aplikasi sesuai kebutuhan untuk mendukung bisnis Anda.
                        </p>
                        <a href="/layanan/software" class="inline-flex items-center text-blue-600 font-semibold group-hover:text-blue-700 transition-colors">
                            <span>Pelajari Lebih Lanjut</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Infrastruktur Teknologi -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/5 to-green-500/5 transform -skew-y-12 group-hover:skew-y-0 transition-transform duration-500"></div>
                    <div class="relative">
                        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl mb-6 transform group-hover:rotate-6 transition-transform duration-300">
                            <i class="fa-solid fa-network-wired text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">
                            Infrastruktur Teknologi
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Solusi infrastruktur IT yang handal, aman, dan scalable untuk mendukung operasional bisnis Anda.
                        </p>
                        <a href="/layanan/infrastruktur" class="inline-flex items-center text-blue-600 font-semibold group-hover:text-blue-700 transition-colors">
                            <span>Pelajari Lebih Lanjut</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Layanan Manajemen TI -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/5 to-green-500/5 transform -skew-y-12 group-hover:skew-y-0 transition-transform duration-500"></div>
                    <div class="relative">
                        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl mb-6 transform group-hover:rotate-6 transition-transform duration-300">
                            <i class="fa-solid fa-list-check text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">
                            Layanan Manajemen TI
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Serahkan pengelolaan IT kepada kami dan fokus pada bisnis Anda.
                        </p>
                        <a href="/layanan/manajemen" class="inline-flex items-center text-blue-600 font-semibold group-hover:text-blue-700 transition-colors">
                            <span>Pelajari Lebih Lanjut</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Pelatihan dan Sertifikasi -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/5 to-green-500/5 transform -skew-y-12 group-hover:skew-y-0 transition-transform duration-500"></div>
                    <div class="relative">
                        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl mb-6 transform group-hover:rotate-6 transition-transform duration-300">
                            <i class="fa-solid fa-graduation-cap text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">
                            Pelatihan dan Sertifikasi
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Program pelatihan dan sertifikasi untuk meningkatkan kompetensi tim IT Anda.
                        </p>
                        <a href="/layanan/pelatihan" class="inline-flex items-center text-blue-600 font-semibold group-hover:text-blue-700 transition-colors">
                            <span>Pelajari Lebih Lanjut</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>
</html>
