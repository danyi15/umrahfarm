<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Umrah Farm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external CSS file -->
</head>
<body class="bg-gray-50 flex flex-col min-h-screen font-sans">
    @include('partials.navbar')

    <!-- Main Content -->
    <div class="container mx-auto p-6">
        <!-- Button for adding livestock -->
        <button
            onclick="window.location.href='{{ url('tambah-ternak') }}'"
            class="bg-green-800 text-white px-5 py-3 rounded-lg mb-6 hover:bg-green-700 transition duration-300 flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>Tambah Ternak
        </button>

        <!-- Livestock Cards -->
        <div class="space-y-8">
            <!-- Cow Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-600">Tag ID: #SPK0001</p>
                    <p class="text-xl font-semibold">MooMoo</p>
                    <p class="text-sm text-gray-600">Betina</p>
                </div>
                <div class="text-right">
                    <p onclick="window.location.href='{{ url('detail-ternak') }}'" class="text-green-800 font-semibold cursor-pointer hover:underline">DIJUAL</p>
                    <i onclick="window.location.href='{{ url('detail-ternak') }}'" class="fas fa-chevron-right text-gray-600 cursor-pointer"></i>
                </div>
            </div>

            <!-- Goat Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-600">Tag ID: #KBG0001</p>
                    <p class="text-xl font-semibold">Dodot</p>
                    <p class="text-sm text-gray-600">Jantan</p>
                </div>
                <div class="text-right">
                    <p onclick="window.location.href='{{ url('detail-ternak') }}'" class="text-green-800 font-semibold cursor-pointer hover:underline">DIJUAL</p>
                    <i onclick="window.location.href='{{ url('detail-ternak') }}'" class="fas fa-chevron-right text-gray-600 cursor-pointer"></i>
                </div>
            </div>

            <!-- Chicken Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-600">Tag ID: #AYM0001</p>
                    <p class="text-xl font-semibold">Jagoan</p>
                    <p class="text-sm text-gray-600">Jantan</p>
                </div>
                <div class="text-right">
                    <p onclick="window.location.href='{{ url('detail-ternak') }}'" class="text-red-800 font-semibold cursor-pointer hover:underline">TIDAK DIJUAL</p>
                    <i onclick="window.location.href='{{ url('detail-ternak') }}'" class="fas fa-chevron-right text-gray-600 cursor-pointer"></i>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>
