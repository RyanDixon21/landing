<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Profil')</title>
    @vite('resources/css/app.css')
</head>

<body class="pt-18">
    @include('layouts.header')

    @section('content')
    <div class="bg-white py-12">
        <!-- Bagian About Us -->
        <div class="container mx-auto px-6 lg:px-20">
            <div class="flex flex-col-reverse lg:flex-row items-center">
                <!-- Konten Teks -->
                <div class="lg:w-1/2 text-center lg:text-left">
                    <h2 class="text-4xl font-bold text-gray-900 leading-tight">
                        Helping businesses succeed through the power of video.
                    </h2>
                    <p class="text-gray-600 mt-4">
                        Video is the future of business in this digital-focused world. Our company uses video to change the way companies connect and communicate. We help organizations of all sizes humanize their communications and personalize their customer experiences.
                    </p>
                    <a href="signup" class="mt-6 inline-block bg-blue-600 text-white font-medium px-8 py-3 rounded-md shadow-md hover:bg-blue-700 transition">
                        Sign Up for Free
                    </a>
                </div>
                <!-- Gambar -->
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <div class="relative">
                        <div class="absolute -top-8 -left-8 bg-green-500 w-48 h-48 rounded-full opacity-30"></div>
                        <img src="{{ asset('path-to-your-image/logo-or-illustration.png') }}" alt="Illustration" class="rounded-lg shadow-lg relative">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bagian Lanjutan -->
    <div class="bg-gray-100 py-12">
        <div class="container mx-auto px-6 lg:px-20">
            <div class="flex flex-col lg:flex-row items-center">
                <!-- Konten Teks -->
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-900">
                        Record and send videos to reach prospects, connect with customers
                    </h3>
                    <p class="text-gray-600 mt-4">
                        Our platform goes beyond just video hosting and management. Connect with viewers through personalized video experiences. Explore analytical insights about your audience to drive better engagement and results.
                    </p>
                </div>
                <!-- Gambar -->
                <div class="lg:w-1/2 mt-8 lg:mt-0">
                    <img src="{{ asset('path-to-your-image/feature-image.png') }}" alt="Feature Image" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>
</html>

 