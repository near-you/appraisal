@extends('adminlte::page')


@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-2">
                    <h2>Skill</h2>
                </div>
                <div class="col-sm-8">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="col-sm-2">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Skill</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Skill</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach( $skills as $skill )

                                <h6 class="card-title"><b>{{ $skill->technical_skills }}</b></h6>
                                <p class="card-text">{{ $skill->technical_skills_desc }}</p>

                                <h6 class="card-title"><b>{{ $skill->soft_skills }}</b></h6>
                                <p class="card-text">{{ $skill->soft_skills_desc }}</p>

                            @endforeach
                            @if($skills->isEmpty())
                                <a href="{{ route('skill.create') }}" class="card-link">Add</a>
                            @endif
                            <a href="{{ route('skill.edit', ["skill" => $skill->id]) }}" class="card-link">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

