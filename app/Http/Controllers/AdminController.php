<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Menambahkan middleware admin
    }

    public function dashboard()
    {
        // Logika untuk menampilkan dashboard admin
        return view('admin.dashboard');
    }
}

