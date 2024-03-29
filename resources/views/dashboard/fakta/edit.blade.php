@extends('dashboard.main')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('fakta.index') }}" class="btn btn-info">
                                <i class="ti bi bi-arrow-90deg-left me-1"></i>Kembali
                            </a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <h5 class="card-title fw-semibold mb-1 d-inline">Edit Fakta</h5>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('fakta.update', $fakta->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Coffe:</strong>
                                    <input type="text" name="coffe" value="{{ $fakta->coffe }}" placeholder="Coffe" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Project:</strong>
                                    <input type="text" name="project" value="{{ $fakta->project }}" placeholder="Project" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jam:</strong>
                                    <input type="number" name="jam" value="{{ $fakta->jam }}" placeholder="Jam" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Candy:</strong>
                                    <input type="text" name="candy" value="{{ $fakta->candy }}" placeholder="Candy" class="form-control">
                                </div>
                            </div>
                            <!-- Add other fields for Fakta as needed -->
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
