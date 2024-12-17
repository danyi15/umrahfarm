<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catatan Kesehatan - VetMonitor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal min-h-screen flex flex-col">
    @include('partials.navbar')

    <header class="bg-green-700 text-white py-6">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold">Edit Catatan Kesehatan</h1>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <section class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Edit Catatan Kesehatan</h2>
            <form action="{{ route('vet-monitor.update', $record->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="tag_id" class="block text-gray-700">Nama Sapi</label>
                    <input type="text" id="tag_id" name="tag_id" value="{{ $record->recordTernak->name ?? '' }}" class="mt-2 p-2 w-full border border-gray-300 rounded">
                </div>

                <div class="mb-4">
                    <label for="tanggal" class="block text-gray-700">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" value="{{ $record->tanggal }}" class="mt-2 p-2 w-full border border-gray-300 rounded">
                </div>

                <div class="mb-4">
                    <label for="diagnosa" class="block text-gray-700">Diagnosa</label>
                    <textarea id="diagnosa" name="diagnosa" class="mt-2 p-2 w-full border border-gray-300 rounded">{{ $record->diagnosa }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="obat" class="block text-gray-700">Obat</label>
                    <input type="text" id="obat" name="obat" value="{{ $record->obat }}" class="mt-2 p-2 w-full border border-gray-300 rounded">
                </div>

                <div class="mb-4">
                    <label for="health_status" class="block text-gray-700">Status Kesehatan</label>
                    <input type="text" id="health_status" name="health_status" value="{{ $record->health_status }}" class="mt-2 p-2 w-full border border-gray-300 rounded">
                </div>

                <div class="mb-4">
                    <label for="foto_hewan" class="block text-gray-700">Foto Hewan</label>
                    <input type="file" id="foto_hewan" name="foto_hewan" class="mt-2 p-2 w-full border border-gray-300 rounded">
                    @if($record->foto_hewan)
                    <img src="{{ asset('storage/' . $record->foto_hewan) }}?{{ time() }}" alt="Foto Hewan" class="w-32 h-32 mt-2 rounded-lg shadow-md">
                    @endif
                </div>

                <div class="mt-4">
                    <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-600 transition">Simpan Perubahan</button>
                </div>
            </form>
        </section>
    </main>

    @include('partials.footer')
</body>
</html>
