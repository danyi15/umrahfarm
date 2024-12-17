<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100">
    @include('partials.navbar')
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl">
            <!-- Profile Header -->
            <div class="bg-gradient-to-r from-green-600 to-blue-600 rounded-t-lg p-8 text-white flex items-center justify-between">
                <div class="flex items-center">
                    <img src="{{ Auth::user()->profile_image ?? 'https://via.placeholder.com/100' }}" alt="User Avatar"
                         class="w-20 h-20 rounded-full border-4 border-white shadow-lg">
                    <div class="ml-6">
                        <h1 class="text-2xl font-bold">{{ Auth::user()->name }}</h1>
                        <p class="text-gray-200">{{ Auth::user()->farm_name ?? 'Peternak | UMRAH Farm' }}</p>
                    </div>
                </div>
                <a href="{{ route('user.edit') }}" class="bg-white text-green-600 px-4 py-2 rounded-lg shadow hover:bg-green-100">
                    <i class="fas fa-edit mr-2"></i>Edit Profile
                </a>
            </div>
            <!-- Profile Content -->
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Personal Information -->
                <div>
                    <h2 class="text-xl font-bold text-gray-700 mb-4">Informasi Pribadi</h2>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <i class="fas fa-user text-green-600 text-xl mr-4"></i>
                            <p><span class="font-bold">Nama:</span> {{ Auth::user()->name }}</p>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-green-600 text-xl mr-4"></i>
                            <p><span class="font-bold">Email:</span> {{ Auth::user()->email }}</p>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-phone text-green-600 text-xl mr-4"></i>
                            <p><span class="font-bold">Nomor HP:</span> {{ Auth::user()->phone ?? 'Not available' }}</p>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt text-green-600 text-xl mr-4"></i>
                            <p><span class="font-bold">Lokasi:</span> {{ Auth::user()->location ?? 'Not available' }}</p>
                        </div>
                    </div>
                </div>
                <!-- Farm Information -->
                <div>
                    <h2 class="text-xl font-bold text-gray-700 mb-4">Informasi Peternakan</h2>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <i class="fas fa-home text-green-600 text-xl mr-4"></i>
                            <p><span class="font-bold">Nama Peternakan:</span> {{ Auth::user()->farm_name ?? 'Not available' }}</p>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-seedling text-green-600 text-xl mr-4"></i>
                            <p><span class="font-bold">Jenis Peternakan:</span> {{ Auth::user()->livestock_type ?? 'Not available' }}</p>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-calendar-alt text-green-600 text-xl mr-4"></i>
                            <p><span class="font-bold">Bergabung:</span> {{ Auth::user()->join_date ?? 'Not available' }}</p>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-users text-green-600 text-xl mr-4"></i>
                            <p><span class="font-bold">Karyawan:</span> {{ Auth::user()->employee_count ?? 'Not available' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Action Buttons -->
            <div class="bg-gray-100 p-6 flex justify-between items-center rounded-b-lg">
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg shadow hover:bg-red-700">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
