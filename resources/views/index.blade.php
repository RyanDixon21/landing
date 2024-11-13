<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda')</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.header')

    <main class="container mx-auto p-6">
        @yield('content')
    </main>

    @include('layouts.footer')
</body>
</html>
