<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Umrah Farm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen font-sans flex flex-col">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="p-8">
        <h2 class="text-2xl font-bold mb-6 text-green-700">
            Selamat Datang, {{ Auth::user()->name }} <span class="wave">👋</span>
        </h2>

        <!-- Jumlah Ternak -->
        <section class="mb-8">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Jumlah Ternak</h3>
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Sapi -->
                <div class="bg-green-100 p-6 rounded-lg shadow-md flex flex-col items-center hover:shadow-lg transition-shadow duration-300">
                    <img src="{{ asset('image/sapi.png') }}" alt="Ikon Sapi" class="h-50 w-auto mb-50">
                    <p class="text-lg font-bold text-gray-700">Sapi</p>
                    <p class="text-2xl font-bold text-green-700">{{ $sapiCount }}</p>
                </div>

                <!-- Kambing -->
                <div class="bg-green-100 p-6 rounded-lg shadow-md flex flex-col items-center hover:shadow-lg transition-shadow duration-300">
                    <img src="{{ asset('image/kambing.png') }}" alt="Ikon Kambing" class="h-50 w-auto mb-50">
                    <p class="text-lg font-bold text-gray-700">Kambing</p>
                    <p class="text-2xl font-bold text-green-700">{{ $kambingCount }}</p>
                </div>

                <!-- Ayam -->
                <div class="bg-green-100 p-6 rounded-lg shadow-md flex flex-col items-center hover:shadow-lg transition-shadow duration-300">
                    <img src="{{ asset('image/ayam.png') }}" alt="Ikon Ayam" class="h-50 w-auto mb-50">
                    <p class="text-lg font-bold text-gray-700">Ayam</p>
                    <p class="text-2xl font-bold text-green-700">{{ $ayamCount }}</p>
                </div>
            </div>
        </section>

        <div class="p-8">
            <h2 class="text-2xl font-bold mb-6 text-green-700">Kondisi Stok Pakan Terkini</h2>

            <!-- Stok Pakan -->
            <section class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Stok Pakan</h3>
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($stokPakan as $pakan)
                        <div class="bg-green-100 p-6 rounded-lg shadow-md flex flex-col items-center hover:shadow-lg transition-shadow duration-300">
                            <p class="text-lg font-bold text-gray-700">{{ ucfirst($pakan->jenis_pakan) }}</p>
                            <p class="text-2xl font-bold text-green-700">{{ $pakan->stok_tersisa }} kg</p>
                        </div>
                    @endforeach
                </div>
            </section>
    </main>

    <!-- Footer -->
    @include('partials.footer')
</body>
</html>
