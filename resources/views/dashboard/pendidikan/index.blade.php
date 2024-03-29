@extends('dashboard.main')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col">
                            <h5 class="card-title fw-semibold mb-4 d-inline">Data Pendidikan</h5>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <a href="{{ route('pendidikan.create') }}" class="btn btn-sm btn-primary"><i class="bi bi-plus"></i>
                                Tambah</a>
                        </div>
                    </div>
                    <table class="table table-striped" style="width:100%" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenjang Pendidikan</th>
                                <th>Nama Sekolah</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendidikans as $key => $pendidikan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pendidikan->jenjang_pendidikan }}</td>
                                    <td>{{ $pendidikan->nama_sekolah }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-info" href="{{ route('pendidikan.show', $pendidikan->id) }}">Show</a>
                                        <a class="btn btn-sm btn-primary" href="{{ route('pendidikan.edit', $pendidikan->id) }}">Edit</a>
                                    
                                        <form action="{{ route('pendidikan.destroy', $pendidikan->id) }}" method="POST" onsubmit="return confirm('Yakin Untuk Menghapus Data ?')" class="d-inline">
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
