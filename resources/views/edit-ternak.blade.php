<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Ternak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/tambah-ternak.css') }}">
</head>

<body class="bg-gray-50 flex flex-col min-h-screen">
    @include('partials.navbar')

    <div class="flex justify-center mt-10">
        <div class="bg-white p-8 rounded-lg shadow-lg w-3/4 md:w-2/3 lg:w-1/2">

            <div class="flex items-center mb-6">
                <i onclick="window.history.back()" class="fas fa-arrow-left text-xl mr-2 cursor-pointer"></i>
                <h1 class="text-2xl font-bold">Update Ternak</h1>
            </div>

            @if(session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded-md mb-4">
                {{ session('success') }}
            </div>
            @endif

            <form action="{{ route('update.ternak', $data->tag_id) }}" method="POST">
                @csrf
                @method('put')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Tag ID -->
                    {{-- <div>
                        <label class="block text-sm font-medium text-gray-700" for="tag_id">Tag ID*</label>
                        <input
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                            name="tag_id" type="text" value="{{ $data->tag_id }}" readonly />
                    </div> --}}

                    <!-- Nama -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="name">Nama*</label>
                        <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                               name="name" type="text" value="{{ old('name', $data->name) }}" required />
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Jenis Hewan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="jenis_hewan">Jenis Hewan*</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                name="jenis_hewan" required>
                            <option value="">Pilih jenis hewan</option>
                            <option value="sapi" {{ old('jenis_hewan', $data->jenis_hewan) == 'sapi' ? 'selected' : '' }}>Sapi</option>
                            <option value="kambing" {{ old('jenis_hewan', $data->jenis_hewan) == 'kambing' ? 'selected' : '' }}>Kambing</option>
                            <option value="ayam" {{ old('jenis_hewan', $data->jenis_hewan) == 'ayam' ? 'selected' : '' }}>Ayam</option>
                        </select>
                        @error('jenis_hewan') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Jenis Kelamin -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="jenis_kelamin">Jenis Kelamin*</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                name="jenis_kelamin" required>
                            <option value="">Pilih jenis kelamin</option>
                            <option value="jantan" {{ old('jenis_kelamin', $data->jenis_kelamin) == 'jantan' ? 'selected' : '' }}>Jantan</option>
                            <option value="betina" {{ old('jenis_kelamin', $data->jenis_kelamin) == 'betina' ? 'selected' : '' }}>Betina</option>
                        </select>
                        @error('jenis_kelamin') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Lahir/Beli -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="lahir_beli">Lahir/Beli*</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                name="lahir_beli" required>
                            <option value="">Pilih lahir/beli</option>
                            <option value="lahir" {{ old('lahir_beli', $data->lahir_beli) == 'lahir' ? 'selected' : '' }}>Lahir</option>
                            <option value="beli" {{ old('lahir_beli', $data->lahir_beli) == 'beli' ? 'selected' : '' }}>Beli</option>
                        </select>
                        @error('lahir_beli') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Berat Awal -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="berat_awal">Berat Awal*</label>
                        <div class="flex">
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                   name="berat_awal" type="text" value="{{ old('berat_awal', $data->berat_awal) }}" required />
                            <span class="ml-2 mt-2">Kg</span>
                        </div>
                        @error('berat_awal') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Tanggal Lahir -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="tanggal_lahir">Tanggal Lahir</label>
                        <div class="relative">
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                   name="tanggal_lahir" type="date" value="{{ old('tanggal_lahir', $data->tanggal_lahir) }}" />
                            <i class="fas fa-calendar-alt absolute top-3 right-3 text-gray-500"></i>
                        </div>
                        @error('tanggal_lahir') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Tanggal Beli -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="tanggal_beli">Tanggal Beli</label>
                        <div class="relative">
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                   name="tanggal_beli" type="date" value="{{ old('tanggal_beli', $data->tanggal_beli) }}" />
                            <i class="fas fa-calendar-alt absolute top-3 right-3 text-gray-500"></i>
                        </div>
                        @error('tanggal_beli') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <!-- Harga Beli -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="harga_beli">Harga Beli</label>
                        <div class="flex">
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                   name="harga_beli" type="text" value="{{ old('harga_beli', $data->harga_beli) }}" required />
                            <span class="ml-2 mt-2">Rp</span>
                        </div>
                        @error('harga_beli') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-6 flex justify-end">
                    <button class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="submit">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('partials.footer')

</body>

</html>
