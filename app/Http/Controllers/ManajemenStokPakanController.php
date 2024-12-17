<?php

namespace App\Http\Controllers;

use App\Models\StokPakan;
use Illuminate\Http\Request;

class ManajemenStokPakanController extends Controller
{
    public function dashboard()
    {
        // Ambil data stok pakan dari database
        $stokPakan = StokPakan::all();
        return view('dashboard', compact('stokPakan'));
    }
    // Tampilkan daftar stok pakan
    public function index()
    {
        // Ambil semua data stok pakan
        $stokPakan = StokPakan::all();
        return view('stok_pakan.index', compact('stokPakan'));
    }

    // Form tambah stok pakan
    public function create()
    {
        return view('stok_pakan.create');
    }

    // Simpan stok pakan baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'jenis_pakan' => 'required|string|max:100',
            'stok_tersisa' => 'required|numeric|min:0',
            'kebutuhan_harian' => 'required|numeric|min:0',
        ]);

        // Hitung perkiraan habis berdasarkan kebutuhan harian
        $perkiraanHabis = $request->kebutuhan_harian > 0
            ? now()->addDays(floor($request->stok_tersisa / $request->kebutuhan_harian))
            : null;

        // Simpan data stok pakan ke database
        StokPakan::create([
            'jenis_pakan' => $request->jenis_pakan,
            'stok_tersisa' => $request->stok_tersisa,
            'kebutuhan_harian' => $request->kebutuhan_harian,
            'perkiraan_habis' => $perkiraanHabis,
        ]);

        // Redirect ke halaman daftar stok pakan dengan pesan sukses
        return redirect()->route('stok_pakan.index')->with('success', 'Stok pakan berhasil ditambahkan.');
    }

    // Form untuk mengedit stok pakan
    public function edit($id)
    {
        $stokPakan = StokPakan::findOrFail($id);
        return view('stok_pakan.edit', compact('stokPakan'));
    }

    // Update data stok pakan
    public function update(Request $request, $id)
    {
        $stokPakan = StokPakan::findOrFail($id);

        // Validasi input
        $request->validate([
            'stok_tersisa' => 'required|numeric|min:0',
            'kebutuhan_harian' => 'required|numeric|min:0',
        ]);


        // Hitung ulang perkiraan habis
        $perkiraanHabis = $request->kebutuhan_harian > 0
            ? now()->addDays(floor($request->stok_tersisa / $request->kebutuhan_harian))
            : null;

        // Update data stok pakan
        $stokPakan->update([
            'jenis_pakan' => $request->jenis_pakan,
            'stok_tersisa' => $request->stok_tersisa,
            'kebutuhan_harian' => $request->kebutuhan_harian,
            'perkiraan_habis' => $perkiraanHabis,
        ]);

        // Redirect ke halaman daftar stok pakan dengan pesan sukses
        return redirect()->route('stok_pakan.index')->with('success', 'Stok pakan berhasil diperbarui.');
    }

    public function destroy($id)
    {
    // Cari data berdasarkan ID
    $stokPakan = StokPakan::findOrFail($id);

    // Hapus data
    $stokPakan->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('stok_pakan.index')->with('success', 'Data stok pakan berhasil dihapus.');
    }

}
