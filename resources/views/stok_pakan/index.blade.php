<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Umrah Farm - Stok Pakan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <style>
        /* Custom scrollbar for better aesthetics */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #4ade80;
            border-radius: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
    </style>
</head>
<body class="bg-gray-100 font-roboto min-h-screen flex flex-col">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <div class="p-6 md:p-10 space-y-8 max-w-7xl mx-auto flex-grow">
        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-6">
            <h1 class="text-4xl font-extrabold text-gray-800">Manajemen Stok Pakan</h1>
            <a href="{{ route('stok_pakan.tambah') }}" class="mt-4 md:mt-0 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-green-500 transition duration-200 transform hover:scale-105">
                Tambah Stok Pakan
            </a>
        </div>

        <!-- Table Display -->
        <div class="bg-white p-8 rounded-xl shadow-xl">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">Daftar Stok Pakan</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse bg-gray-50 rounded-lg overflow-hidden shadow">
                    <thead class="bg-green-600 text-white text-sm uppercase tracking-wide">
                        <tr>
                            <th class="p-4 text-left text-xs sm:text-sm">Jenis Pakan</th>
                            <th class="p-4 text-left text-xs sm:text-sm">Stok Tersisa (Kg)</th>
                            <th class="p-4 text-left text-xs sm:text-sm">Kebutuhan Harian (Kg)</th>
                            <th class="p-4 text-left text-xs sm:text-sm">Perkiraan Habis</th>
                            <th class="p-4 text-center text-xs sm:text-sm">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stokPakan as $stock)
                        <tr class="border-b last:border-0 hover:bg-gray-100 transition">
                            <td class="p-4 text-gray-800 text-xs sm:text-sm">{{ $stock->jenis_pakan }}</td>
                            <td class="p-4 text-gray-800 text-xs sm:text-sm">{{ $stock->stok_tersisa }}</td>
                            <td class="p-4 text-gray-800 text-xs sm:text-sm">{{ $stock->kebutuhan_harian }}</td>
                            <td class="p-4 text-gray-800 text-xs sm:text-sm">
                                {{ $stock->perkiraan_habis ? \Carbon\Carbon::parse($stock->perkiraan_habis)->format('d M Y') : 'N/A' }}
                            </td>
                            <td class="p-4 text-center text-xs sm:text-sm">
                                <div class="flex items-center justify-center gap-4">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('stok_pakan.ubah', $stock->id) }}" class="text-blue-500 hover:text-blue-700 transition transform hover:scale-110">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('stok_pakan.destroy', $stock->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 transition transform hover:scale-110">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('partials.footer')

    <!-- SweetAlert Notification -->
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
