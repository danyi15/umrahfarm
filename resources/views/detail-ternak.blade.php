<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Umrah Farm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/detail-ternak.css') }}" />
</head>
<body class="bg-gray-50 text-gray-800 font-roboto">

    <!-- Navbar -->
    @include('partials/navbar')

    <!-- Main Content -->
    <main class="container mx-auto p-6 space-y-8">

        <!-- Detail Section -->
        <section class="bg-green 100 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-green-700 mb-6">Detail Ternak</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="tag-id" class="block text-sm font-medium text-gray-700">Tag ID*</label>
                    <input type="text" id="tag-id" value="SPB001" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" />
                </div>
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama*</label>
                    <input type="text" id="name" value="MooMoo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" />
                </div>
                <div>
                    <label for="jenis-hewan" class="block text-sm font-medium text-gray-700">Jenis Hewan*</label>
                    <select id="jenis-hewan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500">
                        <option selected>Sapi</option>
                    </select>
                </div>
                <div>
                    <label for="jenis-kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin*</label>
                    <select id="jenis-kelamin" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500">
                        <option selected>Betina</option>
                    </select>
                </div>
                <div>
                    <label for="lahir-beli" class="block text-sm font-medium text-gray-700">Lahir/Beli*</label>
                    <select id="lahir-beli" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500">
                        <option selected>Beli</option>
                    </select>
                </div>
                <div>
                    <label for="berat-awal" class="block text-sm font-medium text-gray-700">Berat Awal*</label>
                    <div class="flex">
                        <input type="text" id="berat-awal" value="183" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" />
                        <span class="ml-2 self-center text-gray-700">Kg</span>
                    </div>
                </div>
                <div>
                    <label for="tanggal-lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                    <input type="date" id="tanggal-lahir" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" />
                </div>
                <div>
                    <label for="tanggal-beli" class="block text-sm font-medium text-gray-700">Tanggal Beli</label>
                    <input type="date" id="tanggal-beli" value="2024-04-15" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" />
                </div>
                <div>
                    <label for="harga-beli" class="block text-sm font-medium text-gray-700">Harga Beli</label>
                    <div class="flex">
                        <input type="text" id="harga-beli" value="11000000" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" />
                        <span class="ml-2 self-center text-gray-700">Rp</span>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex justify-end">
                <button class="bg-green-600 text-white px-6 py-2 rounded-md shadow hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">Simpan</button>
            </div>
        </section>

        <!-- Galeri Section -->
        <section class="bg-green 100 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-green-700 mb-6">Galeri</h2>
            <div class="flex items-center justify-between">
                <img src="https://storage.googleapis.com/a1aa/image/goLNYE1a1ArUB96efKEBSqQxA3TjItT1qpeczOevQ0upXkVPB.jpg" alt="Image of a cow" class="rounded-md shadow-md" width="300" />
                <button class="bg-green-600 text-white px-6 py-2 rounded-md shadow hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">Tambah</button>
            </div>
        </section>

        <!-- Siap Dijual Section -->
        <section class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-green-700 mb-6">Siap Dijual?</h2>
            <div class="flex items-center mb-4">
                <label class="flex items-center mr-6">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600" checked />
                    <span class="ml-2">Iya</span>
                </label>
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600" />
                    <span class="ml-2">Tidak</span>
                </label>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="berat-saat-ini" class="block text-sm font-medium text-gray-700">Berat Saat Ini</label>
                    <div class="flex">
                        <input type="text" id="berat-saat-ini" value="254" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" />
                        <span class="ml-2 self-center text-gray-700">Kg</span>
                    </div>
                </div>
                <div>
                    <label for="harga-jual" class="block text-sm font-medium text-gray-700">Harga Jual</label>
                    <div class="flex">
                        <input type="text" id="harga-jual" value="20000000" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" />
                        <span class="ml-2 self-center text-gray-700">Rp</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pertumbuhan Section -->
        <section class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-green-700 mb-6">Pertumbuhan</h2>
            <div class="flex justify-end mb-4">
                <button onclick="window.location.href='{{ url('pertumbuhan-ternak') }}'" class="bg-green-600 text-white px-6 py-2 rounded-md shadow hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 flex items-center">
                    <i class="fas fa-plus mr-2"></i>Tambah
                </button>
            </div>
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="border-b-2 border-gray-300 py-2 px-4">Tanggal</th>
                        <th class="border-b-2 border-gray-300 py-2 px-4">Berat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-b border-gray-300 py-2 px-4">15/06/2024</td>
                        <td class="border-b border-gray-300 py-2 px-4">230 Kg</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Penyakit Section -->
<section class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-green-700 mb-6">Penyakit</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label for="penyakit-name" class="block text-sm font-medium text-gray-700">Nama Penyakit</label>
            <input type="text" id="penyakit-name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" />
        </div>
        <div>
            <label for="symptoms" class="block text-sm font-medium text-gray-700">Gejala</label>
            <input type="text" id="symptoms" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" />
        </div>
        <div>
            <label for="treatment" class="block text-sm font-medium text-gray-700">Perawatan</label>
            <input type="text" id="treatment" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" />
        </div>
        <div>
            <label for="penyakit-date" class="block text-sm font-medium text-gray-700">Tanggal Terjadi</label>
            <input type="date" id="penyakit-date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" />
        </div>
    </div>
    <div class="mt-6 flex justify-end">
        <button class="bg-green-600 text-white px-6 py-2 rounded-md shadow hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">Simpan Penyakit</button>
    </div>
</section>


    </main>

    <!-- Footer -->
    @include('partials/footer')

</body>
</html>
