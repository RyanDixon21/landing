<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Raya Fokus</title>
    <link rel="icon" href="asset/logo.png" type="image/x-icon">
    @vite('resources/css/app.css')

    <!-- Navbar -->
<!-- Navbar -->
<nav id="navbar" class="fixed top-4 left-4 right-4 bg-white rounded-lg border border-blue-500 shadow-lg mx-4 p-4 transition-all duration-300 ease-in-out z-50">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo dan Nama -->
        <div class="flex items-center space-x-2">
            <img src="asset/logo.png" alt="Logo" class="w-12 h-12">
            <a id="brand" href="{{url('/')}}" class="font-bold text-lg text-black transition-colors duration-300">Digital Raya Fokus</a>
        </div>

        <!-- Links -->
        <ul class="hidden md:flex space-x-4">
            <li><a href="{{url('/')}}" class="font-bold text-yellow-500 nav-link hover:text-blue-500 flex">Beranda</a></li>
            <li><a href="{{url('/profil')}}" class="font-bold nav-link hover:text-blue-500 flex">Profil</a></li>
            <!-- Dropdown Layanan -->
            <li class="relative group">
                <button class="font-bold nav-link hover:text-blue-500 flex items-center focus:outline-none">
                    Layanan
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <!-- Dropdown Menu -->
                <ul 
                    class="absolute left-0 mt-2 w-48 bg-yellow-600 border border-blue-300 rounded-lg shadow-lg opacity-0 transform -translate-y-4 scale-95 transition-all duration-300 invisible group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 group-hover:scale-100 z-10">
                    <li><a href="{{url('/layanan/fitur1')}}" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Konsultasi Teknologi</a></li>
                    <li><a href="{{url('/layanan/fitur2')}}" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Software Development</a></li>
                    <li><a href="{{url('/layanan/fitur3')}}" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Infrastruktur Teknologi</a></li>
                    <li><a href="{{url('/layanan/fitur4')}}" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Layanan Manajemen TI</a></li>
                    <li><a href="{{url('/layanan/fitur5')}}" class="block px-4 py-2 hover:bg-yellow-500 hover:text-white">Pelatihan dan Sertifikasi</a></li>
                </ul>
            </li>
            <li><a href="{{url('/contact')}}" class="font-bold nav-link hover:text-blue-500 flex">Contact</a></li>
        </ul>

        <!-- Mobile Menu Button -->
        <button id="menuButton" class="md:hidden text-gray-700 hover:text-blue-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
    

    <!-- Mobile Menu -->
    <ul id="mobileMenu" class="absolute top-16 left-0 w-full bg-white shadow-lg rounded-lg hidden flex-col items-center space-y-4 p-4">
        <li><a href="{{url('/')}}" class="nav-link hover:text-blue-500">Beranda</a></li>
        <li><a href="{{url('/profil')}}" class="nav-link hover:text-blue-500">Profil</a></li>
        <li>
            <button id="mobileDropdownButton" class="nav-link hover:text-blue-500 flex items-center w-full justify-between">
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
        
    </ul>
</nav>

<script>
    const navbar = document.getElementById('navbar');
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const brand = document.getElementById('brand');
    const mobileDropdownButton = document.getElementById('mobileDropdownButton');
const mobileDropdownMenu = document.getElementById('mobileDropdownMenu');

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
      brand.classList.add('text-white');
      brand.classList.remove('text-black');
      navbar.classList.add('bg-head', 'text-white', 'top-0', 'left-0', 'right-0', 'mx-0', 'rounded-none');
      navbar.classList.remove('bg-white','top-4', 'left-4', 'right-4', 'rounded-lg', 'mx-4');
    } else {
      // Kembalikan gaya awal
      brand.classList.add('text-black');
      brand.classList.remove('text-white');
      navbar.classList.remove('bg-head', 'text-white', 'top-0', 'left-0', 'right-0', 'mx-0', 'rounded-none');
      navbar.classList.add('bg-white', 'top-4', 'left-4', 'right-4', 'rounded-lg', 'mx-4');
    }
  });

    // Menyembunyikan menu ketika mengklik di luar menu
    document.addEventListener('click', (event) => {
        if (!mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>
