<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Umrah Farm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen font-roboto">
    <!-- Header -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="p-8">
        <h2 class="text-2xl font-bold mb-6 text-green-700">Selamat Datang, Aprizal <span class="wave">👋</span></h2>

        <!-- Jumlah Ternak -->
        <section class="mb-8">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Jumlah Ternak</h3>
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @php
                    $ternak = [
                        ['icon' => 'https://storage.googleapis.com/a1aa/image/Qns0bxYf1xy3HicCVKPu9XbfyE8VnAsDDyDtDgyhwEEleLqnA.jpg', 'nama' => 'Sapi', 'jumlah' => 10],
                        ['icon' => 'https://storage.googleapis.com/a1aa/image/pGQ5Leqy5ehPg0Gqetx9rSQf3WljY1FT8XDtJYIOYPbS6XUPB.jpg', 'nama' => 'Kambing', 'jumlah' => 15],
                        ['icon' => 'https://storage.googleapis.com/a1aa/image/wnUuubsyMarYP17MGYDFhzVCMAOE19KgB8HET8Y2llZqfi6JA.jpg', 'nama' => 'Ayam', 'jumlah' => 30],
                    ];
                @endphp

                @foreach($ternak as $item)
                <div class="bg-green-100 p-6 rounded-lg shadow-md flex flex-col items-center hover:shadow-lg transition-shadow">
                    <img src="{{ $item['icon'] }}" alt="Ikon {{ $item['nama'] }}" class="h-16 w-auto mb-4">
                    <p class="text-lg font-bold text-gray-700">{{ $item['nama'] }}</p>
                    <p class="text-2xl font-bold text-green-700">{{ $item['jumlah'] }}</p>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Stok Pakan dan Aktivitas -->
        <section class="grid sm:grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Stok Pakan -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Stok Pakan</h3>
                <div class="h-64 bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-500">Grafik Stok Pakan (placeholder)</span>
                </div>
                <div class="mt-4">
                    <p class="text-sm text-gray-700 font-medium">Keterangan:</p>
                    <ul class="text-sm list-disc ml-5 text-gray-600">
                        <li>Rumput Segar</li>
                        <li>Dedak</li>
                        <li>Konsentrat Sapi</li>
                        <li>Jagung Ayam</li>
                    </ul>
                </div>
            </div>

            <!-- Aktivitas Terbaru -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Aktivitas Terbaru</h3>
                <ul class="text-sm list-disc ml-5 text-gray-600 space-y-3">
                    <li>Menambah 2 sapi baru <span class="text-gray-500">13 jam yang lalu</span></li>
                    <li>Menambah 200kg stok rumput segar <span class="text-gray-500">2 hari yang lalu</span></li>
                    <li>Menambah 50kg stok konsentrat sapi <span class="text-gray-500">5 hari yang lalu</span></li>
                </ul>
            </div>
        </section>
    </main>

    <!-- Footer -->
    @include('partials.footer')
</body>
</html>
