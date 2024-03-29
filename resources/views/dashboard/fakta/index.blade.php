@extends('dashboard.main')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col">
                            <h5 class="card-title fw-semibold mb-4 d-inline">Data Fakta</h5>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <a href="{{ route('fakta.create') }}" class="btn btn-sm btn-primary"><i class="bi bi-plus"></i>
                                Tambah</a>
                        </div>
                    </div>
                    <table class="table table-striped" style="width:100%" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Coffe</th>
                                <th>Project</th>
                                <th>Jam</th>
                                <th>Candy</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faktas as $key => $fakta)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $fakta->coffe }}</td>
                                    <td>{{ $fakta->project }}</td>
                                    <td>{{ $fakta->jam }}</td>
                                    <td>{{ $fakta->candy }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-info" href="{{ route('fakta.show', $fakta->id) }}">Show</a>
                                        <a class="btn btn-sm btn-primary" href="{{ route('fakta.edit', $fakta->id) }}">Edit</a>
                                    
                                        <form action="{{ route('fakta.destroy', $fakta->id) }}" method="POST" onsubmit="return confirm('Yakin Untuk Menghapus Data ?')" class="d-inline">
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
