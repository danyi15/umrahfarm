<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Umrah Farm - Detail Ternak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
</head>
<body class="bg-gradient-to-b from-green-50 to-gray-100 text-gray-800 font-roboto">

    <!-- Navbar -->
    @include('partials/navbar')

    <!-- Main Content -->
    <main class="container mx-auto p-6 space-y-8">

        <!-- Detail Section -->
        <section class="bg-white p-8 rounded-xl shadow-md max-w-4xl mx-auto space-y-6 border-t-4 border-green-500">
            <h2 class="text-4xl font-bold text-green-600">Detail Ternak</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-600">Tag ID:</span>
                        <span class="text-lg font-bold text-gray-800">{{ $data->tag_id }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-600">Nama:</span>
                        <span class="text-lg font-bold text-gray-800">{{ $data->name }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-600">Jenis Hewan:</span>
                        <span class="text-lg font-bold text-gray-800">{{ $data->jenis_hewan }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-600">Jenis Kelamin:</span>
                        <span class="text-lg font-bold text-gray-800">{{ $data->jenis_kelamin }}</span>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-600">Tanggal Lahir:</span>
                        <span class="text-lg font-bold text-gray-800">{{ $data->tanggal_lahir }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-600">Tanggal Beli:</span>
                        <span class="text-lg font-bold text-gray-800">{{ $data->tanggal_beli }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-medium text-gray-600">Harga Beli:</span>
                        <span class="text-lg font-bold text-gray-800">Rp {{ number_format($data->harga_beli, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4">
                <a href="{{ route ('edit.ternak', $data->tag_id) }}" class="flex-1 bg-yellow-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-yellow-600 transition duration-300 text-center font-medium">
                    <i class="fas fa-edit mr-2"></i> Update Ternak
                </a>
                <form action="{{ route('delete.ternak', $data->tag_id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ternak ini?');" class="flex-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full bg-red-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-red-700 transition duration-300 font-medium">
                        <i class="fas fa-trash mr-2"></i> Hapus Ternak
                    </button>
                </form>
            </div>
        </section>

        <!-- Galeri Section -->
        <section class="bg-white p-8 rounded-xl shadow-md max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-green-600 mb-4">Galeri</h2>
            <div class="flex items-center justify-between">
                <img src="https://storage.googleapis.com/a1aa/image/goLNYE1a1ArUB96efKEBSqQxA3TjItT1qpeczOevQ0upXkVPB.jpg" alt="Image of a cow" class="rounded-lg shadow-md w-72" />
                <button class="bg-green-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition">
                    Tambah Foto
                </button>
            </div>
        </section>

        <!-- Siap Dijual Section -->
        <section class="bg-white p-8 rounded-xl shadow-md max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-green-600 mb-4">Siap Dijual?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="berat-saat-ini" class="block text-sm font-medium text-gray-600">Berat Saat Ini</label>
                    <input type="text" id="berat-saat-ini" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:border-green-500 focus:ring-green-500 text-gray-800" />
                </div>
                <div>
                    <label for="harga-jual" class="block text-sm font-medium text-gray-600">Harga Jual</label>
                    <input type="text" id="harga-jual" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:border-green-500 focus:ring-green-500 text-gray-800" />
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    @include('partials/footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
