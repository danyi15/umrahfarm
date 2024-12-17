<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Tambah Stok Pakan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
</head>
<body class="bg-green-50 font-roboto min-h-screen flex flex-col">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <div class="max-w-3xl mx-auto p-8 bg-white shadow-lg rounded-lg mt-10">
        <h1 class="text-4xl font-extrabold text-green-900 mb-6 text-center">Tambah Stok Pakan</h1>

        <form action="{{ route('stok_pakan.simpan') }}" method="POST" class="space-y-8">
            @csrf

            <!-- Jenis Pakan -->
            <div>
                <label class="block text-gray-700 font-semibold">Jenis Pakan</label>
                <input name="jenis_pakan" type="text"
                       class="w-full border-2 border-gray-300 p-4 rounded-md focus:outline-none focus:border-green-500"
                       placeholder="Masukkan jenis pakan" required />
            </div>

            <!-- Kebutuhan Harian -->
            <div>
                <label class="block text-gray-700 font-semibold">Kebutuhan Harian (Kg)</label>
                <input name="kebutuhan_harian" type="number" step="0.01"
                       class="w-full border-2 border-gray-300 p-4 rounded-md focus:outline-none focus:border-green-500"
                       placeholder="Masukkan kebutuhan harian" required />
            </div>

            <!-- Stok Tersisa -->
            <div>
                <label class="block text-gray-700 font-semibold">Stok Tersisa (Kg)</label>
                <input name="stok_tersisa" type="number" step="0.01"
                       class="w-full border-2 border-gray-300 p-4 rounded-md focus:outline-none focus:border-green-500"
                       placeholder="Masukkan stok tersisa" required />
            </div>

            <!-- Perkiraan Habis -->
            <div>
                <label class="block text-gray-700 font-semibold">Perkiraan Habis</label>
                <input name="perkiraan_habis" type="date"
                       class="w-full border-2 border-gray-300 p-4 rounded-md focus:outline-none focus:border-green-500" />
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center mt-6">
                <button type="submit"
                        class="bg-green-700 text-white px-8 py-3 rounded-md shadow-lg hover:bg-green-600 transition transform hover:scale-105">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    @include('partials.footer')

</body>
</html>
