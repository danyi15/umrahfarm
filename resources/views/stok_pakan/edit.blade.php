<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Edit Stok Pakan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen flex flex-col">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <div class="container mx-auto p-8 space-y-8 max-w-3xl bg-white shadow-xl rounded-lg mt-10">
        <h1 class="text-4xl font-extrabold text-green-900 text-center mb-8">Edit Stok Pakan</h1>

        <form action="{{ route('stok_pakan.perbarui', $stokPakan->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Jenis Pakan -->
            <div>
                <label class="block text-gray-700 font-semibold">Jenis Pakan</label>
                <input type="text" name="jenis_pakan" value="{{ old('jenis_pakan', $stokPakan->jenis_pakan) }}"
                    class="w-full border-2 border-gray-300 p-4 rounded-md focus:outline-none focus:border-green-500"
                    placeholder="Masukkan jenis pakan" required />
            </div>

            <!-- Stok Tersisa -->
            <div>
                <label class="block text-gray-700 font-semibold">Stok Tersisa (Kg)</label>
                <input type="number" name="stok_tersisa" value="{{ old('stok_tersisa', $stokPakan->stok_tersisa) }}"
                    class="w-full border-2 border-gray-300 p-4 rounded-md focus:outline-none focus:border-green-500"
                    placeholder="Masukkan stok tersisa" required />
            </div>

            <!-- Kebutuhan Harian -->
            <div>
                <label class="block text-gray-700 font-semibold">Kebutuhan Harian (Kg)</label>
                <input type="number" name="kebutuhan_harian" value="{{ old('kebutuhan_harian', $stokPakan->kebutuhan_harian) }}"
                    class="w-full border-2 border-gray-300 p-4 rounded-md focus:outline-none focus:border-green-500"
                    placeholder="Masukkan kebutuhan harian" required />
            </div>

            <div>
                <label class="block text-gray-700 font-semibold">Perkiraan Habis</label>
                <input name="perkiraan_habis" type="date"
                       class="w-full border-2 border-gray-300 p-4 rounded-md focus:outline-none focus:border-green-500" />
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-green-800 text-white px-8 py-3 rounded-md shadow-lg hover:bg-green-700 transition-transform transform hover:scale-105">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    @include('partials.footer')

</body>
</html>
