<?php

namespace App\Http\Controllers;

use App\Models\RecordTernak;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    // Method untuk menampilkan data ternak

    function tampil()
    {
        $record = RecordTernak::get();
        return view('record-ternak', compact('record'));
    }

    // Method untuk menampilkan form tambah ternak
    function tambah()
    {
        return view('tambah-ternak');
    }

    public function showDetailTernak($tag_id) {
        $data = RecordTernak::where('tag_id', $tag_id)->firstOrFail(); // Cari berdasarkan tag_id
        return view('detail-ternak', compact('data'));
    }

    public function showDetailById($tag_id) {
        $data = RecordTernak::where('tag_id', $tag_id)->firstOrFail(); // Menemukan ternak berdasarkan tag_id
        return view('detail-ternak', compact('data')); // Kirim data ke view
    }

    public function edit($tag_id)
    {
    $data = RecordTernak::findOrFail($tag_id);
    // dd($data); // Mengambil data berdasarkan ID
    return view('edit-ternak', compact('data'));// Mengirim data ke view

    }

    public function update(Request $request, $tag_id)
    {
    // Find the existing record by tag_id
    $data = RecordTernak::findOrFail($tag_id);

    // Update the data
    $data->update([
        'name' => $request->input('name'),
        'jenis_hewan' => $request->input('jenis_hewan'),
        'jenis_kelamin' => $request->input('jenis_kelamin'),
        'lahir_beli' => $request->input('lahir_beli'),
        'berat_awal' => $request->input('berat_awal'),
        'tanggal_lahir' => $request->input('tanggal_lahir'),
        'tanggal_beli' => $request->input('tanggal_beli'),
        'harga_beli' => $request->input('harga_beli'),
    ]);

    // Redirect to the detail-ternak page with the updated data
    return redirect()->route('detail.ternak', $data->tag_id)
                     ->with('success', 'Ternak updated successfully!');
    }

    public function destroy($tag_id)
    {
    $data = RecordTernak::findOrFail($tag_id);
    $data->delete();

    return redirect()->route('record.ternak.tampil') // Ganti dengan route yang sesuai
        ->with('success', 'Data ternak berhasil dihapus');
    }

    // Method untuk menangani submit form tambah ternak
    function submit(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'tag_id' => 'required|unique:record_ternak,tag_id|max:255', // validasi tag_id unik
            'name' => 'required|max:255',
            'jenis_hewan' => 'required',
            'jenis_kelamin' => 'required',
            'lahir_beli' => 'required',
            'berat_awal' => 'required|numeric',
            'tanggal_lahir' => 'nullable|date',
            'tanggal_beli' => 'nullable|date',
            'harga_beli' => 'nullable|numeric',
        ]);

        // Menyimpan data ternak ke database
        $record = new RecordTernak();
        $record->tag_id = $request->tag_id; // Menambahkan tag_id
        $record->name = $request->name;
        $record->jenis_hewan = $request->jenis_hewan;
        $record->jenis_kelamin = $request->jenis_kelamin;
        $record->lahir_beli = $request->lahir_beli;
        $record->berat_awal = $request->berat_awal; // Menambahkan berat_awal
        $record->tanggal_lahir = $request->tanggal_lahir;
        $record->tanggal_beli = $request->tanggal_beli;
        $record->harga_beli = $request->harga_beli;

        // Simpan data ke dalam database
        $record->save();

        // Setelah data disimpan, redirect dengan pesan sukses
        return redirect()->route('record.ternak.tampil')->with('success', 'Data ternak berhasil ditambahkan!');
    }


}




