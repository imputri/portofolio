@extends('dashboard.main')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col">
                            <h5 class="card-title fw-semibold mb-4 d-inline">Data Skill</h5>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <a href="{{ route('skill.create') }}" class="btn btn-sm btn-primary"><i class="bi bi-plus"></i>
                                Tambah</a>
                        </div>
                    </div>
                    <table class="table table-striped" style="width:100%" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Skill Name</th>
                                <th>Persentase Keahlian</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $key => $skill)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $skill->nama_skill }}</td>
                                    <td>{{ $skill->persentase_keahlian }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-info" href="{{ route('skill.show', $skill->id) }}">Show</a>
                                        <a class="btn btn-sm btn-primary" href="{{ route('skill.edit', $skill->id) }}">Edit</a>
                                    
                                        <form action="{{ route('skill.destroy', $skill->id) }}" method="POST" onsubmit="return confirm('Yakin Untuk Menghapus Data ?')" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
