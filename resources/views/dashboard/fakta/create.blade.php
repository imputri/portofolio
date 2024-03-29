@extends('dashboard.main')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Create New Fakta</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary mb-2" href="{{ route('fakta.index') }}"> Back </a>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('fakta.store') }}">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coffe">Coffe:</label>
                                    <input type="text" name="coffe" class="form-control" placeholder="Coffe">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project">Project:</label>
                                    <input type="text" name="project" class="form-control" placeholder="Project">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jam">Jam:</label>
                                    <input type="number" name="jam" class="form-control" placeholder="Jam">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="candy">Candy:</label>
                                    <input type="text" name="candy" class="form-control" placeholder="Candy">
                                </div>
                            </div>
                            <!-- Add other fields for Fakta as needed -->
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
