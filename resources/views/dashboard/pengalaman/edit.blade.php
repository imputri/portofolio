@extends('dashboard.main')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('pengalaman.index') }}" class="btn btn-info">
                                <i class="ti bi bi-arrow-90deg-left me-1"></i>Kembali
                            </a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <h5 class="card-title fw-semibold mb-1 d-inline">Edit Pengalaman</h5>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('pengalaman.update', $pengalaman->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Pengalaman:</strong>
                                    <input type="text" name="nama_pengalaman" value="{{ $pengalaman->nama_pengalaman }}" placeholder="Nama Pengalaman" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tahun Mulai:</strong>
                                    <input type="number" name="tahun_mulai" value="{{ $pengalaman->tahun_mulai }}" placeholder="Tahun Pengalaman" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Kerjaan:</strong>
                                    <input type="text" name="kerjaan" value="{{ $pengalaman->kerjaan }}" placeholder="Nama Pengalaman" class="form-control">
                                </div>
                            </div>
                            <!-- Add other fields for Pengalaman as needed -->
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
