<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    @vite('resources/css/app.css') <!-- Include Tailwind CSS -->
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Include Header -->
    @include('layouts.header')

    <section class="relative bg-biru text-white py-16 mt-20">
        <div class="absolute inset-0">
            <img src="asset/image1.jpeg" alt="bg portofolio PT. Digital Raya Fokus" class="w-full h-full object-cover opacity-50">
        </div>
        <div class="relative container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold">Portofolio</h1>
            <p class="text-lg mt-2">Home - Portofolio</p>
        </div>
        @if(Auth::check() && Auth::user()->role === 'admin')
    <div class="text-right mb-4">
        <a href="{{ route('portfolio.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
            Tambah Portofolio
        </a>
    </div>
@endif
    </section>

    <!-- Portfolio Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Portfolio Item 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Project Image" class="w-full">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">Project Title 1</h2>
                        <p class="text-gray-600">Description of the project. This is a brief summary of what this project entails.</p>
                    </div>
                </div>

                <!-- Portfolio Item 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Project Image" class="w-full">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">Project Title 2</h2>
                        <p class="text-gray-600">Description of the project. Highlighting key accomplishments and results.</p>
                    </div>
                </div>

                <!-- Portfolio Item 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Project Image" class="w-full">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">Project Title 3</h2>
                        <p class="text-gray-600">Overview of the project goals, objectives, and final outcomes.</p>
                    </div>
                </div>

                <!-- Add more portfolio items as needed -->
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    @include('layouts.footer')
</body>
</html>
