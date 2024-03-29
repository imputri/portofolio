@extends('dashboard.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Create New Pendidikan</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary mb-2" href="{{ route('pendidikan.index') }}"> Back </a>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('pendidikan.store') }}">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenjang_pendidikan">Jenjang Pendidikan:</label>
                                    <select name="jenjang_pendidikan" class="form-control select2">
                                        <option value="">-Pilih Jenjang-</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA/K">SMA/K</option>
                                        <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_pendidikan">Nama Pendidikan:</label>
                                    <input type="text" name="nama_pendidikan" class="form-control" placeholder="Nama pendidikan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tahun_masuk">Tahun Masuk:</label>
                                    <input type="text" name="tahun_masuk" class="form-control" placeholder="Tahun Masuk">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tahun_lulus">Tahun Lulus:</label>
                                    <input type="text" name="tahun_lulus" class="form-control" placeholder="Tahun Lulus">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan:</label>
                                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                                </div>
                            </div>
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
