<?php

namespace App\Http\Controllers;
use App\Models\RecordTernak;
use App\Models\StokPakan; // Jika Anda memiliki model StokPakan
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Ambil data dari database
        $record = RecordTernak::all();
        // Mengambil jumlah setiap jenis hewan
        $sapiCount = RecordTernak::where('jenis_hewan', 'Sapi')->count();
        $kambingCount = RecordTernak::where('jenis_hewan', 'Kambing')->count();
        $ayamCount = RecordTernak::where('jenis_hewan', 'Ayam')->count();

        $stokPakan = StokPakan::all(); // Ambil data stok pakan

        // Kirim data ke view 'dashboard'
        return view('dashboard', compact('record', 'stokPakan', 'sapiCount', 'kambingCount', 'ayamCount'));
    }

    public function adminDashboard()
    {
        return view('admin.dashboard'); // pastikan view admin/dashboard.blade.php ada
    }
}
