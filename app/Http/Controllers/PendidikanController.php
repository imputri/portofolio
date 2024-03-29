<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    // Menampilkan semua data pendidikan
    public function index()
    {
        $pendidikans = Pendidikan::all();
        return view('dashboard.pendidikan.index', compact('pendidikans'));
    }

    // Menampilkan form untuk membuat data pendidikan baru
    public function create()
    {
        return view('dashboard.pendidikan.create');
    }

    // Menyimpan data pendidikan baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'jenjang_pendidikan' => 'required|string',
            'nama_pendidikan' => 'required|string',
            'tahun_masuk' => 'required|integer',
            'tahun_lulus' => 'required|integer',
            'jurusan' => 'nullable|string',
        ]);

        // Simpan data pendidikan ke dalam database
        Pendidikan::create($request->all());

        // Redirect ke halaman pendidikans setelah berhasil disimpan
        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil disimpan');
    }

    // Menampilkan data pendidikan berdasarkan ID
    public function show($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        return view('dashboard.pendidikan.show', compact('pendidikan'));
    }

    // Menampilkan form untuk mengedit data pendidikan
    public function edit($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        return view('dashboard.pendidikan.edit', compact('pendidikan'));
    }

    // Update data pendidikan dalam database
    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'jenjang_pendidikan' => 'required|string',
            'nama_pendidikan' => 'required|string',
            'tahun_masuk' => 'required|integer',
            'tahun_lulus' => 'required|integer',
            'jurusan' => 'nullable|string',
        ]);

        // Update data pendidikan dalam database
        Pendidikan::findOrFail($id)->update($request->all());

        // Redirect ke halaman pendidikans setelah berhasil diupdate
        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil diupdate');
    }

    // Menghapus data pendidikan dari database
    public function destroy($id)
    {
        Pendidikan::findOrFail($id)->delete();

        // Redirect ke halaman pendidikans setelah berhasil dihapus
        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil dihapus');
    }
}
