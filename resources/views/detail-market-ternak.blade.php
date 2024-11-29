<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umrah Farm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Corrected Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/detail-market-ternak.css') }}">
</head>
<body class="bg-gray-50 font-roboto">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <div class="flex justify-center items-center h-screen p-4">
        <div class="bg-white rounded-lg shadow-lg max-w-lg w-full overflow-hidden relative">
            <!-- Close Button with Icon -->
            <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 focus:outline-none">
                <i class="fas fa-times"></i>
            </button>

            <!-- Image Section -->
            <div class="relative">
                <img src="https://storage.googleapis.com/a1aa/image/UMBCsfjSjoTAMCPYU4pZsTfGIRPqfF7hlXZraCfinvaqIIXPB.jpg" alt="A brown cow standing in a barn" class="w-full h-64 object-cover rounded-t-lg shadow-md"/>
                <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white py-1 px-3 rounded-md">
                    <p class="text-xl font-bold">Rp. 20.000.000</p>
                </div>
            </div>

            <!-- Content Section -->
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-center mb-4">MooMoo</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-700">
                    <div>
                        <p><strong>Nama:</strong> MooMoo</p>
                        <p><strong>Jenis Kelamin:</strong> Betina</p>
                        <p><strong>Berat Saat Ini:</strong> 254 Kg</p>
                    </div>
                    <div>
                        <p><strong>Pemilik:</strong> Adrizal</p>
                        <p><strong>Lokasi:</strong> Kampung Banjar</p>
                        <p><strong>No. Hp:</strong> 08xx-xxxx-xxxx</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('partials.footer')

</body>
</html>
