@extends('dashboard.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Create New Skill</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary mb-2" href="{{ route('skill.index') }}"> Back </a>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('skill.store') }}">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Skill Name:</label>
                                    <input type="text" name="nama_skill" class="form-control" placeholder="Skill Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="percentage">Percentage:</label>
                                    <input type="number" name="persentase_keahlian" class="form-control" placeholder="Percentage">
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
