@extends('adminlte::page')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h2>Add Skill</h2>
                </div>
                <div class="col-sm-7">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="col-sm-2">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Add Skill</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Add Skill</h3>
                </div>
                <form id="skill-add" method="POST" action="{{ route('skill.store') }}">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="input-tech-skill">Technical Skill</label>
                            <textarea class="form-control @error('technical_skill_desc') is-invalid @enderror"
                                      name="technical_skill_desc"
                                      id="input-tech-skill"
                                      placeholder="Enter Technical Skill Description">{{ old('technical_skill_desc') }}</textarea>
                            @error('technical_skill_desc')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                        <label for="input-soft-skill">Soft Skill</label>
                        <textarea class="form-control @error('soft_skill_desc') is-invalid @enderror"
                                  name="soft_skill_desc"
                                  id="input-soft-skill"
                                  placeholder="Enter Soft Skill Description">{{ old('soft_skill_desc') }}</textarea>
                        @error('soft_skill_desc')
                        <br>
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('skill.index') }}" class="btn btn-outline-secondary">Cancel</a>
                        <button type="submit" class="btn btn-info">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

