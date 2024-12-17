<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umrah Farm Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gradient-to-r from-green-900 to-green-700 flex items-center justify-center min-h-screen">
    <div class="bg-green-100 rounded-lg shadow-lg p-10 flex items-center">
        <div class="w-1/2">
            <div class="flex items-center mb-8">
                <i class="fas fa-cow text-4xl text-green-900 mr-4"></i>
                <h1 class="text-4xl font-bold text-green-900">UMRAH FARM</h1>
            </div>
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        <i class="fas fa-envelope mr-2"></i>Email
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email"
                        name="email"
                        placeholder="Email"
                        type="email"
                        value="{{ old('email') }}"
                        required
                    />
                    @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        <i class="fas fa-lock mr-2"></i>Password
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password"
                        name="password"
                        placeholder="Password"
                        type="password"
                        required
                    />
                    @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between mb-4">
                    <span class="text-sm text-gray-600">
                        Belum memiliki akun?
                        <a class="text-blue-500" href="{{ route('signup.form') }}">Daftar disini</a>
                    </span>
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class="bg-green-900 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit"
                    >
                        Login
                    </button>
                </div>
            </form>
        </div>
        <div class="w-1/2">
            <img
                alt="Ilustrasi peternakan dengan sapi, ayam, dan babi"
                class="rounded-lg"
                height="400"
                src="https://storage.googleapis.com/a1aa/image/zelwuHKLuLyCJiTy1iIwPAUQkHTdO128x5MPDjnJSTXTxi6JA.jpg"
                width="400"
            />
        </div>
    </div>
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
