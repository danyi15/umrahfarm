<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Umrah Farm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/stock-pakan.css') }}">
</head>
<body class="bg-green-100 font-roboto">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <div class="p-8 space-y-8">
        <!-- First Screen -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-green-900">Stok Pakan</h2>
                <button class="bg-green-900 text-white px-6 py-2 rounded-md hover:bg-green-700 transition">Tambah</button>
            </div>
            <table class="w-full table-auto text-left">
                <thead>
                    <tr class="text-gray-600">
                        <th class="border-b-2 border-gray-300 p-3">Jenis Pakan</th>
                        <th class="border-b-2 border-gray-300 p-3">Stok Tersisa</th>
                        <th class="border-b-2 border-gray-300 p-3">Kebutuhan Harian</th>
                        <th class="border-b-2 border-gray-300 p-3">Perkiraan Habis</th>
                        <th class="border-b-2 border-gray-300 p-3">Tambah Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200">
                        <td class="p-3">Rumput Segar</td>
                        <td class="p-3">500 Kg</td>
                        <td class="p-3">50 Kg</td>
                        <td class="p-3">10 Hari</td>
                        <td class="p-3 text-center"><i class="fas fa-edit text-green-900 hover:text-green-600 cursor-pointer"></i></td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="p-3">Dedak</td>
                        <td class="p-3">200 Kg</td>
                        <td class="p-3">20 Kg</td>
                        <td class="p-3">12 Hari</td>
                        <td class="p-3 text-center"><i class="fas fa-edit text-green-900 hover:text-green-600 cursor-pointer"></i></td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="p-3">Konsentrat Sapi</td>
                        <td class="p-3">220 Kg</td>
                        <td class="p-3">15 Kg</td>
                        <td class="p-3">14 Hari</td>
                        <td class="p-3 text-center"><i class="fas fa-edit text-green-900 hover:text-green-600 cursor-pointer"></i></td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="p-3">Jagung</td>
                        <td class="p-3">8 Kg</td>
                        <td class="p-3">2 Kg</td>
                        <td class="p-3">4 Hari</td>
                        <td class="p-3 text-center"><i class="fas fa-edit text-green-900 hover:text-green-600 cursor-pointer"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Second Screen -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center mb-4">
                <h2 class="text-2xl font-bold text-green-900">Tambah Jenis Pakan</h2>
            </div>
            <div class="space-y-6">
                <div>
                    <label class="block text-gray-700">Jenis Pakan</label>
                    <input class="w-full border-b-2 border-gray-300 p-3 focus:outline-none focus:border-green-500" type="text"/>
                </div>
                <div>
                    <label class="block text-gray-700">Kebutuhan Harian</label>
                    <input class="w-full border-b-2 border-gray-300 p-3 focus:outline-none focus:border-green-500" type="text"/>
                </div>
            </div>
            <button class="bg-green-900 text-white px-6 py-2 rounded-md mt-4 hover:bg-green-700 transition">Tambah</button>
        </div>

        <!-- Third Screen -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center mb-4">
                <h2 class="text-2xl font-bold text-green-900">Tambah Stok Pakan</h2>
            </div>
            <div class="space-y-6">
                <div>
                    <label class="block text-gray-700">Jenis Pakan</label>
                    <input class="w-full border-b-2 border-gray-300 p-3 focus:outline-none focus:border-green-500" type="text" value="Rumput Segar"/>
                </div>
                <div>
                    <label class="block text-gray-700">Stok</label>
                    <input class="w-full border-b-2 border-gray-300 p-3 focus:outline-none focus:border-green-500" type="text" value="500"/>
                </div>
                <div>
                    <label class="block text-gray-700">Kebutuhan Harian</label>
                    <input class="w-full border-b-2 border-gray-300 p-3 focus:outline-none focus:border-green-500" type="text" value="50"/>
                </div>
            </div>
            <button class="bg-green-900 text-white px-6 py-2 rounded-md mt-4 hover:bg-green-700 transition">Simpan</button>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>
