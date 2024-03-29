@extends('dashboard.main')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('pendidikan.index') }}" class="btn btn-info">
                                <i class="bi bi-arrow-90deg-left me-1"></i>Kembali</a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <h5 class="card-title fw-semibold mb-1 d-inline">Edit Hak Akses</h5>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('pendidikan.update', $role->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $role->name }}" placeholder="Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <table class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Role</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($permission as $value)
                                                <tr>
                                                    <td>{{ $value->name }}</td>
                                                    <td>
                                                        <label><input type="checkbox" name="permission[]" value="{{ $value->id }}" {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }} class="name"></label>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-sd-card"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
