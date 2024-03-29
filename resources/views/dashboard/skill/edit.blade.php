@extends('dashboard.main')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('skill.index') }}" class="btn btn-info">
                                <i class=" ti bi bi-arrow-90deg-left me-1"></i>Kembali</a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <h5 class="card-title fw-semibold mb-1 d-inline">Edit Skill</h5>
                        </div>
                    </div>
                    {!! Form::model($skill, ['method' => 'PATCH', 'route' => ['skills.update', $skill->id]]) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {!! Form::text('name', $skill->name, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <table class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Skill</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($levels as $value)
                                            <tr>
                                                <td> {{ $value->name }}</td>
                                                <td>
                                                    <label>{{ Form::checkbox('levels[]', $value->id, in_array($value->id, $skillLevels) ? true : false, ['class' => 'name']) }}
                                                    </label>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-sd-card"></i> Simpan</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
