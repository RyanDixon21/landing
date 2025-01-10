<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Digital Raya Fokus - Solusi Transformasi Digital</title>
    
    <!-- Meta Tags SEO -->
    <meta name="description" content="Digital Raya Fokus adalah perusahaan teknologi yang menyediakan solusi inovatif dalam transformasi digital, pengembangan perangkat lunak, dan layanan konsultasi.">
    <meta name="keywords" content="Digital Raya Fokus, teknologi, transformasi digital, software development, konsultasi teknologi, infrastruktur IT">
    <meta name="author" content="PT Digital Raya Fokus">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Digital Raya Fokus - Solusi Transformasi Digital">
    <meta property="og:description" content="Digital Raya Fokus adalah perusahaan teknologi yang menyediakan solusi inovatif dalam transformasi digital.">
    <meta property="og:image" content="{{ asset('asset/logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Digital Raya Fokus - Solusi Transformasi Digital">
    <meta name="twitter:description" content="Kami membantu transformasi digital Anda melalui konsultasi teknologi, pengembangan software, dan layanan IT.">
    <meta name="twitter:image" content="{{ asset('asset/logo.png') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('asset/logo.png') }}" type="image/x-icon">

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

    <!-- Navbar -->
<!-- Navbar -->
<nav id="navbar" class="fixed border border-blue-500 shadow-lg p-4 transition-all duration-300 ease-in-out z-50 bg-head text-white top-0 left-0 right-0 mx-0 rounded-none">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo dan Nama -->
        <div class="flex items-center space-x-2">
            <img src="{{ asset('asset/logo.png') }}" alt="Logo Digital Raya Fokus - Solusi Transformasi Digital" class="w-12 h-12">
            <a id="brand" href="{{ url('/') }}" class="font-bold text-lg text-white transition-colors duration-300">Digital Raya Fokus</a>
        </div>


 <!-- Links -->
 <ul class="hidden md:flex space-x-4">
    <li><a href="{{ url('/') }}" class="font-bold text-yellow-500 nav-link hover:text-blue-500 flex">Beranda</a></li>
    <li><a href="{{ url('/profil') }}" class="font-bold nav-link hover:text-blue-500 flex">Profil</a></li>
    <li><a href="{{ url('/portofolio') }}" class="font-bold nav-link hover:text-blue-500 flex">Portofolio</a></li>
    <li class="relative group">
        <button class="font-bold nav-link hover:text-blue-500 flex items-center focus:outline-none">
            <a href="/layanan">
                Layanan
            </a>
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <!-- Dropdown Menu -->
        <ul 
            class="absolute left-0 mt-2 w-48 bg-yellow-600 border border-blue-300 rounded-lg shadow-lg opacity-0 transform -translate-y-4 scale-95 transition-all duration-300 invisible group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 group-hover:scale-100 z-10">
            <li><a href="{{ url('/layanan/fitur1') }}" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Konsultasi Teknologi</a></li>
            <li><a href="{{ url('/layanan/fitur2') }}" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Software Development</a></li>
            <li><a href="{{ url('/layanan/fitur3') }}" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Infrastruktur Teknologi</a></li>
            <li><a href="{{ url('/layanan/fitur4') }}" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Layanan Manajemen TI</a></li>
            <li><a href="{{ url('/layanan/fitur5') }}" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Pelatihan dan Sertifikasi</a></li>
        </ul>
    </li>
    <li><a href="{{ url('/contact') }}" class="font-bold nav-link hover:text-blue-500 flex">Contact</a></li>
    @auth
    <!-- Jika pengguna login -->
    <li>
        <a href="{{ url('/') }}" class="font-bold text-yellow-500 nav-link flex">Admin</a>
    </li>
    <li>
        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="bg-foot text-white font-bold py-2 px-2 rounded hover:bg-biru">
                Logout
            </button>
        </form>
    </li>
@else
    <!-- Jika pengguna belum login -->
    <li>
        <button id="loginButton" class="bg-foot text-white font-bold py-2 px-2 rounded hover:bg-biru">
            Login
        </button>
    </li>
@endauth
</ul>

<!-- Modal Login -->
<div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-yellow-500 rounded-lg shadow-lg p-6 w-80">
        <h2 class="text-xl font-bold mb-4 text-center">Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 text-gray-500 border rounded-lg focus:outline-none focus:ring focus:ring-yellow-500" placeholder="Email" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 text-gray-500 border rounded-lg focus:outline-none focus:ring focus:ring-yellow-500" placeholder="Password" required>
            </div>
            <button type="submit" class="w-full bg-yellow-500 text-white py-2 px-4 rounded-lg hover:bg-yellow-600">
                Login
            </button>
        </form>
        <button id="closeLoginModal" class="w-full bg-yellow-500 text-white py-2 px-4 rounded-lg hover:bg-yellow-600">
            Batal
        </button>
    </div>
