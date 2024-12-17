<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-800 to-green-900 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-md w-full max-w-3xl p-8 space-y-6">
        <h1 class="text-2xl md:text-3xl font-bold text-center text-green-900">Form Pendaftaran</h1>

        <form action="{{ route('auth.signup.process') }}" method="POST" class="space-y-6">
            <!-- Informasi Pribadi -->
            @csrf
            <div class="space-y-4">
                <h2 class="text-lg font-semibold text-gray-700">Informasi Pribadi</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="text-sm font-medium text-gray-600">Nama Lengkap</label>
                        <input type="text" id="name" name="name" placeholder="Nama Lengkap"
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none" required>
                    </div>
                    <div>
                        <label for="email" class="text-sm font-medium text-gray-600">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email"
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none" required>
                    </div>
                </div>
                <div>
                    <label for="phone" class="text-sm font-medium text-gray-600">Nomor HP</label>
                    <input type="tel" id="phone" name="phone" placeholder="Nomor HP"
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none">
                </div>
            </div>

            <!-- Informasi Peternakan -->
            <div class="space-y-4">
                <h2 class="text-lg font-semibold text-gray-700">Informasi Peternakan</h2>
                <div>
                    <label for="farm_name" class="text-sm font-medium text-gray-600">Nama Peternakan</label>
                    <input type="text" id="farm_name" name="farm_name" placeholder="Nama Peternakan"
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none">
                </div>
                <div>
                    <label for="location" class="text-sm font-medium text-gray-600">Lokasi Peternakan</label>
                    <input type="text" id="location" name="location" placeholder="Lokasi Peternakan"
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="livestock_type" class="text-sm font-medium text-gray-600">Jenis Hewan Ternak</label>
                        <select id="livestock_type" name="livestock_type"
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none">
                            <option value="" disabled selected>Pilih Jenis Hewan</option>
                            <option value="sapi">Sapi</option>
                            <option value="kambing">Kambing</option>
                            <option value="ayam">Ayam</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div>
                        <label for="farm_scale" class="text-sm font-medium text-gray-600">Jumlah Hewan Ternak</label>
                        <input type="number" id="farm_scale" name="farm_scale" placeholder="Jumlah Hewan"
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none">
                    </div>
                </div>
            </div>

            <!-- Informasi Karyawan -->
            <div class="space-y-4">
                <h2 class="text-lg font-semibold text-gray-700">Informasi Karyawan</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="employee_count" class="text-sm font-medium text-gray-600">Jumlah Karyawan</label>
                        <input type="number" id="employee_count" name="employee_count" placeholder="Jumlah Karyawan"
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none">
                    </div>
                    <div>
                        <label for="join_date" class="text-sm font-medium text-gray-600">Tanggal Bergabung</label>
                        <input type="date" id="join_date" name="join_date"
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none">
                    </div>
                </div>
            </div>

            <!-- Password -->
            <div class="space-y-4">
                <h2 class="text-lg font-semibold text-gray-700">Keamanan</h2>
                <div>
                    <label for="password" class="text-sm font-medium text-gray-600">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password"
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none" required>
                </div>
                <div>
                    <label for="password_confirmation" class="text-sm font-medium text-gray-600">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password"
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none" required>
                </div>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-green-700 hover:bg-green-800 text-white py-3 rounded-lg font-semibold text-lg transition">
                Daftar
            </button>
        </form>
        <p class="text-center text-sm text-gray-600">
            Sudah punya akun? <a href="{{ route('auth.login') }}" class="text-green-700 hover:underline font-medium">Masuk di sini</a>
        </p>
    </div>

</body>
</html>
