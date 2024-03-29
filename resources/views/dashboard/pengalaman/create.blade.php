@extends('dashboard.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Create New Pengalaman</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary mb-2" href="{{ route('pengalaman.index') }}"> Back </a>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('pengalaman.store') }}">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_pengalaman">Nama Pengalaman:</label>
                                    <input type="text" name="nama_pengalaman" class="form-control" placeholder="Nama Pengalaman">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="perusahaan">Perusahaan:</label>
                                    <input type="text" name="perusahaan" class="form-control" placeholder="Perusahaan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tahun_mulai">Tahun Mulai:</label>
                                    <input type="text" name="tahun_mulai" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tahun_selesai">Tahun Selesai:</label>
                                    <input type="text" name="tahun_selesai" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kerjaan">Kerjaan: </label>
                                    <input type="text" name="kerjaan" class="form-control" placeholder="kerjaan">
                                </div>
                            </div>
                            <!-- Add other fields for Pengalaman as needed -->
                            <div class="col-md-12 text-center mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
