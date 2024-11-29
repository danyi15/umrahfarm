<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body class="bg-gradient-to-r from-gray-700 to-green-900 h-screen flex items-center justify-center">
    <div class="bg-green-100 rounded-lg shadow-lg p-8 flex">
        <div class="w-1/2">
            <div class="flex items-center mb-8">
                <i class="fas fa-arrow-left text-2xl mr-4"></i>
                <h1 class="text-3xl font-bold">UMRAH FARM</h1>
            </div>
            <form action="/register" method="POST">
                <div class="mb-4 flex items-center">
                    <i class="fas fa-user text-xl mr-4"></i>
                    <input class="w-full p-2 border rounded-lg" placeholder="Nama" type="text" aria-label="Nama" required>
                </div>
                <div class="mb-4 flex items-center">
                    <i class="fas fa-envelope text-xl mr-4"></i>
                    <input class="w-full p-2 border rounded-lg" placeholder="Email" type="email" aria-label="Email" required>
                </div>
                <div class="mb-4 flex items-center">
                    <i class="fas fa-home text-xl mr-4"></i>
                    <input class="w-full p-2 border rounded-lg" placeholder="Nama Peternakan" type="text" aria-label="Nama Peternakan" required>
                </div>
                <div class="mb-4 flex items-center">
                    <i class="fas fa-map-marker-alt text-xl mr-4"></i>
                    <input class="w-full p-2 border rounded-lg" placeholder="Lokasi" type="text" aria-label="Lokasi" required>
                </div>
                <div class="mb-4 flex items-center">
                    <i class="fas fa-phone text-xl mr-4"></i>
                    <input class="w-full p-2 border rounded-lg" placeholder="Nomor HP" type="tel" aria-label="Nomor HP" required>
                </div>
                <div class="mb-4 flex items-center">
                    <i class="fas fa-lock text-xl mr-4"></i>
                    <input class="w-full p-2 border rounded-lg" placeholder="Password" type="password" aria-label="Password" required>
                </div>
                <button type="submit" class="w-full bg-green-900 text-white p-2 rounded-lg">Register</button>
            </form>
        </div>
        <div class="w-1/2 flex items-center justify-center">
            <img src="https://storage.googleapis.com/a1aa/image/LODzoKZmRIpCGN5MeC08L4nf7nGmnTQpdA8thQOUQXKPkE1TA.jpg"
                 alt="Illustration of a farmer with animals including a cow, pig, and chickens on a farm"
                 class="w-3/4" width="300" height="300">
        </div>
    </div>
</body>
</html>
