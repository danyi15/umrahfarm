<?php

namespace App\Http\Controllers;
use App\Models\RecordTernak;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan halaman signup
    public function dashboard()
    {
        $record = RecordTernak::all(); // Ambil data dari database
        return view('dashboard', compact('record'));
    }

    public function showSignup()
    {
        return view('auth.signup');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    // Proses signup
    public function processSignup(Request $request)
    {
        // Validasi input dari form signup
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', // Pastikan email unik
            'password' => 'required|confirmed|min:6', // Validasi password dan konfirmasi password
            'farm_name' => 'nullable|string|max:255',
            'livestock_type' => 'nullable|string|max:255',
            'farm_scale' => 'nullable|integer',
            'location' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15',
            'employee_count' => 'nullable|integer',
            'join_date' => 'nullable|date',
        ]);

        // Membuat user baru
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'] ?? null; // Jika tidak ada nomor telepon, set null
        $user->farm_name = $validated['farm_name'] ?? null; // Jika tidak ada farm_name, set null
        $user->location = $validated['location'] ?? null; // Jika tidak ada location, set null
        $user->livestock_type = $validated['livestock_type'] ?? null; // Jika tidak ada livestock_type, set null
        $user->farm_scale = $validated['farm_scale'] ?? null; // Jika tidak ada farm_scale, set null
        $user->employee_count = $validated['employee_count'] ?? null; // Jika tidak ada employee_count, set null
        $user->join_date = $validated['join_date'] ?? null; // Jika tidak ada join_date, set null
         $user->password = Hash::make($request->password);  // Enkripsi password

        // Simpan data user ke database
        if ($user->save()) {
            return redirect()->route('auth.login')->with('success', 'Akun Anda telah berhasil dibuat.');
        } else {
            return back()->withErrors(['error' => 'Gagal membuat akun. Silakan coba lagi.']);
        }
    }

    // Proses login
    public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Regenerasi session untuk keamanan

            return Auth::user()->is_admin
                ? redirect()->route('admin.dashboard')->with('success', 'Selamat datang, Admin!')
                : redirect()->route('dashboard')->with('success', 'Selamat datang di profil Anda!');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput(); // Dengan input agar email tetap terisi
    }
}
