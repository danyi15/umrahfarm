<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Umrah Farm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen font-sans">

    @include('partials.navbar')

    <!-- Main Content -->
    <div class="container mx-auto p-6">
        <!-- Button for adding livestock -->
        <button
            onclick="window.location.href='{{ url('tambah-ternak') }}'"
            class="bg-green-800 text-white px-6 py-3 rounded-lg mb-8 hover:bg-green-700 transition duration-300 flex items-center justify-center">
            <i class="fas fa-plus mr-2"></i>Tambah Ternak
        </button>

        <!-- Livestock Cards Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($record as $data)
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 transform hover:scale-105">
                    <div class="flex flex-col items-center">
                        <div class="bg-green-100 p-4 rounded-full mb-4">
                            <i class="fas fa-paw text-4xl text-green-800"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $data->name }}</h3>
                        <p class="text-sm text-gray-600">{{ $data->tag_id }}</p>
                        <p class="text-sm text-gray-600 capitalize">{{ $data->jenis_kelamin }}</p>
                        <div class="mt-4">
                            <a href="{{ route('detail.ternak', $data->tag_id) }}" class="text-green-800 font-semibold hover:underline">Detail</a>
                        </div>
                    </div>
                    <div class="text-right mt-6">
                        <a href="{{ route('edit.ternak', $data->tag_id) }}" class="text-yellow-500 hover:underline text-sm mr-4">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('delete.ternak', $data->tag_id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline text-sm">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('partials.footer')

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
