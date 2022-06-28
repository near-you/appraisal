@extends('adminlte::page')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-3">
                    <h2>Edit Skill</h2>
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
                        <li class="breadcrumb-item active">Edit Skill</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Edit Skill</h3>
                </div>
                <form id="skill-update" method="POST"
                      action="{{ route('skill.update', ["skill" => $skill->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="form-group">
                            <label for="input-tech-skill">Skill Title</label>
                            <input type="text" class="form-control @error('technical_skills') is-invalid @enderror"
                                   value="{{ old('technical_skills') ?? $skill->technical_skills }}" name="technical_skills"
                                   id="input-tech-skill" placeholder="Enter Technical Skill">
                            @error('technical_skills')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-tech-skill-desc">Technical Skill Description</label>
                            <textarea class="form-control @error('technical_skills_desc') is-invalid @enderror"
                                      name="technical_skills_desc"
                                      id="input-tech-skill-desc"
                                      placeholder="Enter Technical Skill Description">{{ old('technical_skills_desc') ?? $skill->technical_skills_desc }}</textarea>
                            @error('technical_skills_desc')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-soft-skill">Skill Title</label>
                            <input type="text" class="form-control @error('soft_skills') is-invalid @enderror"
                                   value="{{ old('soft_skills') ?? $skill->soft_skills }}" name="soft_skills"
                                   id="input-soft-skill" placeholder="Enter Soft Skill">
                            @error('soft_skills')
                            <br>
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="input-soft-skill-desc">Soft Skill Description</label>
                            <textarea class="form-control @error('soft_skills_desc') is-invalid @enderror"
                                      name="soft_skills_desc"
                                      id="input-soft-skill-desc"
                                      placeholder="Enter Soft Skill Description">{{ old('soft_skills_desc') ?? $skill->soft_skills_desc }}</textarea>
                            @error('soft_skills_desc')
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

