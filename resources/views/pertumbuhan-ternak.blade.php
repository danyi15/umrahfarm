<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Umrah Farm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external CSS file -->
</head>
<body class="bg-white">
   @include('partials/navbar')
    <div class="flex justify-center items-center h-screen">
        <div class="bg-green-50 p-8 rounded-lg shadow-lg w-1/2">
            <div class="flex items-center mb-4">
                <i onclick="window.history.back()" class="fas fa-arrow-left text-xl mr-2 cursor-pointer"></i>
                <h1 class="text-2xl font-bold">Pertumbuhan</h1>
            </div>
            <form>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="tanggal">Tanggal</label>
                        <div class="relative mt-1">
                            <input class="block w-full pl-3 pr-10 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="tanggal" name="tanggal" type="date"/>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="fas fa-calendar-alt text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="berat">Berat</label>
                        <div class="relative mt-1">
                            <input class="block w-full pl-3 pr-10 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="berat" name="berat" type="number"/>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500">Kg</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button class="bg-gray-800 text-white px-4 py-2 rounded" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
    @include('partials/footer')
</body>
</html>
