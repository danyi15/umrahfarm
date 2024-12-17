<?php

namespace App\Http\Controllers;
use App\Models\RecordTernak;
use App\Models\VetMonitor;
use Illuminate\Http\Request;

class VetMonitorController extends Controller
{

    public function create()
    {
    // Mengambil data nama sapi dari tabel record_ternak
    $RecordTernak = RecordTernak::select('tag_id', 'name')->get();

    return view('vet-monitor.create', compact('RecordTernak'));
    }


    public function index()
    {
    $records = VetMonitor::all(); // Data VetMonitor
    $RecordTernak = RecordTernak::all(); // Data RecordTernak
    return view('vet-monitor.index', compact('records', 'RecordTernak'));
    }


    // Menyimpan catatan baru
    public function store(Request $request)
    {
        $request->validate([
            'tag_id' => 'required|exists:record_ternak,tag_id', // Validasi foreign key
            'tanggal' => 'required|date',
            'diagnosa' => 'required|string',
            'obat' => 'nullable|string',
            'foto_hewan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'health_status' => 'required|string',
        ]);

        $foto_hewan = null;
        if ($request->hasFile('foto_hewan')) {
            $foto_hewan = $request->file('foto_hewan')->store('uploads/foto_hewan', 'public');
        }

        VetMonitor::create([
            'tag_id' => $request->tag_id,
            'tanggal' => $request->tanggal,
            'diagnosa' => $request->diagnosa,
            'obat' => $request->obat,
            'foto_hewan' => $foto_hewan,
            'health_status' => $request->health_status,
        ]);

        return redirect()->route('vet-monitor.index')->with('success', 'Catatan berhasil disimpan!');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $record = VetMonitor::findOrFail($id);
        return view('vet-monitor.edit', compact('record'));
    }

    // Memperbarui catatan
    public function update(Request $request, $id)
    {
    // Validasi input
    $request->validate([
        'tag_id' => 'required|string',
        'tanggal' => 'required|date',
        'diagnosa' => 'required|string',
        'obat' => 'required|string',
        'health_status' => 'required|string',
        'foto_hewan' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',

    ]);

    // Ambil data berdasarkan id
    $record = VetMonitor::findOrFail($id);

    // Perbarui data
    $record->update([
        'tanggal' => $request->tanggal,
        'diagnosa' => $request->diagnosa,
        'obat' => $request->obat,
        'health_status' => $request->health_status,
    ]);

    // Cek jika ada foto hewan yang diupload
    if ($request->hasFile('foto_hewan')) {
        $path = $request->file('foto_hewan')->store('uploads/foto_hewan');
        $record->foto_hewan = basename($path);
        $record->save();
    }

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('vet-monitor.index')->with('success', 'Catatan kesehatan berhasil diperbarui!');
    }

    // Menghapus catatan
    public function destroy($id)
    {
        $record = VetMonitor::findOrFail($id);
        $record->delete();
        return redirect()->route('vet-monitor.index')->with('success', 'Catatan berhasil dihapus!');
    }
}
