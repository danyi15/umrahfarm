<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\RecordTernak;



use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Tampilkan profil pengguna yang sedang login.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        $record = RecordTernak::all(); // Ambil data dari database
        return view('dashboard', compact('record'));
    }

     public function profile()
    {
        // Mendapatkan data pengguna yang sedang login
        $user = Auth::user();
        // Mengarahkan ke view 'user.profile' dan mengirim data pengguna
        return view('user.profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang sedang login
        return view('user.edit', compact('user')); // Mengirim data ke view edit profile
    }

    // Memperbarui data profil pengguna
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'phone' => 'nullable|string|max:20',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $user = Auth::user(); // Mendapatkan pengguna yang sedang login
        // $user->update($request->only('name', 'email', 'phone')); // Memperbarui data pengguna

        return redirect()->route('user.edit')->with('success', 'Profile updated successfully');
    }


}
