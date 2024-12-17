<header class="bg-green-900 text-white p-4 flex justify-between items-center">
    <!-- Logo dan Judul -->
    <div class="flex items-center space-x-4">
        <img alt="Logo Umrah Farm" class="h-10 w-auto" src="{{ asset('image/logo.png') }}">
        <h1 class="text-xl font-bold">UMRAH FARM</h1>
    </div>

    <!-- Navigasi Utama (Desktop) -->
    <nav class="hidden lg:flex space-x-4">
        <a href="{{ route('dashboard') }}"
           class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
            Dashboard
        </a>

        @auth
            @if(Auth::user()->is_admin)
                <a href="{{ route('admin.manage-users') }}"
                   class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                    Manage Users
                </a>
                <a href="{{ route('admin.reports') }}"
                   class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                    Reports
                </a>
            @else
                <a href="{{ url('/record-ternak') }}"
                   class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                    Record Ternak
                </a>
                <a href="{{ route('stok_pakan.index') }}"
                   class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                    Stok Pakan
                </a>
                <a href="{{ route('vet-monitor.index') }}"
                   class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                    VetMonitor
                </a>
                <a href="{{ route('market-ternak') }}"
                   class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                    Market
                </a>
            @endif
        @endauth

        <!-- Login Jika Belum Login -->
        @guest
            <a href="{{ route('login') }}"
               class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                Login
            </a>
        @endguest

        <!-- Profil dan Logout -->
        @auth
            <div class="flex items-center space-x-4">
                <a href="{{ route('user.profile') }}" class="flex items-center">
                    <span class="ml-2">{{ Auth::user()->name }}</span>
                </a>
            </div>
            <a href="{{ route('auth.logout') }}"
               class="bg-red-700 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        @endauth
    </nav>

    <!-- Tombol Hamburger untuk Mobile -->
    <button class="lg:hidden p-2 focus:outline-none" id="menu-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Menu Dropdown (Mobile) -->
    <nav id="mobile-menu" class="absolute top-16 left-0 w-full bg-green-900 text-white p-4 hidden flex-col space-y-4 lg:hidden">
        <a href="{{ route('dashboard') }}" class="block hover:underline hover:text-green-300">Dashboard</a>
        @auth
            @if(Auth::user()->is_admin)
                <a href="{{ route('admin.manage-users') }}" class="block hover:underline hover:text-green-300">Manage Users</a>
                <a href="{{ route('admin.reports') }}" class="block hover:underline hover:text-green-300">Reports</a>
            @else
                <a href="{{ url('/record-ternak') }}" class="block hover:underline hover:text-green-300">Record Ternak</a>
                <a href="{{ route('stok_pakan.index') }}" class="block hover:underline hover:text-green-300">Stok Pakan</a>
                <a href="{{ route('vet-monitor.index') }}" class="block hover:underline hover:text-green-300">VetMonitor</a>
                <a href="{{ route('market-ternak') }}" class="block hover:underline hover:text-green-300">Market</a>
            @endif

            <!-- Tambahkan Profile dan Logout di Mobile -->
            <hr class="border-t border-white my-2">
            <a href="{{ route('user.profile') }}" class="block hover:underline hover:text-green-300">
                Profil ({{ Auth::user()->name }})
            </a>
            <a href="{{ route('auth.logout') }}"
               class="block text-red-500 hover:underline hover:text-red-300"
               onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">
                Logout
            </a>
            <form id="logout-form-mobile" action="{{ route('auth.logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="block hover:underline hover:text-green-300">Login</a>
        @endguest
    </nav>
</header>

<!-- JavaScript untuk Toggle Menu -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
