<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengalaman;

class PengalamanController extends Controller
{
    // Menampilkan semua data pengalaman
    public function index()
    {
        $pengalamans = Pengalaman::all();
        return view('dashboard.pengalaman.index', compact('pengalamans'));
    }

    // Menampilkan form untuk membuat data pengalaman baru
    public function create()
    {
        return view('dashboard.pengalaman.create');
    }

    // Menyimpan data pengalaman baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nama_pengalaman' => 'required|string',
            'tahun_mulai' => 'required|integer',
            'tahun_selesai' => 'nullable|integer',
            'perusahaan' => 'nullable|string',
            'kerjaan' => 'required|string',
        ]);

        // Simpan data pengalaman ke dalam database
        Pengalaman::create($request->all());

        // Redirect ke halaman pengalamens setelah berhasil disimpan
        return redirect()->route('pengalaman.index')->with('success', 'Data pengalaman berhasil disimpan');
    }

    // Menampilkan data pengalaman berdasarkan ID
    public function show($id)
    {
        $pengalaman = Pengalaman::findOrFail($id);
        return view('dashboard.pengalaman.show', compact('pengalaman'));
    }

    // Menampilkan form untuk mengedit data pengalaman
    public function edit($id)
    {
        $pengalaman = Pengalaman::findOrFail($id);
        return view('dashboard.pengalaman.edit', compact('pengalaman'));
    }

    // Update data pengalaman dalam database
    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'nama_pengalaman' => 'required|string',
            'tahun_mulai' => 'required|integer',
            'tahun_selesai' => 'nullable|integer',
            'kerjaan' => 'required|string',
        ]);

        // Update data pengalaman dalam database
        Pengalaman::findOrFail($id)->update($request->all());

        // Redirect ke halaman pengalamens setelah berhasil diupdate
        return redirect()->route('pengalaman.index')->with('success', 'Data pengalaman berhasil diupdate');
    }

    // Menghapus data pengalaman dari database
    public function destroy($id)
    {
        Pengalaman::findOrFail($id)->delete();

        // Redirect ke halaman pengalamens setelah berhasil dihapus
        return redirect()->route('pengalaman.index')->with('success', 'Data pengalaman berhasil dihapus');
    }
}