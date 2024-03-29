<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    // Menampilkan semua data project
    public function index()
    {
        $projects = Project::all();
        return view('dashboard.project.index', compact('projects'));
    }

    // Menampilkan form untuk membuat data project baru
    public function create()
    {
        return view('dashboard.project.create');
    }

    // Menyimpan data project baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'judul_project' => 'required|string',
            'keterangan' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation for the image
        ]);

        // Upload file gambar jika ada
        $image = $request->file('image');
        $image->storeAs('public/galery/project_images', $image->hashName());
        

        // Simpan data project ke dalam database
        Project::create([
            'judul_project' => $request->judul_project,
            'keterangan' => $request->keterangan,
            'image' => $image->hashName(),// Save the image path in the database
        ]);

        // Redirect ke halaman projects setelah berhasil disimpan
        return redirect()->route('project.index')->with('success', 'Data project berhasil disimpan');
    }

    // Menampilkan data project berdasarkan ID
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.project.show', compact('project'));
    }

    // Menampilkan form untuk mengedit data project
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.project.edit', compact('project'));
    }

    // Update data project dalam database
    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'judul_project' => 'required|string',
            'keterangan' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation for the image
        ]);
    
        $project = Project::findOrFail($id);
    
        // Upload file gambar jika ada
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($project->image) {
                Storage::delete('public/galery/project_images/' . $project->image);
            }
    
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->storeAs('public/galery/project_images', $imageName);
    
            // Update data project dalam database with the new image
            $project->update([
                'judul_project' => $request->judul_project,
                'keterangan' => $request->keterangan,
                'image' => $imageName, // Save the new image path in the database
            ]);
        } else {
            // Update data project dalam database without changing the image
            $project->update([
                'judul_project' => $request->judul_project,
                'keterangan' => $request->keterangan,
            ]);
        }
    
        // Redirect ke halaman projects setelah berhasil diupdate
        return redirect()->route('project.index')->with('success', 'Data project berhasil diupdate');
    }
    

    // Menghapus data project dari database
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();

        // Redirect ke halaman projects setelah berhasil dihapus
        return redirect()->route('project.index')->with('success', 'Data project berhasil dihapus');
    }
}