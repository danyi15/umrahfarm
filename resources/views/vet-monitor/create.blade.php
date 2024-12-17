<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Catatan Kesehatan - VetMonitor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal min-h-screen flex flex-col">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Header -->
    <header class="bg-green-700 text-white py-6">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold">Tambah Catatan Kesehatan</h1>
            <p class="text-gray-200">Masukkan data kesehatan sapi baru</p>
        </div>
    </header>

    <!-- Form Tambah Catatan -->
    <main class="container mx-auto px-4 py-8">
        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Tambah Catatan Kesehatan</h2>
            <form action="{{ route('vet-monitor.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 md:grid-cols-2">
                    <!-- Nama Sapi -->
                    <div>
                        <label for="tag_id" class="block text-gray-600 font-medium">Nama Sapi</label>
                        <select
                            name="tag_id"
                            id="tag_id"
                            class="w-full mt-2 p-2 border border-gray-300 rounded"
                            required>
                            <option value="">Pilih Sapi</option>
                            @foreach ($RecordTernak as $record)
                                <option value="{{ $record->tag_id }}">{{ $record->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Tanggal -->
                    <div>
                        <label for="tanggal" class="block text-gray-600 font-medium">Tanggal Pemeriksaan</label>
                        <input
                            type="date"
                            id="tanggal"
                            name="tanggal"
                            class="w-full mt-2 p-2 border border-gray-300 rounded"
                            required>
                    </div>
                </div>
                <!-- Diagnosa -->
                <div class="mt-4">
                    <label for="diagnosa" class="block text-gray-600 font-medium">Diagnosa</label>
                    <textarea
                        id="diagnosa"
                        name="diagnosa"
                        class="w-full mt-2 p-2 border border-gray-300 rounded"
                        placeholder="Masukkan diagnosa kesehatan sapi"
                        required></textarea>
                </div>

                {{-- HEALTH --}}
                <div class="mt-4">
                    <label for="diagnosa" class="block text-gray-600 font-medium">Status Kesehatan</label>
                    <textarea
                        id="health_status"
                        name="health_status"
                        class="w-full mt-2 p-2 border border-gray-300 rounded"
                        placeholder="Masukkan Status Kesehatan"
                        required></textarea>
                </div>
                <!-- Obat -->
                <div class="mt-4">
                    <label for="obat" class="block text-gray-600 font-medium">Obat yang Diberikan</label>
                    <input
                        type="text"
                        id="obat"
                        name="obat"
                        class="w-full mt-2 p-2 border border-gray-300 rounded"
                        placeholder="Masukkan nama obat">
                </div>
                <!-- Foto Hewan -->
                <div class="mt-4">
                    <label for="foto_hewan" class="block text-gray-600 font-medium">Foto Hewan</label>
                    <input
                        type="file"
                        id="foto_hewan"
                        name="foto_hewan"
                        class="w-full mt-2 p-2 border border-gray-300 rounded"
                        accept="image/*">
                </div>
                <!-- Tombol -->
                <div class="mt-6">
                    <button
                        type="submit"
                        class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-600 transition">
                        Simpan Catatan
                    </button>
                </div>
            </form>
        </section>
    </main>

    <!-- Footer -->
    @include('partials.footer')
</body>
</html>
