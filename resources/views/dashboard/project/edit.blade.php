@extends('dashboard.main')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('project.index') }}" class="btn btn-info">
                                <i class="ti bi bi-arrow-90deg-left me-1"></i>Kembali
                            </a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <h5 class="card-title fw-semibold mb-1 d-inline">Edit Project</h5>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('project.update', $project->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul_project">Project Name:</label>
                                    <input type="text" name="judul_project" value="{{ $project->judul_project }}" placeholder="Project Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="keterangan">Description:</label>
                                    <textarea name="keterangan" placeholder="Description" class="form-control">{{ $project->keterangan }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Image:</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary mt-2"><i class="bi bi-sd-card"></i> Save</button>
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
@endsection