</div>

<div id="notification" 
     class="fixed bottom-4 left-1/2 transform -translate-x-1/2 z-50 hidden bg-green-500 text-white py-2 px-6 rounded-lg shadow-lg transition-transform transform translate-y-20 opacity-0">
    <span id="notificationMessage"></span>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const notification = document.getElementById('notification');
        const notificationMessage = document.getElementById('notificationMessage');

        @if (session('status'))
            // Atur pesan notifikasi
            notificationMessage.textContent = "{{ session('status') }}";

            // Tampilkan notifikasi
            notification.classList.remove('hidden', 'opacity-0', 'translate-y-20');
            notification.classList.add('translate-y-0', 'opacity-100');

            // Sembunyikan notifikasi setelah 3 detik
            setTimeout(() => {
                notification.classList.add('opacity-0', 'translate-y-20');
                setTimeout(() => notification.classList.add('hidden'), 500); // Sembunyikan elemen setelah animasi selesai
            }, 3000);
        @endif
    });
</script>



         <!-- Mobile Menu Button -->
         <button id="menuButton" class="md:hidden text-gray-700 hover:text-blue-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <ul id="mobileMenu" class="absolute top-16 left-0 w-full bg-white shadow-lg rounded-lg hidden flex-col items-center space-y-4 p-4 text-black">
        <li><a href="{{url('/')}}" class="nav-link hover:text-blue-500">Beranda</a></li>
        <li><a href="{{url('/profil')}}" class="nav-link hover:text-blue-500">Profil</a></li>
        <li>
            <button  id="mobileDropdownButton"  class="nav-link hover:text-blue-500 flex items-center w-full justify-between">
                Layanan
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <ul id="mobileDropdownMenu" class="hidden flex-col space-y-2 mt-2 pl-4">
                <li><a href="{{url('/layanan/fitur1')}}" class="block px-4 py-2 hover:bg-blue-500 hover:text-white">Fitur 1</a></li>
                <li><a href="{{url('/layanan/fitur2')}}" class="block px-4 py-2 hover:bg-blue-500 hover:text-white">Fitur 2</a></li>
                <li><a href="{{url('/layanan/fitur3')}}" class="block px-4 py-2 hover:bg-blue-500 hover:text-white">Fitur 3</a></li>
                <li><a href="{{url('/layanan/fitur4')}}" class="block px-4 py-2 hover:bg-blue-500 hover:text-white">Fitur 4</a></li>
                <li><a href="{{url('/layanan/fitur5')}}" class="block px-4 py-2 hover:bg-blue-500 hover:text-white">Fitur 5</a></li>
            </ul>
        </li>
        <li><a href="{{url('/contact')}}" class="nav-link hover:text-blue-500">Contact</a></li>
    </ul>
</nav>

<script>
    const navbar = document.getElementById('navbar');
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const brand = document.getElementById('brand');
    const mobileDropdownButton = document.getElementById('mobileDropdownButton');
    const mobileDropdownMenu = document.getElementById('mobileDropdownMenu');
    const loginButton = document.getElementById('loginButton');
const loginModal = document.getElementById('loginModal');
const closeLoginModal = document.getElementById('closeLoginModal');


// Buka modal login
loginButton.addEventListener('click', () => {
    loginModal.classList.remove('hidden');
});


// Tutup modal login
closeLoginModal.addEventListener('click', () => {
    loginModal.classList.add('hidden');
});


mobileDropdownButton.addEventListener('click', () => {
    mobileDropdownMenu.classList.toggle('hidden');
});


    // Show/hide mobile menu
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Change navbar style on scroll
     window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      // Tambahkan gaya saat scroll
      brand.classList.remove('text-white');
      brand.classList.add('text-black');
      navbar.classList.remove('bg-head', 'text-white', 'top-0', 'left-0', 'right-0', 'mx-0', 'rounded-none');
      navbar.classList.add('bg-white','top-4', 'left-4', 'right-4', 'rounded-lg', 'mx-4');
    } else {
      // Kembalikan gaya awal
      brand.classList.remove('text-black');
      brand.classList.add('text-white');
      navbar.classList.add('bg-head', 'text-white', 'top-0', 'left-0', 'right-0', 'mx-0', 'rounded-none');
      navbar.classList.remove('bg-white', 'top-4', 'left-4', 'right-4', 'rounded-lg', 'mx-4');
    }
  });

    // Menyembunyikan menu ketika mengklik di luar menu
    document.addEventListener('click', (event) => {
        if (!mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
            mobileMenu.classList.add('hidden');
        }
    });

    
</script>
</head>