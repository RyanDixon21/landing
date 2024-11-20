<header class="fixed top-0 w-full bg-blue-700 text-white p-4 shadow-md z-50">
    <div class="container mx-auto flex items-center justify-between">
        <a href="/" class="text-2xl font-semibold">Digital Raya Fokus</a>
        <nav class="space-x-4 flex">
            <a href="/" class="nav-link">Home</a>
            <a href="/produk" class="nav-link">Produk</a>
            <a href="/about" class="nav-link">Tentang Kami</a>
            <a href="/contact" class="nav-link">Kontak</a>
            <!-- Tombol untuk menampilkan input pencarian -->
            <button id="search-btn" class="text-white px-3 py-2 bg-blue-800 rounded-md focus:outline-none" onclick="toggleSearch(event)">Cari</button>
            
            <!-- Input pencarian yang tersembunyi -->
            <input type="text" id="nav-search" placeholder="Cari..." class="hidden px-3 py-2 text-black rounded-md focus:outline-none focus:ring focus:ring-blue-300" onkeyup="filterNavLinks()">
        </nav>
    </div>
    <script>
        function toggleSearch(event) {
            event.stopPropagation(); // Mencegah klik pada tombol search agar tidak menutup input secara langsung
            
            var searchBox = document.getElementById('nav-search');
            var searchBtn = document.getElementById('search-btn');
            
            // Menyembunyikan atau menampilkan search box
            searchBox.classList.toggle('hidden');
            
            // Menyembunyikan atau menampilkan tombol search sesuai dengan keadaan search box
            if (searchBox.classList.contains('hidden')) {
                searchBtn.style.display = 'inline-block'; // Menampilkan tombol search saat search box hilang
            } else {
                searchBtn.style.display = 'none'; // Menyembunyikan tombol search saat search box muncul
            }
            
            // Fokus pada input setelah tampil
            if (!searchBox.classList.contains('hidden')) {
                searchBox.focus();
            }
        }
    
        // Fungsi untuk filter link berdasarkan input
        function filterNavLinks() {
            var filter = document.getElementById('nav-search').value.toLowerCase();
            var links = document.querySelectorAll('.nav-link');
            
            links.forEach(function(link) {
                if (link.innerText.toLowerCase().includes(filter)) {
                    link.style.display = '';
                } else {
                    link.style.display = 'none';
                }
            });
        }
    
        // Menutup search box jika klik di luar tombol pencarian dan input
        window.addEventListener('click', function(event) {
            var searchBox = document.getElementById('nav-search');
            var searchBtn = document.getElementById('search-btn');
            
            if (!searchBox.contains(event.target) && !searchBtn.contains(event.target)) {
                searchBox.classList.add('hidden'); // Menyembunyikan search box jika klik di luar
                searchBtn.style.display = 'inline-block'; // Menampilkan tombol search kembali
            }
        });
    </script>
</header>
