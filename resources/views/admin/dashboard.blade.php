<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="bg-blue-700 text-white w-64 p-4">
            <h2 class="text-xl font-bold mb-6">Admin Dashboard</h2>
            <nav>
                <ul>
                    <li class="mb-2"><a href="/users" class="block px-4 py-2 rounded hover:bg-blue-600">Kelola Pengguna</a></li>
                    <li class="mb-2"><a href="/reports" class="block px-4 py-2 rounded hover:bg-blue-600">Kelola Data</a></li>
                    <li class="mb-2"><a href="/stats" class="block px-4 py-2 rounded hover:bg-blue-600">Statistik</a></li>
                    <li class="mb-2"><a href="/logout" class="block px-4 py-2 bg-red-500 hover:bg-red-600 rounded">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-8">
            <h1 class="text-2xl font-bold mb-6">Selamat Datang, Admin!</h1>
            <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <!-- Statistik Card -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-700">Jumlah Pengguna</h3>
                    <p class="text-2xl text-blue-600 font-bold">150</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-700">Laporan Baru</h3>
                    <p class="text-2xl text-green-600 font-bold">25</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-700">Aktivitas Mingguan</h3>
                    <p class="text-2xl text-yellow-600 font-bold">75</p>
                </div>
            </section>

            <!-- Tabel Data -->
            <section class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-4 text-gray-800">Daftar Pengguna</h2>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
                            <th class="py-2 px-4">Nama</th>
                            <th class="py-2 px-4">Email</th>
                            <th class="py-2 px-4">Role</th>
                            <th class="py-2 px-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2 px-4">John Doe</td>
                            <td class="py-2 px-4">johndoe@example.com</td>
                            <td class="py-2 px-4">Pengguna</td>
                            <td class="py-2 px-4">
                                <button class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">Edit</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

</body>
</html>
