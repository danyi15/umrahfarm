<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetMonitor - Umrah Farm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal min-h-screen flex flex-col">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Header -->
    <header class="bg-green-700 text-white py-6">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold">VetMonitor</h1>
            <p class="text-gray-200 text-lg">Pantau kesehatan Hewan Ternak dengan mudah dan efisien</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Tombol Tambah Catatan -->
        <section class="mb-8 flex justify-end">
            <a href="{{ route('vet-monitor.create') }}" class="bg-green-700 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-600 transition">
                <i class="fas fa-plus mr-2"></i>Tambah Catatan Kesehatan
            </a>
        </section>

        <!-- Catatan Kesehatan Cards -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($records as $record)
                <div class="bg-white rounded-lg shadow-lg p-4 flex flex-col">
                    <!-- Foto Hewan -->
                    <div class="flex justify-center">
                        @if ($record->foto_hewan)
                            <img src="{{ asset('storage/' . $record->foto_hewan) }}" alt="Foto Hewan" class="w-40 h-40 object-cover rounded-md">
                        @else
                            <div class="w-40 h-40 bg-gray-200 flex items-center justify-center rounded-md">
                                <span class="text-gray-500">Tidak ada foto</span>
                            </div>
                        @endif
                    </div>

                    <!-- Informasi Hewan -->
                    <div class="mt-4 text-center">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $record->recordTernak->name ?? 'Tidak Ada Nama' }}</h3>
                        <p class="text-sm text-gray-600">{{ $record->tanggal ?? 'Tanggal tidak tersedia' }}</p>
                    </div>

                    <!-- Detail Kesehatan -->
                    <div class="mt-4 text-sm text-gray-600">
                        <p><strong>Diagnosa:</strong> {{ $record->diagnosa ?? 'Diagnosa tidak ada' }}</p>
                        <p><strong>Obat:</strong> {{ $record->obat ?? 'Obat tidak dicatat' }}</p>
                        <p><strong>Status:</strong> {{ $record->health_status ?? 'Status tidak ada' }}</p>
                    </div>

                    <!-- Aksi -->
                    <div class="mt-4 flex justify-between">
                        <a href="{{ route('vet-monitor.edit', $record->id) }}" class="text-blue-600 hover:underline">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('vet-monitor.destroy', $record->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus?')">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="col-span-full text-center text-gray-500">Tidak ada catatan kesehatan yang tersedia</p>
            @endforelse
        </section>
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
        @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
        @endif
    </script>
</body>
</html>
