<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tambah Ternak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/tambah-ternak.css') }}">
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">
   @include('partials.navbar')

   <div class="flex justify-center mt-10">
        <div class="bg-white p-8 rounded-lg shadow-lg w-3/4 md:w-2/3 lg:w-1/2">

            <div class="flex items-center mb-6">
                <i onclick="window.history.back()" class="fas fa-arrow-left text-xl mr-2 cursor-pointer"></i>
                <h1 class="text-2xl font-bold">Tambah Ternak</h1>
            </div>

            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Tag ID -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="tag-id">Tag ID*</label>
                        <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" id="tag-id" type="text" required/>
                    </div>

                    <!-- Nama -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="name">Nama*</label>
                        <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" id="name" type="text" required/>
                    </div>

                    <!-- Jenis Hewan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="jenis-hewan">Jenis Hewan*</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" id="jenis-hewan" required>
                            <option value="">Pilih jenis hewan</option>
                            <option value="sapi">Sapi</option>
                            <option value="kambing">Kambing</option>
                            <option value="ayam">Ayam</option>
                        </select>
                    </div>

                    <!-- Jenis Kelamin -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="jenis-kelamin">Jenis Kelamin*</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" id="jenis-kelamin" required>
                            <option value="">Pilih jenis kelamin</option>
                            <option value="jantan">Jantan</option>
                            <option value="betina">Betina</option>
                        </select>
                    </div>

                    <!-- Lahir/Beli -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="lahir-beli">Lahir/Beli*</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" id="lahir-beli" required>
                            <option value="">Pilih lahir/beli</option>
                            <option value="lahir">Lahir</option>
                            <option value="beli">Beli</option>
                        </select>
                    </div>

                    <!-- Berat Awal -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="berat-awal">Berat Awal*</label>
                        <div class="flex">
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" id="berat-awal" type="text" required/>
                            <span class="ml-2 mt-2">Kg</span>
                        </div>
                    </div>

                    <!-- Tanggal Lahir -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="tanggal-lahir">Tanggal Lahir</label>
                        <div class="relative">
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" id="tanggal-lahir" type="date"/>
                            <i class="fas fa-calendar-alt absolute top-3 right-3 text-gray-500"></i>
                        </div>
                    </div>

                    <!-- Tanggal Beli -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="tanggal-beli">Tanggal Beli</label>
                        <div class="relative">
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" id="tanggal-beli" type="date"/>
                            <i class="fas fa-calendar-alt absolute top-3 right-3 text-gray-500"></i>
                        </div>
                    </div>

                    <!-- Harga Beli -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="harga-beli">Harga Beli</label>
                        <div class="flex">
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" id="harga-beli" type="text" required/>
                            <span class="ml-2 mt-2">Rp</span>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-6 flex justify-end">
                    <button class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" type="submit">
                        Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>
