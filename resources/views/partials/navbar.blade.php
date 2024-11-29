<header class="bg-green-900 text-white p-4 flex justify-between items-center">
    <!-- Logo dan Judul -->
    <div class="flex items-center space-x-4">
        <img alt="Logo Umrah Farm" class="h-10 w-auto" src="{{ asset('image/logo.png') }}">
        <h1 class="text-xl font-bold">UMRAH FARM</h1>
    </div>

    <!-- Navigasi -->
    <nav class="hidden lg:flex space-x-4">
        <a href="{{ url('/dashboard') }}"
           class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 transition">
            Dashboard
        </a>
        <a href="{{ url('/record-ternak') }}"
           class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 transition">
            Record Ternak
        </a>
        <a href="{{ url('/stock-pakan') }}"
           class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 transition">
            Stok Pakan
        </a>
        <a href="{{ url('/market-ternak') }}"
           class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 transition">
            Market
        </a>
    </nav>

    <!-- Foto Profil -->
    <div class="flex items-center space-x-4">
        <img src="{{ asset('image/user.jpg') }}" alt="Foto Profil Pengguna" class="h-10 w-10 rounded-full border-2 border-white">
        <!-- Tombol Hamburger untuk Mobile -->
        <button class="lg:hidden p-2 focus:outline-none" id="menu-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Menu Dropdown untuk Mobile -->
    <nav id="mobile-menu" class="absolute top-16 left-0 w-full bg-green-900 text-white p-4 hidden flex-col space-y-4 lg:hidden">
        <a href="{{ url('/dashboard') }}" class="block hover:underline hover:text-green-300">Dashboard</a>
        <a href="{{ url('/record-ternak') }}" class="block hover:underline hover:text-green-300">Record Ternak</a>
        <a href="{{ url('/stock-pakan') }}" class="block hover:underline hover:text-green-300">Stok Pakan</a>
        <a href="{{ url('/market-ternak') }}" class="block hover:underline hover:text-green-300">Market</a>
    </nav>
</header>

<!-- Script untuk Toggle Menu -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
