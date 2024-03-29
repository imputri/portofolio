<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    // Menampilkan semua biodata
    public function index()
    {
        $biodatas = Biodata::all();
        return view('dashboard.biodata.index', compact('biodatas'));
    }

    // Menampilkan form untuk membuat biodata baru
    public function create()
    {
        return view('dashboard.biodata.create');
    }

    // Menyimpan biodata baru ke dalam database
    public function store(Request $request)
{
    // Validasi input dari form
    $request->validate([
        'nama' => 'required',
        'tanggal_lahir' => 'required|date',
        'no_hp' => 'required',
        'email' => 'required|email',
        'umur' => 'required|integer',
        'kota' => 'required',
        'gelar' => 'required',
        'x' => 'required',
        'ig' => 'required',
        'fb' => 'required',
        'skype' => 'required',
        'linkedin' => 'required',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Simpan biodata ke dalam database
    $image = $request->file('foto');
    $image->storeAs('public/galery/user_image', $image->hashName());

    // Create biodata with image path
    Biodata::create([
        'nama' => $request->nama,
        'tanggal_lahir' => $request->tanggal_lahir,
        'no_hp' => $request->no_hp,
        'email' => $request->email,
        'umur' => $request->umur,
        'kota' => $request->kota,
        'gelar' => $request->gelar,
        'x' => $request->x,
        'ig' => $request->ig,
        'fb' => $request->fb,
        'skype' => $request->skype,
        'linkedin' => $request->linkedin,
        'foto' => $image->hashName(), // Save the image path in the database
    ]);

    // Redirect ke halaman biodata setelah berhasil disimpan
    return redirect()->route('biodata.index')->with('success', 'Biodata berhasil disimpan');
}


    // Menampilkan biodata berdasarkan ID
    public function show($id)
    {
        $biodata = Biodata::find($id);
        return view('dashboard.biodata.show', compact('biodata'));
    }

    // Menampilkan form untuk mengedit biodata
    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('dashboard.biodata.edit', compact('biodata'));
    }

    // Update biodata dalam database
    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'no_hp' => 'required',
            'email' => 'required|email',
            'umur' => 'required|integer',
            'kota' => 'required',
            'gelar' => 'required',
        ]);

        // Update biodata dalam database
        Biodata::findOrFail($id)->update($request->all());

        // Redirect ke halaman biodata setelah berhasil diupdate
        return redirect()->route('biodata.index')->with('success', 'Biodata berhasil diupdate');
    }

    // Menghapus biodata dari database
    public function destroy($id)
    {
        Biodata::findOrFail($id)->delete();

        // Redirect ke halaman biodata setelah berhasil dihapus
        return redirect()->route('biodata.index')->with('success', 'Biodata berhasil dihapus');
    }
}