@extends('adminlte::page')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Hobby</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Hobby</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Edit Hobby</h3>
                </div>
                <form id="contact-update" method="POST"
                      action="{{ route('hobbies.update', ["hobby" => $hobby->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="input-hobby-edit">Hobby</label>
                            <input type="text" class="form-control @error('hobbies_title') is-invalid @enderror"
                                   value="{{ old('hobbies_title') ?? $hobby->hobbies_title }}" name="hobbies_title"
                                   id="input-hobby-edit" placeholder="Enter Hobby">
                            @error('hobbies_title')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('hobbies.index') }}" class="btn btn-outline-secondary">Cancel</a>
                            <button type="submit" class="btn btn-info">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

