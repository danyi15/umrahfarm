<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function profile()
    {
        // Mengambil data pengguna yang sedang login
        $user = Auth::user();
        // Mengarahkan ke view 'user.profile' dengan data user
        return view('user.profile', compact('user'));
    }
}

