@extends('dashboard.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Create New Biodata</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary mb-2" href="{{ route('biodata.index') }}"> Back </a>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('biodata.store') }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                                    <input type="date" name="tanggal_lahir" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_hp">Nomor HP:</label>
                                    <input type="text" name="no_hp" class="form-control" placeholder="Nomor HP">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="umur">Umur:</label>
                                    <input type="number" name="umur" class="form-control" placeholder="Umur">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kota">Kota:</label>
                                    <input type="text" name="kota" class="form-control" placeholder="Kota">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gelar">Gelar:</label>
                                    <input type="text" name="gelar" class="form-control" placeholder="Gelar">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="foto">Foto:</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="x">Socia Media X:</label>
                                    <input type="text" name="x" class="form-control" placeholder="X">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fb">Facebook:</label>
                                    <input type="text" name="fb" class="form-control" placeholder="Facebook">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ig">Instagram:</label>
                                    <input type="text" name="ig" class="form-control" placeholder="Instagram">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="skype">Skype:</label>
                                    <input type="text" name="skype" class="form-control" placeholder="Skype">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="linkedin">LinkedIn:</label>
                                    <input type="text" name="linkedin" class="form-control" placeholder="LinkedIn">
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
