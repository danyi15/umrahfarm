<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl">
            <form action="{{ route('user.profile.update') }}" method="POST" class="p-8">
                @csrf
                @method('POST')

                <h1 class="text-2xl font-bold text-gray-700 mb-4">Edit Profile</h1>

                <!-- Nama -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-semibold text-gray-600">Nama</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                           class="w-full p-2 border border-gray-300 rounded-lg" required>
                    @error('name')
                        <div class="text-red-600 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-gray-600">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                           class="w-full p-2 border border-gray-300 rounded-lg" required>
                    @error('email')
                        <div class="text-red-600 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Nomor HP -->
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-semibold text-gray-600">Nomor HP</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone', $user->phone) }}"
                           class="w-full p-2 border border-gray-300 rounded-lg">
                    @error('phone')
                        <div class="text-red-600 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg shadow hover:bg-green-700">
                    Update Profile
                </button>
            </form>
        </div>
    </div>
</body>
</html>
