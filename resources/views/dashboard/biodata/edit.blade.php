@extends('dashboard.main')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('biodata.index') }}" class="btn btn-info">
                                <i class="ti bi bi-arrow-90deg-left me-1"></i>Kembali
                            </a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <h5 class="card-title fw-semibold mb-1 d-inline">Edit Biodata</h5>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('biodata.update', $biodata->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama:</strong>
                                    <input type="text" name="nama" value="{{ $biodata->nama }}" placeholder="Nama" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tanggal Lahir:</strong>
                                    <input type="date" name="tanggal_lahir" value="{{ $biodata->tanggal_lahir }}" placeholder="Tanggal Lahir" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>No HP:</strong>
                                    <input type="text" name="no_hp" value="{{ $biodata->no_hp }}" placeholder="No HP" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="email" name="email" value="{{ $biodata->email }}" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Umur:</strong>
                                    <input type="number" name="umur" value="{{ $biodata->umur }}" placeholder="Umur" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Kota:</strong>
                                    <input type="text" name="kota" value="{{ $biodata->kota }}" placeholder="Kota" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Gelar:</strong>
                                    <input type="text" name="gelar" value="{{ $biodata->gelar }}" placeholder="Gelar" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary mt-2"><i class="bi bi-sd-card"></i> Simpan</button>
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
@endsection
