@extends('dashboard.main')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('pengalaman.index') }}" class="btn btn-info">
                                <i class="ti bi bi-arrow-90deg-left me-1"></i>Kembali</a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <h5 class="card-title fw-semibold mb-1 d-inline">Keterangan Pengalaman</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama Pengalaman:</strong>
                                {{ $pengalaman->nama_pengalaman }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tahun Pengalaman:</strong>
                                {{ $pengalaman->tahun_mulai }}
                            </div>
                        </div>
                        <!-- Add other fields for Pengalaman as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
